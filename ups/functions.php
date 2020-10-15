<?php


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
add_theme_support('post-thumbnails', array( 'post' ));

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
        $category = get_category_by_slug('group');
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

    }elseif( $usces->is_status('completion', $value) ){
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

    $html = '<div class="history-area">';
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


define('SHIPPING_FREE_PRICE', 50000);//ここに000000円以上の金額を明記

//カートのないの合計金額が30000円以上なら、送料無料
function ag_free_set_cart_fees_shipping_charge($shipping_charge, $carts, $entries)
{
    $shipping_free_price = SHIPPING_FREE_PRICE; //送料無料条件の金額
    $total_items_price = $entries['order']['total_items_price'];
    if( $total_items_price >= $shipping_free_price ){
        $shipping_charge = 0;
    }
    return $shipping_charge;
}
add_filter( 'usces_filter_set_cart_fees_shipping_charge', 'ag_free_set_cart_fees_shipping_charge', 10, 3);




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


    /* function add_page_to_admin_menu003_01()
    {
        add_menu_page('見積もりフォーム管理', '見積もりフォーム管理', 'edit_posts', 'admin.php?page=flamingo_inbound', '', 'dashicons-editor-table
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
        if ($current_user->ID == "3" ) {

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
}


/*

マネージャー用アカウント（スタッフに売り上げデータ追加したやつ）
--------------------------------------------*/

  global $current_user;
        get_currentuserinfo();
        if ($current_user->ID == "4" ) {

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