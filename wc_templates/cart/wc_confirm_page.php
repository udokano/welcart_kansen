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
<div class="catbox" id="js-pages-head">

<section class="cart__area">

<div class="section__inner">




<?php if (have_posts()) : usces_remove_filter(); ?>

<div class="post" id="wc_<?php usces_page_name(); ?>">



<h1 class="cart_page_title tc">内容检查</h1>




<!-- <p class="p-conf-note">検査キットの現在ご購入可能な地域<br><span class="c-under-deco">東京、愛知、大阪、福岡</span></p> -->

<div class="entry">

<div id="info-confirm">


			<div class="confiem_notice tc">
				在显示本页面时，请不要在另一个窗口添加产品或更改产品数量。
			</div>



	  <div class="usccart_navi">
					<ol class="ucart">



												<li class="ucart usccart">购货车</li>
												<li class="ucart usccustomer">顾客信息</li>
												<li class="ucart uscdelivery">发货及支付方式</li>
												<li class="ucart uscconfirm usccart_confirm">内容确认</li>

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
							<th class="quantity-conf">商品名称</th>
							<!-- 	<th class="price"><?php _e('Unit price', 'usces'); ?></th> -->
							<th class="quantity ">数量</th>
							<th class="subtotal">金额<em class="tax">(含税)</em></th>
							<!-- <th class="action" colspan="2"></th> -->

			</tr>
			</thead>
			<tbody>
		<?php usces_get_confirm_rows(); ?>
			</tbody>
			<tfoot>
			<tr>



									<th colspan="2" class="aright">商品总计</th>


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


							<td colspan="2" class="aright">送货费用</td>




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

							<td colspan="2" class="aright ">销售税</td>

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

								<th colspan="2" class="aright total-price">总金额</th>

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


						<h3>客户信息</h3>

			</td>
		</tr>
		<tr>
			<th><?php _e('e-mail adress', 'usces'); ?></th>
			<td><?php echo esc_html($usces_entries['customer']['mailaddress1']); ?></td>
		</tr>
		<?php uesces_addressform('confirm', $usces_entries, 'echo'); ?>
		<tr>
			<td class="ttl" colspan="2">

						<h3>其他</h3>

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

		<?php
		$lang_no1 = ($http_langs = $_SERVER['HTTP_ACCEPT_LANGUAGE'])
		? explode( ',', $http_langs )[0] : 'en';
		?>
		<!-- 条件分岐 -->


					<p class="u-tc u-fw600 c-pink u-mt20">
	样本通过邮局寄回，所以不能回答有关确定的到货时间的咨询。<br class="">
还有也不能回答有关样本送到后的检测开始时间和结束时间的咨询。<br class="">
如果有顾客想知道什么时候送到，请直接向邮局询问。<br class="">
关于检测结果，如果有顾客想尽早进行检测，请用快件寄回。<br class="">
快件所需费用由患者自己负担，请予以理解。<br class="">

周六周日及节假日邮局不营业，因此有可能要多花些时日，请予以理解。<br class="">
（如果是快件，周六周日及节假日也可以送货）<br class="">

同意如上条件的顾客请进入订货。
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
	jQuery("#confirm-row1").text("电子邮件地址");
	jQuery("#confirm-row2").text("法人名称");
	jQuery("#confirm-row3").text("名字");
	//jQuery("#confirm-row4").text("读音");

	jQuery("#confirm-row11").text("邮编");
	jQuery("#confirm-row7").text("都道府县");
	jQuery("#confirm-row8").text("市区郡町村");
	jQuery("#confirm-row9").text("番地");
	jQuery("#confirm-row10").text("建物名称");
	jQuery("#confirm-row13").text("电话");


	jQuery("#confirm-row14").text("名字");
	//jQuery("#confirm-row15").text("读音");
	jQuery("#confirm-row19").text("邮编");
	jQuery("#confirm-row15").text("都道府县");
	jQuery("#confirm-row16").text("市区郡町村");
	jQuery("#confirm-row17").text("番地");
	jQuery("#confirm-row18").text("建物名称");
	//jQuery("#confirm-row22").text("联系电话");
	jQuery("#confirm-ttl2").text("送货地址信息");
	jQuery("#confirm-row22").text("支付方式");
	jQuery("#confirm-row23").text("备注");


	jQuery(".back_to_delivery_button").val("回去");
	jQuery(".checkout_button").val("按上诉内容订货");

	jQuery("#coupon_table tr:first-of-type td:first-of-type").text("兑换码");
	jQuery(".use_coupon_button").val("使用兑换码。");
	jQuery(".reset_coupon_button").val("收回");



			var str = jQuery(".error_message").text();

			if ( str.match("引換コードのご利用回数を超えています。")) {
			//strにhogeを含む場合の処理
			jQuery(".error_message").text("您已经超过了使用兑换码的次数。");

			} else if ( str.match("値が不正です。半角英数字で入力してください。")) {
				jQuery(".error_message").text("无效值。 请用半宽的字母数字字符输入数值。");
			}

			else if ( str.match("Value is invalid. Please enter alphanumeric characters.")) {
				jQuery(".error_message").text("无效值。 请用半宽的字母数字字符输入数值。");
			}

			else if ( str.match("You have used the coupon more than the number of times.")) {
				jQuery(".error_message").text("您已经超过了使用兑换码的次数。");
			}

	</script>
