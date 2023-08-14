<?php get_header(); ?>

  <!-- main -->
  <main>
    <!-- keyVisual -->
    <div class="keyVisual">
      <div class="keyVisual__info">
        <div class="keyVisual__info__wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/works.png" alt="" class="keyVisual__info__logo">
          <div class="keyVisual__info__sub-catch">実績紹介</div>
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
        <li class="c-breadcrumb__list">></li>
        <li class="c-breadcrumb__list"><a href="#"><?php echo get_field('works_client'); ?> <?php echo the_title(); ?></a></li>
      </ul>
    </div>
    <!-- /breadcrumb -->

    <!-- works-detail -->
    <section class="works-detail">
      <!-- works更新日時など -->
      <div class="works-detail__content-up">
        <p class="works-detail__date">
          <span class="works-detail__date--new">NEW</span>
          <img src="<?php echo get_template_directory_uri(); ?>/img/works/time.png" alt="time" class="works-detail__date--icon">
          <span class="works-detail__date--date font"><?php echo get_field('works_date'); ?></span>
          <span class="works-detail__date--date"> 更新</span>
        </p>
        <p class="works-detail__visitor"><?php echo get_field('works_client'); ?></p>
        <h2 class="works-detail__name">Rビル業務用エアコン更新工事</h2>
        <div class="works__labels">
          <?php the_tags('<div class="works__label">','</div><div class="works__label">','</div>'); ?>
        </div>
        <div class="works-detail__img">
                <img src="<?php echo get_field('works_img'); ?>" alt="<?php echo the_title(); ?>">
        </div>
      </div>
      <!-- /works更新日時など -->
      
      <!-- worksデータなど -->
      <div class="works-detail__content-down bg-gray">
        <div class="works-detail__content-down__inner">
          <!-- works-detail__data -->
          <div class="works-detail__data">
            <div class="works-detail__data__title">
              <p class="works-detail__data__title--en font">DATA</p>
              <p class="works-detail__data__title--ja">データ</p>
              <div class="works-detail__data__title--line"></div>
            </div>
            <dl>
              <dt>物件名</dt>
              <dd><?php echo get_field('works_build_name'); ?></dd>
              <dt>業態</dt>
              <dd><?php echo get_field('works_build_type'); ?></dd>
              <dt>構造</dt>
              <dd><?php echo get_field('works_build_structure'); ?></dd>
              <dt>着工</dt>
              <dd><?php echo get_field('works_build_start'); ?></dd>
              <dt>竣工</dt>
              <dd><?php echo get_field('works_build_end'); ?></dd>
            </dl>
            <div class="works-detail__data__title--line"></div>
          </div>
          <!-- /works-detail__data -->
  
          <div class="works-detail__txt">
            <?php echo get_field('works_build_desc'); ?>
          </div>
        </div>
      
      </div>
      <!-- worksデータなど -->

    </section>
    <!-- /works-detail -->

    <!-- before-after -->
    <section class="l-section before-after">
      <h2 class="c-sectionTitle">
        <div class="c-sectionTitle__ttl">
          <img src="<?php echo get_template_directory_uri(); ?>/img/works/before.png" alt="before">
          <img src="<?php echo get_template_directory_uri(); ?>/img/works/arrow-black.png" alt="arrow">
          <img src="<?php echo get_template_directory_uri(); ?>/img/works/after.png" alt="after">
        </div>
        <span class="c-sectionTitle__ttl--ja">ビフォーアフター</span>
      </h2>

      <div class="before-after__inner">
          
          <!-- before/after -->
          <div class="before-after__flow">
              <div class="before-after__before">
                <img src="<?php echo get_field('works_before'); ?>" alt="Before Image">
              </div>
              <div class="before-after__arrow">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/works/arrow-white.png" alt="arrow">
              </div>
              <div class="before-after__after">
                <img src="<?php echo get_field('works_after'); ?>" alt="After Image">
              </div>
          </div>
  
          <div class="before-after__info">
            <h3 class="before-after__title"><?php echo get_field('works_bf_title'); ?></h3>
            <div class="before-after__txt"><?php echo get_field('works_bf_desc'); ?></div>
          </div>
      </div>
  
  </section>
  <!-- /before-after -->

    <!-- gallery -->
    <section class="gallery">
      <div class="l-section">
        <h2 class="c-sectionTitle">
          <div class="c-sectionTitle__ttl">
            <img src="<?php echo get_template_directory_uri(); ?>/img/works/gallery.png" alt="gallery">
          </div>
          <span class="c-sectionTitle__ttl--ja">ギャラリー</span>
        </h2>

          <!-- 画像 -->
          <ul class="gallery__items">
          <?php foreach (SCF::get('実績の施工画像') as $field_name => $field_value) : ?>
            <?php
              $carousel_thumbnail = wp_get_attachment_image_src($field_value['works_imgs'], 'contain');
              $carousel_thumbnail = esc_url($carousel_thumbnail[0]);
              if (!$carousel_thumbnail) {
                $carousel_thumbnail =  'https://placehold.jp/584x390.png';
              }
            ?>
            <img src="<?php echo $carousel_thumbnail; ?>" alt="<?php echo the_title(); ?>" class="gallery__item">
            <?php endforeach; ?>
          </ul><!-- /画像 -->

        <a href="#" class="c-btn">
          <span><img src="<?php echo get_template_directory_uri(); ?>/img/works/square-black.png">View ALL</span>
          <span><img src="<?php echo get_template_directory_uri(); ?>/img/works/square-white.png">一覧に戻る</span>
        </a>
    </section>
    <!-- /gallery -->

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