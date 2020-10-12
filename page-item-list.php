<?php
/*
Template Name: 商品一覧
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


<div class="c-breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>


<section class="bg-section-gray p-item-area02">


<div class="l-inner">

<!--
<div class="p-area-not u-mt0">
            <p class="p-area-not__ttl">
                <span class="p-area-not__sub">現在のご購入・回収可能地域</span><br>東京、愛知、大阪、福岡<br><span class="p-area-not__sub">それ以外の地域は順次拡大予定となります。</span>
                   <div class="p-uuuu">※個人ご利用の場合のみ。<br><span class="p-area-not__sub">企業・団体様のご利用の場合は地域制限はございません。</span></div>
            </p>
</div> -->
<!-- ./p-area-not -->




  <!-- キャンペーンバナー -->
       <!--  <div class="p-cap p-cap--item-list">
            <img src="<?php echo get_template_directory_uri(); ?>/img/common/cap_bnr.jpg?0825" alt="期間限定8/31(月)まで期間限定でお試ししやすい価格でご提供させていただきます。" class="u-pc">

            <img src="<?php echo get_template_directory_uri(); ?>/img/common/cap_bnr_sp.jpg?0825" alt="期間限定8/31(月)まで期間限定でお試ししやすい価格でご提供させていただきます。" class="u-sp">
        </div> -->
        <!-- ./p-cap -->


         <!--  <p class="u-tc u-fw600 u-mb50 u-fz-large c-pink">※現在台風の影響で、九州エリアの配送、検体の返送に遅延が発生する場合がございます。<br class="">お住まい地域の状況を確認の上、ご購入をお願い致します。</p> -->



          <!-- modal  content01 -->
          <!-- PCR検査キット -->
    <div class="c-modal js-modal p-item-modal" id="js-modal-item01">
      <div class="c-modal__bg js-modal-close"></div>
      <div class="c-modal__inner p-item-modal__inner">
        <p class="c-modal__ttl">どちらかを選択してください</p>
        <a href="<?php echo home_url( '/' ); ?>pcr" class="c-modal__btn p-item-modal__btn">東京、名古屋、大阪、福岡にお住いの方</a>

        <a href="<?php echo home_url( '/' ); ?>pcr-out" class="c-modal__btn p-item-modal__btn">それ以外の地域にお住いの方</a>
        <p class="js-modal-close c-blue">閉じる</p>
      </div>
      <!-- ./c-modal__inner -->
    </div>
    <!-- ./c-modal -->

      <!-- modal  content02 -->
          <!-- PCR検査キット 5回セット -->
    <div class="c-modal js-modal p-item-modal" id="js-modal-item02">
      <div class="c-modal__bg js-modal-close"></div>
      <div class="c-modal__inner p-item-modal__inner">
        <p class="c-modal__ttl">どちらかを選択してください</p>
        <a href="<?php echo home_url( '/' ); ?>pcr-set05" class="c-modal__btn p-item-modal__btn">東京、名古屋、大阪、福岡にお住いの方</a>

        <a href="<?php echo home_url( '/' ); ?>pcr-set05-out" class="c-modal__btn p-item-modal__btn">それ以外の地域にお住いの方</a>
        <p class="js-modal-close c-blue">閉じる</p>
      </div>
      <!-- ./c-modal__inner -->
    </div>
    <!-- ./c-modal -->

       <!-- modal  content03 -->
          <!-- PCR検査キット 10回セット -->
    <div class="c-modal js-modal p-item-modal" id="js-modal-item03">
      <div class="c-modal__bg js-modal-close"></div>
      <div class="c-modal__inner p-item-modal__inner">
        <p class="c-modal__ttl">どちらかを選択してください</p>
        <a href="<?php echo home_url( '/' ); ?>pcr-set10" class="c-modal__btn p-item-modal__btn">東京、名古屋、大阪、福岡にお住いの方</a>

        <a href="<?php echo home_url( '/' ); ?>pcr-set10-out" class="c-modal__btn p-item-modal__btn">それ以外の地域にお住いの方</a>
        <p class="js-modal-close c-blue">閉じる</p>
      </div>
      <!-- ./c-modal__inner -->
    </div>
    <!-- ./c-modal -->

    <!-- modal  content03 -->
          <!-- PCR検査抗体検査セット -->
    <div class="c-modal js-modal p-item-modal" id="js-modal-item04">
      <div class="c-modal__bg js-modal-close"></div>
      <div class="c-modal__inner p-item-modal__inner">
        <p class="c-modal__ttl">どちらかを選択してください</p>
        <a href="<?php echo home_url( '/' ); ?>pcr-set03" class="c-modal__btn p-item-modal__btn">東京、名古屋、大阪、福岡にお住いの方</a>

        <a href="<?php echo home_url( '/' ); ?>pcr-set03-out" class="c-modal__btn p-item-modal__btn">それ以外の地域にお住いの方</a>
        <p class="js-modal-close c-blue">閉じる</p>
      </div>
      <!-- ./c-modal__inner -->
    </div>
    <!-- ./c-modal -->

        <!-- modal  content03 -->
          <!-- PCR検査抗体検査セット　5回セット -->
    <div class="c-modal js-modal p-item-modal" id="js-modal-item05">
      <div class="c-modal__bg js-modal-close"></div>
      <div class="c-modal__inner p-item-modal__inner">
        <p class="c-modal__ttl">どちらかを選択してください</p>
        <a href="<?php echo home_url( '/' ); ?>pcr-antibody-set05" class="c-modal__btn p-item-modal__btn">東京、名古屋、大阪、福岡にお住いの方</a>

        <a href="<?php echo home_url( '/' ); ?>pcr-antibody-set05-out" class="c-modal__btn p-item-modal__btn">それ以外の地域にお住いの方</a>
        <p class="js-modal-close c-blue">閉じる</p>
      </div>
      <!-- ./c-modal__inner -->
    </div>
    <!-- ./c-modal -->

      <!-- modal  content03 -->
          <!-- PCR検査抗体検査セット　10回セット -->
    <div class="c-modal js-modal p-item-modal" id="js-modal-item06">
      <div class="c-modal__bg js-modal-close"></div>
      <div class="c-modal__inner p-item-modal__inner">
        <p class="c-modal__ttl">どちらかを選択してください</p>
        <a href="<?php echo home_url( '/' ); ?>pcr-antibody-set10" class="c-modal__btn p-item-modal__btn">東京、名古屋、大阪、福岡にお住いの方</a>

        <a href="<?php echo home_url( '/' ); ?>pcr-antibody-set10-out" class="c-modal__btn p-item-modal__btn">それ以外の地域にお住いの方</a>
        <p class="js-modal-close c-blue">閉じる</p>
      </div>
      <!-- ./c-modal__inner -->
    </div>
    <!-- ./c-modal -->

  <ul class="p-items">
             <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr">
                <p class="p-items__name">PCR検査</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item01.jpg?55555555555555" alt="PCR検査">
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
                <a href="<?php echo home_url( '/' ); ?>pcr-set05">
                <p class="p-items__name">PCR検査キット5回セット</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item10_new.jpg?36d7dca331e72df0" alt="PCR検査">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">PCR検査キットの5回セット販売になります。まとめて購入されたい方はこちらのプランがおすすめです。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center"><!-- 18,000 -->59,200</span>
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
                <a href="<?php echo home_url( '/' ); ?>pcr-set10">
                <p class="p-items__name">PCR検査キット10回セット</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item11_new.jpg?36d7dca331e72df0" alt="PCR検査">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">PCR検査キットの10回セット販売になります。まとめて購入されたい方はこちらのプランがおすすめです。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center"><!-- 18,000 -->88,800</span>
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
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item07_new.jpg?55555555555555555555" alt="陰性証明書発行">
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
                <a href="<?php echo home_url( '/' ); ?>pcr-antibody-set05">
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
                                            <span class="p-items__tax-sub">(税別)</span>
                                            <span class="p-items__tax">円</span>
                                        </span>
                                    </div>
                                </div>
                        </div>

                        <p class="c-btn-circle-arw p-items__btn">購入へ進む</p>

                </a>

            </li>

             <li class="p-items__contents" >
                <a href="<?php echo home_url( '/' ); ?>pcr-antibody-set10">
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
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item02.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">検査の結果陰性だった方の証明書の発行も承っております。<br>サイズはA5または名刺サイズからお選び出来ます。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center">10,000</span>
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
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item04.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">渡航先指定のフォーマットに合わせて陰性証明書を発行致します。<br>事前にフォーマットやテンプレートの送付をお願い致します。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center">20,000</span>
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
                <a href="<?php echo home_url( '/' ); ?>certificate03">
                <p class="p-items__name">診断書の作成</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item08.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">診断書の作成を行っております。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center">10,000</span>
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
                <a href="<?php echo home_url( '/' ); ?>introduction">
                <p class="p-items__name">紹介状の作成</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item09.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">紹介状の作成を行っております。</p>
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
                                            <span class="p-items__tax-sub">(税別)</span>
                                            <span class="p-items__tax">円</span>
                                        </span>
                                    </div>
                                </div>
                        </div>

                        <p class="c-btn-circle-arw p-items__btn">購入へ進む</p>

                </a>

            </li> -->


        </ul>

        <p class="u-tc u-mb15">
    PCR検査・抗体検査は、検査資料から、新型コロナウィルスに特徴的なRNA配列が検出されるかどうかを検査するものであり、<br class="u-pc">検査結果から得られる情報は限定的であることをご了解ください。</p>





</div>
</section>

<!-- 送料追加の旨を記載 -->


<section class="p-transport-price">
    <div class="l-inner">
 <h2 class="p-transport-price__ttl">送料について</h2>
<p class="u-tc">送料は<a href="<?php echo home_url( '/' ); ?>postage" class="c-pink">こちらのページ</a>を参照してください。</p>
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
                    <a href="<?php echo home_url( '/' ); ?>tel/kansenshou.html" class="c-pink" target="_blank">個人 0120-088-120</a><br>
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
