<?php
/*
Template Name: お問い合わせ
*/
?>
<?php get_header();?>






<div class="p-pages-ttl-area --ttl-bg-company-reserve u-bg-cover" id="js-pages-head">
        <div class="p-pages-ttl-area__inner">
              <div class="p-pages-ttl-area__texts">
                        <h1 class="p-pages-ttl-area__ttl">お問い合わせ</h1>
                <p class="p-pages-ttl-area__sub">当院へのご質問や詳しい情報等をご希望の方用のページになります。</p>
              </div>
        </div>
</div>






<div class="c-breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>




<style>



/*

<section class="p-contact-form-area">



  <div class="l-inner">


<h2 class="c-blue p-contact-form-area__ttl">お問い合わせフォーム</h2>

    <p class="p-contact-form-area__intro">必要事項にご入力の上お申し込みください。また下記項目は全て<span class="c-pink">必須事項</span>となっております。</p>





    <div class="p-form-content">

    <?php echo do_shortcode('[mwform_formkey key="85"]'); ?>

    </div>


  </div>


</section>


*/



</style>



      <div class="p-contact-note u-tc">

             <!--  <h3 class="p-contact-note__ttl c-pink u-fw600">現在、大変多くのメールフォーム経由での<br class="u-sp">お問い合わせをいただいている関係で、<br class="">
              お問い合わせの方法をお電話のみ<br class="u-sp">とさせていただいております。</h3> -->



              <p class="p-contact-note__desc">※お電話でお問い合わせする前に、<br class="u-sp"><a href="<?php echo home_url( '/' ); ?>faq-personal" class="c-pink">よくある質問</a>をご確認くださいませ。</p>

                 <p class="p-contact-note__desc p-contact-note__sub-note c-red">※検査した検体が当院に<br class="u-sp">届いているかのご確認につきましては、<br class="">検体をご郵送いただきました<span class="u-text-under-line">管轄の郵便局へ</span><br class="u-sp">お問い合わせいただきますようお願い致します。</p>

              <div class="p-contact-note__tel-wrap">

                  <p class="p-contact-note__desc02 c-blue">お問い合わせ先</p>

              <a href="<?php echo home_url( '/' ); ?>tel/new-tel.html" class="p-contact-note__tel" target="_blank">
                     <p class="p-header__number"><span class="p-header__number-sq">個人</span>
                        <span class="p-header__number-num">0120-936-760</span></p>
              </a>

              <a href="<?php echo home_url( '/' ); ?>tel/campany.html" class="p-contact-note__tel" target="_blank">
                  <p class="p-header__number"><span class="p-header__number-sq">企業・団体</span>
                  <span class="p-header__number-num">06-4708-8082</span></p>
              </a>

              <p class="p-contact-note__time">受付時間：9:00~18:00</p>

              </div>


      </div>







<script src="https://ajaxzip3.github.io/ajaxzip3.js?6dbddba84c650683" charset="UTF-8"></script>

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
    </script>
    <link rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css?6dbddba84c650683">
                 <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js?6dbddba84c650683"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js?6dbddba84c650683"></script>




<?php get_footer();?>
