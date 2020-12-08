<?php
/*
Template Name: お見積もりフォーム
*/
?>
<?php get_header();?>



<div class="p-pages-ttl-area --ttl-bg-company-reserve u-bg-cover">
        <div class="p-pages-ttl-area__inner">
              <div class="p-pages-ttl-area__texts --company">
                        <h1 class="p-pages-ttl-area__ttl">お見積り</h1>
                <p class="p-pages-ttl-area__sub">企業・団体様のPCR検査費用のお見積りを<br class="u-pc">作成いたします。</p>
              </div>
        </div>
</div>



<section class="p-contact-form-area" id="link-form">



  <div class="l-inner">


    <h2 class="c-blue p-contact-form-area__ttl"><!-- 教育機関・医療機関 -->企業・団体専用<br class="u-sp">お見積もりフォーム</h2>

   <!--  <p class="p-contact-form-area__intro">必要事項にご入力の上お申し込みください。また下記項目は全て<span class="c-pink">必須事項</span>となっております。<br>なお、<span class="u-text-under-line c-pink">第二波・第三波の際には、患者様優先で検査を行わせていただく場合がございます。 </span>予めご了承ください。</p> -->


    <div class="p-form-content">

    <?php echo do_shortcode('[contact-form-7 id="158" title="見積もり用フォーム"]'); ?>

    </div>


  </div>

  <!--

<span class="p-out-total" id="js-total"></span>

   -->


</section>




<script src="https://ajaxzip3.github.io/ajaxzip3.js?6dbddba84c650683" charset="UTF-8"></script>
<link rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css?6dbddba84c650683">
                 <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js?6dbddba84c650683"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js?6dbddba84c650683"></script>



<script>




  jQuery(function($) {
    jQuery('#js-zip').keyup( function(e) {
        AjaxZip3.zip2addr(this,'','address01','address02','address03');
    } )
} );

$(function(){
  $("input").on("change",function(){
    var total = $("#calc").val();
    console.log(total);
    $("#zei").val(total * 0.1);
  })
});






document.getElementById("form1").onkeypress = (e) => {
  // form1に入力されたキーを取得
  const key = e.keyCode || e.charCode || 0;
  // 13はEnterキーのキーコード
  if (key == 13) {
    // アクションを行わない
    e.preventDefault();
  }
}




    </script>


<?php get_footer();?>




<script>

  $(function(){
  $("input").on("change",function(){
    	    setTimeout(function(){
	         var sd = $("#js-total-input").val().length;
    console.log(sd);
    $("#js-total-input").css("width",sd + "em");
	    },1000);

  });

});


  </script>
