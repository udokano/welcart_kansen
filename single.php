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
                        <h1 class="p-pages-ttl-area__ttl --ttl--item-list">申请购买及出具证明</h1>
                <p class="p-pages-ttl-area__sub">购买样本回收套件及阴性证明的请点击这里</p>
              </div>
        </div>
</div>




<div class="c-breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>


<!-- 商品ループ -->

<form action="<?php echo USCES_CART_URL ?>" method="post" id="form" class="js-cart-form">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); usces_the_item(); ?>
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
                                            <p class="p-item-price"><?php usces_the_itemPrice(); ?><span class="p-item-price__tax">日元（含税）</span></p>
                                        <div class="p-item-desc">

                                            <?php if(post_custom('wccs_item_desc')) :?>

                                                <dl class="p-item-cf">
                                                    <dt class="p-item-cf__item">关于本产品</dt>
                                                    <dd class="p-item-cf__desc"><?php echo post_custom('wccs_item_desc'); ?></dd>
                                                </dl>

                                            <?php endif; ?>

                                            <?php if(post_custom('wccs_item_sub')) :?>

                                              <dl class="p-item-cf">
                                                    <dt class="p-item-cf__item">附属品及内容物</dt>
                                                    <dd class="p-item-cf__desc"><?php echo post_custom('wccs_item_sub'); ?></dd>
                                                </dl>

                                            <?php endif; ?>

                                        </div>
                                    </div>
                                        <!-- ./p-item-row__right-top -->


                                         <div class="p-item-row__right-bottom">
                                                 <?php if( is_single('pcr-set02-zh') || is_single('certificate02-zh') ) : ?>
                                                 <!-- 渡航用の証明書が含まれる場合」にはオプション出力 -->
                                                  <div class="p-hidden-text-area p-neddddd" id="js-hidden-text">
                                                    <?php echo usces_the_itemOption("证书格式");?>
                                                    </div>

                                                    <div class="p-op-wrap">



                                                            <p class="p-tokou-ttl">如果你被开具负面的旅行证明<br class="u-sp">请输入您的信息</p>
                                                            <div class="p-item-option">
                                                                <p class="p-item-option__name">输入您的目的地国家 :</p>
                                                                <div class="p-item-option__inp --inp-tokou" id="js-tokou">
                                                                    <?php echo usces_the_itemOption("前往的国家");?>
                                                                </div>
                                                            </div>

                                                            <div class="p-item-option --op-last">
                                                                <p class="p-item-option__name">文件上传 :</p>
                                                                <div class="p-item-option__inp">
                                                                    <input type="file" name="files[]" id="file__btn" multiple />
                                                                    <label for="file__btn" class="file__btn p-file-btn js-file">档案选择</label>
                                                                </div>
                                                            </div>

                                                            <!-- この中の表にURL NAMEなどの情報が出力される -->
                                                            <div class="files" id="files">
                                                            </div>
                                                    </div>


                                                <?php endif; ?>



                                                   <?php if( !is_single('introduction-zh') && !is_single('certificate02-zh') && !is_single('certificate03-zh') &&!is_single('certificate-zh') && !is_single("visit-set01") && !is_single("visit-set05") && !is_single("visit-set10")) : ?>

                                                   <!-- 紙類以外のキットの場合 -->


                                                    <div class="p-op-wrap u-bdb-none">

                                                            <p class="u-fw600">＊如果你不打算去日本旅行，你不需要填写这个表格。</p>
                                                            <div class="p-item-option u-mb15">

                                                               <p class="p-item-option__name">预定旅行日期 :</p>
                                                                <div class="p-item-option__inp --inp-schedule" id="js-schedule">
                                                                    <?php echo usces_the_itemOption("渡航予定日");?>
                                                                </div>
                                                            </div>


                                                    </div>

                                                    <?php elseif(in_category("visit")) :?>


                                                    <div class="p-op-wrap u-bdb-none ">


                                                            <div class="p-item-option">

                                                               <p class="p-item-option__name">希望访问的日期 :</p>
                                                                <div class="p-item-option__inp u-po_rel --inp-schedule" id="js-schedule">
                                                                    <?php echo usces_the_itemOption("訪問希望日");?>
                                                                </div>
                                                            </div>


                                                    </div>

                                                     <div class="p-op-wrap u-bdb-none">


                                                            <div class="p-item-option">

                                                               <p class="p-item-option__name">门诊 :</p>
                                                                <div class="p-item-option__inp u-po_rel -op-radio -op-radio--pt02" id="js-option01">
                                                                    <?php echo usces_the_itemOption("门诊");?>
                                                                </div>
                                                            </div>


                                                    </div>

                                            <?php endif; ?>

                                            <div class="p-action">
                                                         <div class="p-action__quantity">
                                                            <span class="quantity">数量：<?php usces_the_itemQuant(); ?><?php usces_the_itemSkuUnit(); ?></span>
                                                        </div>
                                                        <div class="p-action__btn p-to-cart-btn">

                                                             <?php usces_the_itemSkuButton('进入购买');?>

                                                        </div>



                                            </div>
                                    </div>
                                    <!-- ./p-item-row__right-bottom -->




                                </div>
                        </div>
            <?php endwhile; endif; ?>

                        <!-- 関連商品出力 -->




                                      <h2 class="p-relation-ttl">相关项目</h2>
                                        <?php if(!in_category("visit")) :?>
                            <ul class="p-relation">
                            <?php //除外する　カテゴリーID　企業用　本番 19 ローカル 19　   英語　本番 24　ローカル 57 中国語 本番 23 ローカル 56
                            $args = array(
                                'post_status' => 'publish',
                                'post_type' => 'post',
                                 'post__not_in' => array($post->ID),
                                'category_name' => 'zh',
                                'category__not_in' => array(59),
                                'posts_per_page' => 3,
                                'orderby' => 'rand',
                            );
                            $the_query = new WP_Query( $args );
                            while ( $the_query->have_posts() ) : $the_query->the_post();
                            ?>

                                <li class="p-relation__item">
                                    <?php usces_the_item(); usces_have_skus(); ?>
                                    <a href="<?php the_permalink(); ?>" class="p-relation__link">
                                        <div class="p-relation__thumb"><?php usces_the_itemImage($number=0, $width=800, $height=800); ?></div>
                                        <div class="p-relation__bottom">
                                            <h2 class="p-relation__name"><?php usces_the_itemName(); ?></h2>
                                            <p class="p-relation__price"><?php usces_the_firstPrice(); ?><span class="yen">日元</span><em class="tax">(含税)</em></p>
                                        </div>

                                    </a>
                                </li>

                            <?php endwhile; wp_reset_postdata(); ?>

                            </ul>


                            <?php else : ?>


                            <ul class="p-relation">
                            <?php //除外する　カテゴリーID　企業用　本番 19 ローカル 19　   英語　本番 24　ローカル 57 中国語 本番 23 ローカル 56
                            $args = array(
                                'post_status' => 'publish',
                                'post_type' => 'post',
                                 'post__not_in' => array($post->ID),
                                'category_name' => 'visit',
                                'posts_per_page' => 3,
                                'orderby' => 'rand',
                            );
                            $the_query = new WP_Query( $args );
                            while ( $the_query->have_posts() ) : $the_query->the_post();
                            ?>

                                <li class="p-relation__item">
                                    <?php usces_the_item(); usces_have_skus(); ?>
                                    <a href="<?php the_permalink(); ?>" class="p-relation__link">
                                        <div class="p-relation__thumb"><?php usces_the_itemImage($number=0, $width=800, $height=800); ?></div>
                                        <div class="p-relation__bottom">
                                            <h2 class="p-relation__name"><?php usces_the_itemName(); ?></h2>
                                            <p class="p-relation__price"><?php usces_the_firstPrice(); ?><span class="yen">日元</span><em class="tax">(含税)</em></p>
                                        </div>

                                    </a>
                                </li>

                            <?php endwhile; wp_reset_postdata(); ?>

                            </ul>

                        <?php endif;?>
                </div>

        </section>


</form>



<script>






$("#js-tokou input").attr("placeholder","请输入您旅行的国家");



jQuery('#js-schedule > input').attr("autocomplete","off");

jQuery('#js-schedule > input').attr("placeholder","请输入您的预约日期");




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
$("#js-hidden-text input").attr("name","");
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



     <?php elseif(is_single('certificate02-en')): ?>
        <!-- 渡航用PCRセット -->

        <script id="template-download" type="text/x-tmpl">
      {% for (var i=0, file; file=o.files[i]; i++) { %}
          <div class="template-download fade">


              <div class="p-option-table__th">
                   {% if (file.error) { %}
                    upload failure
                          {% } else { %}
                              Upload Complete
                          {% } %}
                      {% if (file.error) { %}
                      <div><span class="label label-danger">error</span>Unauthorized file format.</div>
                  {% } %}
             </div>
              <div class="p-option-table__td">
                      <p class="name">
                          {% if (file.url) { %}
                              <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a><br>
							  <input type="text" name="itemOption[1683][item03-en][%E8%A8%BC%E6%98%8E%E6%9B%B8%E3%81%AE%E3%83%95%E3%82%A9%E3%83%BC%E3%83%9E%E3%83%83%E3%83%88]" value="{%=file.url%}" id="aa" class="sp__hidden ">
                          {% } else { %}
                              <span>{%=file.name%}</span>
                          {% } %}
                      </p>

                      <p class="btn__cell">
                  {% if (file.deleteUrl) { %}
                      <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                          <i class="glyphicon glyphicon-trash"></i>
                          <span>deletion</span>
                      </button>
                      <!--<input type="checkbox" name="delete" value="1" class="toggle">-->
                  {% } else { %}
                      <button class="btn btn-warning cancel">
                          <i class="glyphicon glyphicon-ban-circle"></i>
                          <span>revocation</span>
                      </button>
                  {% } %}
              </p>
              </div>
          </div>
      {% } %}
    </script>

     <?php elseif(is_single('certificate02-en')): ?>
        <!-- 渡航用PCRセット -->

        <script id="template-download" type="text/x-tmpl">
      {% for (var i=0, file; file=o.files[i]; i++) { %}
          <div class="template-download fade">


              <div class="p-option-table__th">
                   {% if (file.error) { %}
                    upload failure
                          {% } else { %}
                              Upload Complete
                          {% } %}
                      {% if (file.error) { %}
                      <div><span class="label label-danger">error</span>Unauthorized file format.</div>
                  {% } %}
             </div>
              <div class="p-option-table__td">
                      <p class="name">
                          {% if (file.url) { %}
                              <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a><br>
							  <input type="text" name="itemOption[1683][item03-en][%E8%A8%BC%E6%98%8E%E6%9B%B8%E3%81%AE%E3%83%95%E3%82%A9%E3%83%BC%E3%83%9E%E3%83%83%E3%83%88]" value="{%=file.url%}" id="aa" class="sp__hidden ">
                          {% } else { %}
                              <span>{%=file.name%}</span>
                          {% } %}
                      </p>

                      <p class="btn__cell">
                  {% if (file.deleteUrl) { %}
                      <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                          <i class="glyphicon glyphicon-trash"></i>
                          <span>deletion</span>
                      </button>
                      <!--<input type="checkbox" name="delete" value="1" class="toggle">-->
                  {% } else { %}
                      <button class="btn btn-warning cancel">
                          <i class="glyphicon glyphicon-ban-circle"></i>
                          <span>revocation</span>
                      </button>
                  {% } %}
              </p>
              </div>
          </div>
      {% } %}
    </script>

     <?php elseif(is_single('certificate02-zh')): ?>
        <!-- 渡航用PCRセット -->

        <script id="template-download" type="text/x-tmpl">
      {% for (var i=0, file; file=o.files[i]; i++) { %}
          <div class="template-download fade">


              <div class="p-option-table__th">
                   {% if (file.error) { %}
                    upload failure
                          {% } else { %}
                              上传完整版
                          {% } %}
                      {% if (file.error) { %}
                      <div><span class="label label-danger">错误</span>Unauthorized file format.</div>
                  {% } %}
             </div>
              <div class="p-option-table__td">
                      <p class="name">
                          {% if (file.url) { %}
                              <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a><br>
							  <input type="text" name="itemOption[1650][item03-zh][%E8%AF%81%E4%B9%A6%E6%A0%BC%E5%BC%8F]" value="{%=file.url%}" id="aa" class="sp__hidden ">
                          {% } else { %}
                              <span>{%=file.name%}</span>
                          {% } %}
                      </p>

                      <p class="btn__cell">
                  {% if (file.deleteUrl) { %}
                      <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                          <i class="glyphicon glyphicon-trash"></i>
                          <span>删减</span>
                      </button>
                      <!--<input type="checkbox" name="delete" value="1" class="toggle">-->
                  {% } else { %}
                      <button class="btn btn-warning cancel">
                          <i class="glyphicon glyphicon-ban-circle"></i>
                          <span>revocation</span>
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

    <link rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css?6dbddba84c650683">
                 <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js?6dbddba84c650683"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-zh-CN.min.js?6dbddba84c650683"></script>


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


jQuery('#js-schedule input').datepicker({
  dateFormat: 'yy年mm月dd日',
  minDate: 0,
  maxDate: 120,
  autoclose: true,
  showOtherMonths: true,
  selectOtherMonths: true
});




</script>


<?php get_footer(); ?>
