
<?php
/*
Template Name: 海外渡航に関して
*/
?>



<?php get_header();?>



<div class="p-pages-ttl-area --ttl-bg-company-reserve u-bg-cover">
        <div class="p-pages-ttl-area__inner">
              <div class="p-pages-ttl-area__texts --company">
                        <h1 class="p-pages-ttl-area__ttl">海外渡航に関して</h1>
                <p class="p-pages-ttl-area__sub">海外渡航に関する自費での新型コロナPCR検査に<br>ついてご説明いたします</p>
              </div>
        </div>
</div>




<section class="p-page-voyage">

      <div class="l-inner">

                  <div class="p-voyage-block">

                              <p class="p-voyage-block__desc">
                              感染症検査クリニックでは、海外渡航に関する新型コロナウイルスPCR検査、診断書の発行などを行っております。<br>経済活動再開に伴い、お仕事などでの海外渡航や、海外在住の方の再渡航、を行う方もいらっしゃるかと思います。現在も多くの国が渡航者に対し、入国制限措置や入国後の行動制限措置を行なっております。
                              </p>

                               <p class="p-voyage-block__desc">
                              現在ですと、インドネシア、中国（一部の省）、韓国、マレーシア、ネパール、フランス、カンボジアが該当致します。<br>また、今後、ハワイ州、EU各国なども必要となることを発表しており、これらの国々の中では、新型コロナ感染症に関する検査結果や書類を入国に際して求める国もあります。

                              </p>

                               <p class="p-voyage-block__desc">
                              感染症検査クリニックで行なっている新型コロナPCR検査、抗原検査、抗体検査を用いてこれらの検査結果、書類をご用意させていただくことが可能です。
                              </p>

                               <p class="p-voyage-block__desc">
                              より詳しい情報は海外安全ホームページをご覧ください。<br>
<a href="https://www.anzen.mofa.go.jp/covid19/pdfhistory_world.html" class="c-blue u-text-under-line" target="_blank">https://www.anzen.mofa.go.jp/covid19/pdfhistory_world.html</a>

                              </p>

                  </div>
                  <!-- ./p-voyage-block -->




                  <div class="p-voyage-links">
                              <h3 class="p-voyage-links__ttl">国ごとのPCR検査陰性証明書について</h3>


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
                                                      <span class="p-voyage-btns__ttl"><?php the_title();?>へ渡航</span>
                                                </a>
                                          </li>

                                    <?php endwhile; wp_reset_postdata(); ?>

                              </ul>

                              <p class="p-voyage-links__desc">※入国前に各国の措置が突然変更される可能性もありますので、検査前に最新の情報を在日の各国大使館や各国にあります日本大使館のホームページ、<a href="https://www.anzen.mofa.go.jp/covid19/pdfhistory_world.html" class="c-blue u-text-under-line" target="_blank">外務省海外安全ホームページ</a>などでご自身でご確認ください</p>
                  </div>

      </div>
      <!-- ./l-inner -->



</section>











<?php get_footer();?>
