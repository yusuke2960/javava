<?php get_header(); ?>
<div class="page_title">
    <div class="page_title_nav">
        <div class="pabe_title_navs">
            <img src="<?php echo get_template_directory_uri(); ?>/images/homeicon.png">
            <a href="<?php echo home_url(); ?>" class="page_title_navhome">HOME</a>
            >
            <a>支援実績</a>
        </div>
        <h1>ご支援実績</h1>
    </div>
</div>
<div class="content_body">
    <div class="contact_form">
        <?php
        $args = array(
            'post_type' => 'achievement',
            'posts_per_page' => 6
        );
        $campus_query = new WP_Query($args);
        ?>
        <?php if ($campus_query->have_posts()) : ?>
            <?php while ($campus_query->have_posts()) : $campus_query->the_post(); ?>
                <?php if (has_post_thumbnail()) : ?>
                    <div>
                        <div>
                            <div>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail(); ?></a>
                            </div>
                            <div>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?></a>
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>