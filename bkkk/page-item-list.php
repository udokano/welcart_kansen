<?php
/*
Template Name: 商品一覧
*/
?>
<?php get_header();?>



<?php $locale = get_locale();  ?>

<?php if ('ja' == $locale): ?>

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

  <ul class="p-items">
             <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr">
                <p class="p-items__name">PCR検査キット</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item01_old.jpg?3aed4b4a772c69be" alt="PCR検査">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">PCR検査によって患者様の感染の有無を検査致します。<br>早めに発見することにより、感染拡大を防ぎます。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center"><!-- 18,000 -->9,000</span>
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
                <a href="<?php echo home_url( '/' ); ?>pcr-set05">
                <p class="p-items__name">PCR検査キット5回セット</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item10_old.jpg?3aed4b4a772c69be" alt="PCR検査">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">PCR検査キットの5回セット販売になります。まとめて購入されたい方はこちらのプランがおすすめです。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center">59,200</span>
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
                <a href="<?php echo home_url( '/' ); ?>pcr-set10">
                <p class="p-items__name">PCR検査キット10回セット</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item11_old.jpg?3aed4b4a772c69be" alt="PCR検査">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">PCR検査キットの10回セット販売になります。まとめて購入されたい方はこちらのプランがおすすめです。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center"><!-- 18,000 -->80,000</span>
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
                <a href="<?php echo home_url( '/' ); ?>pcr-set100">
                <p class="p-items__name">PCR検査キット100回セット</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item01-set100.jpg?3aed4b4a772c69be" alt="PCR検査">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">PCR検査キットの100回セット販売になります。まとめて購入されたい方はこちらのプランがおすすめです。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center">750,000</span>
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


           <!--   <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr-set500">
                <p class="p-items__name">PCR検査キット500回セット</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item01-set500.jpg?3aed4b4a772c69be" alt="PCR検査">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">PCR検査キットの500回セット販売になります。まとめて購入されたい方はこちらのプランがおすすめです。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center">3,500,000</span>
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

            <!-- <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr-set1000">
                <p class="p-items__name">PCR検査キット1000回セット</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item01-set1000.jpg?3aed4b4a772c69be" alt="PCR検査">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">PCR検査キットの1000回セット販売になります。まとめて購入されたい方はこちらのプランがおすすめです。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center">6,500,000</span>
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


            <!-- <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr-set5000">
                <p class="p-items__name">PCR検査キット5000回セット</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item01-set5000.jpg?3aed4b4a772c69be" alt="PCR検査">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">PCR検査キットの5000回セット販売になります。まとめて購入されたい方はこちらのプランがおすすめです。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center">30,000,000</span>
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
                <a href="<?php echo home_url( '/' ); ?>pcr-quick">
                <p class="p-items__name">PCR迅速検査</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item01-quick.jpg?3aed4b4a772c69be" alt="PCR検査">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">PCR検査の迅速検査になります。早めに検査結果を知りたい方はこちらがおすすめです。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center"><!-- 18,000 -->12,000</span>
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
                <a href="<?php echo home_url( '/' ); ?>pcr-quick-set10">
                <p class="p-items__name">PCR迅速検査10回セット</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item01-quick-set10.jpg?3aed4b4a772c69be" alt="PCR検査">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">PCR検査の迅速検査の10回セットになります。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center"><!-- 18,000 -->110,000</span>
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
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item07_old.jpg?3aed4b4a772c69be" alt="陰性証明書発行">
                                </div>

                                <div class="p-items__right">
                                    <p class="p-items__desc">PCR検査と抗体検査のセットになります。検査から抗体の有無の確認までスムーズに行いたい方にはこちらのプランが向いています。</p>
                                    <div class="p-items__price-wrap">
                                        <span class="p-items__p-left">価格</span>
                                        <span class="p-items__p-center">14,000</span>
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
                <a href="<?php echo home_url( '/' ); ?>pcr-antibody-set05">
                                <p class="p-items__name">PCR検査＋抗体検査(5回セット)</p>
                        <div class="p-items__row">
                                <div class="p-items__thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item12_old.jpg?3aed4b4a772c69be" alt="陰性証明書発行">
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

            </li> -->

             <li class="p-items__contents" >
                <a href="<?php echo home_url( '/' ); ?>pcr-antibody-set10">
                                <p class="p-items__name">PCR検査＋抗体検査(10回セット)</p>
                        <div class="p-items__row">
                                <div class="p-items__thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item13_old.jpg?3aed4b4a772c69be" alt="陰性証明書発行">
                                </div>

                                <div class="p-items__right">
                                    <p class="p-items__desc">PCR検査と抗体検査の10回セットになります。検査から抗体の有無の確認までをまとめて行いたい方にはこちらのプランが向いています。</p>
                                    <div class="p-items__price-wrap">
                                        <span class="p-items__p-left">価格</span>
                                        <span class="p-items__p-center">130,000</span>
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
                                <span class="p-items__p-center"><!-- 10,000 -->5,000</span>
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
                                <span class="p-items__p-center"><!-- 20,000 -->10,000</span>
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

<?php elseif ('en_US' == $locale): ?>

<div class="p-pages-ttl-area --ttl-bg-items u-bg-cover" id="js-pages-head">
        <div class="p-pages-ttl-area__inner --inner-item">
              <div class="p-pages-ttl-area__texts --texts--item-list">
                        <h1 class="p-pages-ttl-area__ttl --ttl--item-list">Purchase application / Issue of certificate</h1>
                <p class="p-pages-ttl-area__sub">To purchase the specimen collection kit or PCR test negative certificate,
click here</p>
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

  <ul class="p-items p-items--other">
             <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr-en">
                <p class="p-items__name">PCR test</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item01_old.jpg?3aed4b4a772c69be" alt="PCR検査">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">The PCR test is used to check for coronavirus infection.By detecting it early, we can prevent the spread of the infection.</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">Price</span>
                                <span class="p-items__p-center"><!-- 18,000 -->14,800</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">(ex. tax)</span>
                                    <span class="p-items__tax">yen</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">Go to purchase</p>
                </a>
            </li>

               <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr-set05-en">
                <p class="p-items__name">Set of 5 PCR test kits</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item10-en.jpg?3aed4b4a772c69be" alt="PCR検査">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">A set of 5 PCR test kits. This plan is recommended for those who want to purchase in bulk.</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">Price</span>
                                <span class="p-items__p-center"><!-- 18,000 -->59,200</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">(ex. tax)</span>
                                    <span class="p-items__tax">yen</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">Go to purchase</p>
                </a>
            </li>

               <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr-set10-en">
                <p class="p-items__name">Set of 10 PCR test kits</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item11-en.jpg?3aed4b4a772c69be" alt="PCR検査">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">A set of 10 PCR test kits. This plan is recommended for those who want to purchase in bulk.</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">Price</span>
                                <span class="p-items__p-center"><!-- 18,000 -->88,800</span>
                                <span class="p-items__p-right">
                                     <span class="p-items__tax-sub">(ex. tax)</span>
                                    <span class="p-items__tax">yen</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">購入へ進む</p>
                </a>
            </li>


             <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr-set03-en">
                                <p class="p-items__name">PCR test + antibody test</p>
                        <div class="p-items__row">
                                <div class="p-items__thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item07_old.jpg?3aed4b4a772c69be" alt="陰性証明書発行">
                                </div>

                                <div class="p-items__right">
                                    <p class="p-items__desc">A set of a PCR test and an antibody test. This plan is suitable for those who want to go smoothly from infection testing to confirming the presence or absence of antibodies.</p>
                                    <div class="p-items__price-wrap">
                                        <span class="p-items__p-left">Price</span>
                                        <span class="p-items__p-center">19,800</span>
                                        <span class="p-items__p-right">
                                          <span class="p-items__tax-sub">(ex. tax)</span>
                                    <span class="p-items__tax">yen</span>
                                        </span>
                                    </div>
                                </div>
                        </div>

                       <p class="c-btn-circle-arw p-items__btn">Go to purchase</p>

                </a>

            </li>

             <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr-antibody-set05-en">
                                <p class="p-items__name">PCR test + antibody test (set of 5)</p>
                        <div class="p-items__row">
                                <div class="p-items__thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item12-en.jpg?3aed4b4a772c69be" alt="陰性証明書発行">
                                </div>

                                <div class="p-items__right">
                                    <p class="p-items__desc">A set of 5 PCR tests and antibody tests. This plan is suitable for those who want to do the whole process from infection testing to confirming the presence of antibodies in one session.</p>
                                    <div class="p-items__price-wrap">
                                        <span class="p-items__p-left">Price</span>
                                        <span class="p-items__p-center">79,200</span>
                                        <span class="p-items__p-right">
                                           <span class="p-items__tax-sub">(ex. tax)</span>
                                    <span class="p-items__tax">yen</span>
                                        </span>
                                    </div>
                                </div>
                        </div>

                        <p class="c-btn-circle-arw p-items__btn">Go to purchase</p>

                </a>

            </li>

             <li class="p-items__contents" >
                <a href="<?php echo home_url( '/' ); ?>pcr-antibody-set10-en">
                                <p class="p-items__name"> PCR test + antibody test (set of 10)</p>
                        <div class="p-items__row">
                                <div class="p-items__thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item14-en.jpg?3aed4b4a772c69be" alt="陰性証明書発行">
                                </div>

                                <div class="p-items__right">
                                    <p class="p-items__desc">A set of 10 PCR tests and antibody tests. This plan is suitable for those who want to do the whole process from testing to confirming the presence of antibodies in one session.</p>
                                    <div class="p-items__price-wrap">
                                        <span class="p-items__p-left">Price</span>
                                        <span class="p-items__p-center">118,800</span>
                                        <span class="p-items__p-right">
                                            <span class="p-items__tax-sub">(ex. tax)</span>
                                    <span class="p-items__tax">yen</span>
                                        </span>
                                    </div>
                                </div>
                        </div>

                        <p class="c-btn-circle-arw p-items__btn">Go to purchase</p>

                </a>

            </li>

            <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>certificate-en">
                <p class="p-items__name">Issue of PCR test negative certificate</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item02.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">We can also issue certificates for those who are negative as a result of the coronavirus test.For the certificate, you can choose from A5 or business card size.</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">Price</span>
                                <span class="p-items__p-center"><!-- 10,000 -->5,000</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">(ex. tax)</span>
                                    <span class="p-items__tax">yen</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">Go to purchase</p>
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
                <a href="<?php echo home_url( '/' ); ?>certificate02-en">
                <p class="p-items__name">[For travel] Issue of PCR test negative certificate </p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item04.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">We can issue the negative certificate in the format specified by your travel destination.Please send the format and template in advance.</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">Price</span>
                                <span class="p-items__p-center"><!-- 20,000 -->10,000</span>
                                <span class="p-items__p-right">
                                   <span class="p-items__tax-sub">(ex. tax)</span>
                                    <span class="p-items__tax">yen</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">Go to purchase</p>
                </a>
            </li>

            <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>certificate03-en">
                <p class="p-items__name">Preparation of medical certificates</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item08.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">We provide medical certificates.</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">Price</span>
                                <span class="p-items__p-center">10,000</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">(ex. tax)</span>
                                    <span class="p-items__tax">yen</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">Go to purchase</p>
                </a>
            </li>

            <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>introduction-en">
                <p class="p-items__name">Preparation of referral letters </p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item09.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">We provide referral letters.</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">Price</span>
                                <span class="p-items__p-center">5,000</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">(ex. tax)</span>
                                    <span class="p-items__tax">yen</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">Go to purchase</p>
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
    The PCR test / antibody test checks whether the RNA sequences specific to the new coronavirus are detected from the test data.
Please understand that the information obtained from the test results is limited.</p>





</div>
</section>

<!-- 送料追加の旨を記載 -->


<section class="p-transport-price">
    <div class="l-inner">
 <h2 class="p-transport-price__ttl">About shipping costs</h2>
<p class="u-tc">
Please refer to <a href="<?php echo home_url( '/' ); ?>postage" class="c-pink">this page</a> for shipping costs.

</p>
    </div>
</section>






<section class="p-specific-trade">

<div class="l-inner">
 <h2 class="c-ttl-under-center p-cancel__ttl">Returns, exchanges, cancellations, etc.</h2>
        <p class="u-tc p-cancel__desc u-mb1-5rem">Due to the nature of the arrangement, <br>we cannot accept cancellations or returns for kits and certificates.<br>Please apply only if you agree to these terms.</p>

         <p class="u-tc p-cancel__desc">f damage such as scratches or dents is found on the outer box or the product body,<br> exchanges and refunds will be provided according to the transportation company's accident handling (transportation insurance) policy. <br>P lease ask the driver who delivered it on the spot, or contact the delivery company directly.<br class=""><br class="">We will exchange the product for a good one only if it is defective.</p>
<h2 class="c-ttl-under-center p-specific-trade__ttl">About the Act on Specified Commercial Transaction</h2>
<div class="p-clinic-info-table-warp --specific-table">
            <dl class="p-clinic-info-table  ">
                <dt class="p-clinic-info-table__ttl">Name of Clinic</dt>
                <dd class="p-clinic-info-table__desc"><a href="https://souki-kai.or.jp/group.html" class="u-text-under-line c-blue" target="_blank">Sokikai Medical Association</a>  <br class="u-sp">Infectious Disease Testing Clinic</dd>
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
                <dt class="p-clinic-info-table__ttl">Clinic <br class="u-sp">location</dt>
                <dd class="p-clinic-info-table__desc">3F, Ookini Nishishinsaibashi BirthPlace Bldg.,2-13-16 Nishishinsaibashi, Chuo-ku, Osaka-shi, Osaka-fu, 542-0086, Japan </dd>
            </dl>
             <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">Telephone number</dt>
                <dd class="p-clinic-info-table__desc">
                    <a href="<?php echo home_url( '/' ); ?>tel/kansenshou.html" class="c-pink" target="_blank">Individuals 0120-088-120</a><br>
            <a href="<?php echo home_url( '/' ); ?>tel/campany.html" class="c-pink" target="_blank">Companies / Organizations 06-4708-8082</a>
        </dd>
            </dl>

            <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">Contact Us</dt>
                <dd class="p-clinic-info-table__desc"><a href="<?php echo home_url( '/' ); ?>contact" class="c-pink" target="_blank">For enquiries, </a>please use the e-mail form.</dd>
            </dl>

             <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">Sales price</dt>
                <dd class="p-clinic-info-table__desc">Display product sales price for each product</dd>
            </dl>

            <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">Necessary charges other than the product price</dt>
                <dd class="p-clinic-info-table__desc">Consumption tax</dd>
            </dl>

             <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">Delivery time</dt>
                <dd class="p-clinic-info-table__desc">1-2 days later<br>※Please note that delivery may be delayed due to bad weather, the convenience of the delivery company, or some other reason.</dd>
            </dl>

             <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">Payment method</dt>
                <dd class="p-clinic-info-table__desc">Credit card (VISA, MASTERCARD)</dd>
            </dl>

            <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">Handling of personal<br class="u-sp"> information</dt>
                <dd class="p-clinic-info-table__desc">We will comply with our <a href="<?php echo home_url( '/' ); ?>privacy" class="c-pink" target="_blank">privacy policy,</a> and strive to protect the privacy of our customers.</dd>
            </dl>
        </div>
        <!-- ./p-clinic-info-table__warp -->


</div>

</section>

<?php elseif ('zh_CN' == $locale): ?>


    <div class="p-pages-ttl-area --ttl-bg-items u-bg-cover" id="js-pages-head">
        <div class="p-pages-ttl-area__inner --inner-item">
              <div class="p-pages-ttl-area__texts --texts--item-list">
                        <h1 class="p-pages-ttl-area__ttl --ttl--item-list">申请购买及出具证明</h1>
                <p class="p-pages-ttl-area__sub">购买样本回收套件及阴性证明的请点击这里</p>
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

  <ul class="p-items p-items--other">
             <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr-zh">
                <p class="p-items__name">PCR检测</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item01_old.jpg?3aed4b4a772c69be" alt="PCR検査">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">通过PCR检测，检测患者有无感染。通过尽早发现、预防感染扩大。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">价格</span>
                                <span class="p-items__p-center"><!-- 18,000 -->14,800</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">（不含税）</span>
                                    <span class="p-items__tax">日元</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">进入购买</p>
                </a>
            </li>

               <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr-set05-zh">
                <p class="p-items__name">PCR检测套件5次一套</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item10-zh.jpg?3aed4b4a772c69be" alt="PCR検査">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">销售PCR检测套件的5次一套。想集中购买的话，我们推荐这个套餐。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">价格</span>
                                <span class="p-items__p-center"><!-- 18,000 -->59,200</span>
                               <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">（不含税）</span>
                                    <span class="p-items__tax">日元</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">进入购买</p>
                </a>
            </li>

               <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr-set10-zh">
                <p class="p-items__name">PCR检测套件10次一套</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item11-zh.jpg?3aed4b4a772c69be" alt="PCR検査">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">销售PCR检测套件的10次一套。想集中购买的话，我们推荐这个套餐。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">价格</span>
                                <span class="p-items__p-center"><!-- 18,000 -->88,800</span>
                               <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">（不含税）</span>
                                    <span class="p-items__tax">日元</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">进入购买</p>
                </a>
            </li>


             <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr-set03-zh">
                                <p class="p-items__name">PCR检测＋抗体检测</p>
                        <div class="p-items__row">
                                <div class="p-items__thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item07_old.jpg?3aed4b4a772c69be" alt="陰性証明書発行">
                                </div>

                                <div class="p-items__right">
                                    <p class="p-items__desc">这是PCR检测＋抗体检测的套餐。想顺利地进行从检测到确认有无抗体的人士适合这个套餐</p>
                                    <div class="p-items__price-wrap">
                                        <span class="p-items__p-left">价格</span>
                                        <span class="p-items__p-center">19,800</span>
                                        <span class="p-items__p-right">
                                            <span class="p-items__tax-sub">（不含税）</span>
                                            <span class="p-items__tax">日元</span>
                                        </span>
                                    </div>
                                </div>
                        </div>

                       <p class="c-btn-circle-arw p-items__btn">进入购买</p>

                </a>

            </li>

             <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr-antibody-set05-zh">
                                <p class="p-items__name">PCR检测＋抗体检测（5次一套）</p>
                        <div class="p-items__row">
                                <div class="p-items__thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item12-zh.jpg?3aed4b4a772c69be" alt="陰性証明書発行">
                                </div>

                                <div class="p-items__right">
                                    <p class="p-items__desc">这是PCR检测＋抗体检测的5次套餐。想集中进行从检测到确认有无抗体的人士适合这个套餐。</p>
                                    <div class="p-items__price-wrap">
                                        <span class="p-items__p-left">价格</span>
                                        <span class="p-items__p-center">79,200</span>
                                        <span class="p-items__p-right">
                                            <span class="p-items__tax-sub">（不含税）</span>
                                            <span class="p-items__tax">日元</span>
                                        </span>
                                    </div>
                                </div>
                        </div>

                        <p class="c-btn-circle-arw p-items__btn">进入购买</p>

                </a>

            </li>

             <li class="p-items__contents" >
                <a href="<?php echo home_url( '/' ); ?>pcr-antibody-set10-zh">
                                <p class="p-items__name">PCR检测＋抗体检测（10次一套）</p>
                        <div class="p-items__row">
                                <div class="p-items__thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item14-zh.jpg?3aed4b4a772c69be" alt="陰性証明書発行">
                                </div>

                                <div class="p-items__right">
                                    <p class="p-items__desc">这是PCR检测＋抗体检测的10次套餐。想集中进行从检测到确认有无抗体的人士适合这个套餐。</p>
                                    <div class="p-items__price-wrap">
                                        <span class="p-items__p-left">价格</span>
                                        <span class="p-items__p-center">118,800</span>
                                        <span class="p-items__p-right">
                                            <span class="p-items__tax-sub">（不含税）</span>
                                            <span class="p-items__tax">日元</span>
                                        </span>
                                    </div>
                                </div>
                        </div>

                        <p class="c-btn-circle-arw p-items__btn">进入购买</p>

                </a>

            </li>

            <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>certificate-zh">
                <p class="p-items__name">出具阴性证明</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item02.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">还接受为检测结果是阴性的人士出具证明。证明可以从A5尺寸和名片尺寸这两种中选择。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">价格</span>
                                <span class="p-items__p-center"><!-- 10,000 -->5,000</span>
                                <span class="p-items__p-right">
                                            <span class="p-items__tax-sub">（不含税）</span>
                                            <span class="p-items__tax">日元</span>
                                        </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">进入购买</p>
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
                <a href="<?php echo home_url( '/' ); ?>certificate02-zh">
                <p class="p-items__name">【出具【出国用】阴性证明</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item04.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">出具符合目的地国家格式的阴性证明。事先送来格式或模板。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">价格</span>
                                <span class="p-items__p-center"><!-- 20,000 -->10,000</span>
                                <span class="p-items__p-right">
                                            <span class="p-items__tax-sub">（不含税）</span>
                                            <span class="p-items__tax">日元</span>
                                        </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">进入购买</p>
                </a>
            </li>

            <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>certificate03-zh">
                <p class="p-items__name">制作诊断书</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item08.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">制作诊断书。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">价格</span>
                                <span class="p-items__p-center">10,000</span>
                                <span class="p-items__p-right">
                                            <span class="p-items__tax-sub">（不含税）</span>
                                            <span class="p-items__tax">日元</span>
                                        </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">进入购买</p>
                </a>
            </li>

            <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>introduction-zh">
                <p class="p-items__name">制作介绍信</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item09.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">制作介绍信。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">价格</span>
                                <span class="p-items__p-center">5,000</span>
                                <span class="p-items__p-right">
                                            <span class="p-items__tax-sub">（不含税）</span>
                                            <span class="p-items__tax">日元</span>
                                        </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">进入购买</p>
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
    PCR检测及抗体检测，是检测从检测材料中能否检测出新冠病毒特征的RNA序列，<br class="">
请理解从检测结果能得到的信息是有限的。</p>





</div>
</section>

<!-- 送料追加の旨を記載 -->


<section class="p-transport-price">
    <div class="l-inner">
 <h2 class="p-transport-price__ttl">关于送货费</h2>
<p class="u-tc">送货<a href="<?php echo home_url( '/' ); ?>postage" class="c-pink">请参照这网页。</a></p>
    </div>
</section>






<section class="p-specific-trade">

<div class="l-inner">
 <h2 class="c-ttl-under-center p-cancel__ttl">退货、换货及取消订货等</h2>
        <p class="u-tc p-cancel__desc u-mb1-5rem">套件及出具证明，根据该货物筹措的性质，不接受取消订货和退货。<br class="">同意这个条件的请申请。</p>

         <p class="u-tc p-cancel__desc">箱子外部以及商品本身如果有划痕及碰撞（凹陷）等破损，将由运输公司的事故处理（运输保险）来处理换货以及退款，所以请当场向送货的司机提出，所以请当场向送货的司机提出，<br class=""><br class="">或直接与送货公司联系。</p>
<h2 class="c-ttl-under-center p-specific-trade__ttl">关于特定商业交易法</h2>
<div class="p-clinic-info-table-warp --specific-table">
            <dl class="p-clinic-info-table  ">
                <dt class="p-clinic-info-table__ttl">诊所名称</dt>
                <dd class="p-clinic-info-table__desc"><a href="https://souki-kai.or.jp/group.html" class="u-text-under-line c-blue" target="_blank">医疗法人社团 创辉会</a>  <br class="u-sp">感染症检测诊所</dd>
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
                <dt class="p-clinic-info-table__ttl">诊所所在地</dt>
                <dd class="p-clinic-info-table__desc">〒542-0086 大阪府大阪市中央区西心斋桥2-13-16 OOKINI西心斋桥BirthPlace大厦3楼</dd>
            </dl>
             <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">联系电话</dt>
                <dd class="p-clinic-info-table__desc">
                    <a href="<?php echo home_url( '/' ); ?>tel/kansenshou.html" class="c-pink" target="_blank">个人 0120-088-120</a><br>
            <a href="<?php echo home_url( '/' ); ?>tel/campany.html" class="c-pink" target="_blank">企业及团体 06-4708-8082</a>
        </dd>
            </dl>

            <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">咨询</dt>
                <dd class="p-clinic-info-table__desc">接受通过电邮形式的<a href="<?php echo home_url( '/' ); ?>contact" class="c-pink" target="_blank">咨询</a></dd>
            </dl>

             <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">销售价格</dt>
                <dd class="p-clinic-info-table__desc">对每个商品标示销售价格</dd>
            </dl>

            <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">商品货款以外的必要费用</dt>
                <dd class="p-clinic-info-table__desc">消费税</dd>
            </dl>

             <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">交付时期</dt>
                <dd class="p-clinic-info-table__desc">1~2天后<br>※有可能因天气不好或送货公司的原因，以及其他某些理由而推迟。<br>请予以理解。</dd>
            </dl>

             <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">支付方式</dt>
                <dd class="p-clinic-info-table__desc">信用卡(VISA,MASTER)</dd>
            </dl>

            <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">个人信息的处理</dt>
                <dd class="p-clinic-info-table__desc"><a href="<?php echo home_url( '/' ); ?>privacy" class="c-pink" target="_blank">遵守隐私政策，</a>努力保护顾客的隐私。</dd>
            </dl>
        </div>
        <!-- ./p-clinic-info-table__warp -->


</div>

</section>

<?php endif; ?>





<?php get_footer();?>
