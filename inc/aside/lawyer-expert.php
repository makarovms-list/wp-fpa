<style>
.lawyer__info {
    width: 100%;
    max-width: 390px;
    background-color: transparent!important;
}
.lawyer__info a.btn {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.lawyer__info a.btn svg {
    margin-right: 8px;
}
.lawyer__info a.btn span {
    font-family: 'Inter';
    font-style: normal;
    font-size: 18px;
    line-height: 200%;
    display: flex;
    align-items: center;
    text-align: center;
    color: #FFFFFF;
}
@media (max-width: 768px) {
    .thanks__block-question h1 {
        font-size: 22px!important;
    }
    .thanks__block-question span.title-page--left {
        font-size: 14px!important;
    }
}
</style>
<?php 
    $about = get_field('about'); 
    if (!empty($about['image'])) {
?>
        <div class="lawyer-wrapper">
            <div class="lawyer lawyer--1" data-number="1">
                <img src="<?=$about['image']['url']; ?>" alt="<?=$about['image']['alt']; ?>" title="<?=$about['image']['title']; ?>" loading="lazy">
                <?php if ($about['video'] != '') { ?>
                    <div class="lawyer__info">
                        <a data-fancybox href="<?=$about['video']; ?>" class="btn" formaction="" id="expert-video">
                            <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.5 9C18.5 11.3869 17.5518 13.6761 15.864 15.364C14.1761 17.0518 11.8869 18 9.5 18C7.11305 18 4.82387 17.0518 3.13604 15.364C1.44821 13.6761 0.5 11.3869 0.5 9C0.5 6.61305 1.44821 4.32387 3.13604 2.63604C4.82387 0.948212 7.11305 0 9.5 0C11.8869 0 14.1761 0.948212 15.864 2.63604C17.5518 4.32387 18.5 6.61305 18.5 9ZM8.13875 5.72962C8.05464 5.66974 7.95567 5.63416 7.85269 5.62678C7.7497 5.61941 7.64667 5.64052 7.55488 5.68781C7.4631 5.73509 7.3861 5.80673 7.33232 5.89487C7.27854 5.98301 7.25006 6.08425 7.25 6.1875V11.8125C7.25006 11.9158 7.27854 12.017 7.33232 12.1051C7.3861 12.1933 7.4631 12.2649 7.55488 12.3122C7.64667 12.3595 7.7497 12.3806 7.85269 12.3732C7.95567 12.3658 8.05464 12.3303 8.13875 12.2704L12.0763 9.45787C12.1492 9.40584 12.2086 9.33714 12.2496 9.2575C12.2906 9.17786 12.312 9.08958 12.312 9C12.312 8.91042 12.2906 8.82214 12.2496 8.7425C12.2086 8.66285 12.1492 8.59416 12.0763 8.54212L8.13875 5.72962Z" fill="white"/></svg>
                            <span><?=$about['button_text']; ?></span>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
<?php } ?>