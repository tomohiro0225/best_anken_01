<?php get_header(); ?>

  <!-- main -->
  <main>
    <!-- keyVisual -->
    <div class="keyVisual">
      <div class="keyVisual__info">
        <div class="keyVisual__info__wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/img/member/kv-member.png" alt="" class="keyVisual__info__logo">
          <div class="keyVisual__info__sub-catch">メンバー紹介</div>
          <div class="keyVisual__info__txt">佐保工務店のメンバーを紹介いたします。</div>
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
        <li class="c-breadcrumb__list"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/common/icon-home-black.png" alt="home"></a></li>
        <li class="c-breadcrumb__list">></li>
        <li class="c-breadcrumb__list"><a href="#">メンバー紹介</a></li>
      </ul>
    </div>
    <!-- /breadcrumb -->

    <!-- member -->
    <section class="member l-section">
      <p class="member__anciety">誰に仕事を任せる？？<br>
        この業界も高齢化が進んできている。<br>
        うちの会社も同様だ！</p>
      <ul class="member__dakaras">
        <li class="member__dakara">
          <img src="<?php echo get_template_directory_uri(); ?>/img/member/red-circle.svg" alt="red-circle">
          <p>だ</p>
        </li>
        <li class="member__dakara">
          <img src="<?php echo get_template_directory_uri(); ?>/img/member/red-circle.svg" alt="red-circle">
          <p>か</p>
        </li>
        <li class="member__dakara">
          <img src="<?php echo get_template_directory_uri(); ?>/img/member/red-circle.svg" alt="red-circle">
          <p>ら</p>
        </li>
        <li class="member__dakara">
          <img src="<?php echo get_template_directory_uri(); ?>/img/member/red-circle.svg" alt="red-circle">
          <p>こ</p>
        </li>
        <li class="member__dakara">
          <img src="<?php echo get_template_directory_uri(); ?>/img/member/red-circle.svg" alt="red-circle">
          <p>そ</p>
        </li>
      </ul>

      <!-- action-pc -->
      <div class="pc-on">
        <ul class="member__actions">
          <li class="member__action">
            <div class="member__action__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/member/member-action01.svg" alt="THINKING">
            </div>
            <h3 class="member__action__txt">THINKING</h3>
          </li>
          <li class="member__action bg-white">
            <div class="member__action__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/member/member-action02.svg" alt="VISION">
            </div>
            <h3 class="member__action__txt member__action__txt--white">VISION</h3>
          </li>
          <li class="member__action">
            <div class="member__action__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/member/member-action03.svg" alt="ENVIRONMENT">
            </div>
            <h3 class="member__action__txt">ENVIRONMENT</h3>
          </li>
          <li class="member__action bg-white">
            <div class="member__action__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/member/member-action04.svg" alt="ACTION">
            </div>
            <h3 class="member__action__txt member__action__txt--white">ACTION</h3>
          </li>
        </ul>
      </div>
      <!-- /action-pc -->

      <!-- action-sp -->
      <div class="sp-on">
        <ul class="member__actions">
          <li class="member__action">
            <div class="member__action__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/member/member-action01.svg" alt="THINKING">
            </div>
            <h3 class="member__action__txt">THINKING</h3>
          </li>
          <li class="member__action bg-white">
            <div class="member__action__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/member/member-action02.svg" alt="VISION">
            </div>
            <h3 class="member__action__txt member__action__txt--white">VISION</h3>
          </li>
          <li class="member__action bg-white">
            <div class="member__action__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/member/member-action04.svg" alt="ACTION">
            </div>
            <h3 class="member__action__txt member__action__txt--white">ACTION</h3>
          </li>
          <li class="member__action">
            <div class="member__action__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/member/member-action03.svg" alt="ENVIRONMENT">
            </div>
            <h3 class="member__action__txt">ENVIRONMENT</h3>
          </li>
        </ul>
      </div>
      <!-- /action-sp -->

      <div class="member__next">
        <div class="pc-on"><span class="member__next__up">「考え方」「ビジョン」「環境」「行動」</span></div>
        <div class="sp-on"><span class="member__next__up">「考え方」「ビジョン」<br>「環境」「行動」</span></div>
        <span class="member__next__down">をより良くし、次の世代につなげていく。</span>
      </div>

      <!-- メンバー@背景グレー -->
      <div class="member__list">
        <div class="member__list__img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/member04.png" alt="member-name">
        </div>
        <div class="member__list__right bg-gray">
          <p class="member__list__director member__list__director--gray">代表取締役会長</p>
          <h3 class="member__list__name">
            <span class="member__list__name--ja member__list__name--ja--gray">佐保 博文</span>
            <span class="member__list__name--en member__list__name--en--gray">SAHO HIROFUMI</span>
          </h3>
          <p class="member__list__data member__list__data--gray">EPISODE</p>
          <p class="member__list__episode member__list__episode--gray">日本PTA全国協議会の大阪府(地方協議会)に所属している時、様々な繋がりで仕事を頂き、それからも長いお付き合いをして頂きました。</p>
          <p class="member__list__data member__list__data--gray">DATA</p>
          <p class="member__list__likes member__list__likes--gray">趣味：　お酒をたしなむ<br>
            好きな食べ物： 大阪王将の餃子、ハイボール</p>
        </div>
      </div>
      <!-- /メンバー@背景グレー -->
      <!-- メンバー@背景白 -->
      <div class="member__list">
        <div class="member__list__img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/member04.png" alt="member-name">
        </div>
        <div class="member__list__right member__list__right--white">
          <p class="member__list__director member__list__director--white">代表取締役社長</p>
          <h3 class="member__list__name">
            <span class="member__list__name--ja member__list__name--ja--white">佐保 謙二</span>
            <span class="member__list__name--en member__list__name--en--white">SAHO KENJI</span>
          </h3>
          <p class="member__list__data member__list__data--white">EPISODE</p>
          <p class="member__list__episode member__list__episode--white">2018年9月の台風21号の影響で、日々、復旧・修理の依頼が鳴りやまず、お待たせしているにも関わらず、工事完了する度に「本当にありがとう」と何度も言って頂きました。この時に改めて、この仕事の大切さを肌で感じました。</p>
          <p class="member__list__data member__list__data--white">DATA</p>
          <p class="member__list__likes member__list__likes--white">趣味：　佐保工務店の番犬マイコとの朝の散歩<br>
            好きな食べ物： 美々卯のそば、芋焼酎(前田利右衛門)</p>
        </div>
      </div>
      <!-- /メンバー@背景白 -->

      <!-- メンバー@背景グレー -->
      <div class="member__list">
        <div class="member__list__img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/member04.png" alt="member-name">
        </div>
        <div class="member__list__right bg-gray">
          <p class="member__list__director member__list__director--gray">施工管理部 部長</p>
          <h3 class="member__list__name">
            <span class="member__list__name--ja member__list__name--ja--gray">小西 健夫</span>
            <span class="member__list__name--en member__list__name--en--gray">KONISHI TAKEO</span>
          </h3>
          <p class="member__list__data member__list__data--gray">EPISODE</p>
          <p class="member__list__episode member__list__episode--gray">様々な現場を担当してきましたが、やっぱり各現場工事が完工した時の達成感です。</p>
          <p class="member__list__data member__list__data--gray">DATA</p>
          <p class="member__list__likes member__list__likes--gray">趣味：　ずっと探してます。　<br>
            好きな食べ物： 塩元帥のネギ塩ラーメン</p>
        </div>
      </div>
      <!-- /メンバー@背景グレー -->

      <!-- メンバー@背景白 -->
      <div class="member__list">
        <div class="member__list__img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/member04.png" alt="member-name">
        </div>
        <div class="member__list__right member__list__right--white">
          <p class="member__list__director member__list__director--white">経理部 (裏のボス)</p>
          <h3 class="member__list__name">
            <span class="member__list__name--ja member__list__name--ja--white">佐保 弓美恵</span>
            <span class="member__list__name--en member__list__name--en--white">SAHO YUMIE</span>
          </h3>
          <p class="member__list__data member__list__data--white">EPISODE</p>
          <p class="member__list__episode member__list__episode--white">お客様から毎月ご入金をしていただいた時の感動は毎月忘れれません！</p>
          <p class="member__list__data member__list__data--white">DATA</p>
          <p class="member__list__likes member__list__likes--white">趣味：　孫へのプレゼント<br>
            好きな食べ物： 小麦の奴隷のカレーパン</p>
        </div>
      </div>
      <!-- /メンバー@背景白 -->

      <!-- メンバー@背景グレー -->
      <div class="member__list">
        <div class="member__list__img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/member04.png" alt="member-name">
        </div>
        <div class="member__list__right bg-gray">
          <p class="member__list__director member__list__director--gray">お手伝い</p>
          <h3 class="member__list__name">
            <span class="member__list__name--ja member__list__name--ja--gray">佐保 祥一郎</span>
            <span class="member__list__name--en member__list__name--en--gray">SAHO SHOUICHIROU</span>
          </h3>
          <p class="member__list__data member__list__data--gray">EPISODE</p>
          <p class="member__list__episode member__list__episode--gray">修行の為、週末お手伝いできる時は出現している謎の青年</p>
          <p class="member__list__data member__list__data--gray">DATA</p>
          <p class="member__list__likes member__list__likes--gray">趣味：　サッカー(歴29年目、選手：13年・指導者：16年)<br>
            好きな食べ物： 布施の和牛家たくちゃんのハラミと塩タン、浪花そばの肉つけ</p>
        </div>
      </div>
      <!-- /メンバー@背景グレー -->

      <!-- メンバー@背景白 -->
      <div class="member__list">
        <div class="member__list__img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/member04.png" alt="member-name">
        </div>
        <div class="member__list__right member__list__right--white">
          <p class="member__list__director member__list__director--white">わんこ</p>
          <h3 class="member__list__name">
            <span class="member__list__name--ja member__list__name--ja--white">お名前</span>
            <span class="member__list__name--en member__list__name--en--white">romaji</span>
          </h3>
          <p class="member__list__data member__list__data--white">EPISODE</p>
          <p class="member__list__episode member__list__episode--white">こちらはテキストに入れます。</p>
          <p class="member__list__data member__list__data--white">DATA</p>
          <p class="member__list__likes member__list__likes--white">趣味：<br>
            好きな食べ物： </p>
        </div>
      </div>
      <!-- /メンバー@背景白 -->

    </section>
    <!-- /member -->

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