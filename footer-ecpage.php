
 <?php if ( is_page() ) : ?>

 <footer class="l-footer p-footer p-footer-pages">

 <?php else: ?>

 <footer class="l-footer p-footer">

<?php endif; ?>



           <nav class="p-footer-links  p-footer-links--other u-pc-display">

                 <ul id="my_footer_menu_left" class="my_footer_menu_center p-footer-links__list">
                    <li><a href="<?php echo home_url( '/' ); ?>">主页</a></li>
                    <li><a href="<?php echo home_url( '/' ); ?>#link-use">申请检测方法</a></li>
                    <li><a href="<?php echo home_url( '/' ); ?>faq-personal">常见问题</a></li>
                    <li><a href="<?php echo home_url( '/' ); ?>#link-kit">云医疗支援系统的使用方法</a></li>
                    <li><a href="<?php echo home_url( '/' ); ?>clinic">关于本诊所</a></li>
                    <li><a href="<?php echo home_url( '/' ); ?>contact">咨询</a></li>
                    <li><a href="<?php echo home_url( '/' ); ?>privacy">隐私政策</a></li>
                </ul>

                <ul id="my_footer_menu_center" class="my_footer_menu_center p-footer-links__list">

                  <li ><a href="<?php echo home_url( '/' ); ?>item-list">商品一览</a></li>
                  <li><a href="<?php echo home_url( '/' ); ?>postage">送货费一览</a></li>
                <!--   <li><a href="<?php echo home_url( '/' ); ?>use">唾液采样及抗体检测的步骤</a></li> -->

                </ul>

             </nav>



<div class="p-footer-nav u-sp-display">
                 <nav class="p-global-nav --global-top --global-footer">
                  <ul class="p-global-nav__list --global-top-list --global-footer-list">
                    <li class="p-global-nav__item --global-top-item --global-footer-item">
                      <a href="<?php echo home_url( '/' ); ?>#link-use" class="p-global-nav__link --global-top-link --global-footer-link">
                          申请检测的方法
                      </a>
                    </li>
                    <li class="p-global-nav__item --global-top-item  --global-footer-item">
                      <a href="<?php echo home_url( '/' ); ?>faq-personal" class="p-global-nav__link --global-top-link --global-footer-link">
                          常见问题
                      </a>
                    </li>
                    <li class="p-global-nav__item --global-top-item  --global-footer-item">
                      <a href="<?php echo home_url( '/' ); ?>#link-kit" class="p-global-nav__link --global-top-link --global-footer-link">
                          采样套件
                      </a>
                    </li>
                   <!--  <li class="p-global-nav__item --global-top-item --global-footer-item">
                    <a href="<?php echo home_url( '/' ); ?>clinics" class="p-global-nav__link --global-top-link --global-footer-link ">
                        云医疗支援系统的使用方法
                    </a>
                  </li> -->
                    <li class="p-global-nav__item --global-top-item  --global-footer-item">
                      <a href="<?php echo home_url( '/' ); ?>clinic" class="p-global-nav__link --global-top-link --global-footer-link">
                          关于本诊所
                      </a>
                    </li>
                    <li class="p-global-nav__item --global-top-item  --global-footer-item">
                      <a href="<?php echo home_url( '/' ); ?>contact" class="p-global-nav__link --global-top-link --global-footer-link" target="_blank">
                          咨询
                      </a>
                    </li>
                  </ul>
                </nav>
        </div>

<?php if (is_singular("post")) : ?>
       <div class="p-credit-card">
        <div class="l-inner p-credit-card__inner">
                     <p class="p-credit-card__guide">各种信用卡付款</p>
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
                        </ul>
          </div>
             </div>
<?php endif; ?>

  <p class="u-tc p-footer__copy --copy-top">copyright©感染症检测诊所 all rights reserved.</p>
</footer>




</div>
<!--  ./wrapper -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js?6dbddba84c650683"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.autoKana.js?6dbddba84c650683"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js?<?php echo filemtime( get_stylesheet_directory() . '/js/scripts.js'); ?>"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/garlic.js?6dbddba84c650683"></script>


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
