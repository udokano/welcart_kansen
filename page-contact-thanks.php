<?php
/*
Template Name:お問い合わせ-サンクス
*/
?>

<?php get_header();?>



<section class="p-contact-form-area">


  <div class="l-inner">

<h2 class="c-blue p-contact-form-area__ttl">送信完了</h2>


 <div class="p-form-content">

 <p class="u-tc">
    この度は、当院へ<br>お問い合わせいただき誠にありがとうございます。<br>
    後日担当者より折り返しご連絡いたします。<br>
    返信まで今しばらくお待ちくださいませ。
</p>


<?php echo do_shortcode('[mwform_formkey key="85"]');?>


 </div>


  </div>


</section>



<?php get_footer();?>
