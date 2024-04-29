<?php 
get_header();

/*
    Template Name: Contact
*/
?>

<main class="p-main">
        <div class="container">
            <p class="bread_crumb">
                <a href="<?php echo site_url();?>">TOP</a>&nbsp;>&nbsp
                <a href="<?php echo site_url();?>/contact">CONTACT</a>
            </p>
            <div class="p-contact">
                <h1 class="p-contact__ttl fade_bottom_ttl">
                    CONTACT
                    <div class="ttl-underline"></div>
                </h1>
                <p class="p-contact__description fade_bottom_content">
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </p>
                <?php echo do_shortcode('[contact-form-7 id="5907669" title="Contact US"]'); ?>
                
            </div>
        </div>

    </main>






<?php
    get_footer();
?>