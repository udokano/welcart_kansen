


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
	<?php if(get_field("title")): ?>
		<title><?php echo the_field('title'); ?></title>
	<?php else: ?>
		<title><?php the_title(); ?> | 感染症検査クリニック</title>
	<?php endif; ?>
	<?php if(get_field("description")): ?>
		<meta name="description" content="<?php echo the_field('description'); ?>" />
	<?php else: ?>
		<meta name="description" content="<?php if(have_posts()): ?><?php while(have_posts()): the_post(); ?><?php 
		$des = get_the_content();
		$des = strip_tags($des);
		$des = str_replace(array("\r\n","&nbsp;"), '', $des);
		$desp = mb_substr($des, 0, 120, "UTF-8");
		echo $desp;
		?><?php endwhile; ?><?php endif; ?>" />
	<?php endif; ?>
	
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
<!-- Event snippet for PCR検査　無償検査メール conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-824377490/9KK6CJSwwtcBEJKBjIkD'});
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

<?php if (!is_page('usces-cart')): ?>
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

<!----------------------------

  BOGOの言語設定が日本語の場合

   ---------------------------->





  <header class="l-header p-header p-header--top" id="js-header">

    <div class="p-header__inner p-header__inner--top">

        <div class="p-header__logo p-header__logo--top">
          <a href="<?php echo home_url( '/' ); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/common/c_header_logo.png?6dbddba84c650683" alt="感染症検査クリニック">
          </a>
        </div>
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

                          <a href="<?php echo home_url( '/' ); ?>tel/kansenshou.html" class="p-header__tel p-header__tel--top u-pc-display">
                <p class="p-header__number p-header__number--top u-font-futura"><span class="p-header__number-sq">個人</span><span class="p-header__number-num">0120-088-120</span></p>
              </a>

                <a href="<?php echo home_url( '/' ); ?>tel/campany.html" class="p-header__tel p-header__tel--top u-pc-display">
                <p class="p-header__number p-header__number--top u-font-futura"><span class="p-header__number-sq">企業・団体</span><span class="p-header__number-num p-header__number-num--campany">06-4708-8082</span></p>
              </a>

                <p class="p-header__time p-header__time--top">受付時間：9:00~19:00<!--<br><span class="u-text-under-line">※日・祝日は電話受付を休止しております。</span>--></p>
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
                   <p class="p-header__guide">お電話でのお問い合わせ</p>

                  <a href="<?php echo home_url( '/' ); ?>tel/kansenshou.html" class="p-header__tel u-sp-display" target="_blank">

                        <p class="p-header__number"><span class="p-header__number-sq">個人</span>
                        <span class="p-header__number-num">0120-088-120</span></p>

                  </a>

                   <a href="<?php echo home_url( '/' ); ?>tel/campany.html" class="p-header__tel u-sp-display" target="_blank">

                        <p class="p-header__number"><span class="p-header__number-sq">企業・団体</span>
                        <span class="p-header__number-num">06-4708-8082</span></p>

                  </a>

                   <p class="p-header__time">受付時間 9:00~19:00<!--<br><span class="u-text-under-line">※日・祝日は電話受付を休止しております。</span>--></p>
                </div>


              </div>


  </header>
