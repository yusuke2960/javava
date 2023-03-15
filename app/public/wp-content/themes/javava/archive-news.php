<?php get_header(); ?>
<div class="page_title">
    <div class="page_title_nav">
        <div class="pabe_title_navs">
            <img src="<?php echo get_template_directory_uri(); ?>/images/homeicon.png">
            <a href="<?php echo home_url(); ?>" class="page_title_navhome">HOME</a>
            >
            <a>News</a>
        </div>
        <h1>News</h1>
    </div>
</div>
<div class="content_body">
    <div class="contact_form">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="news_category_txt">
                    <ul>
                        <div class="news_date">
                            <span><?php echo get_the_date("Y年n月j日"); ?></span>
                        </div>
                        <div class="news_title_txt">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </div>
                        <div class="news_archive_detail">
                            <?php echo wp_trim_words(get_the_content(), 100, '...'); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="news_btn"><p>詳細を見る</p></a>
                    </ul>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>