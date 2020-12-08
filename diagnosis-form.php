<?php
/*
Template Name: 診断結果フォーム 陰性
*/
?>



<?php get_header();?>

 <!--     <script>
$(function(){
$("form").garlic();
});
</script> -->

<section class="result pages">
  <div class="section__inner">

  <h1 class="result__ttl tc">診断結果入力フォーム</h1>

  <form method="post" data-persist=”garlic” action="<?php echo home_url( '/' ); ?>pdf01" class="result_form">

<div class="msr_radio_05 po_rel">
   <input type="radio" name="result" id="msr_05_radio01" class="validate[required]" value="陰性" />
    <label for="msr_05_radio01">陰性</label>
    <input type="radio" name="result" id="msr_05_radio02" class="validate[required]" value="陽性" />
    <label for="msr_05_radio02">陽性</label>
  </div>


 <div class="msr_text_05 po_rel">
    <label for="full__name">氏名</label>
    <input type="text" name="seimei" value="" id="full__name" class="validate[required]"/>
  </div>

   <div class="msr_text_05 po_rel">
    <label for="email">メールアドレス</label>
    <input type="text" name="mail" value="" id="email" class="validate[required]"/>
  </div>

<p class="msr_sendbtn_05"><input type="submit" name="submit" value="PDF送信" class="submit"></p>
</form>

  </div>
  <!-- ./section__inner -->
</section>
<?php get_footer();?>
