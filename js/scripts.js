/*

下層ヘッダーSPヘッダーブンの余白開ける

-------------------------------------*/

if (window.matchMedia("(max-width: 768px)").matches) {

  var $pages_header_hight = jQuery("#js-header").outerHeight();
  jQuery("#js-pages-head").css("margin-top", $pages_header_hight);

} else {

}




/*
スマホヘッダー上スクロールのみに表示
----------------------------------------- */

//スマホ追従フッター
if ((navigator.userAgent.indexOf('iPhone') > 0 && navigator.userAgent.indexOf('iPad') == -1) || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {

  var header = jQuery("#js-header");

  var header_hight = header.outerHeight();

  var startPos = 0, winScrollTop = 0;
  jQuery(window).on("scroll", function () {

    winScrollTop = jQuery(this).scrollTop();
    if (winScrollTop >= startPos) {
      if (winScrollTop >= 200) {
        header.css("top", -header_hight);
      }
    }

    else {
      header.css("top", "0px");
    }
    startPos = winScrollTop;

  });

}


/*

ノーマルスクリプト版
-----------------------------*/

/* if ((navigator.userAgent.indexOf('iPhone') > 0 && navigator.userAgent.indexOf('iPad') == -1) || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {

  var header = document.getElementById("js-header");
  var space_top = document.getElementById("js-pages-head");
  var header_hight = header.offsetHeight;

  space_top.style.marginTop = header_hight + "px";


  window.onresize = function () {
    header_hight = header.offsetHeight;
    space_top.style.marginTop = header_hight + "px";
  }

  var startPos = 0, win_sc = 0;

  //関数にする
  var head_sc_event = function () {
    win_sc = window.scrollY;
    console.log(win_sc);
    if (win_sc >= startPos) {
      if (win_sc >= 200) {
        header.style.top = - header_hight + "px";
      }
    }

    else {
      header.style.top = 0;
    }
    startPos = win_sc;
  }

  window.addEventListener('scroll', head_sc_event);

}
 */


/*

スライダー

-------------------------------------*/

/* jQuery('#js-pcr-slide').slick({
  //{}を入れる
  autoplay: false, //「オプション名: 値」の形式で書く
  dots: false,
  infinite: true,
  arrows: true,
  slidesToShow: 2,
  slidesToScroll: 1, //複数書く場合は「,」でつなぐ
  prevArrow: "<div class='p-pcr-slide-arrow p-pcr-slide-arrow--prev'></div>",
  nextArrow: "<div class='p-pcr-slide-arrow p-pcr-slide-arrow--next'></div>",
  appendArrows: jQuery("#js-nav-wrap"),

  responsive: [
    {
      breakpoint: 768, //767px以下のサイズに適用
      settings: {
        slidesToShow: 1,
        dots: true,
        appendDots: jQuery("#js-nav-wrap")
      }
    }
  ]
}); */



jQuery('#js-case-slide').slick({
  //{}を入れる
  autoplay: false, //「オプション名: 値」の形式で書く
  dots: false,
  infinite: true,
  arrows: true,
  initialSlide: 1,
  centerMode: true,
  variableWidth: true,
  slidesToShow: 3,
  slidesToScroll: 1, //複数書く場合は「,」でつなぐ
  prevArrow: "<div class='p-pcr-slide-arrow p-pcr-slide-arrow--prev'></div>",
  nextArrow: "<div class='p-pcr-slide-arrow p-pcr-slide-arrow--next'></div>",
  appendArrows: jQuery("#js-nav-wrap"),

  responsive: [
    {
      breakpoint: 768, //767px以下のサイズに適用
      settings: {
        slidesToShow: 1,
        initialSlide: 0,
        variableWidth: false,
        dots: true,
        centerMode: false,
        arrows: true,
        appendDots: jQuery("#js-nav-wrap")


      }
    }
  ]
});




if (window.matchMedia('(max-width: 768px)').matches) {
  jQuery('#js-sp-slide').slick({
    //{}を入れる
    autoplay: false, //「オプション名: 値」の形式で書く
    dots: false,
    infinite: false,
    arrows: true,
    slidesToShow: 1,
    slidesToScroll: 1, //複数書く場合は「,」でつなぐ
    prevArrow: "<div class='c-slick-arrow c-slick-arrow--prev'></div>",
    nextArrow: "<div class='c-slick-arrow c-slick-arrow--next'></div>",
  });
} else {
}

jQuery('#js-guidance-slide').slick({
  //{}を入れる
  centerMode: true,
  centerPadding: '8%',
  autoplay: false, //「オプション名: 値」の形式で書く
  dots: true,
  infinite: true,
  variableWidth: true,
  arrows: true,
  initialSlide: 2,
  slidesToShow: 3,
  slidesToScroll: 1, //複数書く場合は「,」でつなぐ
  prevArrow: "<div class='c-slick-rich-arrow c-slick-rich-arrow--prev'></div>",
  nextArrow: "<div class='c-slick-rich-arrow c-slick-rich-arrow--next'></div>",
  appendArrows: jQuery("#js-nav"),
  appendDots: jQuery("#js-nav"),
  breakpoint: 768,
  settings: {
    slidesToShow: 1,
  }
});


jQuery('#js-online-slide').slick({
  //{}を入れる
  autoplay: false, //「オプション名: 値」の形式で書く
  dots: true,
  appendDots: jQuery("#js-online-dots"),
  infinite: true,
  arrows: true,
  slidesToShow: 1,
  slidesToScroll: 1, //複数書く場合は「,」でつなぐ
  prevArrow: "<div class='p-online-slide-arrow p-online-slide-arrow--prev'></div>",
  nextArrow: "<div class='p-online-slide-arrow p-online-slide-arrow--next'></div>",
  appendArrows: jQuery("#js-online-arw"),

  responsive: [
    {
      breakpoint: 768, //767px以下のサイズに適用
      settings: {
        slidesToShow: 1,

      }
    }
  ]
});

/*

アコーディオン

--------------------------------------------*/

jQuery(".js-accordion").on("click", function () {
  jQuery(this).toggleClass("is-accordion-open");
  jQuery(this).next().toggleClass("is-answer-show");
});

jQuery(".js-accordion-pt2").on("click", function () {
  jQuery(this).find(".js-icon-plus").toggleClass("is-icon-plus-open");
  jQuery(this).next().toggleClass("is-show");
});


/*

ヘッダーがスクロールしたらクラス付与

-------------------------------------*/

jQuery(window).scroll(function () {
  if (jQuery(window).scrollTop() === 0) {
    jQuery("#js-header").removeClass("is-bg-change");
    jQuery("#js-header").removeClass("is-header-white");
    if (jQuery("#js-menu-top-menu-switch").hasClass("is-menu-bar-open")) {
      jQuery('#js-header').addClass('is-header-white');
    }

  } else {
    jQuery("#js-header").addClass("is-bg-change");
  }
});


/*

ハンバーガートップ

-------------------------------------*/

jQuery('#js-menu-top-menu-switch').on('click', function () {


  jQuery(this).toggleClass('is-menu-bar-open');
  jQuery('#js-global-nav').toggleClass('is-menu-open');
  jQuery('#js-header').addClass('is-header-white');


});

jQuery('.js-sp-clink-menu-close').on('click', function () {


  jQuery("#js-menu-top-menu-switch").removeClass('is-menu-bar-open');
  jQuery('#js-global-nav').removeClass('is-menu-open');
  //jQuery('#js-header').removeClass('is-bg-change');


});


/*

ハンバーガーPCR

-------------------------------------*/

jQuery('#js-sp-menu-switch').on('click', function () {
  var menu = jQuery('#js-menu-text');
  var menu_text = menu.text();

  jQuery('#js-menu-bar').toggleClass('is-menu-bar-open');
  jQuery('#js-global-nav').toggleClass('is-menu-open');

  if (menu_text === 'メニュー') {
    menu.text('閉じる');
  } else if (menu_text === '閉じる') {
    menu.text('メニュー');
  }
});



/*

TAB MENU

-------------------------------------*/

jQuery('.js-tab-btn').click(function () {
  //セレクタ設定
  var thisElm = jQuery(this);
  var thisTabWrap = thisElm.parents('.js-tab-wrap');
  var thisTabBtn = thisTabWrap.find('.js-tab-btn');
  var thisTabContents = thisTabWrap.find('.js-tab-contents');

  //current class
  var currentClass = 'is-tab-active';

  //js-tab-btn current 切り替え
  thisTabBtn.removeClass(currentClass);
  thisElm.addClass(currentClass);

  //クリックされた tabが何番目か取得
  var thisElmIndex = thisTabBtn.index(this);

  //js-tab-contents 切り替え
  thisTabContents.removeClass(currentClass);
  thisTabContents.eq(thisElmIndex).addClass(currentClass);
});

jQuery(".js-mb0").click(function () {
  jQuery(".js-mb0").addClass("u-mb0");
});

jQuery('.js-link').on('click', function (e) {
  e.stopPropagation();
  e.preventDefault();
  location.href = jQuery(this).attr('data-url');
});

//ドロワーメニュー切り替え設定

jQuery('#js-menu').click(function () {
  jQuery(this).toggleClass('active');
  jQuery('#js-nav').toggleClass('active');
});

//フリガナ自動入力

//フリガナ自動入力
jQuery(function () {
  jQuery.fn.autoKana('#name1', '#name3', {
    katakana: true, //true：カタカナ、false：ひらがな（デフォルト）
  });
  jQuery.fn.autoKana('#name2', '#name4', {
    katakana: true, //true：カタカナ、false：ひらがな（デフォルト）
  });
});

jQuery(function () {
  jQuery.fn.autoKana('#js-name01', '#js-name02', {
    katakana: true, //true：カタカナ、false：ひらがな（デフォルト）
  });

});


/*

MW FORM

-----------------------------------------*/
jQuery(".js-select-radio").on("change load", function () {

  if ((jQuery('[value="団体"]').prop('checked'))) {
    jQuery("#js-hidden-form").addClass("is-hidden-form-show");
  }

  if ((jQuery('[value="個人"]').prop('checked'))) {
    jQuery("#js-hidden-form").removeClass("is-hidden-form-show");
  }
});

jQuery(window).on('load', function () {



  if ((jQuery('[value="団体"]').prop('checked'))) {
    jQuery("#js-hidden-form").addClass("is-hidden-form-show");
  }

  if ((jQuery('[value="個人"]').prop('checked'))) {
    jQuery("#js-hidden-form").removeClass("is-hidden-form-show");
  }


});

/* 日付選択 */


/* jQuery('#js-date').datepicker({
  dateFormat: 'yy年mm月dd日',
  minDate: 0,
  maxDate: 120,
  autoclose: true,
  showOtherMonths: true,
  selectOtherMonths: true
});
 */

var headerHight = jQuery('#js-header').outerHeight();; //ヘッダの高さ
var urlHash = location.hash;
if (urlHash) {
  jQuery('body,html').stop().scrollTop(0);
  /* setTimeout(function () {
    var target = $(urlHash);
    var position = target.offset().top - headerHight;
    $('body,html').stop().animate({ scrollTop: position }, 500);
  }, 100); */

  jQuery(window).on('load', function () {

    var target = jQuery(urlHash);
    var position = target.offset().top - headerHight;
    jQuery('body,html').stop().animate({ scrollTop: position }, 500);

  });

}








/*

ANCHOR LINK PC and SP

-------------------------------------*/

jQuery('a[href^="#"]').click(function () {
  // 移動先を0px調整する。0を30にすると30px下にずらすことができる。
  if (window.matchMedia('(max-width: 768px)').matches) {
    /* ウィンドウサイズが 768px以下の場合のコードをここに */
    var sp_header_hight = jQuery("#js-header").outerHeight();
    var adjust = sp_header_hight;
    // スクロールの速度（ミリ秒）
    var speed = 400;
    // アンカーの値取得 リンク先（href）を取得して、hrefという変数に代入
    var href = jQuery(this).attr('href');
    // 移動先を取得 リンク先(href）のidがある要素を探して、targetに代入
    var target = jQuery(href == '#' || href == '' ? 'html' : href);
    // 移動先を調整 idの要素の位置をoffset()で取得して、positionに代入
    var position = target.offset().top - sp_header_hight;
    // スムーススクロール linear（等速） or swing（変速）
    jQuery('body,html').animate({ scrollTop: position }, speed, 'swing');
    return false;
  } else {
    /* ウィンドウサイズが 768px以上の場合のコードをここに */
    var adjust = 0;
    // スクロールの速度（ミリ秒）
    var speed = 400;
    // アンカーの値取得 リンク先（href）を取得して、hrefという変数に代入
    var href = jQuery(this).attr('href');
    // 移動先を取得 リンク先(href）のidがある要素を探して、targetに代入
    var target = jQuery(href == '#' || href == '' ? 'html' : href);
    // 移動先を調整 idの要素の位置をoffset()で取得して、positionに代入
    var position = target.offset().top + adjust;
    // スムーススクロール linear（等速） or swing（変速）
    jQuery('body,html').animate({ scrollTop: position }, speed, 'swing');
    return false;
  }
});


/* var ups = location.search;


history.replaceState('aaa', '', ups); */


/*

パラメーター引き継ぎ処理

----------------------------------------------------*/


var prm;

function retrieveGETqs() {

  var query = window.location.search.substring(1);
  return query;
  //引数がない時は処理しない
  if (!query) return false;

}

jQuery(function () {
  jQuery('a').click(function () {

    var str = retrieveGETqs();
    prm = decodeURIComponent(str);
    var target_url = jQuery(this).attr("href");
    var tt = target_url.indexOf('#');
    //テスト出力
    console.log(tt);
    console.log(prm);


    var pattern = "utm_source";

    //パラメーターに紹介コードが含まれていたら処理
    if (prm.indexOf(pattern) === 0) {

      //リンク先に＃が含まれない場合
      if (target_url.indexOf('#') === -1) {

        //リンク先を取得
        //パラメータを取得
        if (prm) {
          if (target_url.indexOf('?') != -1) {
            jQuery(this).attr('href', target_url + '&' + prm);
          } else {
            jQuery(this).attr('href', target_url + '?' + prm);
          }
        }
      }
      //含まれる場合は#の前にパラメーターを挿入
      else {
        //return false;
        //クリックしたURL
        var str02 = target_url;
        //そのURLの前
        var begin = target_url.indexOf('#');
        //パラメーター
        var replace_str = "?" + prm;
        //パラメーターの長さ
        var end = replace_str.length;
        //#より前の文字列を取得
        var before = str02.slice(0, begin);
        //#より後の文字列を取得(#も含む)
        var after = str02.slice(begin);
        //URLと#の真ん中にパラメーターを挟む
        var ret = before + replace_str + after;
        console.log(str02);
        console.log(replace_str);
        console.log(before);
        console.log(after);
        console.log(ret);
        //その値でリンク先を置換
        jQuery(this).attr('href').replace(ret);
        jQuery(this).attr('href', ret)

      }

    }

  })
});



/*

WELCARTの購入のステップごとにからパラメーターを引き継ぐ
サンクスページまでパラメータを維持させる

----------------------------------------------------*/


jQuery(function () {

  var str = retrieveGETqs();
  prm = decodeURIComponent(str);
  console.log(prm);

  var pattern = "utm_source";

  //パラメーターに紹介コードが含まれていたら処理
  if (prm.indexOf(pattern) === 0) {

    //購入のステップごとにFORM actionの値を取得
    var pm_url = jQuery(".js-cart-form").attr("action");
    //確認ページのみクラス付与ができないので、別に指定
    var pm_url_conf = jQuery("#purchase_form").attr("action");
    //URLのパラメータを取得
    var up = location.search;
    //テスト出力
    console.log(up);
    //フォームのactionの値にパラメーター連結
    jQuery('.js-cart-form').attr('action', pm_url + up);
    //確認ページのみクラス付与ができないので、別に指定
    jQuery('#purchase_form').attr('action', pm_url_conf + up);

  }
  //URLに紹介用のパラメーターがついていない場合
  /* if (!prm) {
    var pm_url_conf = jQuery("#purchase_form").attr("action");
    //確認ページのみクラス付与ができないので、別に指定
    jQuery('#purchase_form').attr('action', pm_url_conf + "?page=thanks");
  } */

});




/* var pppp = '?aa=ss'//location.search;

let setParam = pppp;
history.pushState(null, null, setParam);
 */


/*

モーダル

----------------------------------------------------*/




//モーダルメニュー

jQuery(function () {
  jQuery('.js-modal-open').each(function () {
    jQuery(this).on('click', function () {
      var target = $(this).data('target');
      var modal = document.getElementById(target);
      jQuery(modal).addClass("is-modal-open");
      jQuery("body").addClass("is-of-hidden");
      return false;
    });
  });
  jQuery('.js-modal-close').on('click', function () {
    jQuery('.js-modal').removeClass("is-modal-open");
    jQuery("body").removeClass("is-of-hidden");
    return false;
  });
});

//振込完了フォームモーダル


jQuery(function () {

  jQuery(".js-modal-form-open").on('click', function () {
    jQuery(".js-modal-form").addClass("is-modal-open");
    jQuery("body").addClass("is-of-hidden");
    return false;
  });

  jQuery('.js-modal-close').on('click', function () {
    jQuery('.js-modal-form').removeClass("is-modal-open");
    jQuery("body").removeClass("is-of-hidden");
    return false;
  });
});


//振込完了モーダルないのインプットに、注文番号と金額を挿入


jQuery(".js-modal-form-open").on('click', function () {

  var $ordernum = jQuery(this).parents("tbody").find(".order_number").text();
  var $total = jQuery(this).parents("tbody").find(".purchase_price").text();
  var $full_name = jQuery("#hidden__name__full").val();
  var $email = jQuery("#hidden__mail").val();
  var $company = jQuery("#hidden__company").val();
  var $tel = jQuery("#hidden__tel").val();


  //$(".wpcf7-response-output").css("display", "none");
  jQuery("#js-order-num").val($ordernum);
  jQuery("#js-deposit").val($total);
  jQuery("#js-name").val($full_name);
  jQuery("#js-your-email").val($email);
  jQuery("#js-company-name").val($company);
  jQuery("#js-tel-number").val($tel);


});

document.querySelector(".customkey_add_name").style.display = "none";

var radio_event = function () {
  var radioElm = document.getElementsByName("custom_customer[add]");
  console.log(radioElm);
  var target_Elm = document.querySelector(".customkey_add_name");
  console.log(target_Elm);

  for (var a = "", i = radioElm.length; i--;) {
    if (radioElm[i].checked) {
      var a = radioElm[i].value;
      if (a === "いる") {
        target_Elm.style.display = "table-row";
      }

      else {
        target_Elm.style.display = "none";
      }
      break;
    }
  }
}

window.addEventListener("change", radio_event, false);
