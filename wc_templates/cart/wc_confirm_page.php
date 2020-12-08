<?php

get_header();
?>

<style>

.thumbnail {
	display: none;
}

.member-fax-row, .delivery-fax-row {
	display: none;
}

</style>

<div id="content" class="two-column">
<div class="catbox page-template-uscesmember" id="js-pages-head">

<section class="cart__area">

<div class="section__inner">




<?php if (have_posts()) : usces_remove_filter(); ?>

<div class="post" id="wc_<?php usces_page_name(); ?>">


<h1 class="cart_page_title tc"><?php _e('Confirmation', 'usces'); ?></h1>




<!-- <p class="p-conf-note">検査キットの現在ご購入可能な地域<br><span class="c-under-deco">東京、愛知、大阪、福岡</span></p> -->

<div class="entry">

<div id="info-confirm">



				<div class="confiem_notice tc">
				<?php _e('Please do not change product addition and amount of it with the other window with displaying this page.', 'usces'); ?>
				</div>



	  <div class="usccart_navi">
					<ol class="ucart">


									<li class="ucart usccart"><?php _e('1.Cart', 'usces'); ?></li>
									<li class="ucart usccustomer"><?php _e('2.Customer Info', 'usces'); ?></li>
									<li class="ucart uscdelivery">発送・支払方法</li>
									<li class="ucart uscconfirm usccart_confirm"><?php _e('4.Confirm', 'usces'); ?></li>


					</ol>
		</div>

	<div class="header_explanation">
<?php do_action('usces_action_confirm_page_header'); ?>
	</div><!-- end of header_explanation -->

	<div class="error_message"><?php usces_error_message(); ?></div>
	<div id="cart"><table cellspacing="0" id="cart_table"><thead>
			<tr>

								<th scope="row" class="num"><?php _e('No.', 'usces'); ?></th>
							<!-- <th class="thumbnail">&nbsp;&nbsp;</th> -->
							<th class="quantity-conf"><?php _e('Items', 'usces'); ?></th>
							<!-- 	<th class="price"><?php _e('Unit price', 'usces'); ?></th> -->
							<th class="quantity "><?php _e('Quantity', 'usces'); ?></th>
							<th class="subtotal"><?php _e('Amount', 'usces'); ?><?php usces_guid_tax(); ?></th>
							<!-- <th class="action" colspan="2"></th> -->

			</tr>
			</thead>
			<tbody>
		<?php usces_get_confirm_rows(); ?>
			</tbody>
			<tfoot>
			<tr>

							<th colspan="2" class="aright"><?php _e('total items', 'usces'); ?></th>


				<th class="aright " colspan="2"><?php usces_crform($usces_entries['order']['total_items_price'], true, false); ?></th>

			</tr>
<?php if (!empty($usces_entries['order']['discount'])) : ?>
			<tr>
				<td colspan="2" class="aright"><?php echo apply_filters('usces_confirm_discount_label', __('Campaign discount', 'usces')); ?></td>
				<td class="aright" style="color:#FF0000" colspan="2"><?php usces_crform($usces_entries['order']['discount'], true, false); ?></td>
				<!-- <td>&nbsp;</td> -->
			</tr>
<?php endif; ?>
<?php if (usces_is_tax_display() && 'products' == usces_get_tax_target()) : ?>
			<tr>
				<td colspan="2" class="aright"><?php usces_tax_label(); ?></td>
				<td class="aright" colspan="2"><?php usces_tax($usces_entries) ?></td>
				<!-- <td>&nbsp;</td> -->
			</tr>
<?php endif; ?>
<?php if (usces_is_member_system() && usces_is_member_system_point() && !empty($usces_entries['order']['usedpoint']) && 0 == usces_point_coverage()) : ?>
			<tr>
				<td colspan="2" class="aright"><?php _e('Used points', 'usces'); ?></td>
				<td class="aright" style="color:#FF0000" colspan="2"><?php echo number_format($usces_entries['order']['usedpoint']); ?></td>
				<!-- <td>&nbsp;</td> -->
			</tr>
<?php endif; ?>
			<tr>


						<td colspan="2" class="aright"><?php _e('Shipping', 'usces'); ?></td>


				<td class="aright" colspan="2"><?php usces_crform($usces_entries['order']['shipping_charge'], true, false); ?></td>
			</tr>
<?php if (!empty($usces_entries['order']['cod_fee'])) : ?>
			<tr>
				<td colspan="2" class="aright "><?php echo apply_filters('usces_filter_cod_label', __('COD fee', 'usces')); ?></td>
				<td class="aright " colspan="2"><?php usces_crform($usces_entries['order']['cod_fee'], true, false); ?></td>

			</tr>
<?php endif; ?>
<?php if (usces_is_tax_display() && 'all' == usces_get_tax_target()) : ?>
			<tr>

						<td colspan="2" class="aright "><?php usces_tax_label(); ?></td>

				<td class="aright " colspan="2"><?php usces_tax($usces_entries) ?></td>

			</tr>
<?php endif; ?>
<?php if (usces_is_member_system() && usces_is_member_system_point() && !empty($usces_entries['order']['usedpoint']) && 1 == usces_point_coverage()) : ?>
			<tr>
				<td colspan="2" class="aright"><?php _e('Used points', 'usces'); ?></td>
				<td class="aright" style="color:#FF0000" colspan="2"><?php echo number_format($usces_entries['order']['usedpoint']); ?></td>

			</tr>
<?php endif; ?>
			<tr>

							<th colspan="2" class="aright total-price"><?php _e('Total Amount', 'usces'); ?></th>

				<th class="aright total-price" colspan="2"><?php usces_crform($usces_entries['order']['total_full_price'], true, false); ?></th>

			</tr>
			</tfoot>
		</table>
<?php if (usces_is_member_system() && usces_is_member_system_point() && usces_is_login() && usces_is_available_point()) : ?>
		<form action="<?php usces_url('cart'); ?>" method="post" onKeyDown="if (event.keyCode == 13) {return false;}" class="js-cart-form">
		<div class="error_message"><?php usces_error_message(); ?></div>
		<table cellspacing="0" id="point_table">
			<tr>
				<td><?php _e('The current point', 'usces'); ?></td>
				<td><span class="point"><?php echo $usces_members['point']; ?></span>pt</td>
			</tr>
			<tr>
				<td><?php _e('Points you are using here', 'usces'); ?></td>
				<td><input name="offer[usedpoint]" class="used_point" type="text" value="<?php echo esc_attr($usces_entries['order']['usedpoint']); ?>" />pt</td>
			</tr>
				<tr>
				<td colspan="2"><input name="use_point" type="submit" class="use_point_button" value="<?php _e('Use the points', 'usces'); ?>" /></td>
			</tr>
	</table>
	<?php do_action('usces_action_confirm_page_point_inform'); ?>
	</form>
<?php endif; ?>
 	<?php do_action('usces_action_confirm_after_form'); ?>
	</div>
	<table id="confirm_table">
		<tr class="ttl">
			<td colspan="2">


						<h3><?php _e('Customer Information', 'usces'); ?></h3>

			</td>
		</tr>
		<tr>
			<th><?php _e('e-mail adress', 'usces'); ?></th>
			<td><?php echo esc_html($usces_entries['customer']['mailaddress1']); ?></td>
		</tr>
		<?php uesces_addressform('confirm', $usces_entries, 'echo'); ?>
		<tr>
			<td class="ttl" colspan="2">

						<h3>その他</h3>

			</td>
		</tr>

			<!-- 配送が必要ない場合はここを消す -->
		<!-- <tr>
			<th><?php _e('shipping option', 'usces'); ?></th><td><?php echo esc_html(usces_delivery_method_name($usces_entries['order']['delivery_method'], 'return')); ?></td>
		</tr> -->

			<!-- 配送が必要ない場合はここを消す -->
		<!-- <tr>
			<th><?php _e('Delivery date', 'usces'); ?></th><td><?php echo esc_html($usces_entries['order']['delivery_date']); ?></td>
		</tr> -->

			<!-- 配送が必要ない場合はここを消す -->
		<!-- <tr class="bdc">
			<th><?php _e('Delivery Time', 'usces'); ?></th><td><?php echo esc_html($usces_entries['order']['delivery_time']); ?></td>
		</tr> -->

		<!-- 配送が必要ない場合はここを消す -->
		<tr>
			<th><?php _e('payment method', 'usces'); ?></th><td><?php echo esc_html($usces_entries['order']['payment_name'] . usces_payment_detail($usces_entries)); ?></td>
		</tr>
<?php usces_custom_field_info($usces_entries, 'order', ''); ?>
		<tr>
			<th><?php _e('Notes', 'usces'); ?></th><td><?php echo nl2br(esc_html($usces_entries['order']['note'])); ?></td>
		</tr>
	</table>
<?php if (!is_group_item_in_cart()) : ?>


	<p class="u-tc u-fw600 c-pink u-mt20">
	検体の返送は郵送で行っておりますので、<br class="u-sp">確定的な到着日時のお問合せにお答えする事ができません。<br class="">
	また、検体到着後の検査開始日・完了日のお問合せにもお答えする事ができません。<br class="">
到着目安を知りたい方は直接、<br class="u-sp">郵便局にお問い合わせくださいますようお願い申し上げます。<br class="">
検査結果につきましても、より早い検査をお求めの方には、<br class="u-sp">速達でのご返送をご案内しております。<br class="">
その際、速達に掛かる費用は患者様のご負担となりますので、<br class="u-sp">予めご了承ください。<br class=""><br class="">

土日・祝日の配達は郵便局が営業していないため、日数を要する可能性がございます。<br class="u-sp">予めご了承ください。<br class="">
(速達の場合は土日・祝日でも配達が可能)<br class="">
<br class="">
以上、ご同意いただける方のみご注文へお進みください。
	</p>

<?php endif; ?>


<?php usces_purchase_button(); ?>

	<div class="footer_explanation">
<?php do_action('usces_action_confirm_page_footer'); ?>
	</div><!-- end of footer_explanation -->

</div><!-- end of info-confirm -->

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

//OPTION ID追加ナンバリング
jQuery("#confirm_table tbody tr th").each(function (i) {
    jQuery(this).attr('id', 'confirm-row' + (i + 1));

});

jQuery("#confirm_table tbody tr h3").each(function (i) {
    jQuery(this).attr('id', 'confirm-ttl' + (i + 1));

});


</script>





<script>

	jQuery(".member-address3-row th").text("建物名");
	jQuery(".delivery-address3-row th").text("建物名");

	</script>
