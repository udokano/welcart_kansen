<?php

get_header();
?>

<div id="content" class="two-column">
<div class="catbox">

<section class="cart__area">

<div class="section__inner">

<?php if (have_posts()) : usces_remove_filter(); ?>

	<div class="post" id="wc_<?php usces_page_name(); ?>">

		<h1 class="member_page_title tc"><?php _e('Change password', 'usces'); ?></h1>
		<div class="entry">

			<div id="memberpages">

				<div class="header_explanation tc">
				<?php do_action('usces_action_changepass_page_header'); ?>
				</div>

				<div class="error_message"><?php usces_error_message(); ?></div>
				<div class="loginbox">
					<form name="loginform" id="loginform" action="<?php usces_url('member'); ?>" method="post" onKeyDown="if (event.keyCode == 13) {return false;}">
						<p>
							<label><span><?php _e('password', 'usces');?></span>
							<input type="password" name="loginpass1" id="loginpass1" class="loginpass" value="" size="20" /></label>
						</p>
						<p>
							<label><span><?php _e('Password (confirm)', 'usces');?></span>
							<input type="password" name="loginpass2" id="loginpass2" class="loginpass" value="" size="20" /></label>
						</p>
						<p class="submit tc">
							<input type="submit" name="changepassword" id="member_login" value="<?php _e('Register', 'usces'); ?>" />
						</p>
						<?php do_action('usces_action_changepass_page_inform'); ?>
					</form>
				</div>
				<div class="footer_explanation">
				<?php do_action('usces_action_changepass_page_footer'); ?>
				</div>

			</div><!-- end of memberpages -->
			<script type="text/javascript">
			try{document.getElementById('loginpass1').focus();}catch(e){}
			</script>

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
