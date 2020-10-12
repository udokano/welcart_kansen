<?php
/*
Template Name: 教育機関・医療機関用、予約フォーム
*/
?>
<?php get_header();?>



<div class="p-pages-ttl-area --ttl-bg-company-reserve u-bg-cover" id="js-pages-head">
        <div class="p-pages-ttl-area__inner">
              <div class="p-pages-ttl-area__texts --company">
                        <h1 class="p-pages-ttl-area__ttl">企業・団体様のご案内</h1>
                <p class="p-pages-ttl-area__sub">企業・団体様のPCR検査の流れをこちらで<br class="u-pc">ご紹介しております。</p>
              </div>
        </div>
</div>

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
         <li class="p-anchor-list__item">
          <a href="#link-com-fax" class="p-anchor-list__link">
            <span class="p-anchor-list__text">FAX</span>
          </a>
        </li>
        <li class="p-anchor-list__item">
          <a href="#link-form" class="p-anchor-list__link">
            <span class="p-anchor-list__text">お申し込みフォーム</span>
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
                        <h3 class="p-group-list__ttl">お申込み・お見積り</h3>
                        <p class="p-group-list__desc">企業・団体様は専用フォームからお申込みいただき、折り返しお見積りのご連絡を差し上げます。</p>
              </div>

            </div>
          </li>

           <li class="p-group-list__item">
            <div class="p-group-list__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow02.jpg?6dbddba84c650683" alt="">
            </div>
            <!-- ./p-group-list__thumb -->
            <div class="p-group-list__text">
              <div class="p-group-list__text-inner">
                         <p class="p-group-list__step">Step.<span class="p-group-list__num">02</span></p>
                        <h3 class="p-group-list__ttl">発注書の発行</h3>
                        <p class="p-group-list__desc">見積もり内容をご確認いただきましたら当院まで発注書を送付してください。</p>
              </div>
            </div>
          </li>

     <!--      <li class="p-group-list__item">
            <div class="p-group-list__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow03.jpg?6dbddba84c650683" alt="">
            </div>

            <div class="p-group-list__text">
              <div class="p-group-list__text-inner">
                         <p class="p-group-list__step">Step.<span class="p-group-list__num">03</span></p>
                        <h3 class="p-group-list__ttl">検査名簿のご提出</h3>
                        <p class="p-group-list__desc">企業・団体様の実際に検査を受ける方々の名簿をご提出いただきます。</p>
              </div>
            </div>
          </li> -->

          <li class="p-group-list__item">
            <div class="p-group-list__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow04_new.jpg?36d7dca331e72df0" alt="" class="u-pc">
                 <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow04_new_sp.jpg?36d7dca331e72df0" alt="" class="u-sp">
            </div>
            <!-- ./p-group-list__thumb -->
            <div class="p-group-list__text">
              <div class="p-group-list__text-inner">
                         <p class="p-group-list__step">Step.<span class="p-group-list__num">03</span></p>
                        <h3 class="p-group-list__ttl">検体採取キット郵送</h3>
                        <p class="p-group-list__desc">ご注文いただいた名簿分の検体採取キットをお送り致します。</p>
              </div>
            </div>
          </li>

          <li class="p-group-list__item">
            <div class="p-group-list__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow05.jpg?36d7dca331e72df0" alt="">
            </div>
            <!-- ./p-group-list__thumb -->
            <div class="p-group-list__text">
              <div class="p-group-list__text-inner">
                         <p class="p-group-list__step">Step.<span class="p-group-list__num">04</span></p>
                        <h3 class="p-group-list__ttl">検体採取</h3>
                        <p class="p-group-list__desc">検体採取キットに同封されている案内をお読みになり、唾液の採取を行ってください。<br><br>※抗体検査をご購入の場合は抗体検査キットも同封してください</p>
              </div>
            </div>
          </li>

          <li class="p-group-list__item">
            <div class="p-group-list__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow06.jpg?36d7dca331e72df0" alt="">
            </div>
            <!-- ./p-group-list__thumb -->
            <div class="p-group-list__text">
              <div class="p-group-list__text-inner">
                         <p class="p-group-list__step">Step.<span class="p-group-list__num">05</span></p>
                        <h3 class="p-group-list__ttl">検体回収</h3>
                        <p class="p-group-list__desc">企業・団体様の回収は事業所に集めていただいた上で発送をお願い致します。</p>
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
                         <p class="p-group-list__step">Step.<span class="p-group-list__num">06</span></p>
                        <h3 class="p-group-list__ttl">PCR検査</h3>
                        <p class="p-group-list__desc">当院でPCR検査を実施。</p>
              </div>
            </div>
          </li>

            <li class="p-group-list__item">
            <div class="p-group-list__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow08.jpg?6dbddba84c650683" alt="">
            </div>
            <!-- ./p-group-list__thumb -->
            <div class="p-group-list__text">
              <div class="p-group-list__text-inner">
                         <p class="p-group-list__step">Step.<span class="p-group-list__num">07</span></p>
                        <h3 class="p-group-list__ttl">検査結果報告</h3>
                        <p class="p-group-list__desc">検査結果は検体がクリニックに届いてから、およそ1～2日後に判定が出ます。検査結果の確認は、個人様毎に専用ウェブサイトまたはお電話にてお伝えいたします。<br>（団体様へのご連絡は別途料金を頂戴いたします。）</p>
              </div>
            </div>
          </li>
        </ul>
    </div>

</section>



<section class="p-cost" id="link-com-price">
    <div class="l-inner">


    <!--   <p class="p-ccc-note">企業・団体様に限り日本どこからでもご購入・ご利用が可能です。</p><p class="p-ccc-note__sub">現在、個人でのご購入・ご利用の場合のみ、購入地域制限(東京、名古屋、大阪、福岡)をさせていただいております。</p> -->


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
                <!-- ./p-question-list -->
    </div>
    <!-- ./l-inner -->
</section>


<section class="p-contact-fax" id="link-com-fax">

  <div class="l-inner">
        <div class="p-contact-fax__box">
                  <h2 class="c-ttl-under-center c-blue p-contact-fax__ttl">FAXでのお問い合わせはこちらから</h2>
                  <p class="u-tc p-contact-fax__number">FAX：06-4708-8105</p>
        </div>

  </div>

</section>


<section class="p-contact-form-area" id="link-form">



  <div class="l-inner">


    <h2 class="c-blue p-contact-form-area__ttl"><!-- 教育機関・医療機関 -->企業・団体専用<br class="u-sp">PCR検査ご相談フォーム </h2>

    <p class="p-contact-form-area__intro">必要事項にご入力の上お申し込みください。また下記項目は全て<span class="c-pink">必須事項</span>となっております。<br>なお、<span class="u-text-under-line c-pink">第二波・第三波の際には、患者様優先で検査を行わせていただく場合がございます。 </span>予めご了承ください。</p>


    <div class="p-form-content">

    <?php echo do_shortcode('[mwform_formkey key="26"]'); ?>

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
