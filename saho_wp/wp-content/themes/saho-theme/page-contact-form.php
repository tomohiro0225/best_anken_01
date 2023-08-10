<?php get_header(); ?>

  <!-- main -->
  <main>
    <!-- keyVisual -->
    <div class="keyVisual">
      <div class="keyVisual__info">
        <div class="keyVisual__info__wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/img/common/contact01.png" alt="" class="keyVisual__info__logo">
          <div class="keyVisual__info__sub-catch">お問合せ</div>
          <div class="keyVisual__info__txt">まずは、お気軽にお問合せください。</div>
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
      </ul>
    </div>
    <!-- /breadcrumb -->

    <!-- contact-info -->
    <section class="contact-info">
      <ul class="contact-info__lists">
        <li class="contact-info__list">
            <div class="contact-info__list__logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/contact/phone.png" alt="contact-info-img">
            </div>
            <div class="contact-info__list__logo-line"></div>
            <div class="contact-info__list__text">
              <p class="contact-info__list__text__tel font">06-6721-3452</p>
              <p class="contact-info__list__text__time font">9:00～18:00</p>
              <p class="contact-info__list__text__time">（土・日・祝は休業日）</p>
            </div>
        </li>
        <li class="contact-info__list">
            <div class="contact-info__list__logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/contact/mail.png" alt="contact-info-img">
            </div>
            <div class="contact-info__list__logo-line"></div>
            <p class="contact-info__list__mail">メールでのお問合わせ</p>
        </li>
    </ul>
    
    <div class="contact-info__caution">
      <div class="contact-info__caution__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/contact/caution.png" alt="caution">
      </div>
      <ul class="contact-info__caution__txts">
        <li class="contact-info__caution__txt">
          <p>土日祝日にお送りをいただいたお問合せに関しましては、翌営業日以降（平日）の対応となります。<br>
            また、お問合せ内容により、返信に数日いただく場合がございます。あらかじめご了承ください。</p>
        </li>
        <li class="contact-info__caution__txt">
          <p>携帯などでドメイン指定受信の設定をされている方は「○○○○@○○.jp」からのメールが受信拒否されないよう、ご設定をお願いいたします。</p>
        </li>
      </ul>
    </div>
  </section>
  <!-- /contact-info -->


  <!-- flow -->
    <ol class="flow">
      <li class="flow__item">
        <div class="flow__item__wrapper page-now">
          <h3 class="flow__item__title page-now font">Step 1</h3>
          <h3 class="flow__item__action page-now">入力</h3>
        </div>
      </li>
      <li class="flow__item">
        <div class="flow__item__wrapper">
          <h3 class="flow__item__title font">Step 2</h3>
          <h3 class="flow__item__action">確認</h3>
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
    フォームに必要事項をご入力いただき「入力内容を確認する」ボタンをクリック（タップ）してください。
  </div>

<!-- contact -->   
<secton class="l-section">

    <form class="contact-form">
        <ul class="contact-form__items">

          <!-- アイテム 都道府県 -->
          <li class="contact-form__item">
              <dl>
                  <dt class="contact-form__title">
                    <span class="contact-form__label contact-form__label-danger">必須</span>
                    <span class="contact-form__title--name">お問い合わせ種別</span>
                  </dt>
                  <dd>
                      <select>
                          <option disabled selected style="display: none;">お選びください</option>
                          <option>新築住宅について</option>
                          <option>建て替えについて</option>
                          <option>リフォーム・リノベーションについて</option>
                          <option>設備空調ソリューションについて</option>
                          <option>住宅設備の修理・修繕について</option>
                          <option>求人について</option>
                          <option>その他</option>
                      </select>
                  </dd>
              </dl>
          </li><!-- /アイテム 都道府県 -->

            <!-- アイテム 会社名 -->
            <li class="contact-form__item">
                <dl>
                    <dt class="contact-form__title">
                      <span class="contact-form__label">任意</span>
                      <span class="contact-form__title--name">会社名 </span>
                    </dt>
                    <dd>
                        <input type="text" placeholder="株式会社 佐保工務店">
                    </dd>
                </dl>
            </li><!-- /アイテム 会社名 -->

            <!-- アイテム お名前 -->
            <li class="contact-form__item">
                <dl>
                    <dt class="contact-form__title">
                      <span class="contact-form__label contact-form__label-danger">必須</span>
                      <span class="contact-form__title--name">お名前 </span>
                    </dt>
                    <dd class="contact-form__item__name">
                        <input class="contact-form__item__name--input" type="text" placeholder="佐保">
                        <input class="contact-form__item__name--input" type="text" placeholder="謙二 ">
                    </dd>
                </dl>
            </li><!-- /アイテム お名前 -->

            <!-- アイテム お名前(カナ) -->
            <li class="contact-form__item">
                <dl>
                    <dt class="contact-form__title">
                      <span class="contact-form__label contact-form__label-danger">必須</span>
                      <span class="contact-form__title--name">お名前(カナ) </span>
                    </dt>
                    <dd class="contact-form__item__name">
                        <input class="contact-form__item__name--input" type="text" placeholder="サホ">
                        <input class="contact-form__item__name--input" type="text" placeholder="ケンジ ">
                    </dd>
                </dl>
            </li><!-- /アイテム お名前(カナ) -->

            <!-- アイテム メールアドレス -->
            <li class="contact-form__item">
                <dl>
                    <dt class="contact-form__title">
                      <span class="contact-form__label contact-form__label-danger">必須</span>
                      <span class="contact-form__title--name">メールアドレス </span>
                    </dt>
                    <dd>
                        <input type="text" placeholder="example@saho-koumuten.co.jp">
                    </dd>
                </dl>
            </li><!-- /アイテム メールアドレス -->
            
            <!-- アイテム メールアドレス(確認) -->
            <li class="contact-form__item">
                <dl>
                    <dt class="contact-form__title">
                      <span class="contact-form__label contact-form__label-danger">必須</span>
                      <span class="contact-form__title--name">メールアドレス(確認) </span>
                    </dt>
                    <dd>
                        <input type="text" placeholder="example@saho-koumuten.co.jp">
                    </dd>
                </dl>
            </li><!-- /アイテム メールアドレス(確認) -->

            <!-- アイテム 電話番号 -->
            <li class="contact-form__item">
                <dl>
                    <dt class="contact-form__title">
                      <span class="contact-form__label">任意</span>
                      <span class="contact-form__title--name">電話番号 </span>
                    </dt>
                    <dd class="contact-form__item__tel">
                        <input  class="contact-form__item__tel--input" type="text" placeholder="000">
                        <div class="contact-form__item__tel--line"></div>
                        <input  class="contact-form__item__tel--input" type="text" placeholder="0000">
                        <div class="contact-form__item__tel--line"></div>
                        <input  class="contact-form__item__tel--input" type="text" placeholder="0000">
                    </dd>
                </dl>
            </li><!-- /アイテム 電話番号 -->

            <!-- アイテム お問合せ内容 -->
            <li class="contact-form__item">
                <dl>
                    <dt class="contact-form__title">
                      <span class="contact-form__label contact-form__label-danger">必須</span>
                      <span class="contact-form__title--name">お問合せ内容</span>
                    </dt>
                    <dd  class="contact-form__item__inquiry">
                      <textarea  class="contact-form__item__inquiry--textarea" rows="3" placeholder="お問合せ内容を入力してください"></textarea>
                    </dd>
                </dl>
            </li><!-- /アイテム お問合せ内容 -->

        </ul>

        <!-- プライバシーポリシー同意 -->
        <div class="contact-form__privacy">
          <div class="contact-form__privacy__container">
            <p class="contact-form__privacy__txt pc-on" >※個人情報に関する基本方針については<a target="_blank" href="<?php echo home_url(); ?>/privacy/">個人情報保護方針</a>のページをご参照ください。</p>
            <p class="contact-form__privacy__txt sp-on" >※個人情報に関する基本方針については<br><a target="_blank" href="<?php echo home_url(); ?>/privacy/">個人情報保護方針</a>のページをご参照ください。</p>
              <labelc class="contact-form__privacy__check">
                <span class="contact-form__label contact-form__label-danger">必須</span>
                <input class="check-box" type="checkbox" name="check-name">
                <span class="doui">「個人情報保護方針」に同意する</span>
              </label>
            </div><!-- /プライバシーポリシー同意 -->
          </div>
        
        <!-- ボタン -->
            <input class="contact-form--submit" type="button" value="入力内容を確認する">
            <!-- /ボタン -->
        
    </form>
</secton>
<!-- /contact -->

    <!-- menu-modal -->
    <?php get_template_part('_inc/menu-modal'); ?>
    <!-- /menu-modal -->
    
  </main>
  <!-- /main -->

  <!-- footer -->
  <?php get_footer(); ?>
  <!-- /footer -->