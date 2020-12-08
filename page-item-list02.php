<?php
/*
Template Name: 商品一覧追加
*/
?>
<?php get_header();?>



<div class="p-pages-ttl-area --ttl-bg-items u-bg-cover" id="js-pages-head">
        <div class="p-pages-ttl-area__inner --inner-item">
              <div class="p-pages-ttl-area__texts --texts--item-list">
                        <h1 class="p-pages-ttl-area__ttl --ttl--item-list">購入申し込み・証明書発行</h1>
                <p class="p-pages-ttl-area__sub">検体回収キット、陰性証明書の<br>購入はこちらから</p>
              </div>
        </div>
</div>


<section class="bg-section-gray p-item-area02">


<div class="l-inner">


<div class="p-area-not u-mt0">
            <p class="p-area-not__ttl">
                <span class="p-area-not__sub">現在のご購入・回収可能地域</span><br>東京、愛知、大阪、福岡<br><span class="p-area-not__sub">それ以外の地域は順次拡大予定となります。</span>
                   <div class="p-uuuu">※個人ご利用の場合のみ。<br><span class="p-area-not__sub">企業・団体様のご利用の場合は地域制限はございません。</span></div>
            </p>
</div>
<!-- ./p-area-not -->


  <!-- キャンペーンバナー -->
        <div class="p-cap p-cap--item-list">
            <img src="<?php echo get_template_directory_uri(); ?>/img/common/cap_bnr.jpg?54789655" alt="期間限定8/31(月)まで期間限定でお試ししやすい価格でご提供させていただきます。" class="u-pc">

            <img src="<?php echo get_template_directory_uri(); ?>/img/common/cap_bnr_sp.jpg?54789655" alt="期間限定8/31(月)まで期間限定でお試ししやすい価格でご提供させていただきます。" class="u-sp">
        </div>
        <!-- ./p-cap -->

        <ul class="p-items">
            <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr">
                <p class="p-items__name">PCR検査</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item01.jpg?554785555555" alt="PCR検査">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">PCR検査によって患者様の感染の有無を検査致します。<br>早めに発見することにより、感染拡大を防ぎます。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center"><!-- 18,000 -->14,800</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">(税別)</span>
                                    <span class="p-items__tax">円</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">購入へ進む</p>
                </a>
            </li>

            <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr-set03">
                                <p class="p-items__name">PCR検査＋抗体検査</p>
                        <div class="p-items__row">
                                <div class="p-items__thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item07.jpg?0724" alt="陰性証明書発行">
                                </div>

                                <div class="p-items__right">
                                    <p class="p-items__desc">PCR検査と抗体検査のセットになります。検査から抗体の有無の確認までスムーズに行いたい方にはこちらのプランが向いています。</p>
                                    <div class="p-items__price-wrap">
                                        <span class="p-items__p-left">価格</span>
                                        <span class="p-items__p-center">19,800</span>
                                        <span class="p-items__p-right">
                                            <span class="p-items__tax-sub">(税別)</span>
                                            <span class="p-items__tax">円</span>
                                        </span>
                                    </div>
                                </div>
                        </div>

                        <p class="c-btn-circle-arw p-items__btn">購入へ進む</p>


                </a>

            </li>

            <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>certificate">
                <p class="p-items__name">陰性証明書発行</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item02.jpg?55555555555" alt="陰性証明書発行">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">検査の結果陰性だった方の証明書の発行も承っております。<br>サイズはA5または名刺サイズからお選び出来ます。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center">5,000</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">(税別)</span>
                                    <span class="p-items__tax">円</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">購入へ進む</p>
                </a>
            </li>
           <!--  <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr-set">
                <p class="p-items__name">PCR検査＋陰性証明書発行</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item03.jpg?22255555" alt="陰性証明書発行">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">PCR検査後、陰性証明書を発行します。<br>検査から証明書発行まで、スムーズに行いたい方はこちらのプランが向いております。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center">25,000</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">(税別)</span>
                                    <span class="p-items__tax">円</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">購入へ進む</p>
                </a>
            </li> -->

            <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>certificate02">
                <p class="p-items__name">【渡航用】陰性証明書発行</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item04.jpg?07225555" alt="陰性証明書発行">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">渡航先指定のフォーマットに合わせて陰性証明書を発行致します。<br>事前にフォーマットやテンプレートの送付をお願い致します。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center"><!-- 20,000 -->5,000</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">(税別)</span>
                                    <span class="p-items__tax">円</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">購入へ進む</p>
                </a>
            </li>

            <!--  <li class="p-items__contents">
                 <a href="<?php echo home_url( '/' ); ?>pcr-set02">
                <p class="p-items__name">【渡航用】PCR検査＋<br class="u-sp">陰性証明書発行</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item05.jpg?078255552" alt="陰性証明書発行">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">検査完了後に証明書の発行準備を行います。<br>渡航先のフォーマットがある場合はそちらの送付をお願い致します。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center">32,000</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">(税別)</span>
                                    <span class="p-items__tax">円</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">購入へ進む</p>
                </a>
            </li> -->
           <!--  <li class="p-items__contents js-modal-open" data-target="js-modal-item01">

                                <p class="p-items__name">抗体検査</p>
                        <div class="p-items__row">
                                <div class="p-items__thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item06.jpg?0725" alt="陰性証明書発行">
                                </div>

                                <div class="p-items__right">
                                    <p class="p-items__desc">過去に感染していた事があると、体内では抗体が生成されます。<br>その抗体の有無を調べることにより今までの感染状況を知る事が出来ます。</p>
                                    <div class="p-items__price-wrap">
                                        <span class="p-items__p-left">価格</span>
                                        <span class="p-items__p-center">5,800</span>
                                        <span class="p-items__p-right">
                                            <span class="p-items__tax-sub">(税別)</span>
                                            <span class="p-items__tax">円</span>
                                        </span>
                                    </div>
                                </div>
                        </div>

                        <p class="c-btn-circle-arw p-items__btn">購入へ進む</p>




            </li> -->
        </ul>

</div>
</section>



  <!-- modal  content01 -->
    <div class="c-modal js-modal" id="js-modal-item01">
      <div class="c-modal__bg js-modal-close"></div>
      <div class="c-modal__inner">
        <p class="c-modal__ttl">この商品を購入するには、<br>オンライン診療の受診が必要です。</p>
        <a href="<?php echo home_url( '/' ); ?>clinics" class="c-modal__btn">詳しくはこちら</a>
        <p class="js-modal-close c-blue">閉じる</p>
      </div>
      <!-- ./c-modal__inner -->
    </div>
    <!-- ./c-modal -->


<section class="p-specific-trade">

<div class="l-inner">
 <h2 class="c-ttl-under-center p-cancel__ttl">返品・交換・キャンセル等</h2>
        <p class="u-tc p-cancel__desc"><!-- 商品発送後の返品・交換等はお受け致しかねます。 -->キットや証明書発行は手配の性質上、<br class="u-sp">キャンセル・返品はお受けできません。<br class="">ご同意いただける方のみ、お申し込みください。<br>商品が不良の場合のみ良品と交換致します。</p>
<h2 class="c-ttl-under-center p-specific-trade__ttl">特定商取引法について</h2>
<div class="p-clinic-info-table-warp --specific-table">
            <dl class="p-clinic-info-table  ">
                <dt class="p-clinic-info-table__ttl">院名</dt>
                <dd class="p-clinic-info-table__desc"><a href="https://souki-kai.or.jp/group.html" class="u-text-under-line c-blue" target="_blank">医療法人社団 創輝会</a>  <br class="u-sp">感染症検査クリニック</dd>
            </dl>
          <!--   <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">設立年月日</dt>
                <dd class="p-clinic-info-table__desc">2020年8月1日</dd>
            </dl> -->
          <!--   <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">院長</dt>
                <dd class="p-clinic-info-table__desc">○○ ○○</dd>
            </dl> -->
           <!--  <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">事業内容</dt>
                <dd class="p-clinic-info-table__desc">感染症検査分析</dd>
            </dl> -->
            <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">クリニック<br class="u-sp">所在地</dt>
                <dd class="p-clinic-info-table__desc">〒542-0086 大阪府大阪市中央区西心斎橋2-13-16　おおきに西心斎橋BirthPlaceビル　3階</dd>
            </dl>
             <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">電話番号</dt>
                <dd class="p-clinic-info-table__desc">  <a href="<?php echo home_url( '/' ); ?>tel/kansenshou.html" class="c-pink" target="_blank">個人 0120-088-120</a><br>
            <a href="<?php echo home_url( '/' ); ?>tel/campany.html" class="c-pink" target="_blank">企業・団体 06-4708-8082</a></dd>
            </dl>

            <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">お問い合わせ</dt>
                <dd class="p-clinic-info-table__desc"><a href="<?php echo home_url( '/' ); ?>contact" class="c-pink" target="_blank">お問い合わせ</a>はメールフォームにて承っております。</dd>
            </dl>

             <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">販売価格</dt>
                <dd class="p-clinic-info-table__desc">各商品毎に商品販売価格を表示</dd>
            </dl>

            <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">商品代金以外の必要料金</dt>
                <dd class="p-clinic-info-table__desc">消費税</dd>
            </dl>

             <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">引き渡し<br class="u-sp">時期</dt>
                <dd class="p-clinic-info-table__desc">1~2日後<br>※天候不順・配送業者の都合・その他何らかの理由により遅延する可能性がございます。<br>予めご了承くださいませ。</dd>
            </dl>

             <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">お支払い<br class="u-sp">方法</dt>
                <dd class="p-clinic-info-table__desc">クレジットカード(VISA,MASTER)</dd>
            </dl>

            <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">個人情報の<br class="u-sp">取扱い</dt>
                <dd class="p-clinic-info-table__desc"><a href="<?php echo home_url( '/' ); ?>privacy" class="c-pink" target="_blank">プライバシーポリシー</a>を遵守し、お客さまのプライバシー保護に努めます。</dd>
            </dl>
        </div>
        <!-- ./p-clinic-info-table__warp -->


</div>

</section>


<!--  <div class="p-footer-nav u-border-bottom-none">
                 <nav class="p-global-nav --global-top --global-footer">
                  <ul class="p-global-nav__list --global-top-list --global-footer-list">
                    <li class="p-global-nav__item --global-top-item --global-footer-item">
                      <a href="<?php echo home_url( '/' ); ?>#link-use" class="p-global-nav__link --global-top-link --global-footer-link">
                          検査のご利用方法
                      </a>
                    </li>
                    <li class="p-global-nav__item --global-top-item  --global-footer-item">
                      <a href="<?php echo home_url( '/' ); ?>faq-personal" class="p-global-nav__link --global-top-link --global-footer-link">
                          よくある質問
                      </a>
                    </li>
                    <li class="p-global-nav__item --global-top-item  --global-footer-item">
                      <a href="<?php echo home_url( '/' ); ?>#link-kit" class="p-global-nav__link --global-top-link --global-footer-link">
                          検体採取キット
                      </a>
                    </li>
                     <li class="p-global-nav__item --global-top-item --global-footer-item">
                    <a href="<?php echo home_url( '/' ); ?>clinics" class="p-global-nav__link --global-top-link js-sp-clink-menu-close --global-footer-link">
                        クリニクスの使い方
                    </a>
                  </li>
                    <li class="p-global-nav__item --global-top-item  --global-footer-item">
                      <a href="<?php echo home_url( '/' ); ?>clinic" class="p-global-nav__link --global-top-link --global-footer-link ">
                          当院について
                      </a>
                    </li>

                    <li class="p-global-nav__item --global-top-item  --global-footer-item">
                      <a href="<?php echo home_url( '/' ); ?>contact" class="p-global-nav__link --global-top-link --global-footer-link" target="_blank">
                          お問合せ
                      </a>
                    </li>
                  </ul>
                </nav>
        </div> -->




<?php get_footer();?>
