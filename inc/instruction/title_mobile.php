<style>
    section.section-title {
        background: #5381F6;
    }
    section.section-title .title-cnt {
        padding: 140px 0;
    }
    section.section-title .title {
        font-family: Inter;
        font-size: 3.25em;
        font-weight: 700;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
        color: #fff;
        margin-bottom: 24px;
    }
    section.section-title .subtitle {
        font-family: Inter;
        font-size: 1.75em;
        font-weight: 500;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
        color: #fff;
    }
    @media (max-width: 992px) {
        section.section-title .title-cnt {
            padding: 100px 0;
        }
        section.section-title .title {
            font-size: 1.6em;
        }
        section.section-title .subtitle {
            font-size: 1.25em;
        }
    }
    @media (max-width: 600px) {
        section.section-title .title-cnt {
            padding: 60px 0;
        }
        section.section-title .title {
            font-size: 1.6em;
        }
        section.section-title .subtitle {
            font-size: 1.125em;
            font-weight: 400;
        }
    }
</style>
<?php
    $title_content = get_field('title_content');
?>
<section class="section-title">
    <div class="container">
        <div class="title-cnt">
            <div class="title"><?=$title_content['title']; ?></div>
            <div class="subtitle"><?=$title_content['subtitle']; ?></div>
        </div>
    </div>
</section>