<?php
/*
Template Name:年末年始
*/
?>

<?php get_header();?>



<div class="c-breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>



<div style="    width: 90%;
    max-width: 750px;
    margin: 0 auto;
    text-align: center;
    margin-top: 20px;"><img src="<?php echo get_template_directory_uri(); ?>/img/common/anu2021.png"></div>


<section class="p-privacy">


  <div class="l-inner">


      <h1 class="c-title-under-circle p-privacy__ttl">年末年始のお知らせ</h1>

      <div class="p-privacy-contents">
            <dl class="p-privacy-list">
              <dt class="p-privacy-list__ttl"><p style="font-size:120%;"><span style="font-weight: bold;">年末年始も休まず出荷作業は行っておりますが、<br>
日本郵便による普通郵便の配達休止・遅延等の影響を受けるため、12月29日～1月3日まで検体の返送をご遠慮いただいております。<br>
その他の輸送手段につきましては、運送会社様より検体輸送の受付はしていない旨を言われているため、
誠に勝手ながら、当クリニックの検体は12月29日までの当院到着分にて、年内検査終了となります。<br>
年始は、1月4日からの検査受付とさせていただきます。<br>
12月30日～1月3日までに届いた検体は十分な状態での保存が厳しい関係で、検査をお受けすることができません。
予めご了承くださいませ。</span></p>
</dd>
            </dl>
      </div>
      <!-- ./p-privacy-contents -->
  </div>
  <!-- ./l-inner -->
</section>






<section class="p-clinic-info u-bg-cover">
    <div class="l-access-inner">
        <div class="p-clinic-info-row">
            <div class="p-clinic-info-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/common/c_header_logo.png?6dbddba84c650683" alt="感染症検査クリニック">
            </div>
            <!-- ./p-clinic-info-logo -->
            <div class="p-clinic-info-right">
                <h3 class="p-clinic-info-right__ttl">アクセス</h3>
                <p class="p-clinic-info-right__address">〒542-0086　大阪府大阪市中央区西心斎橋2-13-16 <br>おおきに西心斎橋BirthPlaceビル　3階</p>
               <a href="<?php echo home_url( '/' ); ?>tel/kansenshou.html" class="p-clinic-info-right__tel" target="_blank"><span class="p-clinic-info-right__tel-sq">個人</span>
                <span class="p-clinic-info-right__tel-num">0120-088-120</span></a>
                  <a href="<?php echo home_url( '/' ); ?>tel/campany.html" class="p-clinic-info-right__tel" target="_blank"><span class="p-clinic-info-right__tel-sq">企業・団体</span><span class="p-clinic-info-right__tel-num">06-4708-8082</span></a>
                <p class="p-clinic-info-right__guide">FAX : 06-4708-8105<br>受付 9:00～19:00  不定休</p>
                  <!--<p class="p-clinic-info-right__guide"><span class="u-text-under-line">※日・祝日は電話受付を休止しております。</span></p>-->
                <p class="p-clinic-info-right__guide-sub">直接、ご来院する場合は感染対策の都合上、<br class="u-sp">事前にご連絡ください。</p>
            </div>
        </div>
    </div>
</section>




<?php get_footer();?>
