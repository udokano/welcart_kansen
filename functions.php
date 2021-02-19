<?php
// 仮会員のステータス
define("TEMP_MEMBER", 3);
// 購入まで完了した仮会員のステータス
define("USED_TEMP_MEMBER", 4);

// 法人・団体商品のカテゴリのスラッグ
define("GROUP_CATEGORY_SLUG", 'group');

// ダウンロード商品の置き場所
define("COUPON_FILE_PATH", WP_PLUGIN_DIR .'/wcex_dlseller/coupon');

// 業務パック割引の段階数(拡張前の3件も含めた数)
define("GP_COUNT", 10);



/*

WPの更新を非表示にする

-----------------------------------------------------*/

//本体の更新通知を非表示
add_filter("pre_site_transient_update_core", "__return_null");
//プラグインの更新通知を非表示
add_filter("pre_site_transient_update_plugins", "__return_null");
//テーマの更新通知を非表示
add_filter("pre_site_transient_update_themes", "__return_null");



function register_my_menus() {
  register_nav_menus( array( //複数のナビゲーションメニューを登録する関数
  //'「メニューの位置」の識別子' => 'メニューの説明の文字列',
     'footer-menu01' => 'footer-menu01',
    'footer-menu02'  => 'footer-menu02',
     'footer-menu03'  => 'footer-menu03'

  ) );
}
add_action( 'after_setup_theme', 'register_my_menus' );



/*

ゴミ箱自動削除防止

------------------------------------------------------*/


add_action( 'init', 'remove_schedule_delete' );
function remove_schedule_delete() {
  remove_action( 'wp_scheduled_delete', 'wp_scheduled_delete' );
}




/* function current_pagehook(){
	global $hook_suffix;
	if( !current_user_can( 'manage_options') ) return;
	echo '<div class="updated"><p>hook_suffix : ' . $hook_suffix . '</p></div>';
}
add_action('admin_notices', 'current_pagehook'); */


// フックする関数
/* function custom_enqueue($hook_suffix) {
	// 新規投稿または編集画面のみ
	if( 'toplevel_page_usces_orderlist' === $hook_suffix || 'toplevel_page_usces_orderlist' === $hook_suffix ) {
	echo '<style>
  .add-note {
      font-size: 22px;
      font-weight: 600;
      line-height: 1.32;
      color: red;
  }
  </style>'.PHP_EOL;

        echo "<script>
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

  </script>".PHP_EOL;
    }
}
// "custom_enqueue" 関数を管理画面のキューアクションにフック
add_action( 'admin_enqueue_scripts', 'custom_enqueue' );
 */

 /* 管理画面に外部CSS */

function add_admin_style($hook_suffix){
    if( 'toplevel_page_usces_orderlist' === $hook_suffix || 'toplevel_page_usces_orderlist' === $hook_suffix ) {
    wp_enqueue_style( 'admin_add', get_template_directory_uri().'/admin/add.css' );
    }
}
add_action( 'admin_enqueue_scripts', 'add_admin_style' );


/* 管理画面に外部JS */


function add_admin_script($hook_suffix){
   if( 'toplevel_page_usces_orderlist' === $hook_suffix || 'toplevel_page_usces_orderlist' === $hook_suffix ) {
    // jQuery依存かつ、body要素終了直前で読み込む
    wp_enqueue_script( 'my_admin_script', get_template_directory_uri().'/admin/add.js', '', '', true);
   }
}
add_action( 'admin_enqueue_scripts', 'add_admin_script' );



/*
JQリアルタイムバリデーション

購入ページ

会員登録ページに適用
---------------------------------*/

add_action('wp_enqueue_scripts', 'my_scripts');
function my_scripts()
{
    wp_enqueue_script('jquery');

    wp_enqueue_style(
        'validationEngine.jquery.css',
        get_template_directory_uri() . '/css/validationEngine.jquery.css',
        array(),
        '1.1.11',
        'all'
    );
    wp_enqueue_script(
        'jquery.validationEngine.js',
        get_template_directory_uri() . '/js/jquery.validationEngine.js',
        array('jquery'),
        '2.6.2',
        true
    );
    wp_enqueue_script(
        'jquery.validationEngine-ja.js',
        get_template_directory_uri() . '/js/jquery.validationEngine-ja.js',
        array('jquery'),
        '2.0',
        true
    );
}


//サムネイル画像有効
add_theme_support('post-thumbnails', array( 'post','clm' ));

//投稿サムネイルサイズ指定
add_image_size('thumb300', 300, 220, true);
add_image_size('thum', 600, 450, true);


/*
エディタ内にURL記入用ショートコード
--------------------------------------*/

add_shortcode('url', 'shortcode_url');
function shortcode_url()
{
    return home_url('/');
}





/*
MW form
-----------------------------------*/

/* function my_validation_rulessss($Validation, $data)
{
    if ($data['ご利用理由'] === 'その他') {
        $Validation->set_rule('その他の目的', 'noEmpty', array(
          'message' => 'その他のご理由を記載してください',
        ));
    }
    return $Validation;
}
  add_filter('mwform_validation_mw-wp-form-26', 'my_validation_rulessss', 11, 2);
 */




/*

検査結果フォーム
----------------------------------*/

function my_form_tag_filter($tag){
    if (!is_array($tag)){
      return $tag;
    }

    // 複数の値を渡したい時は、以下の部分をコピペ
    if(isset($_GET['your-name'])){
      $name = $tag['name'];
      if($name == 'your-name')
        $tag['values'] = (array) $_GET['your-name'];
    }
    // （ここまで）

    return $tag;
  }
  add_filter('wpcf7_form_tag', 'my_form_tag_filter');

  function my_form_tag_filter02($tag){
    if (!is_array($tag)){
      return $tag;
    }

    // 複数の値を渡したい時は、以下の部分をコピペ
    if(isset($_GET['your-email'])){
      $name = $tag['name'];
      if($name == 'your-email')
        $tag['values'] = (array) $_GET['your-email'];
    }
    // （ここまで）

    return $tag;
  }
  add_filter('wpcf7_form_tag', 'my_form_tag_filter02');


/*
MW FORM カスタマイズ
お問い合わせページに適用
---------------------------------*/


/* パラメーター処理 */

function my_validation_rule($Validation, $data)
{
    if ($data['お問い合わせの種類'] === 'ご解約') {
        $Validation->set_rule('会員番号', 'noEmpty', array(
          'message' => 'ご解約希望の方は、会員番号を入力してください。'
        ));
    }
    return $Validation;
}
  add_filter('mwform_validation_mw-wp-form-31', 'my_validation_rule', 11, 2);

function my_mwform_value($value, $name)
{
    // $_GET['youken']があったら、name属性がyoukenの項目の初期値に設定
    if ($name === 'お問い合わせの種類' && !empty($_GET['お問い合わせの種類']) && !is_array($_GET['お問い合わせの種類'])) {
        return $_GET['お問い合わせの種類'];
    }
    return $value;

}
add_filter('mwform_value_mw-wp-form-85', 'my_mwform_value', 10, 2);


function my_mwform_value02($value, $name)
{


    // $_GET['num']があったら、name属性がnumの項目の初期値に設定
    if ($name === '会員番号' && !empty($_GET['会員番号']) && !is_array($_GET['会員番号'])) {
        return $_GET['会員番号'];
    }
    return $value;
}
add_filter('mwform_value_mw-wp-form-31', 'my_mwform_value02', 10, 2);





/*

よくある質問タクソノミー 表示

------------------------------*/



function my_manage_posts_columns_faq_category($columns) {
  $columns['faq_kind'] = "種類";
  return $columns;
}
function my_add_column_faq_category($column_name, $post_id) {
  if( $column_name == 'faq_kind' ) {
    $tax = wp_get_object_terms($post_id, 'faq_kind');
    $stitle = $tax[0]->name;
  }

  if ( isset($stitle) && $stitle ) {
    echo esc_attr($stitle);
  }
}
function my_add_post_taxonomy_restrict_filter() {
  global $post_type;
  if ( 'faq' == $post_type ) {
?>
    <select name="faq_kind">
      <option value="">カテゴリー指定なし</option>
<?php
      $terms = get_terms('faq_kind');
      foreach ($terms as $term) { ?>
        <option value="<?php echo $term->slug; ?>" <?php if ( $_GET['faq_kind'] == $term->slug ) { print 'selected'; } ?>><?php echo $term->name; ?></option>
<?php
      }
?>
    </select>
<?php
  }
}
add_filter( 'manage_edit-faq_columns', 'my_manage_posts_columns_faq_category' );
add_action( 'manage_faq_posts_custom_column', 'my_add_column_faq_category', 10, 2 );
add_action( 'restrict_manage_posts', 'my_add_post_taxonomy_restrict_filter' );





/*
 Well CART 関連

------------------------------------------------*/






/* 数量変更ボックスをナンバーに */

function change_quant_input( $quant) {
    return str_replace( 'type="text"', 'type="number" min="1"', $quant );
}
add_filter( 'usces_filter_the_itemQuant', 'change_quant_input' );


/* 商品ページに関連商品 */


function related_items_list(){
    global $post;
    $categories = get_the_category($post->ID);
    if( $categories ){
        $category_ids = array();
        foreach( $categories as $category){
            $category_id = $category->term_id;
            $category_child = get_term_children($category_id, 'category');
            if($category_child != true){
                $category_ids[] = $category->term_id ;
            }
        }
        $args=array(
            'category__in' => $category_ids,
            'post__not_in' => array($post->ID),
            'posts_per_page'=> 3,
            'ignore_sticky_posts'=> 1,
            'orderby' => 'rand',
        );
        /*********関連アイテムに法人商品を表示させないようする暫定処理 *********/
        $args['category__in'] = [];
        $category = get_category_by_slug(GROUP_CATEGORY_SLUG);
        if (isset($category->cat_ID)) {
            $ignore_posts = get_posts(['category' => $category->cat_ID]);
            if (!is_null($ignore_posts)) {
                foreach($ignore_posts as $ignore_post) {
                    if (isset($ignore_post->ID)) {
                        $args['post__not_in'][] = $ignore_post->ID;
                    }
                }
            }
        }
        /******************************************************************/
        $my_query = new WP_Query($args);
        if( $my_query->have_posts() ) {
            echo '<h2 class="p-relation-ttl">関連アイテム</h2>';
            echo '<ul class="p-relation">';
            while ($my_query->have_posts()) {
                $my_query->the_post();
                echo get_template_part('thumbnail-box');
            }
             echo '</ul>';
            wp_reset_query();
        }
    }
}




/* フォームオプション内容カスタマイズ */


add_filter( 'usces_filter_the_itemOption', 'my_filter_the_itemOption', 10, 6 );
function my_filter_the_itemOption( $html, $opts, $name, $label, $post_id, $sku ) {
    //処理

global $post, $usces;
	$post_id = $post->ID;

	if($label == '#default#')
		$label = $name;

	$opts = usces_get_opts($post_id, 'name');
	if(!$opts)
		return false;


	$opt = $opts[$name];
	$opt['value'] = usces_change_line_break( $opt['value'] );
	$means = (int)$opt['means'];
	$essential = (int)$opt['essential'];

	$html = '';
	$sku = esc_attr(urlencode($usces->itemsku['code']));
	$optcode = esc_attr(urlencode($name));
	$name = esc_attr($name);
	$label = esc_attr($label);
	$session_value = isset( $_SESSION['usces_singleitem']['itemOption'][$post_id][$sku][$optcode] ) ? $_SESSION['usces_singleitem']['itemOption'][$post_id][$sku][$optcode] : NULL;
	$html .= "\n<label for='itemOption[{$post_id}][{$sku}][{$optcode}]' class='iopt_label'>{$label}</label>\n";
switch($means) {
	case 0://Single-select
	case 1://Multi-select
		$selects = explode("\n", $opt['value']);
		$multiple = ($means === 0) ? '' : ' multiple';
		$multiple_array = ($means == 0) ? '' : '[]';
		$html .= "\n<select name='itemOption[{$post_id}][{$sku}][{$optcode}]{$multiple_array}' id='itemOption[{$post_id}][{$sku}][{$optcode}]' class='iopt_select'{$multiple} onKeyDown=\"if (event.keyCode == 13) {return false;}\">\n";
		if($essential == 1){
			if(  '#NONE#' == $session_value || NULL == $session_value )
				$selected = ' selected="selected"';
			else
				$selected = '';
			$html .= "\t<option value='#NONE#'{$selected}>" . __('Choose','usces') . "</option>\n";
		}
		$i=0;
		foreach((array)$selects as $v) {
			$v = trim($v);
			if( ($i == 0 && $essential == 0 && NULL == $session_value) || esc_attr($v) == $session_value )
				$selected = ' selected="selected"';
			else
				$selected = '';
			$html .= "\t<option value='" . esc_attr($v) . "'{$selected}>" . esc_attr($v) . "</option>\n";
			$i++;
		}
		$html .= "</select>\n";
		break;
	case 2://Text
		$html .= "\n<input name='itemOption[{$post_id}][{$sku}][{$optcode}]' type='text' id='itemOption[{$post_id}][{$sku}][{$optcode}]' class='iopt_text' onKeyDown=\"if (event.keyCode == 13) {return false;}\" value=\"" . esc_attr($session_value) . "\" />\n";
        break;

        /* ===========

        ここからカスタマイズ

        ================*/
	case 3://Radio-button
		$selects = explode("\n", $opt['value']);

		$i=0;
		foreach((array)$selects as $v) {
			$v = trim($v);
			if( $v == $session_value )
				$checked = ' checked="checked"';
			else
				$checked = '';
			$html .= "<input name='itemOption[{$post_id}][{$sku}][{$optcode}]' id='' class='iopt_radio' type='radio' value='" . urlencode($v) . "'{$checked}>\t<label for='' class='iopt_radio_label'><span class='item__text'>" . esc_html($v) . "</span></label>\n";
			$i++;
		}
        break;
        /* ===============

        カスタマイズ終了

        =================*/
	case 4://Check-box
		$selects = explode("\n", $opt['value']);

		$i=0;
		foreach((array)$selects as $v) {
			$v = trim($v);
			if( $v == $session_value )
				$checked = ' checked="checked"';
			else
				$checked = '';
			$html .= "<input name='itemOption[{$post_id}][{$sku}][{$optcode}][]' id='' class='iopt_checkbox' type='checkbox' value='" . urlencode($v) . "'{$checked}>\t<label for='' class='iopt_checkbox_label'><span class='item__text'>" . esc_html($v) . "</span></label>\n";
			$i++;
		}
		break;
	case 5://Text-area
		$html .= "\n<textarea name='itemOption[{$post_id}][{$sku}][{$optcode}]' id='itemOption[{$post_id}][{$sku}][{$optcode}]' class='iopt_textarea'>" . esc_attr($session_value) . "</textarea>\n";
		break;
	}

if( $out == 'return' ){
		return $html;
	}else{
		echo $html;
	}
}



/*


管理画面　配送会社を佐川急便に固定


-------------------------------------------*/


add_filter( 'usces_filter_deli_comps',  'my_filter_deli_comps' );
function my_filter_deli_comps( $deli_comps ) {
    $deli_comps = array( '佐川急便','ヤマト運輸' );
    return $deli_comps;
}


/*

対応状況に『保留を追加』

---------------------------------------------*/

/* add_filter('usces_filter_management_status','my_filter_management_status', 10);
function my_filter_management_status($management_status){
    $management_status += array(
        'np' => '保留',
    );
    return $management_status;
} */
/**
 * 受注データの対応状況ステータスを追加する
 * /wp-admin/admin.php?page=usces_orderlist&order_action=edit&order_id=xxxx&wc_nonce=xxxx
 */
/*function ag_usces_filter_management_status($management_status)
{
    //追加するステータス
    $add_status = ['other' => '保留'];

    //既存ステータスと追加ステータスを結合
    $management_status += $add_status;

    return $management_status;
}
add_filter('usces_filter_management_status', 'ag_usces_filter_management_status', 10);

function ag_usces_filter_orderlist_process_status($process_status, $value, $management_status)
{
    global $usces;

    if( $usces->is_status('duringorder', $value) ){
        //取り寄せ中
        $process_status = esc_html($management_status['duringorder']);
    }elseif( $usces->is_status('cancel', $value) ){
        //キャンセル
        $process_status = esc_html($management_status['cancel']);
    }elseif( $usces->is_status('completion', $value) ){
        //発送済み
        $process_status = esc_html($management_status['completion']);
    }elseif( $usces->is_status('other', $value) ){
        //その他（※追加したステータス）
        $process_status = esc_html($management_status['other']);
    }else{
        //新規受付
        $process_status = esc_html(__('new order', 'usces'));
    }

    return $process_status;
}
add_filter('usces_filter_orderlist_process_status', 'ag_usces_filter_orderlist_process_status', 10, 3, 2); */


/* ステータス追加 */

 add_filter('usces_filter_management_status','my_filter_management_status', 10);
function my_filter_management_status($management_status){
    $management_status += array(
        'mail_ok' => '保留',

    );
    return $management_status;
}

function my_filter_orderlist_process_status($process_status, $value, $management_status){
    global $usces;
    if( $usces->is_status('duringorder', $value) ){
        $process_status = esc_html($management_status['duringorder']);
    }elseif( $usces->is_status('cancel', $value) ){
        $process_status = esc_html($management_status['cancel']);
        }elseif( $usces->is_status('mail_ok', $value) ){
                $process_status = esc_html($management_status['mail_ok']);
    }



    elseif( $usces->is_status('completion', $value) ){
        $process_status = esc_html($management_status['completion']);
    }elseif( $usces->is_status('preparation', $value) ){
        $process_status = esc_html($management_status['preparation']);
    }else{
        $process_status = esc_html(__('new order', 'usces'));
    }
    return $process_status;
}
add_filter('usces_filter_orderlist_process_status','my_filter_orderlist_process_status', 10, 3, 2);




/* function ups_order_status($management_status){
$management_status = array(
'estimate' => __('An estimate', 'usces'),
'adminorder' => __('Management of Note', 'usces'),
'duringorder' => '保留',
'cancel' => 'キャンセル',
'completion' => '発送完了',
'pending' => 'Pending',

);
return $management_status;
}
add_filter('usces_filter_management_status','ups_order_status');
 */
//カートの表をカスタマイズ

/*いらない項目を削除*/

/* カートの中 */

function correct_cart_rows($html)
{
    $html = preg_replace('/<td class="thumbnail">(.*)<\/td>/', '', $html);

    //$html = preg_replace('/<td class="quantity">(.*)<\/td>/', '', $html);

    $html = preg_replace('/<td class="stock">(.*)<\/td>/', '', $html);

    return $html;
}
add_filter('usces_filter_cart_rows', 'correct_cart_rows', 10, 1);


add_filter('my_cart_rows', 'usces_get_cart_rowss', 10, 1);



//最終確認ページのカートの表も同様にカスタマイズ

function usces_filter_apply_addressform($html)
{
    //$html = preg_replace('/<td class="thumbnail">(.*)<\/td>/', '', $html);

    //$html = preg_replace('/<td class="quantity">(.*)<\/td>/', '', $html);

    $html = preg_replace('/<td class="action">(.*)<\/td>/', '', $html);

    $html = preg_replace('/<td class="stock">(.*)<\/td>/', '', $html);

    $html = preg_replace('/<td class="unitprice">(.*)<\/td>/', '', $html);

    return $html;
}
add_filter('usces_filter_confirm_rows', 'usces_filter_apply_addressform', 10, 1);


//確認画面の配送先情報

//最終確認ページのカートも同様にカスタマイズ

/* function usces_filter_apply_addressform_confirm($html)
{
    $html = preg_replace('/<tr class="delivery-name-row">(.*)<\/tr>/', '', $html);

    return $html;
}
add_filter('usces_filter_addressform_confirm', 'usces_filter_apply_addressform_confirm', 10, 1); */




//バリデーション削除


//郵便番号・住所は不要なので削除

add_filter('usces_filter_customer_check', 'my_filter_customer_check', 10, 3);
    function my_filter_customer_check($mes)
    {
        do_action('my_filter_customer_check');

        $mes = '';
        if (!is_email($_POST['customer']['mailaddress1']) || WCUtils::is_blank($_POST['customer']['mailaddress1']) || WCUtils::is_blank($_POST['customer']['mailaddress2']) || trim($_POST['customer']['mailaddress1']) != trim($_POST['customer']['mailaddress2'])) {
            $mes .= __('e-mail address is not correct', 'usces') . "<br />";
        }
        if (WCUtils::is_blank($_POST["customer"]["name1"])) {
            $mes .= __('Name is not correct', 'usces') . "<br />";
        }

        if (WCUtils::is_blank($_POST["customer"]["tel"]) && usces_is_required_field('tel')) {
            $mes .= __('enter phone numbers', 'usces') . "<br />";
        }
        if (!WCUtils::is_blank($_POST['customer']["tel"]) && preg_match("/[^\d\-+]/", trim($_POST["customer"]["tel"])) && usces_is_required_field('tel')) {
            $mes .= __('Please input a phone number with a half size number.', 'usces') . "<br />";
        }

        return $mes;
    }


    /* 会員登録画面　住所、郵便番号のバリデーション削除 */

add_filter('usces_filter_member_check_fromcart', 'my_filter_customer_check02', 10, 3);
    function my_filter_customer_check02($mes)
    {
        do_action('my_filter_customer_check02');

        $mes = '';


        if (!WCUtils::is_blank($_POST['customer']['password1']) || !WCUtils::is_blank($_POST['customer']['password2'])) {
            if (!empty($member_pass_rule_max)) {
                if ($member_pass_rule_min > strlen(trim($_POST['customer']['password1'])) || strlen(trim($_POST['customer']['password1'])) > $member_pass_rule_max) {
                    $mes .= sprintf(__('Please enter %2$s characters a minimum of %1$s characters and a maximum password.', 'usces'), $member_pass_rule_min, $member_pass_rule_max) . "<br />";
                }
            } else {
                if ($member_pass_rule_min > strlen(trim($_POST['customer']['password1']))) {
                    $mes .= sprintf(__('Please enter at least %s characters password.', 'usces'), $member_pass_rule_min) . "<br />";
                }
            }
        }
        if (WCUtils::is_blank($_POST['customer']['password1']) || WCUtils::is_blank($_POST['customer']['password2']) || trim($_POST['customer']['password1']) != trim($_POST['customer']['password2'])) {
            $mes .= __('Password is not correct.', 'usces') . "<br />";
        }

        if (!is_email($_POST['customer']['mailaddress1']) || WCUtils::is_blank($_POST['customer']['mailaddress1']) || WCUtils::is_blank($_POST['customer']['mailaddress2']) || trim($_POST['customer']['mailaddress1']) != trim($_POST['customer']['mailaddress2'])) {
            $mes .= __('e-mail address is not correct', 'usces') . "<br />";
        }
        if (WCUtils::is_blank($_POST["customer"]["name1"])) {
            $mes .= __('Name is not correct', 'usces') . "<br />";
        }

        if (WCUtils::is_blank($_POST["customer"]["tel"]) && usces_is_required_field('tel')) {
            $mes .= __('enter phone numbers', 'usces') . "<br />";
        }
        if (!WCUtils::is_blank($_POST['customer']["tel"]) && preg_match("/[^\d\-+]/", trim($_POST["customer"]["tel"])) && usces_is_required_field('tel')) {
            $mes .= __('Please input a phone number with a half size number.', 'usces') . "<br />";
        }

        return $mes;
    }





    //お客さま情報入力画面不要な項目削除

//入力画面

//住所・郵便番号・FAXを削除

/* add_filter('usces_filter_apply_addressform', 'my_apply_addressform', 10, 3);
function my_apply_addressform($formtag, $type, $data)
{
    global $usces, $usces_settings;
    $options = get_option('usces');
    $form = $options['system']['addressform'];
    $nameform = $usces_settings['nameform'][$form];
    $values = $data[$type];
    $applyform = usces_get_apply_addressform($form);
    $formtag = usces_custom_field_input($data, $type, 'name_pre', 'return');
    $formtag .= '<tr class="inp1">
    <th width="127" scope="row">' . usces_get_essential_mark('name1', $data) . __('Full name', 'usces').'</th>';
    if ($nameform) {
        $formtag .= '<td class="name_td">'.__('Given name', 'usces').'<input name="' . $type . '[name2]" id="name2" type="text" value="' . esc_attr($values['name2']) . '" onKeyDown="if (event.keyCode == 13) {return false;}" style="ime-mode: active" /></td>';
        $formtag .= '<td class="name_td">'.__('Familly name', 'usces').'<input name="' . $type . '[name1]" id="name1" type="text" value="' . esc_attr($values['name1']) . '" onKeyDown="if (event.keyCode == 13) {return false;}" style="ime-mode: active" /></td>';
    } else {
        $formtag .= '<td class="name_td">'.__('Familly name', 'usces').'<input name="' . $type . '[name1]" id="name1" type="text" value="' . esc_attr($values['name1']) . '" onKeyDown="if (event.keyCode == 13) {return false;}" style="ime-mode: active" /></td>';
        $formtag .= '<td class="name_td">'.__('Given name', 'usces').'<input name="' . $type . '[name2]" id="name2" type="text" value="' . esc_attr($values['name2']) . '" onKeyDown="if (event.keyCode == 13) {return false;}" style="ime-mode: active" /></td>';
    }
    $formtag .= '</tr>';
    $furigana = '<tr class="inp1">
    <th scope="row">' . usces_get_essential_mark('name3', $data).__('furigana', 'usces').'</th>';
    if ($nameform) {
        $furigana .= '<td>'.__('Given name', 'usces').'<input name="' . $type . '[name4]" id="name4" type="text" value="' . esc_attr($values['name4']) . '" onKeyDown="if (event.keyCode == 13) {return false;}" style="ime-mode: active" /></td>';
        $furigana .= '<td>'.__('Familly name', 'usces').'<input name="' . $type . '[name3]" id="name3" type="text" value="' . esc_attr($values['name3']) . '" onKeyDown="if (event.keyCode == 13) {return false;}" style="ime-mode: active" /></td>';
    } else {
        $furigana .= '<td>'.__('Familly name', 'usces').'<input name="' . $type . '[name3]" id="name3" type="text" value="' . esc_attr($values['name3']) . '" onKeyDown="if (event.keyCode == 13) {return false;}" style="ime-mode: active" /></td>';
        $furigana .= '<td>'.__('Given name', 'usces').'<input name="' . $type . '[name4]" id="name4" type="text" value="' . esc_attr($values['name4']) . '" onKeyDown="if (event.keyCode == 13) {return false;}" style="ime-mode: active" /></td>';
    }
    $furigana .= '</tr>';
    $formtag .= apply_filters('usces_filter_furigana_form', $furigana, $type, $values);
    $formtag .= usces_custom_field_input($data, $type, 'name_after', 'return');

    $formtag .= '

    <th scope="row">' . usces_get_essential_mark('tel', $data).__('Phone number', 'usces').'</th>
    <td colspan="2"><input name="' . $type . '[tel]" id="tel" type="text" value="' . esc_attr($values['tel']) . '" onKeyDown="if (event.keyCode == 13) {return false;}" style="ime-mode: inactive" />' . apply_filters('usces_filter_after_tel', '000-0000-000', $applyform) . '</td>
    </tr>';
    return $formtag;
} */


//最終確認画面

//住所・郵便番号・FAXを削除

/* add_filter('usces_filter_apply_addressform_confirm', 'my_apply_addressform_confirm', 10, 3);
function my_apply_addressform_confirm($formtag, $type, $data)
{
    global $usces, $usces_settings;
    $options = get_option('usces');
    $form = $options['system']['addressform'];
    $nameform = $usces_settings['nameform'][$form];
    $applyform = usces_get_apply_addressform($form);
    $formtag = '';
    switch ($type) {
    case 'confirm':
    case 'member':
        $values =  $data;
        break;
    case 'customer':
    case 'delivery':
        $values = $data[$type];
        break;
    }
    $data['type'] = $type;
    $values['country'] = !empty($values['country']) ? $values['country'] : usces_get_local_addressform();
    $values = $usces->stripslashes_deep_post($values);
    $target_market_count = (isset($options['system']['target_market']) && is_array($options['system']['target_market'])) ? count($options['system']['target_market']) : 1;

    $formtag = usces_custom_field_input($data, $type, 'name_pre', 'return');
    $formtag .= '<tr class="name-row member-name-row"><th>'.apply_filters('usces_filters_addressform_name_label', __('Full name', 'usces'), $type, $values, $applyform).'</th><td>' . esc_html(sprintf(_x('%s', 'honorific', 'usces'), (esc_html($values['customer']['name1']) . ' ' . esc_html($values['customer']['name2'])))) . '</td></tr>';
    $furigana = ('' == (trim($values['customer']['name3']) . trim($values['customer']['name4']))) ? '' : sprintf(_x('%s', 'honorific', 'usces'), (esc_html($values['customer']['name3']) . ' ' . esc_html($values['customer']['name4'])));
    $furigana_customer = '<tr class="furikana-row member-furikana-row"><th>'.__('furigana', 'usces').'</th><td>' . $furigana . '</td></tr>';
    $formtag .= apply_filters('usces_filter_furigana_confirm_customer', $furigana_customer, $type, $values);
    $formtag .= usces_custom_field_info($data, 'customer', 'name_after', 'return');

    if (1 < $target_market_count) {
        $customer_country = (!empty($usces_settings['country'][$values['customer']['country']])) ? $usces_settings['country'][$values['customer']['country']] : '';
        $formtag .= '<tr class="country-row member-country-row"><th>'.__('Country', 'usces').'</th><td>' . esc_html($customer_country) . '</td></tr>';
    }
    $customer_pref = ($values['customer']['pref'] == __('-- Select --', 'usces') || $values['customer']['pref'] == '-- Select --') ? '' : $values['customer']['pref'];
    $formtag .= '


			<tr class="tel-row member-tel-row"><th>'.__('Phone number', 'usces').'</th><td>' . esc_html($values['customer']['tel']) . '</td></tr>';
    $formtag .= usces_custom_field_info($data, 'customer', 'fax_after', 'return');

    $shipping_address_info = '';
    if (isset($values['delivery'])) {
        $shipping_address_info = '<tr class="ttl"><td colspan="2"><h3>'.__('Shipping address information', 'usces').'</h3></td></tr>';
        $shipping_address_info .= usces_custom_field_info($data, 'delivery', 'name_pre', 'return');
        $shipping_address_info .= '<tr class="name-row delivery-name-row"><th>'.apply_filters('usces_filters_addressform_name_label', __('Full name', 'usces'), $type, $values, $applyform).'</th><td>' . sprintf(_x('%s', 'honorific', 'usces'), (esc_html($values['delivery']['name1']) . ' ' . esc_html($values['delivery']['name2']))) . '</td></tr>';
        $deli_furigana = ('' == (trim($values['delivery']['name3']) . trim($values['delivery']['name4']))) ? '' : sprintf(_x('%s', 'honorific', 'usces'), (esc_html($values['delivery']['name3']) . ' ' . esc_html($values['delivery']['name4'])));
        $furigana_delivery = '<tr class="furikana-row delivery-furikana-row"><th>'.__('furigana', 'usces').'</th><td>' . $deli_furigana . '</td></tr>';
        $shipping_address_info .= apply_filters('usces_filter_furigana_confirm_delivery', $furigana_delivery, $type, $values);
        $shipping_address_info .= usces_custom_field_info($values, 'delivery', 'name_after', 'return');
        $shipping_address_info .= '<tr class="zipcode-row delivery-zipcode-row"><th>'.__('Zip/Postal Code', 'usces').'</th><td>' . esc_html($values['delivery']['zipcode']) . '</td></tr>';
        if (1 < $target_market_count) {
            $shipping_country = (!empty($usces_settings['country'][$values['delivery']['country']])) ? $usces_settings['country'][$values['delivery']['country']] : '';
            $shipping_address_info .= '<tr class="country-row delivery-country-row"><th>'.__('Country', 'usces').'</th><td>' . esc_html($shipping_country) . '</td></tr>';
        }
        $delivery_pref = ($values['delivery']['pref'] == __('-- Select --', 'usces') || $values['delivery']['pref'] == '-- Select --') ? '' : $values['delivery']['pref'];
        $shipping_address_info .= '
				<tr class="states-row delivery-states-row"><th>'.__('Province', 'usces').'</th><td>' . esc_html($delivery_pref) . '</td></tr>
				<tr class="address1-row delivery-address1-row"><th>'.__('city', 'usces').'</th><td>' . esc_html($values['delivery']['address1']) . '</td></tr>
				<tr class="address2-row delivery-address2-row"><th>'.__('numbers', 'usces').'</th><td>' . esc_html($values['delivery']['address2']) . '</td></tr>
				<tr class="address3-row delivery-address3-row"><th>'.__('building name', 'usces').'</th><td>' . esc_html($values['delivery']['address3']) . '</td></tr>
				<tr class="tel-row delivery-tel-row"><th>'.__('Phone number', 'usces').'</th><td>' . esc_html($values['delivery']['tel']) . '</td></tr>
				<tr class="fax-row delivery-fax-row"><th>'.__('FAX number', 'usces').'</th><td>' . esc_html($values['delivery']['fax']) . '</td></tr>';
        $shipping_address_info .= usces_custom_field_info($data, 'delivery', 'fax_after', 'return');
    }
    return $formtag;
} */





//会員登録機能削除
//会員登録して次へのボタン削除

/* add_filter("usces_filter_get_customer_button", "my_get_customer_button", 10, 1);
function my_get_customer_button($out = '')
{
    global $usces, $member_regmode;
    $res = '';

    $res = '<input name="backCart" type="submit" class="back_cart_button" value="'.__('Back', 'usces').'" />&nbsp;&nbsp;';

    $button = '<input name="deliveryinfo" type="submit" class="to_deliveryinfo_button" value="'.__(' Next ', 'usces').'" />&nbsp;&nbsp;';
    $res .= apply_filters('usces_filter_customer_button', $button);

    if (usces_is_membersystem_state() && $member_regmode != 'editmemberfromcart' && usces_is_login() == false) {
        $res .= '';
    } elseif (usces_is_membersystem_state() && $member_regmode == 'editmemberfromcart') {
        $res .= '';
    }

    if ($out == 'return') {
        return $res;
    } else {
        echo $res;
    }
} */


//返信メールカスタマイズ


//お客様情報消す
// add_filter("usces_filter_apply_mail_addressform", "my_filter_apply_mail_addressform", 10, 4);
// function my_filter_apply_mail_addressform($formtag, $type, $data, $order_id)
// {
//     if ($type === "order_mail_customer") {
//         $formtag = "";
//     }
//     return $formtag;
// }





//送料消す
/* add_filter("usces_filter_send_order_mail_meisai", "my_filter_send_order_mail_meisai", 10, 4);
function my_filter_send_order_mail_meisai($meisai, $data, $cart, $entry)
{
    $ptn = "/\r\n". __('Shipping', 'usces') .".+?\r\n/u";
    if (preg_match($ptn, $meisai)) {
        $meisai = preg_replace($ptn, "", $meisai);
    }
    return $meisai;
} */

//配送先情報を消す
/* add_filter("usces_filter_send_order_mail_shipping", "my_filter_send_order_mail_shipping", 10, 3);
function my_filter_send_order_mail_shipping($msg_shipping, $data, $entry)
{
    $msg_shipping = "";
    return $msg_shipping;
} */

/* 自動返信のサンキューメールの【その他】を【メッセージ】に*/
add_filter("usces_filter_send_order_mail_others", "my_filter_send_order_mail_others", 10, 2);
function my_filter_send_order_mail_others($msg_others)
{
    $replace = array(
    'その他' => '備考　'
    );
    $msg_others = str_replace(array_keys($replace), $replace, $msg_others);
    return $msg_others;
}
/* 自動返信のサンキューメールの【その他】を【メッセージ】に（終了）*/



add_filter( 'usces_filter_fax_form', 'my_filter_furigana', 10, 3);

add_filter( 'usces_filter_fax_confirm_customer', 'my_filter_furigana', 10, 3);

add_filter( 'usces_filter_fax_confirm_delivery', 'my_filter_furigana', 10, 3);

function my_filter_furigana( $furigana, $type, $values ){

return "";

}


//ログインページ関連


add_filter("usces_filter_member_history", "my_filter_member_history", 10, 2);

function my_filter_member_history($out = '')
{
    global $usces;

    $usces_members = $usces->get_member();
    $history = $usces->get_member_history($usces_members['ID']);
    $usces_member_history = apply_filters('usces_filter_get_member_history', $history, $usces_members['ID']);

    $usces_member_history_count = ($usces_member_history && is_array($usces_member_history)) ? count($usces_member_history) : 0;
$html = "<ul class='p-note-lists'>
<li class='p-note-lists__item'><span>STEP 1.</span>見積書は下記のボタンよりダウンロードが可能です。</li>
<li class='p-note-lists__item'><span>STEP 2.</span>お見積もりに問題がない場合は請求書をダウンロードしていただき、銀行振込による支払いを行ってください。</li>
<li class='p-note-lists__item'><span>STEP 3.</span>弊社でご入金が確認できましたら引換コードダウンロードボタンが表示されます。</li>
<li class='p-note-lists__item'><span>STEP 4.</span>引換コードは1行あたりに1商品分のコードが記載されていますので、各人に必要数をご配布ください。</li>
<li class='p-note-lists__item'>※引換コードは１購入ごとに1商品にしか適用されませんのでご注意ください。</li>
</ul>";
    $html .= '<div class="history-area">';
    if (0 == $usces_member_history_count) {
        $html .= '<table id="history_head"><tr>
		<td>' . __('There is no purchase history for this moment.', 'usces') . '</td>
		</tr></table>';
    } else {

        foreach ($usces_member_history as $umhs) {
            $cart = $umhs['cart'];
            $history_member_head = '<table id="history_head"><thead>
				<tr class="order_head_label">
				<th class="historyrow order_number">' . __('Order number', 'usces') . '</th>
				<th class="historyrow purchase_date">' . __('Purchase date', 'usces') . '</th>
				<th class="historyrow purchase_price">' . __('Purchase price', 'usces') . '</th>';
            if (usces_is_tax_display() && 'products' == usces_get_tax_target()) {
                $history_member_head .= '<th class="historyrow tax">' . usces_tax_label(array(), 'return') . '</th>';
            }
            if (usces_is_membersystem_point() && 0 == usces_point_coverage()) {
                $history_member_head .= '<th class="historyrow used_point">' . __('Used points', 'usces') . '</th>';
            }
            $history_member_head .= '';
            if (usces_is_tax_display() && 'all' == usces_get_tax_target()) {
                $history_member_head .= '<th class="historyrow tax">' . usces_tax_label(array(), 'return') . '</th>';
            }
            if (usces_is_membersystem_point() && 1 == usces_point_coverage()) {
                $history_member_head .= '<th class="historyrow used_point">' . __('Used points', 'usces') . '</th>';
            }
            if (usces_is_membersystem_point()) {
                $history_member_head .= '<th class="historyrow get_point">' . __('Acquired points', 'usces') . '</th>';
            }
            $total_price = $usces->get_total_price($cart)-$umhs['usedpoint']+$umhs['discount']+$umhs['shipping_charge']+$umhs['cod_fee']+$umhs['tax'];
            if ($total_price < 0) {
                $total_price = 0;
            }
            $history_member_head .= '</tr></thead>
				<tbody>
				<tr class="order_head_value">
				<td class="order_number">' . usces_get_deco_order_id($umhs['ID']) . '</td>
				<td class="date purchase_date">' . $umhs['date'] . '</td>
				<td class="purchase_price">' . usces_crform($total_price, true, false, 'return') . '</td>';
            if (usces_is_tax_display() && 'products' == usces_get_tax_target()) {
                $history_member_head .= '<td class=" tax">' . usces_tax($umhs, 'return') . '</td>';
            }
            if (usces_is_membersystem_point() && 0 == usces_point_coverage()) {
                $history_member_head .= '<td class=" used_point">' . number_format($umhs['usedpoint']) . '</td>';
            }
            $history_member_head .= '';
            if (usces_is_tax_display() && 'all' == usces_get_tax_target()) {
                $history_member_head .= '<td class=" tax">' . usces_tax($umhs, 'return') . '</td>';
            }
            if (usces_is_membersystem_point() && 1 == usces_point_coverage()) {
                $history_member_head .= '<td class=" used_point">' . number_format($umhs['usedpoint']) . '</td>';
            }
            if (usces_is_membersystem_point()) {
                $history_member_head .= '<td class="  get_point">' . number_format($umhs['getpoint']) . '</td>';
            }
            $history_member_head .= '</tr>';
            $html .= apply_filters('usces_filter_history_member_head', $history_member_head, $umhs);
            $html .= apply_filters('usces_filter_member_history_header', null, $umhs);
            $html .= '</tbody></table>
                    <table id="retail_table_' . $umhs['ID'] . '" class="retail">';

            /* サムネイル画像 */
            $history_cart_head = '<thead><tr>
					<th scope="row" class="cartrownum">No.</th>

					<th class="productname">' . __('Items', 'usces') . '</th>


					<th class="subtotal">' . __('Amount', 'usces') . '</th>
					</tr></thead><tbody>';
            $html .= apply_filters('usces_filter_history_cart_head', $history_cart_head, $umhs);
            $cart_count = ($cart && is_array($cart)) ? count($cart) : 0;
            for ($i=0; $i<$cart_count; $i++) {
                $cart_row = $cart[$i];
                $ordercart_id = $cart_row['cart_id'];
                $post_id = $cart_row['post_id'];
                $sku = $cart_row['sku'];
                $sku_code = urldecode($cart_row['sku']);
                $quantity = $cart_row['quantity'];
                $options = (!empty($cart_row['options'])) ? $cart_row['options'] : array();
                $itemCode = $cart_row['item_code'];
                $itemName = $cart_row['item_name'];
                $cartItemName = $usces->getCartItemName_byOrder($cart_row);
                $skuPrice = $cart_row['price'];
                $pictid = (int)$usces->get_mainpictid($itemCode);
                $optstr =  '';
                if (is_array($options) && count($options) > 0) {
                    foreach ($options as $key => $value) {
                        if (!empty($key)) {
                            $key = urldecode($key);
                            $value = maybe_unserialize($value);
                            if (is_array($value)) {
                                $c = '';
                                $optstr .= esc_html($key) . ' : ';
                                foreach ($value as $v) {
                                    $optstr .= $c.nl2br(esc_html(rawurldecode($v)));
                                    $c = ', ';
                                }
                                $optstr .= "<br />\n";
                            } else {
                                $optstr .= esc_html($key) . ' : ' . nl2br(esc_html(rawurldecode($value))) . "<br />\n";
                            }
                        }
                    }
                    $optstr = apply_filters('usces_filter_option_history', $optstr, $options);
                }
                $optstr = apply_filters('usces_filter_option_info_history', $optstr, $umhs, $cart_row, $i);
                $args = compact('cart', 'i', 'cart_row', 'post_id', 'sku');

                $cart_item_name = apply_filters('usces_filter_cart_item_name', esc_html($cartItemName), $args) . '<br />' . $optstr  . apply_filters('usces_filter_history_item_name', null, $umhs, $cart_row, $i);
                $cart_item_name = apply_filters('usces_filter_history_cart_item_name', $cart_item_name, $cartItemName, $optstr, $cart_row, $i, $umhs);


                //サムネイル画像削除
                $history_cart_row = '<tr>
                    <td class="cartrownum">' . ($i + 1) . '</td>

					<td class="aleft productname">' . $cart_item_name . '</td>


					<td class="ssubtotal">' . usces_crform($skuPrice * $cart_row['quantity'], true, false, 'return') . '</td>
                    </tr>';

                /* ---------------- */
                $materials = compact('cart_thumbnail', 'post_id', 'pictid', 'cartItemName', 'optstr');
                $html .= apply_filters('usces_filter_history_cart_row', $history_cart_row, $umhs, $cart_row, $i, $materials);
            }
            $html .= '</tbody></table>';
            $html .= apply_filters('usces_filter_member_history_row', '', $umhs, $cart);
        }
    }
    $html .= '</div>';

    if ($out == 'return') {
        return $html;
    } else {
        echo $html;
    }
}


//会員登録後のメールに会員番号・お名前・メアド・マイページURL追記

add_filter('usces_filter_send_regmembermail_message', 'my_send_regmembermail_message', 10, 2);

function my_send_regmembermail_message()
{
    global $usces;

    $args = func_get_args();

    $mail_data = $usces->options['mail_data'];

    $user = $args[1];

    $message = $mail_data['header']['membercomp'];

    $message .= '会員番号：' . trim($user['ID']) . "\r\n";

    $message .= 'お名前：' . trim($user['name1']) . trim($user['name2']) . "\r\n";

    $message .= 'メールアドレス：' . trim($user['mailaddress1']) . "\r\n";

    $message .= '会員情報ページURL：'.home_url("/").'usces-member'. "\r\n";

    $message .= $mail_data['footer']['membercomp'];

    return $message;
}


//特定地域への配送料金を1000円加算する
/* add_filter('usces_filter_set_cart_fees_shipping_charge', 'myzip_filter_set_cart_fees_shipping_charge', 10, 3);
function myzip_filter_set_cart_fees_shipping_charge($shipping_charge, $cart, $entry){
  $myzips = array('906-0001','9060001','222-2222'); //特定地域の郵便番号を設定
  if(in_array($entry['delivery']['zipcode'], $myzips)){
    $shipping_charge += 1000; //1000円加算する
  }
  return $shipping_charge;
}
 */


//送料50000円以上なら送料無料


// define('SHIPPING_FREE_PRICE', 50000);//ここに000000円以上の金額を明記

// //カートのないの合計金額が30000円以上なら、送料無料
// function ag_free_set_cart_fees_shipping_charge($shipping_charge, $carts, $entries)
// {
//     $shipping_free_price = SHIPPING_FREE_PRICE; //送料無料条件の金額
//     $total_items_price = $entries['order']['total_items_price'];
//     if( $total_items_price >= $shipping_free_price ){
//         $shipping_charge = 0;
//     }
//     return $shipping_charge;
// }
// add_filter( 'usces_filter_set_cart_fees_shipping_charge', 'ag_free_set_cart_fees_shipping_charge', 10, 3);

/*
add_filter('usces_filter_set_cart_fees_shipping_charge', 'mysku_set_cart_fees_shipping_charge', 10, 3);
function mysku_set_cart_fees_shipping_charge($shipping_charge, $carts, $entries){
    $mysku = array('item02', 'item03'); //送料無料のSKUを記入
    foreach($carts as $cart){
        $sku = $cart['sku'];
        if(in_array($sku, $mysku)){
            $shipping_charge = 0;
        }
    }
    return $shipping_charge;
}
 */



 /*

 領収書カスタマイズ

 -----------------------------------*/

  function my_filter_pdf_sign() {

return get_template_directory() . '/img/common/hanko.png';

}

add_filter( 'usces_filter_pdf_estimate_sign', 'my_filter_pdf_sign' );

add_filter( 'usces_filter_pdf_invoice_sign', 'my_filter_pdf_sign' );

add_filter( 'usces_filter_pdf_receipt_sign', 'my_filter_pdf_sign' );

add_filter( 'usces_filter_pdf_bill_sign', 'my_filter_pdf_sign' );


function my_filter_pdf_sign_data() {

return array(148, 45, 15, 15);

}

add_filter( 'usces_filter_pdf_sign_data', 'my_filter_pdf_sign_data' );


//領収書に備考欄を出力させない

function my_filter_pdf_note() {

return null;

}

add_filter( 'usces_filter_pdf_note', 'my_filter_pdf_note' );


//レスポンシブなページネーションを作成する
function responsive_pagination($pages = '', $range = 4)
{
    $showitems = ($range * 2)+1;

    global $paged;
    if (empty($paged)) {
        $paged = 1;
    }

    //ページ情報の取得
    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }

    if (1 != $pages) {
        echo '<ul class="pagination" role="menubar" aria-label="Pagination">';
        //先頭へ
        echo '<li class="first"><a href="'.get_pagenum_link(1).'"><span>First</span></a></li>';
        //1つ戻る
        echo '<li class="previous"><a href="'.get_pagenum_link($paged - 1).'"><span>Previous</span></a></li>';
        //番号つきページ送りボタン
        for ($i=1; $i <= $pages; $i++) {
            if (1 != $pages &&(!($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems)) {
                echo ($paged == $i)? '<li class="current"><a>'.$i.'</a></li>':'<li><a href="'.get_pagenum_link($i).'" class="inactive" >'.$i.'</a></li>';
            }
        }
        //1つ進む
        echo '<li class="next"><a href="'.get_pagenum_link($paged + 1).'"><span>Next</span></a></li>';
        //最後尾へ
        echo '<li class="last"><a href="'.get_pagenum_link($pages).'"><span>Last</span></a></li>';
        echo '</ul>';
    }
}




// パンくずリスト
function breadcrumb_func()
{
    global $post;
    $str ='';
    if (!is_home()&&!is_admin()) {
        $str.= '<ul class="path" itemscope itemtype="http://schema.org/BreadcrumbList"><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
        $str.= '<a href="'.home_url().'" itemprop="item"><span itemprop="name">'.'HOME'.'</span></a><meta itemprop="position" content="1" /></li>';
        $str.= '<li>&gt;</li>';
        if (is_post_type_archive()) {
            $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">'.esc_html(get_post_type_object(get_post_type())->label).'</span><meta itemprop="position" content="2" /></li>';
        } elseif (is_tax()) {
            $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_post_type_archive_link(get_post_type()).'" itemprop="item"><span itemprop="name">'.esc_html(get_post_type_object(get_post_type())->label).'</span></a><meta itemprop="position" content="2" /></li>';
            $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">><a href="#" itemprop="item"><span itemprop="name">'.single_term_title('', false).'</span></a><meta itemprop="position" content="3" /></li>';
        } elseif (is_tag()) {
            $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">><a href="#" itemprop="item"><span itemprop="name">'.single_tag_title('', false).'</span></a><meta itemprop="position" content="2" /></li>';
        } elseif (is_category()) {
            $cat = get_queried_object();
            if ($cat -> parent != 0) {
                $ancestors = array_reverse(get_ancestors($cat -> cat_ID, 'category'));
                foreach ($ancestors as $ancestor) {
                    $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_category_link($ancestor).'" itemprop="item"><span itemprop="name">'.get_cat_name($ancestor).'</span></a><meta itemprop="position" content="2" /></li>';
                }
            }
            $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="#" itemprop="item"><span itemprop="name">'.$cat-> cat_name.'</span></a><meta itemprop="position" content="3" /></li>';
        } elseif (is_page()) {
            if ($post -> post_parent != 0) {
                $ancestors = array_reverse(get_post_ancestors($post->ID));
                foreach ($ancestors as $ancestor) {
                    $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'. get_permalink($ancestor).'" itemprop="item"><span itemprop="name">'.get_the_title($ancestor).'</span></a><meta itemprop="position" content="2" /></li>';
                    $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">><a href="#" itemprop="item"><span itemprop="name">'.wp_title('', false).'</span></a><meta itemprop="position" content="3" /></li>';
                }
            } else {
                $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="#" itemprop="item"><span itemprop="name">'.wp_title('', false).'</span></a><meta itemprop="position" content="2" /></li>';
            }
        } elseif (is_author()) {
            if ($post -> post_parent != 0) {
                $ancestors = array_reverse(get_post_ancestors($post->ID));
                foreach ($ancestors as $ancestor) {
                    $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'. get_permalink($ancestor).'" itemprop="item"><span itemprop="name">'.get_the_title($ancestor).'</span></a><meta itemprop="position" content="2" /></li>';
                    $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="#" itemprop="item"><span itemprop="name">'.wp_title('', false).'</span></a><meta itemprop="position" content="3" /></li>';
                }
            } else {
                $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="#" itemprop="item"><span itemprop="name">'.wp_title('', false).'</span></a><meta itemprop="position" content="2" /></li>';
            }
        } elseif (is_single()) {
            $categories = get_the_category($post->ID);
            $cat = $categories[0];
            if ($cat -> parent != 0) {
                $ancestors = array_reverse(get_ancestors($cat -> cat_ID, 'category'));
                foreach ($ancestors as $ancestor) {
                    $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_category_link($ancestor).'" itemprop="item"><span itemprop="name">'.get_cat_name($ancestor).'</span></a><meta itemprop="position" content="2" /></li>';
                    $str.= '<li>&gt;</li>';
                }
                $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_category_link($cat -> term_id).'" itemprop="item"><span itemprop="name">'.$categories[0]->cat_name.'</span></a><meta itemprop="position" content="3" /></li>';
                $str.= '<li>&gt;</li>';
                $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="#" itemprop="item"><span itemprop="name">'.wp_title('', false).'</span></a><meta itemprop="position" content="4" /></li>';
            } else {
                $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_category_link($cat -> term_id).'" itemprop="item"><span itemprop="name">'.$cat-> cat_name.'</span></a><meta itemprop="position" content="2" /></li>';
                $str.= '<li>&gt;</li>';
                $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="#" itemprop="item"><span itemprop="name">'.wp_title('', false).'</span></a><meta itemprop="position" content="3" /></li>';
            }
        }



        $str.= '</ul>'."\n";
    }
    return $str;
}
add_shortcode('breadcrumb', 'breadcrumb_func');


/*

クリニックスタッフ用アカウント
------------------------------------------- */

if (current_user_can('editor')) { // 編集者を対象
    function remove_menus()
    {
        global $menu;
        remove_menu_page('edit.php'); // 投稿を非表示
        remove_menu_page('index.php');                  // ダッシュボード
    remove_menu_page('upload.php');                 // メディア
    remove_menu_page('edit.php?post_type=page');    // 固定ページ
    remove_menu_page('edit-comments.php');          // コメント
    remove_menu_page('themes.php');                 // 外観
    remove_menu_page('plugins.php');                // プラグイン
    remove_menu_page('users.php');                  // ユーザー
    remove_menu_page('tools.php');                  // ツール
    remove_menu_page('options-general.php');        // 設定
    remove_menu_page('profile.php');  // プロフィール
     remove_menu_page('edit.php?post_type=mw-wp-form');  // お問い合わせ（mw-wp-form）
     remove_menu_page('usc-e-shop/usc-e-shop.php');  //welcart
     remove_menu_page( 'monsterinsights_reports' ); // アナリティクスレポート
     remove_menu_page('usces_orderlist'); // Welcart Management
    remove_menu_page('wpcf7');
    remove_menu_page('edit.php?post_type=faq');  // よくある質問（mw-wp-form）
    remove_menu_page('edit.php?post_type=voyage');  // 国ごとの陰性証明書
     remove_menu_page('edit.php?post_type=clm');  // コラム
    }
    add_action('admin_menu', 'remove_menus');


   function add_page_to_admin_menu001_01()
    {
        add_menu_page('お問い合わせ管理', 'お問い合わせ管理', 'edit_posts', 'edit.php?post_type=mwf_85', '', 'dashicons-email
', 1);
    }
    add_action('admin_menu', 'add_page_to_admin_menu001_01');

    function add_page_to_admin_menu001_02()
    {
        add_menu_page('団体検査ご相談フォーム管理', '団体検査ご相談フォーム管理', 'edit_posts', 'edit.php?post_type=mwf_26', '', 'dashicons-email
', 1);
    }
    add_action('admin_menu', 'add_page_to_admin_menu001_02');

    function add_page_to_admin_menu001_03()
    {
        add_menu_page('教育機関・医療機関用フォーム管理', '教育機関・医療機関用フォーム管理', 'edit_posts', 'edit.php?post_type=mwf_190', '', 'dashicons-email
', 1);
    }
    add_action('admin_menu', 'add_page_to_admin_menu001_03');


     function add_page_to_admin_menu_coupon()
    {
        add_menu_page('引換コード管理', '引換コード管理', 'edit_posts', 'admin.php?page=coupon_list', '', 'dashicons-editor-code
', 2);
    }
    add_action('admin_menu', 'add_page_to_admin_menu_coupon');


     function add_page_to_admin_menu001_04()
    {
        add_menu_page('リクルートフォーム管理', 'リクルートフォーム管理', 'edit_posts', 'edit.php?post_type=mwf_5606', '', 'dashicons-email
', 1);
    }
    add_action('admin_menu', 'add_page_to_admin_menu001_04');



    /*  function add_page_to_admin_menu03()
     {
         add_menu_page('受注リスト', '受注リスト', 'edit_posts', 'admin.php?page=usces_orderlist', '', 'dashicons-admin-users
', 2);
     }
     add_action('admin_menu', 'add_page_to_admin_menu03');*/

    function add_page_to_admin_menu002()
    {
        add_menu_page('受注リスト', '受注リスト', 'edit_posts', 'admin.php?page=usces_orderlist', '', 'dashicons-admin-users
', 3);
    }
    add_action('admin_menu', 'add_page_to_admin_menu002');


/*     function add_page_to_admin_menu003_01()
    {
        add_menu_page('支払いフォーム管理', '支払いフォーム管理', 'edit_posts', 'admin.php?page=cfdb7-list.php&fid=570', '', 'dashicons-editor-table
', 3);
    }
    add_action('admin_menu', 'add_page_to_admin_menu003_01'); */



   /*  function add_page_to_admin_menu003()
    {
        add_menu_page('継続会員リスト', '継続会員リスト', 'edit_posts', 'admin.php?page=usces_continue', '', 'dashicons-admin-users
', 4);
    }
    add_action('admin_menu', 'add_page_to_admin_menu003');
 */


}



    /*

    受注リストのみのアカウント
    --------------------------------------*/

        global $current_user;
        get_currentuserinfo();
        if ($current_user->ID == "3" || $current_user->ID == "5" ) {

            function remove_menus000()
            {
                global $menu;
                remove_menu_page('edit.php'); // 投稿を非表示
                remove_menu_page('index.php');                  // ダッシュボード
            remove_menu_page('upload.php');                 // メディア
            remove_menu_page('edit.php?post_type=page');    // 固定ページ
            remove_menu_page('edit-comments.php');          // コメント
            remove_menu_page('themes.php');                 // 外観
            remove_menu_page('plugins.php');                // プラグイン
            remove_menu_page('users.php');                  // ユーザー
            remove_menu_page('tools.php');                  // ツール
            remove_menu_page('options-general.php');        // 設定
            remove_menu_page('profile.php');  // プロフィール
            remove_menu_page('edit.php?post_type=mw-wp-form');  // お問い合わせ（mw-wp-form）
            remove_menu_page('usc-e-shop/usc-e-shop.php');  //welcart
            remove_menu_page('usces_orderlist'); // Welcart Management
            remove_menu_page('edit.php?post_type=faq');  // よくある質問（mw-wp-form）
            remove_menu_page('edit.php?post_type=mwf_85');  // よくある質問（mw-wp-form）
            remove_menu_page('edit.php?post_type=mwf_190');  // よくある質問（mw-wp-form）
            remove_menu_page('edit.php?post_type=mwf_26');  // よくある質問（mw-wp-form）
                remove_menu_page('wpcf7');
                remove_menu_page('edit.php?post_type=voyage');  // 国ごとの陰性証明書

            }
            add_action('admin_menu', 'remove_menus000');



        }

if (current_user_can('administrator')) {
  /*メニューに協力団体追加*/
function add_page_to_admin_menu()
{
    add_menu_page('協力団体', '協力団体', 'edit_posts', 'post.php?post=73&action=edit', '', 'dashicons-admin-users
', 3);
}
add_action('admin_menu', 'add_page_to_admin_menu');

function add_page_to_admin_menu001_01()
    {
        add_menu_page('お問い合わせ管理', 'お問い合わせ管理', 'edit_posts', 'edit.php?post_type=mwf_85', '', 'dashicons-email
', 2);
    }
    add_action('admin_menu', 'add_page_to_admin_menu001_01');

    function add_page_to_admin_menu001_02()
    {
        add_menu_page('団体検査ご相談フォーム管理', '団体検査ご相談フォーム管理', 'edit_posts', 'edit.php?post_type=mwf_26', '', 'dashicons-email
', 2);
    }
    add_action('admin_menu', 'add_page_to_admin_menu001_02');

    function add_page_to_admin_menu001_03()
    {
        add_menu_page('教育機関・医療機関用フォーム管理', '教育機関・医療機関用フォーム管理', 'edit_posts', 'edit.php?post_type=mwf_190', '', 'dashicons-email
', 2);
    }
    add_action('admin_menu', 'add_page_to_admin_menu001_03');

    function add_page_to_admin_menu001_04()
    {
        add_menu_page('リクルートフォーム管理', 'リクルートフォーム管理', 'edit_posts', 'edit.php?post_type=mwf_5606', '', 'dashicons-email
', 2);
    }
    add_action('admin_menu', 'add_page_to_admin_menu001_04');
}


/*

マネージャー用アカウント（スタッフに売り上げデータ追加したやつ）
--------------------------------------------*/

  global $current_user;
        get_currentuserinfo();
        if ($current_user->ID == "4") {

            function remove_menus000()
            {
                global $menu;
                remove_menu_page('edit.php'); // 投稿を非表示
                remove_menu_page('index.php');                  // ダッシュボード
            remove_menu_page('upload.php');                 // メディア
            remove_menu_page('edit.php?post_type=page');    // 固定ページ
            remove_menu_page('edit-comments.php');          // コメント
            remove_menu_page('themes.php');                 // 外観
            remove_menu_page('plugins.php');                // プラグイン
            remove_menu_page('users.php');                  // ユーザー
            remove_menu_page('tools.php');                  // ツール
            remove_menu_page('options-general.php');        // 設定
            remove_menu_page('profile.php');  // プロフィール
            remove_menu_page('edit.php?post_type=mw-wp-form');  // お問い合わせ（mw-wp-form）
            remove_menu_page('usc-e-shop/usc-e-shop.php');  //welcart
            remove_menu_page('usces_orderlist'); // Welcart Management
            remove_menu_page('edit.php?post_type=faq');  // よくある質問（mw-wp-form）

                remove_menu_page('wpcf7');
                remove_menu_page('edit.php?post_type=voyage');  // 国ごとの陰性証明書

            }
            add_action('admin_menu', 'remove_menus000');


            function add_page_to_admin_menu001_00000()
    {
        add_menu_page('今月or本日の売り上げデータ', '今月or本日の売り上げ', 'edit_posts', 'admin.php?page=usc-e-shop%2Fusc-e-shop.php', '', 'dashicons-media-spreadsheet
', 2);
    }
    add_action('admin_menu', 'add_page_to_admin_menu001_00000');

    function add_page_to_admin_menu002_00000()
    {
        add_menu_page('売り上げレポート', '売り上げレポート', 'edit_posts', 'admin.php?page=wcex_reports', '', 'dashicons-media-spreadsheet
', 2);
    }
    add_action('admin_menu', 'add_page_to_admin_menu002_00000');

        }






/* サムネイル自動登録
---------------------------------------------------------- */
add_action('save_post', 'save_default_thumbnail');
function save_default_thumbnail($post_id)
{
    $post_thumbnail = get_post_meta($post_id, $key = '_thumbnail_id', $single = true);
    if (!wp_is_post_revision($post_id)) {
        if (empty($post_thumbnail)) {
            update_post_meta($post_id, $meta_key = '_thumbnail_id', $meta_value = '789');
        }
    }
}


/*ページ番号取得*/


/*function remove_menus () {
    global $menu;
    var_dump($menu);
}

add_action('admin_menu','remove_menus');*/




/**
 * 子カテチェックで親カテも
 */
add_action('admin_footer-welcart-shop_page_usces_itemedit', 'super_category_toggler');
add_action('admin_footer-welcart-shop_page_usces_itemnew', 'super_category_toggler');


/*

エディタースタイル追加

-----------------------------------*/


if ( !function_exists( 'st_add_orignal_quicktags' ) ) {
  /**
   * オリジナルクイックタグ登録
   */
  function st_add_orignal_quicktags() {
    if ( wp_script_is( 'quicktags' ) ) {
      ?>
            <script type="text/javascript">
                QTags.addButton('ed_p', '文章段落', '<p>', '</p>');
                QTags.addButton('ed_br', '改行', '<br>');
                 QTags.addButton('ed_bold', '太字', '<span class="u-fw600">','</span>');
                 QTags.addButton('ed_text_red', '赤文字', '<span class="c-pink02">','</span>');
                  QTags.addButton('ed_text_pink', 'ピンク文字', '<span class="c-pink">','</span>');
                   QTags.addButton('ed_text_blue', '青文字', '<span class="c-blue">','</span>');
                    QTags.addButton('ed_text_orange', 'オレンジ文字', '<span class="c-orange02">','</span>');
                   QTags.addButton('ed_text_line', '下線', '<span class="u-text-under-line">','</span>');
			</script>
<?php
}
}
}
add_action( 'admin_print_footer_scripts', 'st_add_orignal_quicktags' );


add_filter('upload_mimes', 'set_mime_types');
function set_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}

/**
 * 現在のURLを取得
 *
 * @return string URL
 */
function get_current_link() {
	return (is_ssl() ? 'https' : 'http') . '://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
}

/**
 * 法人商品がカートに入っているか返却
 *
 * @return bool true:法人商品あり   false:法人商品なし
 */
function is_group_item_in_cart()
{
    global $usces;

    $cart = $usces->cart->get_cart();
    $cat_slugs = [];
    foreach ($cart as $item) {
        $category = get_the_category($item['post_id']);
        foreach ($category as $cat_obj) {
            if (isset($cat_obj->slug) && !empty($cat_obj->slug)) {
                $cat_slugs[] = $cat_obj->slug;
            }
        }
    }

    return in_array(GROUP_CATEGORY_SLUG, $cat_slugs, true);
}

/**
 * お客様情報入力フォームボタンの差し替え(法人商品がカートにない場合)
 *
 * @param string $res ボタンのhtml
 * @return string 修正後のhtml
 */
function replace_customer_button($res)
{
    if (!usces_is_membersystem_state() && is_group_item_in_cart()) {
        return $res;
    }

	$res = '';
	$res = '<input name="backCart" type="submit" class="back_cart_button" value="'.__('Back', 'usces').'" />&nbsp;&nbsp;';

	$button = '<input name="reganddeliveryinfo" type="submit" class="to_reganddeliveryinfo_button" value="'.__(' Next ', 'usces').'" />&nbsp;&nbsp;';
	$res .= apply_filters('usces_filter_customer_button', $button);

    return $res;
}
add_filter('usces_filter_get_customer_button', 'replace_customer_button', 10);


/**
 * 会員登録パスワードを自動設定する(法人商品がカートにない場合)
 */
function set_temporary_password()
{
    if (!usces_is_membersystem_state() || is_group_item_in_cart() || isset($_POST['customer']['password1']) || isset($_POST['customer']['password2'])) {
        return;
    }

    $password = time();
    $_POST['customer']['password1'] = $password;
    $_POST['customer']['password2'] = $password;
}
add_action('usces_action_before_member_check_fromcart', 'set_temporary_password', 10);


/**
 * 新規会員登録後に会員ランクを「仮会員」にする(法人商品がカートにない場合)
 *
 * @param array $post_mem
 * @param int $mem_id メンバーID
 */
function set_temporary_member_status($post_mem, $mem_id)
{
    global $usces;

    if (!is_group_item_in_cart()) {
	    $usces->set_member_info(['mem_status' => TEMP_MEMBER], $mem_id);
    }
}
add_action('usces_action_member_registered', 'set_temporary_member_status', 10, 2);


/**
 * ユーザー情報入力時に同じメアドの仮会員があれば削除する
 *
 * @param string $mes メッセージ
 * @return string $mesそのまま
 */
function delete_temporary_member_from_register($mes)
{
    if (!isset($_POST['customer']['mailaddress1'])) {
        return $mes;
    }
    if (usces_is_login()) {
        return $mes;
    }

    $member = get_member_by_mail_address($_POST['customer']['mailaddress1']);
    if (!is_null($member) && $member['mem_status'] == TEMP_MEMBER ) {
        $_POST['member_regmode'] = 'newmemberfromcart';
        usces_delete_memberdata($member['ID']);
    }

    return $mes;
}
add_filter('usces_filter_member_check_fromcart', 'delete_temporary_member_from_register', 10);


/**
 * 仮会員の場合注文確定後にメールアドレスとステータスを更新する
 *
 * @param bool $res
 * @param array $confirm_para
 * @param array $entry
 * @param array $data 注文情報
 */
function update_temporary_member($res, $confirm_para, $entry, $data)
{
    global $usces, $wpdb;

    if (!isset($data['mem_id']) || !isset($data['order_email']) || empty($data['order_email'])) {
        return;
    }

    $mem_status = get_mem_status_by_id($data['mem_id']);
    if ($mem_status == TEMP_MEMBER) {
        $member_table_name = usces_get_tablename( 'usces_member' );
        $query = $wpdb->prepare(
            "UPDATE $member_table_name SET `mem_email`=%s, `mem_status`=%d WHERE ID = %d",
            $data['order_email'] . '_' . time(),
            USED_TEMP_MEMBER,
            $data['mem_id']
        );
        $res = $wpdb->query( $query );

        if ($res !== false) {
            $usces->member_logout();
        }
    }
}
add_action('usces_action_after_send_ordermail_to_customer', 'update_temporary_member', 10, 4);


/**
 * メールアドレスからメンバー情報を取得
 *
 * @param string $mail_address メールアドレス
 */
function get_member_by_mail_address($mail_address)
{
    global $wpdb;

    $member_table = usces_get_tablename( 'usces_member' );
    $query = $wpdb->prepare("SELECT * FROM $member_table WHERE mem_email = %s", $mail_address);

    return $wpdb->get_row( $query, ARRAY_A );
}

/**
 * メンバーIDから会員ランクを取得
 *
 * @param int $mem_id メンバーID
 */
function get_mem_status_by_id($mem_id)
{
    global $wpdb;

    $member_table = usces_get_tablename( 'usces_member' );
    $query = $wpdb->prepare("SELECT mem_status FROM $member_table WHERE ID = %d", $mem_id);
    $row = $wpdb->get_row( $query, ARRAY_A );

    return isset($row['mem_status']) ? $row['mem_status'] : false;
}

/**
 * 注文が確定したときにクーポンを発行(クレジットカードの場合)
 *
 * @param int $order_id 注文番号
 */
function make_coupon_from_order($order_id)
{
    if (check_payment(get_payment_name('card'))) {
        make_coupons($order_id);
    }
}
add_action('usces_post_reg_orderdata', 'make_coupon_from_order', 10);

/**
 * 注文ステータスを未入金から入金に変更したときにクーポンを発行
 *
 * @param object $new_orderdata 新しい設定値
 * @param string $old_status メンバーID
 * @param $old_orderdata
 * @param $new_cart
 * @param $old_cart
 */
function make_coupon_from_order_status_change($new_orderdata, $old_status, $old_orderdata, $new_cart, $old_cart)
{
    if (isset($new_orderdata->order_status) && isset($new_orderdata->ID)) {
        if ($old_status == 'noreceipt' && $new_orderdata->order_status == 'receipted,') {
            make_coupons($new_orderdata->ID);
        }
    }
}
add_action('usces_action_update_orderdata', 'make_coupon_from_order_status_change', 10, 5 );


/**
 * クーポンの発行
 *
 * @param int $order_id 注文番号
 */
function make_coupons($order_id)
{
    global $usces, $wpdb;

    $order_data = $usces->get_order_data($order_id);
    $note = '注文番号' . $order_id;
    if (isset($order_data['mem_id'])) {
        $company_name = $usces->get_member_meta_value('csmb_company', $order_data['mem_id']);
        if (!is_null($company_name)) {
            $note = $company_name .' / ' .$note;
        }
    }
    $order_cart_data = usces_get_ordercartdata($order_id);
    foreach ($order_cart_data as $order) {
        // クーポンの設定値を取得
        $coupon = get_coupon_data($order);
        if (empty($coupon)) {
            continue;
        }
        $coupon_table = $wpdb->prefix . "usces_coupon";
        $inserted_codes = [];
        // 購入数分クーポンテーブルのインサートをループ(直したい)
        for( $i = 0; $i < $order['quantity']; $i++ ) {
            $coupon_code = wccp_make_coupon();
            $query = $wpdb->prepare( "INSERT INTO $coupon_table
                ( `coupon_code`, `coupon_name`, `discount_op`, `discount`, `category`, `minimum_amount`, `limit_date`, `times`, `member_only`, `note`, `creation_date` )
                VALUES ( %s, %s, %d, %f, %d, %f, %s, %d, %d, %s, %s )",
                $coupon_code, $coupon['coupon_name'], $coupon['discount_op'], $coupon['discount'], $coupon['category'], $coupon['minimum_amount'], $coupon['expiration_date'], $coupon['times_number'], $coupon['member_only'], $note, $coupon['creation_date']
            );
            $materials = [
                'coupon_table' => $coupon_table,
                'coupon_code' => $coupon_code,
                'coupon_name' => $coupon['coupon_name'],
                'discount_op' => $coupon['discount_op'],
                'discount' => $coupon['discount'],
                'category' => $coupon['category'],
                'minimum_amount' => $coupon['minimum_amount'],
                'expiration_date' => $coupon['expiration_date'],
                'times_number' => $coupon['times_number'],
                'member_only' => $coupon['member_only'],
                'note' => $note,
                'creation_date' => $coupon['creation_date'],
            ];
            $query = apply_filters('wccp_filter_add_coupon_query', $query, $materials);
            $result = $wpdb->query( $query );
            if ($result) {
                $inserted_codes[] = $coupon_code;
            }
        }

        if (empty($inserted_codes)) {
            continue;
        }

        if(!file_exists(COUPON_FILE_PATH)){
            if (!mkdir(COUPON_FILE_PATH, 0755)) {
                die('クーポン発行準備に失敗しました');
            }
        }

        $filepath = COUPON_FILE_PATH ."{$order_id}_{$order['sku_code']}.csv";
        $fd = fopen($filepath, 'w');
        if($fd === FALSE) {
            die('クーポン発行に失敗しました');
        }
        foreach($inserted_codes as $code) {
            fputcsv($fd, [$code]);
        }
        rewind($fd);
        fclose($fd);
    }
}
require_once( WC_COUPON_PLUGIN_DIR . '/admin/ajax_action.php' );


/**
 * クーポンの設定値を取得
 *
 * @param array $order 注文情報
 */
function get_coupon_data($order)
{
    if (!in_category(GROUP_CATEGORY_SLUG, $order['post_id'])) {
        return [];
    }

    $category = get_the_category($order['post_id']);
    foreach ($category as $cat_obj) {
        if (isset($cat_obj->category_parent)) {
            $parent_cat_obj = get_category($cat_obj->category_parent);
            if (isset($parent_cat_obj->slug) && $parent_cat_obj->slug == 'coupon_type' && isset($cat_obj->cat_ID)) {
                // 親カテゴリがcoupon_typeのカテゴリのIDを取り出す
                $coupon_category_id = $cat_obj->cat_ID;
                break;
            }
        }
    }

    if (!isset($coupon_category_id)) {
        return [];
    }

    return [
        'discount_op' => 1,
        'discount' => 100,
        'expiration_date' => NULL,
        'times_number' => 1,
        'member_only' => 0,
        'creation_date' => current_time( 'mysql' ),
        'coupon_name' => $order['sku_code'],
        'category' => $coupon_category_id,
        'minimum_amount' => 0,
    ];
}

/**
 * クーポンを使用した購入の場合注文が確定した時点でステータスを入金済みにする
 *
 * @param int $order_id 注文番号
 */
function change_order_status_by_coupon_payment($order_id)
{
    if (!check_payment(get_payment_name('coupon'))) {
        return;
    }

    global $usces, $wpdb;

    $order = $usces->get_order_data($order_id);
    if (isset($order['order_item_total_price'], $order['order_discount'])) {
        if ($order['order_item_total_price'] - $order['order_discount'] > 0) {
            return;
        }
    }

    $order_table_name = $wpdb->prefix . "usces_order";
    $query = $wpdb->prepare(
            "UPDATE $order_table_name SET `order_status` = %s WHERE ID = %d",
            'receipted,', $order_id
        );
    $wpdb->query($query);

}
add_action('usces_post_reg_orderdata', 'change_order_status_by_coupon_payment', 10);


/**
 * 法人用商品をカートに入れた際、カートに個人用商品が含まれていたらカートをクリアにする
 * 個人用商品をカートに入れた際、カートに法人用商品が含まれていたらカートをクリアにする
 *
 * @param string $mes
 * @param int $post_id 商品の投稿ID
 * @param string $sku
 */
function remove_mismatch_category_item($mes, $post_id, $sku)
{
    global $usces;

    // カートに入れようとしている商品が法人用かどうか
    $is_group_item = in_category(GROUP_CATEGORY_SLUG, $post_id);
    if ($is_group_item) {
        if (!is_group_item_in_cart()) {
            // 法人商品をカートに入れようとしたときカートに個人商品があれば空にする
            $usces->cart->clear_cart();
            unset($_SESSION['msa_cart']);
            $member = $usces->get_member();
            if (isset($member['status']) && $member['status'] == TEMP_MEMBER) {
                $usces->member_logout();
            }
        }
    } else {
        if (is_group_item_in_cart()) {
            // 個人商品をカートに入れようとしたときカートに法人商品があれば空にする
            $usces->cart->clear_cart();
            unset($_SESSION['msa_cart']);
        }
    }

    return $mes;
}
add_filter('usces_filter_incart_check', 'remove_mismatch_category_item', 5, 3);


/**
 * 物販商品をカートに入れた際、カートにダウンロード商品が含まれていたらカートをクリアにする
 * ダウンロード商品をカートに入れた際、カートに物販商品が含まれていたらカートをクリアにする
 *
 * @param string $mes
 * @param int $post_id 商品の投稿ID
 * @param string $sku
 */
function remove_mismatch_division_item($mes, $post_id, $sku)
{
    global $usces;

    // カートに入れようとしている商品が物販かどうか
    $is_shipped_item = dlseller_get_division($post_id) === 'shipped';
    if ($is_shipped_item) {
        if (!dlseller_have_shipped()) {
            // 物販商品をカートに入れようとしたときカートに非物販商品があれば空にする
            $usces->cart->clear_cart();
            unset($_SESSION['msa_cart']);
            $member = $usces->get_member();
            if (isset($member['status']) && $member['status'] == TEMP_MEMBER) {
                $usces->member_logout();
            }
        }
    } else {
        if (dlseller_have_shipped()) {
            // 非物販商品をカートに入れようとしたときカートに物販商品があれば空にする
            $usces->cart->clear_cart();
            unset($_SESSION['msa_cart']);
        }
    }

    return $mes;
}
add_filter('usces_filter_incart_check', 'remove_mismatch_division_item', 6, 3);


/**
 * 決済方法の種類を絞る(商品が個人用か法人用かで変わる)
 *
 * @param array $payments 元々の支払方法
 * @return array 変更後の支払方法
 */
function filter_payments($payments)
{
    $keep_payment_names = [];
    if (is_group_item_in_cart()) {
        // 企業・団体用の商品がカートに入っていれば
        $keep_payment_names[] = get_payment_name('card');
        $keep_payment_names[] = get_payment_name('transfer');
        $keep_payment_names[] = get_payment_name('estimate');
    } else {
        $keep_payment_names[] = get_payment_name('card');
        $keep_payment_names[] = get_payment_name('coupon');
    }

    foreach ($payments as &$payment) {
        if (!in_array($payment['name'], $keep_payment_names)) {
            $payment['use'] = 'deactivate';
        }
    }

    return $payments;
}
add_filter('usces_fiter_the_payment_method', 'filter_payments', 10);


/**
 * 支払方法名を取得する
 *
 * @param string $key 支払方法のキー
 * @return string 支払方法名
 */
function get_payment_name($key)
{
    // キーはコーディングする上でわかりやすい値(任意)
    // 中身は管理画面で設定されている支払方法名に合わせること
    // https://ドメイン/wp-admin/admin.php?page=usces_initial
    $data = [
        'card' => 'クレジットカード',
        'coupon' => '引換コード',
        'estimate' => '見積り後、銀行振込',
        'transfer' => '銀行振込',
    ];

    return isset($data[$key]) ? $data[$key] : '';
}

/**
 * 支払方法名が引数で指定したものと一致しているか
 *
 * @param string $name 支払方法名
 * @return bool true:一致    false:一致しない
 */
function check_payment($name)
{
    global $usces;

    $entry = $usces->cart->get_entry();
    if (isset($entry['order']['payment_name']) && $entry['order']['payment_name'] == $name) {
        return true;
    }

    return false;
}

/**
 * クーポンファイル名を取得
 *
 * @param string $file
 * @param int $post_id
 * @param string $sku 商品コード
 * @return string ファイル名
 */
function get_coupon_filename($file, $post_id, $sku)
{
    global $usces;

    $mem = $usces->get_member();
    if (!isset($mem['ID']) || !isset($_GET['oid'])) {
        return $file;
    }
    $order_id = $_GET['oid'];
    $order_data = $usces->get_order_data($order_id);
    if (!isset($order_data['mem_id']) || $mem['ID'] !== $order_data['mem_id']) {
        return $file;
    }

    return "{$order_id}_{$sku}.csv";
}
add_filter('dlseller_filter_filename', 'get_coupon_filename', 10, 3 );


/**
 * クーポン決済でなければクーポン入力フォームの表示処理を無視する
 */
function ignore_coupon_form()
{
    if (!check_payment(get_payment_name('coupon'))) {
        remove_action( 'usces_action_confirm_after_form', 'wccp_action_confirm_after_form' );
    }
}
add_action( 'usces_action_confirm_after_form', 'ignore_coupon_form', 9 );


/**
 * クーポン決済でクーポン未入力の場合確認画面に戻す
 *
 * @return bool trueの場合正常として処理を続行
 */
function check_coupon_entry()
{
    global $usces;

    if (check_payment(get_payment_name('coupon'))) {
        $entry = $usces->cart->get_entry();
        if (!isset($entry['order']['usedcoupon'])) {
            $usces->error_message = '引換コードが未入力です。正しい引換コード番号を入力して「引換コードを使用する」を押してご使用ください。';
            $usces->page = 'confirm';
            add_action('the_post', array($usces, 'action_cartFilter'));
            add_action('template_redirect', array($usces, 'template_redirect'));

            return false;
        } else {
            $mes = wccp_coupon_check($entry['order']['usedcoupon']);
            if ($mes !== '') {
                $usces->error_message = $mes;
                $usces->page = 'confirm';
                add_action('the_post', array($usces, 'action_cartFilter'));
                add_action('template_redirect', array($usces, 'template_redirect'));

                return false;
            }
        }
    }

    return true;
}
add_filter('usces_purchase_check', 'check_coupon_entry', 10);


/**
 * MSAで表示しているマイページの注文履歴を削除
 */
function remove_msa_member_history()
{
    remove_filter('usces_filter_member_history', 'msa_member_history', 1);
}
add_filter( 'usces_filter_member_history', 'remove_msa_member_history', 14 );


/**
 * 複数商品、複数量のクーポン決済をはじく
 *
 * @param string $mes エラーメッセージ
 * @return string 変更後のエラーメッセージ
 */
function check_coupon_order($mes)
{
    global $usces;

    if ($mes == '' && $_POST['offer']['payment_name'] == get_payment_name('coupon')) {
        $cart = $usces->cart->get_cart();
        if (count($cart) > 1) {
            $mes = '引換コード決済の場合1種類の商品しか注文できません。';
        }
        if (isset($cart[0]['quantity']) && $cart[0]['quantity'] > 1) {
            $mes = '引換コード決済の場合数量1つまでしか注文できません。';
        }
    }

    return $mes;
}
add_filter( 'usces_filter_delivery_check', 'check_coupon_order', 20 );


/**
 * 見積りの場合注文確定ボタンの文言を変更
 *
 * @param string $button_value 元々の文言
 * @return string 変更後の文言
 */
function replace_checkout_button_value($button_value)
{
    if (check_payment(get_payment_name('estimate'))) {
        $button_value = '上記内容の見積もりを依頼する';
    }

    return $button_value;
}
add_filter( 'usces_filter_confirm_checkout_button_value', 'replace_checkout_button_value', 10 );


/**
 * 支払方法がクーポンの場合メールに振込先を追記しない
 *
 * @param string $transferee 元々の文言
 * @return string 変更後の文言
 */
function remove_transferee_text($transferee, $payment)
{
    if (isset($payment['name']) && $payment['name'] === get_payment_name('coupon')) {
        $transferee = '';
    }

    return $transferee;
}
add_filter('usces_filter_mail_transferee', 'remove_transferee_text', 10, 2);


/**
 * 法人注文の場合フォームの「お名前」の文言を変更
 *
 * @param string $text 元々の文言
 * @return string 変更後の文言
 */
function replace_form_name_label($text)
{
    if (is_group_item_in_cart() || get_current_link() == USCES_MEMBER_URL) {
        $text = 'ご担当者お名前';
    }

    return $text;
}
add_filter( 'usces_filters_addressform_name_label', 'replace_form_name_label', 10 );


/**
 * 見積の場合注文完了メールの文言を専用のものに差し替える
 *
 * @param array $confirm_para メール情報
 * @param array $entry 入力情報
 * @param array $data
 * @return array 上書きした$confirm_param
 */
function replace_message_with_estimate($confirm_para, $entry, $data)
{
    global $usces;

    if (!check_payment(get_payment_name('estimate'))) {
        return $confirm_para;
    }

    $entry = $usces->cart->get_entry();
    $order_id = $entry['order']['ID'];
    $_POST['mode'] = 'mitumoriConfirmMail';
    $confirm_para['message'] = usces_order_confirm_message($order_id);

    $mail_data = $usces->options['mail_data'];
    $confirm_para['subject'] = $mail_data['title']['mitumorimail'];

    return $confirm_para;
}
add_filter( 'usces_send_ordermail_para_to_customer', 'replace_message_with_estimate', 10, 3);


/**
 * 業務パック割引の入力欄を拡張する
 *
 * @param string $gp_row 入力欄のhtml
 * @param int $post_id 商品の投稿ID
 * @return string 上書きしたhtml
 */
function add_gp_rows($gp_row, $post_id)
{
    $gp_data = get_custom_gp_data($post_id);

    $gp_row = '<th rowspan="' . GP_COUNT . '">' . __('Business package discount', 'usces') . '</th>';
    foreach ($gp_data as $key => $value) {
        if ($key > 1) {
            $gp_row .= '<tr>';
        }
        $gp_row .= '<td>' . $key . '.' . sprintf(__('in more than%s%s%s%s%s %s%s%s,', 'usces'), '<input type="text" name="', "itemGpNum{$key}", '" id="', "itemGpNum{$key}", '" class="itemPointrate"', 'value="', esc_attr($value['num']), '" />') . '<input type="text" name="itemGpDis' . $key . '" id="itemGpDis' . $key . '" class="itemPointrate" value="' . esc_attr($value['dis']) . '" />' . __('%discount','usces') . '(' . __('Unit price','usces') . ')</td>
        </tr>';
    }

    return $gp_row;
}
add_filter( 'usces_item_master_gp_row', 'add_gp_rows', 10, 3);


/**
 * 業務パック割引のデータ登録件数拡張
 *
 * @param int $post_id 商品の投稿ID
 * @param int $post
 */
function save_product_custom($post_id, $post)
{
    for ($i = 1; $i <= GP_COUNT; $i++) {
        if(isset($_POST["itemGpNum{$i}"])){
            $itemGpNum = (int)$_POST["itemGpNum{$i}"];
            update_post_meta($post_id, "_itemGpNum{$i}", $itemGpNum);
        }
        if(isset($_POST["itemGpDis{$i}"])){
            $itemGpDis = (int)$_POST["itemGpDis{$i}"];
            update_post_meta($post_id, "_itemGpDis{$i}", $itemGpDis);
        }
    }
}
add_action( 'usces_action_save_product', 'save_product_custom', 10, 2);


/**
 * カスタム業務パック割引
 *
 * @param float $realprice 通常の業務パック割引が適用された値段
 * @param int $post_id 商品の投稿ID
 * @param string $p 業務パック割引適応前の値段
 * @param int $quant 数量
 * @return int 上書きした$realpriceの値
 */
function get_custom_gp_price($realprice, $post_id, $p, $quant)
{
    $gp_data = get_custom_gp_data($post_id);
    foreach ($gp_data as $value) {
        if (empty($value['num']) || empty($value['dis'])) {
            break;
        }
        if ($quant >= $value['num']) {
            $realprice = round($p * (100 - $value['dis']) / 100);
        }
    }

	return $realprice;
}
add_filter( 'usces_filter_get_gp_price', 'get_custom_gp_price', 10, 4);


/**
 * カスタム業務パック割引後の内訳を取得
 *
 * @param string $html 元々のhtml
 * @return string 上書きした$html
 */
function get_custom_gp_exp($html)
{
    global $post, $usces;

    $post_id = $post->ID;
    $sku = $usces->itemsku['code'];
    $unit = $usces->getItemSkuUnit($post_id, $sku);
    $price = $usces->getItemPrice($post_id, $sku);

    $gp_data = get_custom_gp_data($post_id);
    if( ($usces->itemsku['gp'] == 0) || empty($gp_data[1]['num']) || empty($gp_data[1]['dis']) ){
        return $html;
    }

    $html = "<dl class='itemGpExp'>\n<dt>" . apply_filters( 'usces_filter_itemGpExp_title', __('Business package discount','usces')) . "</dt>\n<dd>\n<ul>\n";
    for ($i = 1; $i <= GP_COUNT; $i++) {
        $next_num = $gp_data[$i+1]['num'];
        $next_dis = $gp_data[$i+1]['dis'];
        $html .= "<li>";
        if (empty($next_num) || empty($next_dis)) {
            $html .= sprintf( __('<span class=%5$s>%1$s</span>%2$s par 1%3$s for more than %4$s%3$s', 'usces'),
                        $usces->get_currency(round($price * (100 - $gp_data[$i]['dis']) / 100), true, false ),
                        $usces->getGuidTax(),
                        esc_html($unit),
                        $gp_data[$i]['num'],
                        "'price'"
                    );
        } else {
            $html .= sprintf( __('<span class=%6$s>%1$s</span>%2$s par 1%3$s for %4$s-%5$s%3$s', 'usces'),
                        $usces->get_currency(round($price * (100 - $gp_data[$i]['dis']) / 100), true, false ),
                        $usces->getGuidTax(),
                        esc_html($unit),
                        $gp_data[$i]['num'],
                        $gp_data[$i+1]['num']-1,
                        "'price'"
                    );
        }
        $html .= "</li>\n";
    }
    $html .= "</ul></dd></dl>";

    return $html;
}
add_filter( 'usces_filter_itemGpExp', 'get_custom_gp_exp', 10 );


/**
 * 業務パック割引の設定値を取得
 *
 * @param int|string $post_id 商品の投稿ID
 * @return array
 */
function get_custom_gp_data($post_id) {
    $gp_data = [];
    for ($i = 1; $i <= GP_COUNT; $i++) {
        $gp_data[$i]['num'] = get_post_meta($post_id, '_itemGpNum'.$i, true);
        $gp_data[$i]['dis'] = get_post_meta($post_id, '_itemGpDis'.$i, true);
    }

    return $gp_data;
}


/**
 * 独自の送料計算
 * 引換コード使用時は送料無料
 * 引換コード購入時は使用時の送料代わりの料金を設定
 *
 * @param int $old_charge 元々の送料
 * @param array $cart カート情報
 * @param array $entry 注文情報
 * @return float 送料(円)
 */
function get_custom_shipping_charge($old_charge, $cart, $entry)
{
    global $usces;

    if (check_payment(get_payment_name('coupon'))) {
        return 0;
    }

    if( function_exists('dlseller_have_shipped') && dlseller_have_shipped() ){
        return $old_charge;
    }

    //配送方法ID
    $d_method_id = $entry['order']['delivery_method'];
    //配送方法index
    $d_method_index = $usces->get_delivery_method_index($d_method_id);
    //送料ID
    $fixed_charge_id = ( isset($usces->options['delivery_method'][$d_method_index]['charge']) ) ? $usces->options['delivery_method'][$d_method_index]['charge'] : -1;
    $individual_quant = 0;
    $total_quant = 0;
    $charges = array();
    $individual_charges = array();
    $country = (isset($entry['delivery']['country']) && !empty($entry['delivery']['country'])) ? $entry['delivery']['country'] : $entry['customer']['country'];
    $pref = '';
    if (!isset($entry['delivery']['pref']) || empty($entry['delivery']['pref']) || $entry['delivery']['pref'] === '--選択--') {
        $pref = $entry['customer']['pref'];
    } else {
        $pref = $entry['delivery']['pref'];
    }

    foreach ( $cart as $rows ) {

        if( -1 == $fixed_charge_id ){
            //商品送料ID
            $s_charge_id = $usces->getItemShippingCharge($rows['post_id']);
            //商品送料index
            $s_charge_index = $usces->get_shipping_charge_index($s_charge_id);
            $s_charge = isset($usces->options['shipping_charge'][$s_charge_index][$country][$pref]) ? (float)$usces->options['shipping_charge'][$s_charge_index][$country][$pref] : 0;
        }else{
            $s_charge_index = $usces->get_shipping_charge_index($fixed_charge_id);
            $s_charge = isset($usces->options['shipping_charge'][$s_charge_index][$country][$pref]) ? (float)$usces->options['shipping_charge'][$s_charge_index][$country][$pref] : 0;
        }

        if($usces->getItemIndividualSCharge($rows['post_id'])){
            $individual_quant += (float)$rows['quantity'];
            $individual_charges[] = (float)$rows['quantity'] * $s_charge;
        }else{
            $charges[] = $s_charge;
        }
        $total_quant += $rows['quantity'];
    }

    if( count($charges) > 0 ){
        rsort($charges);
        $max_charge = $charges[0];
        $charge = $max_charge + array_sum($individual_charges);
    }else{
        $charge = array_sum($individual_charges);
    }

    return $charge;
}
add_filter( 'usces_filter_getShippingCharge', 'get_custom_shipping_charge', 11, 3);


/**
 * 送料の文言を取得
 *
 * @param string $translation 元々の文言
 * @param string $text 対象となる文言名
 * @param string $domain 対象となるドメイン
 * @return string 置き換える文言
 */
function get_shipping_text($translation, $text, $domain)
{
    if ($text !== 'Shipping' || get_current_link() !== USCES_CART_URL) {
        return $translation;
    }

    global $usces;

    $cart = $usces->cart->get_cart();
    $coupon_charge_name = get_shipping_charge_name('coupon');
    if (check_shipping_charge($coupon_charge_name, $cart)) {
        $translation = $coupon_charge_name;
    }

    return $translation;
}
add_filter( 'gettext_usces', 'get_shipping_text', 10, 3);


/**
 * 見積書や請求書、領収書にコード使用時の送料のカラムを追記する
 *
 * @param array $label_data 元々のカラム
 * @param object $data 注文情報
 * @return array 変更したカラム
 */
function get_custom_pdf_footer_lavel($label_data, $data)
{
    $cart = isset($data->cart) && is_array($data->cart) ? $data->cart : [];
    $coupon_charge_name = get_shipping_charge_name('coupon');
    if (check_shipping_charge($coupon_charge_name, $cart)) {
        array_splice($label_data, 2, 0, $coupon_charge_name);
    }

    return $label_data;
}
add_filter( 'usces_filter_pdf_footer_label', 'get_custom_pdf_footer_lavel', 10, 2);


/**
 * 見積書や請求書、領収書にコード使用時の送料の値を追記する
 *
 * @param array $value_data 値
 * @param object $data 注文情報
 * @return array 変更した値
 */
function get_custom_pdf_footer_value($value_data, $data)
{
    global $usces;

    $cart = isset($data->cart) && is_array($data->cart) ? $data->cart : [];
    if (check_shipping_charge(get_shipping_charge_name('coupon'), $cart)) {
        array_splice($value_data, 2, 0, $usces->get_currency($data->order['shipping_charge']));
    }

    return $value_data;
}
add_filter( 'usces_filter_pdf_footer_value', 'get_custom_pdf_footer_value', 10, 2);


/**
 * カート内の送料が引数で指定した名前と一致しているかどうか
 *
 * @param string $shipping_charge_name 送料の名前
 * @param array $cart カート
 * @return bool true:一致している    false:一致していない(もしくは送料が複数ある)
 */
function check_shipping_charge($shipping_charge_name, $cart)
{
    global $usces;

    $s_charge_ids = [];
    foreach ( $cart as $rows ) {
        $id = $usces->getItemShippingCharge($rows['post_id']);
        if (!in_array($id, $s_charge_ids, true)) {
            $s_charge_ids[] = $id;
        }
    }
    if (count($s_charge_ids) !== 1) {
        return false;
    }
    $s_charge_id = $s_charge_ids[0];
    $s_charge_index = $usces->get_shipping_charge_index($s_charge_id);
    if (isset($usces->options['shipping_charge'][$s_charge_index]['name']) && $usces->options['shipping_charge'][$s_charge_index]['name'] == $shipping_charge_name) {
        return true;
    }

    return false;
}


/**
 * 送料名を取得する
 *
 * @param string $key 送料のキー
 * @return string 送料名
 */
function get_shipping_charge_name($key)
{
    // キーはコーディングする上でわかりやすい値(任意)
    // 中身は管理画面で設定されている送料名に合わせること
    // https://ドメイン/wp-admin/admin.php?page=usces_delivery
    $data = [
        'coupon' => 'コード使用時の送料',
    ];

    return isset($data[$key]) ? $data[$key] : '';
}


/**
 * 商品区分(物販かコンテンツファイルか)に分けるように受注リストクエリにjoin
 *
 * @param string $join 元々のjoin句
 * @param string $tracking_key
 * @param object $order_list_obj WlcOrderListのオブジェクト
 * @return string 上書きした$join
 */
function get_custom_orderlist_sql_join($join, $tracking_key, $order_list_obj)
{
    if (!isset($_POST['item_division'])) {
        $item_division = 'shipped';
    } elseif ($_POST['item_division'] == 'all') {
        return $join;
    } else {
        $item_division = $_POST['item_division'];
    }

    global $wpdb;

    if($order_list_obj->GetWhere() === ''){
        $ordercart_table = $wpdb->prefix.'usces_ordercart';
        $join .= " LEFT JOIN {$ordercart_table} AS `cart` ON ord.ID = cart.order_id " . "\n";
    }
    $post_meta_table = $wpdb->prefix.'postmeta';
    $join .= "INNER JOIN {$post_meta_table} AS `postmeta` ON cart.post_id = postmeta.post_id AND postmeta.meta_key = '_item_division' AND postmeta.meta_value = '{$item_division}' " . "\n";

    return $join;
}
add_filter( 'usces_filter_orderlist_sql_jointable', 'get_custom_orderlist_sql_join', 10, 3);


/**
 * 受注リスト用のラジオボタンを設置
 */
function display_radio_for_orderlist()
{
    $shipped_select = '';
    $data_select = '';
    $all_select = '';

    if (!isset($_POST['item_division'])) {
        $shipped_select = ' checked="checked"';
    } elseif ($_POST['item_division'] == 'shipped') {
        $shipped_select = ' checked="checked"';
    } elseif ($_POST['item_division'] == 'data') {
        $data_select = ' checked="checked"';
    } elseif ($_POST['item_division'] == 'all') {
        $all_select = ' checked="checked"';
    }
?>
    <tr>
        <td class="label">商品区分</td>
        <td>
            <div>
                <label for="division_shipped"><input name="item_division" id="division_shipped" type="radio" value="shipped"<?php echo $shipped_select; ?> />&nbsp;<?php _e('Shipped', 'dlseller'); ?></label>&nbsp;&nbsp;
                <label for="division_data"><input name="item_division" id="division_data" type="radio" value="data"<?php echo $data_select; ?> />&nbsp;<?php _e('Data file', 'dlseller'); ?></label>&nbsp;&nbsp;
                <label for="division_all"><input name="item_division" id="division_all" type="radio" value="all"<?php echo $all_select; ?> />&nbsp;全て</label>
            </div>
        </td>
    </tr>
<?php
}


/**
 * 小計金額を取得(割引されている場合は割引額も追記する)
 *
 * @param array $cart_row 対象商品のカート情報
 * @return string 小計金額として表示する値
 */
function get_subtotal_with_discount($cart_row)
{
    global $usces;

    $original_unit_price = array_shift($usces->getItemPrice($cart_row['post_id']));
    $original_price = $original_unit_price * $cart_row['quantity'];
    $cart_price = $cart_row['price'] * $cart_row['quantity'];

    if ($original_price > $cart_price) {
        $difference_price = $original_price - $cart_price;
        $original_price = esc_html($usces->get_currency($original_price, true, false));
        $difference_price = esc_html($usces->get_currency($difference_price, true, false));
        $ret = $original_price;
        $ret .= '<br><font color="red">-' . $difference_price . '</font>';
    } else {
        $ret = usces_crform(($cart_price), true, false, 'return');
    }

    return $ret;
}


/**
 * 注文番号からカート内容をコピーする
 */
function page_cart_from_estimate()
{
    global $usces;

    $order_id = $_GET['reorder'];
    $order_data = $usces->get_order_data($order_id);
    if (!isset($order_data['mem_id'])) {
        wp_redirect(USCES_MEMBER_URL);
        exit;
    }

    $mem = $usces->get_member();
    if (!isset($mem['ID']) || $mem['ID'] !== $order_data['mem_id']) {
        wp_redirect(USCES_MEMBER_URL);
        exit;
    }

    $usces->cart->clear_cart();
    $order_cart_data = usces_get_ordercartdata($order_id);
    foreach ($order_cart_data as $cart_row) {
        $_POST = [
            'quant' => [
                $cart_row['post_id'] => [
                    $cart_row['sku_code'] => $cart_row['quantity'],
                ],
            ],
            'skuPrice' => [
                $cart_row['post_id'] => [
                    $cart_row['sku_code'] => $cart_row['price'],
                ],
            ],
            'inCart' => [
                $cart_row['post_id'] => [
                    $cart_row['sku_code'] => 'reorder',
                ],
            ],
        ];

        $usces->incart_check();
        if ($usces->error_message) {
            $usces->cart->clear_cart();
            break;
        }
        $usces->cart->inCart();

        unset($_POST['quant']);
        unset($_POST['skuPrice']);
        unset($_POST['inCart']);
    }
    if (is_null($usces->error_message) || empty($usces->error_message)) {
        $_SESSION['usces_reorder'] = $order_id;
    }

    $usces->page = 'cart';
    add_action('the_post', array($usces, 'action_cartFilter'));
    add_filter('yoast-ga-push-after-pageview', 'usces_trackPageview_cart');
    add_action('template_redirect', array($usces, 'template_redirect'));
}
usces_register_action('page_cart_from_estimate', 'get', 'reorder', null, 'page_cart_from_estimate');


/**
 * カートコピーによる注文のエラー処理
 *
 * @param array $mes エラーメッセージ
 * @param string $post_id 商品の投稿ID
 * @param string $sku_code 商品コード
 * @return string $mes|空文字列
 */
function catch_reorder_error($mes, $post_id, $sku_code)
{
    if (!isset($_GET['reorder']) || empty($mes)) {
        return $mes;
    }

    global $usces;

    $usces->error_message = '<font color="red">' . $mes[$post_id][$sku_code] . '</font>';

    return '';
}
add_filter( 'usces_filter_incart_check', 'catch_reorder_error', 10, 3);


/**
 * カートコピーのセッションデータを削除
 */
function delete_reorder_session()
{
    unset($_SESSION['usces_reorder']);
}
add_action('usces_action_member_logout', 'delete_reorder_session', 10);


/**
 * カートコピーのセッションデータを削除(再注文確定時)
 *
 * @param int $new_order_id 新規の注文番号
 */
function delete_reorder_session_from_purchase($new_order_id)
{
    if (!isset($_SESSION['usces_reorder']) || empty($_SESSION['usces_reorder'])) {
        return;
    }

    global $usces;

    $res = $usces->set_order_meta_value('reorder_id', $new_order_id, $_SESSION['usces_reorder']);
    if ($res) {
        delete_reorder_session();
    }
}
add_action('usces_post_reg_orderdata', 'delete_reorder_session_from_purchase', 10);


/**
 * カートコピーのセッションデータを削除(ログイン時)
 */
function delete_reorder_session_from_login()
{
    if (!isset($_SESSION['usces_reorder']) || empty($_SESSION['usces_reorder'])) {
        return;
    }

    global $usces;

    $reorder = $usces->get_order_data($_SESSION['usces_reorder']);
    $login_mem = $usces->get_member();
    if (!isset($reorder['mem_id']) || !isset($login_mem['ID'])) {
        delete_reorder_session();
    } else if ($reorder['mem_id'] !== $login_mem['ID']) {
        delete_reorder_session();
    }
}
add_action('usces_action_after_login', 'delete_reorder_session_from_login', 10);


/**
 * カートコピーによる注文が確定していたらコピー元の注文を非活性にする
 *
 * @param string $html 元々のhtml
 * @param array $umhs 注文情報
 * @return string $html 修正後のhtml
 */
function deactive_estimate_order($html, $umhs)
{
    global $usces;

    if (!preg_match('/noreceipt/', $umhs['order_status'])) {
        return $html;
    }

    $reorder_id = $usces->get_order_meta_value('reorder_id', $umhs['ID']);
    if (is_null($reorder_id)) {
        return $html;
    }

    $reorder = $usces->get_order_data($reorder_id);
    if (!isset($reorder['payment_name']) || empty($reorder['payment_name'])) {
        return $html;
    }

    $text = strpos($reorder['status'], 'noreceipt') === false ? '見積・支払済' : '再見積済';
    $colspan = usces_is_membersystem_point() ? 8 : 6;
    $html = '<tr><td class="retail" colspan="'.$colspan.'">';
    $html .= '<span class="deactive_order">' . $text . '</span>';
    $html .= '</td>';
    $html .= '<td class="retail"></td></tr>';

    return $html;
}
add_filter('usces_filter_member_history_header', 'deactive_estimate_order', 11, 2);


/**
 * 複数配送先設定後の数量で単価を再設定する
 * (公式バグ対策となる独自処理)
 *
 * @param string $serial シリアル
 * @param int $post_id 商品の投稿ID
 */
function set_price_from_msa_change_quantity($serial, $post_id)
{
    global $usces;

    $new_price = usces_get_gp_price($post_id, array_shift($usces->getItemPrice($post_id)), $_SESSION['usces_cart'][$serial]['quant']);
    $_SESSION['usces_cart'][$serial]['price'] = $new_price;

    $msacart = $usces->msacart->get_cart();
    foreach ($msacart as $group_id => $group) {
        $cart = $group['cart'];
        foreach ( $cart as $rows_id => $rows ) {
            if ($post_id === $rows['post_id']) {
                $_SESSION['msa_cart'][$group_id]['cart'][$rows_id]['price'] = $new_price;
            }
        }
    }
}


/**
 * 受注金額の加算対象を入金済みの注文にする
 *
 * @param string $period 対象期間
 */
function get_custom_order_amount( $period ) {
    global $wpdb;

    $datestr = substr(get_date_from_gmt(gmdate('Y-m-d H:i:s', time())), 0, 10);
    $yearstr = substr($datestr, 0, 4);
    $monthstr = substr($datestr, 5, 2);
    $daystr = substr($datestr, 8, 2);
    if($period == 'today') {
        $date = date('Y-m-d 00:00:00', current_time('timestamp'));
        $today = date('Y-m-d 23:59:59', current_time('timestamp'));
    }else if($period == 'thismonth') {
        $date = date('Y-m-01 00:00:00', current_time('timestamp'));
        $today = date('Y-m-d 23:59:59', current_time('timestamp'));
    }else if($period == 'lastyear') {
        $date = date('Y-m-01 00:00:00', mktime(0, 0, 0, (int)$monthstr, 1, (int)$yearstr-1));
        $today = date('Y-m-d 23:59:59', mktime(0, 0, 0, (int)$monthstr+1, 0, (int)$yearstr-1));
    }
    $order = $wpdb->prefix . 'usces_order';
    $order_meta = $wpdb->prefix . 'usces_order_meta';

    $query = $wpdb->prepare("SELECT
                                SUM(order_item_total_price) AS `price`,
                                SUM(order_usedpoint) AS `point`,
                                SUM(order_discount) AS `discount`,
                                SUM(order_shipping_charge) AS `shipping`,
                                SUM(order_cod_fee) AS `cod`,
                                SUM(order_tax) AS `tax`
                             FROM $order
                             INNER JOIN $order_meta ON $order_meta.order_id = $order.ID AND meta_key = %s
                             WHERE meta_value >= %s AND meta_value <= %s AND 0 = LOCATE(%s, order_status) AND 0 = LOCATE(%s, order_status)", 'receipted_date', $date, $today, 'cancel', 'estimate');
    $res = $wpdb->get_row($query, ARRAY_A);

    if( $res == NULL )
        return 0;
    else
        return $res['price'] - $res['point'] + $res['discount'] + $res['shipping'] + $res['cod'] + $res['tax'];
}
