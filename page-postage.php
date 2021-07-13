<?php
/*
Template Name: 送料一覧
*/
?>
<?php get_header(); ?>





  <div class="p-pages-ttl-area --ttl-bg-items u-bg-cover" id="js-pages-head">
		<div class="p-pages-ttl-area__inner --inner-item">
			  <div class="p-pages-ttl-area__texts --texts--item-list u-sp-tc">
						<h1 class="p-pages-ttl-area__ttl --ttl--item-list">送料一覧</h1>
				<p class="p-pages-ttl-area__sub">商品購入の際に、<br class="">発生する送料の一覧ページです。</p>
			  </div>
		</div>
</div>


<div class="c-breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
	<?php
	if ( function_exists( 'bcn_display' ) ) {
		bcn_display();
	}
	?>
</div>


<section class="p-transport-price">


	<div class="l-inner">
			<h2 class="p-transport-price__ttl">送料料金表一覧</h2>
			<div class="p-transport-price__sq-box">
				<p class="p-transport-price__sq-main">55,000(税込)以上のご購入の方は、<br class="">送料が無料となります。</p>
				<p class="p-transport-price__sq-sub">※下記料金表は商品１つあたりの金額になります。</p>
			</div>
			 <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/transport_price.jpg?gulyfyugukgkikbibibi" alt="" class="p-transport-price__img">
	</div>


</section>



<?php get_footer(); ?>
