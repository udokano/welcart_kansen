
<?php get_header();?>







<div class="p-pages-ttl-area --ttl-bg-company-reserve u-bg-cover" id="js-pages-head">
        <div class="p-pages-ttl-area__inner">
              <div class="p-pages-ttl-area__texts --company">
                        <h1 class="p-pages-ttl-area__ttl">PCR检测阴性证书</h1>
                <p class="p-pages-ttl-area__sub">对于每个国家的阴性PCR检测证书<br>让我来解释一下</p>
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



      <h2 class="p-single-voyage__ttl"><?php the_title();?>出国</h2>

        <div class="p-single-voyage__intro">
            <div class="p-single-voyage__desc">
                <!-- ※入国前に各国の措置が突然変更される可能性もありますので、検査前に最新の情報を在日の各国大使館や各国にあります日本大使館のホームページ、<a href="https://www.anzen.mofa.go.jp/" class="c-blue u-text-under-line" target="_blank">外務省海外安全ホームページ</a>などでご自身でご確認ください。 -->
                ※各国也有可能在入境前突然改变入境措施，所以在检测前，请在驻日的各国大使馆，驻各国的日本大使馆的网站，外务省海外安全网站等，确认最新信息。
<br><br>
感染症检测诊所实施新冠病毒PCR检测。随着经济活动的恢复，有人因工作等原因需要出国。有的国家已要求入境时提交新冠肺炎的检测证明。本诊所也出具入境所需的证明。
            </div>
           <!--  <p class="p-single-voyage__desc">
            感染症検査クリニックでは、新型コロナウイルスPCR検査を行なっています。経済活動再開に伴い、お仕事などでの海外渡航を行う方もいらっしゃるかと思います。すでに新型コロナ感染症に関する検査を入国に際して求める国もあります。そのような入国に必要な証明書の作成も当院で行っております。
            </p> -->
        </div>

          <?php if(get_field('intro_desc')): ?>
              <div class="p-voyage-box">
                <h3 class="p-voyage-box__ttl c-ttl-bl-line"><span class="c-ttl-bl-line__text p-voyage-box__ttl-sub">
                  <?php the_title(); ?>所需的条件</span></h3>
                    <div class="p-voyage-box__desc">
 <?php remove_filter('acf_the_content', 'wpautop'); ?>
                      <?php the_field('intro_desc'); ?>

                    </div>
              </div>
          <?php endif; ?>


          <div class="p-voyage-box">

            <?php if (get_field('price_ttl')): ?>
                  <h3 class="p-voyage-box__ttl c-ttl-bl-line"><span class="c-ttl-bl-line__text p-voyage-box__ttl-sub"><?php the_field('price_ttl'); ?></span></h3>
                   <?php else: ?>

               <h3 class="p-voyage-box__ttl c-ttl-bl-line">
                <span class="c-ttl-bl-line__text p-voyage-box__ttl-sub">
                 PCR检测阴性证明及PCR检测的费用
                </span>
               </h3>
            <?php endif; ?>

            <?php if (get_field('price_contents')): ?>
                  <div class="p-voyage-box__desc">
                      <?php remove_filter('acf_the_content', 'wpautop'); ?>
                      <?php the_field('price_contents'); ?>
                  </div>
                   <?php else: ?>
                   <div class="p-voyage-box__desc">
                     PCR检测收取14,800日元（不含税）。<br>出具出国用阴性证明收取10,000日元（不含税）。
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
