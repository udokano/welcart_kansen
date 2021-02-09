
<?php get_header();?>






<div class="p-pages-ttl-area --ttl-bg-company-reserve u-bg-cover" id="js-pages-head">
        <div class="p-pages-ttl-area__inner">
              <div class="p-pages-ttl-area__texts --company">
                        <h1 class="p-pages-ttl-area__ttl">PCR検査陰性証明書</h1>
                <p class="p-pages-ttl-area__sub">国ごとのPCR検査陰性証明書に<br>ついてご説明いたします</p>
              </div>
        </div>
</div>


<div class="c-breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>



<section class="p-single-voyage">

      <div class="l-inner">



      <h2 class="p-single-voyage__ttl"><?php the_title();?>への渡航について</h2>

        <div class="p-single-voyage__intro">
            <div class="p-single-voyage__desc">
                <!-- ※入国前に各国の措置が突然変更される可能性もありますので、検査前に最新の情報を在日の各国大使館や各国にあります日本大使館のホームページ、<a href="https://www.anzen.mofa.go.jp/" class="c-blue u-text-under-line" target="_blank">外務省海外安全ホームページ</a>などでご自身でご確認ください。 -->
                <?php the_field('intro_top',$post_id, false); ?>
            </div>
           <!--  <p class="p-single-voyage__desc">
            感染症検査クリニックでは、新型コロナウイルスPCR検査を行なっています。経済活動再開に伴い、お仕事などでの海外渡航を行う方もいらっしゃるかと思います。すでに新型コロナ感染症に関する検査を入国に際して求める国もあります。そのような入国に必要な証明書の作成も当院で行っております。
            </p> -->
        </div>

          <?php if(get_field('intro_desc')): ?>
              <div class="p-voyage-box">
                <h3 class="p-voyage-box__ttl c-ttl-bl-line"><span class="c-ttl-bl-line__text p-voyage-box__ttl-sub">
                  <?php the_title(); ?>入国に必要なもの</span></h3>
                    <div class="p-voyage-box__desc">
                        <?php remove_filter('acf_the_content', 'wpautop'); ?>
                        <?php the_field('intro_desc',$post_id, false); ?>
                    </div>
              </div>
          <?php endif; ?>


          <div class="p-voyage-box">

            <?php if (get_field('price_ttl')): ?>
                  <h3 class="p-voyage-box__ttl c-ttl-bl-line"><span class="c-ttl-bl-line__text p-voyage-box__ttl-sub"><!-- <?php the_field('price_ttl'); ?> -->
PCR検査陰性証明書や、PCR検査の費用
                  </span></h3>
            <?php endif; ?>

            <?php if (get_field('price_contents')): ?>
                  <div class="p-voyage-box__desc">
                      <?php remove_filter('acf_the_content', 'wpautop'); ?>
                      <!-- <?php the_field('price_contents'); ?> -->

                      迅速PCR検査は15,000円(税別)を頂戴しております。<br class="">（海外渡航用の陰性証明書は、各大使館からの陰性証明書有効期間を考慮致しまして、迅速プランでの検査をお願いしております。）<br class="">また、渡航用の陰性証明書の作成には、10,000円(税別)の費用を頂戴しております。<br>
                      <span class="c-red u-text-under-line u-fw600">※海外渡航用陰性証明書は、患者様ぞれぞれにフォーマットの取得並びに当院への送付をお願いしております。</span>
                  </div>
            <?php endif; ?>

          </div>
          <!-- ./p-voyage-box -->



<?php if (have_rows('contents')): ?>
      <?php while (have_rows('contents')) : the_row(); ?>

          <div class="p-voyage-box">

            <?php if (get_sub_field('contents_ttl')): ?>
                  <h3 class="p-voyage-box__ttl"><?php the_sub_field('contents_ttl'); ?></h3>
            <?php endif; ?>

            <?php if (get_sub_field('contents_desc')): ?>
                  <div class="p-voyage-box__desc">
                      <?php remove_filter('acf_the_content', 'wpautop'); ?>
                      <?php the_sub_field('contents_desc'); ?>
                  </div>
            <?php endif; ?>

          </div>
          <!-- ./p-voyage-box -->

      <?php endwhile; ?>
<?php else: ?>
<?php endif; ?>




      </div>
      <!-- ./l-inner -->



</section>




<?php get_footer();?>
