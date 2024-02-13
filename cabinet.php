<?php
/*
    Template Name: Авторизация Gmail
*/
?>
<?php
    require_once 'modules/vendor/autoload.php';

    // init configuration
    $clientID = '182442756685-lsme5kpegkfh56t8u3emujj45rrbofgu.apps.googleusercontent.com';
    $clientSecret = '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';
    $redirectUri = 'https://fpa.ru/cabinet';

    // create Client Request to access Google API
    $client = new Google_Client();
    $client->setClientId($clientID);
    $client->setClientSecret($clientSecret);
    $client->setRedirectUri($redirectUri);
    $client->addScope("email");
    $client->addScope("profile");

    // authenticate code from Google OAuth Flow
    if (isset($_GET['code'])) {
        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
        $client->setAccessToken($token['access_token']);
    
        // get profile info
        $google_oauth = new Google_Service_Oauth2($client);
        $google_account_info = $google_oauth->userinfo->get();
        $first_name = $google_account_info->givenName;
        $last_name = $google_account_info->familyName;
        $middle_name = '';
        $email =  $google_account_info->email;
        $picture = $google_account_info->picture;
        $birth_date = '';
        $contact_phone_number = 'о';
		$residing_place = '';
        $username_arr = explode("@", $email);
        $username = $username_arr[0];
        
        if (!email_exists($email)) {
            $random_password = wp_generate_password(12);
            $user_id = wp_create_user($username, $random_password, $email);
        }
        
        $user_id = email_exists($email);
        $user_id = wp_update_user([
            'ID' => $user_id,
            'display_name' => $first_name." ".$last_name,
            'first_name' => $first_name,
            'last_name' => $last_name
        ]);
    	update_user_meta($user_id, 'middle_name', $middle_name);
    	update_user_meta($user_id, 'contact_phone_number', $contact_phone_number);
    	update_user_meta($user_id, 'user_picture', $picture);
    	update_user_meta($user_id, 'birth_date', $birth_date);
    	update_user_meta($user_id, 'residing_place', $residing_place);
    
        $support_name = "Администратор сайта 'Финансово-Правовой альянс'";
        $support_email = "info@fpa.ru";
        $message = '
            <p>Здраствуйте, '.$first_name." ".$last_name.'</p>
            <p>Вы успешно зарегистрировались на сейте компании ООО "Финансово-Правовой альянс".</p>
            <p>Ваши данные для входа в личный кабинет:</p>
            <p><b>Ссылка на ЛК сайта:</b> https://fpa.ru/lichnyj-kabinet/</p>
            <p><b>Имя пользователя:</b> '.$username.'</p>
            <p><b>Пароль:</b> '.$random_password.'</p>
        ';
        $to = $email;
        $subject = "Вы зарегистрировалист на сайте - fpa.ru [Финансово-Правовой альянс]";
        $headers = 'From: '. $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n";
        $sent = wp_mail($to, $subject, strip_tags($message), $headers);
        $credentials = array(
            'user_login'    => $username,
            'user_password' => $random_password,
        );
        $user_signon = wp_signon($credentials, false);
        if ( !is_wp_error($user_signon) ) {
            get_header();
?>
                <main>
                    <?php get_template_part( 'inc/cabinet/user_detail' ); ?>
                </main>
<?php
            get_footer();
        } else {
            get_header();
?>
                <main>
                    <?php get_template_part( 'inc/sections/online' ); ?>
                </main>
<?php
            get_footer();
        }
    } else {
            get_header();
?>
                <main>
                    <?php get_template_part( 'inc/sections/online' ); ?>
                </main>
<?php
            get_footer();
    }
?>