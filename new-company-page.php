<?php
/*
Template Name: 新設企業用案内ページ
*/
?>
<?php get_header();?>



<div class="p-pages-ttl-area --ttl-bg-company-reserve u-bg-cover" id="js-pages-head">
        <div class="p-pages-ttl-area__inner">
              <div class="p-pages-ttl-area__texts --company">
                        <h1 class="p-pages-ttl-area__ttl">企業・団体様のご案内</h1>
                <p class="p-pages-ttl-area__sub">企業・団体様のPCR検査の流れをこちらで<br class="u-pc">ご紹介しております。</p>
              </div>
        </div>
</div>



<style>

	.p-anchor-list {
		max-width: 640px;
		margin:0 auto;
	}

.p-anchor-list__item {
  max-width: 200px;
	margin-bottom: 1.15rem;
}

</style>




<section class="p-contact-anchor">
  <div class="l-inner">
      <ul class="p-anchor-list">
        <li class="p-anchor-list__item">
          <a href="#link-flow" class="p-anchor-list__link">
           <span class="p-anchor-list__text">ご利用の流れ</span>
          </a>
        </li>
         <!--<li class="p-anchor-list__item">
          <a href="#link-com-price" class="p-anchor-list__link">
            <span class="p-anchor-list__text">料金</span>
          </a>
        </li>-->

         <li class="p-anchor-list__item">
          <a href="#link-item-list" class="p-anchor-list__link">
            <span class="p-anchor-list__text">商品一覧</span>
          </a>
        </li>
         <li class="p-anchor-list__item">
          <a href="#link-com-faq" class="p-anchor-list__link">
            <span class="p-anchor-list__text">よくあるご質問</span>
          </a>
        </li>

         <li class="p-anchor-list__item">
          <a href="<?php echo home_url( '/' ); ?>company-form" class="p-anchor-list__link" target="_blank">
            <span class="p-anchor-list__text">お問い合わせ</span>
          </a>
        </li>

		     <li class="p-anchor-list__item">
          <a href="<?php echo home_url( '/' ); ?>usces-member" class="p-anchor-list__link"　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　 target="_blank">
            <span class="p-anchor-list__text">マイページ(ログイン)</span>
          </a>
        </li>
      </ul>
  </div>
</section>




<!-- <div class="p-flow-img">
    <div class="l-inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow_img.png?cb42aaa3d39ead9a906" alt="">
    </div>
</div> -->


<section class="p-group-flow" id="link-flow">

    <div class="l-inner">
        <h2 class="c-ttl-under-center p-group-flow__ttl c-blue">ご利用の流れ</h2>


        <ul class="p-group-list">
          <li class="p-group-list__item">
            <div class="p-group-list__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow01.jpg?6dbddba84c650683" alt="">
            </div>
            <!-- ./p-group-list__thumb -->
            <div class="p-group-list__text">
              <div class="p-group-list__text-inner">
                         <p class="p-group-list__step">Step.<span class="p-group-list__num">01</span></p>
                        <h3 class="p-group-list__ttl">お見積り</h3>
                        <p class="p-group-list__desc">商品一覧から商品をカートに入れ。<br class="">企業名・団体名、メールアドレス等を入力した後、決済方法選択の中でお見積りを選択。</p>
              </div>

            </div>
          </li>

           <li class="p-group-list__item">
            <div class="p-group-list__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow02_new.jpg?6dbddba84c650683" alt="" class="u-pc">
                 <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow02_new_sp.jpg?6dbddba84c650683" alt="" class="u-sp">
            </div>
            <!-- ./p-group-list__thumb -->
            <div class="p-group-list__text">
              <div class="p-group-list__text-inner">
                         <p class="p-group-list__step">Step.<span class="p-group-list__num">02</span></p>
                        <h3 class="p-group-list__ttl">見積書をダウンロード</h3>
                        <p class="p-group-list__desc"><a href="<?php echo home_url( '/' ); ?>usces-member" class="c-pink"　target="_blank">会員ページ(マイページ)</a>より見積書をダウンロードしてください。</p>
              </div>
            </div>
          </li>


          <li class="p-group-list__item">
            <div class="p-group-list__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow03_new.jpg?6dbddba84c650683" alt="">
            </div>
            <!-- ./p-group-list__thumb -->
            <div class="p-group-list__text">
              <div class="p-group-list__text-inner">
                         <p class="p-group-list__step">Step.<span class="p-group-list__num">03</span></p>
                        <h3 class="p-group-list__ttl">決済</h3>
                        <p class="p-group-list__desc"><!--ご購入時はクレジットカード払い、銀行振込-をご用意しております。-->お支払いは銀行振込にてお願い致します。※クレジットカード払いは現在準備中です。<br class="">お支払い確認後に、代表様にご購入分の引換コードを発行し、メールにてお送りいたします。</p>
              </div>
            </div>
          </li>

          <li class="p-group-list__item">
            <div class="p-group-list__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow04_02_new.jpg?36d7dca331e72df0" alt="" class="u-pc">

                <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow04_02_new_sp.jpg?36d7dca331e72df0" alt="" class="u-sp">
            </div>
            <!-- ./p-group-list__thumb -->
            <div class="p-group-list__text">
              <div class="p-group-list__text-inner">
                         <p class="p-group-list__step">Step.<span class="p-group-list__num">04</span></p>
                        <h3 class="p-group-list__ttl">引換コードの配布</h3>
                        <p class="p-group-list__desc">お支払いの確認が出来ましたらマイページから引換コード(エクセルファイル)のダウンロードが可能になります。<br class="">社内、もしくは団体内で引換コードの配布を行ってください。
                    </p>
              </div>
            </div>
          </li>

          <li class="p-group-list__item">
            <div class="p-group-list__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow05_new.jpg?36d7dca331e72df0" alt="">
            </div>
            <!-- ./p-group-list__thumb -->
            <div class="p-group-list__text">
              <div class="p-group-list__text-inner">
                         <p class="p-group-list__step">Step.<span class="p-group-list__num">05</span></p>
                        <h3 class="p-group-list__ttl">引換コードの使用</h3>
                        <p class="p-group-list__desc">代表者によって配布された引換コードを用いて、当サイト内のPCRキットを0円で購入を行ってください。
</p>
              </div>
            </div>
          </li>

            <li class="p-group-list__item">
            <div class="p-group-list__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow06_new.jpg?36d7dca331e72df0" alt="" class="u-pc">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow06_new_sp.jpg?36d7dca331e72df0" alt="" class="u-sp">
            </div>
            <!-- ./p-group-list__thumb -->
            <div class="p-group-list__text">
              <div class="p-group-list__text-inner">
                         <p class="p-group-list__step">Step.<span class="p-group-list__num">06</span></p>
                        <h3 class="p-group-list__ttl">検体採取キット郵送</h3>
                        <p class="p-group-list__desc">ご注文いただいた名簿分の検体採取キットをお送り致します。</p>
              </div>
            </div>
          </li>

            <li class="p-group-list__item">

             <div class="p-group-list__thumb">
               <!--  <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow04_new.jpg?36d7dca331e72df0" alt="" class="u-pc">
                 <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow04_new_sp.jpg?36d7dca331e72df0" alt="" class="u-sp"> -->
                  <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow04_old.jpg?36d7dca331e72df0" alt="" class="u-pc">
                 <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow04_old_sp.jpg?36d7dca331e72df0" alt="" class="u-sp">
            </div>

            <!-- ./p-group-list__thumb -->
            <div class="p-group-list__text">
              <div class="p-group-list__text-inner">
                         <p class="p-group-list__step">Step.<span class="p-group-list__num">07</span></p>
                        <h3 class="p-group-list__ttl">検体採取</h3>
                        <p class="p-group-list__desc">検体採取キット、に同封されている案内をお読みになり、唾液の採取を行ってください。<br class="">抗体検査とのセットをご購入された場合も、案内に沿って検査を行ってください。</p>
              </div>
            </div>
          </li>

             <li class="p-group-list__item">
            <div class="p-group-list__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow08_new.jpg?36d7dca331e72df0" alt="" class="u-pc">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow08_new_sp.jpg?36d7dca331e72df0" alt="" class="u-sp">
            </div>
            <!-- ./p-group-list__thumb -->
            <div class="p-group-list__text">
              <div class="p-group-list__text-inner">
                         <p class="p-group-list__step">Step.<span class="p-group-list__num">08</span></p>
                        <h3 class="p-group-list__ttl">検体回収</h3>
                        <p class="p-group-list__desc">採取した検体を梱包し返送を行ってください。<!-- <br class="">※抗体検査をご購入の場合は抗体検査キットも同封してください --></p>
              </div>
            </div>
          </li>

            <li class="p-group-list__item">
            <div class="p-group-list__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow07.jpg?36d7dca331e72df0" alt="">
            </div>
            <!-- ./p-group-list__thumb -->
            <div class="p-group-list__text">
              <div class="p-group-list__text-inner">
                         <p class="p-group-list__step">Step.<span class="p-group-list__num">09</span></p>
                        <h3 class="p-group-list__ttl">PCR検査・検査結果報告</h3>
                        <p class="p-group-list__desc">検査結果は検体がクリニックに届いてから、およそ<span style="color:#ff2323;">1～2日後に判定が出ます。</span>検査結果の確認は、個人様毎に専用ウェブサイトまたはお電話にてお伝えいたします。<br class="">（団体様へのご連絡は別途料金を頂戴いたします。）</p>
              </div>
            </div>
          </li>
        </ul>
    </div>

</section>









<section class="bg-section-gray p-item-area02" id="link-item-list">


<div class="l-inner">


 <h2 class="c-ttl-under-center p-question__ttl c-blue">企業・団体様<br>まとめ買い商品一覧</h2>




<!--タブ-->
<ul class="tab-group">
    <li class="tab is-active">引換コード</li>
    <li class="tab">検査キット(現品)</li>
    <!--<li class="tab">Tab-C</li>-->
</ul>

<!--タブを切り替えて表示するコンテンツ-->
<div class="panel-group">
    <div class="panel is-show">

<ul class="p-items">

                <div class="p-flow_img"><img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow_img.png?cb423d39ead9a906" alt=""></div>
             <li class="p-items__contents">

                <a href="<?php echo home_url( '/' ); ?>pcr-coupon">
                <p class="p-items__name">PCR検査</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/pcr-coupon.jpg?36d7dca331e72df0" alt="PCR検査">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">PCR検査によって患者様の<br class="">新型コロナ感染の有無を検査致します。<br><span class="u-fw600">5個購入した場合　1個あたり 10,560円<br class="">10個購入した場合　1個あたり 9,768円</span></p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center">13,200</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">(税込)</span>
                                    <span class="p-items__tax">円</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">購入・お見積りに進む</p>
                </a>
            </li>

               <!--<li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr-set05-coupon">
                <p class="p-items__name">PCR検査キット5回セット</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item10_new.jpg?36d7dca331e72df0" alt="PCR検査">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">PCR検査キットの5回セット販売になります。まとめて購入されたい方はこちらのプランがおすすめです。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center">59,200</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">(税込)</span>
                                    <span class="p-items__tax">円</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">購入・お見積りに進む</p>
                </a>
            </li>-->

                <!--<li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr-set10-coupon">
                <p class="p-items__name">PCR検査キット10回セット</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item11_new.jpg?36d7dca331e72df0" alt="PCR検査">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">PCR検査キットの10回セット販売になります。まとめて購入されたい方はこちらのプランがおすすめです。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center">88,800</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">(税込)</span>
                                    <span class="p-items__tax">円</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">購入・お見積りに進む</p>
                </a>
            </li>-->


             <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr-set03-coupon">
                                <p class="p-items__name">PCR検査＋抗体検査</p>
                        <div class="p-items__row">
                                <div class="p-items__thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/pcr-set03-coupon.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                                </div>

                                <div class="p-items__right">
                                     <p class="p-items__desc">PCR検査と抗体検査のセット。<br class="">抗体検査では、過去の感染歴を検査出来ます。<br class=""><span class="u-fw600">5個購入した場合　1個あたり 14,960円<br class="">10個購入した場合　1個あたり 13,068円</span></p>
                                    <div class="p-items__price-wrap">
                                        <span class="p-items__p-left">価格</span>
                                        <span class="p-items__p-center">18,700</span>
                                        <span class="p-items__p-right">
                                            <span class="p-items__tax-sub">(税込)</span>
                                            <span class="p-items__tax">円</span>
                                        </span>
                                    </div>
                                </div>
                        </div>

                        <p class="c-btn-circle-arw p-items__btn">購入・お見積りに進む</p>

                </a>

            </li>

             <li class="p-items__contents p-items__contents--quick">
                <a href="<?php echo home_url( '/' ); ?>pcr-quick-coupon">
                                <p class="p-items__name">PCR迅速検査</p>
                        <div class="p-items__row">
                                <div class="p-items__thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/pcr-quick-coupon.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                                </div>

                                <div class="p-items__right">
                                    <p class="p-items__desc">PCR検査の迅速検査になります。<br class="">速達でのご対応、優先的に検査いたします。<br class=""><span class="u-fw600">5個購入した場合　1個あたり 13,860円<br class="">10個購入した場合　1個あたり 13,068円</span></p>
                                    <div class="p-items__price-wrap">
                                        <span class="p-items__p-left">価格</span>
                                        <span class="p-items__p-center">16,500</span>
                                        <span class="p-items__p-right">
                                            <span class="p-items__tax-sub">(税込)</span>
                                            <span class="p-items__tax">円</span>
                                        </span>
                                    </div>
                                </div>
                        </div>

                        <p class="c-btn-circle-arw p-items__btn">購入・お見積りに進む</p>

                </a>

            </li>

             <li class="p-items__contents p-items__contents--quick">
                <a href="<?php echo home_url( '/' ); ?>pcr-quick-antibody-set-coupon">
                                <p class="p-items__name">PCR迅速検査＋抗体検査</p>
                        <div class="p-items__row">
                                <div class="p-items__thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/pcr-quick-antibody-set-coupon.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                                </div>

                                <div class="p-items__right">
                                     <p class="p-items__desc">PCR迅速検査と抗体検査のセットになります。<br class="">抗体検査では、過去の感染歴を検査出来ます。<br class=""><span class="u-fw600">5個購入した場合　1個あたり 18,260円<br class="">10個購入した場合　1個あたり 16,368円</span></p>
                                    <div class="p-items__price-wrap">
                                        <span class="p-items__p-left">価格</span>
                                        <span class="p-items__p-center">22,000</span>
                                        <span class="p-items__p-right">
                                            <span class="p-items__tax-sub">(税込)</span>
                                            <span class="p-items__tax">円</span>
                                        </span>
                                    </div>
                                </div>
                        </div>

                        <p class="c-btn-circle-arw p-items__btn">購入・お見積りに進む</p>

                </a>

            </li>

            <!-- <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr-antibody-set05-coupon">
                                <p class="p-items__name">PCR検査＋抗体検査(5回セット)</p>
                        <div class="p-items__row">
                                <div class="p-items__thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item12_new.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                                </div>

                                <div class="p-items__right">
                                    <p class="p-items__desc">PCR検査と抗体検査の5回セットになります。検査から抗体の有無の確認までをまとめて行いたい方にはこちらのプランが向いています。</p>
                                    <div class="p-items__price-wrap">
                                        <span class="p-items__p-left">価格</span>
                                        <span class="p-items__p-center">79,200</span>
                                        <span class="p-items__p-right">
                                            <span class="p-items__tax-sub">(税込)</span>
                                            <span class="p-items__tax">円</span>
                                        </span>
                                    </div>
                                </div>
                        </div>

                        <p class="c-btn-circle-arw p-items__btn">購入・お見積りに進む</p>

                </a>

            </li>

             <li class="p-items__contents" >
                <a href="<?php echo home_url( '/' ); ?>pcr-antibody-set10-coupon">
                                <p class="p-items__name">PCR検査＋抗体検査(10回セット)</p>
                        <div class="p-items__row">
                                <div class="p-items__thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item14_new.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                                </div>

                                <div class="p-items__right">
                                    <p class="p-items__desc">PCR検査と抗体検査の10回セットになります。検査から抗体の有無の確認までをまとめて行いたい方にはこちらのプランが向いています。</p>
                                    <div class="p-items__price-wrap">
                                        <span class="p-items__p-left">価格</span>
                                        <span class="p-items__p-center">118,800</span>
                                        <span class="p-items__p-right">
                                            <span class="p-items__tax-sub">(税込)</span>
                                            <span class="p-items__tax">円</span>
                                        </span>
                                    </div>
                                </div>
                        </div>

                        <p class="c-btn-circle-arw p-items__btn">購入・お見積りに進む</p>

                </a>

            </li>-->

            <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>certificate-coupon">
                <p class="p-items__name">陰性証明書発行</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/certificate-coupon.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">検査の結果陰性だった方の証明書の発行も承っております。<br>サイズはA5または名刺サイズからお選び出来ます。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center">5,500</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">(税込)</span>
                                    <span class="p-items__tax">円</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">購入・お見積りに進む</p>
                </a>
            </li>
          <!--   <li class="p-items__contents">
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
                                    <span class="p-items__tax-sub">(税込)</span>
                                    <span class="p-items__tax">円</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">購入へ進む</p>
                </a>
            </li> -->

            <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>certificate02-coupon">
                <p class="p-items__name">【渡航用】陰性証明書発行</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/certificate02-coupon.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">渡航先指定のフォーマットに合わせて陰性証明書を発行致します。<br>事前にフォーマットやテンプレートの送付をお願い致します。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center">11,000</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">(税込)</span>
                                    <span class="p-items__tax">円</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">購入・お見積りに進む</p>
                </a>

            </li>

            <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>certificate03-coupon">
                <p class="p-items__name">診断書の作成</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/certificate03-coupon.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">診断書の作成を行っております。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center">11,000</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">(税込)</span>
                                    <span class="p-items__tax">円</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">購入・お見積りに進む</p>
                </a>
            </li>

            <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>introduction-coupon">
                <p class="p-items__name">紹介状の作成</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/introduction-coupon.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">紹介状の作成を行っております。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center">5,500</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">(税込)</span>
                                    <span class="p-items__tax">円</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">購入・お見積りに進む</p>
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
                                    <span class="p-items__tax-sub">(税込)</span>
                                    <span class="p-items__tax">円</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">購入・お見積りに進む</p>
                </a>
            </li> -->
           <!--  <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>antibody-kit">
                                <p class="p-items__name">抗体検査</p>
                        <div class="p-items__row">
                                <div class="p-items__thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item06.jpg?0724" alt="陰性証明書発行">
                                </div>

                                <div class="p-items__right">
                                    <p class="p-items__desc">過去に感染していた事があると、体内では抗体が生成されます。<br>その抗体の有無を調べることにより今までの感染状況を知る事が出来ます。</p>

                                    <div class="p-items__price-wrap">
                                        <span class="p-items__p-left">価格</span>
                                        <span class="p-items__p-center">5,800</span>
                                        <span class="p-items__p-right">
                                            <span class="p-items__tax-sub">(税込)</span>
                                            <span class="p-items__tax">円</span>
                                        </span>
                                    </div>
                                </div>
                        </div>

                        <p class="c-btn-circle-arw p-items__btn">購入・お見積りに進む</p>

                </a>

            </li> -->

        </ul>

    </div>
    <div class="panel">


    <!--


    企業用現品販売


     -->


    	    <ul class="p-items">
             <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr-group">
                <p class="p-items__name">PCR検査</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item01-group.jpg?3aed4b4a772c69be" alt="PCR検査">
                        </div>

                        <div class="p-items__right">
                             <p class="p-items__desc">PCR検査によって患者様の<br class="">新型コロナ感染の有無を検査致します。<br><span class="u-fw600">5個購入した場合　1個あたり 10,560円<br class="">10個購入した場合　1個あたり 9,768円</span></p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center">13,200</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">(税込)</span>
                                    <span class="p-items__tax">円</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">購入へ進む</p>
                </a>
            </li>

             <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr-set03-group">
                                <p class="p-items__name">PCR検査＋抗体検査</p>
                        <div class="p-items__row">
                                <div class="p-items__thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item07-group.jpg?3aed4b4a772c69be" alt="陰性証明書発行">
                                </div>

                                <div class="p-items__right">
                                     <p class="p-items__desc">PCR検査と抗体検査のセット。<br class="">抗体検査では、過去の感染歴を検査出来ます。<br class=""><span class="u-fw600">5個購入した場合　1個あたり 14,960円<br class="">10個購入した場合　1個あたり 13,068円</span></p>
                                    <div class="p-items__price-wrap">
                                        <span class="p-items__p-left">価格</span>
                                        <span class="p-items__p-center">18,700</span>
                                        <span class="p-items__p-right">
                                            <span class="p-items__tax-sub">(税込)</span>
                                            <span class="p-items__tax">円</span>
                                        </span>
                                    </div>
                                </div>
                        </div>

                        <p class="c-btn-circle-arw p-items__btn">購入へ進む</p>

                </a>

            </li>


            <li class="p-items__contents p-items__contents--quick">
                <a href="<?php echo home_url( '/' ); ?>pcr-quick-group">
                                <p class="p-items__name">PCR迅速検査</p>
                        <div class="p-items__row">
                                <div class="p-items__thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/pcr-quick-group.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                                </div>

                                <div class="p-items__right">
                                    <p class="p-items__desc">PCR検査の迅速検査になります。<br class="">速達でのご対応、優先的に検査いたします。<br class=""><span class="u-fw600">5個購入した場合　1個あたり 13,860円<br class="">10個購入した場合　1個あたり 13,068円</span></p>
                                    <div class="p-items__price-wrap">
                                        <span class="p-items__p-left">価格</span>
                                        <span class="p-items__p-center">16,500</span>
                                        <span class="p-items__p-right">
                                            <span class="p-items__tax-sub">(税込)</span>
                                            <span class="p-items__tax">円</span>
                                        </span>
                                    </div>
                                </div>
                        </div>

                        <p class="c-btn-circle-arw p-items__btn">購入・お見積りに進む</p>

                </a>

            </li>

             <li class="p-items__contents p-items__contents--quick">
                <a href="<?php echo home_url( '/' ); ?>pcr-quick-antibody-set-group">
                                <p class="p-items__name">PCR迅速検査＋抗体検査</p>
                        <div class="p-items__row">
                                <div class="p-items__thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/pcr-quick-antibody-set-group.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                                </div>

                                <div class="p-items__right">
                                    <p class="p-items__desc">PCR迅速検査と抗体検査のセットになります。<br class="">抗体検査では、過去の感染歴を検査出来ます。<br class=""><span class="u-fw600">5個購入した場合　1個あたり 18,260円<br class="">10個購入した場合　1個あたり 16,368円</span></p>
                                    <div class="p-items__price-wrap">
                                        <span class="p-items__p-left">価格</span>
                                        <span class="p-items__p-center">22,000</span>
                                        <span class="p-items__p-right">
                                            <span class="p-items__tax-sub">(税込)</span>
                                            <span class="p-items__tax">円</span>
                                        </span>
                                    </div>
                                </div>
                        </div>

                        <p class="c-btn-circle-arw p-items__btn">購入・お見積りに進む</p>

                </a>

            </li>


            <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>certificate-group">
                <p class="p-items__name">陰性証明書発行</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item02-group.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">検査の結果陰性だった方の証明書の発行も承っております。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center">5,500</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">(税込)</span>
                                    <span class="p-items__tax">円</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">購入へ進む</p>
                </a>
            </li>
          <!--   <li class="p-items__contents">
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
                                    <span class="p-items__tax-sub">(税込)</span>
                                    <span class="p-items__tax">円</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">購入へ進む</p>
                </a>
            </li> -->

            <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>certificate02-group">
                <p class="p-items__name">【渡航用】陰性証明書発行</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item03-group.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">渡航先指定のフォーマットに合わせて陰性証明書を発行致します。<br>事前にフォーマットやテンプレートの送付をお願い致します。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center">11,000</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">(税込)</span>
                                    <span class="p-items__tax">円</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">購入へ進む</p>
                </a>
            </li>

            <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>certificate03-group">
                <p class="p-items__name">診断書の作成</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item08-group.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">診断書の作成を行っております。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center">11,000</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">(税込)</span>
                                    <span class="p-items__tax">円</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">購入へ進む</p>
                </a>
            </li>

            <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>introduction-group">
                <p class="p-items__name">紹介状の作成</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item09-group.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">紹介状の作成を行っております。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center">5,500</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">(税込)</span>
                                    <span class="p-items__tax">円</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">購入へ進む</p>
                </a>
            </li>
        </ul>


    </div>
    <!--<div class="panel">Content-C</div>-->
</div>

<script>
jQuery(function($){
    $('.tab').click(function(){
        $('.is-active').removeClass('is-active');
        $(this).addClass('is-active');
        $('.is-show').removeClass('is-show');
        // クリックしたタブからインデックス番号を取得
        const index = $(this).index();
        // クリックしたタブと同じインデックス番号をもつコンテンツを表示
        $('.panel').eq(index).addClass('is-show');
    });
});
</script>

<style>
.tab-group{
    display: flex;
    justify-content: center;
}
.tab{
flex-grow: 1;
    padding: 12px 0px;
    font-weight: bold;
font-size: 28px;
    text-align: center;
    cursor: pointer;
    background: #5f5f5f;
    color: #FFF;
    width: 50%;
    transition: all 0.2s ease-out;
}
.panel-group{
}
.panel{
    display:none;
}
.tab.is-active{
    background: #003cff;
    color: #FFF;
    transition: all 0.2s ease-out;
}
.panel.is-show{
    display:block;
padding-top: 35px;
}
	.tab-group .tab.is-active:nth-of-type(1){
    background: #003cff;
}
.tab-group .tab.is-active:nth-of-type(2){
    background: #ff4b4b;
	}
.p-flow_img {
    padding-bottom: 100px;
}
@media (max-width: 767px) {
.tab{
font-size: 18px;
}
}
</style>














        <p class="u-tc u-mb15">
    PCR検査・抗体検査は、検査資料から、新型コロナウィルスに特徴的なRNA配列が検出されるかどうかを検査するものであり、<br class="u-pc">検査結果から得られる情報は限定的であることをご了解ください。
</p>

       <p class="u-tc u-mb15">当院のPCR 検査は希望する方皆様を対象にした検査のため、自費診療となります。<br>「渡航歴があり体調が優れない」「感染者との濃厚接触歴があり<br class="u-sp">体調が優れない」方など、行政検査条件を満たす方は自治体管轄の施設で<br class="u-pc">保険診療としてお受けできる場合がございますので、お住まい地域の保健所のご相談窓口へご相談ください。</p>





</div>
</section>








<section class="p-question bg-section-gray" id="link-com-faq">
    <div class="l-inner">

                <h2 class="c-ttl-under-center p-question__ttl c-blue">よくある質問</h2>

                <div class="p-question-list">

                       <?php
                                        global $max_num_page;
                                        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                                        $args = array(
                                        'post_type' => 'faq',
                                        'tax_query' => array (
                                                        array (
                                                          'taxonomy' => 'faq_kind',
                                                          'field'    => 'slug',
                                                          'terms'    => array('corporation')
                                                        )
                                                      ),
                                        'posts_per_page' => 6,
                                        'orderby' => 'date',
                                        'order' => 'DESC',
                                        'paged' => $paged,
                                        );
                                        $the_query = new WP_Query( $args );
                                      while ( $the_query->have_posts() ) : $the_query->the_post();
                                      ?>



                        <dl class="p-question-box">
                            <dt class="p-question-box__ttl js-accordion">
                                <span class="p-question-box__fst-letter u-f-futura c-blue02">Q.</span>
                                <span class="p-question-box__qa-text"><?php the_title(); ?></span>
                            </dt>
                            <dd class="p-question-box__answer">
                                <span class="p-question-box__fst-letter u-f-futura c-pink02">A.</span>
                                <p class="p-question-box__answer-text"><?php remove_filter('the_content', 'wpautop'); ?><?php the_content(); ?></p>
                            </dd>
                        </dl>

                    <?php endwhile; wp_reset_postdata(); ?>



                        <a href="<?php echo home_url( '/' ); ?>faq-corporation/" class="c-btn-circle-arw p-question__btn">よくある質問一覧へ</a>



                </div>


    </div>
</section>











<section class="p-specific-trade">

<div class="l-inner">
 <h2 class="c-ttl-under-center p-cancel__ttl">返品・交換・キャンセル等</h2>
        <p class="u-tc p-cancel__desc u-mb1-5rem">キットや証明書発行は手配の性質上、<br class="u-sp">キャンセル・返品はお受けできません。<br class="">ご同意いただける方のみ、お申し込みください。</p>

         <p class="u-tc p-cancel__desc">外箱及び、商品本体に傷や打痕(へこみ)等の破損が見受けられる場合、運送会社の事故処理(運送保険)での、<br class="">交換対応及び、返金対応となりますので、その場で配達したドライバーに申し出て頂くか、<br>直接配送業者にご連絡をお願いいたします。<br class=""><br class="">商品が不良の場合のみ良品と交換致します。</p>
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
                <dd class="p-clinic-info-table__desc">
                    <a href="<?php echo home_url( '/' ); ?>tel/new-tel.html" class="c-pink" target="_blank">個人 0120-936-760</a><br>
            <a href="<?php echo home_url( '/' ); ?>tel/campany.html" class="c-pink" target="_blank">企業・団体 06-4708-8082</a>
        </dd>
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




<script src="https://ajaxzip3.github.io/ajaxzip3.js?6dbddba84c650683" charset="UTF-8"></script>
<link rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css?6dbddba84c650683">
                 <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js?6dbddba84c650683"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js?6dbddba84c650683"></script>



<script>

  jQuery(function($) {
    jQuery('#js-zip').keyup( function(e) {
        AjaxZip3.zip2addr(this,'','都道府県','市区町村','町名番地');
    } )
} );
if ( $('.mw_wp_form .error')[0] ) {
	var errorEl = $('.mw_wp_form .error').eq(0);
	var position = errorEl.parent().offset().top;

	$('body,html').delay(200).animate({scrollTop:position - 40}, 600, 'swing');
}

jQuery('#js-date').datepicker({
  dateFormat: 'yy年mm月dd日',
  minDate: 0,
  maxDate: 120,
  autoclose: true,
  showOtherMonths: true,
  selectOtherMonths: true
});




$('#js-ssss').on("change load",function () {
  var val = $('#js-ssss option:selected').val();

  if (val === 'その他') {
  $("#js-select-hidden").addClass("is-input-show");
  }

  else {
    $("#js-select-hidden").removeClass("is-input-show");
  }

});


$(window).on('load', function() {
var val = $('#js-ssss option:selected').val();
if (val === 'その他') {
  $("#js-select-hidden").addClass("is-input-show");
  }

  else {
    $("#js-select-hidden").removeClass("is-input-show");
  }
});




    </script>


<?php get_footer();?>
