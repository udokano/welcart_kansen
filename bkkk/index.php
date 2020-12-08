<?php get_header(); ?>


<?php $locale = get_locale();  ?>

<?php if ('ja' == $locale): ?>


<div class="p-key-visual">
    <div class="l-inner p-key-visual__inner">
            <div class="p-key-visual__text-wrap">
                                <div class="p-key-visual__text-left">
                                    <h1 class="p-key-visual__ttl">
                                        <span class="p-key-visual__ttl-sub">新型コロナウィルス</span>PCR検査
                                    </h1>
                                </div>
                                <!-- ./p-key-visual__text-left -->

                                <div class="p-key-visual__text-right u-f-ryu">
                                    希望ある<span class="p-key-visual__text-catch">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/front/fv_catch_text.png?6dbddba84c650683" alt="未来へ繋ぐために">
                                    </span><br>検体検査から<br>私達に出来る事を始めています
                                </div>
                                <!-- ./p-key-visual__text-right -->
            </div>
            <!-- ./p-key-visual__text-wrap -->
            <ul class="p-fv-menu">
                <li class="p-fv-menu__list-large">
                    <a href="#link-free-inspection" class="">
 <img src="<?php echo get_template_directory_uri(); ?>/img/front/fv_menu01.jpg?6dbddba84c650683" alt="児童・医療従事者の無償検査PCR無償検査を通じて子供達を守り、医療従事者を支えております。" class="u-pc">
  <img src="<?php echo get_template_directory_uri(); ?>/img/front/fv_menu01_sp.jpg?6dbddba84c650683" alt="児童・医療従事者の無償検査PCR無償検査を通じて子供達を守り、医療従事者を支えております。" class="u-sp">
                    </a>
                </li>
                <li class="p-fv-menu__list-small">
                    <div class="p-fv-menu__list-img-row02">
                        <a href="<?php echo home_url( '/' ); ?>group-form" >
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/fv_menu02.jpg?6dbddba84c650683" alt="企業・団体検査企業様・団体様の一斉検査のご案内です。" class="u-pc">
                              <img src="<?php echo get_template_directory_uri(); ?>/img/front/fv_menu02_sp.jpg?6dbddba84c650683" alt="企業・団体検査企業様・団体様の一斉検査のご案内です。" class="u-sp">
                        </a>
                    </div>
                    <!-- ./p-fv-menu-list-small -->

                     <div class="p-fv-menu__list-img-row02">
                        <a href="#link-inspection-personal" >
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/fv_menu03.jpg?6dbddba84c650683" alt="個人検査海外渡航等に必要な証明書の発行も行っております。" class="u-pc">
                             <img src="<?php echo get_template_directory_uri(); ?>/img/front/fv_menu03_sp.jpg?6dbddba84c650683" alt="個人検査海外渡航等に必要な証明書の発行も行っております。" class="u-sp">
                        </a>
                    </div>
                      <!-- ./p-fv-menu-list-small -->
                </li>
            </ul>
    </div>
    <!-- ./l-inner -->
</div>
<!-- ./key-visual -->

<section class="p-cost p-cost--top">
    <div class="l-inner">
        <h2 class="c-ttl-under-center p-cost__ttl c-blue">検査費用</h2>
        <p class="p-cost__desc c-blue">検査キット、郵送、採取案内、検査実施を含むお値段です。</p>

        <dl class="p-cost-price u-mb10">
                <dt class="p-cost-price__name p-cost-price__name--1st"><span class="p-cost-price__name-in">PCR検査</span></dt>
                <dd class="p-cost-price__text p-cost-price__text--1st"><span class="p-cost-price__text-main"><!-- 18,000 -->9,000</span><span class="p-cost-price__text-sub">円(税別)</span></dd>
        </dl>
       <!--   <dl class="p-cost-price  u-mb10">
                <dt class="p-cost-price__name"><span class="p-cost-price__name-in">PCR検査 <br class="u-sp">5回セット</span></dt>
                <dd class="p-cost-price__text"><span class="p-cost-price__text-main">1回あたり 11,840</span><span class="p-cost-price__text-sub">円(税別)</span>
                <div class="aaaaa" style="padding-top:10px;">合計 59,200円(税別)</div>
                </dd>
        </dl> -->

        <dl class="p-cost-price  u-mb10">
                <dt class="p-cost-price__name p-cost-price__name--1st"><span class="p-cost-price__name-in">PCR検査 <br class="u-sp">10回セット</span></dt>
                <dd class="p-cost-price__text p-cost-price__text p-cost-price__text--1st"><span class="p-cost-price__text-main">1回あたり 8,000</span><span class="p-cost-price__text-sub">円(税別)</span>
               <div class="aaaaa" style="padding-top:10px;">合計 80,000円(税別)</div></dd>
        </dl>

         <dl class="p-cost-price u-mb10">
                <dt class="p-cost-price__name p-cost-price__name--2st"><span class="p-cost-price__name-in">PCR迅速検査</span></dt>
                <dd class="p-cost-price__text p-cost-price__text--2st"><span class="p-cost-price__text-main">9,000+3,000</span><span class="p-cost-price__text-sub">円(税別)</span><div class="aaaaa" style="padding-top:10px;">速達でのご対応、<br class="u-sp">優先的に検査いたします。</div></dd>
        </dl>



       <!--  PCR迅速検査　+　陰性　　　　PCR迅速検査　+　10セット　+30000 -->


        <dl class="p-cost-price u-mb10">
                <dt class="p-cost-price__name p-cost-price__name--2st"><span class="p-cost-price__name-in">PCR迅速検査<br class="u-sp">10回セット</span></dt>
                <dd class="p-cost-price__text p-cost-price__text--2st"><span class="p-cost-price__text-main">80,000+30,000</span><span class="p-cost-price__text-sub">円(税別)</span><div class="aaaaa" style="padding-top:10px;">速達でのご対応、<br class="u-sp">優先的に検査いたします。</div>
           <!--  <div class="aaaaa" style="padding-top:10px;">合計 11,000円(税別)</div> -->
            </dd>
        </dl>


         <dl class="p-cost-price u-mb10">
                <dt class="p-cost-price__name p-cost-price__name--3st"><span class="p-cost-price__name-in"><!-- PCR検査+<br class=""> -->陰性証明書</span></dt>
                <dd class="p-cost-price__text p-cost-price__text--3st"><span class="p-cost-price__text-main">+5,000</span><span class="p-cost-price__text-sub">円(税別)</span><!-- <div class="aaaaa" style="padding-top:10px;">速達でのご対応、<br class="u-sp">優先的に検査いたします。</div> -->
                   <!--  <div class="aaaaa" style="padding-top:10px;">合計 8,000円(税別)</div> -->
            </dd>
        </dl>



      <!--   <dl class="p-cost-price  u-mb10">
                <dt class="p-cost-price__name"><span class="p-cost-price__name-in">PCR検査 <br class="u-sp">100回セット</span></dt>
                <dd class="p-cost-price__text"><span class="p-cost-price__text-main">1回あたり 7,500</span><span class="p-cost-price__text-sub">円(税別)</span>
               <div class="aaaaa" style="padding-top:10px;">合計 750,000円(税別)</div></dd>
        </dl>

        <dl class="p-cost-price  u-mb10">
                <dt class="p-cost-price__name"><span class="p-cost-price__name-in">PCR検査 <br class="u-sp">500回セット</span></dt>
                <dd class="p-cost-price__text"><span class="p-cost-price__text-main">1回あたり 7,000</span><span class="p-cost-price__text-sub">円(税別)</span>
               <div class="aaaaa" style="padding-top:10px;">合計 3,500,000円(税別)</div></dd>
        </dl>

        <dl class="p-cost-price  u-mb10">
                <dt class="p-cost-price__name"><span class="p-cost-price__name-in">PCR検査 <br class="u-sp">1000回セット</span></dt>
                <dd class="p-cost-price__text"><span class="p-cost-price__text-main">1回あたり 6,500</span><span class="p-cost-price__text-sub">円(税別)</span>
               <div class="aaaaa" style="padding-top:10px;">合計 6,500,000円(税別)</div></dd>
        </dl>

        <dl class="p-cost-price  u-mb10">
                <dt class="p-cost-price__name"><span class="p-cost-price__name-in">PCR検査 <br class="u-sp">5000回セット</span></dt>
                <dd class="p-cost-price__text"><span class="p-cost-price__text-main">1回あたり 6,000</span><span class="p-cost-price__text-sub">円(税別)</span>
               <div class="aaaaa" style="padding-top:10px;">合計 30,000,000円(税別)</div></dd>
        </dl>
 -->


        <p class="p-cost__under-desc">当院のPCR 検査は希望する方皆様を対象にした検査のため、自由診療となります。<br>「渡航歴があり体調が優れない」「感染者との濃厚接触歴があり<br class="aaaaa">体調が優れない」方など、行政検査条件を満たす方は自治体管轄の施設で<br class="u-pc">保険診療としてお受けできる場合がございますので、お住まい地域の保健所のご相談窓口へご相談ください。</p>


        <a href="<?php echo home_url( '/' ); ?>item-list" class="c-btn p-cost-btn">購入・お申込みはこちら</a>

            <!-- キャンペーンバナー -->
       <!--  <div class="p-cap">
            <img src="<?php echo get_template_directory_uri(); ?>/img/common/cap_bnr.jpg?0825" alt="期間限定8/31(月)まで期間限定でお試ししやすい価格でご提供させていただきます。" class="u-pc">

            <img src="<?php echo get_template_directory_uri(); ?>/img/common/cap_bnr_sp.jpg?0825" alt="期間限定8/31(月)まで期間限定でお試ししやすい価格でご提供させていただきます。" class="u-sp">
        </div> -->
        <!-- ./p-cap -->
    </div>
    <!-- ./l-inner -->
</section>

<!-- <section class="p-top-menu-area">
   <div class="l-inner p-top-menu-area__inner">
       <h2 class="u-f-ryu p-top-menu-area__ttl">当院のPCR検査</h2>
       <ul class="p-pcr-slide" id="js-pcr-slide">
           <li class="p-pcr-slide__item">
               <p class="p-pcr-slide__ttl">万全の準備で検体輸送</p>
               <p class="p-pcr-slide__desc">検体の回収、運搬は検体輸送を専門とする会社を通じて、徹底した感染対策のもと、厳密な管理体制で行われます。</p>
           </li>
             <li class="p-pcr-slide__item">
               <p class="p-pcr-slide__ttl">唾液採取のみでOK</p>
               <p class="p-pcr-slide__desc">最新のPCRでは、唾液でも鼻咽頭の粘液と同等のレベルで検査が可能になっています。</p>
           </li>
           <li class="p-pcr-slide__item">
               <p class="p-pcr-slide__ttl">1日600人を検査可能</p>
               <p class="p-pcr-slide__desc">まずは東京、名古屋、大阪、福岡を検体回収の拠点とし、1日600人の検査を行います。 随時エリア拡大を行ってまいります。 </p>
           </li>
             <li class="p-pcr-slide__item">
               <p class="p-pcr-slide__ttl">自費診療でも14,800円</p>
               <p class="p-pcr-slide__desc">保険診療の診療報酬が1回14,800円。自費診療でも同額でご提供します。</p>
           </li>
       </ul>

       <div class="p-pcr-slide-nav" id="js-nav-wrap">

       </div>
</div>

</section> -->



<style>

@media (min-width: 768px) {
    .p-case-slide {
    margin: 0 .4rem
}

.p-case-slide-check {
    padding-right: 0;
}
}


</style>



<section class="p-top-menu-area">
   <div class="l-inner p-inner-case p-top-menu-area__inner">

          <h2 class="c-ttl-under-center p-cost__ttl c-blue">企業・団体様のご利用事例</h2>
       <ul class="p-case-slide-wrap" id="js-case-slide">
           <li class="p-case-slide">
            <dl class="p-case-slide-box">
                <dt class="p-case-slide-box__ttl">飲食店</dt>
                <dd class="p-case-slide-box__desc">
                    <div class="p-case-slide-top">
                        <p class="p-case-slide-top__ttl">検査人数 </p>
                        <span class="p-case-slide-top__right">
                        <i class="p-case-slide-top__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/icon_human.png?6dbddba84c650683" alt="icon">
                        </i>5人</span>
                    </div>
                    <!-- ./p-case-slide-top -->
                    <div class="p-case-slide-thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/front/case_slide01.jpg?055555" alt="">
                    </div>
                    <!-- ./p-case-slide-thumb -->
                     <ul class="p-case-slide-check">
                        <li class="p-case-slide-check__item">従業員全員を一斉検査</li>
                         <li class="p-case-slide-check__item">店先に「陰性証明ポスター」を掲示</li>
                    </ul>
                    <p class="p-case-slide-desc">
                    接客には、つり銭の受け渡し等、どうしても避けられない感染リスクが伴います。<br class="">そんな中業務を行うのは従業員の精神的負担も大きく、メンタルケアという意味でも検査を行っていただくといいかもしれません。<br class="">また、お越しいただくお客様に対しても、安心してご来店いただくために従業員の一斉検査をオススメしております。<br class="">陰性証明ポスターをご用意しておりますので、ご希望の店舗様はご相談ください。
                    </p>
                </dd>
            </dl>
           </li>

            <li class="p-case-slide">
            <dl class="p-case-slide-box">
                <dt class="p-case-slide-box__ttl">テレビ局</dt>
                <dd class="p-case-slide-box__desc">
                    <div class="p-case-slide-top">
                        <p class="p-case-slide-top__ttl">検査人数 </p>
                        <span class="p-case-slide-top__right">
                        <i class="p-case-slide-top__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/icon_human.png?6dbddba84c650683" alt="icon">
                        </i>30人</span>
                    </div>
                    <!-- ./p-case-slide-top -->
                    <div class="p-case-slide-thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/front/case_slide02.jpg?5555555" alt="">
                    </div>
                    <!-- ./p-case-slide-thumb -->
                    <ul class="p-case-slide-check">
                        <li class="p-case-slide-check__item">撮影で県をまたぐ移動前に一斉検査</li>
                         <li class="p-case-slide-check__item">撮影前に陰性証明書を発行し備える</li>
                    </ul>
                    <p class="p-case-slide-desc">
                    撮影の前に関係者の一斉検査をご利用いただきました。<br class="">演出上、マスクやフェイスガードの着用が難しい場合や、観客を入れる場合など、事前にPCR検査をし、万全を期した状態で撮影をおこなってらっしゃます。<br class=""><br class="">また、クラスター発生に備えて、事前に陰性を証明をしておく事は、運営上のリスクヘッジにもなります。
                    </p>
                </dd>
            </dl>
           </li>

            <li class="p-case-slide">
            <dl class="p-case-slide-box">
                <dt class="p-case-slide-box__ttl">総合商社</dt>
                <dd class="p-case-slide-box__desc">
                    <div class="p-case-slide-top">
                        <p class="p-case-slide-top__ttl">検査人数 </p>
                        <span class="p-case-slide-top__right">
                        <i class="p-case-slide-top__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/icon_human.png?6dbddba84c650683" alt="icon">
                        </i>100人</span>
                    </div>
                    <!-- ./p-case-slide-top -->
                    <div class="p-case-slide-thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/front/case_slide03.jpg?555555555" alt="">
                    </div>
                    <!-- ./p-case-slide-thumb -->
                      <ul class="p-case-slide-check">
                        <li class="p-case-slide-check__item">定期的な検査で早期発見、早期復帰</li>
                         <li class="p-case-slide-check__item">海外出張に必須な陰性証明書の発行</li>
                    </ul>
                    <p class="p-case-slide-desc">
                    定期的に従業員の一斉検査をご利用いただいております。無症状でも陽性者がいればすぐに療養に切替え、<br class="">従業員を守りながらも業務を止めない体制づくりをされていらっしゃいます。<br class=""><br class="">また、出張で海外渡航が必要な際には、海外用の陰性証明書をご用意させていただいております。<br class="">ご入用の企業様はお気軽にご相談ください。
                    </p>
                </dd>
            </dl>
           </li>

            <li class="p-case-slide">
            <dl class="p-case-slide-box">
                <dt class="p-case-slide-box__ttl">食品製造メーカー</dt>
                <dd class="p-case-slide-box__desc">
                    <div class="p-case-slide-top">
                        <p class="p-case-slide-top__ttl">検査人数 </p>
                        <span class="p-case-slide-top__right">
                        <i class="p-case-slide-top__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/icon_human.png?6dbddba84c650683" alt="icon">
                        </i>500人</span>
                    </div>
                    <!-- ./p-case-slide-top -->
                    <div class="p-case-slide-thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/front/case_slide04.jpg?55555555411" alt="">
                    </div>
                    <!-- ./p-case-slide-thumb -->
                      <ul class="p-case-slide-check">
                        <li class="p-case-slide-check__item">大規模クラスターを未然に防ぐ</li>
                         <li class="p-case-slide-check__item">従業員の一斉検査で陽性者の早期発見</li>
                    </ul>
                    <p class="p-case-slide-desc">
                   製造職、事務職、技能職など、１つの敷地に各部門が集まり大人数が密集する事が多くなる工場等の製造現場。一人でも感染者が出てしまうと、大規模クラスター発生のリスクが伴い、最悪全ての業務がストップしてしまう可能性もあります。<br class="">全従業員に検査を行う事により陽性者がいた場合、すぐに療養に切り替え、新たな感染を防ぎ、社内外への感染の拡大防止ならびに、従業員の安全確保につながります。
                    </p>
                </dd>
            </dl>
           </li>

             <li class="p-case-slide">
            <dl class="p-case-slide-box">
                <dt class="p-case-slide-box__ttl">演劇関連事業</dt>
                <dd class="p-case-slide-box__desc">
                    <div class="p-case-slide-top">
                        <p class="p-case-slide-top__ttl">検査人数 </p>
                        <span class="p-case-slide-top__right">
                        <i class="p-case-slide-top__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/icon_human.png?6dbddba84c650683" alt="icon">
                        </i>200人</span>
                    </div>
                    <!-- ./p-case-slide-top -->
                    <div class="p-case-slide-thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/front/case_slide05.jpg?eb0af1f9c343d4c0" alt="">
                    </div>
                    <!-- ./p-case-slide-thumb -->
                      <ul class="p-case-slide-check">
                        <li class="p-case-slide-check__item">スタッフ・出演者のリスクヘッジ</li>
                         <li class="p-case-slide-check__item">徹底した健康、衛生管理</li>
                    </ul>
                    <p class="p-case-slide-desc">
                   劇場公演、イベントなど不特定多数の方が集まりやすい演劇関連事業。<br class="">昨今のコロナ禍の中、クラスタの発生を危惧し多くの公演が軒並み中止となってしまう状況でした。<br class="">現在は少しずつではありますが、経済活動の再開に伴い、公演等を開催する動きが見られてきました、そこで、劇場スタッフや出演者のPCR検査を行い、万が一感染者がいた場合、治療に専念して頂き、クラスタの発生を未然に防ぎます。<br class="">検査に掛かる費用も<a href="https://www.bunka.go.jp/shinsei_boshu/kobo/20200706.html" class="c-pink" target="_blank">文化庁</a>の補助制度を利用する事で負担が少なく、検査を受けることが可能です。<br class="">また、検査後にお客様に安心して劇場へ足を運んで頂く為に、陰性証明ポスターをご用意しております。
                    </p>
                </dd>
            </dl>
           </li>

           <li class="p-case-slide">
            <dl class="p-case-slide-box">
                <dt class="p-case-slide-box__ttl">スポーツイベント</dt>
                <dd class="p-case-slide-box__desc">
                    <div class="p-case-slide-top">
                        <p class="p-case-slide-top__ttl">検査人数 </p>
                        <span class="p-case-slide-top__right">
                        <i class="p-case-slide-top__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/icon_human.png?6dbddba84c650683" alt="icon">
                        </i>120人</span>
                    </div>
                    <!-- ./p-case-slide-top -->
                    <div class="p-case-slide-thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/front/case_slide06.jpg?55555555411" alt="">
                    </div>
                    <!-- ./p-case-slide-thumb -->
                      <ul class="p-case-slide-check">
                        <li class="p-case-slide-check__item">イベント中止といった最悪の事態を未然に防ぐ</li>
                         <li class="p-case-slide-check__item">安心・安全の為に備える</li>
                    </ul>
                    <p class="p-case-slide-desc">
                  昨今のコロナ禍で厳しい状況が続いているスポーツイベント<br class="">今後の開催に向けての課題として、安心・安全な環境の整備が一層求められる事となります。<br class="">それに掛かる負担を少しでも軽くする為<a href="https://www.mext.go.jp/sports/b_menu/sports/mcatetop01/list/detail/jsa_00008.html" class="c-pink" target="_blank">スポーツ庁</a>がPCR検査費を補助する制度が用意されており、それを利用するイベント主催者様もいらっしゃいます。<br class="">スタッフ、選手の一斉検査によって予め感染状況を把握することにより、感染のリスクを減らし、予定していたイベントを中止する事なく、円滑にかつ本格的な開催を可能とします。
                    </p>
                </dd>
            </dl>
           </li>
       </ul>

       <div class="p-pcr-slide-nav --nav-case" id="js-nav-wrap">

       </div>

       <p class="p-case-note">この他にも、<span class="p-case-note__inn">政府機関、通信業者様、自動車メーカー様、銀行様、アパレルブランド様</span>など<br class="">たくさんの業種の企業・団体様にご利用いただいております。</p>
</div>

</section>


<!-- <div class="p-top-menu-area">

        <div class="l-inner">
            <ul class="p-top-menu">
                <li class="p-top-menu__item --menu-item01">
                    <a href="#link-free-inspection01" class="p-top-menu__link">
                        <h3 class="p-top-menu__ttl">
                            <i class="c-circle-arw p-top-menu__arw -arw-yellow"></i>
                            児童の無償検査
                        </h3>
                        <p class="p-top-menu__text --bg-icon01">私達はPCR無償検査を通じ、子供達を守り、豊かな未来へと繋いでまいります。</p>
                    </a>
                </li>
                <li class="p-top-menu__item --menu-item02">
                    <a href="#link-free-inspection02" class="p-top-menu__link">
                        <h3 class="p-top-menu__ttl">
                            <i class="c-circle-arw p-top-menu__arw -arw-blue"></i>
                            医療従事者の無償検査
                        </h3>
                        <p class="p-top-menu__text --bg-icon02">PCR無償検査を通じ、最前線で戦っていらっしゃる医療従事者の方々を支えてまいります。</p>
                    </a>
                </li>
                <li class="p-top-menu__item --menu-item03 u-mb0">
                    <a href="#link-inspection-company" class="p-top-menu__link">
                        <h3 class="p-top-menu__ttl">
                            <i class="c-circle-arw p-top-menu__arw -arw-green"></i>
                            企業・団体検査
                        </h3>
                        <p class="p-top-menu__text --bg-icon03">感染者発覚時、団体の一斉検査を実施すれば封鎖措置等、過剰な選択をしなくて済みます。</p>
                    </a>
                </li>
                <li class="p-top-menu__item  --menu-item04 u-mb0">
                    <a href="#link-inspection-personal" class="p-top-menu__link">
                        <h3 class="p-top-menu__ttl">
                            <i class="c-circle-arw p-top-menu__arw -arw-pink"></i>
                            個人検査
                        </h3>
                        <p class="p-top-menu__text --bg-icon04">経済活動再開に伴い、海外渡航等に必要な証明書の発行も行っております。</p>
                    </a>
                </li>
            </ul>
        </div>

</div> -->
<!-- ./p-menu-area -->


<section class="p-free-inspection-area" id="link-free-inspection">

<div class="c-ttl-skew">

    <h2 class="c-title-under-circle --circle-small c-ttl-skew__text">
    無償検査
    </h2>

</div>
<!-- ./skew-ttl -->



<div class="p-free-inspection --row-right" id="link-free-inspection01">
        <div class="l-inner">
            <div class="p-free-inspection__box-wrap">
                <div class="p-free-inspection__box  --row-left-text">
                    <h3 class="c-ttl-bl-line p-free-inspection__ttl --c-yellow">
                        <span class="c-ttl-bl-line__text p-free-inspection__ttl-sub --c-yellow__text">
                                教育機関における児童の無償検査
                        </span>
                    </h3>
                    <div class="p-free-inspection__desc-area  --desc-area-left">
                            <p class="p-free-inspection__desc">当院では、教育機関等における児童の無償検査を行っております。</p>
                                <p class="p-free-inspection__desc">徹底的な対策を行っている教育機関でも集団生活の中で学び、成長をしていくという性質や、休憩時間等、大人の見守りが出来ないシーン等も含め、感染リスクと隣り合わせにいる事も事実です。</p>
                                <p class="u-mb0 p-free-inspection__desc">私達が子供達を無償検査していく事は、子供達を温床とした感染拡大を防ぐとともに、間接的ではありますが、社会を守り、国の未来を守っていける最前の方法だと考え、取り組んでおります。</p>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/front/inspection_thumb01_sp_new.jpg?6dbddba84c650683" alt="教育機関における児童の無償検査" class="u-sp --desc-area-left__sp-thumb">
                    </div>
                    <!-- ./p-free-inspection__desc-area -->


                </div>
                <!-- ./p-free-inspection__box -->

                <div class="p-free-inspection__thumb  --row-right--img u-pc">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/front/inspection_thumb01_new.jpg?6dbddba84c650683" alt="教育機関における児童の無償検査" class="">
                </div>
                <!-- ./p-free-inspection__thumb -->
            </div>
            <!-- ./p-free-inspection__box-wrap -->
                    <?php if (have_rows('lists01',73)): ?>
                        <div class="p-inspection-lists">
                                    <p class="p-inspection-lists__ttl c-bdc-yellow bg-orange02">検査実施をご利用いただいた教育機関一覧</p>

                                        <div class="p-inspection-lists__bottom c-bdc-yellow">
                                            <?php while (have_rows('lists01',73)) : the_row(); ?>
                                                <span class="p-inspection-lists__item">   <?php the_sub_field('lists_texts',73); ?></span>
                                            <?php endwhile; ?>
                                        </div>

                        </div>
                        <!-- ./p-inspection-list-area -->
                     <?php else: ?>
                    <?php endif; ?>
        </div>
        <!-- ./l-inner -->
</div>
<!-- ./p-free-inspection --row-right -->



<div class="p-free-inspection p-bg-light-blue --row-left" id="link-free-inspection02">
        <div class="l-inner">
            <div class="p-free-inspection__box-wrap --box-wrap--nth2">
                <div class="p-free-inspection__box  --row-right-text">
                    <h3 class="c-ttl-bl-line p-free-inspection__ttl --c-light-blue">
                        <span class="c-ttl-bl-line__text p-free-inspection__ttl-sub --c-light-blue__text">
                                医療機関における医療従事者の無償検査
                        </span>
                    </h3>
                    <div class="p-free-inspection__desc-area  --desc-area-right">
                            <p class="p-free-inspection__desc u-mb0">医療機関でのクラスターの発生状況も踏まえ、医療従事者の負担、疲労、それに伴う免疫機能の低下による新たな健康被害の拡大も危惧されております。<br>医療崩壊を防ぐためにも、医療従事者を感染から守り、広めてしまわない事が大切だと考えております。<br>そこで私達は、PCR無償検査を通じて医療従事者を支え、国を支える取り組みを行っております。</p>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/front/inspection_thumb02_sp_new.png?6dbddba84c650683" alt="教育機関における児童の無償検査" class="u-sp --desc-area-right__sp-thumb">
                    </div>
                    <!-- ./p-free-inspection__desc-area -->


                </div>
                <!-- ./p-free-inspection__box -->

                <div class="p-free-inspection__thumb  --row-left--img u-pc">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/front/inspection_thumb02_new.png?6dbddba84c650683" alt="教育機関における児童の無償検査" class="">
                </div>
                <!-- ./p-free-inspection__thumb -->
            </div>
            <!-- ./p-free-inspection__box-wrap -->

             <?php if (have_rows('lists02',73)): ?>
                        <div class="p-inspection-lists">
                                    <p class="p-inspection-lists__ttl c-bdc-light-blue bg-light-blue">検査実施をご利用いただいた医療機関一覧</p>

                                        <div class="p-inspection-lists__bottom c-bdc-light-blue">
                                            <?php while (have_rows('lists02',73)) : the_row(); ?>
                                                <span class="p-inspection-lists__item">   <?php the_sub_field('lists_texts',73); ?></span>
                                            <?php endwhile; ?>
                                        </div>

                        </div>
                        <!-- ./p-inspection-list-area -->
                     <?php else: ?>
                    <?php endif; ?>
        </div>
        <!-- ./l-inner -->
</div>
<!-- ./p-free-inspection --row-right -->

<div class="p-free-inspection --row-right" id="link-free-inspection03">
        <div class="l-inner">
            <div class="p-free-inspection__box-wrap">
                <div class="p-free-inspection__box  --row-left-text">
                    <h3 class="c-ttl-bl-line p-free-inspection__ttl --c-green">
                        <span class="c-ttl-bl-line__text p-free-inspection__ttl-sub --c-green__text">
                                慈善活動団体への無償検査
                        </span>
                    </h3>
                    <div class="p-free-inspection__desc-area  --desc-area-left">


                                <p class="p-free-inspection__desc">慈善活動団体様への支援の一環として、スタッフ・職員への無償検査を行っております。<br class="">支援先で感染してしまうかもしれない、現地にウイルスを持ち込んでしまうかもしれない、そのようなリスクと隣合わせのスタッフに対して、検査を行うことによって感染拡大の防止、事務所等でのクラスター発生を未然に防ぐことを目的として支援活動を支える取り組みを行っております。</p>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/front/inspection_thumb03_sp_new.jpg?6dbddba84c650683" alt="教育機関における児童の無償検査" class="u-sp --desc-area-left__sp-thumb">
                    </div>
                    <!-- ./p-free-inspection__desc-area -->


                </div>
                <!-- ./p-free-inspection__box -->

                <div class="p-free-inspection__thumb  --row-right--img u-pc">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/front/inspection_thumb03_new.jpg?6dbddba84c650683" alt="教育機関における児童の無償検査" class="">
                </div>
                <!-- ./p-free-inspection__thumb -->
            </div>
            <!-- ./p-free-inspection__box-wrap -->
                    <?php if (have_rows('lists03',73)): ?>
                        <div class="p-inspection-lists">
                                    <p class="p-inspection-lists__ttl c-bdc-green bg-green">検査実施をご利用いただいた慈善活動団体一覧</p>

                                        <div class="p-inspection-lists__bottom c-bdc-green">
                                            <?php while (have_rows('lists03',73)) : the_row(); ?>
                                                <span class="p-inspection-lists__item">   <?php the_sub_field('lists_texts',73); ?></span>
                                            <?php endwhile; ?>
                                        </div>

                        </div>
                        <!-- ./p-inspection-list-area -->
                     <?php else: ?>
                    <?php endif; ?>
        </div>
        <!-- ./l-inner -->
</div>
<!-- ./p-free-inspection --row-right -->

</section>


<section class="p-to-contact-area p-bg-light-blue">

        <div class="l-inner">

            <div class="p-contact-action u-bg-cover">
                    <div class="p-contact-action__box">
                            <p class="p-contact-action__desc">
                                ご利用の申し込みやご相談は以下のフォームからご連絡をください。<br>学校等の教育機関、団体様のご利用のみとなります。<br>混雑状況によっては、ご利用をお待ちいただく可能性がございます。<br>予めご了承ください。
                            </p>

                            <a href="<?php echo home_url( '/' ); ?>group-form02" class="c-btn-arw-sq">無償検査お問合せ窓口フォーム
                            <span class="c-btn-arw-sq__right-box">
                                <i class="c-btn-arw-sq__arw"></i>
                            </span>
                            </a>
                    </div>
                    <!-- ./p-contact-action__box -->
            </div>
            <!-- ./p-contact-action -->

            <div class="p-support-fund">
                <div class="p-support-fund__ttl-box">
                             <h2 class="p-support-fund__ttl">児童、医療従事者の無償検査にかかる<br class="u-sp">費用は、<span class="c-bg-pt-line c-pink">収益の一部を支援金</span>として<br>捻出し、実施を行っております。</h2>
                </div>


                    <div class="p-support-fund__illust">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/front/cost_img.png?6dbddba84c650683" alt="・個人・団体・企業 検査・検査費用の一部・児童や医療従事者の検査費用に補塡" class="u-pc">
                         <img src="<?php echo get_template_directory_uri(); ?>/img/front/cost_img_sp.png?6dbddba84c650683" alt="・個人・団体・企業 検査・検査費用の一部・児童や医療従事者の検査費用に補塡" class="u-sp">
                    </div>
                    <!-- ./p-support-fund__illust -->
            </div>
            <!-- ./"p-support-fund -->

        </div>
        <!-- ./l-inner -->
</section>


<section class="p-group-inspection--area" id="link-inspection-company">
            <div class="c-ttl-skew --skew-green">
                <h2 class="c-title-under-circle c-ttl-skew__text">
                企業や団体の集団検査
                </h2>
            </div>
            <!-- ./c-ttl-skew -->
            <div class="l-inner">

                    <div class="p-group-inspection">

                        <div class="p-group-inspection__contents">
                            <h3 class="p-group-inspection__ttl">「見えない」ものを<span class="c-bg-pt-line c-purple">「見えるようにする」</span>取り組み</h3>
                            <p class="p-group-inspection__desc --sp-row-text">ウイルスという見えない敵と戦うには、入念に予防対策を練り実施していくのはとても大切な事です。<br>しかし、この過剰な選択は、時として経済に大きく影響を与え、私達の暮らしそのものにも大きく爪痕を残してしまいます。</p>

                            <div class="p-group-inspection__thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/front/group_inspection_thumb.png?6dbddba84c650683" alt="「見えない」ものを「見えるようにする」取り組み">
                            </div>

                            <p class="p-group-inspection__desc u-mb0">そこで私達は今後の理想のコロナウイルスの戦い方として、問題の根本である「見えない」ものを「見えるようにする」という取り組みを始めています。</p>
                        </div>

                    </div>

              </div>
              <!-- ./l-inner -->
</section>

<section class="p-company-contact-area u-bg-cover">
        <div class="l-inner">
            <div class="p-company-contact">
                    <p class="p-company-contact__desc">
                            感染者が発覚したからと言って経済活動自粛や封鎖措置するのではなく、<span class="c-blue">関係者の集団検査を行えば、拡大を防ぎ影響を最小限に防ぐための最良の判断が行えるように</span>なります。<br>これは企業の経済活動を維持し、私達の暮らしそのもの、<br class="u-sp">つまり社会を守るためにも役立ちます。<br>もちろん、「陽性者が発覚した時のみ実施」という事ではなく、定期的に実施していただく事で未然に感染拡大を防ぐという事も可能になります。
                    </p>

                                    <a href="<?php echo home_url( '/' ); ?>group-form" class="c-btn-arw-sq p-company-contact__btn">詳しくはこちら
                                            <span class="c-btn-arw-sq__right-box">
                                                <i class="c-btn-arw-sq__arw"></i>
                                            </span>
                                    </a>
            </div>
            <!-- ./p-company-contact -->
        </div>
        <!-- ./l-inner -->
</section>

<section class="c-ttl-skew --skew-pink p-personal-inspection-area" id="link-inspection-personal">

<div class="l-inner">

                <h2 class="c-title-under-circle --circle-small p-personal-inspection-ttl">
                個人の検査
                </h2>



    <ul class="p-personal-inspection-action">

            <li class="p-personal-inspection-action__item">

                <a href="#link-use" class="p-personal-inspection-action__link">

                    <img src="<?php echo get_template_directory_uri(); ?>/img/front/personal_inspection_thumb01_new.jpg?6dbddba84c650683" alt="" class="p-personal-inspection-action__pc-thumb u-pc-display">

                    <div class="p-personal-inspection-action__bottom  --sp-bg-img01">
                        <div class="p-personal-inspection-action__bottom-inner c-blue">
                             <span class="p-personal-inspection-action__ttl-text">ご利用案内</span>
                            <span class="c-btn-arw-sq__right-box p-personal-inspection-action__right-box bg-blue">
                                <i class="c-btn-arw-sq__arw p-personal-inspection-action__arw"></i>
                            </span>
                        </div>
                        <!-- ./p-personal-inspection-action__bottom-inner -->
                    </div>
                    <!-- ./p-personal-inspection-action__bottom -->
                </a>
            </li>
<!--
             <li class="p-personal-inspection-action__item">

                <a href="<?php echo home_url( '/' ); ?>clinics" class="p-personal-inspection-action__link" target="_blank">

                    <img src="<?php echo get_template_directory_uri(); ?>/img/front/personal_inspection_thumb02.jpg?6dbddba84c650683" alt="" class="p-personal-inspection-action__pc-thumb u-pc-display">

                    <div class="p-personal-inspection-action__bottom --sp-bg-img02">
                        <div class="p-personal-inspection-action__bottom-inner c-pink-light">
                            <span class="p-personal-inspection-action__ttl-text">Web案内予約</span>
                            <span class="c-btn-arw-sq__right-box p-personal-inspection-action__right-box bg-pink">
                                <i class="c-btn-arw-sq__arw p-personal-inspection-action__arw"></i>
                            </span>
                        </div>

                    </div>

                </a>
            </li> -->

             <li class="p-personal-inspection-action__item">

                <a href="<?php echo home_url( '/' ); ?>item-list" class="p-personal-inspection-action__link">

                    <img src="<?php echo get_template_directory_uri(); ?>/img/front/personal_inspection_thumb03_new.jpg?6dbddba84c650683" alt="" class="p-personal-inspection-action__pc-thumb u-pc-display">

                    <div class="p-personal-inspection-action__bottom --sp-bg-img03">
                        <div class="p-personal-inspection-action__bottom-inner c-orange">
                             <span class="p-personal-inspection-action__ttl-text">検体採取キットの<br class="u-sp">ご購入</span>
                            <span class="c-btn-arw-sq__right-box p-personal-inspection-action__right-box bg-orange">
                                <i class="c-btn-arw-sq__arw p-personal-inspection-action__arw"></i>
                            </span>
                        </div>
                        <!-- ./p-personal-inspection-action__bottom-inner -->
                    </div>
                    <!-- ./p-personal-inspection-action__bottom -->
                </a>
            </li>

    </ul>
</div>

</section>

<section class="p-trouble bg-section-gray">
    <div class="l-inner">
            <h2 class="p-trouble__ttl">
                <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_ttl.png?6dbddba84c650683" alt="こんなお悩みがあればご相談ください" class="u-pc">
                 <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_ttl_sp.png?6dbddba84c650683" alt="こんなお悩みがあればご相談ください" class="u-sp">
            </h2>

            <ul class="p-trouble-list">
                    <li class="p-trouble-list__item">
                        <div class="p-trouble-list__texts">
                            <p class="p-trouble-list__num u-pc-display">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_num01.png?6dbddba84c650683" alt="01">
                            </p>
                            <p class="p-trouble-list__desc">
                                お勤め先等にPCR検査の<br class="u-sp">証明書が<br class="u-pc">必要な方
                            </p>
                        </div>
                        <!-- ./p-trouble-list__texts -->
                        <div class="p-trouble-list__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_point01.png?6dbddba84c650683" alt="01" class="u-sp">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_point01_pc.png?6dbddba84c650683" alt="" class="u-pc">
                        </div>
                        <!-- ./p-trouble-list__img -->
                    </li>
                    <li class="p-trouble-list__item">
                        <div class="p-trouble-list__texts">
                                <p class="p-trouble-list__num u-pc-display">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_num02.png?6dbddba84c650683" alt="01">
                                </p>
                                <p class="p-trouble-list__desc">
                                    海外渡航や帰国にPCR検査の証明<br class="u-pc">書が必要な方
                                </p>
                                <a href="<?php echo home_url( '/' ); ?>voyage" class="c-blue-arw-btn p-trouble-list__btn">詳しく見る</a>
                           </div>
                        <!-- ./p-trouble-list__texts -->
                        <div class="p-trouble-list__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_point02.png?6dbddba84c650683" alt="01" class="u-sp">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_point02_pc.png?6dbddba84c650683" alt="" class="u-pc">
                        </div>
                    </li>
                    <li class="p-trouble-list__item">
                         <div class="p-trouble-list__texts">
                                <p class="p-trouble-list__num u-pc-display">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_num03.png?6dbddba84c650683" alt="01">
                                </p>
                                <p class="p-trouble-list__desc">
                                    過去に新型コロナウイルス感染症に<br class="u-pc">かかっていたのではと、心配な方
                                </p>
                         </div>
                        <!-- ./p-trouble-list__texts -->
                        <div class="p-trouble-list__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_point03.png?6dbddba84c650683" alt="03" class="u-sp">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_point03_pc.png?6dbddba84c650683" alt="" class="u-pc">
                        </div>
                    </li>
                    <li class="p-trouble-list__long-desc">
                        当院は希望する全ての方が平等にPCR検査出来る仕組みを目指しています。<br>それは、症状が出ていなくても自覚者の感染早期発見に繋がり、<span class="c-bg-pt-line --sp-pb-ms c-pink">未然に集団感染を防ぐ効果がある</span>と考えているからです。
                    </li>
            </ul>

            <h3 class="p-trouble-band js-accordion-pt2">既に何らかの症状がある方へ
                <i class="p-trouble-band__icon-plus-wrap"><span class="p-trouble-band__icon-plus js-icon-plus"></span></i>
            </h3>

            <div class="p-trouble-sub-contents">

                <p class="p-trouble-sub-contents__right">「味を感じない」「37.5℃ 以上の発熱が続いている」等の<br>コロナ感染特有の初期症状がある場合は行政検査が受けられます。<br>その場合は、お住まい地域の相談センターへお問合せください。</p>

                <div class="p-trouble-sub-contents__tables">
                        <dl class="p-trouble-sub-contents__table-list">
                            <dt class="p-trouble-sub-contents__table-ttl">最もよくある初期症状</dt>
                            <dd class="p-trouble-sub-contents__table-answer">発熱、空咳、倦怠感</dd>
                        </dl>

                        <dl class="p-trouble-sub-contents__table-list --table-right">
                            <dt class="p-trouble-sub-contents__table-ttl --table-bg-gray">時折みられる初期症状</dt>
                            <dd class="p-trouble-sub-contents__table-answer --table-right__answer">痛み、喉の痛み、下痢、結膜炎、頭痛<br class="u-pc">味覚または嗅覚の消失、皮膚の発疹<br class="u-pc">または手足の指の変色</dd>
                        </dl>
                </div>

            </div>
    </div>
</section>


<section class="p-pcr-about">
            <div class="c-ttl-skew --skew-blue02">
                <h2 class="c-title-under-circle c-ttl-skew__text p-pcr-about__ttl">
                当院のPCR検査について
                </h2>
            </div>
            <!-- ./skew-ttl -->
            <div class="l-inner">


                    <div class="p-pcr-about-row">

                        <div class="p-pcr-about-textbox">
                            <h3 class="c-ttl-bl-line p-pcr-about-textbox__ttl --c-blue">
                                <span class="c-ttl-bl-line__text p-pcr-about-textbox__ttl-sub --c-blue__text">
                                        痛みのない検体採取
                                </span>
                            </h3>

                            <p class="p-pcr-about-textbox__desc">今までの検体採取はスワブ(柄の長い綿棒状のもの)を用い、鼻腔拭い液を採取するもので多少の痛みを伴うものでしたが、当院の採用しているPCR検査は唾液サンプルを検査しますので、どなたでも簡単に採取が可能です。</p>
                            <p class="p-pcr-about-textbox__desc u-mb0">また、厚生労働科学研究においても鼻咽頭ぬぐい液とほぼ同じ精度で検査が可能という事が実証されており、安心してご利用いただけます。</p>

                            <a href="https://www.mhlw.go.jp/content/10906000/000635988.pdf" class="c-link-blank p-pcr-about-textbox__link c-pink" target="_blank">厚生労働省サイトへ</a>
                        </div>
                        <!-- ./p-pcr-about-textbox -->

                    <ul class="p-pcr-about-illust">

                        <li class="p-pcr-about-illust__item">
                            <div class="p-pcr-about-illust__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/front/pcr_illustration01.png?6dbddba84c650683" alt="">
                            </div>
                            <!-- ./p-pcr-about-illust__img -->

                            <div class="p-pcr-about-illust__bottom">
                                <h4 class="p-pcr-about-illust__ttl">従来の採取方法</h4>
                                <p class="p-pcr-about-illust__desc">医師などが直接、綿棒などで<br class="u-pc">鼻の粘液を採取。</p>
                            </div>
                            <!-- ./p-pcr-about-illust__bottom -->
                        </li>

                        <li class="p-pcr-about-illust__item --bdc-blue ">
                            <div class="p-pcr-about-illust__img --bg-light-blue">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/front/pcr_illustration02.png?6dbddba84c650683" alt="">
                            </div>
                            <!-- ./p-pcr-about-illust__img -->

                            <div class="p-pcr-about-illust__bottom --bdc-blue">
                                <h4 class="p-pcr-about-illust__ttl --blue">当院での採取方法</h4>
                                <p class="p-pcr-about-illust__desc">検査を受ける患者様自ら、<br class="u-pc">容器に唾液を入れ、サンプルを採取。</p>
                            </div>
                            <!-- ./p-pcr-about-illust__bottom -->
                        </li>

                    </ul>

                </div>
                <!-- ./p-pcr-about-row -->
        </div>
        <!-- ./l-inner -->
</section>


<style>

/*  一旦非表示

<section class="p-pcr-flow">

<div class="l-inner">
    <h2 class="c-ttl-under-center p-pcr-flow__ttl c-blue">PCR検査手順</h2>

    <p class="p-pcr-flow__intro">
        検査は万全を期した状態で、人の手で慎重に行っています。<br><!-- より正確な結果に導くために検査工程を<br class="u-sp">2回繰り返しております。<br> -->ここでは、簡易的ではありますが、<br class="u-sp">検査手順をご紹介させていただきます。
    </p>

    <ul class="p-pcr-flow-list" id="js-sp-slide">
        <li class="p-pcr-flow-list__item ">
            <p class="p-pcr-flow-list__num u-f-black-sword u-sp-display">Step.1</p>
            <div class="p-pcr-flow-list__top --sp-width-small">
                <img src="<?php echo get_template_directory_uri(); ?>/img/front/pcr_flow_img01.png?6dbddba84c650683" alt="手順1" class="p-pcr-flow-list__img --pos-btm">
            </div>
            <p class="p-pcr-flow-list__desc">検体採取キットで唾液の採取を行っていただいたものを用意。</p>
        </li>
         <li class="p-pcr-flow-list__item">
              <p class="p-pcr-flow-list__num u-f-black-sword u-sp-display">Step.2</p>
            <div class="p-pcr-flow-list__top">
                <img src="<?php echo get_template_directory_uri(); ?>/img/front/pcr_flow_img02.png?6dbddba84c650683" alt="手順1" class="p-pcr-flow-list__img">
            </div>
            <p class="p-pcr-flow-list__desc">唾液（検体）を試薬と混合します。この時、粘性が一定になるよう調整し、反応チューブに個人識別用コードをラベリングしておきます。</p>
        </li>
         <li class="p-pcr-flow-list__item">
              <p class="p-pcr-flow-list__num u-f-black-sword u-sp-display">Step.3</p>
            <div class="p-pcr-flow-list__top">
                <img src="<?php echo get_template_directory_uri(); ?>/img/front/pcr_flow_img03.png?6dbddba84c650683" alt="手順1" class="p-pcr-flow-list__img">
            </div>
            <p class="p-pcr-flow-list__desc">95度で5分熱処理を加え、ウイルスを不活化します。</p>
        </li>
         <li class="p-pcr-flow-list__item ">
              <p class="p-pcr-flow-list__num u-f-black-sword u-sp-display">Step.4</p>
            <div class="p-pcr-flow-list__top --sp-width-small">
                <img src="<?php echo get_template_directory_uri(); ?>/img/front/pcr_flow_img04.png?6dbddba84c650683" alt="手順1" class="p-pcr-flow-list__img --pos-btm02">
            </div>
            <p class="p-pcr-flow-list__desc">PCR反応液を添加し、測定器へセットします。</p>
        </li>
         <li class="p-pcr-flow-list__item">
              <p class="p-pcr-flow-list__num u-f-black-sword u-sp-display">Step.5</p>
            <div class="p-pcr-flow-list__top">
                <img src="<?php echo get_template_directory_uri(); ?>/img/front/pcr_flow_img05.png?6dbddba84c650683" alt="手順1" class="p-pcr-flow-list__img">
            </div>
            <p class="p-pcr-flow-list__desc">ウイルス特有の遺伝子配列を増幅して検出を行います。</p>
        </li>

    </ul>

  <!--   <div class="p-pcr-flow-confilm">
        <p class="p-pcr-flow-confilm__radius">1つの検体を2回分に分けて検査し、<br class="u-sp">測定結果に相違ないかを確認</p>
    </div> -->

</div>
<!-- ./l-inner -->


</section>

*/
</style>


<section class="p-pcr-kit bg-section-gray" id="link-kit">
    <div class="l-inner">
        <h2 class="c-ttl-under-center p-pcr-kit__ttl c-blue">PCR検査キットについて</h2>
        <div class="p-pcr-kit-row">
            <div class="p-pcr-item-box">
                <div class="p-pcr-item-box__thumb">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/front/Inspection_Item_old.jpg?33b09c8d99b80172" alt="PCR検体採取キット">
                </div>
                <!-- ./p-pcr-item-box__thumb -->
                <dl class="p-pcr-item-box__desc">
                    <dt class="p-pcr-item-box__name">附属品</dt>
                    <dd class="p-pcr-item-box__desc-text">
                        <ul class="p-pcr-item-box__list">
                            <li class="p-pcr-item-box__list-item">・手順説明書</li>
                            <li class="p-pcr-item-box__list-item">・唾液採取用漏斗</li>
                                <li class="p-pcr-item-box__list-item">・パウチ袋 小</li>
                                 <li class="p-pcr-item-box__list-item">・パウチ袋 大</li>
                            <li class="p-pcr-item-box__list-item">・クッション袋</li>

                                 <li class="p-pcr-item-box__list-item">・吸水紙</li>
                            <li class="p-pcr-item-box__list-item">・確認申込書</li>
                                <li class="p-pcr-item-box__list-item">・返送用封筒</li>
                        </ul>
                    </dd>
                </dl>
            </div>
            <!-- ./p-pcr-item-box -->

            <div class="p-pcr-right-contents">
                    <p class="p-pcr-right-contents__desc">キット購入後は、同封された手順説明書を確認してください。<br>
ご不明点がありましたら「オンライン案内」で、唾液採取のご案内や段取りのご説明などを行います。<br class="">
その際、ビデオ通話はクリニクスを介して行いますので、インストール済みのスマートフォン、もしくはカメラがついているPCをご用意の上、ご利用ください。</p>
                    <a href="<?php echo home_url( '/' ); ?>item-list" class="c-btn-circle-arw p-pcr-right-contents__btn">ご購入はこちら</a>
            </div>
            <!-- ./p-pcr-right-contents -->
        </div>
        <!-- ./p-pcr-kit-row -->
    </div>
    <!-- ./l-inner -->
</section>




<section class="p-diff">

<div class="l-inner">
     <h2 class="c-ttl-under-center p-diff__ttl c-blue u-fw600">PCR検査と抗体検査の違い</h2>
     <p class="p-diff__text u-tc u-fw600"><span class="c-orange03 p-diff__text-large">「今」</span>の感染状況を検査するのは<span class="c-orange03">PCR検査</span>ですが、<br class=""><span class="c-blue p-diff__text-large">「過去」</span>に感染していたかどうかを調べる事ができる検査を<span class="c-blue">抗体検査</span>と言います。</p>

     <div class="p-diff__table">
     <img src="<?php echo get_template_directory_uri(); ?>/img/front/diff_table.png?49486b220bbca61da" alt="検査対象期間" class="u-pc">
     <img src="<?php echo get_template_directory_uri(); ?>/img/front/diff_table_sp.png?49486b220bbca61da" alt="検査対象期間" class="u-sp">
     </div>

</div>


</section>


<section class="p-use-flow bg-section-gray" id="link-use">
    <div class="l-inner js-tab-wrap">
        <h2 class="c-ttl-under-center p-use-flow__ttl c-blue">検査のご利用方法</h2>
       <!--  <p class="u-tc u-fw600 p-use-flow__note">ご注文された方のお住まいによって、<br class="u-sp">ご利用方法が変わります。</p> -->


    <!--     <ul class="p-chart-btn">
                <li class="p-chart-btn__item p-chart-btn__item--01 js-tab-btn is-tab-active"><span class="p-chart-btn__in-text">東京、名古屋、大阪、福岡にお住いの方</span></li>
                <li class="p-chart-btn__item p-chart-btn__item--02 js-tab-btn"><span class="p-chart-btn__in-text">それ以外の地域の方</span></li>
        </ul>
 -->



                     <div class="p-use-chart">
                <!-- 左のチャート -->
                <ul class="p-use-chart__left p-use-chart-list">
                    <li class="p-use-chart-list-top p-chert-left-row01 p-pos-left c-bg-water-blue">
                        <div class="p-use-chart-list-top__inner p-inner-row01">
                                <i class="p-use-chart-list-top__icon c-bg-water-blue">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/front/flow_icon01.png?6dbddba84c650683" alt="アイコン">
                                </i>
                                <p class="p-use-chart-list-top__name">患者様</p>
                        </div>
                    </li>
                    <li class="p-use-chart-list-item p-chert-left-row02 p-pos-left c-bdc-water-blue">
                        <div class="p-use-chart-list-item__inner p-inner-left  p-inner-row02">
                            <p class="p-use-chart-list-item__text">当サイトから検体採取キットを<br class="u-pc">ご購入いただきます。</p>
                            <a href="<?php echo home_url( '/' ); ?>item-list" class="c-btn-circle-arw p-use-chart-list-item__btn">ご購入はこちら</a>
                        </div>
                    </li>
                     <li class="p-use-chart-list-item p-chert-left-row03 p-chert-left-row03--02 p-pos-left c-bdc-water-blue">
                           <div class="p-use-chart-list-item__inner p-inner-left ">
                        <p class="p-use-chart-list-item__text u-tl u-mb0">検体採取キットが届きましたら、同封されている案内を見ながら同梱物の確認を行ってください。</p>

                          </div>
                    </li>
                    <li class="p-use-chart-list-item  p-chert-left-row04 p-chert-left-row04--02 p-pos-left c-bdc-water-blue">
                          <div class="p-use-chart-list-item__inner p-inner-left p-inner-row03">
                        <div class="p-use-chart-list-item__row">
                                    <div class="p-use-chart-list-item__thumb --spspsp">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/front/flow_left_thumb01.png?36d7dca331e72df0" alt="thumb">
                                    </div>

                                    <p class="p-use-chart-list-item__l-text">お手元に届いたご案内をお読みになるか、以下のページを読みながら検体の採取をお願い致します。<br>
                                      <a href="<?php echo home_url( '/' ); ?>use?tab=01" class="c-btn-circle-arw p-use-chart-list-item__btn u-mb10"><span class="u-pc">PCR </span>唾液採取の手順</a>

                                      <a href="<?php echo home_url( '/' ); ?>use?tab=02" class="c-btn-circle-arw p-use-chart-list-item__btn u-mt0">抗体検査の手順</a>
                                    </p>

                                      </div>
                        </div>
                    </li>

                       <li class="p-use-chart-list-item p-chert-left-row09 p-pos-left c-bdc-water-blue">
                          <div class="p-use-chart-list-item__inner p-inner-left  p-inner-row04">
                        <div class="p-use-chart-list-item__text u-tl u-mb0">
                                   検体の採取が完了しましたら<span class="c-green">「PCR検査の唾液採取の流れ」</span>の裏面の案内に従い梱包作業を行って下さい。
                        </div>
                           </div>
                    </li>
                     <li class="p-use-chart-list-item p-chert-left-row06 p-chert-left-row06--02 p-pos-left c-bdc-water-blue">
                          <div class="p-use-chart-list-item__inner p-inner-left  p-inner-row04">
                        <div class="p-use-chart-list-item__row">
                                    <div class="p-use-chart-list-item__thumb --thumb-letter">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/front/chart_letter.jpg?36d7dca331e72df0" alt="thumb">
                                    </div>

                                    <p class="p-use-chart-list-item__l-text">梱包できましたら、当院への送付をお願い致します。</p>
                        </div>
                           </div>
                    </li>

                     <li class="p-use-chart-list-item p-chert-left-row07 p-chert-left-row07--02 p-pos-left c-bdc-water-blue">
                          <div class="p-use-chart-list-item__inner p-inner-left  p-inner-row04">
                        <div class="p-use-chart-list-item__text u-mb0">
                                   何らかの自覚症状がある場合や、感染者との濃厚接触歴がある方は自宅待機となります。
                        </div>
                           </div>
                    </li>

                </ul>

                <!-- 真ん中のライン -->
                <div class="p-use-chart__center">
                   <!--  <img src="<?php echo get_template_directory_uri(); ?>/img/front/flow_center_line.png?6dbddba84c650683" alt="LINE" class="u-pc">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/front/flow_center_line_sp.png?6dbddba84c650683" alt="LINE" class="u-sp"> -->
                </div>
                <!-- ./center -->

                   <!-- 左のチャート -->
              <ul class="p-use-chart__left p-use-chart-list">
                    <li class="p-use-chart-list-top p-chert-right-row01 p-pos-right c-bg-deep-pink">
                       <div class="p-use-chart-list-top__inner p-inner-row01">
                               <i class="p-use-chart-list-top__icon c-bg-deep-pink">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/front/flow_icon02.png?6dbddba84c650683" alt="アイコン">
                                </i>
                                <p class="p-use-chart-list-top__name">当院</p>
                        </div>
                    </li>

                    <li class="p-use-chart-list-item  p-chert-right-row02 p-pos-right c-bdc-pink">
                          <div class="p-use-chart-list-item__inner p-inner-right p-item-pd-pt02 p-item-pd-pt04 p-inner-row08">
                        <div class="p-use-chart-list-item__row u-sp-ff-reverse">


                                    <p class="p-use-chart-list-item__l-text">ご注文を承った後、<br>検体採取キットの発送。</p>

                                    <div class="p-use-chart-list-item__thumb --thumb-w-small">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/front/flow_right_thumb01_old.jpg?33b09c8d99b80172" alt="thumb">
                                    </div>

                        </div>
                    </li>

                  <!--    <li class="p-use-chart-list-item p-chert-right-row03 p-pos-right c-bdc-pink">
                           <div class="p-use-chart-list-item__inner p-inner-right p-inner-right--circle-none">
                       <p class="p-use-chart-list-item__text u-mb0">ご予約いただいた日時にクリニクスにて唾液の<br class="u-pc">採取方法や今後の段取りの<br class="u-pc">ご案内いたします。オンライン案内を開始する際に保険証、免許、パスポートなどの身分が証明できるものを用意しておいてください。</p>
                          </div>

                    </li> -->

                   <!--  <li class="p-use-chart-list-item  p-chert-right-row04 p-pos-right c-bdc-pink">
                          <div class="p-use-chart-list-item__inner p-item-pd-pt02 p-item-pd-pt03 p-inner-right  p-inner-row08">
                        <div class="p-use-chart-list-item__row u-sp-ff-reverse">


                                    <p class="p-use-chart-list-item__l-text --l-text-w02">感染予防対策を徹底した上で、<br class="u-pc">ご自宅まで検査キットを回収にあがります。<br class="u-pc" >お手元にご用意の上、専任スタッフへお渡しください。</p>

                                    <div class="p-use-chart-list-item__thumb --thumb-w-small02">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/front/flow_right_thumb02.png?6dbddba84c650683" alt="thumb">
                                    </div>

                        </div>
                    </li> -->

                       <li class="p-use-chart-list-item p-chert-right-row05 p-chert-right-row05--02 p-pos-right c-bdc-pink">
                           <div class="p-use-chart-list-item__inner p-inner-right ">
                       <p class="p-use-chart-list-item__text u-tl">検体が当院へ到着後、順に患者様の唾液のPCR検査を行います。<br class="u-pc">混雑状況にもよりますが、検体がクリニックに届いてから、おおよそ1~2日を目安に結果をお知らせいたします。</p>
                            <a href="https://souki-kai.or.jp/rslt/" class="c-btn-circle-arw p-use-chart-list-item__btn p-use-chart-list-item__btn--wide c-bg-deep-pink" target="_blank">
                            <span class="u-pc-display">検査結果確認サイトへ進む</span>
                            <span class="u-sp-display"><!-- 検査結果確認<br>サイトへ進む -->検査結果サイトへ</span>
                        </a>
                          </div>
                    </li>

                     <li class="p-use-chart-list-item p-chert-right-row-clinics p-pos-right  c-bdc-pink">
                           <div class="p-use-chart-list-item__inner p-inner-right --ball-none">
                               <p class="p-chart-clinics-logo">
                                   <img src="<?php echo get_template_directory_uri(); ?>/img/cinics/clinics_logo.png?6dbddba84c650683" alt="">
                               </p>

                               <p class="p-chart-clinics-desc u-tc">検体の採取、回収依頼についてご不安・ご不明点がございましたらオンライン相談が可能です。</p>
                       <p class="p-use-chart-list-item__text u-tc">クリニクスでアカウント登録後、クリニクス内で「感染症検査クリニック」を検索してオンライン相談の予約を行ってください。<br class="">ご利用にはビデオ通話が行えるスマートフォン、もしくはPCが必要になります。<br class="u-pc">予めご用意ください。</p>
                            <a href="<?php echo home_url( '/' ); ?>clinics" class="c-btn-circle-arw p-use-chart-list-item__btn p-use-chart-list-item__btn--wide c-bg-deep-pink">
                            <span class="u-pc-display">詳しいご説明はこちら</span>
                            <span class="u-sp-display"><!-- 詳しいご説明<br>はこちら -->詳しくはこちら</span>
                        </a>
                          </div>
                    </li>
                </ul>
            </div>




    </div>
    <!-- ./l-inner -->
</section>



           <section class="p-chart-bottom-area bg-section-gray">
                <div class="p-chart-bottom">

                <div class="p-use-chart-list-top p-chart-bottom-top c-bg-purple">

                    <div class="p-use-chart-list-top__inner p-chart-bottom-top__inner">
                            <i class="p-use-chart-list-top__icon p-chart-bottom-top__icon c-bg-purple">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/front/flow_icon03.png?6dbddba84c650683" alt="アイコン"></i>
                            <p class="p-chart-bottom-top__desc">検査結果は非常にデリケートな情報ですので、<span class="c-yellow02">電話、ウェブ上にて通知など</span><br>ご希望の方法で結果をお知らせいたします。Web案内時に専任スタッフへお伝えください。</p>
                            <p class="p-chart-bottom-top__nunber u-f-black-sword">Check!</p>
                            <!-- <span href="https://souki-kai.or.jp/rslt/" class="c-btn-arw-sq p-use-chart-list-top__btn" target="_blank">検査結果通知サイト<span class="c-btn-arw-sq__right-box p-use-chart-list-top__btn-right"><i class="c-btn-arw-sq__arw p-use-chart-list-top__btn-arw"></i></span></a> -->
                    </div>
                    <!-- ./p-use-chart-list-top__inner -->

                </div>
                <!-- ./p-chart-bottom-top -->

                <ul class="p-chart-bottom-list">

                    <li class="p-chart-bottom-item p-chart-bottom-item--left c-bg-orange">

                        <p class="p-chart-bottom-item__radius p-chart-bottom-item__radius--left c-orange02">陰性</p>
                        <p class="p-chart-bottom-item__desc">陰性の判定が出た方は、証明書の発行も行えます。</p>
                        <p class="p-chart-bottom-item__desc-list">※発行は別途料金が発生します。<br>詳しくは購入ページをご覧ください。</p>

                        <a href="<?php echo home_url( '/' ); ?>certificate" class="c-btn-arw-sq p-chart-bottom-item__btn">証明書購入ページへ<span class="c-btn-arw-sq__right-box p-chart-bottom-item__btn-right"><i class="c-btn-arw-sq__arw p-chart-bottom-item__btn-arw"></i></span></a>
                    </li>
                    <li class="p-chart-bottom-item p-chart-bottom-item--right c-bg-deep-gray">

                        <p class="p-chart-bottom-item__radius p-chart-bottom-item__radius--right c-deep-gray">陽性</p>
                        <p class="p-chart-bottom-item__desc">基本的には、管轄であり<span class="u-text-under-line">保健所の案内に沿って行動していただきます。</span><br>軽症者・無症状者の患者様は「宿泊療養・自宅療養」のご案内、重傷者の患者様は感染症指定医療機関等へ入院もしくはホテル療養となります。</p>
                        <p class="p-chart-bottom-item__desc-note">基礎疾患がある場合や、65歳以上の場合等は入院となります。</p>

                    </li>
                </ul>

                <p class="p-chart-bottom-link-wrap u-tc">
                    <a href="https://www.fukushihoken.metro.tokyo.lg.jp/iryo/kansen/syukuhaku.html" class="p-chart-bottom-under-link" target="_blank">新型コロナウイルス感染症の軽症者等に係る宿泊療養について</a>
                </p>

                <div class="p-chart-sp-down-arw  --down-arw-left c-bg-purple u-sp">
                    <div class="p-chart-sp-down-arw__inner"></div>
                </div>

                <div class="p-chart-sp-down-arw  --down-arw-right c-bg-purple u-sp">
                     <div class="p-chart-sp-down-arw__inner"></div>
                </div>

            </div>
            <!-- ./p-chart-bottom -->
           </section>

           <section class="p-movie bg-section-gray">

            <div class="l-inner">

                 <!--    <h2 class="c-ttl-under-center p-movie__ttl c-blue">検査費用</h2> -->

                    <div class="p-movie__contents">
                  <!--   <iframe class="p-movie__in" src="https://www.youtube.com/embed/uyHifGfxbUw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                  <img src="<?php echo get_template_directory_uri(); ?>/img/front/movie_sample.jpg?6dbddba84c650683" alt="">

                    </div>


            </div>
            <!-- ./l-inner -->
           </section>







<section class="p-labo">
                <div class="l-inner">
                            <div class="p-labo-contents">
                                <div class="p-labo-desc">
                                     <h3 class="c-ttl-bl-line p-labo-desc__ttl  ">
                                            <span class="c-ttl-bl-line__text    p-labo-desc__ttl-sub --c-yellow__text">
                                                    当院の検査ラボについて
                                            </span>
                                    </h3>

                                    <p class=" p-labo-desc__text">当院でのPCR検査は全て院内にある検査ラボにて検査・解析を行なっております。<br>その為、外部に検査を委託実施している他院に比べ、一回の検査コストを安く抑えることが可能となり、また結果の判定まで迅速に対応することを実現しております。</p>

                                </div>



                            </div>
                </div>
</section>


<section class="p-question bg-section-gray" id="link-qa">
    <div class="l-inner">

                <h2 class="c-ttl-under-center p-question__ttl c-blue">よくある質問</h2>

                <div class="p-question-list">

                    <?php
                    $args = array(
                    'post_type' => 'faq',
                    'posts_per_page' => 5,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    );
                    $the_query = new WP_Query( $args );
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                    ?>




                        <dl class="p-question-box">
                            <dt class="p-question-box__ttl js-accordion">
                                <span class="p-question-box__fst-letter u-f-futura c-blue02">Q.</span>
                                <span class="p-question-box__qa-text"><?php the_title(); ?></span>
                            </dt>
                            <dd class="p-question-box__answer">
                                <span class="p-question-box__fst-letter u-f-futura c-pink02">A.</span>
                                <p class="p-question-box__answer-text"><?php remove_filter('the_content', 'wpautop'); ?><?php the_content(); ?></p>
                            </dd>
                        </dl>




                    <?php endwhile; wp_reset_postdata(); ?>



                       <a href="<?php echo home_url( '/' ); ?>faq-personal" class="c-btn-circle-arw p-question__btn">よくある質問一覧へ</a>



                  <!--    <dl class="p-question-box">
                        <dt class="p-question-box__ttl js-accordion">
                            <span class="p-question-box__fst-letter u-f-futura c-blue02">Q.</span>
                            <span class="p-question-box__qa-text">企業の福利厚生として団体で利用は出来ますか？</span>
                        </dt>
                        <dd class="p-question-box__answer">
                              <span class="p-question-box__fst-letter u-f-futura c-pink02">A.</span>
                              <p class="p-question-box__answer-text">はい。可能です。<br>コロナウイルスは潜伏期間も長く、無症状の方もおりますので定期的な健診をおすすめしています。ご予算、期間等ご相談ください。</p>
                        </dd>
                    </dl>

                     <dl class="p-question-box">
                        <dt class="p-question-box__ttl js-accordion">
                            <span class="p-question-box__fst-letter u-f-futura c-blue02">Q.</span>
                            <span class="p-question-box__qa-text">鼻から検体をとる方法と、唾液によるPCR検査は何が違うのですか？</span>
                        </dt>
                        <dd class="p-question-box__answer">
                              <span class="p-question-box__fst-letter u-f-futura c-pink02">A.</span>
                              <p class="p-question-box__answer-text">大きく違うのは、<br class="u-sp">検体採取時の痛みにあります。<br>鼻咽頭拭い液を採取する際、綿棒を鼻咽頭の奥に挿入して検体を採取します。<br>適切に検体を採取しようとすると、6～7cmほど深く綿棒を挿入しなければならず、痛みを伴います。それに対して唾液は、口内の唾を吐き出していただくだけですので、簡単に採取が可能です。検査精度の違いはほとんどありませんので、自身で採取を行う場合は唾液採取によるPCR検査をおすすめしています。</p>
                        </dd>
                    </dl>

                     <dl class="p-question-box">
                        <dt class="p-question-box__ttl js-accordion">
                            <span class="p-question-box__fst-letter u-f-futura c-blue02">Q.</span>
                            <span class="p-question-box__qa-text">保険が使えないのは何故ですか？</span>
                        </dt>
                        <dd class="p-question-box__answer">
                              <span class="p-question-box__fst-letter u-f-futura c-pink02">A.</span>
                              <p class="p-question-box__answer-text">先に申し上げると、当院のPCR検査は自費ですが、保険適応後と検査価格と同価格の18,000円に設定しております。保険適応したPCR検査を受ける場合は、相談センター、帰国者・接触者外来等を経て行政検査と言われる段取りが必要になります。<br>つまり、全ての人が受けたい時に受けられるという状況ではないのです。少しでもこの状況を穏和すべく、自費診療としてPCR検査を受けられる環境を整えております。</p>
                        </dd>
                    </dl>

                     <dl class="p-question-box">
                        <dt class="p-question-box__ttl js-accordion">
                            <span class="p-question-box__fst-letter u-f-futura c-blue02">Q.</span>
                            <span class="p-question-box__qa-text">陰性でも、1度だと不安なので何度も検査しても良いですか？</span>
                        </dt>
                        <dd class="p-question-box__answer">
                              <span class="p-question-box__fst-letter u-f-futura c-pink02">A.</span>
                              <p class="p-question-box__answer-text">はい。可能です。<br>当院内でも検体到着後、1つの検体から2回の検査を行い、なるべく精度の高い検査結果に繋がるようしておりますが、感染していても一定の期間がたってしまうと陰性になってしまうケースがございます。その際は、再度検査をしていただくか、もしくは感染歴を調べる「抗体検査」をご利用ください。</p>
                        </dd>
                    </dl>

                     <dl class="p-question-box">
                        <dt class="p-question-box__ttl js-accordion">
                            <span class="p-question-box__fst-letter u-f-futura c-blue02">Q.</span>
                            <span class="p-question-box__qa-text">海外渡航時、PCR検査陰性証明書が必要な国は？</span>
                        </dt>
                        <dd class="p-question-box__answer">
                              <span class="p-question-box__fst-letter u-f-futura c-pink02">A.</span>
                              <p class="p-question-box__answer-text">2020年7月の現在、台湾、インドネシア、マレーシア、アラブ首長国連邦です。<br>
今後、EU各国も必要となることを発表しています。<br>
その他の国々でも入国に際してPCR検査陰性証明書を求められる可能性があります。<br>
最新の情報については、<a href="https://www.anzen.mofa.go.jp/covid19/pdfhistory_world.html" class="c-pink" target="_blank">外務省の通知</a>または、渡航予定先の大使館などへお問い合わせください。</p>
                        </dd>
                    </dl>
 -->

                </div>
                <!-- ./p-question-list -->

    </div>
</section>

<section class="p-banner-area">

<div class="l-inner">
    <h2 class="c-side-skew-line p-banner-area__ttl"><span class="c-side-skew-line__text u-f-maru p-banner-area__ttl-text">新型コロナウイルス豆知識</span></h2>

    <ul class="p-banner-list">
        <li class="p-banner-list__item">
            <a href="<?php echo home_url( '/' ); ?>coming" class="p-banner-list__link">
                <img src="<?php echo get_template_directory_uri(); ?>/img/front/banner01.jpg?6dbddba84c650683" alt="家でできるコロナ感染症対策">
            </a>
        </li>
        <li class="p-banner-list__item">
            <a href="<?php echo home_url( '/' ); ?>coming" class="p-banner-list__link">
                <img src="<?php echo get_template_directory_uri(); ?>/img/front/banner02.jpg?6dbddba84c650683" alt="症状が出る人と出ない人">
            </a>
        </li>
        <li class="p-banner-list__item">
            <a href="<?php echo home_url( '/' ); ?>coming" class="p-banner-list__link">
                <img src="<?php echo get_template_directory_uri(); ?>/img/front/banner03.jpg?6dbddba84c650683" alt="食事で免疫力アップ">
            </a>
        </li>
        <li class="p-banner-list__item">
            <a href="<?php echo home_url( '/' ); ?>coming" class="p-banner-list__link">
                <img src="<?php echo get_template_directory_uri(); ?>/img/front/banner04.jpg?6dbddba84c650683" alt="鼻口部以外の感染経路">
            </a>
        </li>
    </ul>
</div>

</section>

<!-- <section class="p-about-clinic bg-section-gray" id="link-about">

    <div class="l-inner">
        <h2 class="c-ttl-under-center p-about-clinic__ttl">当院について</h2>
        <p class="p-about-clinic__intro">私たちは、患者さまの声に真摯に耳を傾け、<br>健康と豊かさに貢献し、信頼され愛される<br class="u-sp">クリニックを目指しています。</p>

        <div class="p-philosophy-box">
            <h3 class="p-philosophy-box__ttl">基本理念</h3>
            <ol class="p-philosophy-box__list">
                <li class="p-philosophy-box__item">1. 医療ニーズを的確に捉え、安全性を重視し精度の高い医療を提供します。</li>
                <li class="p-philosophy-box__item">2. 患者様の権利を尊重し、患者様の立場で行き届いたサービスを提供します。</li>
                <li class="p-philosophy-box__item">3. 医療従事者の教育・研修に努め、医療の質及び安全性の向上、研鑽を図ります。</li>
                <li class="p-philosophy-box__item">4. 児童の検査無償化活動などを通じて、よりよい未来を創造するため、社会に貢献致します。</li>
            </ol>
        </div>
    </div>

</section> -->

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
                <a href="<?php echo home_url( '/' ); ?>tel/kansenshou.html" class="p-clinic-info-right__tel" target="_blank"><span class="p-clinic-info-right__tel-sq">個人</span>
                <span class="p-clinic-info-right__tel-num">0120-088-120</span></a>
                  <a href="<?php echo home_url( '/' ); ?>tel/campany.html" class="p-clinic-info-right__tel" target="_blank"><span class="p-clinic-info-right__tel-sq">企業・団体</span><span class="p-clinic-info-right__tel-num">06-4708-8082</span></a>
                <p class="p-clinic-info-right__guide">FAX : 06-4708-8105<br>受付 9:00～19:00  不定休</p>
                <!--<p class="p-clinic-info-right__guide"><span class="u-text-under-line">※日・祝日は電話受付を休止しております。</span></p>-->
                <p class="p-clinic-info-right__guide-sub">直接、ご来院する場合は感染対策の都合上、<br class="u-sp">事前にご連絡ください。<br>
                <span style="color:red;">新型コロナウイルス感染疑いの症状がある方は入室できません。
                <!-- また、発熱や味覚障害、感染者との濃厚接触など感染が疑われる症状がある方の受診は行っておりません。 --></span></p>
            </div>
        </div>
    </div>
</section>


<!-- <section class="p-doctor bg-section-gray">

    <div class="l-inner">
        <h2 class="c-bg-ttl p-doctor__ttl">院長紹介</h2>

            <div class="p-doctor-info-box">

                <div class="p-doctor-info-box-top">
                        <div class="p-doctor-info-box-top__left">

                        <p class="p-doctor-info-box-top__intro">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキ
                        </p>

                        <p class="p-doctor-info-box-top__doc-name">
                            <span class="p-doctor-info-box-top__sub">院長</span>
                            <span class="p-doctor-info-box-top__name">テキスト テキスト</span>
                        </p>

                        </div>

                        <div class="p-doctor-info-box-top__right">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/sample.jpg?6dbddba84c650683" alt="準備中">
                        </div>
                </div>


                <div class="p-doctor-info-box-bottom">

                    <div class="p-doctor-info-box-bottom__left">
                            <dl class="p-docter-career --p-society">
                                <dt class="p-docter-career__ttl">所属学会</dt>
                                <dd class="p-docter-career__item">テキストテキスト</dd>
                                <dd class="p-docter-career__item">テキストテキスト</dd>
                                <dd class="p-docter-career__item">テキストテキスト</dd>
                            </dl>

                            <dl class="p-docter-career --p-qualifications">
                                <dt class="p-docter-career__ttl">資格</dt>
                                <dd class="p-docter-career__item">テキストテキスト</dd>
                                <dd class="p-docter-career__item">テキストテキスト</dd>
                                <dd class="p-docter-career__item">テキストテキスト</dd>
                            </dl>
                    </div>


                <div class="p-doctor-info-box-bottom__right">
                    <dl class="p-docter-career p-docter-career-list">
                         <dt class="p-docter-career__ttl">経歴</dt>
                         <dd class="p-docter-career__item p-docter-career__year-item">
                             <span class="p-docter-career__year">2005年</span>
                             <span class="p-docter-career__year-contents">テキストテキストテキストテキストテキストテキスト</span>
                         </dd>
                         <dd class="p-docter-career__item p-docter-career__year-item">
                             <span class="p-docter-career__year">2005年</span>
                             <span class="p-docter-career__year-contents">テキストテキストテキストテキストテキストテキスト</span>
                         </dd>
                         <dd class="p-docter-career__item p-docter-career__year-item">
                             <span class="p-docter-career__year">2005年</span>
                             <span class="p-docter-career__year-contents">テキストテキストテキストテキストテキストテキスト</span>
                         </dd>
                         <dd class="p-docter-career__item p-docter-career__year-item">
                             <span class="p-docter-career__year">2005年</span>
                             <span class="p-docter-career__year-contents">テキストテキストテキストテキストテキストテキスト</span>
                         </dd>
                         <dd class="p-docter-career__item p-docter-career__year-item">
                             <span class="p-docter-career__year">2005年</span>
                             <span class="p-docter-career__year-contents">テキストテキストテキストテキストテキストテキスト</span>
                         </dd>
                         <dd class="p-docter-career__item p-docter-career__year-item">
                             <span class="p-docter-career__year">2005年</span>
                             <span class="p-docter-career__year-contents">テキストテキストテキストテキストテキストテキスト</span>
                         </dd>
                         <dd class="p-docter-career__item p-docter-career__year-item">
                             <span class="p-docter-career__year">2005年</span>
                             <span class="p-docter-career__year-contents">テキストテキストテキストテキストテキストテキスト</span>
                         </dd>
                    </dl>
                </div>

            </div>

    </div>

</section> -->

<section class="p-guidance">

    <h2 class="c-sq-row-ttl p-guidance__ttl">
        <span class="c-sq-row-ttl__sq">迅速検査・通常検査</span>
        <span class="c-sq-row-ttl__text">感染症検査のご案内</span>
    </h2>

    <div class="p-guidance-slide-wrap">
            <ul class="p-guidance-slide" id="js-guidance-slide">
                <li class="p-guidance-slide__item">
                    <a href="<?php echo home_url( '/' ); ?>typeb" class="p-guidance-slide__link">
                        <div class="p-guidance-slide__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/inspection_slide01.jpg?6dbddba84c650683" alt="B型肝炎">
                        </div>
                        <!-- ./p-guidance-slide__list__thumb -->
                        <p class="p-guidance-slide__name">B型肝炎</p>
                        <i class="p-guidance-slide__btn"></i>
                        <i class="p-guidance-slide__btn-over-arw"></i>
                    </a>
                </li>

                <li class="p-guidance-slide__item">
                    <a href="<?php echo home_url( '/' ); ?>seybyou" class="p-guidance-slide__link">
                        <div class="p-guidance-slide__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/inspection_slide02.jpg?6dbddba84c650683" alt="性病検査">
                        </div>
                        <!-- ./p-guidance-slide__list__thumb -->
                        <p class="p-guidance-slide__name">性病検査</p>
                        <i class="p-guidance-slide__btn"></i>
                        <i class="p-guidance-slide__btn-over-arw"></i>
                    </a>
                </li>

                <!--<li class="p-guidance-slide__item">
                    <a href="<?php echo home_url( '/' ); ?>hiv" class="p-guidance-slide__link">
                        <div class="p-guidance-slide__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/inspection_slide03.jpg?6dbddba84c650683" alt="HIV検査">
                        </div>
                        <p class="p-guidance-slide__name">HIV検査</p>
                        <i class="p-guidance-slide__btn"></i>
                        <i class="p-guidance-slide__btn-over-arw"></i>
                    </a>
                </li>-->

                <li class="p-guidance-slide__item">
                    <a href="<?php echo home_url( '/' ); ?>sumea" class="p-guidance-slide__link">
                        <div class="p-guidance-slide__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/inspection_slide04.jpg?6dbddba84c650683" alt="頚がんスメア・子宮体がんスメア">
                        </div>
                        <!-- ./p-guidance-slide__list__thumb -->
                        <p class="p-guidance-slide__name">頚がんスメア・子宮体がんスメア</p>
                        <i class="p-guidance-slide__btn"></i>
                        <i class="p-guidance-slide__btn-over-arw"></i>
                    </a>
                </li>
                 <li class="p-guidance-slide__item">
                    <a href="<?php echo home_url( '/' ); ?>typec" class="p-guidance-slide__link">
                        <div class="p-guidance-slide__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/inspection_slide05.jpg?6dbddba84c650683" alt="C型肝炎">
                        </div>
                        <!-- ./p-guidance-slide__list__thumb -->
                        <p class="p-guidance-slide__name">C型肝炎</p>
                        <i class="p-guidance-slide__btn"></i>
                        <i class="p-guidance-slide__btn-over-arw"></i>
                    </a>
                </li>
            </ul>

            <div class="p-slide-dots-wrap" id="js-nav">

            </div>
    </div>
    <!-- ./p-guidance-slide-wrap -->

</section>


<section class="p-online">

<div class="u-sp p-line-thumb-sp">
    <img src="<?php echo get_template_directory_uri(); ?>/img/front/line_thumb_sp.jpg?6dbddba84c650683" alt="クリニクスでオンライン診療のご案内">
</div>

<div class="l-inner l--sp-width100">
    <div class="p-online-box">
        <h2 class="p-online-box__ttl"><span class="">クリニクスでもご不明点・ご相談<br class="u-pc">お受けしております。</span></h2>
        <p class="p-online-box__desc">来院不要、検査キットはご郵送。<br class="">クリニクス上で問診を行っております。</p>
        <a href="<?php echo home_url( '/' ); ?>clinics" class="c-btn-circle-arw p-online-box__btn">ご利用案内</a>
    </div>
    <!-- ./box -->
</div>
<!-- ./l-inner -->

</section>




<?php elseif ('en_US' == $locale): ?>



<div class="p-key-visual">
    <div class="l-inner p-key-visual__inner">
            <div class="p-key-visual__text-wrap p-key-visual__text-wrap--other">
                                <div class="p-key-visual__text-left">
                                    <h1 class="p-key-visual__ttl">
                                        <span class="p-key-visual__ttl-sub">New Coronavirus</span>PCR Test
                                    </h1>
                                </div>
                                <!-- ./p-key-visual__text-left -->

                                <div class="p-key-visual__text-right u-f-ryu">
                                   For a future full of hope,<br>
                                    starting from specimen tests, <br>
                                    we do what we can, with what we have.  <br>

                                </div>
                                <!-- ./p-key-visual__text-right -->
            </div>
            <!-- ./p-key-visual__text-wrap -->


            <div class="p-fv-anchor">
                    <a href="#link-inspection-personal" class="p-fv-anchor__btn">
                            <div class="p-fv-anchor__row">
                                <i class="p-fv-anchor__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/front/new_anchor_icon.png?01e6da09cffbc180" alt="アイコン"></i>
                                <h3 class="p-fv-anchor__right"><span class="p-fv-anchor__yellow">Personal</span>testing</h3>
                            </div>

                            <p class="p-fv-anchor__bottom">We also issue certificates necessary for overseas travel.</p>

                    </a>
            </div>
    </div>
    <!-- ./l-inner -->
</div>
<!-- ./key-visual -->

<section class="p-cost p-cost--top p-cost--top--other">
    <div class="l-inner">
        <h2 class="c-ttl-under-center p-cost__ttl c-blue">Cost of testing</h2>
        <p class="p-cost__desc c-blue">The price includes the test kit, shipping, specimen collection guide, and testing.</p>

        <dl class="p-cost-price u-mb10">
                <dt class="p-cost-price__name"><span class="p-cost-price__name-in">One PCR test  </span></dt>
                <dd class="p-cost-price__text"><span class="p-cost-price__text-main"><!-- 18,000 -->14,800</span><span class="p-cost-price__text-sub">yen (ex. tax)</span></dd>
        </dl>
         <dl class="p-cost-price  u-mb10">
                <dt class="p-cost-price__name"><span class="p-cost-price__name-in">Set of 5<br class="u-sp">PCR tests </span></dt>
                <dd class="p-cost-price__text"><span class="p-cost-price__text-main">11,840 yen <br class="u-sp">pertest</span><span class="p-cost-price__text-sub">(ex. tax)</span><!-- <span class="aaaaa">＊1個あたり</span> -->
                <div class="aaaaa" style="padding-top:10px;"> total 59,200 yen (ex. tax)</div>
                </dd>
        </dl>

         <dl class="p-cost-price  u-mb10">
                <dt class="p-cost-price__name"><span class="p-cost-price__name-in">Set of 10<br class="u-sp">PCR tests</span></dt>
                <dd class="p-cost-price__text"><span class="p-cost-price__text-main">8,880 yen <br class="u-sp">pertest</span><span class="p-cost-price__text-sub">(ex. tax)</span>
               <div class="aaaaa" style="padding-top:10px;">Total 88,800 yen(ex. tax)</div></dd>
        </dl>

        <p class="p-cost__under-desc">Since the PCR test at our Clinic is intended for everyone who wants to be tested, it is not covered by your health insurance. <br class="">
Those who meet the conditions for administrative inspection, such as <br class="">
"I have a history of traveling and am not in good physical condition", or "I have been in close contact with infected persons”, may be able to be treated at local government facilities under the health insurance scheme, so please ask the consultation desk of the public health center in your area.</p>


        <a href="<?php echo home_url( '/' ); ?>item-list" class="c-btn p-cost-btn p-cost-btn--other">Click here to <br class="u-sp">purchase/apply</a>

            <!-- キャンペーンバナー -->
       <!--  <div class="p-cap">
            <img src="<?php echo get_template_directory_uri(); ?>/img/common/cap_bnr.jpg?0825" alt="期間限定8/31(月)まで期間限定でお試ししやすい価格でご提供させていただきます。" class="u-pc">

            <img src="<?php echo get_template_directory_uri(); ?>/img/common/cap_bnr_sp.jpg?0825" alt="期間限定8/31(月)まで期間限定でお試ししやすい価格でご提供させていただきます。" class="u-sp">
        </div> -->
        <!-- ./p-cap -->
    </div>
    <!-- ./l-inner -->
</section>



<style>

@media (min-width: 768px) {
    .p-case-slide {
    margin: 0 .4rem
}

.p-case-slide-check {
    padding-right: 0;
}
}


</style>



<section class="c-ttl-skew --skew-pink p-personal-inspection-area" id="link-inspection-personal">

<div class="l-inner">

                <h2 class="c-title-under-circle --circle-small p-personal-inspection-ttl">
                Personal inspection
                </h2>



    <ul class="p-personal-inspection-action ">

            <li class="p-personal-inspection-action__item max-width-auto">

                <a href="#link-use" class="p-personal-inspection-action__link">

                    <img src="<?php echo get_template_directory_uri(); ?>/img/front/personal_inspection_thumb01_new.jpg?6dbddba84c650683" alt="" class="p-personal-inspection-action__pc-thumb u-pc-display">

                    <div class="p-personal-inspection-action__bottom  --sp-bg-img01">
                        <div class="p-personal-inspection-action__bottom-inner c-blue">
                             <span class="p-personal-inspection-action__ttl-text"> User guide</span>
                            <span class="c-btn-arw-sq__right-box p-personal-inspection-action__right-box bg-blue">
                                <i class="c-btn-arw-sq__arw p-personal-inspection-action__arw"></i>
                            </span>
                        </div>
                        <!-- ./p-personal-inspection-action__bottom-inner -->
                    </div>
                    <!-- ./p-personal-inspection-action__bottom -->
                </a>
            </li>


             <li class="p-personal-inspection-action__item max-width-auto">

                <a href="<?php echo home_url( '/' ); ?>item-list" class="p-personal-inspection-action__link">

                    <img src="<?php echo get_template_directory_uri(); ?>/img/front/personal_inspection_thumb03_new.jpg?6dbddba84c650683" alt="" class="p-personal-inspection-action__pc-thumb u-pc-display">

                    <div class="p-personal-inspection-action__bottom --sp-bg-img03">
                        <div class="p-personal-inspection-action__bottom-inner c-orange">
                             <span class="p-personal-inspection-action__ttl-text">Purchase of specimen <br class="u-sp">collection kit</span>
                            <span class="c-btn-arw-sq__right-box p-personal-inspection-action__right-box bg-orange">
                                <i class="c-btn-arw-sq__arw p-personal-inspection-action__arw"></i>
                            </span>
                        </div>
                        <!-- ./p-personal-inspection-action__bottom-inner -->
                    </div>
                    <!-- ./p-personal-inspection-action__bottom -->
                </a>
            </li>

    </ul>
</div>

</section>

<section class="p-trouble bg-section-gray">
    <div class="l-inner">
            <h2 class="p-trouble__ttl">
                <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_ttl_en.png?6dbddba84c650683" alt="こんなお悩みがあればご相談ください" class="u-pc">
                 <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_ttl_sp_en.png?6dbddba84c650683" alt="こんなお悩みがあればご相談ください" class="u-sp">
            </h2>

            <ul class="p-trouble-list">
                    <li class="p-trouble-list__item">
                        <div class="p-trouble-list__texts">
                            <p class="p-trouble-list__num u-pc-display">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_num01.png?6dbddba84c650683" alt="01">
                            </p>
                            <p class="p-trouble-list__desc">
                                Those who need a PCR test certificate at their place of employment
                            </p>
                        </div>
                        <!-- ./p-trouble-list__texts -->
                        <div class="p-trouble-list__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_point01.png?6dbddba84c650683" alt="01" class="u-sp">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_point01_pc.png?6dbddba84c650683" alt="" class="u-pc">
                        </div>
                        <!-- ./p-trouble-list__img -->
                    </li>
                    <li class="p-trouble-list__item">
                        <div class="p-trouble-list__texts">
                                <p class="p-trouble-list__num u-pc-display">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_num02.png?6dbddba84c650683" alt="01">
                                </p>
                                <p class="p-trouble-list__desc">
                                    Those who need a PCR test certificate for overseas travel or return to Japan
                                </p>
                                <a href="<?php echo home_url( '/' ); ?>voyage" class="c-blue-arw-btn p-trouble-list__btn">See in detail</a>
                           </div>
                        <!-- ./p-trouble-list__texts -->
                        <div class="p-trouble-list__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_point02.png?6dbddba84c650683" alt="01" class="u-sp">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_point02_pc.png?6dbddba84c650683" alt="" class="u-pc">
                        </div>
                    </li>
                    <li class="p-trouble-list__item">
                         <div class="p-trouble-list__texts">
                                <p class="p-trouble-list__num u-pc-display">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_num03.png?6dbddba84c650683" alt="01">
                                </p>
                                <p class="p-trouble-list__desc">
                                    Those who are worried that they may have contracted a new coronavirus infection in the past
                                </p>
                         </div>
                        <!-- ./p-trouble-list__texts -->
                        <div class="p-trouble-list__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_point03.png?6dbddba84c650683" alt="03" class="u-sp">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_point03_pc.png?6dbddba84c650683" alt="" class="u-pc">
                        </div>
                    </li>
                    <li class="p-trouble-list__long-desc">
                        Our Clinic intends that everybody who wishes to have a PCR test can do so on an equal basis.
This is because we believe that even if there are no symptoms, it will lead to early detection of infection in those who are unaware of the disease and will have the effect of preventing outbreaks.
                    </li>
            </ul>

            <h3 class="p-trouble-band js-accordion-pt2">For those who already <br class="u-sp"> have some symptoms
                <i class="p-trouble-band__icon-plus-wrap"><span class="p-trouble-band__icon-plus js-icon-plus"></span></i>
            </h3>

            <div class="p-trouble-sub-contents">

                <p class="p-trouble-sub-contents__right">f you have early symptoms specific to corona infection such as "I can’t taste anything" or "I have a fever of 37.5°C or higher persistently ", you can undergo an administrative inspection.In that case, please contact the consultation center in your area.</p>

                <div class="p-trouble-sub-contents__tables p-trouble-tables-other">
                        <dl class="p-trouble-sub-contents__table-list">
                            <dt class="p-trouble-sub-contents__table-ttl">Most common early symptoms</dt>
                            <dd class="p-trouble-sub-contents__table-answer">Fever, dry cough, malaise</dd>
                        </dl>

                        <dl class="p-trouble-sub-contents__table-list --table-right">
                            <dt class="p-trouble-sub-contents__table-ttl --table-bg-gray">Occasional early <br> symptoms</dt>
                            <dd class="p-trouble-sub-contents__table-answer --table-right__answer">Pain, sore throat, diarrhea, conjunctivitis, headache, loss of taste or smell, skin rash, or discoloration of fingers and toes</dd>
                        </dl>
                </div>

            </div>
    </div>
</section>


<section class="p-pcr-about">
            <div class="c-ttl-skew --skew-blue02">
                <h2 class="c-title-under-circle c-ttl-skew__text p-pcr-about__ttl">
                About our PCR test
                </h2>
            </div>
            <!-- ./skew-ttl -->
            <div class="l-inner">


                    <div class="p-pcr-about-row">

                        <div class="p-pcr-about-textbox">
                            <h3 class="c-ttl-bl-line p-pcr-about-textbox__ttl --c-blue">
                                <span class="c-ttl-bl-line__text p-pcr-about-textbox__ttl-sub --c-blue__text">
                                        Painless sampling
                                </span>
                            </h3>

                            <p class="p-pcr-about-textbox__desc">The conventional specimen collection method were to use swabs (a cotton swab with a long handle) to collect nasal cavity specimens, which was rather painful, but the PCR test at our Clinic uses saliva specimens, so anyone can easily collect them.。</p>
                            <p class="p-pcr-about-textbox__desc u-mb0">Also, according to Ministry of Health, Labor and Welfare research, it was proven that saliva can be used for the PCR test with almost the same accuracy as nasopharyngeal swabs, so it is reliable.</p>

                            <a href="https://www.mhlw.go.jp/content/10906000/000635988.pdf" class="c-link-blank p-pcr-about-textbox__link c-pink" target="_blank">Ministry of Health, Labor and Welfare website ></a>
                        </div>
                        <!-- ./p-pcr-about-textbox -->

                    <ul class="p-pcr-about-illust">

                        <li class="p-pcr-about-illust__item height-auto">
                            <div class="p-pcr-about-illust__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/front/pcr_illustration01.png?6dbddba84c650683" alt="">
                            </div>
                            <!-- ./p-pcr-about-illust__img -->

                            <div class="p-pcr-about-illust__bottom">
                                <h4 class="p-pcr-about-illust__ttl">Conventional specimen collection method</h4>
                                <p class="p-pcr-about-illust__desc">A doctor or other professional collects mucus directly from the nose with a cotton swab.</p>
                            </div>
                            <!-- ./p-pcr-about-illust__bottom -->
                        </li>

                        <li class="p-pcr-about-illust__item --bdc-blue height-auto">
                            <div class="p-pcr-about-illust__img --bg-light-blue">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/front/pcr_illustration02.png?6dbddba84c650683" alt="">
                            </div>
                            <!-- ./p-pcr-about-illust__img -->

                            <div class="p-pcr-about-illust__bottom --bdc-blue">
                                <h4 class="p-pcr-about-illust__ttl --blue">Collection method at our Clinic </h4>
                                <p class="p-pcr-about-illust__desc">Patients undergoing the test put a sample of their saliva in a container themselves.</p>
                            </div>
                            <!-- ./p-pcr-about-illust__bottom -->
                        </li>

                    </ul>

                </div>
                <!-- ./p-pcr-about-row -->
        </div>
        <!-- ./l-inner -->
</section>



<section class="p-pcr-kit bg-section-gray" id="link-kit">
    <div class="l-inner">
        <h2 class="c-ttl-under-center p-pcr-kit__ttl c-blue">About the PCR test kit</h2>
        <div class="p-pcr-kit-row p-en-pcr-row">
            <div class="p-pcr-item-box p-en-pcr-row__left">
                <div class="p-pcr-item-box__thumb">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/front/Inspection_Item_old.jpg?33b09c8d99b80172" alt="PCR検体採取キット">
                </div>
                <!-- ./p-pcr-item-box__thumb -->
                <dl class="p-pcr-item-box__desc">
                    <dt class="p-pcr-item-box__name">Accessories</dt>
                    <dd class="p-pcr-item-box__desc-text">
                        <ul class="p-pcr-item-box__list">
                            <li class="p-pcr-item-box__list-item">・ Procedure manual</li>
                            <li class="p-pcr-item-box__list-item">・ Saliva collection funnel</li>
                                <li class="p-pcr-item-box__list-item">・ Small pouch bag </li>
                                 <li class="p-pcr-item-box__list-item">・ Large pouch bag </li>
                            <li class="p-pcr-item-box__list-item">・ Cushion bag</li>

                                 <li class="p-pcr-item-box__list-item">・ Water-absorbent paper</li>
                            <li class="p-pcr-item-box__list-item">・ Application form for notification of test result</li>
                                <li class="p-pcr-item-box__list-item">・ Return envelope</li>
                        </ul>
                    </dd>
                </dl>
            </div>
            <!-- ./p-pcr-item-box -->

            <div class="p-pcr-right-contents p-en-pcr-row__right">
                    <p class="p-pcr-right-contents__desc">After purchasing the kit, please check the enclosed procedure manual. <br>
If you have any questions, please use the "Online Guide" to provide information about saliva collection process and to explain the setup. <br>
At that time, you can make a video call via CLINICS, so please have a smartphone or a PC with a camera ready.</p>
                    <a href="<?php echo home_url( '/' ); ?>item-list" class="c-btn-circle-arw p-pcr-right-contents__btn">To purchase, click here</a>
            </div>
            <!-- ./p-pcr-right-contents -->
        </div>
        <!-- ./p-pcr-kit-row -->
    </div>
    <!-- ./l-inner -->
</section>




<section class="p-diff">

<div class="l-inner">
     <h2 class="c-ttl-under-center p-diff__ttl c-blue u-fw600">Difference between PCR test and antibody test</h2>
     <p class="p-diff__text u-tc u-fw600">The PCR test is used to check for “current” infection status, whereas the antibody test that allows you to find out if you were infected in the "past".</p>

     <div class="p-diff__table">
     <img src="<?php echo get_template_directory_uri(); ?>/img/front/diff_table_en.png?49486b220bbca61da" alt="検査対象期間" class="u-pc">
     <img src="<?php echo get_template_directory_uri(); ?>/img/front/diff_table_sp_en.png?49486b220bbca61da" alt="検査対象期間" class="u-sp">
     </div>

</div>


</section>


<section class="p-use-flow bg-section-gray" id="link-use">
    <div class="l-inner js-tab-wrap">
        <h2 class="c-ttl-under-center p-use-flow__ttl c-blue">How to use the test</h2>
       <!--  <p class="u-tc u-fw600 p-use-flow__note">ご注文された方のお住まいによって、<br class="u-sp">ご利用方法が変わります。</p> -->


    <!--     <ul class="p-chart-btn">
                <li class="p-chart-btn__item p-chart-btn__item--01 js-tab-btn is-tab-active"><span class="p-chart-btn__in-text">東京、名古屋、大阪、福岡にお住いの方</span></li>
                <li class="p-chart-btn__item p-chart-btn__item--02 js-tab-btn"><span class="p-chart-btn__in-text">それ以外の地域の方</span></li>
        </ul>
 -->



                     <div class="p-use-chart p-use-chart--other">
                <!-- 左のチャート -->
                <ul class="p-use-chart__left p-use-chart-list">
                    <li class="p-use-chart-list-top p-chert-left-row01 p-pos-left c-bg-water-blue">
                        <div class="p-use-chart-list-top__inner p-inner-row01">
                                <i class="p-use-chart-list-top__icon c-bg-water-blue">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/front/flow_icon01.png?6dbddba84c650683" alt="アイコン">
                                </i>
                                <p class="p-use-chart-list-top__name">Patient</p>
                        </div>
                    </li>
                    <li class="p-use-chart-list-item p-chert-left-row02 p-pos-left c-bdc-water-blue">
                        <div class="p-use-chart-list-item__inner p-inner-left  p-inner-row02">
                            <p class="p-use-chart-list-item__text">Please purchase a specimen collection kit from this site.</p>
                            <a href="<?php echo home_url( '/' ); ?>item-list" class="c-btn-circle-arw p-use-chart-list-item__btn p-use-chart-list-item__btn--other u-sp-flex-al-cent">To purchase, <br class="u-sp">click here</a>
                        </div>
                    </li>
                     <li class="p-use-chart-list-item p-chert-left-row03 p-chert-left-row03--02 p-pos-left c-bdc-water-blue">
                           <div class="p-use-chart-list-item__inner p-inner-left ">
                        <p class="p-use-chart-list-item__text u-tl u-mb0">When you receive the specimen collection kit, check the items inside while referring to the enclosed guide.</p>

                          </div>
                    </li>
                    <li class="p-use-chart-list-item  p-chert-left-row04 p-chert-left-row04--02 p-pos-left c-bdc-water-blue">
                          <div class="p-use-chart-list-item__inner p-inner-left p-inner-row03">
                        <div class="p-use-chart-list-item__row">
                                    <div class="p-use-chart-list-item__thumb --spspsp">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/front/flow_left_thumb01.png?36d7dca331e72df0" alt="thumb">
                                    </div>

                                    <p class="p-use-chart-list-item__l-text p-use-chart-list-item__l-text--other">Please read your guide or read the following page for how to collect the specimen.<br>
                                      <a href="<?php echo home_url( '/' ); ?>use?tab=01" class="c-btn-circle-arw p-use-chart-list-item__btn u-mb10 p-use-chart-list-item__btn--other">PCR saliva <br class="u-sp">collection procedure</a>

                                      <a href="<?php echo home_url( '/' ); ?>use?tab=02" class="c-btn-circle-arw p-use-chart-list-item__btn u-mt0 p-use-chart-list-item__btn--other">Antibody test <br class="u-sp">procedure</a>
                                    </p>

                                      </div>
                        </div>
                    </li>

                       <li class="p-use-chart-list-item p-chert-left-row09 p-chert-left-row09--other p-pos-left c-bdc-water-blue">
                          <div class="p-use-chart-list-item__inner p-inner-left  p-inner-row04">
                        <div class="p-use-chart-list-item__text u-tl u-mb0">
                                   When the specimen collection is complete, follow the instructions on the back of "Steps to collect saliva for PCR tests" to package the sample.
                        </div>
                           </div>
                    </li>
                     <li class="p-use-chart-list-item p-chert-left-row06 p-chert-left-row06--02 p-chert-left-row06--02--other p-pos-left c-bdc-water-blue">
                          <div class="p-use-chart-list-item__inner p-inner-left  p-inner-row04">
                        <div class="p-use-chart-list-item__row">
                                    <div class="p-use-chart-list-item__thumb --thumb-letter">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/front/chart_letter.jpg?36d7dca331e72df0" alt="thumb">
                                    </div>

                                    <p class="p-use-chart-list-item__l-text">After packaging it, please send it to our Clinic.</p>
                        </div>
                           </div>
                    </li>

                     <li class="p-use-chart-list-item p-chert-left-row07 p-chert-left-row07--02 p-chert-left-row07--02--other p-pos-left c-bdc-water-blue">
                          <div class="p-use-chart-list-item__inner p-inner-left  p-inner-row04">
                        <div class="p-use-chart-list-item__text u-mb0">
                                   If you have any subjective symptoms or have a history of close contact with an infected person, you will be on standby at home.
                        </div>
                           </div>
                    </li>

                </ul>

                <!-- 真ん中のライン -->
                <div class="p-use-chart__center">
                   <!--  <img src="<?php echo get_template_directory_uri(); ?>/img/front/flow_center_line.png?6dbddba84c650683" alt="LINE" class="u-pc">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/front/flow_center_line_sp.png?6dbddba84c650683" alt="LINE" class="u-sp"> -->
                </div>
                <!-- ./center -->

                   <!-- 左のチャート -->
              <ul class="p-use-chart__left p-use-chart-list">
                    <li class="p-use-chart-list-top p-chert-right-row01 p-pos-right c-bg-deep-pink">
                       <div class="p-use-chart-list-top__inner p-inner-row01">
                               <i class="p-use-chart-list-top__icon c-bg-deep-pink">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/front/flow_icon02.png?6dbddba84c650683" alt="アイコン">
                                </i>
                                <p class="p-use-chart-list-top__name">Our Clinic</p>
                        </div>
                    </li>

                    <li class="p-use-chart-list-item  p-chert-right-row02 p-pos-right c-bdc-pink">
                          <div class="p-use-chart-list-item__inner p-inner-right p-item-pd-pt02 p-item-pd-pt04 p-inner-row08">
                        <div class="p-use-chart-list-item__row u-sp-ff-reverse">


                                    <p class="p-use-chart-list-item__l-text">After receiving your order, we will ship the specimen collection kit.</p>

                                    <div class="p-use-chart-list-item__thumb --thumb-w-small">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/front/flow_right_thumb01_old.jpg?33b09c8d99b80172" alt="thumb">
                                    </div>

                        </div>
                    </li>



                       <li class="p-use-chart-list-item p-chert-right-row05 p-chert-right-row05--02 p-chert-right-row05--02--other p-pos-right c-bdc-pink">
                           <div class="p-use-chart-list-item__inner p-inner-right ">
                       <p class="p-use-chart-list-item__text u-tl">After the specimen arrives at our Clinic, we will perform a PCR test on the patient's saliva in order.
Although it depends on how congested the situation is, we will inform you of the result about 1 to 2 days after the specimen arrives at the Clinic.</p>
                            <a href="https://souki-kai.or.jp/rslt/" class="c-btn-circle-arw p-use-chart-list-item__btn  c-bg-deep-pink p-use-chart-list-item__btn--other" target="_blank">
                            <span class="u-pc">Go to the </span>test results <br class="u-sp">confirmation site

                        </a>
                          </div>
                    </li>

                     <li class="p-use-chart-list-item p-chert-right-row-clinics p-pos-right  c-bdc-pink">
                           <div class="p-use-chart-list-item__inner p-inner-right --ball-none">
                               <p class="p-chart-clinics-logo">
                                   <img src="<?php echo get_template_directory_uri(); ?>/img/cinics/clinics_logo.png?6dbddba84c650683" alt="">
                               </p>

                               <p class="p-chart-clinics-desc u-tc">If you have any concerns or questions regarding your specimen collection and collection requests, online consultation is available.</p>
                       <p class="p-use-chart-list-item__text u-tc">After registering an account with CLINICS, search for "Infectious Disease Testing Clinic" and make an appointment for an online consultation.
In order to use the service, you need a smartphone or PC that can make video calls.
Please have one ready in advance.</p>
                            <a href="<?php echo home_url( '/' ); ?>clinics" class="c-btn-circle-arw p-use-chart-list-item__btn  p-use-chart-list-item__btn--other c-bg-deep-pink">
                            <span class="u-pc-display">Click here for more information.</span>
                            <span class="u-sp-display"><!-- 詳しいご説明<br>はこちら -->Click here for <br>more information.</span>
                        </a>
                          </div>
                    </li>
                </ul>
            </div>




    </div>
    <!-- ./l-inner -->
</section>



           <section class="p-chart-bottom-area bg-section-gray">
                <div class="p-chart-bottom">

                <div class="p-use-chart-list-top p-chart-bottom-top c-bg-purple">

                    <div class="p-use-chart-list-top__inner p-chart-bottom-top__inner">
                            <i class="p-use-chart-list-top__icon p-chart-bottom-top__icon c-bg-purple">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/front/flow_icon03.png?6dbddba84c650683" alt="アイコン"></i>
                            <p class="p-chart-bottom-top__desc">Since test results are very sensitive information, you can be notified of your results by the method of your choice, i.e., by phone or on the Web.
Please tell the special staff when you receive Web guidance.</p>
                            <p class="p-chart-bottom-top__nunber u-f-black-sword">Check!</p>
                            <!-- <span href="https://souki-kai.or.jp/rslt/" class="c-btn-arw-sq p-use-chart-list-top__btn" target="_blank">検査結果通知サイト<span class="c-btn-arw-sq__right-box p-use-chart-list-top__btn-right"><i class="c-btn-arw-sq__arw p-use-chart-list-top__btn-arw"></i></span></a> -->
                    </div>
                    <!-- ./p-use-chart-list-top__inner -->

                </div>
                <!-- ./p-chart-bottom-top -->

                <ul class="p-chart-bottom-list">

                    <li class="p-chart-bottom-item p-chart-bottom-item--left c-bg-orange">

                        <p class="p-chart-bottom-item__radius p-chart-bottom-item__radius--other p-chart-bottom-item__radius--left c-orange02">Negative</p>
                        <p class="p-chart-bottom-item__desc">If you get a negative result, we can also issue a certificate.</p>
                        <p class="p-chart-bottom-item__desc-list">※A separate fee will be charged for issue of certificates.<br>Please see the purchase page for details.</p>

                        <a href="<?php echo home_url( '/' ); ?>certificate" class="c-btn-arw-sq p-chart-bottom-item__btn">certificate page<span class="c-btn-arw-sq__right-box p-chart-bottom-item__btn-right"><i class="c-btn-arw-sq__arw p-chart-bottom-item__btn-arw"></i></span></a>
                    </li>
                    <li class="p-chart-bottom-item p-chart-bottom-item--right c-bg-deep-gray">

                        <p class="p-chart-bottom-item__radius p-chart-bottom-item__radius--other  p-chart-bottom-item__radius--right c-deep-gray">Positive</p>
                        <p class="p-chart-bottom-item__desc">Basically, you must follow the guidance of an authorized public health center in your area.</span><br>Mild and asymptomatic patients will be informed of "recuperation at designated hotels or at home", while severe patients will be required to be hospitalized at medical institutions designated for infectious diseases or recuperate at designated hotels.</p>
                        <p class="p-chart-bottom-item__desc-note">If you have an underlying illness or are over 65 years old, you will be hospitalized.</p>

                    </li>
                </ul>

                <p class="p-chart-bottom-link-wrap u-tc">
                    <a href="https://www.fukushihoken.metro.tokyo.lg.jp/iryo/kansen/syukuhaku.html" class="p-chart-bottom-under-link" target="_blank">Regarding recuperation at home or at the hotels for mild patients with new coronavirus infection</a>
                </p>

                <div class="p-chart-sp-down-arw p-chart-sp-down-arw--other --down-arw-left --down-arw-left--other c-bg-purple u-sp">
                    <div class="p-chart-sp-down-arw__inner"></div>
                </div>

                <div class="p-chart-sp-down-arw p-chart-sp-down-arw--other  --down-arw-right --down-arw-right--other c-bg-purple u-sp">
                     <div class="p-chart-sp-down-arw__inner"></div>
                </div>

            </div>
            <!-- ./p-chart-bottom -->
           </section>

           <section class="p-movie bg-section-gray">

            <div class="l-inner">

                 <!--    <h2 class="c-ttl-under-center p-movie__ttl c-blue">検査費用</h2> -->

                    <div class="p-movie__contents">
                  <!--   <iframe class="p-movie__in" src="https://www.youtube.com/embed/uyHifGfxbUw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                  <img src="<?php echo get_template_directory_uri(); ?>/img/front/movie_sample.jpg?6dbddba84c650683" alt="">

                    </div>


            </div>
            <!-- ./l-inner -->
           </section>







<section class="p-labo">
                <div class="l-inner">
                            <div class="p-labo-contents">
                                <div class="p-labo-desc">
                                     <h3 class="c-ttl-bl-line p-labo-desc__ttl  ">
                                            <span class="c-ttl-bl-line__text    p-labo-desc__ttl-sub --c-yellow__text">
                                                    About our Clinic Laboratory
                                            </span>
                                    </h3>

                                    <p class=" p-labo-desc__text">All PCR tests at our Clinic are performed and analyzed in our in-house laboratory.Therefore, compared to other clinics that outsource PCR testing, we can keep the cost per test low, and we can respond efficiently to get the results quickly.</p>

                                </div>



                            </div>
                </div>
</section>


<section class="p-question bg-section-gray" id="link-qa">
    <div class="l-inner">

                <h2 class="c-ttl-under-center p-question__ttl c-blue">よくある質問</h2>

                <div class="p-question-list">

                    <?php
                    $args = array(
                    'post_type' => 'faq',
                    'posts_per_page' => 5,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    );
                    $the_query = new WP_Query( $args );
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                    ?>




                        <dl class="p-question-box">
                            <dt class="p-question-box__ttl js-accordion">
                                <span class="p-question-box__fst-letter u-f-futura c-blue02">Q.</span>
                                <span class="p-question-box__qa-text"><?php the_title(); ?></span>
                            </dt>
                            <dd class="p-question-box__answer">
                                <span class="p-question-box__fst-letter u-f-futura c-pink02">A.</span>
                                <p class="p-question-box__answer-text"><?php remove_filter('the_content', 'wpautop'); ?><?php the_content(); ?></p>
                            </dd>
                        </dl>




                    <?php endwhile; wp_reset_postdata(); ?>



                       <a href="<?php echo home_url( '/' ); ?>faq-personal" class="c-btn-circle-arw p-question__btn">よくある質問一覧へ</a>





                </div>
                <!-- ./p-question-list -->

    </div>
</section>


<section class="p-clinic-info u-bg-cover" id="link-clinic">
    <div class="l-access-inner">
        <div class="p-clinic-info-row">
            <div class="p-clinic-info-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/common/c_header_logo.png?6dbddba84c650683" alt="感染症検査クリニック">
            </div>
            <!-- ./p-clinic-info-logo -->
            <div class="p-clinic-info-right">
                <h3 class="p-clinic-info-right__ttl">Access</h3>
                <p class="p-clinic-info-right__address">3F, Ookini Nishishinsaibashi BirthPlace Bldg. <br>
2-13-16 Nishishinsaibashi, Chuo-ku, Osaka-shi, Osaka-fu,<br>
542-0086 Japan
</p>
                <a href="<?php echo home_url( '/' ); ?>tel/kansenshou.html" class="p-clinic-info-right__tel" target="_blank"><span class="p-clinic-info-right__tel-sq">Individuals</span>
                <span class="p-clinic-info-right__tel-num">0120-088-120</span></a>
                  <a href="<?php echo home_url( '/' ); ?>tel/campany.html" class="p-clinic-info-right__tel" target="_blank"><span class="p-clinic-info-right__tel-sq">Companies / Organizations</span><span class="p-clinic-info-right__tel-num">06-4708-8082</span></a>
                <p class="p-clinic-info-right__guide">FAX : 06-4708-8105<br>Reception hours 9:00～19:00  No fixed holidays</p>
                <!--<p class="p-clinic-info-right__guide"><span class="u-text-under-line">※日・祝日は電話受付を休止しております。</span></p>-->
                <p class="p-clinic-info-right__guide-sub"> If you come directly to the Clinic, please contact us in advance to facilitate infection control measures.<br>
                <span style="color:red;">Those who are suspected of being infected with the new coronavirus cannot enter the room.
                <!-- また、発熱や味覚障害、感染者との濃厚接触など感染が疑われる症状がある方の受診は行っておりません。 --></span></p>
            </div>
        </div>
    </div>
</section>


<?php elseif ('zh_CN' == $locale): ?>


<div class="p-key-visual">
    <div class="l-inner p-key-visual__inner">
            <div class="p-key-visual__text-wrap">
                                <div class="p-key-visual__text-left">
                                    <h1 class="p-key-visual__ttl">
                                        <span class="p-key-visual__ttl-sub">新冠病毒</span>PCR检测
                                    </h1>
                                </div>
                                <!-- ./p-key-visual__text-left -->

                                <div class="p-key-visual__text-right u-f-ryu">
                                    为了走向希望的未来<br>从样本检测<br>开始我们所能做的事情
                                </div>
                                <!-- ./p-key-visual__text-right -->
            </div>
            <!-- ./p-key-visual__text-wrap -->



            <div class="p-fv-anchor">
                    <a href="#link-inspection-personal" class="p-fv-anchor__btn">
                            <div class="p-fv-anchor__row">
                                <i class="p-fv-anchor__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/front/new_anchor_icon.png?01e6da09cffbc180" alt="アイコン"></i>
                                <h3 class="p-fv-anchor__right"><span class="p-fv-anchor__yellow">个人</span>检测</h3>
                            </div>

                            <p class="p-fv-anchor__bottom">还出具出国等所需的证明。</p>

                    </a>
            </div>
    </div>
    <!-- ./l-inner -->
</div>
<!-- ./key-visual -->

<section class="p-cost p-cost--top p-cost--top--other">
    <div class="l-inner">
        <h2 class="c-ttl-under-center p-cost__ttl c-blue">检测费用</h2>
        <p class="p-cost__desc c-blue">这是包括检测套件，邮寄，采样介绍及检测的费用。</p>

        <dl class="p-cost-price u-mb10">
                <dt class="p-cost-price__name"><span class="p-cost-price__name-in">PCR检测</span></dt>
                <dd class="p-cost-price__text"><span class="p-cost-price__text-main"><!-- 18,000 -->14,800</span><span class="p-cost-price__text-sub">日元（不含税）</span></dd>
        </dl>
         <dl class="p-cost-price  u-mb10">
                <dt class="p-cost-price__name"><span class="p-cost-price__name-in">PCR检测 <br class="u-sp">5次套餐</span></dt>
                <dd class="p-cost-price__text"><span class="p-cost-price__text-main">1次 11,840</span><span class="p-cost-price__text-sub">日元（不含税）</span><!-- <span class="aaaaa">＊1個あたり</span> -->
                <div class="aaaaa" style="padding-top:10px;">总计 59,200日元（不含税）</div>
                </dd>
        </dl>

         <dl class="p-cost-price  u-mb10">
                <dt class="p-cost-price__name"><span class="p-cost-price__name-in">PCR检测 <br class="u-sp">10次套餐</span></dt>
                <dd class="p-cost-price__text"><span class="p-cost-price__text-main">1次 8,880</span><span class="p-cost-price__text-sub">日元（不含税）</span>
               <div class="aaaaa" style="padding-top:10px;">总计 88,800日元（不含税）</div></dd>
        </dl>

        <p class="p-cost__under-desc">本诊所的PCR检测是以希望检测的人士为对象，自费诊疗。<br>“有出国经历，身体状况不好”，“与感染者有过密切接触，身体状况不好”的人士等，<br class="u-pc">如果是满足行政检测条件的人士，有可能在自治体管辖的设施中使用医保进行检测，所以请向居住地保健所的咨询窗口咨询。


        <a href="<?php echo home_url( '/' ); ?>item-list" class="c-btn p-cost-btn">购买和申请请点击这里</a>

            <!-- キャンペーンバナー -->
       <!--  <div class="p-cap">
            <img src="<?php echo get_template_directory_uri(); ?>/img/common/cap_bnr.jpg?0825" alt="期間限定8/31(月)まで期間限定でお試ししやすい価格でご提供させていただきます。" class="u-pc">

            <img src="<?php echo get_template_directory_uri(); ?>/img/common/cap_bnr_sp.jpg?0825" alt="期間限定8/31(月)まで期間限定でお試ししやすい価格でご提供させていただきます。" class="u-sp">
        </div> -->
        <!-- ./p-cap -->
    </div>
    <!-- ./l-inner -->
</section>





<style>

@media (min-width: 768px) {
    .p-case-slide {
    margin: 0 .4rem
}

.p-case-slide-check {
    padding-right: 0;
}
}


</style>





<section class="c-ttl-skew --skew-pink p-personal-inspection-area" id="link-inspection-personal">

<div class="l-inner">

                <h2 class="c-title-under-circle --circle-small p-personal-inspection-ttl">
                个人检测
                </h2>



    <ul class="p-personal-inspection-action">

            <li class="p-personal-inspection-action__item">

                <a href="#link-use" class="p-personal-inspection-action__link">

                    <img src="<?php echo get_template_directory_uri(); ?>/img/front/personal_inspection_thumb01_new.jpg?6dbddba84c650683" alt="" class="p-personal-inspection-action__pc-thumb u-pc-display">

                    <div class="p-personal-inspection-action__bottom  --sp-bg-img01">
                        <div class="p-personal-inspection-action__bottom-inner c-blue">
                             <span class="p-personal-inspection-action__ttl-text">申请检测的介绍</span>
                            <span class="c-btn-arw-sq__right-box p-personal-inspection-action__right-box bg-blue">
                                <i class="c-btn-arw-sq__arw p-personal-inspection-action__arw"></i>
                            </span>
                        </div>
                        <!-- ./p-personal-inspection-action__bottom-inner -->
                    </div>
                    <!-- ./p-personal-inspection-action__bottom -->
                </a>
            </li>


             <li class="p-personal-inspection-action__item">

                <a href="<?php echo home_url( '/' ); ?>item-list" class="p-personal-inspection-action__link">

                    <img src="<?php echo get_template_directory_uri(); ?>/img/front/personal_inspection_thumb03_new.jpg?6dbddba84c650683" alt="" class="p-personal-inspection-action__pc-thumb u-pc-display">

                    <div class="p-personal-inspection-action__bottom --sp-bg-img03">
                        <div class="p-personal-inspection-action__bottom-inner c-orange">
                             <span class="p-personal-inspection-action__ttl-text">采样套件的购买</span>
                            <span class="c-btn-arw-sq__right-box p-personal-inspection-action__right-box bg-orange">
                                <i class="c-btn-arw-sq__arw p-personal-inspection-action__arw"></i>
                            </span>
                        </div>
                        <!-- ./p-personal-inspection-action__bottom-inner -->
                    </div>
                    <!-- ./p-personal-inspection-action__bottom -->
                </a>
            </li>

    </ul>
</div>

</section>

<section class="p-trouble bg-section-gray">
    <div class="l-inner">
            <h2 class="p-trouble__ttl">
                <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_ttl_zh.png?6dbddba84c650683" alt="こんなお悩みがあればご相談ください" class="u-pc">
                 <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_ttl_sp_zh.png?6dbddba84c650683" alt="こんなお悩みがあればご相談ください" class="u-sp">
            </h2>

            <ul class="p-trouble-list">
                    <li class="p-trouble-list__item">
                        <div class="p-trouble-list__texts">
                            <p class="p-trouble-list__num u-pc-display">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_num01.png?6dbddba84c650683" alt="01">
                            </p>
                            <p class="p-trouble-list__desc">
                                工作单位需要PCR检测证明的人士
                            </p>
                        </div>
                        <!-- ./p-trouble-list__texts -->
                        <div class="p-trouble-list__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_point01.png?6dbddba84c650683" alt="01" class="u-sp">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_point01_pc.png?6dbddba84c650683" alt="" class="u-pc">
                        </div>
                        <!-- ./p-trouble-list__img -->
                    </li>
                    <li class="p-trouble-list__item">
                        <div class="p-trouble-list__texts">
                                <p class="p-trouble-list__num u-pc-display">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_num02.png?6dbddba84c650683" alt="01">
                                </p>
                                <p class="p-trouble-list__desc">
                                    出国或回国需要PCR检测证明的人士
                                </p>
                                <a href="<?php echo home_url( '/' ); ?>voyage" class="c-blue-arw-btn p-trouble-list__btn">詳しく見る</a>
                           </div>
                        <!-- ./p-trouble-list__texts -->
                        <div class="p-trouble-list__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_point02.png?6dbddba84c650683" alt="01" class="u-sp">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_point02_pc.png?6dbddba84c650683" alt="" class="u-pc">
                        </div>
                    </li>
                    <li class="p-trouble-list__item">
                         <div class="p-trouble-list__texts">
                                <p class="p-trouble-list__num u-pc-display">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_num03.png?6dbddba84c650683" alt="01">
                                </p>
                                <p class="p-trouble-list__desc">
                                    担心以前已感染过新冠肺病的人士
                                </p>
                         </div>
                        <!-- ./p-trouble-list__texts -->
                        <div class="p-trouble-list__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_point03.png?6dbddba84c650683" alt="03" class="u-sp">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/front/trouble_point03_pc.png?6dbddba84c650683" alt="" class="u-pc">
                        </div>
                    </li>
                    <li class="p-trouble-list__long-desc">
                        本诊所努力做到让所有希望检测的人士都能平等地进行PCR检测。这是因为考虑能尽早发现虽然没有症状，但自己觉得感染的病人，<span class="c-bg-pt-line --sp-pb-ms c-pink">有将集体感染防范于未然的效果。</span>

                    </li>
            </ul>

            <h3 class="p-trouble-band js-accordion-pt2">已有某些症状的人士
                <i class="p-trouble-band__icon-plus-wrap"><span class="p-trouble-band__icon-plus js-icon-plus"></span></i>
            </h3>

            <div class="p-trouble-sub-contents">

                <p class="p-trouble-sub-contents__right">如果有“没有味觉”，“持续37.5℃以上发烧”等新冠肺炎特有的初期症状，可以接受行政检测。
如果有这种情况，请向居住地的咨询中心咨询。</p>

                <div class="p-trouble-sub-contents__tables">
                        <dl class="p-trouble-sub-contents__table-list">
                            <dt class="p-trouble-sub-contents__table-ttl">最常有的初期症状</dt>
                            <dd class="p-trouble-sub-contents__table-answer">发烧，干咳，倦怠感</dd>
                        </dl>

                        <dl class="p-trouble-sub-contents__table-list --table-right">
                            <dt class="p-trouble-sub-contents__table-ttl --table-bg-gray">有时出现的初期症状</dt>
                            <dd class="p-trouble-sub-contents__table-answer --table-right__answer">疼痛，喉咙痛，下泻，结膜炎，头痛，失去味觉或嗅觉，皮肤发疹，或手脚指的变色</dd>
                        </dl>
                </div>

            </div>
    </div>
</section>


<section class="p-pcr-about">
            <div class="c-ttl-skew --skew-blue02">
                <h2 class="c-title-under-circle c-ttl-skew__text p-pcr-about__ttl">
                关于本诊所的PCR检测
                </h2>
            </div>
            <!-- ./skew-ttl -->
            <div class="l-inner">


                    <div class="p-pcr-about-row">

                        <div class="p-pcr-about-textbox">
                            <h3 class="c-ttl-bl-line p-pcr-about-textbox__ttl --c-blue">
                                <span class="c-ttl-bl-line__text p-pcr-about-textbox__ttl-sub --c-blue__text">
                                        无痛采样
                                </span>
                            </h3>

                            <p class="p-pcr-about-textbox__desc">迄今为止的采样是使用拭子（有柄的长棉棒）擦拭鼻腔进行采样的，这种方式多少伴随些疼痛。本诊所采用的PCR检测方式是检测唾液样本，所以任何人都能简单地采样。</p>
                            <p class="p-pcr-about-textbox__desc u-mb0">还有，厚生劳动科学研究（厚生劳动省的研究）也证实了这种方式可以得到与擦拭鼻腔或咽喉几乎相同的检测精度，请放心使用。</p>

                            <a href="https://www.mhlw.go.jp/content/10906000/000635988.pdf" class="c-link-blank p-pcr-about-textbox__link c-pink" target="_blank">厚生劳动省网站</a>
                        </div>
                        <!-- ./p-pcr-about-textbox -->

                    <ul class="p-pcr-about-illust">

                        <li class="p-pcr-about-illust__item">
                            <div class="p-pcr-about-illust__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/front/pcr_illustration01.png?6dbddba84c650683" alt="">
                            </div>
                            <!-- ./p-pcr-about-illust__img -->

                            <div class="p-pcr-about-illust__bottom">
                                <h4 class="p-pcr-about-illust__ttl">以前的采样方式</h4>
                                <p class="p-pcr-about-illust__desc">医生等人员直接使用棉棒采样鼻子的粘液。</p>
                            </div>
                            <!-- ./p-pcr-about-illust__bottom -->
                        </li>

                        <li class="p-pcr-about-illust__item --bdc-blue ">
                            <div class="p-pcr-about-illust__img --bg-light-blue">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/front/pcr_illustration02.png?6dbddba84c650683" alt="">
                            </div>
                            <!-- ./p-pcr-about-illust__img -->

                            <div class="p-pcr-about-illust__bottom --bdc-blue">
                                <h4 class="p-pcr-about-illust__ttl --blue">本诊所的采样方式</h4>
                                <p class="p-pcr-about-illust__desc">接受检测的患者自己将唾液装入容器中进行采样。</p>
                            </div>
                            <!-- ./p-pcr-about-illust__bottom -->
                        </li>

                    </ul>

                </div>
                <!-- ./p-pcr-about-row -->
        </div>
        <!-- ./l-inner -->
</section>



<section class="p-pcr-kit bg-section-gray" id="link-kit">
    <div class="l-inner">
        <h2 class="c-ttl-under-center p-pcr-kit__ttl c-blue">关于PCR检测套件</h2>
        <div class="p-pcr-kit-row">
            <div class="p-pcr-item-box">
                <div class="p-pcr-item-box__thumb">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/front/Inspection_Item_old.jpg?33b09c8d99b80172" alt="PCR検体採取キット">
                </div>
                <!-- ./p-pcr-item-box__thumb -->
                <dl class="p-pcr-item-box__desc">
                    <dt class="p-pcr-item-box__name">附属品</dt>
                    <dd class="p-pcr-item-box__desc-text">
                        <ul class="p-pcr-item-box__list">
                            <li class="p-pcr-item-box__list-item">・步骤说明书</li>
                            <li class="p-pcr-item-box__list-item">・唾液采样用漏斗</li>
                                <li class="p-pcr-item-box__list-item">・小袋  小号</li>
                                 <li class="p-pcr-item-box__list-item">・小袋  大号</li>
                            <li class="p-pcr-item-box__list-item">・保护袋</li>
                                 <li class="p-pcr-item-box__list-item">・吸水纸</li>
                            <li class="p-pcr-item-box__list-item">・确认申请书</li>
                                <li class="p-pcr-item-box__list-item">・寄回用信封</li>
                        </ul>
                    </dd>
                </dl>
            </div>
            <!-- ./p-pcr-item-box -->

            <div class="p-pcr-right-contents">
                    <p class="p-pcr-right-contents__desc">购买套件后请确认同信封内的采样步骤说明书。如有不明之处，将通过“线上介绍”说明唾液采样的方式以及采样步骤等。这时，视频通话是通过云医疗支援系统进行的，所以使用前请准备好已下载该系统的智能手机，或装有摄像头的个人电脑。</p>
                    <a href="<?php echo home_url( '/' ); ?>item-list" class="c-btn-circle-arw p-pcr-right-contents__btn">购买请点击这里</a>
            </div>
            <!-- ./p-pcr-right-contents -->
        </div>
        <!-- ./p-pcr-kit-row -->
    </div>
    <!-- ./l-inner -->
</section>




<section class="p-diff">

<div class="l-inner">
     <h2 class="c-ttl-under-center p-diff__ttl c-blue u-fw600">PCR检测与抗体检测的不同</h2>
     <p class="p-diff__text u-tc u-fw600">检测<span class="c-orange03 p-diff__text-large">“现在”</span>的感染状况的是<span class="c-orange03">PCR检测，</span>能调查<span class="c-blue p-diff__text-large">“过去”</span>是否感染过的检测是<span class="c-blue">抗体检测。</span>



    </p>

     <div class="p-diff__table">
     <img src="<?php echo get_template_directory_uri(); ?>/img/front/diff_table_zh.png?49486b220bbca61da" alt="検査対象期間" class="u-pc">
     <img src="<?php echo get_template_directory_uri(); ?>/img/front/diff_table_sp_zh.png?49486b220bbca61da" alt="検査対象期間" class="u-sp">
     </div>

</div>


</section>


<section class="p-use-flow bg-section-gray" id="link-use">
    <div class="l-inner js-tab-wrap">
        <h2 class="c-ttl-under-center p-use-flow__ttl c-blue">申请检测的方式</h2>
       <!--  <p class="u-tc u-fw600 p-use-flow__note">ご注文された方のお住まいによって、<br class="u-sp">ご利用方法が変わります。</p> -->


    <!--     <ul class="p-chart-btn">
                <li class="p-chart-btn__item p-chart-btn__item--01 js-tab-btn is-tab-active"><span class="p-chart-btn__in-text">東京、名古屋、大阪、福岡にお住いの方</span></li>
                <li class="p-chart-btn__item p-chart-btn__item--02 js-tab-btn"><span class="p-chart-btn__in-text">それ以外の地域の方</span></li>
        </ul>
 -->



                     <div class="p-use-chart">
                <!-- 左のチャート -->
                <ul class="p-use-chart__left p-use-chart-list">
                    <li class="p-use-chart-list-top p-chert-left-row01 p-pos-left c-bg-water-blue">
                        <div class="p-use-chart-list-top__inner p-inner-row01">
                                <i class="p-use-chart-list-top__icon c-bg-water-blue">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/front/flow_icon01.png?6dbddba84c650683" alt="アイコン">
                                </i>
                                <p class="p-use-chart-list-top__name">患者</p>
                        </div>
                    </li>
                    <li class="p-use-chart-list-item p-chert-left-row02 p-pos-left c-bdc-water-blue">
                        <div class="p-use-chart-list-item__inner p-inner-left  p-inner-row02">
                            <p class="p-use-chart-list-item__text">申请检测的方式</p>
                            <a href="<?php echo home_url( '/' ); ?>item-list" class="c-btn-circle-arw p-use-chart-list-item__btn">购买请点击这里</a>
                        </div>
                    </li>
                     <li class="p-use-chart-list-item p-chert-left-row03 p-chert-left-row03--02 p-pos-left c-bdc-water-blue">
                           <div class="p-use-chart-list-item__inner p-inner-left ">
                        <p class="p-use-chart-list-item__text u-tl u-mb0">采样套件送到后，请对照一起寄来的说明书，确认该邮包内的全部物件。</p>

                          </div>
                    </li>
                    <li class="p-use-chart-list-item  p-chert-left-row04 p-chert-left-row04--02 p-pos-left c-bdc-water-blue">
                          <div class="p-use-chart-list-item__inner p-inner-left p-inner-row03">
                        <div class="p-use-chart-list-item__row">
                                    <div class="p-use-chart-list-item__thumb --spspsp">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/front/flow_left_thumb01.png?36d7dca331e72df0" alt="thumb">
                                    </div>

                                    <p class="p-use-chart-list-item__l-text">阅读寄来的说明书，或按照如下网页进行采样。<br>
                                      <a href="<?php echo home_url( '/' ); ?>use?tab=01" class="c-btn-circle-arw p-use-chart-list-item__btn u-mb10"><span class="u-pc">PCR </span>唾液采样的步骤</a>

                                      <a href="<?php echo home_url( '/' ); ?>use?tab=02" class="c-btn-circle-arw p-use-chart-list-item__btn u-mt0">抗体检测的步骤</a>
                                    </p>

                                      </div>
                        </div>
                    </li>

                       <li class="p-use-chart-list-item p-chert-left-row09 p-pos-left c-bdc-water-blue">
                          <div class="p-use-chart-list-item__inner p-inner-left  p-inner-row04">
                        <div class="p-use-chart-list-item__text u-tl u-mb0">
                                   采样完了后，请按照<span class="c-green">“PCR检测的唾液采样的步骤”</span>背面的说明进行装箱。
                        </div>
                           </div>
                    </li>
                     <li class="p-use-chart-list-item p-chert-left-row06 p-chert-left-row06--02 p-pos-left c-bdc-water-blue">
                          <div class="p-use-chart-list-item__inner p-inner-left  p-inner-row04">
                        <div class="p-use-chart-list-item__row">
                                    <div class="p-use-chart-list-item__thumb --thumb-letter">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/front/chart_letter.jpg?36d7dca331e72df0" alt="thumb">
                                    </div>

                                    <p class="p-use-chart-list-item__l-text">装箱完了后请寄给本诊所。</p>
                        </div>
                           </div>
                    </li>

                     <li class="p-use-chart-list-item p-chert-left-row07 p-chert-left-row07--02 p-pos-left c-bdc-water-blue">
                          <div class="p-use-chart-list-item__inner p-inner-left  p-inner-row04">
                        <div class="p-use-chart-list-item__text u-mb0">
                                   如果觉得自己有某种症状，或与感染者有过密切接触经历的人士，请在家待命。
                        </div>
                           </div>
                    </li>

                </ul>

                <!-- 真ん中のライン -->
                <div class="p-use-chart__center">
                   <!--  <img src="<?php echo get_template_directory_uri(); ?>/img/front/flow_center_line.png?6dbddba84c650683" alt="LINE" class="u-pc">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/front/flow_center_line_sp.png?6dbddba84c650683" alt="LINE" class="u-sp"> -->
                </div>
                <!-- ./center -->

                   <!-- 左のチャート -->
              <ul class="p-use-chart__left p-use-chart-list">
                    <li class="p-use-chart-list-top p-chert-right-row01 p-pos-right c-bg-deep-pink">
                       <div class="p-use-chart-list-top__inner p-inner-row01">
                               <i class="p-use-chart-list-top__icon c-bg-deep-pink">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/front/flow_icon02.png?6dbddba84c650683" alt="アイコン">
                                </i>
                                <p class="p-use-chart-list-top__name">本诊所</p>
                        </div>
                    </li>

                    <li class="p-use-chart-list-item  p-chert-right-row02 p-pos-right c-bdc-pink">
                          <div class="p-use-chart-list-item__inner p-inner-right p-item-pd-pt02 p-item-pd-pt04 p-inner-row08">
                        <div class="p-use-chart-list-item__row u-sp-ff-reverse">


                                    <p class="p-use-chart-list-item__l-text">接到订货后寄出采样套件。</p>

                                    <div class="p-use-chart-list-item__thumb --thumb-w-small">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/front/flow_right_thumb01_old.jpg?33b09c8d99b80172" alt="thumb">
                                    </div>

                        </div>
                    </li>



                       <li class="p-use-chart-list-item p-chert-right-row05 p-chert-right-row05--02 p-pos-right c-bdc-pink">
                           <div class="p-use-chart-list-item__inner p-inner-right ">
                       <p class="p-use-chart-list-item__text u-tl">样本送到本诊所后，按顺序对患者的唾液进行PCR检测。<br class="u-pc">关于检测结果的通知，因检测量的多少而异，一般来说样本送到诊所后，大约1至2天后通知检测结果。</p>
                            <a href="https://souki-kai.or.jp/rslt/" class="c-btn-circle-arw p-use-chart-list-item__btn p-use-chart-list-item__btn--wide c-bg-deep-pink" target="_blank">
                           进入检测结果<br class="u-sp">确认网站
                        </a>
                          </div>
                    </li>

                     <li class="p-use-chart-list-item p-chert-right-row-clinics p-pos-right  c-bdc-pink">
                           <div class="p-use-chart-list-item__inner p-inner-right --ball-none">
                               <p class="p-chart-clinics-logo">
                                   <img src="<?php echo get_template_directory_uri(); ?>/img/cinics/clinics_logo.png?6dbddba84c650683" alt="">
                               </p>

                               <p class="p-chart-clinics-desc u-tc">对采样以及委托回收有担心或不明之处，可以通过线上咨询。</p>
                       <p class="p-use-chart-list-item__text u-tc">在云医疗支援系统注册后，请在该系统内检索“感染症检测诊所”，预约线上咨询。<br class="">线上咨询需要能进行视频通话的智能手机或个人电脑。<br class="u-pc">请预先准备。</p>

                          </div>
                    </li>
                </ul>
            </div>




    </div>
    <!-- ./l-inner -->
</section>



           <section class="p-chart-bottom-area bg-section-gray">
                <div class="p-chart-bottom">

                <div class="p-use-chart-list-top p-chart-bottom-top c-bg-purple">

                    <div class="p-use-chart-list-top__inner p-chart-bottom-top__inner">
                            <i class="p-use-chart-list-top__icon p-chart-bottom-top__icon c-bg-purple">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/front/flow_icon03.png?6dbddba84c650683" alt="アイコン"></i>
                            <p class="p-chart-bottom-top__desc">检测结果是非常敏感的信息，所以将通过顾客所希望的方式，<br class="">用电话或网上等方式通知结果。在Web说明时，请告诉专门的负责人员。
                        </p>
                            <p class="p-chart-bottom-top__nunber u-f-black-sword">Check!</p>
                            <!-- <span href="https://souki-kai.or.jp/rslt/" class="c-btn-arw-sq p-use-chart-list-top__btn" target="_blank">検査結果通知サイト<span class="c-btn-arw-sq__right-box p-use-chart-list-top__btn-right"><i class="c-btn-arw-sq__arw p-use-chart-list-top__btn-arw"></i></span></a> -->
                    </div>
                    <!-- ./p-use-chart-list-top__inner -->

                </div>
                <!-- ./p-chart-bottom-top -->

                <ul class="p-chart-bottom-list">

                    <li class="p-chart-bottom-item p-chart-bottom-item--left c-bg-orange">

                        <p class="p-chart-bottom-item__radius p-chart-bottom-item__radius--left c-orange02">阴性</p>
                        <p class="p-chart-bottom-item__desc">还可以向检测结果是阴性的人士出具证明。</p>
                        <p class="p-chart-bottom-item__desc-list">※出具证明须另行支付费用。<br>详细情况请阅览购买网页。</p>

                        <a href="<?php echo home_url( '/' ); ?>certificate-zh" class="c-btn-arw-sq p-chart-bottom-item__btn">进入证书购买页面<span class="c-btn-arw-sq__right-box p-chart-bottom-item__btn-right"><i class="c-btn-arw-sq__arw p-chart-bottom-item__btn-arw"></i></span></a>
                    </li>
                    <li class="p-chart-bottom-item p-chart-bottom-item--right c-bg-deep-gray">

                        <p class="p-chart-bottom-item__radius p-chart-bottom-item__radius--right c-deep-gray">阳性</p>
                        <p class="p-chart-bottom-item__desc">基本上请按照所管辖的保健所的说明进行行动。</span><br>轻症患者或无症状患者按照说明进行“住宿疗养或自家疗养”，重症患者则入住感染症指定医疗机构或在旅馆疗养。</p>
                        <p class="p-chart-bottom-item__desc-note">有基础疾病，或65岁以上的患者则住院。</p>

                    </li>
                </ul>

                <p class="p-chart-bottom-link-wrap u-tc">
                    <a href="https://www.fukushihoken.metro.tokyo.lg.jp/iryo/kansen/syukuhaku.html" class="p-chart-bottom-under-link" target="_blank">关于与新冠肺炎的轻症患者等有关的住宿疗养</a>
                </p>

                <div class="p-chart-sp-down-arw  --down-arw-left c-bg-purple u-sp">
                    <div class="p-chart-sp-down-arw__inner"></div>
                </div>

                <div class="p-chart-sp-down-arw  --down-arw-right c-bg-purple u-sp">
                     <div class="p-chart-sp-down-arw__inner"></div>
                </div>

            </div>
            <!-- ./p-chart-bottom -->
           </section>

           <section class="p-movie bg-section-gray">

            <div class="l-inner">

                 <!--    <h2 class="c-ttl-under-center p-movie__ttl c-blue">検査費用</h2> -->

                    <div class="p-movie__contents">
                  <!--   <iframe class="p-movie__in" src="https://www.youtube.com/embed/uyHifGfxbUw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                  <img src="<?php echo get_template_directory_uri(); ?>/img/front/movie_sample.jpg?6dbddba84c650683" alt="">

                    </div>


            </div>
            <!-- ./l-inner -->
           </section>







<section class="p-labo">
                <div class="l-inner">
                            <div class="p-labo-contents">
                                <div class="p-labo-desc">
                                     <h3 class="c-ttl-bl-line p-labo-desc__ttl  ">
                                            <span class="c-ttl-bl-line__text    p-labo-desc__ttl-sub --c-yellow__text">
                                                    关于本诊所的检测实验室
                                            </span>
                                    </h3>

                                    <p class=" p-labo-desc__text">本诊所的全部PCR检测都在诊所内部的检测实验室进行检测和分析。<br>因此，与委托给外部进行检测的其他医院相比，可以降低每次的检测成本，并实现了迅速得到检测结果。</p>

                                </div>



                            </div>
                </div>
</section>


<section class="p-question bg-section-gray" id="link-qa">
    <div class="l-inner">

                <h2 class="c-ttl-under-center p-question__ttl c-blue">よくある質問</h2>

                <div class="p-question-list">

                    <?php
                    $args = array(
                    'post_type' => 'faq',
                    'posts_per_page' => 5,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    );
                    $the_query = new WP_Query( $args );
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                    ?>




                        <dl class="p-question-box">
                            <dt class="p-question-box__ttl js-accordion">
                                <span class="p-question-box__fst-letter u-f-futura c-blue02">Q.</span>
                                <span class="p-question-box__qa-text"><?php the_title(); ?></span>
                            </dt>
                            <dd class="p-question-box__answer">
                                <span class="p-question-box__fst-letter u-f-futura c-pink02">A.</span>
                                <p class="p-question-box__answer-text"><?php remove_filter('the_content', 'wpautop'); ?><?php the_content(); ?></p>
                            </dd>
                        </dl>




                    <?php endwhile; wp_reset_postdata(); ?>



                       <a href="<?php echo home_url( '/' ); ?>faq-personal" class="c-btn-circle-arw p-question__btn">よくある質問一覧へ</a>


                </div>
                <!-- ./p-question-list -->

    </div>
</section>




<section class="p-clinic-info u-bg-cover" id="link-clinic">
    <div class="l-access-inner">
        <div class="p-clinic-info-row">
            <div class="p-clinic-info-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/common/c_header_logo.png?6dbddba84c650683" alt="感染症検査クリニック">
            </div>
            <!-- ./p-clinic-info-logo -->
            <div class="p-clinic-info-right">
                <h3 class="p-clinic-info-right__ttl">交通指南</h3>
                <p class="p-clinic-info-right__address">〒542-0086　大阪府大阪市中央区西心斋桥2-13-16 <br>OOKINI西心斋桥BirthPlace大厦3楼</p>
                <a href="<?php echo home_url( '/' ); ?>tel/kansenshou.html" class="p-clinic-info-right__tel" target="_blank"><span class="p-clinic-info-right__tel-sq">个人</span>
                <span class="p-clinic-info-right__tel-num">0120-088-120</span></a>
                  <a href="<?php echo home_url( '/' ); ?>tel/campany.html" class="p-clinic-info-right__tel" target="_blank"><span class="p-clinic-info-right__tel-sq">企业及团体</span><span class="p-clinic-info-right__tel-num">06-4708-8082</span></a>
                <p class="p-clinic-info-right__guide">FAX : 06-4708-8105<br>挂号时间 9:00～19:00  休息不定期</p>
                <!--<p class="p-clinic-info-right__guide"><span class="u-text-under-line">※日・祝日は電話受付を休止しております。</span></p>-->
                <p class="p-clinic-info-right__guide-sub">由于预防感染的原因，如果直接来医院的话，请事先联系。<br>
                <span style="color:red;">有疑似新冠肺炎症状的人士不能入内。
                <!-- また、発熱や味覚障害、感染者との濃厚接触など感染が疑われる症状がある方の受診は行っておりません。 --></span></p>
            </div>
        </div>
    </div>
</section>



<?php endif; ?>


<?php get_footer(); ?>
