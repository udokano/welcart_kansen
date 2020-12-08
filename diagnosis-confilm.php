<?php
/*
Template Name: 診断結果チェック
*/
?>
<?php get_header();?>

<section class="privacy pr__trem pages">
  <div class="section__inner">

  <?php $name = $_POST["seimei"]; ?>
   <?php $mail = $_POST["mail"]; ?>
      <?php $result = $_POST["result"]; ?>
  <input type="hidden" name="seimei" value="<?php echo $name; ?>" id="name">
<form method="POST" action="<?php echo home_url('/')?>pdf01">
<p>名前：<?php echo $name; ?></p>
<p>メールアドレス：<?php echo $mail; ?></p>
<p>診断結果：<?php echo $result; ?></p>
<p><input type="submit" name="submit" value="PDF出力" formtarget="_blank"></p>
<input type="hidden" name="seimei" value="<?php echo $name; ?>">
<input type="hidden" name="mail" value="<?php echo $mail; ?>">
<input type="hidden" name="result" value="<?php echo $result; ?>">
</form>

<?php echo do_shortcode('[dkpdf-button]'); ?>

<!--  -->
  </div>
  <!-- ./section__inner -->
</section>


<script>

$(function(){
var name = $("#name").val();
$("#aa").text(name);
});



</script>


<?php get_footer();?>
