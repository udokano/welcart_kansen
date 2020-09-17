<?php
/*
Template Name: 診断結果フォーム 陽性
*/
?>

 <?php $name = $_get["seimei"]; ?>
   <?php $mail = $_get["mail"]; ?>
      <?php $result = $_get["result"]; ?>

<?php get_header();?>

<section class="result pages">
  <div class="section__inner">

  <h1 class="result__ttl tc">診断結果フォーム</h1>

  <form method="post" data-persist=”garlic” action="<?php echo home_url( '/' ); ?>pdf02" class="result_form">

<div class="msr_radio_05">
    <input type="radio" name="result" id="msr_05_radio01" value="陰性" />
    <label for="msr_05_radio01">陰性</label>
    <input type="radio" name="result" id="msr_05_radio02" value="陽性" checked/>
    <label for="msr_05_radio02">陽性</label>
  </div>


 <div class="msr_text_05">
    <label for="full__name">氏名</label>
    <input type="text" name="seimei" value="<?php echo $name ?>"  id="full__name"/>
  </div>

   <div class="msr_text_05">
    <label for="email">メールアドレス</label>
    <input type="text" name="mail" value="<?php echo $mail ?>"  id="email"/>
  </div>

<p class="msr_sendbtn_05"><input type="submit" name="submit" value="PDF出力" class="submit"></p>
</form>

  </div>
  <!-- ./section__inner -->
</section>
<?php get_footer();?>
