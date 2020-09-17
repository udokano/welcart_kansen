<?php
/*
Template Name: 教育機関・医療機関用、予約フォーム
*/
?>
<?php get_header();?>



<div class="p-pages-ttl-area --ttl-bg-company-reserve u-bg-cover">
        <div class="p-pages-ttl-area__inner">
              <div class="p-pages-ttl-area__texts --company">
                        <h1 class="p-pages-ttl-area__ttl">企業・団体様のご案内</h1>
                <p class="p-pages-ttl-area__sub">企業・団体様のPCR検査の流れをこちらで<br class="u-pc">ご紹介しております。</p>
              </div>
        </div>
</div>

<style>

.p-anchor-list__item {
  max-width: 200px;
}

</style>




<section class="p-contact-anchor">
  <div class="l-inner">
      <ul class="p-anchor-list">
        <li class="p-anchor-list__item">
          <a href="#link-flow" class="p-anchor-list__link">
           <span class="p-anchor-list__text">ご利用の流れ</span>
          </a>
        </li>
         <li class="p-anchor-list__item">
          <a href="#link-com-price" class="p-anchor-list__link">
            <span class="p-anchor-list__text">料金</span>
          </a>
        </li>
        <li class="p-anchor-list__item">
          <a href="#link-com-faq" class="p-anchor-list__link">
            <span class="p-anchor-list__text">よくあるご質問</span>
          </a>
        </li>
        <li class="p-anchor-list__item">
          <a href="<?php echo home_url( '/' ); ?>group-form-page" class="p-anchor-list__link" target="_blank">
            <span class="p-anchor-list__text">お問い合わせ</span>
          </a>
        </li>
         <li class="p-anchor-list__item">
          <a href="#link-item-list" class="p-anchor-list__link">
            <span class="p-anchor-list__text">商品一覧</span>
          </a>
        </li>
      </ul>
  </div>
</section>


<section class="p-group-flow" id="link-flow">

    <div class="l-inner">
        <h2 class="c-ttl-under-center p-group-flow__ttl c-blue">ご利用の流れ</h2>


        <ul class="p-group-list">
          <li class="p-group-list__item">
            <div class="p-group-list__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow01.jpg?6dbddba84c650683" alt="">
            </div>
            <!-- ./p-group-list__thumb -->
            <div class="p-group-list__text">
              <div class="p-group-list__text-inner">
                         <p class="p-group-list__step">Step.<span class="p-group-list__num">01</span></p>
                        <h3 class="p-group-list__ttl">お見積り</h3>
                        <p class="p-group-list__desc">商品一覧から商品をカートに入れ。<br class="">企業名・団体名、メールアドレス等を入力した後、決済方法選択の中でお見積りを選択。</p>
              </div>

            </div>
          </li>

           <li class="p-group-list__item">
            <div class="p-group-list__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow02_new.jpg?6dbddba84c650683" alt="" class="u-pc">
                 <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow02_new_sp.jpg?6dbddba84c650683" alt="" class="u-sp">
            </div>
            <!-- ./p-group-list__thumb -->
            <div class="p-group-list__text">
              <div class="p-group-list__text-inner">
                         <p class="p-group-list__step">Step.<span class="p-group-list__num">02</span></p>
                        <h3 class="p-group-list__ttl">メールで見積書を送付</h3>
                        <p class="p-group-list__desc">メールでお見積り書を送付いたします。<br class="">内容に問題がなければ、メール内容に記載してあるURLから購入を再開してください。</p>
              </div>
            </div>
          </li>


          <li class="p-group-list__item">
            <div class="p-group-list__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow03_new.jpg?6dbddba84c650683" alt="">
            </div>
            <!-- ./p-group-list__thumb -->
            <div class="p-group-list__text">
              <div class="p-group-list__text-inner">
                         <p class="p-group-list__step">Step.<span class="p-group-list__num">03</span></p>
                        <h3 class="p-group-list__ttl">決済</h3>
                        <p class="p-group-list__desc">ご購入時はクレジットカード払い、銀行振込をご用意しております。<br class="">お支払い確認後に、代表様にご購入分の引換コードを発行し、メールにてお送りいたします。</p>
              </div>
            </div>
          </li>

          <li class="p-group-list__item">
            <div class="p-group-list__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow04_01_new.jpg?36d7dca331e72df0" alt="" class="u-pc">

                <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow04_01_new_sp.jpg?36d7dca331e72df0" alt="" class="u-sp">
            </div>
            <!-- ./p-group-list__thumb -->
            <div class="p-group-list__text">
              <div class="p-group-list__text-inner">
                         <p class="p-group-list__step">Step.<span class="p-group-list__num">04</span></p>
                        <h3 class="p-group-list__ttl">引換コードの配布</h3>
                        <p class="p-group-list__desc">社内、もしくは団体内で引換コードの配布を行ってください。</p>
              </div>
            </div>
          </li>

          <li class="p-group-list__item">
            <div class="p-group-list__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow05_new.jpg?36d7dca331e72df0" alt="">
            </div>
            <!-- ./p-group-list__thumb -->
            <div class="p-group-list__text">
              <div class="p-group-list__text-inner">
                         <p class="p-group-list__step">Step.<span class="p-group-list__num">05</span></p>
                        <h3 class="p-group-list__ttl">引換コードの使用</h3>
                        <p class="p-group-list__desc">代表者によって配布された引換コードを用いて、当サイト内のPCRキットを0円で購入を行ってください。
</p>
              </div>
            </div>
          </li>

            <li class="p-group-list__item">
            <div class="p-group-list__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow06_new.jpg?36d7dca331e72df0" alt="" class="u-pc">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow06_new_sp.jpg?36d7dca331e72df0" alt="" class="u-sp">
            </div>
            <!-- ./p-group-list__thumb -->
            <div class="p-group-list__text">
              <div class="p-group-list__text-inner">
                         <p class="p-group-list__step">Step.<span class="p-group-list__num">06</span></p>
                        <h3 class="p-group-list__ttl">検体採取キット郵送</h3>
                        <p class="p-group-list__desc">ご注文いただいた名簿分の検体採取キットをお送り致します。</p>
              </div>
            </div>
          </li>

            <li class="p-group-list__item">

             <div class="p-group-list__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow04_new.jpg?36d7dca331e72df0" alt="" class="u-pc">
                 <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow04_new_sp.jpg?36d7dca331e72df0" alt="" class="u-sp">
            </div>

            <!-- ./p-group-list__thumb -->
            <div class="p-group-list__text">
              <div class="p-group-list__text-inner">
                         <p class="p-group-list__step">Step.<span class="p-group-list__num">07</span></p>
                        <h3 class="p-group-list__ttl">検体採取</h3>
                        <p class="p-group-list__desc">検体採取キット、に同封されている案内をお読みになり、唾液の採取を行ってください。<br class="">抗体検査とのセットをご購入された場合も、案内に沿って検査を行ってください。</p>
              </div>
            </div>
          </li>

             <li class="p-group-list__item">
            <div class="p-group-list__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow08_new.jpg?36d7dca331e72df0" alt="" class="u-pc">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow08_new_sp.jpg?36d7dca331e72df0" alt="" class="u-sp">
            </div>
            <!-- ./p-group-list__thumb -->
            <div class="p-group-list__text">
              <div class="p-group-list__text-inner">
                         <p class="p-group-list__step">Step.<span class="p-group-list__num">08</span></p>
                        <h3 class="p-group-list__ttl">検体回収</h3>
                        <p class="p-group-list__desc">採取した検体を梱包し返送を行ってください。<br class="">※抗体検査をご購入の場合は抗体検査キットも同封してください</p>
              </div>
            </div>
          </li>

            <li class="p-group-list__item">
            <div class="p-group-list__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow07.jpg?36d7dca331e72df0" alt="">
            </div>
            <!-- ./p-group-list__thumb -->
            <div class="p-group-list__text">
              <div class="p-group-list__text-inner">
                         <p class="p-group-list__step">Step.<span class="p-group-list__num">09</span></p>
                        <h3 class="p-group-list__ttl">PCR検査・検査結果報告</h3>
                        <p class="p-group-list__desc">検査結果は検体がクリニックに届いてから、およそ<span style="color:#ff2323;">1～2日後に判定が出ます。</span>検査結果の確認は、個人様毎に専用ウェブサイトまたはお電話にてお伝えいたします。<br class="">（団体様へのご連絡は別途料金を頂戴いたします。）</p>
              </div>
            </div>
          </li>
        </ul>
    </div>

</section>



<section class="p-cost" id="link-com-price">
    <div class="l-inner">

<!--
      <p class="p-ccc-note">企業・団体様に限り日本どこからでもご購入・ご利用が可能です。</p><p class="p-ccc-note__sub">現在、個人でのご購入・ご利用の場合のみ、購入地域制限(東京、名古屋、大阪、福岡)をさせていただいております。</p> -->


        <h2 class="c-ttl-under-center p-cost__ttl c-blue">検査費用</h2>
        <p class="p-cost__desc c-blue">検査キット、郵送、採取案内、検査実施を含むお値段です。</p>

         <dl class="p-cost-price u-mb10">
                <dt class="p-cost-price__name">PCR検査</dt>
                <dd class="p-cost-price__text"><span class="p-cost-price__text-main"><!-- 18,000 -->14,800</span><span class="p-cost-price__text-sub">円(税別)</span></dd>
        </dl>
         <dl class="p-cost-price  u-mb10">
                <dt class="p-cost-price__name">PCR検査 <br class="u-sp">5回</dt>
                <dd class="p-cost-price__text"><span class="p-cost-price__text-main">1回あたり 11,840</span><span class="p-cost-price__text-sub">円(税別)</span>
                <br class="u-sp"><!-- <span class="aaaaa">＊1個あたり</span> --></dd>
        </dl>

         <dl class="p-cost-price  u-mb10">
                <dt class="p-cost-price__name">PCR検査 <br class="u-sp">10回</dt>
                <dd class="p-cost-price__text"><span class="p-cost-price__text-main">1回あたり 8,880</span><span class="p-cost-price__text-sub">円(税別)</span>
                <br class="u-sp"><!-- <span class="aaaaa">＊1個あたり</span> --></dd>
        </dl>

        <p class="p-cost-ttt-note c-pink02 u-tc">※回収場所・回収回数によって、別途送料をご請求させていただく場合がございますので一度お問い合わせください。</p>

        <p class="p-cost__under-desc">当院のPCR 検査は希望する方皆様を対象にした検査のため、自費診療となります。<br>「渡航歴があり体調が優れない」「感染者との濃厚接触歴があり<br class="u-sp">体調が優れない」方など、行政検査条件を満たす方は自治体管轄の施設で<br class="u-pc">保険診療としてお受けできる場合がございますので、お住まい地域の保健所のご相談窓口へご相談ください。</p>

            <!-- キャンペーンバナー -->
      <!--   <div class="p-cap">
            <img src="<?php echo get_template_directory_uri(); ?>/img/common/cap_bnr02.jpg?0825" alt="期間限定8/31(月)まで期間限定でお試ししやすい価格でご提供させていただきます。" class="u-pc">

            <img src="<?php echo get_template_directory_uri(); ?>/img/common/cap_bnr02_sp.jpg?0825" alt="期間限定8/31(月)まで期間限定でお試ししやすい価格でご提供させていただきます。" class="u-sp">
        </div> -->
        <!-- ./p-cap -->
    </div>
    <!-- ./l-inner -->
</section>




<section class="p-question bg-section-gray" id="link-com-faq">
    <div class="l-inner">

                <h2 class="c-ttl-under-center p-question__ttl c-blue">よくある質問</h2>

                <div class="p-question-list">

                       <?php
                                        global $max_num_page;
                                        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                                        $args = array(
                                        'post_type' => 'faq',
                                        'tax_query' => array (
                                                        array (
                                                          'taxonomy' => 'faq_kind',
                                                          'field'    => 'slug',
                                                          'terms'    => array('corporation')
                                                        )
                                                      ),
                                        'posts_per_page' => 6,
                                        'orderby' => 'date',
                                        'order' => 'DESC',
                                        'paged' => $paged,
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



                        <a href="<?php echo home_url( '/' ); ?>faq-corporation/" class="c-btn-circle-arw p-question__btn">よくある質問一覧へ</a>



                </div>


    </div>
</section>



<section class="bg-section-gray p-item-area02" id="link-item-list">


<div class="l-inner">


 <h2 class="c-ttl-under-center p-question__ttl c-blue">商品一覧</h2>


  <ul class="p-items">
             <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr">
                <p class="p-items__name">PCR検査</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item01.jpg?36d7dca331e72df0" alt="PCR検査">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">PCR検査によって患者様の感染の有無を検査致します。<br>早めに発見することにより、感染拡大を防ぎます。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center"><!-- 18,000 -->14,800</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">(税別)</span>
                                    <span class="p-items__tax">円</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">購入へ進む</p>
                </a>
            </li>

               <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr-set05">
                <p class="p-items__name">PCR検査キット5回セット</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item10_new.jpg?36d7dca331e72df0" alt="PCR検査">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">PCR検査キットの5回セット販売になります。まとめて購入されたい方はこちらのプランがおすすめです。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center"><!-- 18,000 -->59,200</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">(税別)</span>
                                    <span class="p-items__tax">円</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">購入へ進む</p>
                </a>
            </li>

               <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr-set10">
                <p class="p-items__name">PCR検査キット10回セット</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item11_new.jpg?36d7dca331e72df0" alt="PCR検査">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">PCR検査キットの10回セット販売になります。まとめて購入されたい方はこちらのプランがおすすめです。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center"><!-- 18,000 -->88,800</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">(税別)</span>
                                    <span class="p-items__tax">円</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">購入へ進む</p>
                </a>
            </li>


             <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr-set03">
                                <p class="p-items__name">PCR検査＋抗体検査</p>
                        <div class="p-items__row">
                                <div class="p-items__thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item07_new.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                                </div>

                                <div class="p-items__right">
                                    <p class="p-items__desc">PCR検査と抗体検査のセットになります。検査から抗体の有無の確認までスムーズに行いたい方にはこちらのプランが向いています。</p>
                                    <div class="p-items__price-wrap">
                                        <span class="p-items__p-left">価格</span>
                                        <span class="p-items__p-center">19,800</span>
                                        <span class="p-items__p-right">
                                            <span class="p-items__tax-sub">(税別)</span>
                                            <span class="p-items__tax">円</span>
                                        </span>
                                    </div>
                                </div>
                        </div>

                        <p class="c-btn-circle-arw p-items__btn">購入へ進む</p>

                </a>

            </li>

             <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr-antibody-set05">
                                <p class="p-items__name">PCR検査＋抗体検査(5回セット)</p>
                        <div class="p-items__row">
                                <div class="p-items__thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item12_new.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                                </div>

                                <div class="p-items__right">
                                    <p class="p-items__desc">PCR検査と抗体検査の5回セットになります。検査から抗体の有無の確認までをまとめて行いたい方にはこちらのプランが向いています。</p>
                                    <div class="p-items__price-wrap">
                                        <span class="p-items__p-left">価格</span>
                                        <span class="p-items__p-center">79,200</span>
                                        <span class="p-items__p-right">
                                            <span class="p-items__tax-sub">(税別)</span>
                                            <span class="p-items__tax">円</span>
                                        </span>
                                    </div>
                                </div>
                        </div>

                        <p class="c-btn-circle-arw p-items__btn">購入へ進む</p>

                </a>

            </li>

             <li class="p-items__contents" >
                <a href="<?php echo home_url( '/' ); ?>pcr-antibody-set10">
                                <p class="p-items__name">PCR検査＋抗体検査(10回セット)</p>
                        <div class="p-items__row">
                                <div class="p-items__thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item14_new.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                                </div>

                                <div class="p-items__right">
                                    <p class="p-items__desc">PCR検査と抗体検査の10回セットになります。検査から抗体の有無の確認までをまとめて行いたい方にはこちらのプランが向いています。</p>
                                    <div class="p-items__price-wrap">
                                        <span class="p-items__p-left">価格</span>
                                        <span class="p-items__p-center">118,800</span>
                                        <span class="p-items__p-right">
                                            <span class="p-items__tax-sub">(税別)</span>
                                            <span class="p-items__tax">円</span>
                                        </span>
                                    </div>
                                </div>
                        </div>

                        <p class="c-btn-circle-arw p-items__btn">購入へ進む</p>

                </a>

            </li>

            <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>certificate">
                <p class="p-items__name">陰性証明書発行</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item02.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">検査の結果陰性だった方の証明書の発行も承っております。<br>サイズはA5または名刺サイズからお選び出来ます。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center">10,000</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">(税別)</span>
                                    <span class="p-items__tax">円</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">購入へ進む</p>
                </a>
            </li>
          <!--   <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>pcr-set">
                <p class="p-items__name">PCR検査＋陰性証明書発行</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item03.jpg?22255555" alt="陰性証明書発行">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">PCR検査後、陰性証明書を発行します。<br>検査から証明書発行まで、スムーズに行いたい方はこちらのプランが向いております。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center">25,000</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">(税別)</span>
                                    <span class="p-items__tax">円</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">購入へ進む</p>
                </a>
            </li> -->

            <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>certificate02">
                <p class="p-items__name">【渡航用】陰性証明書発行</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item04.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">渡航先指定のフォーマットに合わせて陰性証明書を発行致します。<br>事前にフォーマットやテンプレートの送付をお願い致します。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center">20,000</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">(税別)</span>
                                    <span class="p-items__tax">円</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">購入へ進む</p>
                </a>
            </li>

            <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>certificate03">
                <p class="p-items__name">診断書の作成</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item08.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">診断書の作成を行っております。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center">10,000</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">(税別)</span>
                                    <span class="p-items__tax">円</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">購入へ進む</p>
                </a>
            </li>

            <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>introduction">
                <p class="p-items__name">紹介状の作成</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item09.jpg?36d7dca331e72df0" alt="陰性証明書発行">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">紹介状の作成を行っております。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center">5,000</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">(税別)</span>
                                    <span class="p-items__tax">円</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">購入へ進む</p>
                </a>
            </li>

            <!--  <li class="p-items__contents">
                 <a href="<?php echo home_url( '/' ); ?>pcr-set02">
                <p class="p-items__name">【渡航用】PCR検査＋<br class="u-sp">陰性証明書発行</p>
                <div class="p-items__row">
                        <div class="p-items__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item05.jpg?078255552" alt="陰性証明書発行">
                        </div>

                        <div class="p-items__right">
                            <p class="p-items__desc">検査完了後に証明書の発行準備を行います。<br>渡航先のフォーマットがある場合はそちらの送付をお願い致します。</p>
                            <div class="p-items__price-wrap">
                                <span class="p-items__p-left">価格</span>
                                <span class="p-items__p-center">32,000</span>
                                <span class="p-items__p-right">
                                    <span class="p-items__tax-sub">(税別)</span>
                                    <span class="p-items__tax">円</span>
                                </span>
                            </div>
                        </div>
                </div>
                <p class="c-btn-circle-arw p-items__btn">購入へ進む</p>
                </a>
            </li> -->
           <!--  <li class="p-items__contents">
                <a href="<?php echo home_url( '/' ); ?>antibody-kit">
                                <p class="p-items__name">抗体検査</p>
                        <div class="p-items__row">
                                <div class="p-items__thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/item-list/item06.jpg?0724" alt="陰性証明書発行">
                                </div>

                                <div class="p-items__right">
                                    <p class="p-items__desc">過去に感染していた事があると、体内では抗体が生成されます。<br>その抗体の有無を調べることにより今までの感染状況を知る事が出来ます。</p>

                                    <div class="p-items__price-wrap">
                                        <span class="p-items__p-left">価格</span>
                                        <span class="p-items__p-center">5,800</span>
                                        <span class="p-items__p-right">
                                            <span class="p-items__tax-sub">(税別)</span>
                                            <span class="p-items__tax">円</span>
                                        </span>
                                    </div>
                                </div>
                        </div>

                        <p class="c-btn-circle-arw p-items__btn">購入へ進む</p>

                </a>

            </li> -->


        </ul>

        <p class="u-tc u-mb15">
    PCR検査・抗体検査は、検査資料から、新型コロナウィルスに特徴的なRNA配列が検出されるかどうかを検査するものであり、<br class="u-pc">検査結果から得られる情報は限定的であることをご了解ください。
</p>





</div>
</section>



<script src="https://ajaxzip3.github.io/ajaxzip3.js?6dbddba84c650683" charset="UTF-8"></script>
<link rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css?6dbddba84c650683">
                 <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js?6dbddba84c650683"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js?6dbddba84c650683"></script>



<script>

  jQuery(function($) {
    jQuery('#js-zip').keyup( function(e) {
        AjaxZip3.zip2addr(this,'','都道府県','市区町村','町名番地');
    } )
} );
if ( $('.mw_wp_form .error')[0] ) {
	var errorEl = $('.mw_wp_form .error').eq(0);
	var position = errorEl.parent().offset().top;

	$('body,html').delay(200).animate({scrollTop:position - 40}, 600, 'swing');
}

jQuery('#js-date').datepicker({
  dateFormat: 'yy年mm月dd日',
  minDate: 0,
  maxDate: 120,
  autoclose: true,
  showOtherMonths: true,
  selectOtherMonths: true
});




$('#js-ssss').on("change load",function () {
  var val = $('#js-ssss option:selected').val();

  if (val === 'その他') {
  $("#js-select-hidden").addClass("is-input-show");
  }

  else {
    $("#js-select-hidden").removeClass("is-input-show");
  }

});


$(window).on('load', function() {
var val = $('#js-ssss option:selected').val();
if (val === 'その他') {
  $("#js-select-hidden").addClass("is-input-show");
  }

  else {
    $("#js-select-hidden").removeClass("is-input-show");
  }
});




    </script>


<?php get_footer();?>
