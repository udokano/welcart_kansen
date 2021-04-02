<?php
/*
Template Name: 商品一覧--簡単検査
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


<!-- <?php include("nenmatu.php"); ?> -->



<div class="c-breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>


<section class="bg-section-gray p-item-area02">


<div class="l-inner">

<ul class="p-item-tab  ">
<li class="p-item-tab__btn is-item-active">
            <a href="<?php echo home_url( '/' ); ?>item-list-easy" class="p-item-tab__link ">
                <span class="p-item-tab__text">ミニマムパック<br><!-- <span class="u-text-under-line p-item-tab__coming">準備中</span> --></span>
            </a>
    </li>

    <li class="p-item-tab__btn">
            <a href="<?php echo home_url( '/' ); ?>item-list" class="p-item-tab__link is-item-recommend">
                <span class="p-item-tab__text">通常商品</span>
            </a>
    </li>

    <li class="p-item-tab__btn">
            <a href="<?php echo home_url( '/' ); ?>item-list-quick" class="p-item-tab__link">
                <span class="p-item-tab__text">迅速検査</span>
            </a>
    </li>
</ul>






  <ul class="p-items">
             <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr-easy">
                <p class="p-items__name">PCR検査【ミニマムパック】</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/pcr-easy.jpg?3aed4b4a772c69be" alt="PCR検査">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">PCR検査のミニマムパックになります。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center">6,600</span>
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
                <a href="<?php echo home_url( '/' ); ?>pcr-set10-easy">
                <p class="p-items__name">PCR検査10回セット【ミニマムパック】</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/pcr-set10-easy.jpg?3aed4b4a772c69be" alt="PCR検査">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">PCR検査ミニマムパックの10回セット販売になります。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                 <span class="p-items__p-center">48,840</span>
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
              <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">販売責任者</dt>
                <dd class="p-clinic-info-table__desc">
                    <img src="data:image/png;base64,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" alt="" class="p-clinic-person">
                </dd>
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
                <dd class="p-clinic-info-table__desc">クレジットカード(VISA,MASTER,JCB,Amex,Diners,Discover)</dd>
            </dl>

            <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">個人情報の<br class="u-sp">取扱い</dt>
                <dd class="p-clinic-info-table__desc"><a href="<?php echo home_url( '/' ); ?>privacy" class="c-pink" target="_blank">プライバシーポリシー</a>を遵守し、お客さまのプライバシー保護に努めます。</dd>
            </dl>
        </div>
        <!-- ./p-clinic-info-table__warp -->


</div>

</section>



<?php get_footer();?>
