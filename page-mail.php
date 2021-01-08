<?php
/*
Template Name: 迷惑メール解除の方法
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


<section class="js-tab-wrap p-mail">


    <ul class="p-mail-list">
        <li class="js-tab-btn p-mail-list__item p-mail-list__item--gmail is-tab-active">Gmail</li>
        <li class="js-tab-btn p-mail-list__item p-mail-list__item--yahoo">Yahooメール</li>
        <li class="js-tab-btn p-mail-list__item p-mail-list__item--other">その他</li>
    </ul>

    <div class="js-tab-contents p-mail-contents is-tab-active">

            <h2 class="u-tc u-fw600 p-mail__ttl u-text-under-line">迷惑メールフォルダから解除</h2>

            <ul class="p-pc-mail">
                    <li class="p-pc-mail__list ">
                    <div class="p-pc-mail__inner l-inner u-flex u-al-cent">
                            <div class="p-pc-mail__thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mail/gmail_pc_thumb01.jpg" alt="サムネイル">
                            </div>
                            <!-- ./p-pc-mail__thumb -->

                            <div class="p-pc-mail__texts">
                                <p class="p-pc-mail__top">
                                    <span class="p-pc-mail__step u-din-pro-mid c-blue">Step.<span class="p-pc-mail__step-num">01</span></span><span class="p-pc-mail__ttl">迷惑メールフォルダに移動</span>
                                </p>

                                <p class="p-pc-mail__desc">
                                    Gmailの管理画面にログインします。そして、左側のナビゲーションメニューから迷惑メールを選択して迷惑メールフォルダに移動します。
                                </p>
                            </div>
                            <!-- ./texts -->
                        </div>
                        <!-- ./inner -->
                    </li>
                     <li class="p-pc-mail__list ">
                    <div class="p-pc-mail__inner l-inner u-flex u-al-cent">
                            <div class="p-pc-mail__thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mail/gmail_pc_thumb02.jpg" alt="サムネイル">
                            </div>
                            <!-- ./p-pc-mail__thumb -->

                            <div class="p-pc-mail__texts">
                                <p class="p-pc-mail__top">
                                    <span class="p-pc-mail__step u-din-pro-mid c-blue">Step.<span class="p-pc-mail__step-num">02</span></span><span class="p-pc-mail__ttl">解除したいメールを選択</span>
                                </p>

                                <p class="p-pc-mail__desc">
                                    迷惑メールフォルダから、迷惑メールを解除したいメールを選択します。
                                </p>
                            </div>
                            <!-- ./texts -->
                        </div>
                        <!-- ./inner -->
                    </li>

                     <li class="p-pc-mail__list ">
                    <div class="p-pc-mail__inner l-inner u-flex u-al-cent">
                            <div class="p-pc-mail__thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mail/gmail_pc_thumb03.jpg" alt="サムネイル">
                            </div>
                            <!-- ./p-pc-mail__thumb -->

                            <div class="p-pc-mail__texts">
                                <p class="p-pc-mail__top">
                                    <span class="p-pc-mail__step u-din-pro-mid c-blue">Step.<span class="p-pc-mail__step-num">03</span></span><span class="p-pc-mail__ttl">迷惑メールを解除</span>
                                </p>

                                <p class="p-pc-mail__desc">
                                    迷惑メールフォルダに入ってしまったメールの中のページ上部『迷惑メールではない』か『迷惑メールではない』をクリックして、迷惑メールフォルダーにメールが届かないように設定します。
                                </p>
                            </div>
                            <!-- ./texts -->
                        </div>
                        <!-- ./inner -->
                    </li>
            </ul>

             <h2 class="u-tc u-fw600 p-mail__ttl u-text-under-line">フィルタの作成</h2>


              <ul class="p-pc-mail">
                    <li class="p-pc-mail__list ">
                    <div class="p-pc-mail__inner l-inner u-flex u-al-cent">
                            <div class="p-pc-mail__thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mail/gmail_pc_thumb04.jpg" alt="サムネイル">
                            </div>
                            <!-- ./p-pc-mail__thumb -->

                            <div class="p-pc-mail__texts">
                                <p class="p-pc-mail__top">
                                    <span class="p-pc-mail__step u-din-pro-mid c-blue">Step.<span class="p-pc-mail__step-num">01</span></span><span class="p-pc-mail__ttl">矢印アイコンをクリック</span>
                                </p>

                                <p class="p-pc-mail__desc">
                                    Gmailの画面上部あたりにあるメール検索ボックスの下矢印アイコンをクリックします。
                                </p>
                            </div>
                            <!-- ./texts -->
                        </div>
                        <!-- ./inner -->
                    </li>
                     <li class="p-pc-mail__list ">
                    <div class="p-pc-mail__inner l-inner u-flex u-al-cent">
                            <div class="p-pc-mail__thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mail/gmail_pc_thumb05.jpg" alt="サムネイル">
                            </div>
                            <!-- ./p-pc-mail__thumb -->

                            <div class="p-pc-mail__texts">
                                <p class="p-pc-mail__top">
                                    <span class="p-pc-mail__step u-din-pro-mid c-blue">Step.<span class="p-pc-mail__step-num">02</span></span><span class="p-pc-mail__ttl">フィルターの設定</span>
                                </p>

                                <p class="p-pc-mail__desc">
                                    Fromに迷惑メールに入れたくないメールアドレスかドメイン(@以降の部分)を入力します。その後、フィルタを作成をクリックします。
                                </p>
                            </div>
                            <!-- ./texts -->
                        </div>
                        <!-- ./inner -->
                    </li>

                     <li class="p-pc-mail__list ">
                    <div class="p-pc-mail__inner l-inner u-flex u-al-cent">
                            <div class="p-pc-mail__thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mail/gmail_pc_thumb06.jpg" alt="サムネイル">
                            </div>
                            <!-- ./p-pc-mail__thumb -->

                            <div class="p-pc-mail__texts">
                                <p class="p-pc-mail__top">
                                    <span class="p-pc-mail__step u-din-pro-mid c-blue">Step.<span class="p-pc-mail__step-num">03</span></span><span class="p-pc-mail__ttl">迷惑メールを解除</span>
                                </p>

                                <p class="p-pc-mail__desc">
                                    迷惑メールフォルダに入ってしまったメールの中のページ上部『迷惑メールではない』か『迷惑メールではない』をクリックして、迷惑メールフォルダーにメールが届かないように設定します。
                                </p>
                            </div>
                            <!-- ./texts -->
                        </div>
                        <!-- ./inner -->
                    </li>

                    <li class="p-pc-mail__list ">
                    <div class="p-pc-mail__inner l-inner u-flex u-al-cent">
                            <div class="p-pc-mail__thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mail/gmail_pc_thumb07.jpg" alt="サムネイル">
                            </div>
                            <!-- ./p-pc-mail__thumb -->

                            <div class="p-pc-mail__texts">
                                <p class="p-pc-mail__top">
                                    <span class="p-pc-mail__step u-din-pro-mid c-blue">Step.<span class="p-pc-mail__step-num">04</span></span><span class="p-pc-mail__ttl">迷惑メールを解除</span>
                                </p>

                                <p class="p-pc-mail__desc">
                                    迷惑メールフォルダに入ってしまったメールの中のページ上部『迷惑メールではない』か『迷惑メールではない』をクリックして、迷惑メールフォルダーにメールが届かないように設定します。
                                </p>
                            </div>
                            <!-- ./texts -->
                        </div>
                        <!-- ./inner -->
                    </li>
            </ul>



    </div>
    <!-- ./tab__contents01 -->

    <div class="js-tab-contents p-mail-contents">

            <ul class="p-pc-mail">
                    <li class="p-pc-mail__list ">
                    <div class="p-pc-mail__inner l-inner u-flex u-al-cent">
                            <div class="p-pc-mail__thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mail/yahoo_pc_thumb01.jpg" alt="サムネイル">
                            </div>
                            <!-- ./p-pc-mail__thumb -->

                            <div class="p-pc-mail__texts">
                                <p class="p-pc-mail__top">
                                    <span class="p-pc-mail__step u-din-pro-mid c-blue">Step.<span class="p-pc-mail__step-num">01</span></span><span class="p-pc-mail__ttl">迷惑メールフォルダに移動</span>
                                </p>

                                <p class="p-pc-mail__desc">
                                    Gmailの管理画面にログインします。そして、左側のナビゲーションメニューから迷惑メールを選択して迷惑メールフォルダに移動します。
                                </p>
                            </div>
                            <!-- ./texts -->
                        </div>
                        <!-- ./inner -->
                    </li>
                     <li class="p-pc-mail__list ">
                    <div class="p-pc-mail__inner l-inner u-flex u-al-cent">
                            <div class="p-pc-mail__thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mail/yahoo_pc_thumb02.jpg" alt="サムネイル">
                            </div>
                            <!-- ./p-pc-mail__thumb -->

                            <div class="p-pc-mail__texts">
                                <p class="p-pc-mail__top">
                                    <span class="p-pc-mail__step u-din-pro-mid c-blue">Step.<span class="p-pc-mail__step-num">02</span></span><span class="p-pc-mail__ttl">解除したいメールを選択</span>
                                </p>

                                <p class="p-pc-mail__desc">
                                    迷惑メールフォルダから、迷惑メールを解除したいメールを選択します。
                                </p>
                            </div>
                            <!-- ./texts -->
                        </div>
                        <!-- ./inner -->
                    </li>

                     <li class="p-pc-mail__list ">
                    <div class="p-pc-mail__inner l-inner u-flex u-al-cent">
                            <div class="p-pc-mail__thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mail/yahoo_pc_thumb03.jpg" alt="サムネイル">
                            </div>
                            <!-- ./p-pc-mail__thumb -->

                            <div class="p-pc-mail__texts">
                                <p class="p-pc-mail__top">
                                    <span class="p-pc-mail__step u-din-pro-mid c-blue">Step.<span class="p-pc-mail__step-num">03</span></span><span class="p-pc-mail__ttl">迷惑メールを解除</span>
                                </p>

                                <p class="p-pc-mail__desc">
                                    迷惑メールフォルダに入ってしまったメールの中のページ上部『迷惑メールではない』か『迷惑メールではない』をクリックして、迷惑メールフォルダーにメールが届かないように設定します。
                                </p>
                            </div>
                            <!-- ./texts -->
                        </div>
                        <!-- ./inner -->
                    </li>
            </ul>

    </div>
    <!-- ./tab__contents01 -->


</section>


<?php get_footer();?>
