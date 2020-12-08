<?php
/*
Template Name: よくある質問-個人
*/
?>


<?php get_header();?>






<div class="p-pages-ttl-area --ttl-bg-items u-bg-cover" id="js-pages-head">
        <div class="p-pages-ttl-area__inner --inner-item">
              <div class="p-pages-ttl-area__texts --texts--item-list">
                        <h1 class="p-pages-ttl-area__ttl --ttl--item-list">常有问题列表</h1>
                <p class="p-pages-ttl-area__sub">对公司和个人来说：<br>以下是常有问题列表。</p>
              </div>
        </div>
</div>

<div class="c-breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>


<section class="p-faq bg-section-gray">
                          <div class="l-inner">

  <ul class="p-faq-tab">

      <li class="p-faq-tab__list">
        <a href="<?php echo home_url( '/' ); ?>faq-personal" class="p-faq-tab__link is-tab-active">个人</a>
      </li>
       <li class="p-faq-tab__list">
        <a href="<?php echo home_url( '/' ); ?>faq-corporation" class="p-faq-tab__link ">公司</a>
      </li>
  </ul>





                                        <ul class="p-faq__list">
                    <?php
                        global $max_num_page;
                        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                        $args = array(
                        'post_type' => 'faq',
                        'post_status' => 'publish',
                        'tax_query' => array (
                                        array (
                                          'taxonomy' => 'faq_kind',
                                          'field'    => 'slug',
                                          'terms'    => array('personal')
                                        )
                                      ),
                        'posts_per_page' => 6,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'paged' => $paged,
                        );
                        $the_query = new WP_Query( $args );
                      while ( $the_query->have_posts() ) : $the_query->the_post();
                      ?>
                                            <li class="p-faq__item">
                                                <dl class="p-faq__item-box">
                                                                <dt class="p-faq__item-ttl">
                                                                    <span class="p-faq__fst-letter u-f-futura c-blue02">Q.</span>
                                                                    <span class="p-faq__qa-text"><?php the_title(); ?></span>
                                                                </dt>
                                                                <dd class="p-faq__item-answer">
                                                                    <span class="p-faq__fst-letter u-f-futura c-pink02">A.</span>
                                                                    <p class="p-faq__answer-text"><?php remove_filter('the_content', 'wpautop'); ?><?php the_content(); ?></p>
                                                                </dd>
                                                </dl>
                                            </li>
                      <?php endwhile; wp_reset_postdata(); ?>


                                        </ul>

<?php
if ($the_query->max_num_pages > 1) {
  echo '<div class="c-pagination">';
  echo paginate_links( array(
    'base' => get_pagenum_link(1).'%_%',
    'format' => 'page/%#%/',
    'current' => max(1, $paged),
    'total' => $the_query->max_num_pages,
    'type' => 'list',
    'mid_size' => '1',
    'prev_text' => '«',
    'next_text' => '»'
    ) );
  echo '</div>';
}
?>

                                </div>
                                <!-- ./l-inner -->
                    </section>








<?php get_footer();?>
