<?php 
get_header();

/*
    Template Name: News_en
*/
?>

<main class="p-main">
        <div class="container">
            <p class="bread_crumb">
                <a href="<?php echo site_url();?>">TOP</a>&nbsp;>&nbsp
                <a href="<?php echo site_url();?>/news">NEWS_En</a>
            </p>
            <div id="news-page" class="p-news">
                <h1 class="p-article__ttl fade_bottom_ttl">
                    NEWS
                    <div class="ttl-underline"></div>
                </h1>
                <div class="p-news__list fade_bottom_content">
                <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 5,
                        'paged' => $paged,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );
                    $the_query = new WP_Query($args);
                ?>
                    <?php
                        if ($the_query->have_posts()) {
                            while ($the_query->have_posts()) {
                                $the_query->the_post();
                                ?>
                                        <a href="<?php the_permalink(); ?>">
                                    <div class="news-item">
                                        <div>
                                            <p class="news-item__date">
                                                <?php echo get_the_date('Y-m-d'); ?>
                                            </p>
                                            <p class="news-item__content">
                                                <?php the_title(); ?>
                                            </p>
                                        </div>
                                            <svg width="9" height="18" viewBox="0 0 9 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.375 0.75L7.875 9.25L1.375 17.25" stroke="#1B2023" />
                                            </svg>
                                        </div>
                                    </a>
                                <?php
                            }
                        } else {
                            echo 'No articles found.';
                        }
                        wp_reset_postdata();
                    ?> 
                    </div>
                    <div class="c-pagnation">
                        <?php
                        $big = 999999999; // need an unlikely integer
                        echo paginate_links(array(
                            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                            'format' => '?paged=%#%',
                            'current' => max(1, get_query_var('paged')),
                            'total' => $the_query->max_num_pages,
                            'prev_text' => __('« Previous'),
                            'next_text' => __('Next »'),
                        ));
                        ?> 
                    </div>
            </div>
    </main>


    <?php
    get_footer();
    ?>