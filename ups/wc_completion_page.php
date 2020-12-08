<?php

get_header(1);
?>

<script>
 window.onload = function(){
 ga('send', 'event', {
 'eventCategory': 'CV_Item_Sold',
 'eventAction': 'Load'
 });
 };
</script>


<script>

var prm;

function retrieveGETqs() {

  var query = window.location.search.substring(1);
  return query;
  //引数がない時は処理しない
  if (!query) return false;

}

 var str = retrieveGETqs();
	prm = decodeURIComponent(str);
	var pattern = "utm_source";

	/* パラメーターに紹介コードが含まれていたらリダイレクト */

	 if (prm.indexOf(pattern) === 0) {
				setTimeout("link()", 0);
				function link(){
				location.href='/introductory-thanks/' + '?' + prm;
				}
	  }

	/*   if (!prm) {
		  setTimeout("link()", 0);
				function link(){
				location.href='/thanks/';
				}
	  } */

</script>



<div id="content" class="two-column">
<div class="catbox">
<section class="cart__area">

<div class="section__inner">
<?php if (have_posts()) : usces_remove_filter(); ?>

	<div class="post" id="wc_<?php usces_page_name(); ?>">


		<div class="entry">

			<div id="cart_completion">
			<?php if (check_payment(get_payment_name('estimate'))) : ?>
				<h1 class="tc">ご依頼完了</h1>
			<?php else : ?>
				<h1 class="tc">購入完了</h1>
			<?php endif; ?>
			<?php if (dlseller_have_dlseller_content() || check_payment(get_payment_name('estimate'))) : ?>
				<div class="header_explanation">
				<p class="tc">お見積書のダウンロードは下記の会員ページからお願いします。<br />
				銀行のお振込みを選択いただいた方は<span style="color: red;">メールにてお振込み先情報</span>をお送りしております。<br />
				<span style="color: red;">お支払い確認後、マイページから引換コードをダウンロード可能</span>になります。<br />
				
				<a href="<?php echo USCES_MEMBER_URL; ?>#history_head" class="p-to-mypage">マイページでお見積り書をダウンロードする</a><br />
				<?php _e("If you have any questions, please contact us by 'Contact'.", 'usces'); ?></p>
				<?php do_action('usces_action_cartcompletion_page_header', $usces_entries, $usces_carts); ?>
				</div><!-- header_explanation -->
			<?php else : ?>
				<div class="header_explanation">
				<p class="tc"><?php _e('Thank you for shopping.', 'usces'); ?><br /><?php _e("If you have any questions, please contact us by 'Contact'.", 'usces'); ?></p>
				<?php do_action('usces_action_cartcompletion_page_header', $usces_entries, $usces_carts); ?>
				</div><!-- header_explanation -->
			<?php endif; ?>


			<?php usces_completion_settlement(); ?>

			<?php do_action('usces_action_cartcompletion_page_body', $usces_entries, $usces_carts); ?>

				<div class="footer_explanation">
				<?php do_action('usces_action_cartcompletion_page_footer', $usces_entries, $usces_carts); ?>
				</div><!-- footer_explanation -->

				<div class="send"><a href="<?php echo home_url(); ?>" class="back_to_top_button"><?php _e('Back to the top page.', 'usces'); ?></a></div>
			<?php echo apply_filters('usces_filter_conversion_tracking', null, $usces_entries, $usces_carts); ?>

			</div><!-- end of cart_completion -->

		</div><!-- end of entry -->
	</div><!-- end of post -->
<?php else: ?>
<p><?php _e('Sorry, no posts matched your criteria.', 'usces'); ?></p>
<?php endif; ?>
</div><!-- ./section__inner -->
</section>
</div><!-- end of catbox -->
</div><!-- end of content -->



<?php get_footer(); ?>
