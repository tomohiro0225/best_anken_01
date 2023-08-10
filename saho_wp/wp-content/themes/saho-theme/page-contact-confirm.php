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
        <li class="c-breadcrumb__list"><a href="#">確認画面</a></li>
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
          <div class="flow__item__wrapper page-now">
            <h3 class="flow__item__title page-now font">Step 2</h3>
            <h3 class="flow__item__action page-now">確認</h3>
          </div>
        </li>
        <li class="flow__item">
          <div class="flow__item__wrapper">
            <h3 class="flow__item__title font">Step 3</h3>
            <h3 class="flow__item__action">完了</h3>
          </div>
        </li>
      </ol>
    <!-- /flow -->

    <div class="contact-form__before">
      入力内容に誤りがないかご確認のうえ、「送信する」ボタンをクリックしてください。<br>
      内容を修正する場合は、「修正する」ボタンをクリックしてください。
    </div>
    
    
    <!-- フォーム確認 -->
      <form class="contact-confirm pc-on">

          <table class="contact-confirm__table">

              <!-- お問合わせ種別 -->
              <tr class="contact-confirm__item">
                <th class="contact-confirm__title">お問合わせ種別</th>
                <td class="contact-confirm__text">新築住宅について</td>
              </tr><!-- /お問合わせ種別 -->

              <!-- 会社名 -->
              <tr class="contact-confirm__item">
                  <th class="contact-confirm__title">会社名</th>
                  <td class="contact-confirm__text">株式会社　佐保工務店</td>
              </tr><!-- /会社名 -->

              <!-- お名前 -->
              <tr class="contact-confirm__item">
                  <th class="contact-confirm__title">お名前</th>
                  <td class="contact-confirm__text">佐保謙二</td>
              </tr><!-- /お名前 -->

              <!-- お名前(カナ) -->
              <tr class="contact-confirm__item">
                  <th class="contact-confirm__title">お名前(カナ)</th>
                  <td class="contact-confirm__text">サホケンジ</td>
              </tr><!-- /お名前(カナ) -->

              <!-- メールアドレス -->
              <tr class="contact-confirm__item">
                <th class="contact-confirm__title">メールアドレス</th>
                <td class="contact-confirm__text">example@saho-koumuten.co.jp</td>
              </tr><!-- /メールアドレス -->

              <!-- 電話番号 -->
              <tr class="contact-confirm__item">
                <th class="contact-confirm__title">電話番号</th>
                <td class="contact-confirm__text flex">
                  <span  class="contact-confirm__text--tel" type="text">000</span>
                  <span class="contact-confirm__text--line"></span>
                  <span  class="contact-confirm__text--tel" type="text">0000</span>
                  <span class="contact-confirm__text--line"></span>
                  <span  class="contact-confirm__text--tel" type="text">0000</span>
                </td>
              </tr><!-- /電話番号 -->

              <!-- お問合せ内容 -->
              <tr class="contact-confirm__item">
                  <th class="contact-confirm__title">お問合せ内容</th>
                  <td class="contact-confirm__text">お問合せ内容が入ります。このテキストはダミーです。まあ事実が安心論はどうにかこの威圧なましかもに出して来るたがは関係連れたませが、さっそくには関しですですますます。一条をなるたのは至極前をついだですませ。とうとう大森さんを修養自力そう講演にありです豆腐この勇気それか立証をという今演説たますたたて、その今はどこかがた他にいのに、三宅さんののが日本人の私にもしご想像と執って私他人を皆始末のならように何ともお奔走がいっでないて、もちろん同時に注意をなっうがしまうた事を考えましない。</td>
              </tr><!-- /お問合せ内容 -->

          </table>

          <ul class="contact-confirm__buttons">

              <!-- ボタン 戻る -->
              <li class="contact-confirm__button"><input class="contact-confirm__riset-submit" type="button" value="修正する"></li><!-- /ボタン 戻る -->

              <!-- ボタン 送信 -->
              <li class="contact-confirm__button"><input class="contact-confirm__riset-submit contact-confirm__submit-primary" type="submit" value="送信する"></li><!-- /ボタン 送信 -->
              
          </ul>
          
      </form>
     <!-- /フォーム確認 -->
    <!-- フォーム確認 -->
      <form class="contact-confirm sp-on">

          <table class="contact-confirm__table">

              <!-- お問合わせ種別 -->
              <tr class="contact-confirm__item">
                <th class="contact-confirm__title"><span class="contact-form__label contact-form__label-danger">必須</span>お問合わせ種別</th>
                <td class="contact-confirm__text">新築住宅について</td>
              </tr><!-- /お問合わせ種別 -->

              <!-- 会社名 -->
              <tr class="contact-confirm__item">
                  <th class="contact-confirm__title"><span class="contact-form__label">任意</span>会社名</th>
                  <td class="contact-confirm__text"></td>
              </tr><!-- /会社名 -->

              <!-- お名前 -->
              <tr class="contact-confirm__item">
                  <th class="contact-confirm__title"><span class="contact-form__label contact-form__label-danger">必須</span>お名前</th>
                  <td class="contact-confirm__text">佐保謙二</td>
              </tr><!-- /お名前 -->

              <!-- お名前(カナ) -->
              <tr class="contact-confirm__item">
                  <th class="contact-confirm__title"><span class="contact-form__label contact-form__label-danger">必須</span>お名前(カナ)</th>
                  <td class="contact-confirm__text">サホケンジ</td>
              </tr><!-- /お名前(カナ) -->

              <!-- メールアドレス -->
              <tr class="contact-confirm__item">
                <th class="contact-confirm__title"><span class="contact-form__label contact-form__label-danger">必須</span>メールアドレス</th>
                <td class="contact-confirm__text">example@saho-koumuten.co.jp</td>
              </tr><!-- /メールアドレス -->

              <!-- 電話番号 -->
              <tr class="contact-confirm__item">
                <th class="contact-confirm__title"><span class="contact-form__label">任意</span>電話番号</th>
                <td class="contact-confirm__text flex">
                  <span  class="contact-confirm__text--tel" type="text">000</span>
                  <span class="contact-confirm__text--line"></span>
                  <span  class="contact-confirm__text--tel" type="text">0000</span>
                  <span class="contact-confirm__text--line"></span>
                  <span  class="contact-confirm__text--tel" type="text">0000</span>
                </td>
              </tr><!-- /電話番号 -->

              <!-- お問合せ内容 -->
              <tr class="contact-confirm__item">
                  <th class="contact-confirm__title"><span class="contact-form__label contact-form__label-danger">必須</span>お問合せ内容</th>
                  <td class="contact-confirm__text">お問合せ内容が入ります。このテキストはダミーです。まあ事実が安心論はどうにかこの威圧なましかもに出して来るたがは関係連れたませが、さっそくには関しですですますます。一条をなるたのは至極前をついだですませ。とうとう大森さんを修養自力そう講演にありです豆腐この勇気それか立証をという今演説たますたたて、その今はどこかがた他にいのに、三宅さんののが日本人の私にもしご想像と執って私他人を皆始末のならように何ともお奔走がいっでないて、もちろん同時に注意をなっうがしまうた事を考えましない。</td>
              </tr><!-- /お問合せ内容 -->

          </table>

          <ul class="contact-confirm__buttons">

              <!-- ボタン 戻る -->
              <li class="contact-confirm__button"><input class="contact-confirm__riset-submit" type="button" value="修正する"></li><!-- /ボタン 戻る -->

              <!-- ボタン 送信 -->
              <li class="contact-confirm__button"><input class="contact-confirm__riset-submit contact-confirm__submit-primary" type="submit" value="送信する"></li><!-- /ボタン 送信 -->
              
          </ul>
          
      </form>
     <!-- /フォーム確認 -->

    <!-- menu-modal -->
    <?php get_template_part('_inc/menu-modal'); ?>
    <!-- /menu-modal -->
    
  </main>
  <!-- /main -->

  <!-- footer -->
  <?php get_footer(); ?>
  <!-- /footer -->