<?php get_header(); ?>
<div class="page_title">
    <div class="page_title_nav">
        <div class="pabe_title_navs">
            <img src="<?php echo get_template_directory_uri(); ?>/images/homeicon.png">
            <a href="<?php echo home_url(); ?>" class="page_title_navhome">HOME</a>
            >
            <a>問い合わせ</a>
        </div>
        <h1>お問い合わせ</h1>
    </div>
</div>
<div class="content_body">
    <div class="contact_form">
        <div class="contact_top">
            フォームに必要事項をご入力の上ご連絡ください。
            <br>
            担当者が内容を確認いたしまして、ご対応させていただきます。
        </div>
        <div class="contact_form_in">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <!-- 以下の関数で管理画面から入力した内容を表示できる -->
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <script src="<?php echo get_template_directory_uri(); ?>/js/contact.js"></script>
        </div>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>