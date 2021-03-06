<?php
/*
Template Name: 紹介購入サンクス
*/
?>
<?php get_header();?>



<script>
 window.onload = function(){
 ga('send', 'event', {
 'eventCategory': 'CV_shoukai',
 'eventAction': 'Load'
 });
 };
</script>


<section class="p-contact-form-area">


  <div class="l-inner">

<h2 class="c-blue p-contact-form-area__ttl">購入完了</h2>


        <div class="p-form-content">

                    <p class="u-tc" style="margin-bottom: 2.2rem;">
                        ※紹介購入した人のサンクスページです。<br>
                        お買い上げありがとうございました。<br>ご不明な点などがございましたら、お問合せよりご連絡ください。
                    </p>

                    <div class="send u-tc">
                        <a href="<?php echo home_url( '/' ); ?>" class="back_to_top_button">トップページへ戻る</a>
                    </div>

        </div>


  </div>


</section>


<?php get_footer();?>
