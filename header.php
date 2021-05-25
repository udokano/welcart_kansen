


<!DOCTYPE html>
<html>
<head>

<script async src="https://s.yimg.jp/images/listing/tool/cv/ytag.js?2dc4c6400b5334cd"></script>
<script>
window.yjDataLayer = window.yjDataLayer || [];
function ytag() { yjDataLayer.push(arguments); }
ytag({"type":"ycl_cookie"});
</script>


<meta charset="UTF-8">
<title>
<?php bloginfo('title'); ?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
<meta name="format-detection" content="telephone=no">



<?php wp_head(); ?>
<script type="text/javascript"
        src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<!-- User Heat Tag -->
<script type="text/javascript">
(function(add, cla){window['UserHeatTag']=cla;window[cla]=window[cla]||function(){(window[cla].q=window[cla].q||[]).push(arguments)},window[cla].l=1*new Date();var ul=document.createElement('script');var tag = document.getElementsByTagName('script')[0];ul.async=1;ul.src=add;tag.parentNode.insertBefore(ul,tag);})('//uh.nakanohito.jp/uhj2/uh.js', '_uhtracker');_uhtracker({id:'uhXcp83pac'});
</script>
<!-- End User Heat Tag -->


<!-- Global site tag (gtag.js) - Google Ads: 824377490 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-824377490"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-824377490');
</script>

<?php if (is_page('group-form-thanks')): ?>
<!-- Event snippet for PCR 企業用申し込み conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-824377490/qvyFCKCmxfEBEJKBjIkD'});
</script>
<?php endif; ?>

<?php if (is_page('contact-thanks')): ?>
<!-- Event snippet for PCR検査　メール conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-824377490/vOEKCIuSwtcBEJKBjIkD'});
</script>
<?php endif; ?>


<?php if(is_single()) :?>
<link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css?6dbddba84c650683"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
      crossorigin="anonymous"
    />
<?php endif; ?>

  <link href="<?php echo get_template_directory_uri(); ?>/css/jquery-file-upload.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css?6dbddba84c650683"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?<?php echo filemtime( get_stylesheet_directory() . '/css/style.css'); ?>">

<?php if (is_page('usces-member')): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/add.css?<?php echo filemtime( get_stylesheet_directory() . '/css/add.css'); ?>">
<?php endif; ?>

<!-- ファビコン読み込み -->

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png?6dbddba84c650683">
    <link rel="icon" type="image/png" sizes="32x32" href=".<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png?6dbddba84c650683">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png?6dbddba84c650683">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

<?php if (!is_page('usces-cart') ): ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js?6dbddba84c650683"></script>
<?php endif; ?>


<script>
  (function(d) {
    var config = {
      kitId: 'lcy4fdg',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>





<script>

/*
リアルタイムバリデーション
------------------------------*/
<?php if (is_single()) : ?>

/* 商品ページ */

jQuery(document).ready(function(){

jQuery("select").attr("id","");
jQuery("#js-tokou input").attr("id","");
//jQuery("input[type='file']").addClass("validate[required]");
jQuery("#js-tokou input").addClass("validate[required]");
jQuery("select").addClass("validate[required]");
jQuery("form").validationEngine('attach', {
    　promptPosition:"topLeft",
  /*   'custom_error_messages': {
      '#file__btn': {
        'required': {
          'message': 'フォーマットをアップロードしてください'
        }
      }
    } */
  　});
});

<?php endif; ?>

<?php if (is_page('usces-cart')): ?>




/* お客様情報入力ページ */
jQuery(function(){
    jQuery("form").validationEngine();
    jQuery("#mailaddress1").addClass("validate[required]");
     jQuery("#mailaddress2").addClass("validate[required,equals[mailaddress1]]");
    jQuery("#pass01").addClass("validate[required]");
     jQuery("#pass02").addClass("validate[required,equals[pass01]]");
jQuery("#name1").addClass("validate[required]");
jQuery("#name2").addClass("validate[required]");
jQuery("#tel").addClass("validate[required]");
jQuery("#tel").addClass("validate[required]");
jQuery("#tel").addClass("validate[required]");
jQuery("#zipcode").addClass("validate[required]");
jQuery("#customer_pref").addClass("validate[required]");
jQuery("#address1").addClass("validate[required]");
jQuery("#address2").addClass("validate[required]");
jQuery("#payment_name_0").addClass("validate[required]");
jQuery("#payment_name_1").addClass("validate[required]");
jQuery(".customkey_brith_year select").addClass("validate[required]");
jQuery(".customkey_brith_month select").addClass("validate[required]");
jQuery(".customkey_brith_day select").addClass("validate[required]");
});

jQuery(document).ready(function(){

  jQuery(".customkey_brith_year select option:first-child").val("").text("--");
  jQuery(".customkey_brith_month select option:first-child").val("").text("--");
  jQuery(".customkey_brith_day select option:first-child").val("").text("--");
  jQuery("#customer_pref option:first-child").val("");

  jQuery(".customkey_brith_year select").val("1990年");

  });



/*
戻るボタン押したらバリデーション無効化する
-------------*/
jQuery(function(){
jQuery(".back_cart_button").on("click", function() {
  jQuery("input,select").removeClass("validate[required]");
  jQuery("input").removeClass("validate[required,equals[mailaddress1]]");
 jQuery("input").removeClass("validate[required,equals[pass01]]");
});
});

jQuery(function(){
jQuery(".back_to_customer_button").on("click", function() {
  jQuery("input,select").removeClass("validate[required]");
  jQuery("input").removeClass("validate[required,equals[mailaddress1]]");
 jQuery("input").removeClass("validate[required,equals[pass01]]");
});
});

<?php endif; ?>

<?php if (is_page('contact')): ?>

/* お問い合わせページ */
jQuery(document).ready(function(){
jQuery("input[name='seimei']").addClass("validate[required]");
jQuery("input[name='your-email']").addClass("validate[required]");
jQuery(".wpcf7-form").validationEngine('attach', {
    　promptPosition:"top"
  　});
});
<?php endif; ?>


<?php if (is_page('form')): ?>

/* お問い合わせページ */
jQuery(document).ready(function(){
jQuery(".result_form").validationEngine('attach', {
    　promptPosition:"top"
  　});
});
<?php endif; ?>


<?php if (is_page('usces-member')): ?>

/* 新規会員入会ページ */
jQuery(document).ready(function(){
      jQuery("#mailaddress1").addClass("validate[required]");
      jQuery("#mailaddress2").addClass("validate[required,equals[mailaddress1]]");
      jQuery("#password1").addClass("validate[required]");
      jQuery("#password2").addClass("validate[required,equals[password1]]");
      jQuery("#name1").addClass("validate[required]");
      jQuery("#name2").addClass("validate[required]");
       jQuery("#zipcode").addClass("validate[required]");
        jQuery("#member_pref").addClass("validate[required]");
         jQuery("#address1").addClass("validate[required]");
          jQuery("#address2").addClass("validate[required]");
           jQuery("#tel").addClass("validate[required]");
    jQuery("#new__member__form").validationEngine('attach', {
    　promptPosition:"topLeft"
  　});
});
<?php endif; ?>

</script>


</head>


<style>

.skiptranslate {
  display: none;
}

</style>

<body <?php body_class(); ?> class="page-template-uscesmember">




<div class="l-wrapper">



<style>

/*

<!--


---GWの案内---


-->


<div class="p-not-yearEnd" id="js-pages-head">
		<input type="checkbox" id="radio-note" class="u-all-hidden is-radio">
		<label for="radio-note" class="p-not-yearEnd__label"> <strong class="p-not-yearEnd__ttl-in">ＧＷ期間中の検体返送について（重要）</strong> <i class="p-not-yearEnd__arw"> </i> </label>
		<div class="p-not-yearEnd__content-wrap is-toggle-box">
				<div class="p-not-yearEnd__box ">
							<span style="    background-color: #fff;
							display: block;
							color: #000;
							font-size: 96%;
							padding: 10px 10px ;
							line-height: 1.4;
							max-width: 900px;
							margin: 0 auto 10px;
							">
									<span style="    background: #f5ff59;
									color: #af0202; " class="trg">ＧＷ明けは混雑が予想されるため、検査結果は通常より日数をいただく可能性がございます。予めご了承ください。<br class="">
														<br class="">
														また、ＧＷ期間中、日本郵便による普通郵便の配達休止の影響を受けるため、<br class="u-pc">
														4月30日～5月5日まで「普通郵便」での検体の返送をご遠慮ください。
									</span><br class="">
												この期間中に「普通郵便」としてポストに投函いただいても当院の受け取りが5月6日以降となります。<br class="">
												この場合、十分な状態での保存が難しい関係で、検査をお受けできない場合がございます。
							</span>

						つきましては、4月30日～5月5日のポスト投函をお控えいただくか、以下「速達」での返送をご利用ください。<br class=""><br class="">


						    <div class="l-inner p-table-wrap">
                  <div class="p-letter-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/front/img-quick.jpg?42654" alt="">
                  </div>
                </div>
				</div>
				<!-- ./box -->


				<!-- ./table-wrap -->

		</div>
		<!-- ./__content-wrap -->
</div>
<!-- ./__yearEnd -->


*/


</style>










<?php if ( is_home() || is_front_page() ) : ?>

<div class="p-heat-bnr" id="js-pages-head">

<p class="p-heat-bnr__ttl c-title-under-circle">当院からのお知らせ</p>



<div class="u-flex p-heat-bnr__list">

  <a href="<?php echo home_url( '/' ); ?>outpatient-fever" class="p-heat-bnr__img">
  <img src="<?php echo get_template_directory_uri(); ?>/img/common/c_heat_bnr.jpg?48798562231464664" alt="発熱外来" class="u-pc">
   <img src="<?php echo get_template_directory_uri(); ?>/img/common/c_heat_bnr_sp.jpg?487561156495666" alt="発熱外来" class="u-sp">
</a>

<a href="#link-free-services" class="p-heat-bnr__img">
  <img src="<?php echo get_template_directory_uri(); ?>/img/common/c_survise_bnr.jpg?495555548852144" alt="無償で対応変異株特定サービス" class="u-pc">
  <img src="<?php echo get_template_directory_uri(); ?>/img/common/c_survise_bnr_sp.jpg?49495856526149954" alt="無償で対応変異株特定サービス" class="u-sp">
</a>

<a href="<?php echo home_url( '/' ); ?>return" class="p-heat-bnr__img p-heat-bnr__img--last">
  <img src="<?php echo get_template_directory_uri(); ?>/img/common/c_box_bnr.jpg?48798562231464664" alt="返送封筒切り替えの案内" class="u-pc">
   <img src="<?php echo get_template_directory_uri(); ?>/img/common/c_box_bnr_sp.jpg?487561156495666" alt="返送封筒切り替えの案内" class="u-sp">
</a>

</div>






</div>




<?php endif; ?>


  <header class="l-header p-header p-header--top" id="js-header">

    <div class="p-header__inner p-header__inner--top">

    <?php if ( wp_is_mobile() ) : ?>
          <?php if(is_page("recruit") || is_page("recruit-confirm") || is_page("recruit-thanks")): ?>
                  <div class="p-header__logo p-header__logo--recruit">
                    <a href="<?php echo home_url( '/' ); ?>">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/common/c_logo_recruit.png?6dbddba84c650683" alt="感染症検査クリニック">
                    </a>
                  </div>
           <?php else: ?>
           <div class="p-header__logo p-header__logo--top">
                <a href="<?php echo home_url( '/' ); ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/common/c_header_logo.png?6dbddba84c650683" alt="感染症検査クリニック">
                </a>
              </div>
          <?php endif; ?>
      <?php else: ?>
             <div class="p-header__logo p-header__logo--top">
                <a href="<?php echo home_url( '/' ); ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/common/c_header_logo.png?6dbddba84c650683" alt="感染症検査クリニック">
                </a>
              </div>
      <?php endif; ?>


        <!-- ./p-header__logo -->

        <a href="https://souki-kai.or.jp/rslt/" class="p-header__sp-gray-btn u-sp-display"  target="_blank">
        <span class="p-header__sp-gray-btn-text">結果通知<br>サイトへ</span></a>


        <div class="p-header__right p-header__right--top u-pc-display">
              <ul class="p-top-btns">


                <li class="p-top-btns__item c-btn-gray">
                  <a href="<?php echo home_url( '/' ); ?>group-form" class="p-top-btns__link c-btn-gray__link" >
                  企業・団体様のご案内
                  </a>
                </li>
                  <li class="p-top-btns__item c-btn-gray">
                  <a href="https://souki-kai.or.jp/rslt/" class="p-top-btns__link c-btn-gray__link" target="_blank">
                  結果通知サイトへ
                  </a>
                </li>

              <!--   <li class="p-top-btns__item c-btn-gray">
                  <a href="<?php echo home_url( '/' ); ?>clinics" class="p-top-btns__link c-btn-gray__link" target="_blank">
                  Web案内予約
                  </a>
                </li> -->

                <li class="p-top-btns__item c-btn-gray">
                  <a href="<?php echo home_url( '/' ); ?>item-list" class="p-top-btns__link c-btn-gray__link">
                  検体採取キットのご購入
                  </a>
                </li>
              </ul>

              <div class="p-header-tels u-pc-display">

                          <a href="<?php echo home_url( '/' ); ?>tel/new-tel.html" class="p-header__tel p-header__tel--top u-pc-display">
                <p class="p-header__number p-header__number--top u-font-futura"><span class="p-header__number-sq">個人</span><span class="p-header__number-num">0120-936-760</span></p>
              </a>

                <a href="<?php echo home_url( '/' ); ?>tel/campany.html" class="p-header__tel p-header__tel--top u-pc-display">
                <p class="p-header__number p-header__number--top u-font-futura"><span class="p-header__number-sq">企業・団体</span><span class="p-header__number-num p-header__number-num--campany">06-4708-8082</span></p>
              </a>

                <p class="p-header__time p-header__time--top">個人：9:00~18:00<br class="">企業・団体：9:00~19:00</p>
              </div>
        </div>
        <!-- ./p-header__right -->

              <button class="u-sp-display p-top-menu-btn" id="js-menu-top-menu-switch">
                <div class="p-top-menu-btn__out-inner">
                  <!--  <img src="<?php echo get_template_directory_uri(); ?>/img/front/menu_switch.png?6dbddba84c650683" alt="ハンバーガー"> -->
                  <div class="p-top-menu-btn__inner">
                        <span class="p-top-menu-btn__bar"></span>
                          <span class="p-top-menu-btn__bar"></span>
                          <span class="p-top-menu-btn__bar"></span>
                          <span class="p-top-menu-btn__bar-other"></span>
                  </div>
                </div>
              </button>


    </div>
    <!-- ./p-header__inner -->
          <div class="p-global-nav --global-top" id="js-global-nav">

                <ul class="p-global-nav__list --global-top-list">
                  <li class="p-global-nav__item --global-top-item">
                    <a href="<?php echo home_url( '/' ); ?>#link-use" class="p-global-nav__link --global-top-link js-sp-clink-menu-close">
                        検査のご利用方法
                    </a>
                  </li>
                  <li class="p-global-nav__item --global-top-item">
                    <a href="<?php echo home_url( '/' ); ?>faq-personal" class="p-global-nav__link --global-top-link js-sp-clink-menu-close">
                        よくある質問
                    </a>
                  </li>
                  <li class="p-global-nav__item --global-top-item">
                    <a href="<?php echo home_url( '/' ); ?>#link-kit" class="p-global-nav__link --global-top-link js-sp-clink-menu-close">
                        検体採取キット
                    </a>
                  </li>
                   <li class="p-global-nav__item --global-top-item">
                    <a href="<?php echo home_url( '/' ); ?>clinics" class="p-global-nav__link --global-top-link js-sp-clink-menu-close">
                        クリニクスの使い方
                    </a>
                  </li>
                  <li class="p-global-nav__item --global-top-item">
                    <a href="<?php echo home_url( '/' ); ?>clinic" class="p-global-nav__link --global-top-link js-sp-clink-menu-close">
                        当院について
                    </a>
                  </li>

                  <li class="p-global-nav__item --global-top-item">
                    <a href="<?php echo home_url( '/' ); ?>contact" class="p-global-nav__link --global-top-link" target="_blank">
                        お問合せ
                    </a>
                  </li>
                </ul>

                <div class="p-global-nav__sp-btn-wrap u-sp-display">
                  <a href="<?php echo home_url( '/' ); ?>item-list" class="p-global-nav__sp-btn">検体採取キットのご購入</a>
                  <a href="https://souki-kai.or.jp/rslt/" class="p-global-nav__sp-btn" target="_blank">検査結果サイトへ</a>
                </div>
                <!-- ./p-global-nav__sp-btn-wrap -->

                <div class="u-sp-display">




                  <?php if(is_page("ch")): ?>

                   <p class="p-header__guide u-mb1-5rem u-mt20">お電話でのお問い合わせ</p>

                   <a href="<?php echo home_url( '/' ); ?>tel/shibuya.html" class="p-header__tel p-header__zh-num u-sp-display" target="_blank">

                        <p class="p-header__number "><span class="p-header__number-sq bg-green-blue-i">渋谷院</span>
                        <span class="p-header__number-num c-green-blue-i"><!-- 0120-000-000 -->開院準備中</span></p>

                          <p class="p-header__time p-header__time--zh">受付時間 9:00~18:00<!--<br><span class="u-text-under-line">※日・祝日は電話受付を休止しております。</span>--></p>

                  </a>

                  <a href="<?php echo home_url( '/' ); ?>tel/fukuoka.html" class="p-header__tel p-header__zh-num u-sp-display" target="_blank">

                        <p class="p-header__number"><span class="p-header__number-sq bg-light-blue-i ">福岡院</span>
                        <span class="p-header__number-num c-light-blue-i "><!-- 0120-133-220 -->開院準備中</span></p>

                             <p class="p-header__time p-header__time--zh">受付時間 9:00~18:00<!--<br><span class="u-text-under-line">※日・祝日は電話受付を休止しております。</span>--></p>

                  </a>


                    <a href="<?php echo home_url( '/' ); ?>tel/new-tel.html" class="p-header__tel p-header__zh-num u-sp-display" target="_blank">

                        <p class="p-header__number"><span class="p-header__number-sq">大阪院</span>
                        <span class="p-header__number-num">0120-936-760</span></p>


                   <p class="p-header__time p-header__time--zh">受付時間 9:00~18:00<!--<br><span class="u-text-under-line">※日・祝日は電話受付を休止しております。</span>--></p>

                  </a>



                   <a href="<?php echo home_url( '/' ); ?>tel/campany.html" class="p-header__tel p-header__zh-num u-sp-display" target="_blank">

                        <p class="p-header__number"><span class="p-header__number-sq">企業・団体</span>
                        <span class="p-header__number-num">06-4708-8082</span></p>

                         <p class="p-header__time p-header__time--zh">受付時間 9:00~19:00<!--<br><span class="u-text-under-line">※日・祝日は電話受付を休止しております。</span>--></p>


                  </a>


                  <?php else: ?>

                   <p class="p-header__guide">お電話でのお問い合わせ</p>

                  <a href="<?php echo home_url( '/' ); ?>tel/new-tel.html" class="p-header__tel u-sp-display" target="_blank">

                        <p class="p-header__number"><span class="p-header__number-sq">個人</span>
                        <span class="p-header__number-num">0120-936-760</span></p>

                  </a>




                   <a href="<?php echo home_url( '/' ); ?>tel/campany.html" class="p-header__tel u-sp-display" target="_blank">

                        <p class="p-header__number"><span class="p-header__number-sq">企業・団体</span>
                        <span class="p-header__number-num">06-4708-8082</span></p>

                  </a>

                   <p class="p-header__time">受付時間<br class="">個人：9:00~18:00<br class="">企業・団体：9:00~19:00</p>

                     <?php endif; ?>
                </div>


              </div>


  </header>



<script>

if ((navigator.userAgent.indexOf('iPhone') > 0 && navigator.userAgent.indexOf('iPad') == -1) || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {
  document.addEventListener('DOMContentLoaded', function() {

  var header = document.getElementById("js-header");
  var space_top = document.getElementById("js-pages-head");
  var header_hight = header.offsetHeight;

  space_top.style.marginTop = header_hight + "px";



    //console.log(header_hight);



  window.onresize = function () {
    header_hight = header.offsetHeight;
    space_top.style.marginTop = header_hight + "px";
  }

  var startPos = 0, win_sc = 0;

  //関数にする
  var head_sc_event = function () {
    //header_hight = header.offsetHeight;
    win_sc = window.scrollY;
   // console.log(win_sc);
    if (win_sc >= startPos) {
      if (win_sc >= 200) {
        header.style.top = - header_hight + "px";
      }
    }

    else {
      header.style.top = 0;
    }
    startPos = win_sc;
  }



  window.addEventListener('scroll', head_sc_event);
 });

}


</script>
