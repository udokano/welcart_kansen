
<?php
/*
Template Name: 海外渡航に関して
*/
?>



<?php get_header();?>






<div class="p-pages-ttl-area --ttl-bg-company-reserve u-bg-cover" id="js-pages-head">
        <div class="p-pages-ttl-area__inner">
              <div class="p-pages-ttl-area__texts --company">
                        <h1 class="p-pages-ttl-area__ttl">关于出国</h1>
                <p class="p-pages-ttl-area__sub">解释新的自费国际旅行电晕PCR检测方法</p>
              </div>
        </div>
</div>


<div class="c-breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>



<section class="p-page-voyage">

      <div class="l-inner">

                  <div class="p-voyage-block">

                              <p class="p-voyage-block__desc">
                             感染症检测诊所实施新冠病毒核酸检测和血清抗体检测。随着经济活动的恢复，部分人士因工作等原因需要出国。有些国家已经要求入境时提交新冠肺炎的检测证明。本诊所也出具入境所需的证明去。
                              </p>

                             <!--   <p class="p-voyage-block__desc">
                              現在ですと、インドネシア、中国（一部の省）、韓国、マレーシア、ネパール、フランス、カンボジアが該当致します。<br>また、今後、ハワイ州、EU各国なども必要となることを発表しており、これらの国々の中では、新型コロナ感染症に関する検査結果や書類を入国に際して求める国もあります。

                              </p>

                               <p class="p-voyage-block__desc">
                              感染症検査クリニックで行なっている新型コロナPCR検査、抗原検査、抗体検査を用いてこれらの検査結果、書類をご用意させていただくことが可能です。
                              </p> -->

                               <p class="p-voyage-block__desc">
                              更多信息，请访问海外安全网站。<br>
<a href="https://www.anzen.mofa.go.jp/covid19/pdfhistory_world.html" class="c-blue u-text-under-line" target="_blank">https://www.anzen.mofa.go.jp/covid19/pdfhistory_world.html</a>

                              </p>

                  </div>
                  <!-- ./p-voyage-block -->




                  <div class="p-voyage-links">
                              <h3 class="p-voyage-links__ttl">按国家分列的PCR检测阴性证书</h3>


                              <ul class="p-voyage-btns">
                                                      <?php
                                    $args = array(
                                    'post_type' => 'voyage',
                                    'posts_per_page' => -1,
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                    );
                                    $the_query = new WP_Query( $args );
                                    while ( $the_query->have_posts() ) : $the_query->the_post();
                                    ?>


                                          <li class="p-voyage-btns__item">
                                                <a href="<?php the_permalink(); ?>" class="p-voyage-btns__link">
                                                      <span class="p-voyage-btns__ttl"><?php the_title();?>出国</span>
                                                </a>
                                          </li>

                                    <?php endwhile; wp_reset_postdata(); ?>

                              </ul>

                              <p class="p-voyage-links__desc">※各国也有可能在入境前突然改变入境措施，所以在检测前，请在驻日的各国大使馆，驻各国的日本大使馆的网站，。<a href="https://www.anzen.mofa.go.jp/covid19/pdfhistory_world.html" class="c-blue u-text-under-line" target="_blank">外务省海外安全网站等，</a>确认最新信息</p>
                  </div>

      </div>
      <!-- ./l-inner -->



</section>




<?php get_footer();?>
