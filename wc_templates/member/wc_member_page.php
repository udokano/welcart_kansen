
<?php
get_header();
?>

<!-- 振込完了モーダル -->


 <div class="c-modal js-modal-form">
      <div class="c-modal__bg js-modal-close"></div>
      <div class="c-modal__inner p-payment-modal">
       <?php echo do_shortcode('[contact-form-7 id="570" title="振込完了フォーム"]'); ?>
      </div>

      <!--  <?php echo do_shortcode('[mwform_formkey key="1354"]'); ?> -->
      <!-- ./c-modal__inner -->
    </div>
    <!-- ./c-modal -->


<script>
jQuery(function(){
//会員情報編集画面に、『氏名』『氏名カナ』『TEL』の値を飛ばす
	const tel__num = $("#hidden__tel").val();
	const name__value01 = $("#hidden__name01").val();
	const name__value02 = $("#hidden__name02").val();
	const name__value03 = $("#hidden__name03").val();
	const name__value04 = $("#hidden__name04").val();
	$("#tel").val(tel__num);
	$("#name1").val(name__value01);
	$("#name2").val(name__value02);
	$("#name3").val(name__value03);
	$("#name4").val(name__value04);

});
</script>

<?php
global $usces;

$member_id = usces_memberinfo('ID', 'return');

$value = $usces->get_member_meta_value( 'csmb_company', $member_id );

?>

<div id="content" class="two-column">
<input type="hidden" id="hidden__company" value="<?php echo $value ;?>">
<input type="hidden" id="hidden__tel" value="<?php usces_memberinfo("tel");?>">
		<input type="hidden" id="hidden__name__full" value="<?php usces_the_member_name();?>">
			<input type="hidden" id="hidden__mail" value="<?php usces_memberinfo('mailaddress1');?>">
		<input type="hidden" id="hidden__name01" value="<?php usces_memberinfo("name1");?>">
		<input type="hidden" id="hidden__name02" value="<?php usces_memberinfo("name2");?>">
		<input type="hidden" id="hidden__name03" value="<?php usces_memberinfo("name3");?>">
		<input type="hidden" id="hidden__name04" value="<?php usces_memberinfo("name4");?>">
		<input type="hidden" id="hidden__pass01" value="<?php usces_memberinfo("password1");?>">
  <div class="catbox">
    <section class="cart__area">
      <div class="section__inner">
        <?php if (have_posts()) : usces_remove_filter(); ?>
        <div class="post" id="wc_<?php usces_page_name(); ?>">
          <h1 class="member_page_title tc">
           <!--  <?php _e('Membership', 'usces'); ?> -->会員情報
          </h1>
          <div class="entry">
            <div id="memberpages">
              <div class="whitebox">
                <div id="memberinfo">
                  <table id="member__info__table">
                  <tr>
                         <th class="member__num"><?php _e('Strated date', 'usces'); ?></th>
                      <td class="member__num"><?php usces_memberinfo('registered'); ?></td>
                  </tr>
                    <tr>
                      <th scope="row"><?php _e('member number', 'usces'); ?></th>
                      <td class="num"><?php usces_memberinfo('ID'); ?></td>
                      <!-- 	<td rowspan="3">&nbsp;</td> -->

                    </tr>
                    <tr>
                      <th scope="row">ご担当者お名前</th>
                      <td><?php esc_html_e(sprintf(_x('%s', 'honorific', 'usces'), usces_localized_name(usces_memberinfo('name1', 'return'), usces_memberinfo('name2', 'return'), 'return'))); ?></td>

                    </tr>

                    <tr>
                      <th scope="row"><?php _e('e-mail adress', 'usces'); ?></th>
                      <td><?php usces_memberinfo('mailaddress1'); ?></td>

                      <?php echo apply_filters('usces_filter_memberinfo_page_reserve', $html_reserve, usces_memberinfo('ID', 'return')); ?>
                       </tr>

                        <tr>
                      <th scope="row">ご住所</th>
                      <td>〒<?php usces_memberinfo("zipcode"); ?><br>
                        <?php usces_memberinfo("pref"); ?><br>
                      <?php usces_memberinfo("address1"); ?><br>
                      <?php usces_memberinfo("address2"); ?>
                      </td>
                       </tr>
                  </table>
                  <ul class="member_submenu">
                    <li class="edit_member"><a href="#edit">
                     <!--  <?php _e('To member information editing', 'usces'); ?> -->会員情報編集
                      </a></li>
                    <?php do_action('usces_action_member_submenu_list'); ?>
                    <li class="logout_member">
                      <?php usces_loginout(); ?>
                    </li>
                  </ul>
                  <div class="header_explanation">
                    <?php do_action('usces_action_memberinfo_page_header'); ?>
                  </div>
                  <h3>
                    <?php _e('Purchase history', 'usces'); ?>
                  </h3>
                  <!-- 	<div class="currency_code"><?php _e('Currency', 'usces'); ?> : <?php usces_crcode(); ?></div> -->
                  <?php usces_member_history(); ?>
                  <h3 id="edit"><!-- <a name="edit"></a> -->
                    <?php _e('Member information editing', 'usces'); ?>
                  </h3>
                  <div class="error_message">
                    <?php usces_error_message(); ?>
                  </div>
                  <form action="<?php usces_url('member'); ?>#edit" method="post" onKeyDown="if (event.keyCode == 13) {return false;}" id="my__page__form">
                    <table class="customer_form" id="customer_form">
                      <?php uesces_addressform('member', usces_memberinfo(null), 'echo'); ?>
                      <tr>
                        <th scope="row"><?php _e('e-mail adress', 'usces'); ?></th>
                        <td colspan="2"><input name="member[mailaddress1]" id="mailaddress1" class="w50" type="text" value="<?php usces_memberinfo('mailaddress1'); ?>" /></td>
                      </tr>
                      <tr>
                        <th scope="row"><?php _e('password', 'usces'); ?></th>
                        <td colspan="2"><input class="hidden" value=" " />
                          <input name="member[password1]" class="w50" id="password1" type="password" value="<?php usces_memberinfo('password1'); ?>" autocomplete="off" />
                          <?php _e('Leave it blank in case of no change.', 'usces'); ?></td>
                      </tr>
                      <tr>
                        <th scope="row"><?php _e('Password (confirm)', 'usces'); ?></th>
                        <td colspan="2"><input name="member[password2]" id="password2" class="w50" type="password" value="<?php usces_memberinfo('password2'); ?>" />
                          <?php _e('Leave it blank in case of no change.', 'usces'); ?></td>
                      </tr>
                    </table>
                    <input name="member_regmode" type="hidden" value="editmemberform" />
                    <div class="send">
                      <input name="top" type="button" class="back__to__btn" value="<?php _e('Back to the top page.', 'usces'); ?>" onclick="location.href='<?php echo home_url(); ?>'" />
                      <input name="editmember" type="submit" value="<?php _e('update it', 'usces'); ?>" />
                      <input name="deletemember" type="submit" class="reave__btn" value="<?php _e('delete it', 'usces'); ?>" onclick="return confirm('<?php _e('All information about the member is deleted. Are you all right?', 'usces'); ?>');" />
                    </div>
                    <?php do_action('usces_action_memberinfo_page_inform'); ?>
                  </form>
                  <div class="footer_explanation">
                    <?php do_action('usces_action_memberinfo_page_footer'); ?>
                  </div>
                </div>
                <!-- end of memberinfo -->
              </div>
              <!-- end of whitebox -->
            </div>
            <!-- end of memberpages -->

          </div>
          <!-- end of entry -->
        </div>
        <!-- end of post -->
        <?php else: ?>
        <p>
          <?php _e('Sorry, no posts matched your criteria.', 'usces'); ?>
        </p>
        <?php endif; ?>
      </div>
      <!-- ./section__inner -->
    </section>
  </div>
  <!-- end of catbox -->
</div>
<!-- end of content -->


<script>

$('#js-payment-btn').click(function () {
  if (!confirm('お振込完了の通知を送りますか？')) {
    /* キャンセルの時の処理 */
    return false;
  } else {
    /*　OKの時の処理 */
    return true;
  }
});

var wpcf7Elm = document.querySelector('.wpcf7');

wpcf7Elm.addEventListener('wpcf7mailsent', function (event) {
  //alert("Fire!");
  jQuery(".wpcf7-response-output").css("display", "block");

  $(function () {
    setTimeout(function () {
      jQuery(".js-modal-form").removeClass("is-modal-open");
      jQuery("body").removeClass("is-of-hidden");
    }, 2000);
  });

}, false);





</script>




<?php get_footer(); ?>
