<?php

/* Template Name: PCR検査キット販売
 */

?>


<?php get_header(); ?>




     <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/blueimp-gallery.min.css?6dbddba84c650683" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fileupload.css?6dbddba84c650683" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fileupload-ui.css?6dbddba84c650683" />
    <!-- CSS adjustments for browsers with JavaScript disabled -->
    <noscript
      ><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fileupload-noscript.css?6dbddba84c650683"
    /></noscript>
    <noscript
      ><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fileupload-ui-noscript.css?6dbddba84c650683"
    /></noscript>



<!-- 商品ループ -->

<form action="<?php echo USCES_CART_URL ?>" method="post" id="form" class="js-cart-form">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); usces_the_item("item01"); ?>
        <?php usces_have_skus();?>



        <section class="l-section">
                <div class="l-inner">

                </div>
        </section>


<!-- 証明書発行ページの時は商品説明エリアをなくす  -->
    <?php if( is_single('certificate') || is_single('certificate02') ) : ?>


<?php else: ?>
<!-- 証明書発行ページの以外の時の商品説明エリア -->

   <section class="l-section p-item-area">

    <div class="l-inner l--sp-width100">


      <?php if( is_single('pcr')  || is_single('antibody-kit') || is_single('pcr-set03')) : ?>


      <div class="c-box">
									<span class="quantity"><?php _e('Quantity', 'usces'); ?><?php usces_the_itemQuant(); ?><?php usces_the_itemSkuUnit(); ?></span>

								</div>


                            <div class="p-area-not">
                                        <p class="p-area-not__ttl">
                                            <span class="p-area-not__sub">現在のご購入可能地域</span><br>東京、愛知、大阪、福岡<br><span class="p-area-not__sub">それ以外の地域は順次拡大予定となります。</span>
                                            <div class="p-uuuu">※個人ご利用の場合のみ。<br><span class="p-area-not__sub">企業・団体様のご利用の場合は地域制限はございません。</span></div>
                                        </p>
                                </div>
                                <!-- ./p-area-not -->


                        <?php endif; ?>

        <div class="p-item">
            <?php if( is_single('pcr')) : ?>
                <h1 class="p-item__ttl c-title-under-circle">PCR検体採取キット</h1>
                <?php elseif(is_single('pcr-set')): ?>
                    <h1 class="p-item__ttl c-title-under-circle">PCR検体採取キット＋<br class="u-sp">陰性証明書発行</h1>
                 <?php elseif(is_single('pcr-set02')): ?>
                    <h1 class="p-item__ttl c-title-under-circle">PCR検体採取キット＋<br class="u-sp"><span class="c-under-deco --deco-pt">【渡航用】</span>陰性証明書発行</h1>
                <?php endif; ?>

                <!-- 抗体検査キッド以外の場合 -->
                <?php if( is_single('pcr') || is_single('pcr-set02')) : ?>
                <div class="p-item__row02">
                    <div class="p-item__img">
                            <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/ec/item_img_sample.jpg?6dbddba84c650683" alt="新型コロナウィルスPCR検査"> -->
                        <?php if( get_the_post_thumbnail() ) { ?>
                            <?php the_post_thumbnail('full' ); ?>
                        <?php }else{ ?><!-- アイキャッチが無い時-->
                                <img src="<?php echo get_template_directory_uri(); ?>/img/common/c_sample.jpg?6dbddba84c650683" alt="準備中" />
                       <?php } ?>
                    </div>

                    <dl class="p-item__desc">
                        <dt class="p-item__name">
                            <span class="p-item__name-br">附属品</span>
                            <ul class="p-item__list">
                                <li class="p-item__list-item">・手順説明書</li>
                                <li class="p-item__list-item">・唾液採取用漏斗</li>
                                <li class="p-item__list-item">・検体回収用封筒</li>
                                <li class="p-item__list-item p-item__list-item--note">※検体採取後、専門業者が回収までお伺いいたします</li>
                                  <li class="p-item__list-item p-item__list-item--note">※複数購入希望の方は、カート内で数量を変更してください。</li>
                            </ul>
                        </dt>
                        <dd class="p-item__price">
                                <?php usces_the_itemPrice(); ?><span class="p-item__price-tax">円（税込）</span>
                        </dd>
                    </dl>
                </div>
                <!-- ./p-item__row02 -->
                <?php elseif(is_single('antibody-kit')): ?>
                 <!-- 抗体検査キッドの場合はレイアウト変更 -->
                <h1 class="p-item__ttl c-title-under-circle">抗体検査キット</h1>
                  <div class="p-item__row02">
                    <div class="p-item__img">
                            <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/ec/item_img_sample.jpg?6dbddba84c650683" alt="新型コロナウィルスPCR検査"> -->
                          <?php if ( has_post_thumbnail() ): ?>
                            <?php the_post_thumbnail( 'full'); ?>
                        <?php else: ?><!-- アイキャッチが無い時-->
                                <img src="<?php echo get_template_directory_uri(); ?>/img/common/c_sample.jpg?6dbddba84c650683" alt="準備中" />
                        <?php endif; ?>
                    </div>

                    <dl class="p-item__desc">
                         <dt class="p-item__name">
                            <span class="p-item__name-br">附属品</span>
                            <ul class="p-item__list">
                                <li class="p-item__list-item">・テストカセット</li>
                                <li class="p-item__list-item">・ランセット</li>
                                <li class="p-item__list-item">・ピペット</li>
                                  <li class="p-item__list-item p-item__list-item--note">※医療品医療機器法に基づく体外診断薬用医薬品として承認・認証等を受けておりません。また、陽性結果が出た場合、新型コロナウィルスに再感染しないことを証明するものではありません。</li>
                                  <li class="p-item__list-item p-item__list-item--note">※複数購入希望の方は、カート内で数量を変更してください。</li>
                            </ul>
                        </dt>
                        <dd class="p-item__price">
                                <?php usces_the_itemPrice(); ?><span class="p-item__price-tax">円（税込）</span>
                        </dd>
                    </dl>
                </div>
                <!-- ./p-item__row02 -->


                   <?php elseif(is_single('pcr-set03')) : ?>


                   <h1 class="p-item__ttl c-title-under-circle">PCR検体採取キット+<br class="u-sp">抗体検査キット</h1>
                  <div class="p-item__row02 u-pc-al-center">
                    <div class="p-item__img">
                            <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/ec/item_img_sample.jpg?6dbddba84c650683" alt="新型コロナウィルスPCR検査"> -->
                          <?php if ( has_post_thumbnail() ): ?>
                            <?php the_post_thumbnail( 'full'); ?>
                        <?php else: ?><!-- アイキャッチが無い時-->
                                <img src="<?php echo get_template_directory_uri(); ?>/img/common/c_sample.jpg?6dbddba84c650683" alt="準備中" />
                        <?php endif; ?>
                    </div>

                    <dl class="p-item__desc">
                         <dt class="p-item__name">
                            <span class="p-item__name-br">附属品</span>
                            <ul class="p-item__list">

                                <li class="p-item__list-item">・テストカセット</li>
                                <li class="p-item__list-item">・ランセット</li>
                                <li class="p-item__list-item">・ピペット</li>
                                  <li class="p-item__list-item">・手順説明書</li>
                                <li class="p-item__list-item">・唾液採取用漏斗</li>
                                <li class="p-item__list-item">・検体回収用封筒</li>
                                <li class="p-item__list-item p-item__list-item--note">※検体採取後、専門業者が回収までお伺いいたします</li>
                                <li class="p-item__list-item p-item__list-item--note">※医療品医療機器法に基づく体外診断薬用医薬品として承認・認証等を受けておりません。また、陽性結果が出た場合、新型コロナウィルスに再感染しないことを証明するものではありません。</li>
                                 <li class="p-item__list-item p-item__list-item--note">※複数購入希望の方は、カート内で数量を変更してください。</li>

                            </ul>
                        </dt>
                        <dd class="p-item__price">
                                <?php usces_the_itemPrice(); ?><span class="p-item__price-tax">円（税込）</span>
                        </dd>
                    </dl>
                </div>
                <!-- ./p-item__row02 -->


                 <?php endif; ?>
        </div>
        <!-- ./p-item -->

    </div>
    <!-- ./l-inner -->
</section>


<?php endif; ?>

<section class="l-section">
    <div class="l-inner">


                            <!-- PCR検体採取キット、抗体検査キット販売,証明書を発行しない場合は非表示  -->
                        <?php if( is_single('pcr') || is_single('antibody') || is_single('antibody-kit') || is_single('pcr-set03')) : ?>


                        <?php else: ?>
                        <!-- 証明書がある場合、証明書のオプションを出力 -->
                           <div class="p-certificate">

                        <?php if( is_single('certificate')) : ?>

                            <h2 class="c-title-under-circle p-certificate__ttl">陰性証明書の発行</h2>

                            <div class="p-certificate-img">
                                <div class="p-certificate-img__left">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ec/certificate_img01.png?6dbddba84c650683" alt="陰性証明書サンプル">
                                </div>

                                <div class="p-certificate-img__right">
                                        <div class="p-certificate-img__right-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/ec/certificate_img02.png?6dbddba84c650683" alt="陰性証明書サンプル">
                                        </div>
                                         <div class="p-certificate-img__right-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/ec/certificate_img03.png?6dbddba84c650683" alt="陰性証明書サンプル">
                                        </div>
                                </div>

                            </div>

                               <p class="p-certificate__text"><!-- 目的に応じた申請フォーマットで<br class="u-sp">作成する必要がございますので、<br>下記よりお選びください。 -->証明書はA4サイズとカードのセットになります<br><span class="u-fw600">※証明書は発行からお手元に届くまで数日かかります。<br>※複数購入希望の方は、カート内で数量を変更してください。</span></p>


                        <?php elseif(is_single('certificate02')): ?>
                            <h2 class="c-title-under-circle p-certificate__ttl"><span class="c-under-deco">【渡航用】</span><br class="u-sp">陰性証明書の発行</h2>
                            <div class="p-certificate-img">
                                <div class="p-certificate-img__left">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ec/certificate_img01.png?6dbddba84c650683" alt="陰性証明書サンプル">
                                </div>

                                <div class="p-certificate-img__right">
                                        <div class="p-certificate-img__right-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/ec/certificate_img02.png?6dbddba84c650683" alt="陰性証明書サンプル">
                                        </div>
                                         <div class="p-certificate-img__right-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/ec/certificate_img03.png?6dbddba84c650683" alt="陰性証明書サンプル">
                                        </div>
                                </div>
                            </div>
                               <p class="p-certificate__text"><!-- 海外渡航などの目的によっては各国に沿った申請フォーマットで作成する必要がございますので、<br>下記よりお選びください。 -->証明書はA4サイズとカードのセットになります<br><span class="u-fw600">※証明書は発行からお手元に届くまで数日かかります。<br>※複数購入希望の方は、カート内で数量を変更してください。</span></p>

                                <p class="p-certificate__text u-text-under-line">渡航先の申請フォーマットは当院ではご用意できかねますので、<br class="u-pc">予めPDFでご用意の上、下記よりアップロードの上、ご購入へお進みください。<br>※対応するフォーマットは日本語のみとなります。</p>

                        <?php elseif(is_single('pcr-set')): ?>
                            <h2 class="c-title-under-circle p-certificate__ttl">陰性証明書</h2>
                             <div class="p-certificate-img">
                                <div class="p-certificate-img__left">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ec/certificate_img01.png?6dbddba84c650683" alt="陰性証明書サンプル">
                                </div>

                                <div class="p-certificate-img__right">
                                        <div class="p-certificate-img__right-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/ec/certificate_img02.png?6dbddba84c650683" alt="陰性証明書サンプル">
                                        </div>
                                         <div class="p-certificate-img__right-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/ec/certificate_img03.png?6dbddba84c650683" alt="陰性証明書サンプル">
                                        </div>
                                </div>

                            </div>
                            <p class="p-certificate__text">証明書はA4サイズとカードのセットになります<br><span class="u-fw600">※証明書は発行からお手元に届くまで数日かかります。</span><br>※複数購入希望の方は、カート内で数量を変更してください。</p>
                        <?php elseif(is_single('pcr-set02')): ?>


                                <h2 class="c-title-under-circle p-certificate__ttl"><span class="c-under-deco">【渡航用】</span><br class="u-sp">陰性証明書</h2>
                                <div class="p-certificate-img">
                                <div class="p-certificate-img__left">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ec/certificate_img01.png?6dbddba84c650683" alt="陰性証明書サンプル">
                                </div>

                                <div class="p-certificate-img__right">
                                        <div class="p-certificate-img__right-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/ec/certificate_img02.png?6dbddba84c650683" alt="陰性証明書サンプル">
                                        </div>
                                         <div class="p-certificate-img__right-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/ec/certificate_img03.png?6dbddba84c650683" alt="陰性証明書サンプル">
                                        </div>
                                </div>
                            </div>
                                   <p class="p-certificate__text">証明書はA4サイズとカードのセットになります<br><span class="u-fw600">※証明書は発行からお手元に届くまで数日かかります。<br>※複数購入希望の方は、カート内で数量を変更してください。</span></p>

                                     <p class="p-certificate__text u-text-under-line">渡航先の申請フォーマットは当院ではご用意できかねますので、<br class="u-pc">予めPDFでご用意の上、下記よりアップロードの上、ご購入へお進みください。<br class="">※対応するフォーマットは日本語のみとなります。</p>
                        <?php endif; ?>




                        <!-- 商品オプション -->


                            <div class="p-option-table">

                          <!--    <div class="p-option-table__th">証明書のお渡し方法</div>
                                        <div class="p-option-table__td -op-select js-option" id="js-option03">
                                            <?php echo usces_the_itemOption("証明書のお渡し方法");?>
                                        </div>
 -->

                                    <?php if( is_single('certificate02') || is_single('pcr-set02') ) : ?>

                                    <!-- 渡航用証明書 -->
                                    <div class="p-hidden-text-area" id="js-hidden-text">
                                            <?php echo usces_the_itemOption("証明書のフォーマット");?>
                                    </div>

                                    <!-- 渡航用の場合には、国の選択のオプション 出力 -->
                                        <div class="p-option-table__th">渡航する国を入力</div>
                                        <div class="p-option-table__td --op-text" id="js-option02">
                                            <?php echo usces_the_itemOption("渡航する国");?>
                                        </div>

                                        <div class="p-option-table__th">ファイルアップロード</div>
                                        <div class="p-option-table__td" id="">
                                             <input type="file" name="files[]" id="file__btn" multiple />
                                              <label for="file__btn" class="file__btn p-file-btn js-file">ファイル選択</label>
                                        </div>

                                            <!-- この中の表にURL NAMEなどの情報が出力される -->
                                            <div class="files" id="files">
                                            </div>

                                       <!--   <div class="p-option-table__th">ご利用用途の選択</div>
                                        <div class="p-option-table__td -op-select js-option" id="js-option03">
                                            <?php echo usces_the_itemOption("【渡航用】ご利用用途の選択");?>
                                        </div> -->
                                         <?php else: ?>

                                         <!--   <div class="p-option-table__th">ご利用用途の選択</div>
                                        <div class="p-option-table__td -op-select js-option" id="js-option03">
                                            <?php echo usces_the_itemOption("ご利用用途の選択");?>
                                        </div> -->

                                         <?php endif; ?>



                                        <div class="p-option-table__th -bg-blue02 ">お支払い金額</div>
                                        <div class="p-option-table__td -price ">
                                            <span class="-price__text" id="js-out-price"><?php usces_the_itemPrice(); ?></span><span class="p-item__price-tax">円（税込）</span>
                                        </div>
                                </div>

                                   </div>
                <!-- ./p-certificate -->
                        <?php endif; ?>



                <div class="p-to-cart-btn-wrap p-to-cart-btn-wrap-cart">
                        <div class="p-to-cart-btn p-to-cart-btn--prev">
                            <a href="<?php echo home_url( '/' ); ?>item-list" class="p-to-cart-btn__prev">戻る</a>
                        </div>
                        <!-- ./p-to-cart-btn -->
                        <div class="p-to-cart-btn">

                            <?php usces_the_itemSkuButton('購入へ進む');?>
                        </div>
                        <!-- ./p-to-cart-btn -->
                </div>



<!-- 関連商品出力 -->

<?php related_items_list(); ?>


    </div>
    <!-- ./inner -->

</section>


     <?php endwhile; endif; ?>
</form>



<script>

$(".--op-text input").attr("placeholder","渡航する国を入力してください");


$("#file__btn").on("change",function(){
    $(this).removeClass("validate[required]");
});

$(".delete").on("click",function(){
    $("#file__btn").addClass("validate[required]");
})




    $(function(){
	    setTimeout(function(){
	        $(".template-download").remove();
	    },500);
	});

    $(function(){
$("#js-hidden-text inout").attr("name","");
});

$(function(){
$("#url1").attr("name","");
});

$(function(){
$("form").attr("id","fileupload");
$("form").attr("enctype","multipart/form-data");
});

</script>



<!-- The template to display files available for upload -->
    <script id="template-upload" type="text/x-tmpl">
      {% for (var i=0, file; file=o.files[i]; i++) { %}
          <div class="template-upload fade">
          <div class="p-option-table__th">
            <strong class="text-danger error"></strong>
          </div>

              <div class="p-option-table__td">
                  {% if (window.innerWidth > 480 || !o.options.loadImageFileTypes.test(file.type)) { %}
                      <p class="name">{%=file.name%}</p><br>
                  {% } %}




                    <p class="btn__cell">
                        {% if (!o.options.autoUpload && o.options.edit && o.options.loadImageFileTypes.test(file.type)) { %}
                            <button class="btn btn-success edit" data-index="{%=i%}" disabled>
                                <i class="glyphicon glyphicon-edit"></i>
                                <span>Edit</span>
                            </button>
                        {% } %}
                        {% if (!i && !o.options.autoUpload) { %}
                            <button class="btn btn-primary start" disabled>
                                <i class="glyphicon glyphicon-upload"></i>
                                <span>Start</span>
                            </button>
                        {% } %}
                        {% if (!i) { %}
                            <button class="btn btn-warning cancel">
                                <i class="glyphicon glyphicon-ban-circle"></i>
                                <span>削除</span>
                            </button>
                        {% } %}
                    </p>
              </div>
          </div>
      {% } %}
    </script>
    <!-- The template to display files available for download -->

      <?php if( is_single('certificate02')) : ?>
      <!-- 渡航よう証明書 -->

      <script id="template-download" type="text/x-tmpl">
      {% for (var i=0, file; file=o.files[i]; i++) { %}
          <div class="template-download fade">


              <div class="p-option-table__th">
                   {% if (file.error) { %}
                    アップロード失敗
                          {% } else { %}
                              アップロード完了
                          {% } %}
                      {% if (file.error) { %}
                      <div><span class="label label-danger">エラー</span>許可されていないファイル形式です</div>
                  {% } %}
             </div>
              <div class="p-option-table__td">
                      <p class="name">
                          {% if (file.url) { %}
                              <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a><br>
							  <input type="text" name="itemOption[51][item03][%E8%A8%BC%E6%98%8E%E6%9B%B8%E3%81%AE%E3%83%95%E3%82%A9%E3%83%BC%E3%83%9E%E3%83%83%E3%83%88]" value="{%=file.url%}" id="aa" class="sp__hidden ">
                          {% } else { %}
                              <span>{%=file.name%}</span>
                          {% } %}
                      </p>

                      <p class="btn__cell">
                  {% if (file.deleteUrl) { %}
                      <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                          <i class="glyphicon glyphicon-trash"></i>
                          <span>削除</span>
                      </button>
                      <!--<input type="checkbox" name="delete" value="1" class="toggle">-->
                  {% } else { %}
                      <button class="btn btn-warning cancel">
                          <i class="glyphicon glyphicon-ban-circle"></i>
                          <span>取り消し</span>
                      </button>
                  {% } %}
              </p>
              </div>
          </div>
      {% } %}
    </script>

        <?php elseif(is_single('pcr-set02')): ?>
        <!-- 渡航用PCRセット -->

        <script id="template-download" type="text/x-tmpl">
      {% for (var i=0, file; file=o.files[i]; i++) { %}
          <div class="template-download fade">


              <div class="p-option-table__th">
                   {% if (file.error) { %}
                    アップロード失敗
                          {% } else { %}
                              アップロード完了
                          {% } %}
                      {% if (file.error) { %}
                      <div><span class="label label-danger">エラー</span>許可されていないファイル形式です</div>
                  {% } %}
             </div>
              <div class="p-option-table__td">
                      <p class="name">
                          {% if (file.url) { %}
                              <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a><br>
							  <input type="text" name="itemOption[59][item05][%E8%A8%BC%E6%98%8E%E6%9B%B8%E3%81%AE%E3%83%95%E3%82%A9%E3%83%BC%E3%83%9E%E3%83%83%E3%83%88]" value="{%=file.url%}" id="aa" class="sp__hidden ">
                          {% } else { %}
                              <span>{%=file.name%}</span>
                          {% } %}
                      </p>

                      <p class="btn__cell">
                  {% if (file.deleteUrl) { %}
                      <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                          <i class="glyphicon glyphicon-trash"></i>
                          <span>削除</span>
                      </button>
                      <!--<input type="checkbox" name="delete" value="1" class="toggle">-->
                  {% } else { %}
                      <button class="btn btn-warning cancel">
                          <i class="glyphicon glyphicon-ban-circle"></i>
                          <span>取り消し</span>
                      </button>
                  {% } %}
              </p>
              </div>
          </div>
      {% } %}
    </script>

            <?php endif; ?>




    <script
      src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js?6dbddba84c650683"
      integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f"
      crossorigin="anonymous"
    ></script>
    <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.ui.widget.js?6dbddba84c650683"></script>
    <!-- The Templates plugin is included to render the upload/download listings -->
    <script src="https://blueimp.github.io/JavaScript-Templates/js/tmpl.min.js?6dbddba84c650683"></script>
    <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
    <script src="https://blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js?6dbddba84c650683"></script>
    <!-- The Canvas to Blob plugin is included for image resizing functionality -->
    <script src="https://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js?6dbddba84c650683"></script>
    <!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
    <script
      src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js?6dbddba84c650683"
      integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
      crossorigin="anonymous"
    ></script>
    <!-- blueimp Gallery script -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.blueimp-gallery.min.js?6dbddba84c650683"></script>
    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.iframe-transport.js?6dbddba84c650683"></script>
    <!-- The basic File Upload plugin -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fileupload.js?6dbddba84c650683"></script>
    <!-- The File Upload processing plugin -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fileupload-process.js?6dbddba84c650683"></script>
    <!-- The File Upload image preview & resize plugin -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fileupload-image.js?6dbddba84c650683"></script>
    <!-- The File Upload audio preview plugin -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fileupload-audio.js?6dbddba84c650683"></script>
    <!-- The File Upload video preview plugin -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fileupload-video.js?6dbddba84c650683"></script>
    <!-- The File Upload validation plugin -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fileupload-validate.js?6dbddba84c650683"></script>
    <!-- The File Upload user interface plugin -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fileupload-ui.js?6dbddba84c650683"></script>
    <!-- The main application script -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/demo.js?6dbddba84c650683"></script>
    <!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
    <!--[if (gte IE 8)&(lt IE 10)]>
      <script src="js/cors/jquery.xdr-transport.js?6dbddba84c650683"></script>
    <![endif]-->

    <script>

    /*
    ファイルアップロード関連の記述
    ----------------------------- */



$(function(){
$("#url1").attr("name","");
});

$(function(){
$("form").attr("id","fileupload");
$("enctype").attr("id","multipart/form-data");
});


$(function () {
    $('#fileupload').fileupload({
	autoUpload: true,
	maxFileSize: 10240000, // 10 MB
	maxNumberOfFiles: 1, //3個までを、1個に変更
    dropZone: $(".js-file")
    });
});



</script>


<?php get_footer(); ?>
