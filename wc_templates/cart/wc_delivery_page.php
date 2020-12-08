<?php


get_header();
usces_delivery_info_script();
?>



<script>


jQuery(".payment_0 > input").addClass("validate[required]");


</script>

<div id="content" class="two-column">
<div class="catbox" id="js-pages-head">

<section class="cart__area">

<div class="section__inner">



<?php if (have_posts()) : usces_remove_filter(); ?>

	<div class="post" id="wc_<?php usces_page_name(); ?>">



							<h1 class="cart_page_title tc">运输和付款方式</h1>



		<div class="entry">

			<div id="delivery-info">

				<div class="usccart_navi">
					<ol class="ucart">


														<li class="ucart usccart">购货车</li>
														<li class="ucart usccustomer">顾客信息</li>
														<li class="ucart uscdelivery usccart_delivery">发货及支付方式</li>
														<li class="ucart uscconfirm">内容确认</li>


					</ol>
				</div>

				<div class="header_explanation">
			<?php do_action('usces_action_delivery_page_header'); ?>
				</div>

				<div class="error_message"><?php usces_error_message(); ?></div>



	<form action="<?php usces_url('cart'); ?>" method="post" class="js-cart-form">


			<?php if (!is_group_item_in_cart()) : ?>
				<table class="customer_form" >
					<tr >

								<th rowspan="2" scope="row">送货地址</th>

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
				<!--
					複数購入ボタン　一旦非表示
				<?php do_action('usces_action_delivery_flag'); ?> -->

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
						<th scope="row">
							<em><?php _e('*', 'usces'); ?></em>

													支付方式


						</th>
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


									<th scope="row">备注</th>


						<td colspan="2"><textarea name="offer[note]" id="note" class="notes"><?php echo esc_html($entry_order_note); ?></textarea><br>
						<?php if (!is_group_item_in_cart()) : ?>

														<span style="color: red; font-size: 130%; line-height: 1.4; padding-top: 10px; display: block;">需要收据的顾客请在备注栏填写【收据】。<br>用电邮方式以订货顾客的名字通知顾客。</span>

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




/* jQuery(document).ready(function(){
jQuery(".to_confirm_button").on("click",function(){

	if(jQuery(".validate[required]").val() === "") {
		jQuery(".ui-dialog").removeClass("is-card-show");
	}

	else {
		jQuery(".ui-dialog").addClass("is-card-show");
	}

});
});

	jQuery(function(){
	    setTimeout(function(){
	        jQuery(".back_to_delivery_button").on("click",function(){
		jQuery(".ui-dialog").removeClass("is-card-show");

});
	    },3000);
	});

		// 画像が読み込まれたら実行させる
	jQuery(window).on('load', function() {
	 
	    jQuery(".back_to_delivery_button").on("click",function(){
		jQuery(".ui-dialog").removeClass("is-card-show");

});
	 
	});
 */




</script>




<script>



jQuery(function(){
	jQuery(".customkey_company th").text("法人名称");
	jQuery("#name_row th").html("<em>＊</em>名字");
	jQuery("#furikana_row th").html("读音");
	jQuery(".customkey_brith_year th").html("<em>＊</em>年(出生年月日)	");
	jQuery(".customkey_brith_month th").html("<em>＊</em>月(出生年月日)");
	jQuery(".customkey_brith_day th").html("<em>＊</em>日(出生年月日)	");
	jQuery("#zipcode_row th").html("<em>＊</em>邮编");
	jQuery("#states_row th").html("<em>＊</em>都道府县");
	jQuery("#address1_row th").html("<em>＊</em>市区郡町村");
	jQuery("#address2_row th").html("<em>＊</em>番地");
	jQuery("#address3_row th").text("建物名称");
	jQuery("#tel_row th").html("<em>＊</em>联系电话");

jQuery("#delivery_pref option:first-of-type").text("--选择--");

	jQuery("#search_zipcode").val("搜索");


		jQuery("#delivery_flag1").next("label").text("与顾客信息一致");
	jQuery("#delivery_flag2").next("label").text("指定其他送货地址");

	jQuery(".payment_0 label span").text("信用卡");
	jQuery(".payment_3 label span").text("兑换码");


});




jQuery(function(){
jQuery("#escott_token_cancel").val("继续购物");
	jQuery(".back_to_customer_button").val("继续购物");
	jQuery(".to_confirm_button").val("下一个");

});



var str = jQuery(".error_message").text();

if ( str.match("引換コード決済の場合数量1つまでしか注文できません。")) {
//strにhogeを含む場合の処理
jQuery(".error_message").text("兑换码支付只能订购一个数量。");

}

if ( str.match("引換コード決済の場合数量1つまでしか注文できません。")) {
//strにhogeを含む場合の処理
jQuery(".error_message").text("兑换码支付只能订购一个数量。");

}


</script>



<style>


	#ui-id-2 {
    color: transparent;
    position: relative;
}

#ui-id-2::before {
	content: "信用卡信息";
	font-size: 1.4rem;
	color: #000;
}

.customer_form.settlement_form tbody tr:nth-of-type(1) th {
    color: transparent;
}

.customer_form#welcart tr:first-of-type td,.customer_form#welcart tr:nth-of-type(2) td{
	 color: transparent;
	 position: relative;
}

.customer_form.settlement_form tbody tr:nth-of-type(1) th::before {
    content: "卡号";
    color: #454545;
}

.customer_form.settlement_form tbody tr:nth-of-type(2) th {
    color: transparent;
}

.customer_form.settlement_form tbody tr:nth-of-type(2) th::before {
    content: "安全码";
    color: #454545;
}

.customer_form.settlement_form tbody tr:nth-of-type(3) th {
    color: transparent;
}

.customer_form.settlement_form tbody tr:nth-of-type(3) th::before {
    content: "卡的有效期";
    color: #454545;
}

.attention {
    color: transparent;
}

.attention::before {
    content: "不要在数字之间使用空格、连字符(-)和其他非数字符号或字符。";
    color: #454545;
}


</style>
