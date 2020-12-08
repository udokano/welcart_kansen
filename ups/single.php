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


<div class="p-pages-ttl-area --ttl-bg-items u-bg-cover" id="js-pages-head">
        <div class="p-pages-ttl-area__inner --inner-item">
              <div class="p-pages-ttl-area__texts --texts--item-list">
                        <h1 class="p-pages-ttl-area__ttl --ttl--item-list">購入申し込み・証明書発行</h1>
                <p class="p-pages-ttl-area__sub">検体回収キット、陰性証明書の<br>購入はこちらから</p>
              </div>
        </div>
</div>





<div class="c-breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>



               <!--  <?php if( is_single('pcr')  || is_single('antibody-kit') || is_single('pcr-set03')) : ?>
                        <div class="l-inner">
                                 <div class="p-area-not">
                                        <p class="p-area-not__ttl">
                                            <span class="p-area-not__sub">現在のご購入・回収可能地域</span><br>東京、愛知、大阪、福岡<br><span class="p-area-not__sub">それ以外の地域は順次拡大予定となります。</span>
                                            <div class="p-uuuu">※個人ご利用の場合のみ。<br><span class="p-area-not__sub">企業・団体様のご利用の場合は<br class="u-sp">地域制限はございません。</span></div>
                                        </p>
                                </div>

                        </div>
                <?php endif; ?> -->

<!-- 商品ループ -->

<form action="<?php echo USCES_CART_URL ?>" method="post" id="form" class="js-cart-form">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); usces_the_item("item01"); ?>
        <?php usces_have_skus();?>



        <section class="l-section bg-section-gray p-new-item">
                <div class="l-inner">
                        <div class="p-item-row">
                                <div class="p-item-row__thumb">
                                    <?php usces_the_itemImage($number, "1000", "1000") ?>
                                </div>

                                <div class="p-item-row__right">
                                    <div class="p-item-row__right-top">
                                        <h2 class="p-item-ttl"><?php usces_the_itemName(); ?></h2>
                                        <p class="p-item-price"><?php usces_the_itemPrice(); ?><span class="p-item-price__tax">円（税別）</span></p>
                                        <div class="p-item-desc">

                                            <?php if(post_custom('wccs_item_desc')) :?>

                                                <dl class="p-item-cf">
                                                    <dt class="p-item-cf__item">この商品について</dt>
                                                    <dd class="p-item-cf__desc"><?php echo post_custom('wccs_item_desc'); ?></dd>
                                                </dl>



                                            <?php endif; ?>

                                            <?php if(post_custom('wccs_item_sub')) :?>

                                              <dl class="p-item-cf">
                                                    <dt class="p-item-cf__item">付属品・内容物</dt>
                                                    <dd class="p-item-cf__desc"><?php echo post_custom('wccs_item_sub'); ?></dd>
                                                </dl>

                                            <?php endif; ?>

                                        </div>

                                          <?php if( is_single('pcr-set02') || is_single('certificate02') ) : ?>

                                                <a href="<?php echo home_url( '/' ); ?>voyage" class="c-blue-arw-btn p-item-blue-btn">海外渡航用の証明書発行に関して</a>

                                          <?php endif; ?>

                                    </div>

                                     <div class="p-item-row__right-bottom">
                                                 <?php if( is_single('pcr-set02') || is_single('certificate02') ) : ?>
                                                 <!-- 渡航用の証明書が含まれる場合」にはオプション出力 -->
                                                  <div class="p-hidden-text-area p-neddddd" id="js-hidden-text">
                                                    <?php echo usces_the_itemOption("証明書のフォーマット");?>
                                                    </div>

                                                    <div class="p-op-wrap">
                                                                    <p class="p-tokou-ttl">渡航用の陰性証明書を発行される場合に<br class="u-sp">ご入力ください</p>

                                                            <div class="p-item-option">
                                                                <p class="p-item-option__name">渡航する国を入力 :</p>
                                                                <div class="p-item-option__inp --inp-tokou" id="js-tokou">
                                                                    <?php echo usces_the_itemOption("渡航する国");?>
                                                                </div>
                                                            </div>

                                                            <div class="p-item-option --op-last">
                                                                <p class="p-item-option__name">ファイルアップロード :</p>
                                                                <div class="p-item-option__inp">
                                                                    <input type="file" name="files[]" id="file__btn" multiple />
                                                                    <label for="file__btn" class="file__btn p-file-btn js-file">ファイル選択</label>
                                                                </div>
                                                            </div>

                                                            <!-- この中の表にURL NAMEなどの情報が出力される -->
                                                            <div class="files" id="files">
                                                            </div>
                                                    </div>


                                                <?php endif; ?>


                                            <div class="p-action">
                                                <div class="p-action__quantity">
                                                    <span class="quantity">個数：<?php usces_the_itemQuant(); ?><?php usces_the_itemSkuUnit(); ?></span>
                                                </div>
                                                <div class="p-action__btn p-to-cart-btn">
                                                    <?php if (isset($post->ID) && in_category(GROUP_CATEGORY_SLUG, $post->ID)) : ?>
                                                        <?php usces_the_itemSkuButton('購入・お見積もりに進む');?>
                                                    <?php else : ?>
                                                        <?php usces_the_itemSkuButton('購入へ進む');?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                    </div>

                                </div>
                        </div>


                        <!-- 関連商品出力 -->

                        <?php if(in_category("group")) :?>

                        <!-- 企業用のレコメンド カテゴリーがgroupのものだけ表示 -->

                                      <h2 class="p-relation-ttl">関連アイテム</h2>

                    <ul class="p-relation">

                            <?php
                                    $args = array(
                                    'post_type' => 'post',
                                     'post_status' => 'publish',
                                    'category_name' => 'group',
                                     'post__not_in' => array($post->ID),
                                    'posts_per_page' => 3,
                                    'orderby' => 'rand',
                                    'order' => 'DESC',
                                    );
                                    $the_query = new WP_Query( $args );
                                    while ( $the_query->have_posts() ) : $the_query->the_post();
                                    ?>

                                    <!--ここにループの中の記述 -->
                                        <li class="p-relation__item">
                                            <?php usces_the_item(); usces_have_skus(); ?>
                                            <a href="<?php the_permalink(); ?>" class="p-relation__link">
                                                <div class="p-relation__thumb"><?php usces_the_itemImage($number=0, $width=800, $height=800); ?></div>
                                                <div class="p-relation__bottom">
                                                    <h2 class="p-relation__name"><?php usces_the_itemName(); ?></h2>
                                                    <p class="p-relation__price"><?php usces_the_firstPrice(); ?><span class="yen">円</span><?php usces_guid_tax(); ?></p>
                                                </div>

                                            </a>
                                        </li>

                                    <?php endwhile; wp_reset_postdata(); ?>

                        </ul>


                        <?php elseif(in_category("goto")) :?>


                        <!-- GOTOのものだけを表示 -->


                                       <h2 class="p-relation-ttl">関連アイテム</h2>

                    <ul class="p-relation">

                            <?php
                                    $args = array(
                                    'post_type' => 'post',
                                     'post_status' => 'publish',
                                    'category_name' => 'goto',
                                     'post__not_in' => array($post->ID),
                                    'posts_per_page' => 3,
                                    'orderby' => 'rand',
                                    'order' => 'DESC',
                                    );
                                    $the_query = new WP_Query( $args );
                                    while ( $the_query->have_posts() ) : $the_query->the_post();
                                    ?>

                                    <!--ここにループの中の記述 -->
                                        <li class="p-relation__item">
                                            <?php usces_the_item(); usces_have_skus(); ?>
                                            <a href="<?php the_permalink(); ?>" class="p-relation__link">
                                                <div class="p-relation__thumb"><?php usces_the_itemImage($number=0, $width=800, $height=800); ?></div>
                                                <div class="p-relation__bottom">
                                                    <h2 class="p-relation__name"><?php usces_the_itemName(); ?></h2>
                                                    <p class="p-relation__price"><?php usces_the_firstPrice(); ?><span class="yen">円</span><?php usces_guid_tax(); ?></p>
                                                </div>

                                            </a>
                                        </li>

                                    <?php endwhile; wp_reset_postdata(); ?>

                        </ul>



                        <?php else: ?>


<!--


    一般用の商品レコメンド!!  企業用の商品は除外する！！
    企業用の商品のカテゴリーIDは　テスト環境 8 ローカル　19 本番 19
    GOTOのカテゴリーIDは、テスト　ローカル　59　本番　25

 -->

                    <h2 class="p-relation-ttl">関連アイテム</h2>

                    <ul class="p-relation">

                            <?php
                                    $args = array(
                                    'post_type' => 'post',
                                     'post_status' => 'publish',
                                    'category_name' => 'item',
                                     'post__not_in' => array($post->ID),
                                    'category__not_in' => array(19,25),  //*** ここをちょくちょく変える  *** */
                                    'posts_per_page' => 3,
                                    'orderby' => 'rand',
                                    'order' => 'DESC',
                                    );
                                    $the_query = new WP_Query( $args );
                                    while ( $the_query->have_posts() ) : $the_query->the_post();
                                    ?>

                                    <!--ここにループの中の記述 -->
                                        <li class="p-relation__item">
                                            <?php usces_the_item(); usces_have_skus(); ?>
                                            <a href="<?php the_permalink(); ?>" class="p-relation__link">
                                                <div class="p-relation__thumb"><?php usces_the_itemImage($number=0, $width=800, $height=800); ?></div>
                                                <div class="p-relation__bottom">
                                                    <h2 class="p-relation__name"><?php usces_the_itemName(); ?></h2>
                                                    <p class="p-relation__price"><?php usces_the_firstPrice(); ?><span class="yen">円</span><?php usces_guid_tax(); ?></p>
                                                </div>

                                            </a>
                                        </li>

                                    <?php endwhile; wp_reset_postdata(); ?>

                        </ul>

                        <?php endif; ?>


                </div>

        </section>










     <?php endwhile; endif; ?>
</form>



<script>

$("#js-tokou input").attr("placeholder","渡航する国を入力してください");


$("#file__btn").on("change",function(){
    $(this).removeClass("validate[required]");
});

$(".delete").on("click",function(){
    $("#file__btn").addClass("validate[required]");
})




   $(window).on('load', function() {
	    setTimeout(function(){
	        $(".template-download").remove();
	    },300);
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
	maxFileSize: 1024000000000, // 10 MB
    maxNumberOfFiles: 1, //3個までを、1個に変更
    dropZone: $(".js-file")
    });
});



</script>


<?php get_footer(); ?>
