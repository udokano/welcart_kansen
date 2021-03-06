<?php


get_header();
usces_delivery_info_script();
?>

<script>


jQuery(".payment_0 > input").addClass("validate[required]");


</script>

<div id="content" class="two-column">
<div class="catbox">

<section class="cart__area">

<div class="section__inner">




<?php if (have_posts()) : usces_remove_filter(); ?>

	<div class="post" id="wc_<?php usces_page_name(); ?>">

		<h1 class="cart_page_title tc">発送・支払方法</h1>
		<div class="entry">

			<div id="delivery-info">

				<div class="usccart_navi">
					<ol class="ucart">
					<li class="ucart usccart"><?php _e('1.Cart', 'usces'); ?></li>
					<li class="ucart usccustomer"><?php _e('2.Customer Info', 'usces'); ?></li>
					<li class="ucart uscdelivery usccart_delivery">発送・支払方法</li>
					<li class="ucart uscconfirm"><?php _e('4.Confirm', 'usces'); ?></li>
					</ol>
				</div>

				<div class="header_explanation">
			<?php do_action('usces_action_delivery_page_header'); ?>
				</div>

				<div class="error_message"><?php usces_error_message(); ?></div>
				<form action="<?php usces_url('cart'); ?>" method="post" class="js-cart-form">
			<?php if (dlseller_have_shipped()) : ?>
				<table class="customer_form" >
					<tr >
						<th rowspan="2" scope="row"><?php _e('shipping address', 'usces'); ?></th>
						<td><input name="delivery[delivery_flag]" type="radio" id="delivery_flag1" onclick="document.getElementById('delivery_table').style.display = 'none';" value="0"<?php if ($usces_entries['delivery']['delivery_flag'] == 0) {
    echo ' checked';
} ?> onKeyDown="if (event.keyCode == 13) {return false;}" /> <label for="delivery_flag1"><?php _e('same as customer information', 'usces'); ?></label></td>
					</tr>
					<tr>
						<td><input name="delivery[delivery_flag]" id="delivery_flag2" onclick="document.getElementById('delivery_table').style.display = 'table'" type="radio" value="1"<?php if ($usces_entries['delivery']['delivery_flag'] == 1) {
    echo ' checked';
} ?> onKeyDown="if (event.keyCode == 13) {return false;}" /> <label for="delivery_flag2"><?php _e('Chose another shipping address.', 'usces'); ?></label></td>
					</tr>
				</table>
			<?php endif; ?>
				<?php do_action('usces_action_delivery_flag'); ?>

				<table class="customer_form" id="delivery_table">
					<?php uesces_addressform( 'delivery', $usces_entries, 'echo' ); ?>
					</table>



				<table class="customer_form" id="time">
					<tr style="display:none;">
						<th scope="row"><?php _e('shipping option', 'usces'); ?></th>
						<td colspan="2"><?php usces_the_delivery_method($usces_entries['order']['delivery_method']); ?></td>
					</tr>
					<!-- <tr >
						<th scope="row"><?php _e('Delivery date', 'usces'); ?></th>
						<td colspan="2"><?php usces_the_delivery_date($usces_entries['order']['delivery_date']); ?></td>
					</tr> -->
					<!-- <tr >
						<th scope="row"><?php _e('Delivery Time', 'usces'); ?></th>
						<td colspan="2"><?php usces_the_delivery_time($usces_entries['order']['delivery_time']); ?></td>
					</tr> -->
					<tr>
						<th scope="row"><em><?php _e('*', 'usces'); ?></em><?php _e('payment method', 'usces'); ?></th>
						<td colspan="2" class="u-po_rel"><?php usces_the_payment_method($usces_entries['order']['payment_name']); ?></td>
					</tr>
				</table>

			<?php usces_delivery_secure_form(); ?>

			<?php $meta = usces_has_custom_field_meta('order'); ?>
			<?php if (!empty($meta) and is_array($meta)) : ?>
				<table class="customer_form" id="custom_order">
				<?php usces_custom_field_input($usces_entries, 'order', ''); ?>
				</table>
			<?php endif; ?>

			<?php $entry_order_note = empty($usces_entries['order']['note']) ? apply_filters('usces_filter_default_order_note', null) : $usces_entries['order']['note']; ?>
				<table class="customer_form" id="notes_table">
					<tr>
						<th scope="row"><?php _e('Notes', 'usces'); ?></th>
						<td colspan="2"><textarea name="offer[note]" id="note" class="notes"><?php echo esc_html($entry_order_note); ?></textarea><br>
						<?php if (!is_group_item_in_cart()) : ?>
						<!-- <span style="color: red; font-size: 130%; line-height: 1.4; padding-top: 10px; display: block;">領収書が必要な方は備考欄に【領収書】と記載ください。<br>
ご注文者様のお名前でメールでご案内させて頂いております。</span> -->
						<?php endif; ?>
						</td>
					</tr>
				</table>

				<div class="send"><input name="offer[cus_id]" type="hidden" value="" />
				<input name="backCustomer" type="submit" class="back_to_customer_button" value="<?php _e('Back', 'usces'); ?>"<?php echo apply_filters('usces_filter_deliveryinfo_prebutton', null); ?> />
				<input name="confirm" type="submit" class="to_confirm_button" value="<?php _e(' Next ', 'usces'); ?>"<?php echo apply_filters('usces_filter_deliveryinfo_nextbutton', null); ?> /></div>
				<?php do_action('usces_action_delivery_page_inform'); ?>
				</form>

				<div class="footer_explanation">
			<?php do_action('usces_action_delivery_page_footer'); ?>
				</div>
			</div>

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


<script>




jQuery("#address3_row th").text("建物名");




jQuery(document).ready(function(){
jQuery(".to_confirm_button").on("click",function(){

	if(jQuery(".validate[required]").val() === "") {
		jQuery(".ui-dialog").removeClass("is-card-show");
	}

	else {
		jQuery(".ui-dialog").addClass("is-card-show");
	}

});
});

	$(function(){
	    setTimeout(function(){
	        jQuery(".back_to_delivery_button").on("click",function(){
		jQuery(".ui-dialog").removeClass("is-card-show");

});
	    },3000);
	});

		// 画像が読み込まれたら実行させる
	$(window).on('load', function() {
	 
	    jQuery(".back_to_delivery_button").on("click",function(){
		jQuery(".ui-dialog").removeClass("is-card-show");

});
	 
	});





</script>
