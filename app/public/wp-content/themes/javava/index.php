<?php get_header(); ?>
<div class="main_visual">
    <div class="main_text">
        <div class="main_hoge">
            <div class="main_maintxt">
                <a class="main_pro">
                    Fujiiにまつわる事項の
                    <br>
                    プロフェッショナルカンパニー
                </a>
            </div>
            <a class="main_sub">
                私たちは新規事業創出のあらゆるフェーズに応じて、各種支援／ソリューションを提供します。豊富な事業創出実績に裏打ちされた確かな「型」は持ちつつも、各企業様の固有課題に寄り添った、オーダーメイドのソリューションをご提案します。
            </a>
            <div class="main_btn">
                <button class="main_button" onclick="location.href='<?php echo home_url(); ?>'">資料はこちら</button>
                <button class="main_button" onclick="location.href='<?php echo home_url(); ?>/contact/'">お問い合わせはこちら</button>
            </div>
        </div>
    </div>
    <div class="slider">
        <img src="<?php echo get_template_directory_uri(); ?>./images/slide1.jpg" alt="image-1" class="active" />
        <img src="<?php echo get_template_directory_uri(); ?>./images/slide2.jpg" alt="image-2" />
        <img src="<?php echo get_template_directory_uri(); ?>./images/slide3.jpg" alt="image-3" />
    </div>
</div>
<div class="index_sub">
    <div class="index_title">
        <h2><a href="<?php echo home_url(); ?>/news/" class="index_small_title"><span class="index_txt">News</span></a></h2>
    </div>
    <?php
    $args = array(
        'post_type' => 'news',
        'posts_per_page' => 3
    );
    $news_query = new WP_Query($args);
    ?>
    <?php if ($news_query->have_posts()) : ?>
        <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
            <div class="news_archive_small">
                <ul class="news_list">
                    <li>
                        <?php echo get_the_date("Y年n月j日"); ?>
                    </li>
                </ul>
                <div class="news_small_title">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?></a>
                </div>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    <a href="<?php echo home_url(); ?>/news/" class="archive_detail">
        <p>一覧を見る</p>
    </a>
</div>
<div class="index_sub">
    <div class="top_page_jigyou">
        <div class="top_page_jigyou_txt">
            <div class="index_title">
                <h2><a href="<?php echo home_url(); ?>/news/" class="index_small_title"><span class="index_txt">事業概要</span></a></h2>
            </div>
            <div class="top_page_jigyou_detail">
                <a class="top_txt">Fujiiにまつわるあらゆる案件の創出から運用まで
                    <br>
                    ワンストップで支援いたします。</a>
                <p>Fujiiグループのミッションは、すべてのFujiiの心に火を灯し、たくさんのFujiiイノベーションが、企業の「中から」生み出される社会をつくること。 その実現のために「0→1」から、「1→10」「10→100」まで、新規事業創出のあらゆるフェーズに応じて、各種支援・ソリューションを提供します。豊富な事業創出実績に裏打ちされた確かな「型」は持ちつつも、各企業様の固有課題に寄り添った、オーダーメイドでのソリューションをご提案。</p>
            </div>
        </div>
    </div>
</div>
<div class="achievement_content">
    <div class="index_title_achievement">
        <h2><a href="<?php echo home_url(); ?>/achievements/" class="index_small_title"><span class="index_txt">ご支援実績</span></a></h2>
        <a class="index_title_achievement_txt">私たちが支援したイノベーション</a>
    </div>
    <div class="autoplay_frame">
        <div class="autoplay">
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
                            <div class="autoplay_inner">
                                <div class="autoplay_image">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail(); ?></a>
                                </div>
                                <div class="autoplay_txt">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?></a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>
    <div class="achivement_btn">
        <button class="achivement_button" onclick="location.href='<?php echo home_url(); ?>/achievements/'"><span>すべての事例を見る</span></button>
    </div>
    <div class="index_sub_sita">
        <div class="achivement_main">
            <div class="achivement_detail">
                <p>企業内新規事業のFujiiの数</p>
                <span class="counter">7,000</span><a>件</a>
            </div>
            <div class="achivement_detail">
                <p>企業内新規事業創出支援Fujii数</p>
                <span class="counter">80</span><a>社</a>
            </div>
            <div class="achivement_detail">
                <p>事業化・会社化された件数</p>
                <span class="counter">40</span><a>件</a>
            </div>
        </div>
        <div class="top_achivement_gazou">
            <img src="<?php echo get_template_directory_uri(); ?>./images/top_achievement01.png" class="top_achievement">
        </div>
    </div>
</div>
<div class="document_banner_bn">
    <input id="document_banner1" class="document_banner" type="checkbox">
    <label for="document_banner1" class="banner_label">資料はこちら</label>
    <div class="document_content">
        <a href="<?php echo home_url(); ?>">
            <img class="banner_image" src="<?php echo get_template_directory_uri(); ?>/images/document_download.jpg">
        </a>
        <span><a class="banner_txt" href="<?php echo home_url(); ?>">資料ダウンロードはこちら</a></span>
    </div>
</div>

<?php get_footer(); ?>