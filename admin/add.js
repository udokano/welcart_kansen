
/* jQuery(function () {


    var target_text = jQuery("#orderitemlist tr .destination").text();


    if (target_text.indexOf("送り先") !== -1) {

        console.log(target_text);

        jQuery(".edit_pagenav").before('<p class="is-multi-delivery">※複数配送設定になっています！！<br>配送先の住所は<a href="#cart_table">以下を参照してください</a></p>');
        jQuery(".info_head tbody tr:nth-of-type(4) .midasi1").addClass("is-inactive");
        jQuery(".deli_info").addClass("is-inactive-del");
        jQuery("#delivery_name_row td.datafield").prepend("<p class='is-add-del-note'>※複数配送先設定をされている場合は、<br><a href='#cart_table'>以下の住所を参照してください。</a></p>");

    }

});
 */


function note() {
    // div要素を生成
    var div = document.createElement('div');
    // classを追加
    div.innerHTML = '※領収書を送る場合は、本管理画面からURLを送るのではなく、<br>メールソフトで添付してお送りください。<br><br>※見積一覧は非表示になっています。<br>【操作フィールド】内で商品区分を【全て】にし、【支払い方法】を選択後、【見積】と入力して絞り込みを行ってください';
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


/* jQuery(function () {
    jQuery('a[href^="#"]').click(function () {
        var speed = 500;
        var href = jQuery(this).attr("href");
        var target = jQuery(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        jQuery("html, body").animate({ scrollTop: position }, speed, "swing");
        return false;
    });
});
 */

/*

素のjavascriptで書いて見た!!
------------------------------*/


//まず複数配送になっているかを確認するための要素を取得
var has_class = document.getElementById("orderitemlist").getElementsByTagName("td");

//要素にdestinationクラスがあれば、処理
if (has_class[1].classList.contains("destination") == true) {
    console.log(has_class[1]);
    //条件分岐の対象の要素取得
    var target_elm = document.getElementById("orderitemlist").getElementsByClassName("destination");
    //対象の要素のテキストを取得
    var target_text = target_elm[0].textContent;
    console.log(target_text);
    //要素を追加する基準の要素を取得
    var text_add_before_elm = document.getElementsByClassName("edit_pagenav");

    console.log(text_add_before_elm);

    //要素を追加する
    var new_elm = document.createElement("p");
    //追加した要素にクラス付与
    new_elm.classList.add("is-multi-delivery");
    //追加した要素にテキスト追加
    new_elm.innerHTML = '※複数配送設定になっています！！<br>配送先の住所は<a href="#cart_table">以下を参照してください</a>';

    //購入履歴に『送り先』のテキストが入っていれば追加した要素を挿入
    if (target_text.indexOf("送り先 ：") !== -1) {
        //注意書きの要素を挿入
        text_add_before_elm[0].parentNode.insertBefore(new_elm, text_add_before_elm[0]);
        //右のほうにある配送先の見出しの要素を取得
        var middle_h = document.querySelector(".info_head tbody tr:nth-of-type(4) .midasi1");
        console.log(middle_h);
        //取得した要素にクラス付与
        middle_h.classList.add("is-inactive");
        //配送先の内容の要素を取得
        var del_info = document.querySelector(".deli_info");
        //配送先の要素にもクラス付与
        del_info.classList.add("is-inactive-del");
        //親の要素を取得
        var del_base = document.querySelector('#delivery_name_row td.datafield');
        //注意書きの要素を生成
        var new_elm_del = document.createElement("p");
        //生成した要素にクラスをつける
        new_elm_del.classList.add("is-add-del-note");
        //生成した要素にHTMLを挿入!!
        new_elm_del.innerHTML = "※複数配送先設定をされている場合は、<br><a href='#cart_table'>以下の住所を参照してください。</a>";
        //基準となる要素を取得
        var eml_standard = document.getElementsByName("delivery[name1]");
        //.deli_infoの最初の子要素に生成した要素を移動
        del_base.insertBefore(new_elm_del, eml_standard[0]);

        console.log(text_add_before_elm);

    }

}


const smoothScrollTrigger = document.querySelectorAll('a[href^="#"]');
for (let i = 0; i < smoothScrollTrigger.length; i++) {
    smoothScrollTrigger[i].addEventListener('click', (e) => {
        e.preventDefault();
        let href = smoothScrollTrigger[i].getAttribute('href');
        let targetElement = document.getElementById(href.replace('#', ''));
        const rect = targetElement.getBoundingClientRect().top;
        const offset = window.pageYOffset;
        const gap = 60;
        const target = rect + offset - gap;
        window.scrollTo({
            top: target,
            behavior: 'smooth',
        });
    });
}
