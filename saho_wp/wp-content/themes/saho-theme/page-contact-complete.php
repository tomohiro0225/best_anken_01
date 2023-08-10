<?php get_header(); ?>

  <!-- main -->
  <main>
    <!-- keyVisual -->
    <div class="keyVisual">
      <div class="keyVisual__info">
        <div class="keyVisual__info__wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/img/common/contact01.png" alt="" class="keyVisual__info__logo">
          <div class="keyVisual__info__sub-catch">お問合せ</div>
        </div>
      </div>
    </div>
    <!-- /keyVisual -->
    
    <!-- breadcrumb -->
    <div class="c-breadcrumb pc-on">
      <ul class="c-breadcrumb__lists">
        <li class="c-breadcrumb__list"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/common/icon-home-black.png" alt="home"></a></li>
        <li class="c-breadcrumb__list">></li>
        <li class="c-breadcrumb__list"><a href="#">お問合せ</a></li>
        <li class="c-breadcrumb__list">></li>
        <li class="c-breadcrumb__list"><a href="#">完了画面</a></li>
      </ul>
    </div>
    <!-- /breadcrumb -->


    <!-- flow -->
    <ol class="flow">
      <li class="flow__item">
        <div class="flow__item__wrapper">
          <h3 class="flow__item__title font">Step 1</h3>
          <h3 class="flow__item__action">入力</h3>
        </div>
      </li>
      <li class="flow__item">
        <div class="flow__item__wrapper">
          <h3 class="flow__item__title font">Step 2</h3>
          <h3 class="flow__item__action">確認</h3>
        </div>
      </li>
      <li class="flow__item">
        <div class="flow__item__wrapper page-now">
          <h3 class="flow__item__title page-now font">Step 3</h3>
          <h3 class="flow__item__action page-now">完了</h3>
        </div>
      </li>
    </ol>
  <!-- /flow -->

        <!-- 完了画面 -->
        <div class="contact-complete">

                <!-- 見出し -->
                <p class="contact-complete__title">
                  送信が完了しました。<br>
                  お問合せありがとうございました。
                </p>
                <!--  /見出し -->

                <!-- 確認後 -->
                <p class="contact-complete__txt">内容を確認後、担当者よりメールにてご連絡いたします。</p>
                <!-- /確認後 -->

                <!-- 再度お問い合わせ -->
                <p class="contact-complete__txt">
                  ご入力をいただいたメールアドレスに自動返信メールを送らせていただきました。<br>
                  メールが届かない場合は、メールアドレスが間違っている可能性がございます。<br>
                  その際は、お手数をお掛けしますが再度お問合せをお願いいたします。
                </p>
                <!-- /再度お問い合わせ -->

                <!-- ボタン -->
                <div class="c-btn-large">
                  <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/common/icon-home-black.png" alt="home"><span>RETURN TO HOME</span></a>
                </div>
                <!-- /ボタン -->


          </div>
        <!-- /完了画面 -->

    <!-- menu-modal -->
    <?php get_template_part('_inc/menu-modal'); ?>
    <!-- /menu-modal -->
    
  </main>
  <!-- /main -->

  <!-- footer -->
  <?php get_footer(); ?>
  <!-- /footer -->