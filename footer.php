
<?php if ( is_home() || is_front_page() ) : ?>

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
                        </ul>
          </div>
             </div>


<?php endif; ?>





  <p class="u-tc p-footer__copy --copy-top">copyright©感染症検査クリニック all rights reserved.</p>
</footer>
</div>
<!--  ./wrapper -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js?6dbddba84c650683"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.autoKana.js?6dbddba84c650683"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js?<?php echo filemtime( get_stylesheet_directory() . '/js/scripts.js'); ?>"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/garlic.js?6dbddba84c650683"></script>

<?php wp_footer();?>
</body></html>
