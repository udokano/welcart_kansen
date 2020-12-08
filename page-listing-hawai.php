<?php
/*
Template Name: ハワイの渡航者案内
*/
?>
<?php get_header();?>



<div class="p-lp-key-visual" id="js-pages-head">

  <div class="l-inner">

        <div class="p-lp-key-visual__contents">
                <ul class="p-lp-key-visual__textbox">
                  <li class="p-lp-key-visual__item p-lp-key-visual__item--sp-top">
                      <h1 class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/voyage-hawai/fv_textbox.png?a9ee069ade12b1a3" alt="ご存知ですか？10/15からハワイへの渡航前72時間以内の検査で陰性だった場合、2週間の自主隔離無しでハワイへ入国が可能になりました。新型コロナウイルスPCR検査" class="u-pc-display">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/voyage-hawai/fv_textbox01_sp.png?a9ee069ade12b1a3" alt="" class="u-sp-display">
                      </h1>
                  </li>

                  <li class="u-sp-display">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/voyage-hawai/fv_textbox02_sp.png?a9ee069ade12b1a3" alt="新型コロナウイルスPCR検査" class="">
                  </li>
              </ul>

              <a href="<?php echo home_url( '/' ); ?>item-list" class="p-lp-key-visual__btn">購入・お申込はこちら</a>
        </div>
        <!-- ./p-lp-key-visual__contents -->
  </div>
  <!-- ./l-inner -->
</div>
<!-- ./ p-lp-key-visual-->




<div class="c-breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>


<section class="p-lp-cost-area">
    <div class="p-cost-hawaii p-cost ">
    <div class="l-inner">
        <h2 class="c-ttl-under-center p-cost__ttl p-cost-hawaii__ttl c-blue">各種費用</h2>
        <p class="p-cost__desc c-blue">検査キット、郵送、採取案内、検査実施<br class="u-sp">を含むお値段です。</p>

        <dl class="p-cost-price u-mb10 p-cost-price-hawaii">
                <dt class="p-cost-price__name p-cost-price-hawaii__name"><span class="p-cost-price__name-in p-cost-price-hawaii__name-in p-cost-price-hawaii__name-in--pcr">PCR検査</span></dt>
                <dd class="p-cost-price__text p-cost-price-hawaii__text"><span class="p-cost-price__text-main p-cost-price-hawaii__text-main"><!-- 18,000 -->14,800</span><span class="p-cost-price__text-sub p-cost-price-hawaii__text-sub">円(税別)</span></dd>
        </dl>
         <dl class="p-cost-price  u-mb50">
                <dt class="p-cost-price__name p-cost-price-hawaii__name"><span class="p-cost-price__name-in p-cost-price-hawaii__name-in">【ハワイ用】<br class="u-sp">陰性証明書発行</span></dt>
                <dd class="p-cost-price__text p-cost-price-hawaii__text"><span class="p-cost-price__text-main p-cost-price-hawaii__text-main">10,000</span><span class="p-cost-price__text-sub p-cost-price-hawaii__text-sub">円(税別)</span><!-- <span class="aaaaa">＊1個あたり</span> -->
                </dd>
        </dl>



        <p class="p-cost__under-desc ">当院のPCR 検査は希望する方皆様を対象にした検査のため、自由診療となります。<br>「渡航歴があり体調が優れない」「感染者との濃厚接触歴があり体調が優れない」方など、行政検査条件を満たす方は自治体管轄の施設で<br class="u-pc">保険診療としてお受けできる場合がございますので、お住まい地域の保健所のご相談窓口へご相談ください。</p>


        <a href="<?php echo home_url( '/' ); ?>item-list" class="c-btn p-cost-btn">購入・お申込みはこちら</a>

    </div>
    <!-- ./l-inner -->
</div>
</section>



<section class="p-hawaii-flow">

    <div class="l-inner">
          <h2 class="c-ttl-under-center p-hawaii-flow__ttl c-blue">検査の流れ</h2>

          <ul class="p-hawaii-flow-list">
            <li class="p-hawaii-flow-list__item">
                <i class="p-hawaii-flow-list__circle">
                  <div class="p-hawaii-flow-list__circle-in">
                       <span class="u-din-pro-mid p-hawaii-flow-list__circle-text">01</span>
                  </div>
                </i>

                <h3 class="p-hawaii-flow-list__ttl">検査キットの注文・発送</h3>

                <div class="p-hawaii-flow-list__thumb">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/voyage-hawai/flow_thumb01.png?a9ee069ade12b1a3" alt="イラスト">
                </div>

                <p class="p-hawaii-flow-list__desc">ご注文確認後、当院から検体採取キットを即日発送致します。</p>
            </li>

            <li class="p-hawaii-flow-list__item">
                <i class="p-hawaii-flow-list__circle">
                  <div class="p-hawaii-flow-list__circle-in">
                       <span class="u-din-pro-mid p-hawaii-flow-list__circle-text">02</span>
                  </div>
                </i>

                <h3 class="p-hawaii-flow-list__ttl">検体採取後、当院へ返送</h3>

                <div class="p-hawaii-flow-list__thumb">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/voyage-hawai/flow_thumb02.png?a9ee069ade12b1a3" alt="イラスト">
                </div>

                <p class="p-hawaii-flow-list__desc">検体採取キットがお手元に届いたら、同封されている手順書に従って採取を行なって下さい。<br class="">採取後は手順書裏面に記載されている返送の流れをご覧になり当院まで返送をお願い致します。</p>
            </li>

            <li class="p-hawaii-flow-list__item">
                <i class="p-hawaii-flow-list__circle">
                  <div class="p-hawaii-flow-list__circle-in">
                       <span class="u-din-pro-mid p-hawaii-flow-list__circle-text">03</span>
                  </div>
                </i>

                <h3 class="p-hawaii-flow-list__ttl">検体が当院へ到着後<br class="u-pc">PCR検査を実施</h3>

                <div class="p-hawaii-flow-list__thumb">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/voyage-hawai/flow_thumb03.png?a9ee069ade12b1a3" alt="イラスト">
                </div>

                <p class="p-hawaii-flow-list__desc">検体が当院へ到着後、順に患者様の唾液のPCR検査を行います。</p>
            </li>

            <li class="p-hawaii-flow-list__item">
                <i class="p-hawaii-flow-list__circle">
                  <div class="p-hawaii-flow-list__circle-in">
                       <span class="u-din-pro-mid p-hawaii-flow-list__circle-text">04</span>
                  </div>
                </i>

                <h3 class="p-hawaii-flow-list__ttl">当日または翌日に<br class="u-pc">判定結果の報告</h3>

                <div class="p-hawaii-flow-list__thumb">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/voyage-hawai/flow_thumb04.png?a9ee069ade12b1a3" alt="イラスト">
                </div>

                <p class="p-hawaii-flow-list__desc">当日または、翌日に判定結果を、ご希望の方法でお知らせ致します。なお判定結果が陽性だった場合、当院の医師から直接、お電話にて結果を報告致します。</p>
            </li>
          </ul>

          <p class="p-hawaii-flow__note">検査キットのご購入の際に陰性証明書も購入して頂きます。<br class="">検査結果の判定が出来次第、それを元に証明書を作成・発行致します。</p>
    </div>

</section>



<section class="p-hawaii-about">

    <div class="l-inner">

        <div class="p-hawaii-about__textbox">
          <h2 class="p-hawaii-about__ttl">現在のハワイ渡航について</h2>
          <p class="p-hawaii-about__desc">2020年10月15日から、新型コロナウイルスにともなう入国管理として、旅行前検査プログラムが開始されました。これにより、ハワイ到着72時間前までの検査で陰性だった旅行者は14日間の自主隔離なしにハワイに入島することが可能になりました。</p>
        </div>
    </div>

</section>


<section class="p-preparation-hawaii">
    <div class="l-inner">
                 <h2 class="c-ttl-under-center p-preparation-hawaii__ttl c-blue">渡航前の準備について</h2>
                 <p class="p-preparation-hawaii__desc">日本からハワイへ渡航する方は<br class="u-sp">ハワイ州が定めている必要書類と健康状態や<br class="u-pc">渡航情報の申請が義務付けられております。<br class="">忘れずにご準備ください。</p>

                 <ul class="p-preparation-hawaii-list">
                   <li class="p-preparation-hawaii-list__item">
                     <div class="p-preparation-hawaii-list__thumb">
                       <img src="<?php echo get_template_directory_uri(); ?>/img/voyage-hawai/preparation_img01.png?a9ee069ade12b1a3" alt="01" class="u-pc">
                       <img src="<?php echo get_template_directory_uri(); ?>/img/voyage-hawai/preparation_img01_sp.png?a9ee069ade12b1a3" alt="01" class="u-sp">
                     </div>

                     <h3 class="p-preparation-hawaii-list__ttl">Safe Travels Programに<br class="">アカウント登録</h3>
                     <p class="p-preparation-hawaii-list__desc">日本からハワイ出発前にハワイ州の「Safe Travels Program （<a href="https://safetravels.hawaii.gov/" class="c-pink" target="_blank">https://safetravels.hawaii.gov/</a> ）」へ登録し、健康状態や渡航情報の申請が義務付けられています。<br class="">ハワイの空港到着時に、パスポートと共にSafe Travels Programより取得したQRコードを提示する必要がありますので、事前にご準備ください。</p>
                   </li>

                   <li class="p-preparation-hawaii-list__item">
                     <div class="p-preparation-hawaii-list__thumb">
                       <img src="<?php echo get_template_directory_uri(); ?>/img/voyage-hawai/preparation_img02.png?a9ee069ade12b1a3" alt="01" class="u-pc">
                       <img src="<?php echo get_template_directory_uri(); ?>/img/voyage-hawai/preparation_img02_sp.png?a9ee069ade12b1a3" alt="01" class="u-sp">
                     </div>

                     <h3 class="p-preparation-hawaii-list__ttl">ハワイ州保険局が指定する<br class="">陰性証明書</h3>
                     <p class="p-preparation-hawaii-list__desc">日本を出発する72 時間以内に新型コロナウイルス感染症の検査を受診し、ハワイ州保健局が指定する陰性証明書を発行する必要がございます。<br class="">当院では、ハワイ州指定の証明書発行が行えますので、検査と同時に取得する事ができます。</p>
                   </li>

                   <li class="p-preparation-hawaii-list__item">
                     <div class="p-preparation-hawaii-list__thumb">
                       <img src="<?php echo get_template_directory_uri(); ?>/img/voyage-hawai/preparation_img03.png?a9ee069ade12b1a3" alt="01" class="u-pc">
                       <img src="<?php echo get_template_directory_uri(); ?>/img/voyage-hawai/preparation_img03_sp.png?a9ee069ade12b1a3" alt="01" class="u-sp">
                     </div>

                     <h3 class="p-preparation-hawaii-list__ttl">ビザ免除プログラムをご利用の方は<br class="">エスタ（ESTA）の取得</h3>
                     <p class="p-preparation-hawaii-list__desc">ビザ免除プログラムを利用して、90日以下の短期商用・観光の目的で渡航される方は、米国行きの航空機や船に搭乗する前に、電子渡航認証を受ける必要がございます。</p>
                   </li>
                 </ul>


                 <div class="p-topic">
                        <div class="p-topic__top">
                            <p class="p-topic__sub u-din-pro-mid">TOPIX</p>
                            <h3 class="p-topic__ttl">検査を行わずにハワイへ渡航した場合</h3>
                        </div>

                        <div class="p-topic__middle">
                              <p class="p-topic__md-left">検査を行わずに渡航した場合、<br class="u-pc">2週間の自主隔離を行ないます。</p>
                              <ul class="p-topic__md-right">
                                <li class="p-topic__md-right-item">・自己隔離措置を行う場所は滞在先の宿泊施設（ホテルやコンドミニアム等のお部屋）となります。</li>
                                <li class="p-topic__md-right-item">・ハワイへ到着後は、どこにも立ち寄らずに空港から直接宿泊先に向かってください。</li>
                                <li class="p-topic__md-right-item">・レストランや会議室、ジム、プールなどの公共施設の利用はできません。</li>
                                <li class="p-topic__md-right-item">・外出は緊急の場合での医療施設を利用する場合のみ許可されます。</li>
                                <li class="p-topic__md-right-item">・宿泊先には原則、医療関係者の出入りのみが許可されます。</li>
                              </ul>
                        </div>

                        <p class="p-topic__bottom">※上記のハワイ州が定める義務に従わない場合、<br class="u-sp">罰則が科せられる場合がありますのでご注意ください。</p>
                 </div>

    </div>
</section>



<section class="p-hawaii-cv">
    <div class="l-inner">
          <div class="p-hawaii-cv__box">
                <h2 class="p-hawaii-cv__ttl">PCR検査キット・陰性証明書のご購入はこちらから</h2>
                <a href="<?php echo home_url( '/' ); ?>item-list" class="p-hawaii-cv__btn">購入・お申し込みはこちら</a>
          </div>
    </div>
</section>




<?php get_footer();?>
