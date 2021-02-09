<?php
/*
Template Name: 中国人用の案内ページ
*/
?>

<?php get_header(); ?>

<div class="p-ja-ch-fv">


<div class="p-new-key-visual" id="js-pages-head">

    <div class="p-new-key-visual__inner l-inner">

                <ul class="p-new-key-visual__switch">
                    <li class="p-new-key-visual__switch-list">
                        <a href="<?php echo home_url( '/' ); ?>ch" class="p-new-key-visual__switch-link p-new-key-visual__switch-link--current p-new-key-visual__switch-link--ja">日本語</a>
                    </li>
                      <li class="p-new-key-visual__switch-list">

                        <a href="http://souki-kai.or.jp/infectious_ch/" class="p-new-key-visual__switch-link p-new-key-visual__switch-link--zh">中国(簡体)</a>
                    </li>
                </ul>

                <div class="p-new-zh-main u-flex u-al-cent">

                    <div class="p-new-zh-main__left p-new-zh-page-ttl">
                        <p class="p-new-zh-page-ttl__sub">
                            <span class="p-new-zh-page-ttl__sub-sq u-fw600">中国渡航用</span>
                            <span class="p-new-zh-page-ttl__sub-main">新型コロナウイルス</span>
                        </p>
                        <h1 class="p-new-zh-page-ttl__catch u-fw600">PCR検査</h1>
                    </div>
                    <dl class="p-new-zh-main__right p-new-zh-fv-price">
                        <dt class="p-new-zh-fv-price__item-name u-tc u-fw600">PCR検査・抗体検査・陰性証明書</dt>
                        <dd class="p-new-zh-fv-price__bottom u-flex u-jc-cent u-al-cent">
                            <strong class="p-new-zh-fv-price__price-text u-fw600">26,000</strong>
                            <p class="p-new-zh-fv-price__price-right u-flex u-ju-st u-al-cent">
                                <span class="p-new-zh-fv-price__sub u-flex u-ff-colum u-al-cent">
                                    <span class="p-new-zh-fv-price__sub-tax">税別</span>
                                    <span class="p-new-zh-fv-price__sub-yen u-fw600">円</span>
                                </span>
                                <span class="p-new-zh-fv-price__sub-wave">~</span>
                            </p>
                        </dd>
                    </dl>
                </div>
                <!-- ./p-new-zh-main -->

                <p class="p-new-zh-bottom u-tc u-fw600">
                    <span class="p-new-zh-bottom__in">
                             <span class="p-new-zh-bottom__sp-line">当院は中国大使館指定検査機関であり、日本に数少ない</span><br class="u-sp"><span class="p-new-zh-bottom__sp-line">唾液によるPCR検査を行う、ラボ併設のクリニックです。</span>
                    </span>
                </p>

                <ul class="p-new-zh-clinic-list">
                     <li class="p-new-zh-clinic-list__item">
                        <a href="#link-clinic01" class="p-new-zh-clinic-list__name u-fw600">渋谷院</a>
                    </li>
                    <li class="p-new-zh-clinic-list__item">
                        <a href="#link-clinic02" class="p-new-zh-clinic-list__name u-fw600">大阪院</a>
                    </li>
                    <li class="p-new-zh-clinic-list__item">
                        <a href="#link-clinic03" class="p-new-zh-clinic-list__name u-fw600">福岡院</a>
                    </li>
                </ul>
    </div>
     <!-- ./p-new-key-visual__inner -->
</div>
 <!-- ./p-new-key-visual -->

<style>


/*

<div class="p-key-visual" id="js-pages-head">
    <div class="l-inner p-key-visual__inner">

                <ul class="p-key-visual__switch">
                    <li class="p-key-visual__switch-list">
                        <a href="<?php echo home_url( '/' ); ?>ch" class="p-key-visual__switch-link p-key-visual__switch-link--current p-key-visual__switch-link--ja">日本語</a>

                    </li>
                      <li class="p-key-visual__switch-list">

                        <a href="http://souki-kai.or.jp/infectious_ch/" class="p-key-visual__switch-link p-key-visual__switch-link--zh">中国(簡体)</a>
                    </li>
                </ul>

            <div class="p-key-visual__text-wrap">
                                <div class="p-key-visual__text-left">
                                    <h1 class="p-key-visual__ttl">
                                        <span class="p-key-visual__ttl-sub">新型コロナウイルス</span>PCR検査
                                    </h1>
                                </div>
                                <!-- ./p-key-visual__text-left -->

                                <div class="p-key-visual__text-right u-f-ryu">
                                   当院は中国大使館指定検査機関であり、<br class="u-pc">日本に<br class="u-sp">数少ない唾液によるPCR検査を行う、<br class="u-sp">ラボ併設のクリニックです。
                                </div>
                                <!-- ./p-key-visual__text-right -->
            </div>
            <!-- ./p-key-visual__text-wrap -->


            <ul class="p-key-visual__shop">
               <!--  <li class="p-key-visual__shop-item">
                    <a href="#link-clinic01" class="p-key-visual__shop-link">渋谷院</a>
                </li> -->
                <li class="p-key-visual__shop-item">
                    <a href="#link-clinic02" class="p-key-visual__shop-link">大阪院</a>
                </li>
                <li class="p-key-visual__shop-item">
                    <a href="#link-clinic03" class="p-key-visual__shop-link">福岡院</a>
                </li>
            </ul>




    </div>
    <!-- ./l-inner -->
</div>
<!-- ./key-visual -->
</div>

*/



</style>





<div class="p-ja-ch-pages">

<!-- 中国語ページのスタイルを使い回してかつこのページだけに適応させたいから、余分なクラスでラップ -->

<section class="p-trouble bg-section-gray">
    <div class="l-inner">

    <div class="p-trouble__wrap">

            <h2 class="p-trouble__ttl">
                <span class="p-trouble__ttl-text"><span class="p-trouble__ttl-line">中国大使館指定検査機関<br>PCR検査・抗体検査・証明書発行</span></span>
            </h2>

            <ul class="p-trouble-list">
                    <li class="p-trouble-list__item">
                        <div class="p-trouble-list__texts">
                            <p class="p-trouble-list__num u-pc-display">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_num01.png?6dbddba84c650683" alt="01">
                            </p>
                            <p class="p-trouble-list__desc">
                                 お勤め先等にPCR検査の<br class="u-sp">証明書が<br class="u-pc">必要な方
                            </p>
                        </div>
                        <!-- ./p-trouble-list__texts -->
                        <div class="p-trouble-list__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_point01.png?6dbddba84c650683" alt="01" class="u-sp">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_point01_pc.png?6dbddba84c650683" alt="" class="u-pc">
                        </div>
                        <!-- ./p-trouble-list__img -->
                    </li>
                    <li class="p-trouble-list__item">
                        <div class="p-trouble-list__texts">
                                <p class="p-trouble-list__num u-pc-display">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_num02.png?6dbddba84c650683" alt="01">
                                </p>
                                <p class="p-trouble-list__desc">
                                   海外渡航や帰国にPCR検査の証明<br class="u-pc">書が必要な方
                                </p>
                                <a href="<?php echo home_url( '/' ); ?>voyage" class="c-blue-arw-btn p-trouble-list__btn">詳しく見る</a>
                           </div>
                        <!-- ./p-trouble-list__texts -->
                        <div class="p-trouble-list__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_point02.png?6dbddba84c650683" alt="01" class="u-sp">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_point02_pc.png?6dbddba84c650683" alt="" class="u-pc">
                        </div>
                    </li>
                    <li class="p-trouble-list__item">
                         <div class="p-trouble-list__texts">
                                <p class="p-trouble-list__num u-pc-display">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_num03.png?6dbddba84c650683" alt="01">
                                </p>
                                <p class="p-trouble-list__desc">
                                     過去に新型コロナウイルス感染症に<br class="u-pc">かかっていたのではと、心配な方
                                </p>
                         </div>
                        <!-- ./p-trouble-list__texts -->
                        <div class="p-trouble-list__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_point03.png?6dbddba84c650683" alt="03" class="u-sp">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_point03_pc.png?6dbddba84c650683" alt="" class="u-pc">
                        </div>
                    </li>
                    <li class="p-trouble-list__long-desc">
                        当院は希望する全ての方が平等にPCR検査出来る仕組みを目指しています。<br>それは、症状が出ていなくても自覚者の感染早期発見に繋がり、<span class="c-bg-pt-line --sp-pb-ms c-pink">未然に集団感染を防ぐ効果がある</span>と考えているからです。
                    </li>
            </ul>

    </div>


    <style>

    /* 一旦非表示 */
/*
            <div class="p-time-line">

                    <h3 class="p-time-line__ttl"><span>検査から陰性証明書発行・渡航<br class="u-sp">までの参考日数</span></h3>

                    <ul class="p-time-line__list">
                        <li class="p-time-line__item">
                                <div class="p-time-line__arw p-time-line__arw--first">ご注文・PCR検査
                                    <span class="p-time-line__sub-text">2～4日</span>
                                </div>
                        </li>

                        <li class="p-time-line__item">

                                <div class="p-time-line__arw p-time-line__arw--second">検査キット返送・証明書の発行 <span class="p-time-line__sub-text">2～4日</span></div>
                        </li>

                        <li class="p-time-line__item">
                              <!--   <p class="p-time-line__date">2～3日</p> -->
                                <div class="p-time-line__arw p-time-line__arw--third">渡航</div>
                        </li>
                    </ul>

                    <p class="p-time-line__note">お住まいの地域や配達状況によって<br class="u-sp">大きく変わりますので、<br class="">余裕をもって<span class="c-pink">渡航の7～10日前には<br class="u-sp">ご注文ください。</span></p>

            </div>

            <h3 class="p-trouble-band js-accordion-pt2">已有某些症状的人士
                <i class="p-trouble-band__icon-plus-wrap"><span class="p-trouble-band__icon-plus js-icon-plus"></span></i>
            </h3>

            <div class="p-trouble-sub-contents">

                <p class="p-trouble-sub-contents__right">如果有“没有味觉”，“持续37.5℃以上发烧”等新冠肺炎特有的初期症状，可以接受行政检测。
如果有这种情况，请向居住地的咨询中心咨询。</p>

                <div class="p-trouble-sub-contents__tables">
                        <dl class="p-trouble-sub-contents__table-list">
                            <dt class="p-trouble-sub-contents__table-ttl">最常有的初期症状</dt>
                            <dd class="p-trouble-sub-contents__table-answer">发烧，干咳，倦怠感</dd>
                        </dl>

                        <dl class="p-trouble-sub-contents__table-list --table-right">
                            <dt class="p-trouble-sub-contents__table-ttl --table-bg-gray">有时出现的初期症状</dt>
                            <dd class="p-trouble-sub-contents__table-answer --table-right__answer">疼痛，喉咙痛，下泻，结膜炎，头痛，失去味觉或嗅觉，皮肤发疹，或手脚指的变色</dd>
                        </dl>
                </div>

            </div> */



    </style>


    </div>
</section>


<div class="p-zh-conversion">

    <ul class="p-zh-conversion__list">
        <li class="p-zh-conversion__item p-zh-conversion__item--wechat">
            <a href="https://u.wechat.com/ICEBBX89d1dC9f5990yPa14" class="p-zh-conversion__link" target="_blank">
                <p class="p-zh-conversion__texts">
                    <span class="p-zh-conversion__main p-zh-conversion__main--wechat">から来院予約</span>
                    <span class="p-zh-conversion__sub">連絡先追加後、申請欄からご希望の来院日時を入力して下さい</span>
                </p>
            </a>
        </li>

        <li class="p-zh-conversion__item p-zh-conversion__item--contact">
            <a href="<?php echo home_url( '/' ); ?>contact" class="p-zh-conversion__link">
                <p class="p-zh-conversion__texts">
                    <span class="p-zh-conversion__main p-zh-conversion__main--contact">お問合せフォームから来院予約</span>
                </p>
            </a>
        </li>
    </ul>

</div>
<!-- ./conversion -->

<style>
/* 一旦非表示 */


/*


<section class="p-cost ">
    <div class="l-inner">
        <h2 class="c-ttl-under-center p-cost__ttl c-blue">检测费用</h2>
        <p class="p-cost__desc c-blue">这是包括检测套件，邮寄，采样介绍及检测的费用。</p>

        <dl class="p-cost-price u-mb10">
                <dt class="p-cost-price__name"><span class="p-cost-price__name-in">PCR检测</span></dt>
                <dd class="p-cost-price__text"><span class="p-cost-price__text-main"><!-- 18,000 -->16,280</span><span class="p-cost-price__text-sub">日元（含税）</span></dd>
        </dl>
         <dl class="p-cost-price  u-mb10">
                <dt class="p-cost-price__name"><span class="p-cost-price__name-in">PCR检测 <br class="u-sp">5次套餐</span></dt>
                <dd class="p-cost-price__text"><span class="p-cost-price__text-main">1次 13,024</span><span class="p-cost-price__text-sub">日元（含税）</span><!-- <span class="aaaaa">＊1個あたり</span> -->
                <div class="aaaaa" style="padding-top:10px;">总计 65,120日元（含税）</div>
                </dd>
        </dl>

         <dl class="p-cost-price  u-mb10">
                <dt class="p-cost-price__name"><span class="p-cost-price__name-in">PCR检测 <br class="u-sp">10次套餐</span></dt>
                <dd class="p-cost-price__text"><span class="p-cost-price__text-main">1次 9,768</span><span class="p-cost-price__text-sub">日元（含税）</span>
               <div class="aaaaa" style="padding-top:10px;">总计 97,680日元（含税）</div></dd>
        </dl>

        <p class="p-cost__under-desc">本诊所的PCR检测是以希望检测的人士为对象，自费诊疗。<br>“有出国经历，身体状况不好”，“与感染者有过密切接触，身体状况不好”的人士等，<br class="u-pc">如果是满足行政检测条件的人士，有可能在自治体管辖的设施中使用医保进行检测，所以请向居住地保健所的咨询窗口咨询。


        <a href="<?php echo home_url( '/' ); ?>item-list" class="c-btn p-cost-btn">购买和申请请点击这里</a>

            <!-- キャンペーンバナー -->
       <!--  <div class="p-cap">
            <img src="<?php echo get_template_directory_uri(); ?>/img/common/cap_bnr.jpg?0825" alt="期間限定8/31(月)まで期間限定でお試ししやすい価格でご提供させていただきます。" class="u-pc">

            <img src="<?php echo get_template_directory_uri(); ?>/img/common/cap_bnr_sp.jpg?0825" alt="期間限定8/31(月)まで期間限定でお試ししやすい価格でご提供させていただきます。" class="u-sp">
        </div> -->
        <!-- ./p-cap -->
    </div>
    <!-- ./l-inner -->
</section>




*/


</style>


<!--  追加の渡航案内  -->



<section class="p-zh-traveling">
    <div class="l-inner">
            <h2 class="p-zh-traveling__ttl">中国への渡航について</h2>
            <div class="p-zh-traveling__contents">
                <div class="p-zh-traveling__top u-flex u-al-cent">
                    <p class="p-zh-traveling__left-text">日本から中国へ渡航する中国籍及び外国籍の旅客は、搭乗の2日前以内（検体採取日から起算）発行の新型コロナウィルスPCR検査陰性証明及び血清IgM抗体検査の性証明を提示する必要があります。</p>
                    <ul class="p-zh-traveling__right-list u-flex">
                        <li class="p-zh-traveling__right-item">
                            <div class="p-zh-traveling__right-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/zh_new/pcr_certificate.png" alt="PCR検査陰性証明書">
                            </div>
                            <!-- ./p-zh-traveling__right-img -->
                            <p class="p-zh-traveling__right-name">PCR検査陰性証明書</p>
                        </li>

                         <li class="p-zh-traveling__right-item">
                            <div class="p-zh-traveling__right-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/zh_new/antibody_testing.png" alt="抗体検査の証明書">
                            </div>
                            <!-- ./p-zh-traveling__right-img -->
                            <p class="p-zh-traveling__right-name">抗体検査の証明書</p>
                        </li>
                    </ul>
                </div>
                <!-- ./p-zh-traveling__top" -->
                <p class="p-zh-traveling__info">フライト日の<span class="p-zh-traveling__info-mark"><span class="p-zh-traveling__info-large"><i class="p-zh-traveling__info-sp-sq">2</i></span><i class="p-zh-traveling__info-sp-sq">日</i><i class="p-zh-traveling__info-sp-sq">前</i><i class="p-zh-traveling__info-sp-sq">以</i><i class="p-zh-traveling__info-sp-sq">内</i></span>にご来院ください</p>
                <p class="p-zh-traveling__note">※ご来院の際はパスポート(原本)をご用意ください。</p>
            </div>
            <!-- ./p-zh-traveling__contents -->

            <ul class="p-zh-traveling__down">
                <li class="p-zh-traveling__down-arw">
                    <p class="p-zh-traveling__down-text">渡航用ではない、通常の<br class="">ご利用が目的の方はこちらから</p>
                </li>
                <li class="p-zh-traveling__down-arw">
                    <p class="p-zh-traveling__down-text p-zh-traveling__down-text--focus">渡航用証明書をご希望の方は<br class="">「来院して検査」内から<br class="u-sp">検査キットを<br class="u-pc">購入し、来院予約を<br class="u-sp">お済ませください。</p>
                </li>
            </ul>

    </div>
    <!-- ./l-inner -->
</section>





<!--



ここからタブスタート



 -->


 <div class="js-tab-wrap p-zh-tab-wrap" id="link-tab-wrap">



 <div class="p-zh-tab-btn-out">
     <ul class="p-zh-tab-btn l-inner">
        <li class="js-tab-btn p-zh-tab-btn__item " id="js-tab-btn01">
            <div class="p-zh-tab-btn__in">
                <p class="p-zh-tab-btn__ttl p-zh-tab-btn__ttl--home">ご自宅で検査</p>
            </div>
        </li>
        <li class="js-tab-btn p-zh-tab-btn__item is-tab-active">
            <div class="p-zh-tab-btn__in">
                <p class="p-zh-tab-btn__ttl p-zh-tab-btn__ttl--tower ">来院して検査</p>
                <span class="p-zh-tab-btn__sub">（渡航用の陰性証明書発行を<br class="u-sp">ご希望の方のみ）</span>
            </div>
        </li>
    </ul>
 </div>
 <!-- ./p-zh-tab-btn-out -->



    <!--

タブエリア１つめスターと

     -->

    <div class="js-tab-contents p-zh-tab-contents">


     <section class="p-visit">

            <div class="l-inner">

                <h2 class="c-ttl-under-center p-visit__ttl c-blue u-fw600 u-tc">検査費用</h2>

                <p class="p-visit__desc u-tc u-fw600">検査キット、郵送、採取案内、検査実施を含むお値段です。</p>

                <ul class="p-visit-item">
                    <li class="p-visit-item__content">
                    <a href="<?php echo home_url( '/' ); ?>pcr" class="">
                            <div class="p-visit-item__top">
                                <h3 class="p-visit-item__ttl">PCR検査</h3>
                                <div class="p-visit-item__thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item01_old.jpg" alt="" class="">
                                </div>
                                <!-- ./p-visit-item__thumb -->
                                <div class="p-visit-item__price-area">
                                    <p class="p-visit-item__price-left">価格</p>
                                    <div class="p-visit-item__price-right">
                                        <strong class="p-visit-item__price-text">12,000</strong>
                                        <span class="p-visit-item__price-sub">
                                            <span class="p-visit-item__price-tax">税別</span>
                                            <em class="p-visit-item__price-yen">円</em>
                                        </span>
                                    </div>
                                    <!-- ./p-visit-item__price-right -->
                                </div>
                                <!-- ./p-visit-item__price-area -->
                            </div>
                            <!-- ./p-visit-item__top -->

                            <p class="p-visit-item__btn">購入ページへ<span class="p-visit-item__btn-arw"><i class="p-visit-item__btn-arw-in"></i></span></p>
                        </a>
                    </li>
                    <li class="p-visit-item__content">
                    <a href="<?php echo home_url( '/' ); ?>pcr-set05" class="">
                            <div class="p-visit-item__top">
                                <h3 class="p-visit-item__ttl">PCR検査 5回セット</h3>
                                <div class="p-visit-item__thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item10_old.jpg" alt="" class="">
                                </div>
                                <!-- ./p-visit-item__thumb -->
                                <div class="p-visit-item__price-area">
                                    <p class="p-visit-item__price-left">価格</p>
                                    <div class="p-visit-item__price-right">
                                        <strong class="p-visit-item__price-text">48,000</strong>
                                        <span class="p-visit-item__price-sub">
                                            <span class="p-visit-item__price-tax">税別</span>
                                            <em class="p-visit-item__price-yen">円</em>
                                        </span>
                                    </div>
                                    <!-- ./p-visit-item__price-right -->
                                </div>
                                <!-- ./p-visit-item__price-area -->
                            </div>
                            <!-- ./p-visit-item__top -->

                            <p class="p-visit-item__btn">購入ページへ<span class="p-visit-item__btn-arw"><i class="p-visit-item__btn-arw-in"></i></span></p>
                        </a>
                    </li>
                    <li class="p-visit-item__content">
                    <a href="<?php echo home_url( '/' ); ?>pcr-set10" class="">
                            <div class="p-visit-item__top">
                                <h3 class="p-visit-item__ttl">PCR検査 10回セット</h3>
                                <div class="p-visit-item__thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item11_old.jpg" alt="" class="">
                                </div>
                                <!-- ./p-visit-item__thumb -->
                                <div class="p-visit-item__price-area">
                                    <p class="p-visit-item__price-left">価格</p>
                                    <div class="p-visit-item__price-right">
                                        <strong class="p-visit-item__price-text">88,800</strong>
                                        <span class="p-visit-item__price-sub">
                                            <span class="p-visit-item__price-tax">税別</span>
                                            <em class="p-visit-item__price-yen">円</em>
                                        </span>
                                    </div>
                                    <!-- ./p-visit-item__price-right -->
                                </div>
                                <!-- ./p-visit-item__price-area -->
                            </div>
                            <!-- ./p-visit-item__top -->

                            <p class="p-visit-item__btn">購入ページへ<span class="p-visit-item__btn-arw"><i class="p-visit-item__btn-arw-in"></i></span></p>
                        </a>
                    </li>
                </ul>

                <p class="u-tc u-mt20">当院のPCR 検査は希望する方皆様を対象にした検査のため、自由診療となります。<br class="">「渡航歴があり体調が優れない」「感染者との濃厚接触歴があり<br class="">体調が優れない」方など、行政検査条件を満たす方は自治体管轄の施設で<br class="">保険診療としてお受けできる場合がございますので、お住まい地域の保健所のご相談窓口へご相談ください。</p>

            </div>
            <!-- ./l-inner -->
        </section>


<section class="p-zh-flow bg-section-gray" id="link-use">


    <div class="l-inner">

            <h2 class="c-ttl-under-center p-zh-flow__ttl u-fw600 c-blue">検査の申し込み方法</h2>

            <p class="p-zh-flow__desc u-tc">「we chat」を使用して、ビデオチャットにて検体採取のご案内を行います。<br class="">事前のご準備をお願いします。</p>


            <ul class="p-zh-flow-list u-flex-wrap u-flex">

                <li class="p-zh-flow-list__item">
                    <h3 class="p-zh-flow-list__ttl">
                        <span class="p-zh-flow-list__num-wrap">
                            <span class="p-zh-flow-list__step">step</span>
                            <span class="p-zh-flow-list__number">01</span>
                        </span>
                        <span class="p-zh-flow-list__ttl-text u-fw600">検査キットの購入</span>
                    </h3>

                    <div class="p-zh-flow-list__bottom u-al-cent u-flex">

                        <div class="p-zh-flow-list__left">
                                <p class="p-zh-flow-list__text">当サイトから検体採取キットをご購入いただきます。<br class="">ご注文確認後、即日発送致します。</p>

                                <a href="<?php echo home_url( '/' ); ?>item-list" class="c-btn-circle-arw p-zh-flow-list__btn">ご購入はこちら</a>
                        </div>
                        <!-- ./p-zh-flow-list__left -->
                        <div class="p-zh-flow-list__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/flow_zh01.png" alt="検査キットの購入">
                        </div>
                        <!-- ./ p-zh-flow-list__thumb-->

                    </div>
                    <!-- ./p-zh-flow-list__bottom -->
                </li>

                 <li class="p-zh-flow-list__item">
                    <h3 class="p-zh-flow-list__ttl">
                        <span class="p-zh-flow-list__num-wrap">
                            <span class="p-zh-flow-list__step">step</span>
                            <span class="p-zh-flow-list__number">02</span>
                        </span>
                        <span class="p-zh-flow-list__ttl-text u-fw600">ビデオチャットの予約</span>
                    </h3>

                    <div class="p-zh-flow-list__bottom u-al-cent u-flex">

                        <div class="p-zh-flow-list__left">
                                <p class="p-zh-flow-list__text">採取キットが届きましたら、封筒表紙の案内に沿って、we chatに当院の連絡先を追加して下さい。</p>


                        </div>
                        <!-- ./p-zh-flow-list__left -->
                        <div class="p-zh-flow-list__thumb p-zh-flow-list__thumb--wechat">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/flow_zh02.png" alt="WECHAT"  class="p-zh-flow-list__wechat">
                            <a href="https://u.wechat.com/ICEBBX89d1dC9f5990yPa14" class="c-btn-circle-arw p-zh-flow-list__btn p-zh-flow-list__btn--wechat" target="_blank">連絡先追加はこちら</a>
                        </div>
                        <!-- ./ p-zh-flow-list__thumb-->

                    </div>
                    <!-- ./p-zh-flow-list__bottom -->
                </li>

                 <li class="p-zh-flow-list__item">
                    <h3 class="p-zh-flow-list__ttl">
                        <span class="p-zh-flow-list__num-wrap">
                            <span class="p-zh-flow-list__step">step</span>
                            <span class="p-zh-flow-list__number">03</span>
                        </span>
                        <span class="p-zh-flow-list__ttl-text u-fw600">検体の採取</span>
                    </h3>

                    <div class="p-zh-flow-list__bottom u-al-cent u-flex">

                        <div class="p-zh-flow-list__left">
                                <p class="p-zh-flow-list__text">予約のお時間になりましたら、ビデオチャットを開始致します。<br class="">スタッフの指示に従って検体の採取を行なって下さい。</p>

                        </div>
                        <!-- ./p-zh-flow-list__left -->
                        <div class="p-zh-flow-list__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/flow_zh03.png" alt="検体の採取">
                        </div>
                        <!-- ./ p-zh-flow-list__thumb-->

                    </div>
                    <!-- ./p-zh-flow-list__bottom -->
                </li>

                 <li class="p-zh-flow-list__item">
                    <h3 class="p-zh-flow-list__ttl">
                        <span class="p-zh-flow-list__num-wrap">
                            <span class="p-zh-flow-list__step">step</span>
                            <span class="p-zh-flow-list__number">04</span>
                        </span>
                        <span class="p-zh-flow-list__ttl-text u-fw600">当院へ返送</span>
                    </h3>

                    <div class="p-zh-flow-list__bottom u-al-cent u-flex">

                        <div class="p-zh-flow-list__left">
                                <p class="p-zh-flow-list__text">検体の採取が終わりましたら、梱包して頂き当院への返送をお願い致します。</p>

                        </div>
                        <!-- ./p-zh-flow-list__left -->
                        <div class="p-zh-flow-list__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/flow_zh04.png" alt="当院へ返送">
                        </div>
                        <!-- ./ p-zh-flow-list__thumb-->

                    </div>
                    <!-- ./p-zh-flow-list__bottom -->
                </li>


                 <li class="p-zh-flow-list__item">
                    <h3 class="p-zh-flow-list__ttl">
                        <span class="p-zh-flow-list__num-wrap">
                            <span class="p-zh-flow-list__step">step</span>
                            <span class="p-zh-flow-list__number">05</span>
                        </span>
                        <span class="p-zh-flow-list__ttl-text u-fw600">PCR検査の実施</span>
                    </h3>

                    <div class="p-zh-flow-list__bottom u-al-cent u-flex">

                        <div class="p-zh-flow-list__left">
                                <p class="p-zh-flow-list__text">検体が当院へ到着後、PCR検査を実施致します。</p>

                        </div>
                        <!-- ./p-zh-flow-list__left -->
                        <div class="p-zh-flow-list__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/flow_zh05.png" alt="PCR検査の実施">
                        </div>
                        <!-- ./ p-zh-flow-list__thumb-->

                    </div>
                    <!-- ./p-zh-flow-list__bottom -->
                </li>

                <li class="p-zh-flow-list__item">
                    <h3 class="p-zh-flow-list__ttl">
                        <span class="p-zh-flow-list__num-wrap">
                            <span class="p-zh-flow-list__step">step</span>
                            <span class="p-zh-flow-list__number">06</span>
                        </span>
                        <span class="p-zh-flow-list__ttl-text u-fw600">結果の通知</span>
                    </h3>

                    <div class="p-zh-flow-list__bottom u-al-cent u-flex">

                        <div class="p-zh-flow-list__left">
                                <p class="p-zh-flow-list__text">検査後、当日または翌日に判定結果をお電話にて連絡致します。</p>

                        </div>
                        <!-- ./p-zh-flow-list__left -->
                        <div class="p-zh-flow-list__thumb p-zh-flow-list__thumb--step06">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/flow_zh06.png" alt="結果の通知">
                        </div>
                        <!-- ./ p-zh-flow-list__thumb-->

                    </div>
                    <!-- ./p-zh-flow-list__bottom -->
                </li>

            </ul>

    </div>
    <!-- ./l-inner -->


</section>


<section class="p-pcr-about" id="link-pcr-about">
            <div class="c-ttl-skew --skew-blue02">
                <h2 class="c-title-under-circle c-ttl-skew__text p-pcr-about__ttl">
                当院のPCR検査について
                </h2>
            </div>
            <!-- ./skew-ttl -->
            <div class="l-inner">


                    <div class="p-pcr-about-row">

                        <div class="p-pcr-about-textbox">
                            <h3 class="c-ttl-bl-line p-pcr-about-textbox__ttl --c-blue">
                                <span class="c-ttl-bl-line__text p-pcr-about-textbox__ttl-sub --c-blue__text">
                                        痛みのない検体採取
                                </span>
                            </h3>

                            <p class="p-pcr-about-textbox__desc">今までの検体採取はスワブ(柄の長い綿棒状のもの)を用い、鼻腔拭い液を採取するもので多少の痛みを伴うものでしたが、当院の採用しているPCR検査は唾液サンプルを検査しますので、どなたでも簡単に採取が可能です。</p>
                            <p class="p-pcr-about-textbox__desc u-mb0">また、厚生労働科学研究においても鼻咽頭ぬぐい液とほぼ同じ精度で検査が可能という事が実証されており、安心してご利用いただけます。</p>

                            <a href="https://www.mhlw.go.jp/content/10906000/000635988.pdf" class="c-link-blank p-pcr-about-textbox__link c-pink" target="_blank">厚生労働省サイトへ</a>
                        </div>
                        <!-- ./p-pcr-about-textbox -->

                    <ul class="p-pcr-about-illust">

                        <li class="p-pcr-about-illust__item">
                            <div class="p-pcr-about-illust__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/front/pcr_illustration01.png?6dbddba84c650683" alt="">
                            </div>
                            <!-- ./p-pcr-about-illust__img -->

                            <div class="p-pcr-about-illust__bottom">
                                <h4 class="p-pcr-about-illust__ttl">従来の採取方法</h4>
                                <p class="p-pcr-about-illust__desc">医師などが直接、綿棒などで<br class="u-pc">鼻の粘液を採取。</p>
                            </div>
                            <!-- ./p-pcr-about-illust__bottom -->
                        </li>

                        <li class="p-pcr-about-illust__item --bdc-blue ">
                            <div class="p-pcr-about-illust__img --bg-light-blue">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/front/pcr_illustration02.png?6dbddba84c650683" alt="">
                            </div>
                            <!-- ./p-pcr-about-illust__img -->

                            <div class="p-pcr-about-illust__bottom --bdc-blue">
                                <h4 class="p-pcr-about-illust__ttl --blue">当院での採取方法</h4>
                                <p class="p-pcr-about-illust__desc">検査を受ける患者様自ら、<br class="u-pc">容器に唾液を入れ、サンプルを採取。</p>
                            </div>
                            <!-- ./p-pcr-about-illust__bottom -->
                        </li>

                    </ul>

                </div>
                <!-- ./p-pcr-about-row -->
        </div>
        <!-- ./l-inner -->
</section>




<section class="p-pcr-kit bg-section-gray" id="link-kit">
    <div class="l-inner">
        <h2 class="c-ttl-under-center p-pcr-kit__ttl c-blue">PCR検査キットについて</h2>
        <div class="p-pcr-kit-row">
            <div class="p-pcr-item-box">
                <div class="p-pcr-item-box__thumb">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/front/Inspection_Item_old.jpg?33b09c8d99b80172" alt="PCR検体採取キット">
                </div>
                <!-- ./p-pcr-item-box__thumb -->
                <dl class="p-pcr-item-box__desc">
                    <dt class="p-pcr-item-box__name">附属品</dt>
                    <dd class="p-pcr-item-box__desc-text">
                        <ul class="p-pcr-item-box__list">
                            <li class="p-pcr-item-box__list-item">・手順説明書</li>
                            <li class="p-pcr-item-box__list-item">・唾液採取用漏斗</li>
                                <li class="p-pcr-item-box__list-item">・パウチ袋 小</li>
                                 <li class="p-pcr-item-box__list-item">・パウチ袋 大</li>
                            <li class="p-pcr-item-box__list-item">・クッション袋</li>

                                 <li class="p-pcr-item-box__list-item">・吸水紙</li>
                            <li class="p-pcr-item-box__list-item">・確認申込書</li>
                                <li class="p-pcr-item-box__list-item">・返送用封筒</li>
                        </ul>
                    </dd>
                </dl>
            </div>
            <!-- ./p-pcr-item-box -->

            <div class="p-pcr-right-contents">
                    <p class="p-pcr-right-contents__desc">キット購入後は、同封された手順説明書を確認してください。<br>
ご不明点がありましたら「オンライン案内」で、唾液採取のご案内や段取りのご説明などを行います。<br class="">
その際、ビデオ通話はクリニクスを介して行いますので、インストール済みのスマートフォン、もしくはカメラがついているPCをご用意の上、ご利用ください。</p>
                    <a href="<?php echo home_url( '/' ); ?>item-list" class="c-btn-circle-arw p-pcr-right-contents__btn">ご購入はこちら</a>
            </div>
            <!-- ./p-pcr-right-contents -->
        </div>
        <!-- ./p-pcr-kit-row -->
    </div>
    <!-- ./l-inner -->
</section>



<section class="p-diff" id="link-diff">

<div class="l-inner">
     <h2 class="c-ttl-under-center p-diff__ttl c-blue u-fw600">PCR検査と抗体検査の違い</h2>
     <p class="p-diff__text u-tc u-fw600"><span class="c-orange03 p-diff__text-large">「今」</span>の感染状況を検査するのは<span class="c-orange03">PCR検査</span>ですが、<br class=""><span class="c-blue p-diff__text-large">「過去」</span>に感染していたかどうかを調べる事ができる検査を<span class="c-blue">抗体検査</span>と言います。</p>

     <div class="p-diff__table">
     <img src="<?php echo get_template_directory_uri(); ?>/img/front/diff_table.png?49486b220bbca61da" alt="検査対象期間" class="u-pc">
     <img src="<?php echo get_template_directory_uri(); ?>/img/front/diff_table_sp.png?49486b220bbca61da" alt="検査対象期間" class="u-sp">
     </div>

</div>


</section>


    </div>

   <!--

タブエリア2つめスターと

     -->


     <div class="js-tab-contents  p-zh-tab-contents is-tab-active">


        <!--

DATEチェック用のモーダル
------------------------------------->


    <div class="c-modal js-modal">
      <div class="c-modal__bg js-modal-close"></div>
      <div class="c-modal__inner">
        <p class="c-modal__ttl c-blue">渡航予定日を選択してください
        </p>
        <div class="c-cal-warp">
            <input type="text" class="c-date-select" id="js-date" data-date="" autocomplete="off" placeholder="こちらをクリックしてください" readonly>
            <div class="appendDatepicker"></div>
        </div>

        <a href="" class="c-modal__btn c-modal__btn02 c-modal__btn--hidden" id="js-date-item-link">商品の購入へ進む</a>
        <p class="p-else-text-note" id="js-else-text">渡航日の2日前以内に<br class="u-sp">ご来院ください</p>
        <div id="js-cal-in" class="c-cal-content"></div>
        <p class="js-modal-close c-blue u-cursor-pointer">閉じる</p>
      </div>
      <!-- ./c-modal__inner -->
    </div>
    <!-- ./c-modal -->




    <style>


    /*


            <section class="p-visit">

            <div class="l-inner">

                <h2 class="c-ttl-under-center p-visit__ttl c-blue u-fw600 u-tc">検査費用</h2>

                <p class="p-visit__desc u-tc u-fw600">中国への渡航証明書の発行には原則、<br>
                <span class="p-visit__desc-large p-visit__desc-large--pcr">PCR検査</span>と<span class="p-visit__desc-large p-visit__desc-large--anti">抗体検査</span>を受けていただく必要があります</p>

                 <p class="p-visit__desc-under u-tc u-fw600">ご来院いただく前に、こちらよりPCR検査キットを購入して、来院日時をお伝えください。</p>

                <div class="p-visit-row01-wrap">
                <ul class="p-visit-item p-visit-row01 p-goto-list u-mb0">




                    <li class="p-visit-row01__item">
                        <a data-link="<?php echo home_url( '/' ); ?>visit-set01" class="js-modal-open">

                            <h3 class="p-visit-row01__ttl">PCR検査・抗体検査・<br class="u-sp">陰性証明書</h3>

                            <div class="p-visit-row01__inner" >
                                        <div class="p-visit-row01__thumb">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/visit-set01.jpg" alt="" class="">
                                        </div>

                                        <div class="p-visit-row01__left">

                                        <p class="p-visit-row01__desc">PCR検査・抗体検査・陰性証明書のセットになります。<br class=""><br class=""><span class="u-fw600">※複数購入をご希望の方は、カートに入れる際、個数をお選びください。</span></p>


                                    <div class="p-goto-list__price-wrap">
                                <p class="p-goto-list__left">価格</p>
                                <p class="p-goto-list__price-text">
                                    <span class="p-goto-list__price">26,000</span>
                                    <span class="p-goto-list__sub">
                                    <em class="p-goto-list__tax">税別</em>
                                    <span class="p-goto-list__yen">円</span>
                                    </span>
                                </p>
                                </div>
                                <!-- ./p-goto-list__price-wrap -->
                                 <p class="p-goto-list__btn p-goto-list__item--bottom__btn">購入ページへ<span class="p-goto-list__btn-arw"><i class="p-goto-list__btn-arw-in"></i></span></p>
                                </div>



                            </div>

                        </a>
                    </li>



                       <li class="p-visit-item__content">
                    <a data-link="<?php echo home_url( '/' ); ?>visit-set01" class="js-modal-open">
                            <div class="p-visit-item__top">
                                <h3 class="p-visit-item__ttl">PCR検査・抗体検査・陰性証明書</h3>
                                <div class="p-visit-item__thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/visit-set01.jpg" alt="" class="">
                                </div>
                                <!-- ./p-visit-item__thumb -->
                                <div class="p-visit-item__price-area">
                                    <p class="p-visit-item__price-left">価格</p>
                                    <div class="p-visit-item__price-right">
                                        <strong class="p-visit-item__price-text">27,000</strong>
                                        <span class="p-visit-item__price-sub">
                                            <span class="p-visit-item__price-tax">税別</span>
                                            <em class="p-visit-item__price-yen">円</em>
                                        </span>
                                    </div>
                                    <!-- ./p-visit-item__price-right -->
                                </div>
                                <!-- ./p-visit-item__price-area -->
                            </div>
                            <!-- ./p-visit-item__top -->

                            <p class="p-visit-item__btn">購入ページへ<span class="p-visit-item__btn-arw"><i class="p-visit-item__btn-arw-in"></i></span></p>
                        </a>
                    </li>

                    <li class="p-visit-item__content">
                    <a data-link="<?php echo home_url( '/' ); ?>visit-set05" class="js-modal-open">
                            <div class="p-visit-item__top">
                                <h3 class="p-visit-item__ttl">PCR検査・抗体検査・陰性証明書<br class="">5回セット</h3>
                                <div class="p-visit-item__thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/visit-set05.jpg" alt="" class="">
                                </div>
                                <!-- ./p-visit-item__thumb -->
                                <div class="p-visit-item__price-area">
                                    <p class="p-visit-item__price-left">価格</p>
                                    <div class="p-visit-item__price-right">
                                        <strong class="p-visit-item__price-text">118,000</strong>
                                        <span class="p-visit-item__price-sub">
                                            <span class="p-visit-item__price-tax">税別</span>
                                            <em class="p-visit-item__price-yen">円</em>
                                        </span>
                                    </div>
                                    <!-- ./p-visit-item__price-right -->
                                </div>
                                <!-- ./p-visit-item__price-area -->
                            </div>
                            <!-- ./p-visit-item__top -->

                            <p class="p-visit-item__btn">購入ページへ<span class="p-visit-item__btn-arw"><i class="p-visit-item__btn-arw-in"></i></span></p>
                        </a>
                    </li>
                    <li class="p-visit-item__content">
                    <a data-link="<?php echo home_url( '/' ); ?>visit-set10" class="js-modal-open">
                            <div class="p-visit-item__top">
                                <h3 class="p-visit-item__ttl">PCR検査・抗体検査・陰性証明書<br class="">10回セット</h3>
                                <div class="p-visit-item__thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/visit-set10.jpg" alt="" class="">
                                </div>
                                <!-- ./p-visit-item__thumb -->
                                <div class="p-visit-item__price-area">
                                    <p class="p-visit-item__price-left">価格</p>
                                    <div class="p-visit-item__price-right">
                                        <strong class="p-visit-item__price-text">218,800</strong>
                                        <span class="p-visit-item__price-sub">
                                            <span class="p-visit-item__price-tax">税別</span>
                                            <em class="p-visit-item__price-yen">円</em>
                                        </span>
                                    </div>
                                    <!-- ./p-visit-item__price-right -->
                                </div>
                                <!-- ./p-visit-item__price-area -->
                            </div>
                            <!-- ./p-visit-item__top -->

                            <p class="p-visit-item__btn">購入ページへ<span class="p-visit-item__btn-arw"><i class="p-visit-item__btn-arw-in"></i></span></p>
                        </a>
                    </li>


                </ul>
</div>
<!-- ./roe01-wrap -->
            </div>
            <!-- ./l-inner -->
        </section>



    */


    </style>


        <section class="p-zh-flow bg-section-gray" id="link-use">


    <div class="l-inner">

            <h2 class="c-ttl-under-center p-zh-flow__ttl u-fw600 c-blue">検査の申し込み方法</h2>

            <p class="p-zh-flow__desc p-zh-flow__desc--tab02 u-tc">中国への渡航は、出国する<span class="c-pink">48時間以内に発行した陰性証明書</span>が必要です。<br class="">渡航用の証明書発行をご希望の方のみ、ご来院いただいております。</p>

            <h3 class="c-inline-paint c-inline-paint--light-blue p-zh-flow-sub-ttl"><span class="c-inline-paint__text c-inline-paint__text--light-blue p-zh-flow-sub-ttl__text">来院予約の流れ</span></h3>

            <ul class="p-zh-flow-list u-flex-wrap u-flex">

                <li class="p-zh-flow-list__item">
                    <h3 class="p-zh-flow-list__ttl">
                        <span class="p-zh-flow-list__num-wrap">
                            <span class="p-zh-flow-list__step">step</span>
                            <span class="p-zh-flow-list__number">01</span>
                        </span>
                        <span class="p-zh-flow-list__ttl-text u-fw600">来院予約</span>
                    </h3>

                    <div class="p-zh-flow-list__bottom u-al-cent u-flex">

                        <div class="p-zh-flow-list__left p-zh-flow-list__left--sp-wide">
                                <p class="p-zh-flow-list__text">we chatまたはお電話にてご来院の予約をお取り下さい。</p>

                                <p class="p-zh-flow-list__note p-zh-flow-list__text c-red">※お電話でのご対応は日本語のみとなります。</p>

                                <a href="https://u.wechat.com/ICEBBX89d1dC9f5990yPa14" class="c-btn-circle-arw p-zh-flow-list__btn p-zh-flow-list__btn--wechat" target="_blank">連絡先追加はこちら</a>
                        </div>
                        <!-- ./p-zh-flow-list__left -->
                        <div class="p-zh-flow-list__thumb p-zh-flow-list__thumb--wechat-new">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/zh_new/we_chat_logo_new.png" alt="検査キットの購入">
                        </div>
                        <!-- ./ p-zh-flow-list__thumb-->

                    </div>
                    <!-- ./p-zh-flow-list__bottom -->
                </li>

                 <li class="p-zh-flow-list__item">
                    <h3 class="p-zh-flow-list__ttl">
                        <span class="p-zh-flow-list__num-wrap">
                            <span class="p-zh-flow-list__step">step</span>
                            <span class="p-zh-flow-list__number">02</span>
                        </span>
                        <span class="p-zh-flow-list__ttl-text u-fw600">ご来院・検査料金のお支払い</span>
                    </h3>

                    <div class="p-zh-flow-list__bottom u-al-cent u-flex">

                        <div class="p-zh-flow-list__left p-zh-flow-list__left--wide">
                                <p class="p-zh-flow-list__text">ご予約いただいた日時にご来院ください。<br class="">受付時に検査料金を先にお支払頂きます。<br class="">なお、お支払いは現金または、クレジット払いが可能です。</p>

                                 <p class="p-zh-flow-list__note p-zh-flow-list__text u-fw600">※Alipay、WeChat Payはご利用できません</p>


                        </div>
                        <!-- ./p-zh-flow-list__left -->
                        <div class="p-zh-flow-list__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/zh_new/flow_zh02_02.png" alt="WECHAT"  class="">
                        </div>
                        <!-- ./ p-zh-flow-list__thumb-->

                    </div>
                    <!-- ./p-zh-flow-list__bottom -->
                </li>

                 <li class="p-zh-flow-list__item">
                    <h3 class="p-zh-flow-list__ttl">
                        <span class="p-zh-flow-list__num-wrap">
                            <span class="p-zh-flow-list__step">step</span>
                            <span class="p-zh-flow-list__number">03</span>
                        </span>
                        <span class="p-zh-flow-list__ttl-text u-fw600">検査料金のお支払い</span>
                    </h3>

                    <div class="p-zh-flow-list__bottom u-al-cent u-flex">

                        <div class="p-zh-flow-list__left">
                                <p class="p-zh-flow-list__text">検査キットをお渡しし、採取のご案内をいたします。</p>

                        </div>
                        <!-- ./p-zh-flow-list__left -->
                        <div class="p-zh-flow-list__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/flow_zh03.png" alt="検体の採取">
                        </div>
                        <!-- ./ p-zh-flow-list__thumb-->

                    </div>
                    <!-- ./p-zh-flow-list__bottom -->
                </li>

                 <li class="p-zh-flow-list__item">
                    <h3 class="p-zh-flow-list__ttl">
                        <span class="p-zh-flow-list__num-wrap">
                            <span class="p-zh-flow-list__step">step</span>
                            <span class="p-zh-flow-list__number">04</span>
                        </span>
                        <span class="p-zh-flow-list__ttl-text u-fw600">検査の実施</span>
                    </h3>

                    <div class="p-zh-flow-list__bottom u-al-cent u-flex">

                        <div class="p-zh-flow-list__left">
                                <p class="p-zh-flow-list__text">検体採取後、院内にて検査を行います。<br class="">検査終了から証明書の発行までおよそ3～4時間程度、お待ちいただきます。</p>

                        </div>
                        <!-- ./p-zh-flow-list__left -->
                        <div class="p-zh-flow-list__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/flow_zh05.png" alt="当院へ返送">
                        </div>
                        <!-- ./ p-zh-flow-list__thumb-->

                    </div>
                    <!-- ./p-zh-flow-list__bottom -->
                </li>


                 <li class="p-zh-flow-list__item">
                    <h3 class="p-zh-flow-list__ttl">
                        <span class="p-zh-flow-list__num-wrap">
                            <span class="p-zh-flow-list__step">step</span>
                            <span class="p-zh-flow-list__number">05</span>
                        </span>
                        <span class="p-zh-flow-list__ttl-text u-fw600">検査結果の通知</span>
                    </h3>

                    <div class="p-zh-flow-list__bottom u-al-cent u-flex">

                        <div class="p-zh-flow-list__left">
                                <p class="p-zh-flow-list__text">お待ちいただいた後、再度ご来院いただき、検査結果の通知と証明書をお渡しいたします。</p>

                        </div>
                        <!-- ./p-zh-flow-list__left -->
                        <div class="p-zh-flow-list__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/zh_new/flow_zh05_05.png" alt="PCR検査の実施">
                        </div>
                        <!-- ./ p-zh-flow-list__thumb-->

                    </div>
                    <!-- ./p-zh-flow-list__bottom -->
                </li>


            </ul>

              <h3 class="c-inline-paint c-inline-paint--blue p-zh-flow-sub-ttl"><span class="c-inline-paint__text c-inline-paint__text--blue p-zh-flow-sub-ttl__text">WEBで購入後、来院予約の流れ</span></h3>

              <p class="c-red u-tc u-fw600 p-new-item-note">WEBで購入後、来院予約希望の方は、下記よりPCR検査キットを購入の際に来院日時をお伝えください。</p>

              <div class="p-new-item-box">
                    <a data-link="<?php echo home_url( '/' ); ?>visit-set01" class="js-modal-open p-new-item-box__link">
                        <div class="p-new-item-box__inner">
                                <h3 class="p-new-item-box__ttl u-fw600">PCR検査・抗体検査・陰性証明書</h3>
                                <div class="p-new-item-box__thumb">
                                    <div class="p-new-item-box__thumb-in">
 <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/visit-set01.jpg" alt="PCR検査・抗体検査・陰性証明書">
                                    </div>

                                </div>
                                <p class="p-new-item-box__desc">PCR検査・抗体検査・陰性証明書のセットになります。<br class="u-pc">中国への渡航証明書の発行には原則、PCR検査と抗体検査を受けて頂く必要があります。
                                </p>

                                <div class="u-flex u-al-cent p-bottom-price p-new-item-box__price-area">
                                    <div class="u-flex u-al-cent p-bottom-price__box-left">
                                        <p class="p-bottom-price__p-left">価格</p>
                                        <div class="p-bottom-price__p-right u-flex u-al-cent">
                                            <strong class="p-bottom-price__main">26,000</strong>

                                            <p class="u-flex u-jc-cent u-ff-colum p-bottom-price__sub">
                                                <em class="p-bottom-price__tax">税別</em>
                                                <span class="p-bottom-price__yen">円</span>
                                            </p>
                                        </div>
                                    </div>
                                    <p class="p-bottom-price__nots">※複数購入をご希望の方は、カートに<br class="">入れる際、個数をお選びください。</p>
                                </div>
                                <div class="p-new-item-btn">
                                      <p class="p-goto-list__btn">購入ページへ<span class="p-goto-list__btn-arw"><i class="p-goto-list__btn-arw-in"></i></span></p>
                                </div>

                        </div>
                    </a>
              </div>

              <h4 class="p-ttl-right-line p-zh-flow-sub-ttl02">
                  <span class="p-ttl-right-line__text p-zh-flow-sub-ttl02__text">購入から来院の流れ</span>
              </h4>

               <ul class="p-zh-flow-list u-flex-wrap u-flex u-mb0">

                <li class="p-zh-flow-list__item p-zh-flow-list__item--col03">
                    <h3 class="p-zh-flow-list__ttl">
                        <span class="p-zh-flow-list__num-wrap p-zh-flow-list__num-wrap--deep-blue">
                            <span class="p-zh-flow-list__step">step</span>
                            <span class="p-zh-flow-list__number">01</span>
                        </span>
                        <span class="p-zh-flow-list__ttl-text p-zh-flow-list__ttl-text--deep-blue u-fw600">検査キットの購入</span>
                    </h3>

                    <div class="p-zh-flow-list__col">
                                <p class="p-zh-flow-list__text u-pl0">購入の際に、ご来院日時もご入力ください。当日の発行は15時までの受付となりますので予めご了承ください。</p>
                             <!--    <p class="p-zh-flow-list__note c-red">※お電話は日本語のみのご対応となります。</p> -->

                            <!--     <div class="p-zh-flow-list__wecaht-wrap">
                                    <div class="p-zh-flow-list__wecaht"><img src="<?php echo get_template_directory_uri(); ?>/img/zh_new/we_chat_logo_new.png" alt="wechat"></div>

                                    <a href="https://u.wechat.com/ICEBBX89d1dC9f5990yPa14" class="c-btn-circle-arw p-zh-flow-list__btn p-zh-flow-list__btn--wechat02 u-mt0" target="_blank">連絡先追加はこちら</a>
                                </div> -->
                    </div>
                    <!-- ./p-zh-flow-list__bottom -->
                </li>

                 <li class="p-zh-flow-list__item p-zh-flow-list__item--col03">
                    <h3 class="p-zh-flow-list__ttl">
                        <span class="p-zh-flow-list__num-wrap p-zh-flow-list__num-wrap--deep-blue">
                            <span class="p-zh-flow-list__step">step</span>
                            <span class="p-zh-flow-list__number">02</span>
                        </span>
                        <span class="p-zh-flow-list__ttl-text p-zh-flow-list__ttl-text--deep-blue u-fw600">ご来院・検査</span>
                    </h3>

                    <div class="p-zh-flow-list__col">

                                <p class="p-zh-flow-list__text u-pl0">ご予約頂いた日時にご来院下さい。<br class="">来院後、当院のスタッフの指示に従い、検体の採取・PCR検査を実施致します。<br class="">検査終了後おおよそ3〜4時間程度お待ち頂きます。</p>

                    </div>
                    <!-- ./p-zh-flow-list__bottom -->
                </li>

                 <li class="p-zh-flow-list__item p-zh-flow-list__item--col03">
                    <h3 class="p-zh-flow-list__ttl">
                        <span class="p-zh-flow-list__num-wrap p-zh-flow-list__num-wrap--deep-blue">
                            <span class="p-zh-flow-list__step">step</span>
                            <span class="p-zh-flow-list__number">03</span>
                        </span>
                        <span class="p-zh-flow-list__ttl-text p-zh-flow-list__ttl-text--deep-blue u-fw600">結果通知の通知</span>
                    </h3>

                    <div class="p-zh-flow-list__col">

                                <p class="p-zh-flow-list__text u-pl0">お待ちいただいた後、再度ご来院いただき、検査結果の通知と証明書をお渡しいたします。</p>


                    </div>
                    <!-- ./p-zh-flow-list__bottom -->
                </li>

            </ul>

            <div class="p-zh-hdc u-tc">
                 <p class="p-zh-hdc__ttl">当院での検査終了後、陰性証明書を<br class="u-sp">中国駐日本大使館・総領事館に<br class=""><span class="p-zh-hdc__ttl--bg">HSまたはHDCマークのグリーン<br class="u-sp">健康コード申請</span>を行なってください。</p>

                 <p class="p-zh-hdc__note">※2020年12月1日から、紙媒体の陰性証明だけでの<br class="u-sp">渡航は出来なくなりましたので、ご注意ください。</p>
            </div>

            <a href="http://www.china-embassy.or.jp/jpn/lsfu/t1836108.htm" class="c-link-blank p-zh-hdc__link" target="_blank">中国駐日本大使館のサイトへ</a>

              <a href="#link-tab-wrap" class="p-btn-404 c-btn p-tab-link" id="js-to-tabWrap">渡航用ではなく、PCRの検査だけを<br class="u-sp">ご希望の方はこちらから</a>

    </div>
    <!-- ./l-inner -->
</section>

<section class="p-pcr-about" id="link-pcr-about">
            <div class="c-ttl-skew --skew-blue02">
                <h2 class="c-title-under-circle c-ttl-skew__text p-pcr-about__ttl">
                当院のPCR検査について
                </h2>
            </div>
            <!-- ./skew-ttl -->
            <div class="l-inner">


                    <div class="p-pcr-about-row">

                        <div class="p-pcr-about-textbox">
                            <h3 class="c-ttl-bl-line p-pcr-about-textbox__ttl --c-blue">
                                <span class="c-ttl-bl-line__text p-pcr-about-textbox__ttl-sub --c-blue__text">
                                        痛みのない検体採取
                                </span>
                            </h3>

                            <p class="p-pcr-about-textbox__desc">今までの検体採取はスワブ(柄の長い綿棒状のもの)を用い、鼻腔拭い液を採取するもので多少の痛みを伴うものでしたが、当院の採用しているPCR検査は唾液サンプルを検査しますので、どなたでも簡単に採取が可能です。</p>
                            <p class="p-pcr-about-textbox__desc u-mb0">また、厚生労働科学研究においても鼻咽頭ぬぐい液とほぼ同じ精度で検査が可能という事が実証されており、安心してご利用いただけます。</p>

                            <a href="https://www.mhlw.go.jp/content/10906000/000635988.pdf" class="c-link-blank p-pcr-about-textbox__link c-pink" target="_blank">厚生労働省サイトへ</a>
                        </div>
                        <!-- ./p-pcr-about-textbox -->

                    <ul class="p-pcr-about-illust">

                        <li class="p-pcr-about-illust__item">
                            <div class="p-pcr-about-illust__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/front/pcr_illustration01.png?6dbddba84c650683" alt="">
                            </div>
                            <!-- ./p-pcr-about-illust__img -->

                            <div class="p-pcr-about-illust__bottom">
                                <h4 class="p-pcr-about-illust__ttl">従来の採取方法</h4>
                                <p class="p-pcr-about-illust__desc">医師などが直接、綿棒などで<br class="u-pc">鼻の粘液を採取。</p>
                            </div>
                            <!-- ./p-pcr-about-illust__bottom -->
                        </li>

                        <li class="p-pcr-about-illust__item --bdc-blue ">
                            <div class="p-pcr-about-illust__img --bg-light-blue">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/front/pcr_illustration02.png?6dbddba84c650683" alt="">
                            </div>
                            <!-- ./p-pcr-about-illust__img -->

                            <div class="p-pcr-about-illust__bottom --bdc-blue">
                                <h4 class="p-pcr-about-illust__ttl --blue">当院での採取方法</h4>
                                <p class="p-pcr-about-illust__desc">検査を受ける患者様自ら、<br class="u-pc">容器に唾液を入れ、サンプルを採取。</p>
                            </div>
                            <!-- ./p-pcr-about-illust__bottom -->
                        </li>

                    </ul>

                </div>
                <!-- ./p-pcr-about-row -->
        </div>
        <!-- ./l-inner -->
</section>

<section class="bg-section-gray p-zh-note">

<div class="l-inner">

    <h2 class="p-zh-note__ttl">ご注意点</h2>

    <ul class="p-zh-note-list">
       <!--  <li class="p-zh-note-list__item">・血液採取となるので、安全確保のため１３歳未満の方は、抗体検査を受けられません。</li> -->
         <li class="p-zh-note-list__item">・既に熱がある場合や、何かしらの自覚症状がある方のご利用はご遠慮いただきます。</li>
          <li class="p-zh-note-list__item">・検査結果が陽性の場合は、保健所の指示に則り入院措置となる可能性がございます。その際、証明書の発行は出来ませんので予めご承知おきください。</li>
           <li class="p-zh-note-list__item">・検査結果が陽性の場合は、長時間、当院外にて待機いただくことになることを、予めご承知おきください。</li>
            <li class="p-zh-note-list__item">・受検の際は、マスクを着用し会話はご遠慮いただくようお願いいたします。</li>
    </ul>

</div>
<!-- ./l-inner -->

</section>


<section class="p-diff" id="link-diff">

<div class="l-inner">
     <h2 class="c-ttl-under-center p-diff__ttl c-blue u-fw600">PCR検査と抗体検査の違い</h2>
     <p class="p-diff__text u-tc u-fw600"><span class="c-orange03 p-diff__text-large">「今」</span>の感染状況を検査するのは<span class="c-orange03">PCR検査</span>ですが、<br class=""><span class="c-blue p-diff__text-large">「過去」</span>に感染していたかどうかを調べる事ができる検査を<span class="c-blue">抗体検査</span>と言います。</p>

     <div class="p-diff__table">
     <img src="<?php echo get_template_directory_uri(); ?>/img/front/diff_table.png?49486b220bbca61da" alt="検査対象期間" class="u-pc">
     <img src="<?php echo get_template_directory_uri(); ?>/img/front/diff_table_sp.png?49486b220bbca61da" alt="検査対象期間" class="u-sp">
     </div>

</div>


</section>


    </div>
    <!-- ./js-tab-contents  -->


 </div>
 <!-- ./js-tab-wrap   タブエリア終わり -->



<div class="p-zh-conversion">

    <ul class="p-zh-conversion__list">
        <li class="p-zh-conversion__item p-zh-conversion__item--wechat">
            <a href="https://u.wechat.com/ICEBBX89d1dC9f5990yPa14" class="p-zh-conversion__link" target="_blank">
                <p class="p-zh-conversion__texts">
                    <span class="p-zh-conversion__main p-zh-conversion__main--wechat">から来院予約</span>
                    <span class="p-zh-conversion__sub">連絡先追加後、申請欄からご希望の来院日時を入力して下さい</span>
                </p>
            </a>
        </li>

        <li class="p-zh-conversion__item p-zh-conversion__item--contact">
            <a href="<?php echo home_url( '/' ); ?>contact" class="p-zh-conversion__link">
                <p class="p-zh-conversion__texts">
                    <span class="p-zh-conversion__main p-zh-conversion__main--contact">お問合せフォームから来院予約</span>
                </p>
            </a>
        </li>
    </ul>

</div>
<!-- ./conversion -->




         <section class="p-movie u-pt-4_5rem bg-section-gray">

            <div class="l-inner">

                 <!--    <h2 class="c-ttl-under-center p-movie__ttl c-blue">検査費用</h2> -->

                    <div class="p-movie__contents">
                   <iframe class="p-movie__in" src="https://www.youtube.com/embed/_xQzVEVv1cw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                 <!--  <img src="<?php echo get_template_directory_uri(); ?>/img/front/movie_sample.jpg?6dbddba84c650683" alt=""> -->

                    </div>


            </div>
            <!-- ./l-inner -->
           </section>








<section class="p-labo">
                <div class="l-inner">
                            <div class="p-labo-contents">
                                <div class="p-labo-desc">
                                     <h3 class="c-ttl-bl-line p-labo-desc__ttl  ">
                                            <span class="c-ttl-bl-line__text    p-labo-desc__ttl-sub --c-yellow__text">
                                                    当院の検査ラボについて
                                            </span>
                                    </h3>

                                    <p class=" p-labo-desc__text">当院でのPCR検査は全て院内にある検査ラボにて検査・解析を行なっております。<br>その為、外部に検査を委託実施している他院に比べ、一回の検査コストを安く抑えることが可能となり、また結果の判定まで迅速に対応することを実現しております。</p>

                                </div>



                            </div>
                </div>
</section>

<section class="p-question bg-section-gray" id="link-qa">
    <div class="l-inner">

                <h2 class="c-ttl-under-center p-question__ttl c-blue">よくある質問</h2>

                <div class="p-question-list">

                    <?php
                    $args = array(
                    'post_type' => 'faq',
                    'posts_per_page' => 5,
                    'orderby' => 'date',
                    'order' => 'DESC',
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



                       <a href="<?php echo home_url( '/' ); ?>faq-personal" class="c-btn-circle-arw p-question__btn">よくある質問一覧へ</a>


                </div>
                <!-- ./p-question-list -->

    </div>
</section>


<style>


/*

<section class="p-clinic-info u-bg-cover" id="link-clinic">
    <div class="l-access-inner">
        <div class="p-clinic-info-row">
            <div class="p-clinic-info-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/common/c_header_logo.png?6dbddba84c650683" alt="感染症検査クリニック">
            </div>
            <!-- ./p-clinic-info-logo -->
            <div class="p-clinic-info-right">
                <h3 class="p-clinic-info-right__ttl">交通指南</h3>
                <p class="p-clinic-info-right__address">〒542-0086　大阪府大阪市中央区西心斋桥2-13-16 <br>OOKINI西心斋桥BirthPlace大厦3楼</p>
                <a href="<?php echo home_url( '/' ); ?>tel/new-tel.html" class="p-clinic-info-right__tel" target="_blank"><!-- <span class="p-clinic-info-right__tel-sq">个人</span> -->
                <span class="p-clinic-info-right__tel-num">0120-936-760</span></a>
                  <!-- <span href="<?php echo home_url( '/' ); ?>tel/campany.html" class="p-clinic-info-right__tel" target="_blank"><span class="p-clinic-info-right__tel-sq">企业及团体</span><span class="p-clinic-info-right__tel-num">06-4708-8082</span></a> -->
                <p class="p-clinic-info-right__guide">FAX : 06-4708-8105<br>挂号时间 9:00～18:00  休息不定期<br><span class="u-fw600">※お電話は日本語の対応となります。</span></p>
                <!--<p class="p-clinic-info-right__guide"><span class="u-text-under-line">※日・祝日は電話受付を休止しております。</span></p>-->
                <p class="p-clinic-info-right__guide-sub">由于预防感染的原因，如果直接来医院的话，请事先联系。<br>
                <span style="color:red;">有疑似新冠肺炎症状的人士不能入内。
                <!-- また、発熱や味覚障害、感染者との濃厚接触など感染が疑われる症状がある方の受診は行っておりません。 --></span></p>
            </div>
        </div>
    </div>
</section>



*/



</style>


<section class="p-new-info" id="link-clinic">



                    <div class="l-inner">

                        <h2 class="p-new-info__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/common/c_header_logo.png" alt="感染症検査クリニック"></h2>

                        <ul class="p-new-info__list" id="link-clinic01">
                            <li class="p-new-info__clinic">
                                <h3 class="p-new-info__name">渋谷院</h3>
                                <p class="p-new-info__sq">アクセス</p>
                                <p class="p-new-info__text">〒000-0000 <br class="">開院準備中<br class=""><br class=""></p>
                                <a href="<?php echo home_url( '/' ); ?>tel/shibuya.html" class="p-new-info__tel">
                                   <!--  <p class="p-new-info__number">0120-000-000</p>
                                    <div class="p-new-info__bottom">
                                        <p class="p-new-info__btm-text">FAX : 00-0000-0000</p>
                                        <p class="p-new-info__btm-text">受付 10:00～18:00  不定休</p>
                                    </div> -->

                                </a>
                            </li>
                            <li class="p-new-info__clinic" id="link-clinic02">
                                <h3 class="p-new-info__name">大阪院</h3>
                                <p class="p-new-info__sq">アクセス</p>
                                <p class="p-new-info__text">〒542-0086 <br class="">大阪府大阪市中央区西心斋桥2-13-16 <br class="">OOKINI西心斋桥BirthPlace大厦3楼</p>
                                <a href="<?php echo home_url( '/' ); ?>tel/new-tel.html" class="p-new-info__tel">
                                    <p class="p-new-info__number">0120-936-760</p>
                                    <div class="p-new-info__bottom">
                                        <p class="p-new-info__btm-text">FAX : 06-4708-8105</p>
                                        <p class="p-new-info__btm-text">受付 10:00～18:00  不定休</p>
                                    </div>
                                    <!-- ./p-new-info__bottom -->
                                </a>
                            </li>
                             <li class="p-new-info__clinic" id="link-clinic03">
                                <h3 class="p-new-info__name">福岡院</h3>
                                <p class="p-new-info__sq">アクセス</p>
                                <p class="p-new-info__text">〒810-0001 <br class="">開院準備中<br class=""><br class=""><!-- 福岡市中央区天神2-6-13 <br class="">ジェムキャッスルきらめき通り2階 --></p>
                                <a href="<?php echo home_url( '/' ); ?>tel/fukuoka.html" class="p-new-info__tel">
                                   <!--  <p class="p-new-info__number">0120-133-220</p>
                                    <div class="p-new-info__bottom">
                                        <p class="p-new-info__btm-text">FAX : 092-401-1802</p>
                                        <p class="p-new-info__btm-text">受付 10:00～18:00  不定休</p>
                                    </div> -->
                                    <!-- ./p-new-info__bottom -->
                                </a>
                            </li>
                        </ul>


                        <p class="p-new-info__btm-note">※お電話は日本語の対応となります。</p>


                             <p class="p-new-info__btm-note-under">直接、ご来院する場合は感染対策の都合上、事前にご連絡ください。
<br class="">
<span class="c-red">新型コロナウイルス感染疑いの症状がある方は入室できません。</span></p>

                          <a href="<?php echo home_url( '/' ); ?>clinic" class="p-new-info__btn">クリニック詳細情報についてはこちらから<span class="p-new-info__arw"><i class="p-new-info__arw-in"></i></span></a>

                    </div>



</section>

</div>
<!-- ./ラップ用のクラスEND -->






<?php get_footer(); ?>



<script>


$('#js-to-tabWrap').on('click', function () {


  $('#js-tab-btn01').trigger('click');


});



</script>
