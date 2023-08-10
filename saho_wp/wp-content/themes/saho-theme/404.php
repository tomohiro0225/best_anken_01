<?php get_header(); ?>

  <!-- main -->
  <main>
    <!-- keyVisual -->
    <div class="keyVisual">
      <div class="keyVisual__info">
        <div class="keyVisual__info__wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/img/404/kv-404.png" alt="" class="keyVisual__info__logo">
          <div class="keyVisual__info__sub-catch">エラー</div>
          <div class="keyVisual__info__txt">お探しのページが見つかりませんでした。</div>
        </div>
      </div>
    </div>
    <!-- /keyVisual -->
    
    <!-- breadcrumb -->
    <div class="c-breadcrumb pc-on">
      <ul class="c-breadcrumb__lists">
        <li class="c-breadcrumb__list"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/icon-home-black.png" alt="home"></a></li>
        <li class="c-breadcrumb__list">></li>
        <li class="c-breadcrumb__list"><a href="#">お探しのページが見つかりませんでした</a></li>
      </ul>
    </div>
    <!-- /breadcrumb -->

    <!-- 404 -->
    <section class="page-404 l-section">
      <h2 class="page-404__title">お探しのページが見つかりませんでした。</h2>
      <p class="page-404__txt">申し訳ありません。<br>
        お探しのページは見つかりませんでした。<br>
        URLを確認しもう一度探してみてください。</p>
        <div class="c-btn-large">
          <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/icon-home-black.png" alt="home"><span>RETURN TO HOME</span></a>
        </div>
    </section>
    <!-- /404 -->

    <!-- contact -->
    <?php get_template_part('_inc/l-contact'); ?>
    <!-- /contact -->

    <!-- menu-modal -->
    <?php get_template_part('_inc/menu-modal'); ?>
    <!-- /menu-modal -->
    
  </main>
  <!-- /main -->

  <!-- footer -->
  <?php get_footer(); ?>
  <!-- /footer -->