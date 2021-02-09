<?php
/*
Template Name: 迷惑メール解除の方法
*/
?>
<?php get_header();?>





  <div class="p-pages-ttl-area --ttl-bg-items u-bg-cover" id="js-pages-head">
        <div class="p-pages-ttl-area__inner --inner-item">
              <div class="p-pages-ttl-area__texts --texts--item-list u-sp-tc">
                        <h1 class="p-pages-ttl-area__ttl --ttl--item-list">迷惑メール解除</h1>
                <p class="p-pages-ttl-area__sub">当クリニックからのメールが<br class="">迷惑メールに入ってしまう場合の解除方法です。</p>
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

            <input type="radio" name="tab01" id="lb-tab-btn01" class="u-all-hidden" checked>
            <input type="radio" name="tab01" id="lb-tab-btn02" class="u-all-hidden">
            <div class="p-mail-sub-btn-wrap">
                        <label for="lb-tab-btn01" class="p-mail-sub-btn p-mail-sub-btn--01">パソコン</label>
                        <label for="lb-tab-btn02" class="p-mail-sub-btn p-mail-sub-btn--02">スマートフォン</label>
            </div>


            <div class="p-sub-tab-wrap lb-sub-content01">

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
                                    Gmailの管理画面にログインします。その後、左側のナビゲーションメニューから迷惑メールをクリックして、迷惑メールフォルダに移動します。
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
                                    迷惑メールフォルダから、迷惑メールを解除したいメールをクリックします。
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
                                    迷惑メールフォルダに入ってしまったメールの中のページ上部『迷惑メールではない』か『迷惑メールではない』をクリックして、迷惑メールフォルダにメールが届かないように設定します。
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
                                    Gmailの画面上部にあるメール検索ボックスの下矢印アイコンをクリックします。
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
                                        <span class="p-pc-mail__step u-din-pro-mid c-blue">Step.<span class="p-pc-mail__step-num">02</span></span><span class="p-pc-mail__ttl">フィルタの設定</span>
                                    </p>

                                    <p class="p-pc-mail__desc">
                                        Fromに迷惑メールに入れたくないメールアドレスかドメイン(@以降の部分)を入力します。(今回は当クリニックのドメインの@souki-kai.or.jpを入力)その後、『フィルタを作成』をクリックします。
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
                                    <span class="p-pc-mail__step u-din-pro-mid c-blue">Step.<span class="p-pc-mail__step-num">03</span></span><span class="p-pc-mail__ttl">フィルタの作成</span>
                                </p>

                                <p class="p-pc-mail__desc">
                                    『迷惑メールにしない』をチェックして、『フィルタを作成』をクリックします。
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
                                    <span class="p-pc-mail__step u-din-pro-mid c-blue">Step.<span class="p-pc-mail__step-num">04</span></span><span class="p-pc-mail__ttl">フィルタの確認</span>
                                </p>

                                <p class="p-pc-mail__desc">
                                    Gmailの設定画面の『フィルタとブロック中のアドレス』にフィルタが登録されてれば設定が完了です。
                                </p>
                            </div>
                            <!-- ./texts -->
                        </div>
                        <!-- ./inner -->
                    </li>
            </ul>
 </div>
<!-- ./p-sub-tab-wrap -->

<!-- SP用のフロー -->

 <div class="p-sub-tab-wrap lb-sub-content02">


            <h2 class="u-tc u-fw600 p-mail__ttl u-text-under-line">迷惑メールフォルダから解除</h2>

            <p class="u-tc u-mb50">※Gmailのスマートフォン版では、<br>『迷惑メールフォルダ』からのみの設定解除方法となります。</p>

            <ul class="p-sp-mail">
                    <li class="p-sp-mail__list ">
                    <div class="p-sp-mail__inner l-inner u-flex u-jc-cent u-al-cent">
                            <div class="p-sp-mail__thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mail/gmail_sp_thumb01.jpg" alt="サムネイル">
                            </div>
                            <!-- ./p-pc-mail__thumb -->

                            <div class="p-sp-mail__texts">
                                <p class="p-sp-mail__top">
                                    <span class="p-sp-mail__step u-din-pro-mid c-blue">Step.<span class="p-pc-mail__step-num">01</span></span><span class="p-sp-mail__ttl">メニューボタンをクリック</span>
                                </p>

                                <p class="p-sp-mail__desc">
                                    Gmailのアプリにログインして、画面上部のメニューボタン(3本線のボタン)をクリックします。
                                </p>
                            </div>
                            <!-- ./texts -->
                        </div>
                        <!-- ./inner -->
                    </li>
                     <li class="p-sp-mail__list ">
                    <div class="p-sp-mail__inner l-inner u-flex u-jc-cent u-al-cent">
                            <div class="p-sp-mail__thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mail/gmail_sp_thumb02.jpg" alt="サムネイル">
                            </div>
                            <!-- ./p-pc-mail__thumb -->

                            <div class="p-sp-mail__texts">
                                <p class="p-sp-mail__top">
                                    <span class="p-sp-mail__step u-din-pro-mid c-blue">Step.<span class="p-pc-mail__step-num">02</span></span><span class="p-sp-mail__ttl">迷惑メールフォルダに移動</span>
                                </p>

                                <p class="p-sp-mail__desc">
                                    ナビゲーションメニューを展開したら、『迷惑メール』をクリックして迷惑メールフォルダに移動します。<br class="">その後、迷惑メールフォルダに入るのを阻止したいメールを選択します。
                                </p>
                            </div>
                            <!-- ./texts -->
                        </div>
                        <!-- ./inner -->
                    </li>

                   <li class="p-sp-mail__list ">
                    <div class="p-sp-mail__inner l-inner u-flex u-jc-cent u-al-cent">
                            <div class="p-sp-mail__thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mail/gmail_sp_thumb03.jpg" alt="サムネイル">
                            </div>
                            <!-- ./p-pc-mail__thumb -->

                            <div class="p-sp-mail__texts">
                                <p class="p-sp-mail__top">
                                    <span class="p-sp-mail__step u-din-pro-mid c-blue">Step.<span class="p-pc-mail__step-num">03</span></span><span class="p-sp-mail__ttl">迷惑メール解除</span>
                                </p>

                                <p class="p-sp-mail__desc">
                                   メール内の『迷惑メールではないことを報告』をクリックして、迷惑メールフォルダーにメールが届かないように設定します。
                                </p>
                            </div>
                            <!-- ./texts -->
                        </div>
                        <!-- ./inner -->
                    </li>
            </ul>

 </div>
<!-- ./p-sub-tab-wrap -->



    </div>
    <!-- ./tab__contents01 -->

    <div class="js-tab-contents p-mail-contents">

            <input type="radio" name="tab02" id="lb-tab-btn03" class="u-all-hidden" checked>
            <input type="radio" name="tab02" id="lb-tab-btn04" class="u-all-hidden">
            <div class="p-mail-sub-btn-wrap">
                        <label for="lb-tab-btn03" class="p-mail-sub-btn p-mail-sub-btn--03">パソコン</label>
                        <label for="lb-tab-btn04" class="p-mail-sub-btn p-mail-sub-btn--04">スマートフォン</label>
            </div>

             <div class="p-sub-tab-wrap lb-sub-content03">

      <h2 class="u-tc u-fw600 p-mail__ttl u-text-under-line">迷惑メールフォルダから解除</h2>

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
                                    Yahooメールの管理画面にログインします。そして、左側のナビゲーションメニューから『迷惑メール』を選択して迷惑メールフォルダに移動します。
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
                                    迷惑メールフォルダに入ってしまったメール内の上部にある『迷惑メールではない』をクリックして、迷惑メールフォルダーにメールが届かないように設定します。
                                </p>
                            </div>
                            <!-- ./texts -->
                        </div>
                        <!-- ./inner -->
                    </li>
            </ul>

             <h2 class="u-tc u-fw600 p-mail__ttl u-text-under-line">フィルターの作成</h2>

             <ul class="p-pc-mail">
                    <li class="p-pc-mail__list ">
                    <div class="p-pc-mail__inner l-inner u-flex u-al-cent">
                            <div class="p-pc-mail__thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mail/yahoo_pc_thumb04.jpg" alt="サムネイル">
                            </div>
                            <!-- ./p-pc-mail__thumb -->

                            <div class="p-pc-mail__texts">
                                <p class="p-pc-mail__top">
                                    <span class="p-pc-mail__step u-din-pro-mid c-blue">Step.<span class="p-pc-mail__step-num">01</span></span><span class="p-pc-mail__ttl">メール管理に移動</span>
                                </p>

                                <p class="p-pc-mail__desc">
                                    Yahooメールの管理画面の右端あたりにある、『設定・利用規約』をクリックしてその後表示されるサブメニューの中から、『メールの設定』をクリックします。
                                </p>
                            </div>
                            <!-- ./texts -->
                        </div>
                        <!-- ./inner -->
                    </li>
                     <li class="p-pc-mail__list ">
                    <div class="p-pc-mail__inner l-inner u-flex u-al-cent">
                            <div class="p-pc-mail__thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mail/yahoo_pc_thumb05.jpg" alt="サムネイル">
                            </div>
                            <!-- ./p-pc-mail__thumb -->

                            <div class="p-pc-mail__texts">
                                <p class="p-pc-mail__top">
                                    <span class="p-pc-mail__step u-din-pro-mid c-blue">Step.<span class="p-pc-mail__step-num">02</span></span><span class="p-pc-mail__ttl">フィルターの設定</span>
                                </p>

                                <p class="p-pc-mail__desc">
                                    左側のナビゲーションメニューから、『フィルター』をクリックします。その後フィルター名を入力して、Fromに迷惑メールに入れたくないメールアドレスかドメイン(@以降の部分)を入力します。(今回は当クリニックのドメインの@souki-kai.or.jpを入力)移動先フォルダーのプルダウンを『受信箱』に設定して、最後に『保存』をクリックしてフィルターを作成します。
                                </p>
                            </div>
                            <!-- ./texts -->
                        </div>
                        <!-- ./inner -->
                    </li>
            </ul>

             </div>
            <!-- ./p-sub-tab-wrap -->

            <!-- SP用のフロー -->
             <div class="p-sub-tab-wrap lb-sub-content04">

            <h2 class="u-tc u-fw600 p-mail__ttl u-text-under-line">迷惑メールフォルダから解除</h2>

            <ul class="p-sp-mail">
                    <li class="p-sp-mail__list ">
                    <div class="p-sp-mail__inner l-inner u-flex u-jc-cent u-al-cent">
                            <div class="p-sp-mail__thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mail/yahoo.sp_thumb01.jpg" alt="サムネイル">
                            </div>
                            <!-- ./p-pc-mail__thumb -->

                            <div class="p-sp-mail__texts">
                                <p class="p-sp-mail__top">
                                    <span class="p-sp-mail__step u-din-pro-mid c-blue">Step.<span class="p-pc-mail__step-num">01</span></span><span class="p-sp-mail__ttl">迷惑メールフォルダへ移動</span>
                                </p>

                                <p class="p-sp-mail__desc">
                                    Yahooメールのアプリにログインして、メニュー内の『迷惑メール』をクリックします。
                                </p>
                            </div>
                            <!-- ./texts -->
                        </div>
                        <!-- ./inner -->
                    </li>
                     <li class="p-sp-mail__list ">
                    <div class="p-sp-mail__inner l-inner u-flex u-jc-cent u-al-cent">
                            <div class="p-sp-mail__thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mail/yahoo.sp_thumb02.jpg" alt="サムネイル">
                            </div>
                            <!-- ./p-pc-mail__thumb -->

                            <div class="p-sp-mail__texts">
                                <p class="p-sp-mail__top">
                                    <span class="p-sp-mail__step u-din-pro-mid c-blue">Step.<span class="p-pc-mail__step-num">02</span></span><span class="p-sp-mail__ttl">解除したいメールを選択</span>
                                </p>

                                <p class="p-sp-mail__desc">
                                    迷惑メール一覧から、迷惑メールに入れたくないメールを選択します。
                                </p>
                            </div>
                            <!-- ./texts -->
                        </div>
                        <!-- ./inner -->
                    </li>

                   <li class="p-sp-mail__list ">
                    <div class="p-sp-mail__inner l-inner u-flex u-jc-cent u-al-cent">
                            <div class="p-sp-mail__thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mail/yahoo.sp_thumb03.jpg" alt="サムネイル">
                            </div>
                            <!-- ./p-pc-mail__thumb -->

                            <div class="p-sp-mail__texts">
                                <p class="p-sp-mail__top">
                                    <span class="p-sp-mail__step u-din-pro-mid c-blue">Step.<span class="p-pc-mail__step-num">03</span></span><span class="p-sp-mail__ttl">迷惑メール解除</span>
                                </p>

                                <p class="p-sp-mail__desc">
                                   画面下部の『報告』のボタンをクリックして、迷惑メールフォルダーにメールが届かないように設定します。
                                </p>
                            </div>
                            <!-- ./texts -->
                        </div>
                        <!-- ./inner -->
                    </li>
            </ul>

            <h2 class="u-tc u-fw600 p-mail__ttl u-text-under-line">フィルターの作成</h2>

            <ul class="p-sp-mail">
                    <li class="p-sp-mail__list ">
                    <div class="p-sp-mail__inner l-inner u-flex u-jc-cent u-al-cent">
                            <div class="p-sp-mail__thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mail/yahoo.sp_thumb04.jpg" alt="サムネイル">
                            </div>
                            <!-- ./p-pc-mail__thumb -->

                            <div class="p-sp-mail__texts">
                                <p class="p-sp-mail__top">
                                    <span class="p-sp-mail__step u-din-pro-mid c-blue">Step.<span class="p-pc-mail__step-num">01</span></span><span class="p-sp-mail__ttl">設定画面へ移動</span>
                                </p>

                                <p class="p-sp-mail__desc">
                                    画面左上の歯車のアイコンをクリックして、設定画面に移動します。
                                </p>
                            </div>
                            <!-- ./texts -->
                        </div>
                        <!-- ./inner -->
                    </li>
                     <li class="p-sp-mail__list ">
                    <div class="p-sp-mail__inner l-inner u-flex u-jc-cent u-al-cent">
                            <div class="p-sp-mail__thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mail/yahoo.sp_thumb05.jpg" alt="サムネイル">
                            </div>
                            <!-- ./p-pc-mail__thumb -->

                            <div class="p-sp-mail__texts">
                                <p class="p-sp-mail__top">
                                    <span class="p-sp-mail__step u-din-pro-mid c-blue">Step.<span class="p-pc-mail__step-num">02</span></span><span class="p-sp-mail__ttl">フィルターをクリック</span>
                                </p>

                                <p class="p-sp-mail__desc">
                                    設定画面内のナビゲーションメニューの『フィルター』をクリックします。
                                </p>
                            </div>
                            <!-- ./texts -->
                        </div>
                        <!-- ./inner -->
                    </li>

                   <li class="p-sp-mail__list ">
                    <div class="p-sp-mail__inner l-inner u-flex u-jc-cent u-al-cent">
                            <div class="p-sp-mail__thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mail/yahoo.sp_thumb06.jpg" alt="サムネイル">
                            </div>
                            <!-- ./p-pc-mail__thumb -->

                            <div class="p-sp-mail__texts">
                                <p class="p-sp-mail__top">
                                    <span class="p-sp-mail__step u-din-pro-mid c-blue">Step.<span class="p-pc-mail__step-num">03</span></span><span class="p-sp-mail__ttl">フィルター新規作成</span>
                                </p>

                                <p class="p-sp-mail__desc">
                                  画面右上の『新規』をクリックして、新たにフィルターを作成します。
                                </p>
                            </div>
                            <!-- ./texts -->
                        </div>
                        <!-- ./inner -->
                    </li>
                     <li class="p-sp-mail__list ">
                    <div class="p-sp-mail__inner l-inner u-flex u-jc-cent u-al-cent">
                            <div class="p-sp-mail__thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mail/yahoo.sp_thumb07.jpg" alt="サムネイル">
                            </div>
                            <!-- ./p-pc-mail__thumb -->

                            <div class="p-sp-mail__texts">
                                <p class="p-sp-mail__top">
                                    <span class="p-sp-mail__step u-din-pro-mid c-blue">Step.<span class="p-pc-mail__step-num">04</span></span><span class="p-sp-mail__ttl">フィルターの設定</span>
                                </p>

                                <p class="p-sp-mail__desc">
                                   Fromに迷惑メールに入れたくないメールアドレスかドメイン(@以降の部分)を入力します。(今回は当クリニックのドメインの@souki-kai.or.jpを入力)<br>移動先フォルダーのプルダウンを『メイン』に設定して、その後、フィルター名を入力します。最後に『保存』をクリックしてフィルターを作成します。
                                </p>
                            </div>
                            <!-- ./texts -->
                        </div>
                        <!-- ./inner -->
                    </li>
            </ul>

             </div>
            <!-- ./p-sub-tab-wrap -->

    </div>
    <!-- ./tab__contents02 -->

    <div class="js-tab-contents p-mail-contents">

    <div class="l-inner">
     <h2 class="u-tc u-fw600 p-mail__ttl u-text-under-line">Hotmail・Infoseekメール</h2>

           <p class="p-pc-mail__desc u-tc u-mb50">
           アドレスは「hotmail.com」「infoseek.jp」の他に複数ありますが、Microsoftの<br class="u-pc">「Outlookメール」の使用を前提に解説します。
           </p>

       <h3 class="p-voyage-box__ttl c-ttl-bl-line"><span class="c-ttl-bl-line__text p-voyage-box__ttl-sub">迷惑メールフォルダから解除</span></h3>

         <p class="p-pc-mail__desc u-mb1-5rem">
          迷惑メールフォルダに入ってしまったメールを選択し、『迷惑メールではないメール』をクリックすると受信トレイに移動します。<br class="">また、別の方法では迷惑メールフォルダに入ってしまったメールをクリックして開きます。<br class="">『このメッセージは迷惑メールと認識されました。』と表示されますので、"このメッセージはスパムメールではありません"をクリックすると受信トレイに移動します。
           </p>

             <h3 class="p-voyage-box__ttl c-ttl-bl-line"><span class="c-ttl-bl-line__text p-voyage-box__ttl-sub">信頼できる差出人とドメイン</span></h3>

              <p class="p-pc-mail__desc u-mb50">
         Outlookメールの画面右上にある『歯車のアイコン』をクリックすると、リストが下に表示されますので、リストの下の方にある『全ての設定を表示』をクリックします。画面左側にオプション設定が表示されますので、その中の『迷惑メール』内にある『信頼できる差出人とドメイン』の項目内の『＋追加』をクリックします。<br class="">その中の入力ボックスにメールアドレスかドメインを入力し、Enterキーを押します。その後、その下に入力したメールアドレス・ドメインが表示されましたら登録完了となります。
           </p>

         <!--    <h2 class="u-tc u-fw600 p-mail__ttl u-text-under-line">エキサイトメール</h2>

       <h3 class="p-voyage-box__ttl c-ttl-bl-line"><span class="c-ttl-bl-line__text p-voyage-box__ttl-sub">フィルタリング設定</span></h3>

         <p class="p-pc-mail__desc u-mb1-5rem">
       エキサイトメール画面上にある[環境設定]をクリックし、環境設定画面の[フィルタリング設定]をクリックします。<br class="">[フィルタリングルールの新規追加]の[新規追加]をクリックし、フィルタの新規登録をします。[宛先]となっている所をクリックし、[送信元メールアドレス]を選択します。<br class="">
入力ボックスにメールアドレスを入力（またはコピー&ペースト）して、[を含む場合]に選択、フォルダを[受信箱]に選択、下の[設定を保存]をクリックします。<br class="">
上記設定ができたら、[フィルタリング設定]に表示されます。[フィルタリングを実行]を[する]にし、下の「設定を保存」をクリックします。<br class="">
上に「設定を更新しました。」と表示されたら、設定完了です。<br class="">
           </p> -->
    </div>
    <!-- ./l-inner -->



    </div>
    <!-- ./tab__contents03 -->


</section>


<?php get_footer();?>
