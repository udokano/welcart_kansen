<?php
/*
Template Name: 回収フォーム-サンクス
*/
?>

<?php get_header();?>



<section class="p-contact-form-area">



  <div class="l-inner">

<h2 class="c-blue p-contact-form-area__ttl">送信完了</h2>



 <div class="p-form-content">


<?php echo do_shortcode('[mwform_formkey key="40"]');?>

<p class="u-tc">
    この度は、検査キットの回収依頼ありがとうございます。<br>
    後日担当者より折り返しご連絡いたします。<br>
    返信まで今しばらくお待ちくださいませ。
</p>


 </div>


  </div>


</section>





<?php get_footer();?>
