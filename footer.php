


<style>


/*

 <?php if ( is_home() || is_front_page() || is_page("ch") ) : ?>

            <div class="p-fix-btn" id="js-fix-btn">
                <a href="<?php echo home_url( '/' ); ?>faq-personal" class="p-fix-btn__inner">
                  <span class="p-fix-btn__qa u-f-a-otf-gosic">
                    Q&A
                  </span>
                  <span class="p-fix-btn__text">
                    よくある質問は<br>こちら
                  </span>
                </a>
            </div>

    <?php else: ?>

    <?php endif; ?>
    <!-- ./ is_home() || is_front_page() -->

*/


</style>








 <?php if ( is_page() ) : ?>

 <footer class="l-footer p-footer p-footer-pages">

 <?php else: ?>

 <footer class="l-footer p-footer">

<?php endif; ?>





  <nav class="p-footer-links u-pc-display">

          <?php
            wp_nav_menu( array(
              'theme_location' => 'footer-menu01',
              'container' => '',  //コンテナのデフォルト <div> を <nav> に変更
            'container_id' => '',  //コンテナの ID を指定
            'menu_id' => 'my_footer_menu_left',  //デフォルトの menu-{メニュー名} を変更
            'menu_class' => 'my_footer_menu_center p-footer-links__list'
            ) );
          ?>

          <?php
            wp_nav_menu( array(
              'theme_location' => 'footer-menu02',
              'container' => '',  //コンテナのデフォルト <> を <nav> に変更
            'container_id' => '',  //コンテナの ID を指定
            'menu_id' => 'my_footer_menu_center',  //デフォルトの menu-{メニュー名} を変更
            'menu_class' => 'my_footer_menu_center p-footer-links__list'
            ) );
          ?>

          <?php
            wp_nav_menu( array(
              'theme_location' => 'footer-menu03',
              'container' => '',  //コンテナのデフォルト <> を <nav> に変更
            'container_id' => '',  //コンテナの ID を指定
            'menu_id' => 'my_footer_menu_right',  //デフォルトの menu-{メニュー名} を変更
            'menu_class' => 'my_footer_menu_right p-footer-links__list'
            ) );
          ?>

  </nav>







 <div class="p-footer-nav u-sp-display">
                 <nav class="p-global-nav --global-top --global-footer">
                  <ul class="p-global-nav__list --global-top-list --global-footer-list">
                    <li class="p-global-nav__item --global-top-item --global-footer-item">
                      <a href="#link-use" class="p-global-nav__link --global-top-link --global-footer-link">
                          検査のご利用方法
                      </a>
                    </li>
                    <li class="p-global-nav__item --global-top-item  --global-footer-item">
                      <a href="<?php echo home_url( '/' ); ?>faq-personal" class="p-global-nav__link --global-top-link --global-footer-link">
                          よくある質問
                      </a>
                    </li>
                    <li class="p-global-nav__item --global-top-item  --global-footer-item">
                      <a href="#link-kit" class="p-global-nav__link --global-top-link --global-footer-link">
                          検体採取キット
                      </a>
                    </li>
                    <li class="p-global-nav__item --global-top-item --global-footer-item">
                    <a href="<?php echo home_url( '/' ); ?>clinics" class="p-global-nav__link --global-top-link --global-footer-link ">
                        クリニクスの使い方
                    </a>
                  </li>
                    <li class="p-global-nav__item --global-top-item  --global-footer-item">
                      <a href="<?php echo home_url( '/' ); ?>clinic" class="p-global-nav__link --global-top-link --global-footer-link">
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
        </div>

<?php if (is_singular("post")) : ?>
       <div class="p-credit-card">
        <div class="l-inner p-credit-card__inner">
                     <p class="p-credit-card__guide">各種クレジット決済</p>
                        <ul class="p-credit-card__list">
                            <li class="p-credit-card__item">
                              <img src="<?php echo get_template_directory_uri(); ?>/img/common/c_cart_item02.png?6dbddba84c650683" alt="VISA">
                            </li>
                            <li class="p-credit-card__item">
                              <img src="<?php echo get_template_directory_uri(); ?>/img/common/c_cart_item01.png?6dbddba84c650683" alt="mastercard">
                            </li>

                            <li class="p-credit-card__item">
                              <img src="<?php echo get_template_directory_uri(); ?>/img/common/c_cart_item03.png?6dbddba84c650683" alt="JCB">
                            </li>
                             <li class="p-credit-card__item u-sp-mb0">
                              <img src="<?php echo get_template_directory_uri(); ?>/img/common/c_cart_item04.png?6dbddba84c650683" alt="JCB">
                            </li>
                             <li class="p-credit-card__item u-sp-mb0">
                              <img src="<?php echo get_template_directory_uri(); ?>/img/common/c_cart_item05.png?6dbddba84c650683" alt="JCB">
                            </li>
                             <li class="p-credit-card__item u-sp-mb0">
                              <img src="<?php echo get_template_directory_uri(); ?>/img/common/c_cart_item06.png?6dbddba84c650683" alt="JCB">
                            </li>
                        </ul>
          </div>
             </div>
<?php endif; ?>

  <p class="u-tc p-footer__copy --copy-top">copyright©感染症検査クリニック all rights reserved.</p>



<?php if ( is_home() || is_front_page() ) : ?>


<!--------------------------

チャットシステム挿入

----------------------------->



<script>(function(){
var w=window,d=document;
var s="https://app.chatplus.jp/cp.js";
d["__cp_d"]="https://app.chatplus.jp";
d["__cp_c"]="6b3c02e9_1";
var a=d.createElement("script"), m=d.getElementsByTagName("script")[0];
a.async=true,a.src=s,m.parentNode.insertBefore(a,m);})();</script>


<?php endif; ?>





</footer>


</div>
<!--  ./wrapper -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js?6dbddba84c650683"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.autoKana.js?6dbddba84c650683"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js?<?php echo filemtime( get_stylesheet_directory() . '/js/scripts.js'); ?>"></script>

<?php if( is_singular('post') ) : ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ja.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/ec-item.js?<?php echo filemtime( get_stylesheet_directory() . '/js/ec-item.js'); ?>"></script>

<?php endif; ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/garlic.js?6dbddba84c650683"></script>


        <?php if ( is_page("ch") ) : ?>
<!-- モーダルカレンダーの入力フォームないのDATEPICKERの読み込み -->

<link rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/redmond/jquery-ui.min.css?6dbddba84c650683">
                 <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js?6dbddba84c650683"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js?6dbddba84c650683"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/date-check.js"></script>


<?php else: ?>



<?php endif; ?>



    <!--     <script>


            var lang = navigator.language;
            console.log('language : ', lang);

            if (lang === "en-US" || lang === "en-us") {
                window.location = '#googtrans(ja|en)';
            }

             if (lang === "ja" || lang === "ja-jp") {
                window.location = '#googtrans(ja|ja)';
            }

             if (lang === "zh-CN" || lang === "zh-cn") {
                window.location = '#googtrans(ja|zh-CN)';
            }



         function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'ja',
                layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT
            }, 'google_translate_element');
        }



        </script> -->
<?php wp_footer();?>


<script async src="https://s.yimg.jp/images/listing/tool/cv/ytag.js?2dc4c6400b5334cd"></script>
<script>
window.yjDataLayer = window.yjDataLayer || [];
function ytag() { yjDataLayer.push(arguments); }
ytag({
  "type":"yss_retargeting",
  "config": {
    "yahoo_ss_retargeting_id": "1001055258",
    "yahoo_sstag_custom_params": {
    }
  }
});
</script>



</body>
</html>
