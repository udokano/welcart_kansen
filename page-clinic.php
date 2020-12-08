<?php
/*
Template Name: 当院について
*/
?>
<?php get_header();?>





<div class="p-pages-ttl-area --ttl-bg-clinic u-bg-cover" id="js-pages-head">
        <div class="p-pages-ttl-area__inner">
              <div class="p-pages-ttl-area__texts">
                        <h1 class="p-pages-ttl-area__ttl  --under-none">クリニック概要</h1>
              <!--   <p class="p-pages-ttl-area__sub">こちらの検査は教育機関・医療機関の方<br>専用の申込フォームになります。</p> -->
              </div>
        </div>
</div>

<div class="c-breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>


<section class="l-row02-wrapper">

<div class="l-left-bg">

</div>

<div class="l-main-right">
    <div class="l-main-right__inner">
        <div class="p-clinic-info-table-warp">
            <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">院名</dt>
                <dd class="p-clinic-info-table__desc"><a href="https://souki-kai.or.jp/group.html" class="u-text-under-line c-blue" target="_blank">医療法人社団 創輝会</a>  <br class="u-sp">感染症検査クリニック</dd>
            </dl>
            <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">設立年月日</dt>
                <dd class="p-clinic-info-table__desc">2020年8月1日</dd>
            </dl>
          <!--   <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">院長</dt>
                <dd class="p-clinic-info-table__desc">○○ ○○</dd>
            </dl> -->
            <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">事業内容</dt>
                <dd class="p-clinic-info-table__desc">感染症検査分析<br class=""><br class="">
                    <p class="u-fz-sm u-text-under-line">当院の検査は医師によって判断を行っております。</p>
                    <p class="u-fz-sm u-text-under-line">1日の稼働上限数は2880件となります。</p>
                </dd>
            </dl>
            <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">クリニック所在地</dt>
                <dd class="p-clinic-info-table__desc"><!-- <span class="p-clinic-info-table__desc-sq">大阪院</span><br class=""> -->
                〒542-0086 大阪府大阪市中央区西心斎橋2-13-16 おおきに西心斎橋BirthPlaceビル 3階<br><br>
              <!--   <span class="p-clinic-info-table__desc-sq">福岡院</span><br class="">
                〒810-0001 福岡市中央区天神2-6-13 ジェムキャッスルきらめき通り 2階<br><br> -->
                <p style="font-size:80%;">直接、ご来院する場合は感染対策の都合上、<br class="u-sp">事前にご連絡ください。<br>
                <span style="color:red;">新型コロナウイルス感染疑いの症状がある方は入室できません。<!-- <br>
                また、発熱や味覚障害、感染者との濃厚接触など感染が疑われる症状がある方の受診は行っておりません。 --></span></p>
                </dd>
            </dl>

        </div>
        <!-- ./p-clinic-info-table__warp -->

    </div>
    <!-- ./l-main-right__inner -->

    <div class="p-clinic-map">
      <!--   <h3 class="p-clinic-map__clinic"><span class="p-clinic-map__clinic-name">大阪院</span></h3> -->
        <div class="p-clinic-map__container">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.3847292422915!2d135.49554925137963!3d34.67023829225942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e711e9b95e49%3A0x4a1f93fbf5692c2a!2z44CSNTQyLTAwODYg5aSn6Ziq5bqc5aSn6Ziq5biC5Lit5aSu5Yy66KW_5b-D5paO5qmL77yS5LiB55uu77yR77yT4oiS77yR77yW!5e0!3m2!1sja!2sjp!4v1594803137018!5m2!1sja!2sjp" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <!-- ,/p-clinic-map__container -->
    </div>
    <!-- ./p-clinic-map -->

    <style>

                /*
                  <div class="p-clinic-map">
        <h3 class="p-clinic-map__clinic"><span class="p-clinic-map__clinic-name">福岡院</span></h3>
        <div class="p-clinic-map__container">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d207.7265859479006!2d130.3968031!3d33.5890748!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3541918f606c62ef%3A0x3fe5152725726548!2z44CSODEwLTAwMDEg56aP5bKh55yM56aP5bKh5biC5Lit5aSu5Yy65aSp56We77yS5LiB55uu77yW4oiS77yR77yTIOWkp-S7meODk-ODqw!5e0!3m2!1sja!2sjp!4v1605499542403!5m2!1sja!2sjp" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <!-- ,/p-clinic-map__container -->
    </div>
    <!-- ./p-clinic-map -->
</div>
                */


    </style>


<!-- ./l-main-right -->

</section>





<?php get_footer();?>
