//日付選択のモーダル設定

const link_btn = jQuery("#js-date-item-link");


jQuery(".js-modal-open").on("click", function () {
    jQuery(".js-modal").addClass("is-modal-open");
    jQuery("body").addClass("is-of-hidden");
    var item_link = jQuery(this).attr("data-link");
    link_btn.attr("href", item_link);
});

jQuery(".js-modal-close").on("click", function () {
    jQuery(".js-modal").removeClass("is-modal-open");
    jQuery("body").removeClass("is-of-hidden");
});




//DATEピッカーのトリガー
const date = jQuery('#js-date');

/*

DATEピッカー設定
----------------------------*/


date.datepicker({
    dateFormat: 'yy年mm月dd日',
    minDate: 0,
    maxDate: 120,
    autoclose: true,
    showOtherMonths: true,
    selectOtherMonths: true,
    showAnim: "slideDown",
    //カレンダーの出力をタグの中にに移動させる!!
    beforeShow: function (textbox, instance) {
        $('.appendDatepicker').append($('#ui-datepicker-div'));
    }
});

//購入不可の際のメッセージ
const else_text = jQuery("#js-else-text");


//DATEピッカーの値が変わった際に発動するイベント
date.on("change", function () {

    //デイトピッカーで出力された日付を取得
    var val = jQuery(this).val();
    //余計な年月日の文字列を排除する
    var replace_year = val.replace("年", "");
    var replace_month = replace_year.replace("月", "");
    var replace_date = replace_month.replace("日", "");
    console.log(replace_date);
    //data属性に余計な文字列を削除した、日付を出力
    jQuery(this).attr("data-date", replace_date);

    //本日の日付を取得
    var date_today = new Date();
    var year_today = date_today.getFullYear();
    var month_today = ("00" + (date_today.getMonth() + 1)).slice(-2);
    var day_today = ("00" + date_today.getDate()).slice(-2);
    var rt_today = String(year_today) + String(month_today) + String(day_today);
    console.log(year_today);
    console.log(rt_today);

    //明日の日付を取得
    var datea = new Date();
    datea.setDate(datea.getDate() + 1);
    var year = datea.getFullYear();
    var month = ("00" + (datea.getMonth() + 1)).slice(-2);;
    var day = ("00" + datea.getDate()).slice(-2);
    var rt = String(year) + String(month) + String(day);
    console.log(datea);
    console.log(rt);

    //明後日の日付を取得
    var datea02 = new Date();
    datea02.setDate(datea02.getDate() + 2);
    var year02 = datea02.getFullYear();
    var month02 = ("00" + (datea02.getMonth() + 1)).slice(-2);;
    var day02 = ("00" + datea02.getDate()).slice(-2);
    var rt02 = String(year02) + String(month02) + String(day02);
    console.log(datea02);
    console.log(rt02);


    /*
    カレンダーで選択した日付が、本日の日付の2日後(本日から明後日)以内なら、
    商品を購入させない(true)

    それ以上なら商品ページへのボタンを表示させる(false)
    ------------------------------*/


    if (replace_date === rt_today || replace_date === rt || replace_date === rt02) {
        else_text.css("display", "block");
        link_btn.css("display", "none");
        //link_btn.text("購入できません");
    } else {
        else_text.css("display", "none");
        link_btn.css("display", "block");

        //link_btn.text("購入画面へ");
    }

});




/* 現在の日付をYY/MM/DDで取得して2日プラスする */
/* var today = new Date();
today.setDate(today.getDate() + 1);
var full_year = today.getFullYear();
var now_month = today.getMonth() + 1;
//var now_date = today.getDate();

//日付を文字列として結合させる
var now_full_date = full_year.toString() + now_month.toString() + today.toString();
//結合した日付を数値に変換して、2日プラスする

var now_full_date_plaus = parseInt(now_full_date);

//選択した日付
console.log(replace_date);

//西暦・月・日を文字列として連結させる
console.log(now_full_date);
 */
    //console.log(val02);
