<?php

/* Template Name: PCR検査キット販売
 */

?>


<?php get_header(); ?>




     <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/blueimp-gallery.min.css?6dbddba84c650683" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fileupload.css?6dbddba84c650683" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fileupload-ui.css?6dbddba84c650683" />

    <noscript
      ><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fileupload-noscript.css?6dbddba84c650683"
    /></noscript>
    <noscript
      ><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fileupload-ui-noscript.css?6dbddba84c650683"
    /></noscript>


     <?php if(is_single("file-up")): ?>


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-file-upload.js"></script>

<?php endif; ?>





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
                                        <p class="p-item-price">
                                        <span id="js-item-price" data-itemprice="<?php usces_the_itemPrice(); ?>">
                                        <?php usces_the_itemPrice(); ?></span>
                                        <span class="p-item-price__tax">円（税込）</span></p>
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

                                    <?php if(in_category("certificate-couponssssss")): ?>

                                    <!-- 陰性証明書の時だけ検体採取日を選択のボックスを表示させる -->

                                    <div class="p-op-wrap">
                                         <p class="p-tokou-ttl u-fw600">検体採取済みの方は日付を入力してください。<br class="">※これから採取される方は未入力でも可能です。</p>
                                        <div class="p-item-option u-border-bottom-none">
                                                                <p class="p-item-option__name">検体採取日 :</p>
                                                                <div class="p-item-option__inp --take-day --inp-tokou" id="js-take-day">
                                                                    <?php echo usces_the_itemOption("検体採取日");?>
                                                                </div>
                                                                <!-- ./-item-option__inp -->
                                        </div>
                                        <!-- ./p-item-option -->
                                    </div>
                                    <!-- ./p-op-wrap -->

                                    <?php endif; ?>

                                     <?php if(in_category("certificate02-couponssssss")): ?>

                                    <!-- 陰性証明書の時だけ検体採取日を選択のボックスを表示させる -->

                                    <div class="p-op-wrap">
                                         <p class="p-tokou-ttl u-fw600">渡航予定日を入力してください。<br class="">
                                        日本語のみではなく英語のものも対応可能です。<br><span class="u-text-under-line">※日本語版の見本も必ず必要になります。</span></p>
                                        <div class="p-item-option u-border-bottom-none">
                                                                <p class="p-item-option__name">渡航予定日 :</p>
                                                                <div class="p-item-option__inp --take-day --inp-tokou js-tokou-day" id="js-take-day">
                                                                    <?php echo usces_the_itemOption("渡航予定日");?>
                                                                </div>
                                                                <!-- ./-item-option__inp -->
                                        </div>
                                        <!-- ./p-item-option -->
                                    </div>
                                    <!-- ./p-op-wrap -->

                                    <?php endif; ?>


                                                 <?php if( is_single('pcr-set02') || is_single('certificate02') || is_single("certificate02-group") ) : ?>
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


                                                <?php if( is_single('pcr-goto') || is_single('pcr-set03-goto') ||  is_single('pcr-set05-goto') ||is_single('pcr-set10-goto') || is_single('pcr-antibody-set05-goto') || is_single('pcr-antibody-set10-goto') || is_single('pcr-certificate-set-goto') || is_single('pcr-certificate-set10-goto')) : ?>


                                                 <!-----------

                                                 GOTO用アップロードフィールど

                                                 ------------->


                                                  <div class="p-hidden-text-area p-neddddd" id="js-hidden-text">
                                                    <?php echo usces_the_itemOption("証明画像");?>
                                                    </div>

                                                    <div class="p-op-wrap">
                                                                    <p class="p-tokou-ttl">証明画像をアップロードしてください</p>


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


                                                <!------------------------------

                                                新しいファイルアップロードのテスト

                                                 --------------------------------->

                                                  <?php if(is_single("file-up")): ?>


                                                  <div class="p-hidden-text-area p-neddddd" id="js-hidden-text">
                                                    <?php echo usces_the_itemOption("証明画像");?>
                                                    </div>

                                                    <div class="p-op-wrap">
                                                            <p class="p-tokou-ttl">証明画像をアップロードしてください</p>
                                                       <div class="p-item-option --op-last">
                                                                <p class="p-item-option__name">ファイルアップロード :</p>
                                                                <div class="p-item-option__inp">
                                                                   <div id="fileuploader" class="p-new-upload">ファイル選択</div>
                                                                </div>

                                                            </div>
                                                            <!-- ./p-item-option -->

                                                    </div>
                                                    <!-- ./p-op-wrap -->

                                                     <div class="" id="js-rd">

                                                        <div id="rd-op01"><?php echo usces_the_itemOption("迅速検査");?></div>
                                                       <div id="rd-op02"><?php echo usces_the_itemOption("抗体検査");?></div>
                                                     </div>


                                                    <!-- この中にアップロードステータスが挿入される -->
                                                    <div id="js-upload-container" class="p-upload-status"></div>

                                                       <div id="eventsmessage" class="p-eventsmessage"></div>

                                                   <?php endif; ?>


                                                <?php if(is_single("visit-set01") || is_single("visit-set05") || is_single("visit-set10")): ?>
                                                    <!-- 来院ようのアイテム -->

                                                    <div class="p-op-wrap u-bdb-none ">


                                                            <div class="p-item-option">

                                                               <p class="p-item-option__name">来院希望日 :</p>
                                                                <div class="p-item-option__inp u-po_rel --inp-schedule" id="js-schedule">
                                                                    <?php echo usces_the_itemOption("来院希望日");?>
                                                                </div>
                                                            </div>


                                                    </div>

                                                     <div class="p-op-wrap u-bdb-none">


                                                            <div class="p-item-option">

                                                               <p class="p-item-option__name">来院<br class="u-sp">クリニック :</p>
                                                                <div class="p-item-option__inp u-po_rel -op-radio -op-radio--pt02" id="js-option01">
                                                                    <?php echo usces_the_itemOption("来院クリニック");?>
                                                                </div>
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

                        <!--

                        関連商品インクルード
                        ソースコードが長くなるので外部ファイル化

                        -->

                        <?php get_template_part('inc-relation'); ?>


                </div>

        </section>


     <?php endwhile; endif; ?>
</form>



<script>


$("#js-tokou input").attr("placeholder","渡航する国を入力してください");

jQuery('#js-schedule > input').attr("placeholder","来院希望日を入力してください");


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

        <?php if(!is_single("file-up")): ?>

    $(function(){
$("#js-hidden-text input").attr("name","");
});


<?php endif; ?>

$(function(){
$("#url1").attr("name","");
});

$(function(){
$("form").attr("id","fileupload");
$("form").attr("enctype","multipart/form-data");
});

</script>




  <?php if(is_single("file-up")): ?>

  <script>

  //ステータスが出力されるタグを移動

/*      $(window).on('load', function() {

$(".ajax-file-upload-container").appendTo("#js-upload-container");
 });

 */

$(document).ready(function()
{

    // protocol
var protocol = location.protocol ;
// host
var host = location.hostname ;
	//$(".ajax-file-upload-container").appendTo("#js-upload-container");
	$("#fileuploader").uploadFile({
	url: "<?php echo home_url("/")?>fileup/upload02.php",
    fileName:"myfile",
    showDelete: true,
    maxFileCount:1,
    dragDrop:false,
    autoSubmit:true,
    showFileCounter:false,
    showFileSize:true,
    statusBarWidth: "90%",
    showPreview:true,
    acceptFiles:"save02/*",
 //previewHeight: "auto",
 //previewWidth: "10rem",
 returnType:"json",
 deleteStr:"削除",
 extErrorStr:"アップロード失敗しました。",
 /* アップロードさせるファイルを拡張子制限をかけるなら以下を設定 */
 //allowedTypes: "jpg,png,gif",
 uploadStr:"ファイル選択",

//ステータスバーのタグの順序を変更

 customProgressBar: function(obj,s)
		{

            var createDOM = $("<div class='p-statusbar-top'></div>");
            this.statusbar = $("<div class='ajax-file-upload-statusbar'></div>");
            this.statusbar.prepend(createDOM);
            this.preview = $("<img class='ajax-file-upload-preview' />").width(s.previewWidth).height(s.previewHeight).appendTo(createDOM).wrap('<div class="p-upload-preview"></div>');
            this.filename = $("<div class='ajax-file-upload-filename'></div>").appendTo(createDOM);
            this.progressDiv = $("<div class='ajax-file-upload-progress'>").appendTo(this.statusbar).hide();
            this.progressbar = $("<div class='ajax-file-upload-bar'></div>").appendTo(this.progressDiv);
            this.abort = $("<div>" + s.abortStr + "</div>").appendTo(this.statusbar).hide();
            this.cancel = $("<div>" + s.cancelStr + "</div>").appendTo(this.statusbar).hide();
            this.done = $("<div>" + s.doneStr + "</div>").appendTo(this.statusbar).hide();
            this.download = $("<div>" + s.downloadStr + "</div>").appendTo(this.statusbar).hide();
            this.del = $("<div>" + s.deleteStr + "</div>").appendTo(this.statusbar).hide();

            this.abort.addClass("ajax-file-upload-red");
            this.done.addClass("ajax-file-upload-green");
            this.download.addClass("ajax-file-upload-green");
            this.cancel.addClass("ajax-file-upload-red");
            this.del.addClass("ajax-file-upload-red");
        },

        onLoad: function (obj) {

                    //エラーメッセージの初期化
                    $("#eventsmessage").html($("#eventsmessage").html() + "");
                    //ステータスを別の要素に移動させる
                    $(".ajax-file-upload-container").appendTo("#js-upload-container");
				},
				onSubmit: function (files) {
					//$("#eventsmessage").html($("#eventsmessage").html() + "<br/>Submitting:" + JSON.stringify(files));
                    //return false;
                    //uploadObj.startUpload();
                },

                //アップロード成功時の処理
		onSuccess: function (files, data, xhr, pd) {
                    //不要な点("")を削除
                    var fn = JSON.stringify(data);
                    var rpname = fn.replace('"', "");
                     var rpname02 = rpname.replace('"', "");

                    $(".ajax-file-upload-statusbar").prepend('<p class="p-message js-add-message u-tc">アップロードを完了しました</p>');
                    //確認ようで表にもURLを出力
                    $(".js-add-message").html("<?php echo home_url("/")?>fileup/uploads/" + rpname02 + "<br>アップロードを完了しました");

                    //ここでWELLCARTのオプションのテキストにURLを流し込む
                    $("#js-hidden-text input").val("<?php echo home_url("/")?>fileup/uploads/" +rpname02);

                    $("#eventsmessage").html("");

				},
				afterUploadAll: function (obj) {
					$("#eventsmessage").html($("#eventsmessage").html() );


				},
				onError: function (files, status, errMsg, pd) {
                    $("#eventsmessage").html($("#eventsmessage").html() + "<br/>アップロード失敗しました" /* + JSON.stringify(files) */);

				},
				onCancel: function (files, pd) {
					$("#eventsmessage").html($("#eventsmessage").html() + "<br/>キャンセルしました" + JSON.stringify(files));
				},
                deleteCallback: function (data, pd) {
                for (var i = 0; i < data.length; i++) {
                    $.post("<?php echo home_url("/")?>fileup/delete.php", {op: "delete",name: data[i]},
                        function (resp,textStatus, jqXHR) {
                            //Show Message
                        /*  $(".js-add-message").text("ファイルを削除しました"); */
                            $("#eventsmessage").html( "ファイルを削除しました");
                            //WELLCARTのオプションの値を一旦からにする
                            $("#js-hidden-text input").val("");
                        });
                }
                pd.statusbar.hide(); //You choice.
}

});
    });

    //$("#aa").text(url);


</script>

<?php endif ;?>

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
                            <p class="c-red">画像のアップロード中です。しばらく時間がかかる場合は、画像サイズを小さくするかパソコンからお試しください。</p>
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

    <?php elseif( is_single('certificate02-group')) : ?>
      <!-- 渡航よう証明書 企業物販 -->

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
							  <input type="text" name="itemOption[2341][item03-group][%E8%A8%BC%E6%98%8E%E6%9B%B8%E3%81%AE%E3%83%95%E3%82%A9%E3%83%BC%E3%83%9E%E3%83%83%E3%83%88]" value="{%=file.url%}" id="aa" class="sp__hidden ">
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

        <?php elseif(is_single('pcr-goto')): ?>
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
							  <input type="text" name="itemOption[2356][pcr-goto][%E8%A8%BC%E6%98%8E%E7%94%BB%E5%83%8F]" value="{%=file.url%}" id="aa" class="sp__hidden ">
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

    <?php elseif(is_single('pcr-set05-goto')): ?>
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
							  <input type="text" name="itemOption[1872][item10-goto][%E8%A8%BC%E6%98%8E%E7%94%BB%E5%83%8F]" value="{%=file.url%}" id="aa" class="sp__hidden ">
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

    <?php elseif(is_single('pcr-set10-goto')): ?>
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
							  <input type="text" name="itemOption[2359][item11-goto][%E8%A8%BC%E6%98%8E%E7%94%BB%E5%83%8F]" value="{%=file.url%}" id="aa" class="sp__hidden ">
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

     <?php elseif(is_single('pcr-set03-goto')): ?>
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
							  <input type="text" name="itemOption[1879][item07-goto][%E8%A8%BC%E6%98%8E%E7%94%BB%E5%83%8F]" value="{%=file.url%}" id="aa" class="sp__hidden ">
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

    <?php elseif(is_single('pcr-antibody-set05-goto')): ?>
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
							  <input type="text" name="itemOption[1882][item12-goto][%E8%A8%BC%E6%98%8E%E7%94%BB%E5%83%8F]" value="{%=file.url%}" id="aa" class="sp__hidden ">
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


     <?php elseif(is_single('pcr-antibody-set10-goto')): ?>
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
							  <input type="text" name="itemOption[1885][item14-goto][%E8%A8%BC%E6%98%8E%E7%94%BB%E5%83%8F]" value="{%=file.url%}" id="aa" class="sp__hidden ">
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


     <?php elseif(is_single('pcr-certificate-set-goto')): ?>
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
							  <input type="text" name="itemOption[2362][pcr-certificate-set-goto][%E8%A8%BC%E6%98%8E%E7%94%BB%E5%83%8F]" value="{%=file.url%}" id="aa" class="sp__hidden ">
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

    <?php elseif(is_single('pcr-certificate-set10-goto')): ?>
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
							  <input type="text" name="itemOption[2365][pcr-certificate-set10-goto][%E8%A8%BC%E6%98%8E%E7%94%BB%E5%83%8F]" value="{%=file.url%}" id="aa" class="sp__hidden ">
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



<?php if(!is_single("file-up")): ?>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js?6dbddba84c650683"></script>
<?php endif; ?>











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
	maxFileSize: 1000000000000000000000000, // 10 MB
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
