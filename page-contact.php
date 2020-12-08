<?php
/*
Template Name: お問い合わせ
*/
?>
<?php get_header();?>






<div class="p-pages-ttl-area --ttl-bg-company-reserve u-bg-cover" id="js-pages-head">
        <div class="p-pages-ttl-area__inner">
              <div class="p-pages-ttl-area__texts">
                        <h1 class="p-pages-ttl-area__ttl">联系我们</h1>
                <p class="p-pages-ttl-area__sub">如果您有任何疑问或想了解更多信息，请填写此表。</p>
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

<div class="p-wechat">
  <a href="https://u.wechat.com/ICEBBX89d1dC9f5990yPa14" class="" target="_blank">

    <img src="<?php echo get_template_directory_uri(); ?>/img/common/c_wecaht_bnr.jpg?01254455" alt="WECHATでもご質問・ご相談を受け付けております。" class="u-pc">
    <img src="<?php echo get_template_directory_uri(); ?>/img/common/c_wecaht_bnr_sp.jpg?54455221" alt="連絡先追加はこちらのバナーをタップ" class="u-sp">

  </a>

</div>



 <h2 class="c-blue p-contact-form-area__ttl">咨询表</h2>

    <p class="p-contact-form-area__intro">请填写必须事项后申请。还有，下列科目都是必须事项。</p>


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






<!-- ===================

BOGO中国語

======================== -->



<script>

//フォームの項目

jQuery('form .p-form-row:nth-child(1) dt').text("姓名");

jQuery('form .p-form-row:nth-child(2) dt').text("邮箱地址");

jQuery('form .p-form-row:nth-child(3) dt').text("邮箱地址（确认用）");

jQuery('form .p-form-row:nth-child(4) dt').text("电话号码");

jQuery('form .p-form-row:nth-child(5) dt').text("咨询的种类");

jQuery('form .p-form-row:nth-child(6) dt').text("咨询内容");

//フォームのプレースフォルダー

jQuery('form .p-form-row:nth-child(1) dd input').attr("placeholder","请输入姓名");



//チェックボックス


//検査について
jQuery('form .p-form-check span:nth-child(1) label span').text("关于检测");

/* jQuery('form .p-form-check span:nth-child(1) label input').val("About Inspection"); */

//費用について
jQuery('form .p-form-check span:nth-child(2) label span').text("关于费用");
/* jQuery('form .p-form-check span:nth-child(2) label input').val("About Costs"); */

//パスワード紛失
jQuery('form .p-form-check span:nth-child(3) label span').text("忘记密码");
/* jQuery('form .p-form-check span:nth-child(3) label input').val("Lost Password"); */


//その他
jQuery('form .p-form-check span:nth-child(4) label span').text("其他");
/* jQuery('form .p-form-check span:nth-child(4) label input').val("Other"); */

//個人情報

jQuery('.p-personal-agree label span').text("同意个人信息的处理");

jQuery('.p-term__link').text("关于个人信息的处理");


jQuery(".error").each(function(){

  jQuery(this).text("必须填写");
});

jQuery(".p-to-confirm__btn").val("进入确认画面");


</script>










<?php get_footer();?>
