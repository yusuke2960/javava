<!DOCTYPE html>


<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.1.0/jquery-migrate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <?php wp_head(); ?>
</head>

<body>
<div class="hoge">
    <header>
        <div class="header_nav">
            <div class="header_logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>./images/logo.png">
                </a>
            </div>
            <div class="header_navbar">
                <a class="navbar_item" href="<?php echo home_url(); ?>/news/"><span>ニュース</span></a>
                <a class="navbar_item" href="<?php echo home_url(); ?>/jigyou/"><span>事業内容</span></a>
                <a class="navbar_item" href="<?php echo home_url(); ?>/company/"><span>会社情報</span></a>
                <a class="navbar_item" href="<?php echo home_url(); ?>/achievements/"><span>実績情報</span></a>
                <a class="navbar_item" href="<?php echo home_url(); ?>/contact/"><span>お問い合わせ</span></a>
            </div>
        </div>
    </header>