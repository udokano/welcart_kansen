<?php

get_header();
?>

<div id="content" class="two-column">
<div class="catbox">
	<section class="cart__area">

<div class="section__inner">


<?php if (have_posts()) : usces_remove_filter(); ?>

	<div class="post" id="wc_<?php usces_page_name(); ?>">



						<h1 class="cart_page_title tc"><?php _e('Your order has not been completed', 'usces'); ?></h1>
						<div class="entry">

							<div id="error-page">

								<div class="post tc">

								<?php uesces_get_error_settlement(); ?>

								<!-- <a href="ssssss">ああああああ</a> -->

								</div><!-- end of post -->

						</div><!-- end of error-page -->



		</div><!-- end of entry -->
	</div><!-- end of post -->
<?php else: ?>
<p><?php _e('Sorry, no posts matched your criteria.', 'usces'); ?>
</p>
<?php endif; ?>


</div>



</section>

</div><!-- end of catbox -->
</div><!-- end of content -->



<script>

var urlll = jQuery('.post a').attr("href");


jQuery('.post a').attr("href","");


jQuery('.post a').attr("data-url",urlll);



jQuery('.post a').on('click', function (e) {
  e.stopPropagation();
  e.preventDefault();
  location.href = jQuery(this).attr('data-url');
})

</script>



<?php get_footer(); ?>
