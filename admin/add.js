
jQuery(function () {


    var target_text = jQuery("#orderitemlist tr .destination").text();


    if (target_text.indexOf("送り先") !== -1) {

        console.log(target_text);

        jQuery(".edit_pagenav").before('<p class="is-multi-delivery">※複数配送設定になっています！！<br>配送先の住所は<a href="#cart_table">以下を参照してください</a></p>');
        jQuery(".info_head tbody tr:nth-of-type(4) .midasi1").addClass("is-inactive");
        jQuery(".deli_info").addClass("is-inactive-del");
        jQuery("#delivery_name_row td.datafield").prepend("<p class='is-add-del-note'>※複数配送先設定をされている場合は、<br><a href='#cart_table'>以下の住所を参照してください。</a></p>");

    }

});

function note() {
    // div要素を生成
    var div = document.createElement('div');
    // classを追加
    div.innerHTML = '※領収書を送る場合は、本管理画面からURLを送るのではなく、<br>メールソフトで添付してお送りください。<br><br>※見積一覧は非表示になっています。<br>【操作フィールド】内で商品区分を【全て】にし、【支払い方法】を選択後、【見積】と入力して絞り込みを行ってください。';
    div.className = 'add-note';

    // 生成したdiv要素を追加する
    var element = document.getElementById('usces_admin_status');
    element.parentNode.insertBefore(div, element);
};

window.addEventListener('load', note, false);




//受注リストの詳細の文言変更

window.onload = function () {
    var note_text = document.querySelector('#mailBox tbody tr td > span');
    note_text.innerHTML = '※領収書を送る場合は、本管理画面からURLを送るのではなく、メールソフトで添付してお送りください。'

};


jQuery(function () {
    jQuery('a[href^="#"]').click(function () {
        var speed = 500;
        var href = jQuery(this).attr("href");
        var target = jQuery(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        jQuery("html, body").animate({ scrollTop: position }, speed, "swing");
        return false;
    });
});
