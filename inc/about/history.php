<?php 
  $history = get_field('our_history'); 
  $chronicle = $history['chronicle']
?>

<section class="section section--main history">
  <div class="container">
    <h2 class="title-page"><?php echo $history['title']; ?></h2>
    <p class="history__text"><?php echo $history['text']; ?></p>
    <ul class="history__lst">
      <li class="history__item">
        <div class="history__point">
          <span class="history__icon"></span>
        </div>
        <span class="history__date"><?php echo $chronicle['age_1']; ?></span>
        <span class="history__desc"><?php echo $chronicle['desc_1']; ?></span>
      </li>
      <li class="history__item">
        <div class="history__point">
          <span class="history__icon history__icon--active"></span>
        </div>
        <span class="history__date"><?php echo $chronicle['age_2']; ?></span>
        <span class="history__desc"><?php echo $chronicle['desc_2']; ?></span>
      </li>
      <li class="history__item">
        <div class="history__point">
          <span class="history__icon history__icon--active"></span>
        </div>
        <span class="history__date"><?php echo $chronicle['age_3']; ?></span>
        <span class="history__desc"><?php echo $chronicle['desc_3']; ?></span>
      </li>
      <li class="history__item">
        <div class="history__point">
          <span class="history__icon"></span>
        </div>
        <span class="history__date"><?php echo $chronicle['age_4']; ?></span>
        <span class="history__desc"><?php echo $chronicle['desc_4']; ?></span>
      </li>
      <li class="history__item">
        <div class="history__point">
          <span class="history__icon history__icon--active"></span>
        </div>
        <span class="history__date"><?php echo $chronicle['age_5']; ?></span>
        <span class="history__desc history__desc--active"><?php echo $chronicle['desc_5']; ?></span>
      </li>
    </ul>
  </div>
</section>