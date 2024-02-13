<div class="review-item-cnt">
    <div class="review-row">
        <div class="review-col">
            <?php
                $min=2;
                $max=16;
                $round_class = "avatar-color-".rand($min,$max);
            ?>
            <div class="avatar-round-color">
                <div class="avatar-round-color-wrap <?=$round_class; ?>">
                    <?php 
                        $get_title =  get_the_title(); 
                        $ltr_group = substr($get_title, 0, 2);
                    ?>
                    <span><?=$ltr_group; ?></span>
                </div>
            </div>
            <!--<img src="/wp-content/themes/fpalaw/assets/img/landing/review-people.png" />-->
        </div>    
        <div class="review-col">
            <div class="name"><?php the_title() ?></div>
            <div class="review-col-row">
                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13 18.7091L17.4959 21.4282C18.3192 21.9266 19.3267 21.1899 19.11 20.2582L17.9184 15.1449L21.8942 11.6999C22.62 11.0716 22.23 9.87991 21.2767 9.80408L16.0442 9.35991L13.9967 4.52824C13.6284 3.65074 12.3717 3.65074 12.0034 4.52824L9.95585 9.34908L4.72335 9.79324C3.77002 9.86908 3.38002 11.0607 4.10585 11.6891L8.08168 15.1341L6.89002 20.2474C6.67335 21.1791 7.68085 21.9157 8.50418 21.4174L13 18.7091Z" fill="#FFCC01"/></svg>
                <span class="star-count"><?php the_field('star_count'); ?></span>
                <span class="date"><?php echo get_the_date('j F Y'); ?> г.</span>
            </div>
        </div>
    </div>
    <div class="review-row">
        <?php the_content() ?>
    </div>
</div>
