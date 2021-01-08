<?php
/*
Template Name: 唾液採取・抗体検査の手順
*/
?>
<?php get_header();?>





<div class="p-pages-ttl-area --ttl-bg-use u-bg-cover" id="js-pages-head">
        <div class="p-pages-ttl-area__inner --inner-item">
              <div class="p-pages-ttl-area__texts --texts--item-list">
                        <h1 class="p-pages-ttl-area__ttl --ttl--item-list">唾液採取・抗体検査</h1>
                <p class="p-pages-ttl-area__sub">検体の採取と、抗体検査の<br class="">手順について</p>
              </div>
        </div>
</div>


<div class="c-breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>



<section class="p-use-area js-tab-wrap">

        <ul class="p-use-btn">
            <li class="p-use-btn__item p-use-btn__item--btn01 js-tab-btn is-tab-active" id="js-tab-btn01">唾液採取の手順</li>
            <li class="p-use-btn__item p-use-btn__item--btn02 js-tab-btn" id="js-tab-btn02">抗体検査の手順</li>
        </ul>

        <div class="l-inner">

                        <!-- タブコンテンツ01 -->
                        <div class="js-tab-contents p-use-flow-kit is-tab-active" id="js-tab-content01">

                        <div class="p-use-flow-kit__ttl">
                                 <h2 class="c-title-under-circle p-use-flow-kit__ttl-text">唾液採取の手順
                            </h2>
                            <p class="p-use-flow-kit__ttl-note">唾液の採取を行う、30分前から飲食、喫煙、歯磨き、口内洗浄はお控え下さい。</p>
                        </div>
                        <div class="p-flow-list-over">
                            <!--<ul class="p-flow-list">
                                <li class="p-flow-list__item">
                                    <p class="p-flow-list__step c-bdc-use-green">
                                        <span class="p-flow-list__step-text c-bg-use-green">step.<span class="p-flow-list__step-num">01</span></span>
                                    </p>
                                    <h3 class="c-text-use-green p-flow-list__ttl">キットと付属品の確認</h3>
                                    <div class="p-flow-list__thumb">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/use/saliva_take_thumb01.jpg?a7729d12e239877e" alt="">
                                    </div>

                                    <p class="p-flow-list__desc">キット開封前に手を洗い清潔にしてから開封してください。<br class="">開封後は、同梱物の確認をお願い致します。</p>
                                </li>

                                <li class="p-flow-list__item">
                                    <p class="p-flow-list__step c-bdc-use-green">
                                        <span class="p-flow-list__step-text c-bg-use-green">step.<span class="p-flow-list__step-num">02</span></span>
                                    </p>
                                    <h3 class="c-text-use-green p-flow-list__ttl">唾液の採取</h3>
                                    <div class="p-flow-list__thumb">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/use/saliva_take_thumb02.jpg?a7729d12e239877e" alt="">
                                    </div>

                                    <p class="p-flow-list__desc">舌の先を器具の上部に押し付け、ゆっくり唾液を吐き出します。<br class="">採取ライン（FILL TO）まで唾液（1ml）を充填して下さい。<br class="">なお、唾液中の泡は量としてみなさないで下さい。</p>
                                </li>

                                <li class="p-flow-list__item">
                                    <p class="p-flow-list__step c-bdc-use-green">
                                        <span class="p-flow-list__step-text c-bg-use-green">step.<span class="p-flow-list__step-num">03</span></span>
                                    </p>
                                    <h3 class="c-text-use-green p-flow-list__ttl">保存液の添加</h3>
                                    <div class="p-flow-list__thumb">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/use/saliva_take_thumb03.jpg?a7729d12e239877e" alt="">
                                    </div>

                                    <p class="p-flow-list__desc">採取キットを垂直に持ち、ファネルのふた部分<br class="">(不活化保存液)をしっかりと閉めます。<br class="">閉めるとチューブ内に不活化保存液が入り、唾液と混ざります。</p>
                                </li>

                                <li class="p-flow-list__item">
                                    <p class="p-flow-list__step c-bdc-use-green">
                                        <span class="p-flow-list__step-text c-bg-use-green">step.<span class="p-flow-list__step-num">04</span></span>
                                    </p>
                                    <h3 class="c-text-use-green p-flow-list__ttl">ファネルの取り外し</h3>
                                    <div class="p-flow-list__thumb">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/use/saliva_take_thumb04.jpg?a7729d12e239877e" alt="">
                                    </div>

                                    <p class="p-flow-list__desc">チューブを縦に持ち、上のファネル部分を取り外します。<br class="">次の工程に進む前に必ずファネルは取り外してください。</p>
                                </li>

                                <li class="p-flow-list__item">
                                    <p class="p-flow-list__step c-bdc-use-green">
                                        <span class="p-flow-list__step-text c-bg-use-green">step.<span class="p-flow-list__step-num">05</span></span>
                                    </p>
                                    <h3 class="c-text-use-green p-flow-list__ttl">キャップを締め、名前の記入</h3>
                                    <div class="p-flow-list__thumb">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/use/saliva_take_thumb05.jpg?a7729d12e239877e" alt="">
                                    </div>

                                    <p class="p-flow-list__desc">チューブのキャップをしっかりと締めて下さい。<br class="">チューブに(FILL TO)と記載されている下の余白にお名前を、油性マジックでご記入をお願い致します。</p>
                                </li>

                                <li class="p-flow-list__item">
                                    <p class="p-flow-list__step c-bdc-use-green">
                                        <span class="p-flow-list__step-text c-bg-use-green">step.<span class="p-flow-list__step-num">06</span></span>
                                    </p>
                                    <h3 class="c-text-use-green p-flow-list__ttl">不活化保存液と唾液を混ぜる</h3>
                                    <div class="p-flow-list__thumb">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/use/saliva_take_thumb06.jpg?a7729d12e239877e" alt="">
                                    </div>

                                    <p class="p-flow-list__desc"><span class="p-flow-list__desc-red">唾液漏れを防ぐため、キャップが完全に閉まっている事を確認してから振り混ぜてください。</span><br class="">おおよそ10秒間ほど振り、不活化保存液と唾液を混ぜます。</p>
                                </li>-->



                            <ul class="p-flow-list">
                                <li class="p-flow-list__item">
                                    <p class="p-flow-list__step c-bdc-use-green">
                                        <span class="p-flow-list__step-text c-bg-use-green">step.<span class="p-flow-list__step-num">01</span></span>
                                    </p>
                                    <h3 class="c-text-use-green p-flow-list__ttl">キットと付属品の確認</h3>
                                    <div class="p-flow-list__thumb">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/use/saliva2_take_thumb01.jpg?a7729d12e239877esaaaasss" alt="">
                                    </div>

                                    <p class="p-flow-list__desc">キット開封前に手を洗い清潔にしてから開封してください。<br class="">開封後は、同梱物の確認をお願い致します。</p>
                                </li>

                                <li class="p-flow-list__item">
                                    <p class="p-flow-list__step c-bdc-use-green">
                                        <span class="p-flow-list__step-text c-bg-use-green">step.<span class="p-flow-list__step-num">02</span></span>
                                    </p>
                                    <h3 class="c-text-use-green p-flow-list__ttl">ファネル取付・唾液採取</h3>
                                    <div class="p-flow-list__thumb">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/use/saliva2_take_thumb02.jpg?a7729d12e239877esaaaasss" alt="">
                                    </div>

                                    <p class="p-flow-list__desc">コレクションチューブにファネルを取り付け唾液の採取を行います。<br class="">
舌の先を器具の上部に押し付け、ゆっくり唾液を吐き出します。<br class="">
唾液は2mlの目盛まで充填して下さい。<br class="">
※唾液中の泡は量として見なさないで下さい。</p>
                                </li>

                                <li class="p-flow-list__item">
                                    <p class="p-flow-list__step c-bdc-use-green">
                                        <span class="p-flow-list__step-text c-bg-use-green">step.<span class="p-flow-list__step-num">03</span></span>
                                    </p>
                                    <h3 class="c-text-use-green p-flow-list__ttl">不活化保存液の添加</h3>
                                    <div class="p-flow-list__thumb">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/use/saliva2_take_thumb03.jpg?a7729d12e239877esaaaasss" alt="">
                                    </div>

                                    <p class="p-flow-list__desc">不活化保存液をチューブに添加します。<br class="">
この時ボトルに入っている不活化保存液は全て注いで下さい。</p>
                                </li>

                                <li class="p-flow-list__item">
                                    <p class="p-flow-list__step c-bdc-use-green">
                                        <span class="p-flow-list__step-text c-bg-use-green">step.<span class="p-flow-list__step-num">04</span></span>
                                    </p>
                                    <h3 class="c-text-use-green p-flow-list__ttl">ファネルの取り外し</h3>
                                    <div class="p-flow-list__thumb">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/use/saliva2_take_thumb04.jpg?a7729d12e239877esaaaasss" alt="">
                                    </div>

                                    <p class="p-flow-list__desc">チューブを縦に持ち、上のファネル部分を取り外します。<br class="">次の工程に進む前に必ずファネルは取り外してください。</p>
                                </li>


                                <li class="p-flow-list__sq p-code u-tc">
                                    <p class="u-fw600 p-code__desc">step.04以降の手順はお手元に届いている<br class="">検査結果確認申込書・問診票に<br class="u-sp">よって異なります。<br class="">ご確認の上、該当の物を選択し案内に従って採取を行ってください。</p>

                                    <div class="u-flex p-code__row u-fw600">
                                        <dl class="p-application">
                                            <dt class="p-application__thumb">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/use/application01.jpg" alt="申込書バーコードシール無し">
                                            </dt>
                                            <dd class="p-application__desc">
                                            バーコード<br class="u-sp">シール無し
                                            </dd>
                                        </dl>
                                        <dl class="p-application">
                                            <dt class="p-application__thumb">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/use/application02.jpg" alt="申込書バーコードシール有り">
                                            </dt>
                                            <dd class="p-application__desc">
                                            バーコード<br class="u-sp">シール有り
                                            </dd>
                                        </dl>
                                    </div>
                                    <!-- ./row -->
                                </li>
                            </ul>


                                <div class="p-use-sub-tab">
                                <input type="radio" name="sub-tab" class="u-all-hidden" id="sub-tab01" checked>
                                <input type="radio" name="sub-tab" class="u-all-hidden" id="sub-tab02">
                                    <div class="p-use-sub-btn u-flex">

                                        <label for="sub-tab01" class="p-use-sub-btn__item p-use-sub-btn__item--tab01">バーコードシールが付属していない方はこちら</label>

                                        <label for="sub-tab02" class="p-use-sub-btn__item p-use-sub-btn__item--tab02">バーコードシールが付属している方はこちら</label>
                                    </div>

                                    <div class="p-use-sub-contents p-use-sub-contents--01" id="sub-tab-contents01">
                                            <ul class="p-flow-list">
                                                <li class="p-flow-list__item p-flow-list__item--sub">
                                                    <p class="p-flow-list__step c-bdc-use-green">
                                                        <span class="p-flow-list__step-text c-bg-use-green">step.<span class="p-flow-list__step-num">05</span></span>
                                                    </p>
                                                    <h3 class="c-text-use-green p-flow-list__ttl">キャップを締め、名前の記入</h3>
                                                    <div class="p-flow-list__thumb">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/img/use/saliva2_take_thumb05.jpg?a7729d12e239877esaaaasss" alt="">
                                                    </div>
                                                    <p class="p-flow-list__desc">チューブのキャップをしっかりと締めて下さい。チューブに(FILL TO)と記載されている下の余白にお名前を、油性マジックでご記入をお願い致します。</p>
                                                </li>
                                                <li class="p-flow-list__item p-flow-list__item--sub u-sp-mb0">
                                                    <p class="p-flow-list__step c-bdc-use-green">
                                                        <span class="p-flow-list__step-text c-bg-use-green">step.<span class="p-flow-list__step-num">06</span></span>
                                                    </p>
                                                    <h3 class="c-text-use-green p-flow-list__ttl">不活化保存液と唾液を混ぜる</h3>
                                                    <div class="p-flow-list__thumb">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/img/use/saliva2_take_thumb06.jpg?a7729d12e239877esaaaasss" alt="">
                                                    </div>

                                                    <p class="p-flow-list__desc"><span class="p-flow-list__desc-red">唾液漏れを防ぐため、キャップが完全に閉まっている事を確認してから振り混ぜてください。</span><br class="">おおよそ10秒間ほど振り、不活化保存液と唾液を混ぜます。</p>
                                                </li>
                                            </ul>
                                    </div>
                                    <!-- ./tab01 -->

                                    <div class="p-use-sub-contents p-use-sub-contents--02" id="sub-tab-contents02">
  <ul class="p-flow-list">
                                    <li class="p-flow-list__item p-flow-list__item--sub">
                                                    <p class="p-flow-list__step c-bdc-use-orange">
                                                        <span class="p-flow-list__step-text c-bg-orange02">step.<span class="p-flow-list__step-num">05</span></span>
                                                    </p>
                                                    <h3 class="c-text-use-orange p-flow-list__ttl p-flow-list__ttl--height p-flow-list__ttl--text-left ">キャップを締めて<br class="">バーコードシールの貼り付け</h3>
                                                    <div class="p-flow-list__thumb">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/img/use/code_thumb01.jpg?a7729d12e239877esaaaasss" alt="">
                                                    </div>
                                                    <p class="p-flow-list__desc">チューブのキャップをしっかりと締めてください。<br class="">チューブの白色の枠内に、検査結果確認申込書に貼り付けられているバーコードシールの貼り付けをお願い致します。<br><br>
                                                <span class="p-flow-list__desc-red">バーコードシールの貼り付けを忘れずに行ってください。<br class="">向きは必ず縦向きで貼ってください。横向きで貼り付ける、シールにシワやヨレがありますと、バーコードの読み取りが出来ず、検査が行えません。<br class="">予め、ご注意ください。</span>
                                                </p>
                                                </li>
                                                <li class="p-flow-list__item p-flow-list__item--sub">
                                                    <p class="p-flow-list__step c-bdc-use-orange">
                                                        <span class="p-flow-list__step-text c-bg-orange02">step.<span class="p-flow-list__step-num">06</span></span>
                                                    </p>
                                                    <h3 class="c-text-use-orange p-flow-list__ttl--height p-flow-list__ttl">不活化保存液と唾液を混ぜる</h3>
                                                    <div class="p-flow-list__thumb">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/img/use/code_thumb02.jpg?a7729d12e239877esaaaasss" alt="">
                                                    </div>

                                                    <p class="p-flow-list__desc"><span class="p-flow-list__desc-red">唾液漏れを防ぐため、キャップが完全に閉まっている事を確認してから振り混ぜてください。</span><br class="">おおよそ10秒間ほど振り、不活化保存液と唾液を混ぜます。</p>
                                                </li>

                                                 <li class="p-flow-list__item p-flow-list__item--sub u-sp-mb0">
                                                    <p class="p-flow-list__step c-bdc-use-orange">
                                                        <span class="p-flow-list__step-text c-bg-orange02">step.<span class="p-flow-list__step-num">07</span></span>
                                                    </p>
                                                    <h3 class="c-text-use-orange p-flow-list__ttl--height p-flow-list__ttl">マイページへの登録 <span class="p-flow-list__recom">推奨</span></h3>
                                                    <div class="p-flow-list__thumb">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/img/use/code_thumb03.jpg?a7729d12e239877esaaaasss" alt="">
                                                    </div>

                                                    <p class="p-flow-list__desc">検体到着通知、検査結果通知のご連絡をメールにてご希望の方は検査結果確認申込書上部QRコードから、マイページ登録をお願い致します。</p>

                                                    <p class="p-flow-list__desc-sub">※検査結果確認申込書へ直接記入された場合、情報の登録にお時間を要します。予めご了承ください。</p>
                                                </li>
</ul>

                                    </div>
                                     <!-- ./tab02 -->

                                </div>
                                <!-- ./タブの中のタブt -->

                        </div>
                        <!-- ./p-flow-list-over -->

                            <img src="<?php echo get_template_directory_uri(); ?>/img/use/bottom_arw.png?a7729d12e239877e" alt="" class="u-pc-display p-flow-to-bottom">



                            <p class="p-flow-bottom-text c-bdc-use-green">
検体の採取終了後、<br class="u-sp">患者様自身で梱包して頂き当院まで<br class="u-sp">ご返送をお願い致します。<br class="">詳しい梱包手順は同封されている<br class="u-sp"><span class="c-text-use-green">「PCR検査の唾液検体採取の流れ」</span><br class="u-sp">裏面をご参照下さい。
                            </p>

                        </div>
                        <!-- ./p-use-flow  js-tab-contents-->
                        <!-- タブコンテンツ01　END -->


                         <!-- タブコンテンツ02 -->
                        <div class="js-tab-contents p-use-flow-kit" id="js-tab-content02">

                        <div class="p-use-flow-kit__ttl">
                                 <h2 class="c-title-under-circle p-use-flow-kit__ttl-text">抗体検査の手順
                            </h2>
                        </div>
                        <div class="p-flow-list-over">
                            <ul class="p-flow-list">
                                <li class="p-flow-list__item">
                                    <p class="p-flow-list__step c-bdc-use-blue">
                                        <span class="p-flow-list__step-text c-bg-use-blue">step.<span class="p-flow-list__step-num">01</span></span>
                                    </p>
                                    <h3 class="c-text-use-blue p-flow-list__ttl">キットと付属品の確認</h3>
                                    <div class="p-flow-list__thumb">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/use/antibodies_taken_thumb01.jpg?a7729d12e239877e" alt="">
                                    </div>

                                    <p class="p-flow-list__desc">キット開封前に手を洗い清潔にしてから開封してください。<br class="">開封後は、同梱物の確認をお願い致します。</p>
                                </li>

                                <li class="p-flow-list__item">
                                    <p class="p-flow-list__step c-bdc-use-blue">
                                        <span class="p-flow-list__step-text c-bg-use-blue">step.<span class="p-flow-list__step-num">02</span></span>
                                    </p>
                                    <h3 class="c-text-use-blue p-flow-list__ttl">キットの開封</h3>
                                    <div class="p-flow-list__thumb">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/use/antibodies_taken_thumb02.jpg?a7729d12e239877e" alt="">
                                    </div>

                                    <p class="p-flow-list__desc">検査カセットを袋から取り出し、平らな面に置いてください。</p>
                                </li>

                                <li class="p-flow-list__item">
                                    <p class="p-flow-list__step c-bdc-use-blue">
                                        <span class="p-flow-list__step-text c-bg-use-blue">step.<span class="p-flow-list__step-num">03</span></span>
                                    </p>
                                    <h3 class="c-text-use-blue p-flow-list__ttl">採血部位の消毒</h3>
                                    <div class="p-flow-list__thumb">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/use/antibodies_taken_thumb03.jpg?a7729d12e239877e" alt="">
                                    </div>

                                    <p class="p-flow-list__desc">任意の指の腹（採血部位）を手指用消毒綿でよく拭いてください。<br class="">消毒が終わりましたら、十分乾燥させてください。</p>

                                    <p class="p-flow-list__desc-sub">※アルコールアレルギーなどの方は洗剤などで指の腹<br class="">を清潔にしてください。</p>
                                </li>

                                <li class="p-flow-list__item">
                                    <p class="p-flow-list__step c-bdc-use-blue">
                                        <span class="p-flow-list__step-text c-bg-use-blue">step.<span class="p-flow-list__step-num">04</span></span>
                                    </p>
                                    <h3 class="c-text-use-blue p-flow-list__ttl">採血の準備</h3>
                                    <div class="p-flow-list__thumb">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/use/antibodies_taken_thumb04.jpg?a7729d12e239877e" alt="">
                                    </div>

                                    <p class="p-flow-list__desc">ランセットのキャップを外し、指をテーブルなどの平らな面に押し当てランセットを押し込みます。<br class=""><span class="p-flow-list__desc-red">一度使用したランセットは再使用ができないのでご注意ください。</span><br class="">穿刺完了後、指の付け根から爪に向かってマッサージを行い、血を出し、自然に出てきた最初の血は付属の手指用消毒綿で拭き取って下さい。</p>
                                </li>

                                <li class="p-flow-list__item">
                                    <p class="p-flow-list__step c-bdc-use-blue">
                                        <span class="p-flow-list__step-text c-bg-use-blue">step.<span class="p-flow-list__step-num">05</span></span>
                                    </p>
                                    <h3 class="c-text-use-blue p-flow-list__ttl">採血</h3>
                                    <div class="p-flow-list__thumb">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/use/antibodies_taken_thumb05.jpg?a7729d12e239877e" alt="">
                                    </div>

                                    <p class="p-flow-list__desc">手指用消毒綿で拭き取った後に出てきた血液を検査用の検体として使用します。<br class="">指の付根から爪にかけてマッサージを行い、<br class="">指の腹を強く押し血溜まりを作ります。<br class="">付属のスポイトの膨らんでいる部位を強く押し潰し、空気が混入しないように気をつけ、血液約1滴分を採取してください。</p>
                                </li>

                                <li class="p-flow-list__item">
                                    <p class="p-flow-list__step c-bdc-use-blue">
                                        <span class="p-flow-list__step-text c-bg-use-blue">step.<span class="p-flow-list__step-num">06</span></span>
                                    </p>
                                    <h3 class="c-text-use-blue p-flow-list__ttl">血液をカセットに滴下</h3>
                                    <div class="p-flow-list__thumb">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/use/antibodies_taken_thumb06.jpg?a7729d12e239877e" alt="">
                                    </div>

                                    <p class="p-flow-list__desc">水平な面に置いてあるカセットの、注入部「Ｓ」に血液を1滴、滴下します。</p>
                                </li>

                                <li class="p-flow-list__item">
                                    <p class="p-flow-list__step c-bdc-use-blue">
                                        <span class="p-flow-list__step-text c-bg-use-blue">step.<span class="p-flow-list__step-num">07</span></span>
                                    </p>
                                    <h3 class="c-text-use-blue p-flow-list__ttl">検査液をカセットに滴下</h3>
                                    <div class="p-flow-list__thumb">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/use/antibodies_taken_thumb07.jpg?a7729d12e239877e" alt="">
                                    </div>

                                    <p class="p-flow-list__desc">検査液を、注入部「Ｓ」に慎重に滴下します。<br class="">検査液は2滴垂らしてください。<br class="">薬液を垂らす時はカセット本体との間隔をあけ、しっかり2滴垂れている事を確認して下さい。</p>
                                </li>

                                 <li class="p-flow-list__item">
                                    <p class="p-flow-list__step c-bdc-use-blue">
                                        <span class="p-flow-list__step-text c-bg-use-blue">step.<span class="p-flow-list__step-num">08</span></span>
                                    </p>
                                    <h3 class="c-text-use-blue p-flow-list__ttl">検査結果の判定</h3>
                                    <div class="p-flow-list__thumb">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/use/antibodies_taken_thumb08.jpg?a7729d12e239877e" alt="">
                                    </div>

                                    <p class="p-flow-list__desc">血液と薬液をカセットに滴下しましたら、水平な面に置き、結果の判定が出るまで動かさないでください。<br class="">検査結果は約15分後に表示されます。</p>
                                    <p class="p-flow-list__desc-sub">※規定量の薬液が充填されているとCの隣に赤いラインが浮かび上がります。</p>
                                </li>
                            </ul>
                        </div>
                        <!-- ./p-flow-list-over -->

                            <img src="<?php echo get_template_directory_uri(); ?>/img/use/bottom_arw.png?a7729d12e239877e" alt="" class="u-pc-display p-flow-to-bottom p-flow-to-bottom--anti01">

                            <img src="<?php echo get_template_directory_uri(); ?>/img/use/bottom_arw.png?a7729d12e239877e" alt="" class="u-pc-display p-flow-to-bottom p-flow-to-bottom--anti02">

                            <div class="p-flow-result">

                                <h3 class="c-bg-use-blue p-flow-result__ttl">結果の確認</h3>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/use/result.jpg?a7729d12e239877e" alt="" class="u-pc-display p-flow-result__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/use/result_sp.jpg?a7729d12e239877e" alt="" class="u-sp-display p-flow-result__img">

                                <p class="p-flow-result__note">※抗体検査は、あくまで目安としての<br class="u-sp">検査結果となりますので、<br class="u-sp">PCR検査と一緒に受ける事により<br class="u-sp">検査の信頼性が上がります。</p>

                                <p class="p-flow-result__note">※表示される線はお体の状態によっては<br class="u-sp">くっきりと表示されない場合もございます。</p>

                                <p class="p-flow-result__note">※医療品医療機器法に基づく体外診断薬用医薬品として<br class="u-sp">承認・認証等を受けておりません。<br class="">また、陽性結果が出た場合、新型コロナウィルスに再感染しないことを証明するものではありません。</p>

                            </div>
                            <!-- ./p-flow-result -->

                        </div>
                        <!-- ./p-use-flow  js-tab-contents-->
                        <!-- タブコンテンツ02　END -->

        </div>
        <!-- ./l-inner -->
</section>



<section class="p-clinic-info u-bg-cover" id="link-clinic">
    <div class="l-access-inner">
        <div class="p-clinic-info-row">
            <div class="p-clinic-info-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/common/c_header_logo.png?6dbddba84c650683" alt="感染症検査クリニック">
            </div>
            <!-- ./p-clinic-info-logo -->
            <div class="p-clinic-info-right">
                <h3 class="p-clinic-info-right__ttl">アクセス</h3>
                <p class="p-clinic-info-right__address">〒542-0086　大阪府大阪市中央区西心斎橋2-13-16 <br>おおきに西心斎橋BirthPlaceビル　3階</p>
                <a href="<?php echo home_url( '/' ); ?>tel/new-tel.html" class="p-clinic-info-right__tel" target="_blank"><span class="p-clinic-info-right__tel-sq">個人</span>
                <span class="p-clinic-info-right__tel-num">0120-936-760</span></a>
                  <a href="<?php echo home_url( '/' ); ?>tel/campany.html" class="p-clinic-info-right__tel" target="_blank"><span class="p-clinic-info-right__tel-sq">企業・団体</span><span class="p-clinic-info-right__tel-num">06-4708-8082</span></a>
                <p class="p-clinic-info-right__guide">FAX : 06-4708-8105<br>受付時間<br>個人：9:00～18:00  企業・団体：9:00～19:00 不定休</p>
                <!--<p class="p-clinic-info-right__guide"><span class="u-text-under-line">※日・祝日は電話受付を休止しております。</span></p>-->
                <p class="p-clinic-info-right__guide-sub">直接、ご来院する場合は感染対策の都合上、<br class="u-sp">事前にご連絡ください。<br>
                <span style="color:red;">新型コロナウイルス感染疑いの症状がある方は入室できません。
                <!-- また、発熱や味覚障害、感染者との濃厚接触など感染が疑われる症状がある方の受診は行っておりません。 --></span></p>
            </div>
        </div>
    </div>
</section>



<?php get_footer();?>


<script>


 jQuery(function ($) {

    var url = location.protocol + "//" + location.host + location.pathname + location.search;
    var params = url.split('?');
    console.log(params);
    var paramms = params.length > 1 && params[1].split('&');
    var paramArray = [];
    console.log(paramArray);
    for (var i = 0; i < paramms.length; i++) {
      var vl = paramms[i].split('=');
      paramArray.push(vl[0]);
      paramArray[vl[0]] = vl[1];

      var terms = vl[1];
      console.log(terms);

      if(terms) {
        if (terms == "01") {
            $(".js-tab-btn").removeClass("is-tab-active");
            $(".js-tab-contents").removeClass("is-tab-active");
            $("#js-tab-btn01").addClass("is-tab-active");
            $("#js-tab-content01").addClass("is-tab-active");
        }

         if (terms == "02") {
          $(".js-tab-btn").removeClass("is-tab-active");
           $(".js-tab-contents").removeClass("is-tab-active");
           $("#js-tab-btn02").addClass("is-tab-active");
           $("#js-tab-content02").addClass("is-tab-active");
        }
      }
    }
  });

</script>
