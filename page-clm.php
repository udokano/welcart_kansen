<?php
/*
Template Name: コラム記事一覧
*/
?>

<?php get_header();?>

<style type="text/css">
	ul.matome {
		border: 1px solid #2d79a4;
		padding: 15px 10px;
		margin-bottom: 0px;
	}
	
	.matome li {
		list-style: decimal;
		margin-left: 35px;
		font-weight: bold;
	}
	
	ul.matome2 {
		border: 1px solid #cdcdcd;
		padding: 20px 15px;
		margin-bottom: 20px;
	}
	
	.matome2 li {
		font-size: 80%;
	}
	
	.p-voyage-box__ttl {}
	
	.p-voyage-box__ttl {
		font-weight: bold;
	}
	
	.p-single-voyage__ttl {
		margin-bottom: 0rem;
		background-color: #f6f6f6;
		padding: 50px 4%;
	}
	
	.p-single-voyage {
		padding: 1.88rem 0;
	}
	
	.p-voyage-box__ttl {
		font-size: 1.65rem;
	}
	
	.p-single-voyage__intro img {
		height: 100%;
	}
	
	.single-author {
		padding: 20px;
		background: #f2f2f2;
		/* margin-top: 50px; */
		max-width: 450px;
		margin: 0px auto 50px;
	}
	
	.single-author img {
		width: 100px;
		float: left;
		border: 5px solid #ffffff;
	}
	
	.single-author-heading {
		margin: 3px 0 5px;
	}
	
	.single-author-name {
		font-size: 18px;
		font-weight: 700;
		line-height: 1.5;
		letter-spacing: .05rem;
		color: #181818;
	}
	
	.single-author-text {
		font-size: 13px;
		line-height: 1.5;
		letter-spacing: .05rem;
		color: #888;
	}
	
	.p-voyage-box__ttl {
		font-size: 1.65rem;
		line-height: 2.3rem;
	}
	
	.single-author-content {
		margin: 0 0 0 130px;
	}
	
	.mk {
		background-color: #dbffb0;
		font-weight: bold;
	}
	
	.lbx {
		max-width: 325px;
		width: 325px;
		float: left;
	}
	
	.rbx {
		max-width: 325px;
		width: 325px;
		float: right;
	}
	
	.fbow {
		margin: 100px 0 0 0;
	}
	
	.ckws img {
		width: 168px;
		margin: 0 auto 10px;
		display: block;
	}
	
	.recom_wk {
		width: 49%;
		float: left;
		height: 155px;
		border: 1px solid #d9d9d9;
		margin-bottom: 20px;
	}
	
	.recom a:nth-of-type(2n) .recom_wk {
		margin-left: 2%;
	}
	
	.recom_wk img {
		display: inline-block;
		width: 153px;
		height: 153px;
		background-color: #ccc;
		object-fit: contain;
		float: left;
	}
	
	.recom_txt1 {
		font-size: 18px;
		color: black;
		font-weight: bold;
		line-height: 1.4;
		padding-left: 180px;
		padding-top: 25px;
		padding-right: 25px;
	}
	
	.recom_txt2 {
		font-size: 14px;
		color: black;
		line-height: 1.4;
		padding-left: 180px;
		padding-top: 13px;
		padding-right: 25px;
	}
	
	.clearfix::after {
		content: "";
		display: block;
		clear: both;
	}
	
	.recom h2 {
		font-size: 1.65rem;
		line-height: 2.3rem;
		font-weight: bold;
		text-align: center;
		padding-bottom: 20px;
	}
	
	h2.p-voyage-box__ttl {
		background-image: url(<?php echo get_template_directory_uri();
		?>/img/clm/mds_memo.png);
		padding-left: 50px;
		background-size: 46px;
		background-repeat: no-repeat;
		margin-top: 50px;
		min-height: 46px;
		padding-top: 10px;
		background-position: left center;
	}
	
	@media (max-width: 767px) {
		.c-breadcrumbs {
			padding-top: 70px;
		}
		.c-breadcrumbs span {
			line-height: 1.4;
		}
		.ckws img {
			width: 110px;
			margin: 0 auto 5px;
			display: block;
		}
		.recom_wk {
			width: 100%;
			float: none;
			height: 100px;
			border: 1px solid #d9d9d9;
			margin-bottom: 5px;
		}
		.recom_txt1 {
			font-size: 14px;
			color: #383838;
			font-weight: bold;
			line-height: 1.4;
			padding-left: 115px;
			padding-top: 20px;
			padding-right: 12px;
		}
		.recom_txt2 {
			display: none;
		}
		.recom_wk img {
			display: inline-block;
			width: 98px;
			height: 98px;
			background-color: #ccc;
			object-fit: contain;
			float: left;
		}
		.recom a:nth-of-type(2n) .recom_wk {
			margin-left: 0%;
		}
		.fbow {
			margin: 50px 0 0 0;
		}
		.single-author {
			clear: both;
			margin: 0px auto 20px;
		}
		.rbx {
			max-width: 100%;
			width: 100%;
			float: none;
			margin-bottom: 50px;
		}
		.lbx {
			padding-bottom: 20px;
		}
		.p-footer {
			border-top: none;
		}
	}
</style>

<div class="c-breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
	<?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>


<section class="p-single-voyage">
	<div class="l-inner">


				<div class="recom clearfix">

					<h2>新着記事一覧</h2>


					<?php
					$news_query = new WP_Query(
						array(
							'post_type' => 'clm',
							//'category_name' => 'news',
							'posts_per_page' => -1,
						)
					);
					?>
					<?php if ( $news_query->have_posts() ) : ?>
					<?php while ( $news_query->have_posts() ) : ?>
					<?php $news_query->the_post(); ?>
					<a href="<?php the_permalink(); ?>">
						<div class="recom_wk">
							<?php the_post_thumbnail('full'); ?>
							<div class="recom_txt1">
								<?php
								if ( mb_strlen( $post->post_title, 'UTF-8' ) > 35 ) {
									$title = mb_substr( $post->post_title, 0, 35, 'UTF-8' );
									echo $title . '…';
								} else {
									echo $post->post_title;
								}
								?>
							</div>
							<div class="recom_txt2">
								<?php echo mb_strimwidth(get_the_excerpt(), 0, 80, "…", "UTF-8"); ?>

							</div>
						</div>
					</a>
					<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>
				</div>



			</div>

		</div>

	</div>
	<!-- ./l-inner -->



</section>



<?php get_footer();?>