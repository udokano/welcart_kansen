<?php
/*
Template Name: リクルートの紹介価格のご案内
*/
?>
<?php get_header();?>


<p class="p-turkey u-tc" id="js-pages-head">リクルート紹介特別価格でのご提供</p>
<div class="p-recruit-fv">

    <div class="l-inner p-recruit-fv__inner">
          <div class="p-recruit-fv__contents">
            <h1 class="p-recruit-fv__ttl">
              <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/fv_ttl.png" alt="PCR検査新型コロナウイルス感染症(COVID-19)検体採取キット" class="u-pc">
               <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/fv_ttl_sp.png" alt="PCR検査新型コロナウイルス感染症(COVID-19)検体採取キット" class="u-sp">
            </h1>

            <div class="p-recruit-fv__point">
              <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/fv_point.png" alt="検査結果は当院へ到着後、当日または翌日にお知らせ・誰でも簡単、ご自宅で唾液を採取して送るだけ・土日祝日も稼働中" class="u-pc">
                <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/fv_item_sp.png" alt="検査結果は当院へ到着後、当日または翌日にお知らせ・誰でも簡単、ご自宅で唾液を採取して送るだけ・土日祝日も稼働中・検査費用6000円" class="u-sp">
            </div>
            <!-- ./point -->

            <div class="p-recruit-fv__item u-pc">
              <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/fv_item.png" alt="検査費用6600円">
            </div>
            <!-- ./p-recruit-fv__item -->

            <a href="#link-form" class="p-recruit-fv__btn">お申込みはこちら</a>
          </div>
          <!-- ./contents -->
    </div>
    <!-- ./inner -->
</div>
<!-- ./fv -->


<div class="c-breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>


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
       <!--   <li class="p-anchor-list__item">
          <a href="#link-com-fax" class="p-anchor-list__link">
            <span class="p-anchor-list__text">FAX</span>
          </a>
        </li> -->
        <li class="p-anchor-list__item">
          <a href="#link-form" class="p-anchor-list__link">
            <span class="p-anchor-list__text">お申し込みフォーム</span>
          </a>
        </li>
      </ul>
  </div>
</section>


<section class="p-recruit-feature">

    <div class="l-inner">

      <h2 class="p-recruit-feature__ttl">
        <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/feature_ttl.png" alt="当院の6つの特徴" class="u-pc">
        <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/feature_ttl_sp.png" alt="当院の6つの特徴" class="u-sp">
      </h2>


      <ul class="p-r-feature-list">
        <li class="p-r-feature-list__item">
          <div class="p-r-feature-list__thumb">
            <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/feature_thumb01.jpg" alt="サムネイル" class="u-pc">
             <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/feature_thumb01_sp.jpg" alt="サムネイル" class="u-sp">
          </div>
          <!-- ./thumb -->
          <div class="p-r-feature-list__contents">

            <p class="p-r-feature-list__step u-font-avenir-next">
              <span class="p-r-feature-list__sub">POINT<span class="u-pc">.</span></span><span class="p-r-feature-list__main">01</span>
            </p>

            <dl class="p-r-feature-list__box">
              <dt class="p-r-feature-list__ttl c-blue u-fw600">検査ラボの混雑状況に左右されない検査体制</dt>
              <dd class="p-r-feature-list__text">PCR検査を受けたくてもどこも予約が埋まってしまい、必要とした時に検査が受けられないといったお声を多くの患者さまから耳にしてきました。<br class="">この状況を打開する為に、当院では検査フローを見直し、効率よく検査を行う事ができる体制を整えております。</dd>
            </dl>
          </div>
          <!-- ./contents -->
        </li>
         <li class="p-r-feature-list__item">
          <div class="p-r-feature-list__thumb">
            <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/feature_thumb02.jpg" alt="サムネイル" class="u-pc">
             <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/feature_thumb02_sp.jpg" alt="サムネイル" class="u-sp">
          </div>
          <!-- ./thumb -->
          <div class="p-r-feature-list__contents">

            <p class="p-r-feature-list__step u-font-avenir-next">
              <span class="p-r-feature-list__sub">POINT.</span>
              <span class="p-r-feature-list__main">02</span>
            </p>

            <dl class="p-r-feature-list__box">
              <dt class="p-r-feature-list__ttl c-blue u-fw600">検査キットは万が一に備えて手元に置いておく事が可能</dt>
              <dd class="p-r-feature-list__text">検査キット購入後の検査有効期限は設けておりませんので、キット保存期間内でしたらいつでも検査を受ける事が可能です。</dd>
            </dl>
          </div>
          <!-- ./contents -->
        </li>
         <li class="p-r-feature-list__item">
          <div class="p-r-feature-list__thumb">
            <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/feature_thumb03.jpg" alt="サムネイル" class="u-pc">
             <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/feature_thumb03_sp.jpg" alt="サムネイル" class="u-sp">
          </div>
          <!-- ./thumb -->
          <div class="p-r-feature-list__contents">

            <p class="p-r-feature-list__step u-font-avenir-next">
              <span class="p-r-feature-list__sub">POINT.</span>
              <span class="p-r-feature-list__main">03</span>
            </p>

            <dl class="p-r-feature-list__box">
              <dt class="p-r-feature-list__ttl c-blue u-fw600">従来の鼻咽頭拭液と同水準の検査が唾液だけで可能</dt>
              <dd class="p-r-feature-list__text">従来のPCR検査で必要となる検体は鼻咽頭拭液が一般的でしたが、検体の採取時に痛みを伴い、1人で検体を採取するのには難しいといった欠点がありました。<br class="">当院の提供している採取キットは唾液を採取するだけですので、どなたでも簡単に検査を受ける事が可能です。また唯一の欠点であった、検査水準の低さを克服し、現在は鼻咽頭拭液と同水準の検査をご提供しております。</dd>
            </dl>
          </div>
          <!-- ./contents -->
        </li>
        <li class="p-r-feature-list__item">
          <div class="p-r-feature-list__thumb">
            <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/feature_thumb04.jpg" alt="サムネイル" class="u-pc">
             <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/feature_thumb04_sp.jpg" alt="サムネイル" class="u-sp">
          </div>
          <!-- ./thumb -->
          <div class="p-r-feature-list__contents">

            <p class="p-r-feature-list__step u-font-avenir-next">
              <span class="p-r-feature-list__sub">POINT.</span>
              <span class="p-r-feature-list__main">04</span>
            </p>

            <dl class="p-r-feature-list__box">
              <dt class="p-r-feature-list__ttl c-blue u-fw600">診療所に検査ラボがある為、検査費用の低コスト化を実現</dt>
              <dd class="p-r-feature-list__text">他院から提供されている、自費診療でのPCR検査が高額な理由の１つとして挙げられるのが、外部に検査を委託実施している為と言えます。<br class="">当院では院内に検査ラボを設ける事により、検査費用の低コスト化、結果の判定までのスムーズな流れを実現しております。</dd>
            </dl>
          </div>
          <!-- ./contents -->
        </li>
          <li class="p-r-feature-list__item">
          <div class="p-r-feature-list__thumb">
            <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/feature_thumb05.jpg" alt="サムネイル" class="u-pc">
             <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/feature_thumb05_sp.jpg" alt="サムネイル" class="u-sp">
          </div>
          <!-- ./thumb -->
          <div class="p-r-feature-list__contents">

            <p class="p-r-feature-list__step u-font-avenir-next">
              <span class="p-r-feature-list__sub">POINT.</span>
              <span class="p-r-feature-list__main">05</span>
            </p>

            <dl class="p-r-feature-list__box">
              <dt class="p-r-feature-list__ttl c-blue u-fw600">クリニックでの検査だから陰性・陽性の報告（確定）が可能</dt>
              <dd class="p-r-feature-list__text">民間のPCR検査機関が提供する検査価格は圧倒的に安く、手軽に検査を行えるメリットがございますが、「検査結果に対しての診断はできない」検査である事はご存知でしたでしょうか？<br class="">仮に判定が陽性になった場合、医師の判断が無い為「感染の疑いがある」程度の効力しかなく、証明書の発行も行えない所がほとんどです。<br class="">当院はクリニックとしてPCR検査を提供しておりますので、医師が患者様の検査結果を元に判定報告を行っております。</dd>
            </dl>
          </div>
          <!-- ./contents -->
        </li>
         <li class="p-r-feature-list__item">
          <div class="p-r-feature-list__thumb">
            <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/feature_thumb06.jpg" alt="サムネイル" class="u-pc">
             <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/feature_thumb06_sp.jpg" alt="サムネイル" class="u-sp">
          </div>
          <!-- ./thumb -->
          <div class="p-r-feature-list__contents">

            <p class="p-r-feature-list__step u-font-avenir-next">
              <span class="p-r-feature-list__sub">POINT.</span>
              <span class="p-r-feature-list__main">06</span>
            </p>

            <dl class="p-r-feature-list__box">
              <dt class="p-r-feature-list__ttl c-blue u-fw600">誤判定のリスクを減らす為に、１つの検体を2つに分けて検査</dt>
              <dd class="p-r-feature-list__text">PCR検査機器の判定精度は向上してはきましたが、検査の特性上、偽陽性、偽陰性は少なからず出てしまいます。<br class="">そこで当院では、少しでも誤判定のリスクを減らす為、患者様から頂いた検体を2つに分けて検査を実施しております。<br class="">他院でのPCR検査は最短で3時間以内に結果を知る事が出来ますが、２つに分けての検査を行っている場合、そのような短時間で結果のお知らせをする事は難しく誤判定を減らす対策は行っていないと考えられます。</dd>
            </dl>
          </div>
          <!-- ./contents -->
        </li>
      </ul>



    </div>
    <!-- ./l-inner -->

</section>


<section class="p-recruit-flow bg-section-gray" id="link-flow">

    <div class="l-inner">
      <p class="p-recruit-flow__mark"><img src="<?php echo get_template_directory_uri(); ?>/img/recruit/flow_mark.png" alt="来院不要!"></p>
        <h2 class="c-ttl-under-center p-recruit-flow__ttl c-blue">PCR検査の流れ</h2>

        <ul class="p-f-list u-flex u-flex-wrap">
          <li class="p-f-list__item">
              <div class="p-f-list__top">
                <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/flow_illust01.jpg" alt="イラスト" class="">
                <p class="p-f-list__num u-fw600">1</p>
              </div>
              <!-- ./top -->
              <h3 class="p-f-list__ttl c-blue u-fw600">キットのご注文</h3>
              <p class="p-f-list__desc">検体採取キットをご注文後、即日発送で患者様へお送り致します。</p>
          </li>
          <li class="p-f-list__item">
              <div class="p-f-list__top">
                <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/flow_illust02.jpg" alt="イラスト" class="">
                <p class="p-f-list__num u-fw600">2</p>
              </div>
              <!-- ./top -->
              <h3 class="p-f-list__ttl c-blue u-fw600">検体の採取・返送</h3>
              <p class="p-f-list__desc">検体採取キットが届いたら、案内に従い唾液の採取、採取後は当院まで返送を行ってください。</p>
          </li>
          <li class="p-f-list__item">
              <div class="p-f-list__top">
                <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/flow_illust03.jpg" alt="イラスト" class="">
                <p class="p-f-list__num u-fw600">3</p>
              </div>
              <!-- ./top -->
              <h3 class="p-f-list__ttl c-blue u-fw600">検査の実施</h3>
              <p class="p-f-list__desc">検体が当院へ到着後、PCR検査を実施。</p>
          </li>
          <li class="p-f-list__item">
              <div class="p-f-list__top">
                <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/flow_illust04.jpg" alt="イラスト" class="">
                <p class="p-f-list__num u-fw600">4</p>
              </div>
              <!-- ./top -->
              <h3 class="p-f-list__ttl c-blue u-fw600">結果のお知らせ</h3>
              <p class="p-f-list__desc">検査後、当日または翌日に結果をお知らせ。</p>
          </li>
        </ul>



    </div>

</section>



<section class="p-cost" id="link-com-price">
    <div class="l-inner">


    <!--   <p class="p-ccc-note">企業・団体様に限り日本どこからでもご購入・ご利用が可能です。</p><p class="p-ccc-note__sub">現在、個人でのご購入・ご利用の場合のみ、購入地域制限(東京、名古屋、大阪、福岡)をさせていただいております。</p> -->


        <h2 class="c-ttl-under-center p-cost__ttl c-blue">検査費用</h2>
          <p class="c-pink p-cost__desc u-text-under-line">※料金改定のお知らせ<br class="">昨今の感染者拡大に伴い、よりPCR検査をご利用いただきやすくするため、料金の値下げを行いました。</p>
        <p class="p-cost__desc c-blue">検査キット、郵送、採取案内、検査実施を含むお値段です。</p>



         <dl class="p-cost-price u-mb10">
                <dt class="p-cost-price__name p-cost-price__name--1st"><span class="p-cost-price__name-in">PCR検査</span></dt>
                <dd class="p-cost-price__text p-cost-price__text--1st"><span class="p-cost-price__text-main">6,600</span><span class="p-cost-price__text-sub">円(税込)</span></dd>
        </dl>



         <dl class="p-cost-price u-mb10">
                <dt class="p-cost-price__name p-cost-price__name--2st"><span class="p-cost-price__name-in">抗体検査</span></dt>
                <dd class="p-cost-price__text p-cost-price__text--2st"><span class="p-cost-price__text-main">5,500</span><span class="p-cost-price__text-sub">円(税込)</span></dd>
        </dl>



         <dl class="p-cost-price u-mb10">
                <dt class="p-cost-price__name p-cost-price__name--3st"><span class="p-cost-price__name-in">陰性証明書</span></dt>
                <dd class="p-cost-price__text p-cost-price__text--3st"><span class="p-cost-price__text-main">5,500</span><span class="p-cost-price__text-sub">円(税込)</span>
            </dd>
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


<!-- <section class="p-contact-fax" id="link-com-fax">

  <div class="l-inner">
        <div class="p-contact-fax__box">
                  <h2 class="c-ttl-under-center c-blue p-contact-fax__ttl">FAXでのお問い合わせはこちらから</h2>
                  <p class="u-tc p-contact-fax__number">FAX：06-4708-8105</p>
        </div>

  </div>

</section> -->


<section class="p-contact-form-area" id="link-form">



  <div class="l-inner">


    <h2 class="c-blue p-contact-form-area__ttl"><!-- 教育機関・医療機関 -->企業・団体専用<br class="u-sp">PCR検査お申し込みフォーム </h2>

    <p class="p-contact-form-area__intro">必要事項にご入力の上お申し込みください。また下記項目は全て<span class="c-pink">必須事項</span>となっております。<br>なお、<span class="u-text-under-line c-pink">第二波・第三波の際には、患者様優先で検査を行わせていただく場合がございます。 </span>予めご了承ください。</p>


    <div class="p-form-content">

   <?php echo do_shortcode('[mwform_formkey key="5606"]'); ?>

    </div>


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
