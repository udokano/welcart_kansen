<?php
/*
Template Name: 回収フォーム
*/
?>
<?php get_header();?>



<div class="p-pages-ttl-area --ttl-bg-company-reserve u-bg-cover">
        <div class="p-pages-ttl-area__inner">
              <div class="p-pages-ttl-area__texts">
                        <h1 class="p-pages-ttl-area__ttl">回収</h1>
                <p class="p-pages-ttl-area__sub">こちらは教検査キットの回収<br>専用の申込フォームになります。</p>
              </div>
        </div>
</div>



<section class="p-contact-form-area">



  <div class="l-inner">


    <h2 class="c-blue p-contact-form-area__ttl">回収フォーム</h2>

    <p class="p-contact-form-area__intro">必要事項にご入力の上お申し込みください。また下記項目は全て<span class="c-pink">必須事項</span>となっております。</p>


    <div class="p-form-content">

    <?php echo do_shortcode('[mwform_formkey key="40"]'); ?>

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
