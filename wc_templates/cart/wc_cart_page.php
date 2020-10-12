<?php

get_header();
?>

<style>
.aright.unitprice {
	display:none;
}
	</style>

<div id="content" class="two-column">
<div class="catbox" id="js-pages-head">

<section class="cart__area">

<div class="section__inner">



 							<!-- 	<div class="p-area-not">
                                        <p class="p-area-not__ttl">
											<span class="p-area-not__sub">現在のご購入・回収可能地域</span><br>東京、愛知、大阪、福岡<br><span class="p-area-not__sub">それ以外の地域は順次拡大予定となります。</span>
											<div class="p-uuuu">※個人ご利用の場合のみ。<br><span class="p-area-not__sub">企業・団体様のご利用の場合は地域制限はございません。</span></div>
                                        </p>
                                </div> -->
                                <!-- ./p-area-not -->





<?php if (have_posts()) : usces_remove_filter(); ?>

	<div class="post" id="wc_<?php usces_page_name(); ?>">

	<h1 class="cart_page_title tc"><?php _e('In the cart', 'usces'); ?></h1>
		<div class="entry">

			<div id="inside-cart">

				<div class="usccart_navi">
					<ol class="ucart">
					<li class="ucart usccart usccart_cart"><?php _e('1.Cart', 'usces'); ?></li>
					<li class="ucart usccustomer"><?php _e('2.Customer Info', 'usces'); ?></li>
					<li class="ucart uscdelivery">発送・支払方法</li>
					<li class="ucart uscconfirm"><?php _e('4.Confirm', 'usces'); ?></li>
					</ol>
				</div>

				<div class="header_explanation">
				<?php do_action('usces_action_cart_page_header'); ?>
				</div>

				<div class="error_message"><?php usces_error_message(); ?></div>
				<form action="<?php usces_url('cart'); ?>" method="post" onKeyDown="if (event.keyCode == 13) {return false;}" class="js-cart-form">
				<?php if (usces_is_cart()) : ?>

				<div id="cart">
					<div class="upbutton"><?php _e('Press the `update` button when you change the amount of items.', 'usces'); ?><input name="upButton" type="submit" value="<?php _e('Quantity renewal', 'usces'); ?>" onclick="return uscesCart.upCart()" /></div>
					<table cellspacing="0" id="cart_table">
						<thead>
						<tr>
							<th scope="row" class="num">No.</th>
							<!-- <th class="thumbnail"> </th> -->
							<th class="item__th"><?php _e('item name', 'usces'); ?></th>
						<!-- 	<th class="quantity"><?php _e('Unit price', 'usces'); ?></th> -->
							<th class="quantity"><?php _e('Quantity', 'usces'); ?></th>
							<th class="subtotal"><?php _e('Amount', 'usces'); ?><?php usces_guid_tax(); ?></th>
						<!-- 	<th class="stock"><?php _e('stock status', 'usces'); ?></th> -->
							<th class="action">&nbsp;</th>
						</tr>
						</thead>
						<tbody>
					<?php usces_get_cart_rows(); ?>
						</tbody>
						<tfoot>
						<tr>
						<?php if (wp_is_mobile()) : ?>
							<th colspan="3" scope="row" class="aright"><?php _e('total items', 'usces'); ?><?php usces_guid_tax(); ?></th>
						<?php else: ?>
							<th colspan="3" scope="row" class="aright"><?php _e('total items', 'usces'); ?><?php usces_guid_tax(); ?></th>
						<?php endif; ?>


							<th class="tc price__txt" colspan="2"><?php usces_crform(usces_total_price('return'), true, false); ?></th>
						<!-- 	<th colspan="2">&nbsp;</th> -->
						</tr>
						</tfoot>
					</table>
				<!-- 	<div class="currency_code"><?php _e('Currency', 'usces'); ?> : <?php usces_crcode(); ?></div> -->
					<?php /* if ($usces_gp) : ?>
					<img src="<?php bloginfo('template_directory'); ?>/images/gp.gif" alt="<?php _e('Business package discount', 'usces'); ?>" /><br /><?php _e('The price with this mark applys to Business pack discount.', 'usces'); ?>
					<?php endif; */ ?>
				</div><!-- end of cart -->

				<?php else : ?>
				<div class="no_cart"><?php _e('There are no items in your cart.', 'usces'); ?></div>
				<?php endif; ?>

				<div class="send"><?php usces_get_cart_button(); ?></div>
				<?php do_action('usces_action_cart_page_inform'); ?>
				</form>

				<div class="footer_explanation">
				<?php do_action('usces_action_cart_page_footer'); ?>
				</div>
			</div><!-- end of inside-cart -->

		</div><!-- end of entry -->
	</div><!-- end of post -->
<?php else: ?>
<p><?php _e('Sorry, no posts matched your criteria.', 'usces'); ?></p>
<?php endif; ?>



</div>



</section>


</div><!-- end of catbox -->
</div><!-- end of content -->



<?php get_footer(); ?>

<script>

jQuery(function(){

	jQuery("input.quantity").attr("type","number");

});

</script>
