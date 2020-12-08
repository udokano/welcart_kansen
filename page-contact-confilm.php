<?php
/*
Template Name: お問い合わせ-確認
*/
?>

<?php get_header();?>



<section class="p-contact-form-area">



  <div class="l-inner">

<h2 class="c-blue p-contact-form-area__ttl">確認画面</h2>



 <div class="p-form-content">


<?php echo do_shortcode('[mwform_formkey key="85"]');?>



 </div>


  </div>


</section>





<?php get_footer();?>



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

jQuery('.p-personal-agree').text("同意个人信息的处理");

jQuery('.p-term__link').text("关于个人信息的处理");

jQuery(".p-to-confirm__btn").val("发送。");

</script>
