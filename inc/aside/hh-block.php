<?php 
    $promo_block = get_field('promo_block'); 
    $jobs_posts_hh = get_posts([
        'post_type' => 'jobs',
        'post_status' => 'publish',
        'numberposts' => 1000,
        'order'    => 'DESC'
    ]);
    $promo_block_text = '';
    $x = $jobs_posts_hh;
    $y = 10;
    $r = fmod($x, $y);
    // Значение переменной $r равно 0.5, потому что 4 * 1.3 + 0.5 = 5.7
    
    if ($r == 0) {
        $promo_block_text = count($jobs_posts_hh).' вакансий на сайте';
    }
    if ($r == 1) {
        $promo_block_text = count($jobs_posts_hh).' вакансия на сайте';
    }
    if ($r > 1 && $r < 5) {
        $promo_block_text = count($jobs_posts_hh).' вакансии на сайте';
    }
    if ($r > 4 && $r < 10) {
        $promo_block_text = count($jobs_posts_hh).' вакансий на сайте';
    }
?>
<div class="hh-block">
  <p class="career__mob-title">Что мы можем вам&nbsp;дать?</p>
  <div class="career__hh hh">
    <div class="hh__video">
      <div class="youtube youtube__no-bdrs" data-embed="<?php echo $promo_block['video']; ?>">
        <div class="youtube__button">
          <svg>
            <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#play"></use>
          </svg>
        </div>
      </div>
    </div>
    <div class="hh__footer">
      <span class="hh__logo">
        <svg>
          <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#hh"></use>
        </svg>
      </span>
      <div class="hh__info">
        <span class="hh__vac"><?php echo $promo_block_text; /*$promo_block['text'];*/ ?></span>
        <a class="btn hh__link" href="<?php echo $promo_block['link']; ?>" target="_blank" rel="nofollow" title="Вы переходите на сайт Группы компаний HeadHunter по Санкт-Петербургу.">Перейти <svg>
            <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#in"></use>
          </svg>
        </a>
      </div>
    </div>
  </div>
</div>