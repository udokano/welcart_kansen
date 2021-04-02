<?php
/*
Template Name: 会社概要
*/
?>
<?php get_header();?>

<section class="company pages">
  <div class="section__inner">
    <?php echo breadcrumb_func();?>
    <h1 class="tc">特定商取引法について</h1>
    <div class="company__info" id="company__info">
      <div class="info__text">
        <dl>
          <dt>法人名</dt>
          <dd>医療法人社団 創輝会</dd>
        </dl>
        <dl>
          <dt>TEL</dt>
          <dd>03-6457-8243</dd>
        </dl>
        <dl>
          <dt>FAX</dt>
          <dd>03-6457-8257</dd>
        </dl>
        <dl>
          <dt>ホームページURL</dt>
          <dd><a href="https://souki-kai.or.jp/" target="_blank">https://souki-kai.or.jp/</a></dd>
        </dl>

        <!--   <dl>
        <dt>メールアドレス</dt>
        <dd>banner@u-d.jp</dd>
    </dl> -->

        <dl>
          <dt>所在地</dt>
          <dd>東京都新宿区新宿3-29-11 新盛堂ビル 7F</dd>
        </dl>
        <dl>
          <dt>月額サービスの<br class="sp">
            販売価格</dt>
          <dd>月額：30,000円（税込）プラン<br>
            月額：50,000円（税込）プラン<br>
            月額：70,000円（税込）プラン<br>
            月額：100,000円（税込）プラン</dd>
        </dl>
        <dl>
          <dt>サービス以外の<br class="sp">
            必要料金</dt>
          <dd>消費税</dd>
        </dl>
        <dl>
          <dt>お支払い方法</dt>
          <dd>各種クレジットカード</dd>
        </dl>
        <dl>
          <dt>お支払い時期</dt>
          <dd>各サービスプラン購入時に最初の月額料金の請求が発生し、その後毎月同じ日に請求が行われます。</dd>
        </dl>
        <dl>
          <dt>サービスの提供時期</dt>
          <dd>サービスは、会員登録・クレジットカードの課金手続きが終了後、利用可能になります。</dd>
        </dl>
        <dl>
          <dt>ご解約について</dt>
          <dd>こちらの
            <?php if (usces_is_login()): ?>
            <!-- ログインしているときはパラメータ付与--><a href="<?php home_url('/'); ?>contact?氏名=<?php usces_memberinfo('name1') ?><?php usces_memberinfo('name2');?>&お問い合わせの種類=ご解約&会員番号=<?php usces_memberinfo('ID');?>&メールアドレス=<?php usces_memberinfo('mailaddress1');?>" target="_blank">
            <!-- ログアウト時はエラーするのでパラメーター外す -->
            <?php else: ?>
            <a href="<?php home_url('/'); ?>contact?お問い合わせの種類=ご解約" target="_blank">
            <?php endif; ?>
            お問い合わせページ</a>内のフォームに、解約の旨と会員番号を記載して送信してください。</dd>
        </dl>
        <dl>
          <dt>その他条件</dt>
          <dd>こちらの<a href="<?php home_url('/'); ?>term" target="_blank">利用規約</a>のページをご参照ください。</dd>
        </dl>
      </div>
      <!-- ./info__text -->

    </div>
    <!-- ./company__info -->

    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d202.52531951615077!2d139.70256850025922!3d35.69164729728331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cda3fc3befd%3A0x70c2afd78366e6f5!2z44CSMTYwLTAwMjIg5p2x5Lqs6YO95paw5a6_5Yy65paw5a6_77yT5LiB55uu77yS77yZ4oiS77yR77yRIOaWsOebm-WgguODk-ODqw!5e0!3m2!1sja!2sjp!4v1582199431142!5m2!1sja!2sjp" width="100％" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
  </div>
  <!-- ./section__inner -->
</section>
<section class="clinic__list">
  <div class="section__inner">
    <h2 class="tc">クリニック一覧</h2>
    <ul class="clinic__list__desc flex flex-wrap">
      <li>
        <p class="clinic__list__tit"> 池袋</p>
        <p class="clinic__list__name">THE MEDICAL SALON.</p>
        <p class="clicic__list__post">〒170-0013</p>
        <p class="clinic__list__address">東京都豊島区東池袋1-1-4 タカセセントラルビル9F</p>
        <p class="clinic__list__tel">0120-954-711</p>
      </li>
      <li>
        <p class="clinic__list__tit">渋谷</p>
        <p class="clinic__list__name">渋谷駅前レディースクリニック</p>
        <p class="clicic__list__post">〒150-0002</p>
        <p class="clinic__list__address">東京都渋谷区渋谷1-24-15FPG渋谷宮益ビル7F</p>
        <p class="clinic__list__tel">0120-954-860</p>
      </li>
      <li>
        <p class="clinic__list__tit">渋谷</p>
        <p class="clinic__list__name">YAG BEAUTY CLINIC TOKYO</p>
        <p class="clicic__list__post">〒150-0002</p>
        <p class="clinic__list__address">東京都渋谷区渋谷1-24-15 FPG渋谷宮益ビル8F</p>
        <p class="clinic__list__tel">0120-915-959</p>
      </li>
      <li>
        <p class="clinic__list__tit">新宿</p>
        <p class="clinic__list__name">PICO BEAUTY CLINIC</p>
        <p class="clicic__list__post">〒160-0022</p>
        <p class="clinic__list__address">東京都新宿区新宿3-17-2 アカネビル8F</p>
        <p class="clinic__list__tel">0120-900-253</p>
      </li>

      <!-- 2列目 -->

      <li>
        <p class="clinic__list__tit">新宿</p>
        <p class="clinic__list__name">ON Body Clinic</p>
        <p class="clicic__list__post">〒160-0022</p>
        <p class="clinic__list__address">東京都新宿区新宿 3-17-2 アカネビル 8F</p>
        <p class="clinic__list__tel">0120-972-561</p>
      </li>
      <li>
        <p class="clinic__list__tit">梅田</p>
        <p class="clinic__list__name">YAG BEAUTY CLINIC OSAKA</p>
        <p class="clicic__list__post">〒530-0001</p>
        <p class="clinic__list__address">大阪府大阪市北区梅田1-12-17 梅田スクエアビル B2F</p>
        <p class="clinic__list__tel">0120-968-838</p>
      </li>
      <li>
        <p class="clinic__list__tit">心斎橋</p>
        <p class="clinic__list__name">Dual Clinic SHINSAIBASHI</p>
        <p class="clicic__list__post">〒542-0085</p>
        <p class="clinic__list__address">大阪府大阪市中央区心斎橋筋1丁目10-11 敬和ビル ルフレ21 10F</p>
        <p class="clinic__list__tel">0120-968-692</p>
      </li>
      <li>
        <p class="clinic__list__tit">心斎橋</p>
        <p class="clinic__list__name">心斎橋　レディースクリニック</p>
        <p class="clicic__list__post">〒542-0085</p>
        <p class="clinic__list__address">大阪府大阪市中央区心斎橋筋1丁目10-12 トレスビル8階</p>
        <p class="clinic__list__tel">0120-511-622</p>
      </li>

      <!-- 3列目 -->

      <li>
        <p class="clinic__list__tit">神戸</p>
        <p class="clinic__list__name">Dual Clinic KOBE</p>
        <p class="clicic__list__post">〒650-0037</p>
        <p class="clinic__list__address">兵庫県神戸市中央区明石町32 明海ビル7F</p>
        <p class="clinic__list__tel">0120-932-784</p>
      </li>
      <li>
        <p class="clinic__list__tit">仙台</p>
        <p class="clinic__list__name">THE BEAUTY CLINIC</p>
        <p class="clicic__list__post">〒980-0021</p>
        <p class="clinic__list__address">宮城県仙台市青葉区中央1丁目3-1 AER19F</p>
        <p class="clinic__list__tel">0120-073-888</p>
      </li>
      <li>
        <p class="clinic__list__tit">札幌</p>
        <p class="clinic__list__name">YAG BEAUTY CLINIC SAPPORO</p>
        <p class="clicic__list__post">〒060-0061</p>
        <p class="clinic__list__address">北海道札幌市中央区南1条西4丁目 4pla 9F</p>
        <p class="clinic__list__tel">0120-915-378</p>
      </li>
      <li>
        <p class="clinic__list__tit">福岡</p>
        <p class="clinic__list__name">YAG BEAUTY CLINIC FUKUOKA</p>
        <p class="clicic__list__post">〒810-0041</p>
        <p class="clinic__list__address">大福岡県福岡市中央区大名１丁目１３−１９プリオ大名２ビル２階</p>
        <p class="clinic__list__tel">0120-657-111</p>
      </li>
    </ul>
  </div>
  <!-- ./section__inner -->

</section>
<?php get_footer();?>
