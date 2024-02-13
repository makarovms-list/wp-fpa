<style>
.thanks__lst--ul .thanks__lst-item {
    display: grid;
    grid-template-rows: auto;
    grid-template-columns: 20px calc(100% - 20px);
    grid-column-gap: 16px;
    grid-row-gap: 16px;
    align-items: center;    
}
.thanks__lst--ul .thanks__lst-item::before {
    display: none;
}
.thanks__lst--ul .thanks__lst-item span {
    font-family: Inter;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 145%;
    color: #3C70F4;
}
h1 {
    display: none;
}
</style>
<div class="thanks">
  <div class="thanks__block-question">
    <h1 class="title-page title-page--left">Вам перезвонит адвокат Окладников И.В. и проконсультирует по вопросам</h1>
    <span class="title-page title-page--left">Мы перезвоним вам по номеру телефона: <span class="top__title--accent">+7 900 987-65-43</span></span>
    
    <div class="thanks__inner">
      <p class="thanks__text">В ходе телефонного разговора вы подробно расскажете о своей ситуации и мы определим, подходите ли вы под условия бесплатной процедуры банкротства, а также ответим на все вопросы.</p>
    </div>
  </div>
  
  <?php get_template_part( 'inc/sections/thanks-block-guarantees' ); ?>
  <?php get_template_part( 'inc/sections/thanks-block-reso' ); ?>
  <?php get_template_part( 'inc/sections/thanks-block-attention' ); ?>
  
</div>