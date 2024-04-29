<?php
    get_header();
?>

<main class="p-main">
        <div class="p-article">
            <div class="container">
                <h3 class="p-article__ttl fade_bottom_ttl">
                <?php the_title(); ?>
                </h3>
                <p class="p-article__date fade_bottom_content">
                    <?php echo date('Y-m-d'); ?>
                </p>
                <div class="p-article__content fade_bottom_content">
                    <?php the_content(); ?>
                </div>
                <div class="p-article__btn">
                    <div>
                        <?php previous_post_link('%link', '                        
                            <svg width="11" height="15" viewBox="0 0 11 15" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 14.1299L2 7.43291L10 1.12988" stroke="#1B2023" stroke-width="2" />
                            </svg>
                            &nbsp;&nbsp;
                            <span>前の記事へ</span>
                        '); ?>
                    </div>
                        <?php next_post_link('%link', 
                            '
                                <span>次の記事へ</span>&nbsp;&nbsp;
                                <svg width="11" height="15" viewBox="0 0 11 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1.12988L9 7.82685L1 14.1299" stroke="#1B2023" stroke-width="2" />
                                </svg>
                            '
                    ); ?>

                            
                    </div>
                </div>
                <button class="inochibtn"><a  href="<?php echo site_url();?>/news">NEWS TOPへ</a></button>
            </div>
        </div>
    </main>

<?php
    get_footer();
?>