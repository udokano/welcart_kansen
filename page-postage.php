<?php
/*
Template Name: 送料一覧
*/
?>
<?php get_header();?>



<div class="p-pages-ttl-area --ttl-bg-items u-bg-cover" id="js-pages-head">
        <div class="p-pages-ttl-area__inner --inner-item">
              <div class="p-pages-ttl-area__texts --texts--item-list u-sp-tc">
                        <h1 class="p-pages-ttl-area__ttl --ttl--item-list">送料一覧</h1>
                <p class="p-pages-ttl-area__sub">商品購入の際に、<br class="">発生する送料の一覧ページです。</p>
              </div>
        </div>
</div>


<div class="c-breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>


<section class="p-transport-price">


    <div class="l-inner">
            <h2 class="p-transport-price__ttl">送料料金表一覧</h2>
            <div class="p-transport-price__sq-box">
                <p class="p-transport-price__sq-main">5万円(税抜)以上のご購入の方は、<br class="">送料が無料となります。</p>
                <p class="p-transport-price__sq-sub">※下記料金表は商品１つあたりの金額になります。</p>
            </div>
             <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/transport_price.jpg?f06519422ffaeb1c" alt="" class="p-transport-price__img">
    </div>


</section>




 <!-- <div class="p-footer-nav u-border-bottom-none">
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
