<?php get_header(); ?>

  <!-- main -->
  <main>
    <!-- keyVisual -->
    <div class="keyVisual">
      <div class="keyVisual__info">
        <div class="keyVisual__info__wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/works.png" alt="" class="keyVisual__info__logo">
          <div class="keyVisual__info__sub-catch">実績紹介</div>
          <div class="keyVisual__info__txt">企画・設計・施工の事例を紹介いたします。</div>
        </div>
      </div>
      
      <!-- contact-btn  -->
      <ul class="c-contact pc-on">
        <li class="c-contact__item">
          <div class="c-contact__wrapper">
            <div class="c-contact__item__logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/common/c-contact01.png" alt="call">
            </div>
            <p class="c-contact__item__name">call</p>
          </div>
        </li>
        <li class="c-contact__item">
          <div class="c-contact__wrapper">
            <div class="c-contact__item__logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/common/c-contact02.png" alt="contact">
            </div>
            <p class="c-contact__item__name">contact</p>
          </div>
        </li>
      </ul>
      <!-- /contact-btn -->
    </div>
    <!-- /keyVisual -->
    
    <!-- breadcrumb -->
    <div class="c-breadcrumb pc-on">
      <ul class="c-breadcrumb__lists">
        <li class="c-breadcrumb__list"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/icon-home-black.png" alt="home"></a></li>
        <li class="c-breadcrumb__list">></li>
        <li class="c-breadcrumb__list"><a href="#">実績紹介</a></li>
      </ul>
    </div>
    <!-- /breadcrumb -->

    <!-- keywords -->
    <div class="keywords">
      <div class="keywords__title">
        <p class="keywords__title--en font">KEYWORDS</p>
        <p class="keywords__title--ja">キーワード</p>
        <div class="keywords__title--line"></div>
      </div>
      <ul class="keywords__list">
        <?php 
          $posttags = get_tags();
          if ($posttags) : 
            foreach($posttags as $tag) :
        ?>
        <li class="keywords__item">
            <p>
              <a href="<?php echo get_tag_link($tag->term_id); ?>" class="keywords__item--button"><?php echo $tag->name; ?></a>
            </p>
        </li>
        <?php endforeach; endif; ?>
        <p class="keywords__more">+</p>
      </ul>
      <div class="keywords__title--line"></div>
    </div>
    <!-- /keywords -->

    <!-- contents -->
    <div class="l-section work">
        <ul class="works">
            <?php 
              $tag = get_queried_object();
              $args = array(
                'tag' => $tag->slug,
                'post_type' => 'works',//ポストタイプのスラッグ
                'order' => 'DESC',//並び順、DESCは最新ジュン
                'posts_per_page' => -1//何件表示するか？
                );
              $my_query = new WP_Query($args);//my_queryにargsを入れている
              if($my_query->have_posts()) :
              while ($my_query->have_posts()) : $my_query->the_post();
            ?>
            <!-- アイテム -->
            <li class="works__item">
                <a href="<?php the_permalink(); ?>">

                    <!-- 画像 -->
                    <figure class="works__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/works/works-img01.png" alt="">
                    </figure><!-- /画像 -->

                    <dl class="works__info">

                        <!-- 日付 & ラベル -->
                        <dt class="works__title"><?php echo get_field(''); ?> <?php echo the_title(); ?></dt><!-- /日付 & ラベル -->

                        <!-- テキスト -->
                        <dd>
                          <div class="works__text"><?php echo the_content(); ?></div>
                          <div class="works__labels">
                            <?php the_tags('<div class="works__label">','</div><div class="works__label">','</div>'); ?>
                          </div>
                        </dd><!-- /テキスト -->

                    </dl>
                </a>
            </li><!-- /アイテム -->
            
          <?php endwhile; endif; ?>
            

        </ul>
    </div>
    <!-- /contents -->  

    <!-- pager -->
    <?php get_template_part('_inc/pager'); ?>
    <!-- /pager -->

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