<?php
/*
Template Name: よくある質問-法人
*/
?>


<?php get_header();?>









<div class="p-pages-ttl-area --ttl-bg-items u-bg-cover" id="js-pages-head">
        <div class="p-pages-ttl-area__inner --inner-item">
              <div class="p-pages-ttl-area__texts --texts--item-list">
                        <h1 class="p-pages-ttl-area__ttl --ttl--item-list">よくある質問一覧</h1>
                <p class="p-pages-ttl-area__sub">法人・個人向けの<br>よくある質問一覧です。</p>
              </div>
        </div>
</div>

<?php include("nenmatu.php"); ?>




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
        <a href="<?php echo home_url( '/' ); ?>faq-personal" class="p-faq-tab__link">個人</a>
      </li>
       <li class="p-faq-tab__list">
        <a href="<?php echo home_url( '/' ); ?>faq-corporation" class="p-faq-tab__link is-tab-active">法人</a>
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
                                                          'terms'    => array('corporation')
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



<!--  <div class="p-footer-nav u-border-bottom-none">
                 <nav class="p-global-nav --global-top --global-footer">
                  <ul class="p-global-nav__list --global-top-list --global-footer-list">
                    <li class="p-global-nav__item --global-top-item --global-footer-item">
                      <a href="<?php echo home_url( '/' ); ?>#link-use" class="p-global-nav__link --global-top-link --global-footer-link">
                          検査のご利用方法
                      </a>
                    </li>
                    <li class="p-global-nav__item --global-top-item  --global-footer-item">
                      <a href="<?php echo home_url( '/' ); ?>faq-personal" class="p-global-nav__link --global-top-link --global-footer-link">
                          よくある質問
                      </a>
                    </li>
                    <li class="p-global-nav__item --global-top-item  --global-footer-item">
                      <a href="<?php echo home_url( '/' ); ?>#link-kit" class="p-global-nav__link --global-top-link --global-footer-link">
                          検体採取キット
                      </a>
                    </li>
                     <li class="p-global-nav__item --global-top-item --global-footer-item">
                    <a href="<?php echo home_url( '/' ); ?>clinics" class="p-global-nav__link --global-top-link js-sp-clink-menu-close --global-footer-link">
                        クリニクスの使い方
                    </a>
                  </li>
                    <li class="p-global-nav__item --global-top-item  --global-footer-item">
                      <a href="<?php echo home_url( '/' ); ?>clinic" class="p-global-nav__link --global-top-link --global-footer-link ">
                          当院について
                      </a>
                    </li>

                    <li class="p-global-nav__item --global-top-item  --global-footer-item">
                      <a href="<?php echo home_url( '/' ); ?>contact" class="p-global-nav__link --global-top-link --global-footer-link" target="_blank">
                          お問合せ
                      </a>
                    </li>
                  </ul>
                </nav>
        </div> -->




<?php get_footer();?>
