<?php
/*
Template Name: 商品一覧-迅速検査
*/
?>
<?php get_header();?>

 <div class="p-pages-ttl-area --ttl-bg-items u-bg-cover" id="js-pages-head">
        <div class="p-pages-ttl-area__inner --inner-item">
              <div class="p-pages-ttl-area__texts --texts--item-list">
                        <h1 class="p-pages-ttl-area__ttl --ttl--item-list">申请购买及出具证明</h1>
                <p class="p-pages-ttl-area__sub">购买样本回收套件及阴性证明的请点击这里</p>
              </div>
        </div>
    </div>


    <div class="c-breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>



<section class="bg-section-gray p-item-area02">


<div class="l-inner">


<ul class="p-item-tab  ">
    <li class="p-item-tab__btn ">
            <a href="<?php echo home_url( '/' ); ?>item-list" class="p-item-tab__link">
                <span class="p-item-tab__text">常规产品</span>
            </a>
    </li>

    <li class="p-item-tab__btn is-item-active">
            <a href="<?php echo home_url( '/' ); ?>item-list-quick" class="p-item-tab__link">
                <span class="p-item-tab__text">速测</span>
            </a>
    </li>
</ul>

<p class="p-quick-note u-tc u-fw600">我们将为您提供快递和优先检验的服务。</p>


  <ul class="p-items">
             <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr-quick-zh">
                <p class="p-items__name">PCR快速检测</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item01-quick-zh.jpg?3aed4b4a772c69be" alt="PCR検査">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">这是一个快速的PCR测试。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">价格</span>
                                <span class="p-items__p-center">16,500</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">（含税）</span>
                                            <span class="p-items__tax">日元</span>
                                </span>
                            </div>
                        </div>
                </div>
                  <p class="c-btn-circle-arw p-items__btn">进入购买</p>
                </a>
            </li>

             <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr-quick-set5-zh">
                <p class="p-items__name">5套PCR快速测试</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item01-quick-set05-zh.jpg?3aed4b4a772c6559be2111" alt="PCR検査">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">这是一套五项快速PCR测试。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">价格</span>
                                <span class="p-items__p-center">69,300</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">（含税）</span>
                                            <span class="p-items__tax">日元</span>
                                </span>
                            </div>
                        </div>
                </div>
                  <p class="c-btn-circle-arw p-items__btn">进入购买</p>
                </a>
            </li>


            <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr-quick-set10-zh">
                <p class="p-items__name">10套快速PCR测试</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item01-quick-set10-zh.jpg?3aed4b4a772c69be" alt="PCR検査">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">这是一套10个快速PCR测试。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">价格</span>
                                <span class="p-items__p-center">130,680</span>
                                <span class="p-items__p-right">
                                     <span class="p-items__tax-sub">（含税）</span>
                                            <span class="p-items__tax">日元</span>
                                </span>
                            </div>
                        </div>
                </div>
                   <p class="c-btn-circle-arw p-items__btn">进入购买</p>
                </a>
            </li>

             <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr-quick-antibody-set-zh">
                <p class="p-items__name">PCR快速检测+抗体检测</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item01-quick-antibody-set-zh.jpg?3aed4b4a772c69be" alt="PCR検査">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">这是一套PCR快速检测和抗体检测。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">价格</span>
                                <span class="p-items__p-center">22,000</span>
                                <span class="p-items__p-right">
                                     <span class="p-items__tax-sub">（含税）</span>
                                            <span class="p-items__tax">日元</span>
                                </span>
                            </div>
                        </div>
                </div>
                 <p class="c-btn-circle-arw p-items__btn">进入购买</p>
                </a>
            </li>

             <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr-quick-antibody-set05-zh">
                <p class="p-items__name">PCR快速检测+5种抗体检测</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item01-quick-antibody-set05-zh.jpg?3aed4b4a772c69be" alt="PCR検査">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">这是一套五项PCR快速检测和抗体检测。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">价格</span>
                                <span class="p-items__p-center">91,300</span>
                                <span class="p-items__p-right">
                                     <span class="p-items__tax-sub">（含税）</span>
                                            <span class="p-items__tax">日元</span>
                                </span>
                            </div>
                        </div>
                </div>
                   <p class="c-btn-circle-arw p-items__btn">进入购买</p>
                </a>
            </li>

            <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr-quick-antibody-set10-zh">
                <p class="p-items__name">PCR快速检测+10个抗体测试</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item01-quick-antibody-set10-zh.jpg?3aed4b4a772c69be" alt="PCR検査">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">这是一套10个PCR快速检测和抗体检测。</p>
                            <div class="p-items__price-wrap">
                               <span class="p-items__p-left">价格</span>
                                <span class="p-items__p-center">163,680</span>
                                <span class="p-items__p-right">
                                   <span class="p-items__tax-sub">（含税）</span>
                                            <span class="p-items__tax">日元</span>
                                </span>
                            </div>
                        </div>
                </div>
            <p class="c-btn-circle-arw p-items__btn">进入购买</p>
                </a>
            </li>


        </ul>

       <p class="u-tc u-mb15">
    PCR检测及抗体检测，是检测从检测材料中能否检测出新冠病毒特征的RNA序列，<br class="">
请理解从检测结果能得到的信息是有限的。</p>




</div>
</section>




<!-- 送料追加の旨を記載 -->


<section class="p-transport-price">
    <div class="l-inner">
 <h2 class="p-transport-price__ttl">关于送货费</h2>
<p class="u-tc">送货<a href="<?php echo home_url( '/' ); ?>postage" class="c-pink">请参照这网页。</a></p>
    </div>
</section>






<section class="p-specific-trade">

<div class="l-inner">
 <h2 class="c-ttl-under-center p-cancel__ttl">退货、换货及取消订货等</h2>
        <p class="u-tc p-cancel__desc u-mb1-5rem">套件及出具证明，根据该货物筹措的性质，不接受取消订货和退货。<br class="">同意这个条件的请申请。</p>

         <p class="u-tc p-cancel__desc">箱子外部以及商品本身如果有划痕及碰撞（凹陷）等破损，将由运输公司的事故处理（运输保险）来处理换货以及退款，所以请当场向送货的司机提出，所以请当场向送货的司机提出，<br class=""><br class="">或直接与送货公司联系。</p>
<h2 class="c-ttl-under-center p-specific-trade__ttl">关于特定商业交易法</h2>
<div class="p-clinic-info-table-warp --specific-table">
            <dl class="p-clinic-info-table  ">
                <dt class="p-clinic-info-table__ttl">诊所名称</dt>
                <dd class="p-clinic-info-table__desc"><a href="https://souki-kai.or.jp/group.html" class="u-text-under-line c-blue" target="_blank">医疗法人社团 创辉会</a>  <br class="u-sp">感染症检测诊所</dd>
            </dl>
          <!--   <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">設立年月日</dt>
                <dd class="p-clinic-info-table__desc">2020年8月1日</dd>
            </dl> -->
          <!--   <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">院長</dt>
                <dd class="p-clinic-info-table__desc">○○ ○○</dd>
            </dl> -->
           <!--  <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">事業内容</dt>
                <dd class="p-clinic-info-table__desc">感染症検査分析</dd>
            </dl> -->
            <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">诊所所在地</dt>
                <dd class="p-clinic-info-table__desc">〒542-0086 大阪府大阪市中央区西心斋桥2-13-16 OOKINI西心斋桥BirthPlace大厦3楼</dd>
            </dl>
             <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">联系电话</dt>
                <dd class="p-clinic-info-table__desc">
                   <a href="<?php echo home_url( '/' ); ?>tel/kansenshou.html" class="c-pink" target="_blank"><!-- 个人  -->0120-088-120</a><br>
                    <p class="c-pink u-fw600">※这款手机有日文版。</p>
           <!--  <a href="<?php echo home_url( '/' ); ?>tel/campany.html" class="c-pink" target="_blank">企业及团体 06-4708-8082</a> -->
        </dd>
            </dl>

            <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">咨询</dt>
                <dd class="p-clinic-info-table__desc">接受通过电邮形式的<a href="<?php echo home_url( '/' ); ?>contact" class="c-pink" target="_blank">咨询</a></dd>
            </dl>

             <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">销售价格</dt>
                <dd class="p-clinic-info-table__desc">对每个商品标示销售价格</dd>
            </dl>

            <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">商品货款以外的必要费用</dt>
                <dd class="p-clinic-info-table__desc">送货</dd>
            </dl>

             <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">交付时期</dt>
                <dd class="p-clinic-info-table__desc">1~2天后<br>※有可能因天气不好或送货公司的原因，以及其他某些理由而推迟。<br>请予以理解。</dd>
            </dl>

             <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">支付方式</dt>
              <dd class="p-clinic-info-table__desc">信用卡(VISA,MASTER,JCB,Amex,Diners,Discover)</dd>
            </dl>

            <dl class="p-clinic-info-table">
                <dt class="p-clinic-info-table__ttl">个人信息的处理</dt>
                <dd class="p-clinic-info-table__desc"><a href="<?php echo home_url( '/' ); ?>privacy" class="c-pink" target="_blank">遵守隐私政策，</a>努力保护顾客的隐私。</dd>
            </dl>
        </div>
        <!-- ./p-clinic-info-table__warp -->


</div>

</section>





<?php get_footer();?>
