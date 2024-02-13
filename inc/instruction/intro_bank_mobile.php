<style>
    .section-intro {
        background: #fff;
        /*
        background: url(/wp-content/themes/fpalaw/assets/img/instruction/white-noise.png) center center repeat;
        background-size: cover;
        */
    }
    .section-intro .intro-cnt {
        padding: 120px 0;
    }
    .section-intro .intro-cnt .text p {
        font-family: Inter;
        font-size: 1.125em;
        font-weight: 400;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
    }
    /*
    .section-intro .intro-cnt .coment p strong {
        font-family: Inter;
        font-size: 1em;
        font-weight: 500;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
    }
    */
    .section-intro .intro-cnt blockquote {
        margin-left: 20px;
        margin-right: 0;
        font-family: Inter;
        font-size: 1em;
        font-weight: 400;
        line-height: 145%;
        letter-spacing: 0em;
        text-align: left;
    }
    @media (max-width: 992px) {
        .section-intro .intro-cnt {
            padding: 100px 0;
        }
        .section-intro .intro-cnt .text p {
            font-size: 1em;    
        }
        /*
        .section-intro .intro-cnt .coment p strong {
            font-size: 0.875em;
        }
        */
        .section-intro .intro-cnt blockquote {
            font-size: 0.875em;
        }
    }
    @media (max-width: 600px) {
        .section-intro .intro-cnt {
            padding: 60px 0;
        }
        .section-intro .intro-cnt blockquote {
            font-size: 0.75em;
        }
    }
    @media (max-width: 480px) {
        .section-intro .intro-cnt {
            padding: 40px 0;
        }
        
        
    }
    /*
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
    */
</style>
<?php
    $intro_content = get_field('intro_content');
?>

<?php
    if ($intro_content['text'] != '' || $intro_content['coment'] != '') {
?>
        <section class="section-intro">
            <div class="container">
                <div class="intro-cnt">
                    <div class="text"><?=$intro_content['text']; ?></div>
                    <div class="coment"><?=$intro_content['coment']; ?></div>
                </div>
            </div>
        </section>
<?php
    }
?>