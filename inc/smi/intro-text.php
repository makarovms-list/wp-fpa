<style>
body.page-template-mobilepage-smi .section.top-m .top-m__wrap {
    display: grid;
    grid-template-rows: auto;
    grid-template-columns: calc(65% - 8px) calc(35% - 8px);
    grid-column-gap: 16px;
    grid-row-gap: 16px;
    align-items: center;
    min-height: auto;
    padding: 20px 0;    
}
body.page-template-mobilepage-smi .section.top-m .section_top-m-bg {
	position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
	z-index: 2;
	background-size: cover;
    background-position: center bottom;
    background-repeat: no-repeat;
    opacity: .08;
}
.top-m::before {
	display: none;
}
.top-m__wrap figure {
    position: relative;
    margin: 0;
}
.top-m__wrap figcaption {
    background: rgba(255, 255, 255, 0.85);
    box-shadow: 0px 4px 14px rgba(0, 37, 102, 0.1);
    border-radius: 4px;    
    padding: 10px;
    position: absolute;
    bottom: 0;
    right: 0;
    max-width: 360px;
}
.top-m__wrap figcaption .name {
    display: block;
    font-weight: 500;
    font-size: 18px;
    line-height: 145%;
    color: #393939;    
}
.top-m__wrap figcaption .post {
    display: block;
    font-weight: 400;
    font-size: 14px;
    line-height: 145%;
    color: #393939;   
}
@media (max-width: 782px) {
    .top-m__wrap figcaption .name {
        font-size: 16px;
    }
    .top-m__wrap figcaption .post {
        font-size: 14px;
    }   
}
@media (max-width: 540px) {
    .top-m__wrap figcaption .name {
        font-size: 16px;
    }
    .top-m__wrap figcaption .post {
        font-size: 14px;
    }   
}
@media (max-width: 440px) {
    .top-m__wrap figcaption .name {
        font-size: 16px;
    }
}
@media (max-width: 380px) {
    .top-m__wrap figcaption .name {
        font-size: 14px;
    }
    .top-m__wrap figcaption .post {
        font-size: 12px;
    } 
}
</style>
<section class="section section--main top-m">
  <div style="background-image: url('/wp-content/themes/fpalaw/assets/img/top/bg.webp')" data-bg="/wp-content/themes/fpalaw/assets/img/top/bg.png" data-bg-webp="/wp-content/themes/fpalaw/assets/img/top/bg.webp" class="section_top-m-bg"></div>
  <div class="container">
    <div class="top-m__wrap">
      <div class="top-m__content">
        <h1 class="top-m__title">Ведущие СМИ доверяют мнению экспертов нашей компании</h1>
        <p class="top-m__text">Компания «Финансово-правовой Альянс» занимает активную публичную позицию. Наши юристы регулярно пишут аналитические, информационные и практические статьи для ведущих СМИ Петербурга, Москвы и других регионов, делятся экспертными комментариями и дают интервью.</p>
      </div>
      <figure>
        <picture>
          <img class="top-m__image__" alt="Фото руководителя юридического департамента по банкротству" src="<?= get_template_directory_uri() ?>/assets/img/smi/ilya-viktorovich.png">
        </picture>    
        <figcaption>
          <span class="name">Окладников Илья Викторович</span>
          <span class="post">Руководитель юридического департамента по банкротству</span>
        </figcaption>  
      </figure>
      
    </div>
  </div>
</section>
