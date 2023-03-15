<?php get_header(); ?>
<div class="page_title">
    <div class="page_title_nav">
        <div class="pabe_title_navs">
            <img src="<?php echo get_template_directory_uri(); ?>/images/homeicon.png">
            <a href="<?php echo home_url(); ?>" class="page_title_navhome">HOME</a>
            >
            <a><?php the_title(); ?></a>
        </div>
        <h1><?php the_title(); ?></h1>
    </div>
</div>
<div class="content_body">
    <div class="contact_form">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>