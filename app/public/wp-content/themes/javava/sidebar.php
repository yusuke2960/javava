<div class="sidebar_box">
<form id="form" action="javava" method="get">
    <input id="s-box" name="s" type="text" placeholder="キーワードを入力"/>
    <button type="submit" id="s-btn-area"><div id="s-btn">検索</div></button>
</form>
    <ul>
        <?php
        $args = array(
            'title_li' => '',
        );
        wp_list_categories($args);
        ?>
        <?php
        $args = array(
            'posts_per_page' => 3 //表示件数の指定
        );
        $posts = get_posts($args);
        foreach ($posts as $post) : //ループの開始
            setup_postdata($post); //記事データのセット
        ?>
    </ul>
    <li>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </li>
<?php
        endforeach;
        wp_reset_postdata(); //今回作成したクエリをリセットする
?>
</div>