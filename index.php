<?php get_header(); ?>

<main>
  <div id="mainvisual">
    <img src="<?php echo esc_url(get_theme_file_uri('img/mainvisual.jpg')); ?>" alt="テキストテキストテキスト">
  </div>

  <section id="about" class="wrapper">
    <h2 class="sec-title">About</h2>
    <div class="content">
      <img src="<?php echo esc_url(get_theme_file_uri('img/about.jpg')); ?>" alt="テキストテキストテキスト">
      <div class="text">
        <h3 class="content-title">KAKERU MIYAICHI</h3>
        <p>
          テキストテキストテキストテキストテキストテキストテキスト<br>
          テキストテキストテキストテキストテキストテキストテキスト<br>
          テキストテキストテキストテキストテキストテキストテキスト
        </p>
      </div>
    </div>
  </section>

  <section id="bicycle" class="wrapper">
    <h2 class="sec-title">Bicycle</h2>
<!-- 投稿があるなら -->
    <?php if (have_posts()): ?>
      <ul>
    <!-- コロン構文を使う -->
        <?php while (have_posts()):the_post(); ?>
          <li>
    <!-- 記事固有のリンク -->
            <a href="<?php the_permalink(); ?>">
    <!-- フルサイズのアイキャッチを持ってくる -->
              <img src="<?php the_post_thumbnail_url('full'); ?>" alt="">
    <!-- 記事のタイトルを表示 -->
              <h3 class="content-title"><?php the_title(); ?></h3>
    <!-- 文字数を切り取る。本文を取得する -->
              <p><?php echo wp_trim_words(get_the_content(), 30, '…'); ?></p>
            </a>
          </li>
    <!-- ループ終了 -->
        <?php endwhile; ?>
      </ul>
    <!-- if終了 -->
    <?php endif; ?>
  </section>
</main>

<?php get_footer(); ?>