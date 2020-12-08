<?php

get_header();
?>

<div id="content" class="two-column">
<div class="catbox">

<section class="cart__area">

<div class="section__inner">

<?php if (have_posts()) : usces_remove_filter(); ?>

	<div class="post" id="wc_<?php usces_page_name(); ?>">

	<h1 class="member_page_title tc"><?php _e('New enrollment form', 'usces'); ?></h1>
		<div class="entry">

			<div id="memberpages">

				<div id="newmember">

					<div class="header_explanation tc">
						<!-- <ul class="tc">
						<li><?php _e('All your personal information  will be protected and handled with carefull attention.', 'usces'); ?></li>
						<li><?php _e('Your information is entrusted to us for the purpose of providing information and respond to your requests, but to be used for any other purpose. More information, please visit our Privacy  Notice.', 'usces'); ?></li>
						<li><?php _e('The items marked with *, are mandatory. Please complete.', 'usces'); ?></li>
						<li><?php _e('Please use Alphanumeric characters for numbers.', 'usces'); ?></li>
						</ul> -->
						<?php do_action('usces_action_newmember_page_header'); ?>
					</div><!-- end of header_explanation -->

					<div class="error_message"><?php usces_error_message(); ?></div>
					<form action="<?php echo apply_filters('usces_filter_newmember_form_action', usces_url('member', 'return')); ?>" method="post" onKeyDown="if (event.keyCode == 13) {return false;}" id="new__member__form">
						<table border="0" cellpadding="0" cellspacing="0" class="customer_form">
							<tr class="po_rel">
								<th scope="row"><em><?php _e('*', 'usces'); ?></em><?php _e('e-mail adress', 'usces'); ?></th>
								<td colspan="2" class="po_rel"><input name="member[mailaddress1]" class="wh40" id="mailaddress1" type="text" value="<?php usces_memberinfo('mailaddress1'); ?>" /></td>
							</tr>
							<tr class="po_rel">
								<th scope="row"><em><?php _e('*', 'usces'); ?></em><?php _e('E-mail address (for verification)', 'usces'); ?></th>
								<td colspan="2" class="po_rel"><input name="member[mailaddress2]" class="wh40" id="mailaddress2" type="text" value="<?php usces_memberinfo('mailaddress2'); ?>" /></td>
							</tr>
							<tr class="po_rel">
								<th scope="row"><em><?php _e('*', 'usces'); ?></em><?php _e('password', 'usces'); ?></th>
								<td colspan="2" class="po_rel"><input class="hidden" value=" " /><input name="member[password1]" class="wh40" id="password1" type="password" value="<?php usces_memberinfo('password1'); ?>" autocomplete="off" /></td>
							</tr>
							<tr >
								<th scope="row"><em><?php _e('*', 'usces'); ?></em><?php _e('Password (confirm)', 'usces'); ?></th>
								<td colspan="2" class="po_rel"><input name="member[password2]" class="wh40" id="password2" type="password" value="<?php usces_memberinfo('password2'); ?>" /></td>
							</tr>
							<?php uesces_addressform('member', usces_memberinfo(null), 'echo'); ?>
						</table>
						<?php usces_agree_member_field(); ?>
						<div class="send"><?php usces_newmember_button($member_regmode); ?></div>
						<?php do_action('usces_action_newmember_page_inform'); ?>
					</form>

					<div class="footer_explanation">
					<?php do_action('usces_action_newmember_page_footer'); ?>
					</div><!-- end of footer_explanation -->

				</div><!-- end of newmember -->
			</div><!-- end of memberpages -->

		</div><!-- end of entry -->
	</div><!-- end of post -->
<?php else: ?>
<p><?php _e('Sorry, no posts matched your criteria.', 'usces'); ?></p>
<?php endif; ?>

</div><!-- ./section__inner -->
</section>
</div><!-- end of catbox -->
</div><!-- end of content -->

<script>

	$(function(){

		$("#zipcode_row th").prepend("<em>＊</em>");
		$("#states_row th").prepend("<em>＊</em>");
		$("#address1_row th").prepend("<em>＊</em>");
		$("#address2_row th").prepend("<em>＊</em>");
		$("#tel_row th").prepend("<em>＊</em>");

	});

</script>


<?php get_footer(); ?>
