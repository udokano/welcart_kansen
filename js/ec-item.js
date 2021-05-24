/*

商品詳細ページ関連

-------------------------------------*/

/*
いらないラベル削除
*/

jQuery('.iopt_label').remove();

/* ラジオボタンにID付与 */

jQuery('#js-option01 input').each(function (i) {
  jQuery(this).attr('id', 'option-radio' + (i + 1));
});

jQuery('#js-option01 label').each(function (i) {
  jQuery(this).attr('for', 'option-radio' + (i + 1));
});





jQuery("#js-rd input").each(function (i) {
  jQuery(this).attr('id', 'op-rds' + (i + 1));

});

jQuery("#js-rd label").each(function (i) {
  jQuery(this).attr('for', 'op-rds' + (i + 1));

});



jQuery('#js-label-item-kind input').each(function (i) {
  jQuery(this).attr('id', 'item-kind' + (i + 1));
});

jQuery('#js-label-item-kind label').each(function (i) {
  jQuery(this).attr('for', 'item-kind' + (i + 1));
});

jQuery('#js-label-item-kind label').each(function (i) {
  jQuery(this).attr('id', 'item-kind-label' + (i + 1));
});

$('#item-kind-label1').after($('#js-item-kind'));

jQuery("#op-rds1").attr("data-price", "0");

jQuery("#op-rds2").attr("data-price", "3000");

jQuery("#op-rds3").attr("data-price", "0");

jQuery("#op-rds4").attr("data-price", "3000");
var $item_price = jQuery("#js-item-price").data("itemprice");
console.log($item_price);
var konma = $item_price.replace(/,/g, '');
console.log(konma);
jQuery("#js-item-price").attr("data-itemprice", konma);


jQuery(function () {

  var op01 = 0;
  var op02 = 0;

  jQuery("#rd-op01 input").on("change", function () {
    op01 = jQuery(this).data("price");

    jQuery("#js-item-price").text(addFigure(parseInt(konma) + parseInt(op01) + parseInt(op02)));
  });

  jQuery("#rd-op02 input").on("change", function () {
    op02 = jQuery(this).data("price");

    jQuery("#js-item-price").text(addFigure(parseInt(konma) + parseInt(op01) + parseInt(op02)));
  });

});



/*-------------------------------
        カンマ処理
        -------------------------------*/
function addFigure(str) {
  var num = new String(str).replace(/,/g, "");
  while (num != (num = num.replace(/^(-?\d+)(\d{3})/, "$1,$2")));
  return num;
}

function removeFigure(str) {
  var num = new String(str).replace(/,/g, "");
  num = Number(num);
  return num;
}




//『選択してください』は無効にする

jQuery('.js-option option:first-child').val('');

/*


セレクトボックス
２つ目以降の値が選択されたらクラス付与

*/

jQuery('.js-option > select').on('change', function () {
  /*   var ssss = jQuery(".js-option select option:selected").val("");
    console.log(ssss); */
  if (jQuery(this).find('option:selected').val() === '') {
    jQuery(this).removeClass('is-select');
  } else {
    jQuery(this).addClass('is-select');
  }
});



/*

陰性証明書にピッカー追加
---------------------------------*/

const $elm_take_day = document.getElementById("js-take-day");

//検体採取日の要素が存在していれば発動

if ($elm_take_day !== null) {

  const $elm_input = $elm_take_day.querySelector("input");

  //const value_inp = $elm_input.value;

  //$elm_input.removeAttribute("id");

  $elm_input.setAttribute("placeholder", "クリックして日付を選択してください");
  $elm_input.setAttribute("autocomplete", "off");


  //通常と渡航用でカレンダーの設定変える

  //通常
  if (!$elm_take_day.classList.contains('js-tokou-day')) {
    const picer_config = {
      //defaultDate: 'today',
      position: 'below',
      monthSelectorType: 'static',
      'locale': 'ja',
      disableMobile: "true",
      maxDate: "today",
      dateFormat: "Y年m月d日",


    }

    flatpickr($elm_input, picer_config);
  }
  //渡航用
  else {

    const picer_config = {
      //defaultDate: 'today',
      position: 'below',
      monthSelectorType: 'static',
      'locale': 'ja',
      disableMobile: "true",
      minDate: "today",
      //maxDate: "today",
      dateFormat: "Y年m月d日",

    }

    flatpickr($elm_input, picer_config);

  }




}
