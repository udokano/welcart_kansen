<?php
/*
Template Name: 当院について
*/
?>
<?php get_header();?>







<div class="p-pages-ttl-area --ttl-bg-clinic u-bg-cover" id="js-pages-head">
        <div class="p-pages-ttl-area__inner">
              <div class="p-pages-ttl-area__texts">
                        <h1 class="p-pages-ttl-area__ttl  --under-none">关于本诊所</h1>
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
                <dt class="p-clinic-info-table__ttl">诊所名称</dt>
                <dd class="p-clinic-info-table__desc"><a href="https://souki-kai.or.jp/group.html" class="u-text-under-line c-blue" target="_blank">医疗法人社团 创辉会</a>  <br class="u-sp">感染症检测诊所</dd>
            </dl>
            <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">设立年月日</dt>
                <dd class="p-clinic-info-table__desc">2020年8月1日</dd>
            </dl>
          <!--   <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">院長</dt>
                <dd class="p-clinic-info-table__desc">○○ ○○</dd>
            </dl> -->
            <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">业务内容</dt>
                <dd class="p-clinic-info-table__desc">感染症检测分析</dd>
            </dl>
            <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">诊所所在地</dt>
                <dd class="p-clinic-info-table__desc">〒542-0086 大阪府大阪市中央区西心斋桥2-13-16 OOKINI西心斋桥BirthPlace大厦3楼<br><br>
                <p style="font-size:80%;">由于预防感染的原因，如果直接来医院的话，<br class="u-sp">请事先联系。<br>
                <span style="color:red;">有疑似新冠肺炎症状的人士不能入内。<!-- <br>
                また、発熱や味覚障害、感染者との濃厚接触など感染が疑われる症状がある方の受診は行っておりません。 --></span></p>
                </dd>
            </dl>
        </div>
        <!-- ./p-clinic-info-table__warp -->

    </div>
    <!-- ./l-main-right__inner -->

    <div class="p-clinic-map">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.3847292422915!2d135.49554925137963!3d34.67023829225942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e711e9b95e49%3A0x4a1f93fbf5692c2a!2z44CSNTQyLTAwODYg5aSn6Ziq5bqc5aSn6Ziq5biC5Lit5aSu5Yy66KW_5b-D5paO5qmL77yS5LiB55uu77yR77yT4oiS77yR77yW!5e0!3m2!1sja!2sjp!4v1594803137018!5m2!1sja!2sjp" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>
<!-- ./l-main-right -->

</section>







<?php get_footer();?>
