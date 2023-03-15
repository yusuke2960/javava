<?php get_header(); ?>
<div class="page_title">
    <div class="page_title_nav">
        <div class="pabe_title_navs">
            <img src="<?php echo get_template_directory_uri(); ?>/images/homeicon.png">
            <a href="<?php echo home_url(); ?>" class="page_title_navhome">HOME</a>
            >
            <a>SEARCH</a>
        </div>
        <h1>検索結果</h1>
    </div>
</div>
<div>
    <?php
    if (have_posts() && get_search_query()) :
        while (have_posts()) :
            the_post();
            get_template_part('template-parts/post/content', 'excerpt');
        endwhile;
    ?>

    <?php else : ?>
        <div class="col-full">
            <div class="wrap-col">
                <p>検索キーワードに該当する記事がありませんでした。</p>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>