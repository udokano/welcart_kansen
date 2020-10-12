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
                <p class="p-pages-ttl-area__sub">当院へのご質問や詳しい情報等をご希望の方用のフォームになります。</p>
              </div>
        </div>
</div>

<div class="c-breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>



<section class="p-contact-form-area">



  <div class="l-inner">


    <h2 class="c-blue p-contact-form-area__ttl">お問い合わせフォーム</h2>

    <p class="p-contact-form-area__intro">必要事項にご入力の上お申し込みください。また下記項目は全て<span class="c-pink">必須事項</span>となっております。</p>


    <div class="p-form-content">

    <?php echo do_shortcode('[mwform_formkey key="85"]'); ?>

    </div>


  </div>


</section>






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
