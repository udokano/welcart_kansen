<?php

get_header();
?>

<div id="content" class="two-column">
<div class="catbox">
<section class="cart__area">

<div class="section__inner">
<?php if (have_posts()) : usces_remove_filter(); ?>

	<div class="post" id="wc_<?php usces_page_name(); ?>">


		<div class="entry">

			<div id="memberpages">

				<h1 class="header_explanation tc">
				<?php do_action('usces_action_membercompletion_page_header'); ?>
				</h1>

				<?php $member_compmode = usces_page_name('return'); ?>
				<?php if ('newcompletion' == $member_compmode) : ?>
				<p class="tc"><?php _e('Thank you in new membership.', 'usces'); ?></p>

				<?php elseif ('editcompletion' == $member_compmode) : ?>
				<p class="tc"><?php _e('Membership information has been updated.', 'usces'); ?></p>

				<?php elseif ('lostcompletion' == $member_compmode) : ?>
				<p class="tc"><?php _e('I transmitted an email.', 'usces'); ?></p>
				<p class="tc"><?php _e('Change your password by following the instruction in this mail.', 'usces'); ?></p>

				<?php elseif ('changepasscompletion' == $member_compmode) : ?>
				<p class="tc"><?php _e('Password has been changed.', 'usces'); ?></p>

				<?php endif; ?>


				<div class="footer_explanation tc">
				<?php do_action('usces_action_membercompletion_page_footer'); ?>
				</div>

				<p class="tc"><a href="<?php usces_url('member'); ?>"><?php _e('to vist membership information page', 'usces'); ?></a></p>

				<div class="send"><a href="<?php echo home_url(); ?>" class="back_to_top_button"><?php _e('Back to the top page.', 'usces'); ?></a></div>
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


<?php get_footer(); ?>
