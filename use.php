<?php
/*
Template Name: ご利用方法
*/
?>
<?php get_header();?>
<section class="use__intro pages">
  <div class="section__inner tc">
    <?php echo breadcrumb_func();?>

    <h1>ご利用方法について</h1>

  </div><!-- ./section__inner -->
</section>


<div class="anchor__area">

<ul class="anchor__links">
  <li><a href="#desc01">お申し込み</a></li>
  <li><a href="#desc02">ログイン・ログアウト</a></li>
   <li><a href="#desc03">ご解約</a></li>
</ul>
</div>


 <div class="sub__tit" id="desc01">
    <h2 class="tc">サービスのお申し込み方法</h2>
  </div>


<section class="use__flow">
  <div class="section__inner">

  <ul class="flow__tab" id="tabs">
    <li class="tab__list is-active" data-tab="tab01">WEB上で申し込み</li>
    <li class="tab__list" data-tab="tab02">クリニックで申し込み</li>
  </ul>
 </div>
  <!-- ./section__inner -->


  <ul class="use__flow__content">

  <!--


  TAB content 01


  -->

    <li class="is-active tab__content" id="tab01">
        <div class="flow__steps">
          <div class="steps__inner">
             <div class="steps__bottom__content flex al-cent">
                <div class="thumb">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/use/flow01.jpg?6dbddba84c650683" alt="施術を受けるクリニックとプランを選択">
                </div><!-- ./thumb -->
                <div class="steps__text">
                  <h3 class="steps__tit"><span>STEP1.</span>フォームを入力</h3>
                  <p><a href="<?php echo home_url('/');?>" target="_blank">こちらのページ</a>の購入フォームから施術を受けたいクリニックと月額のプラン（30,000円、50,000円、70,000円、10,0000円）をそれぞれ選びます。</p>
                  <p>選択後『カートへ入れて注文へ進む』ボタンをクリックします。</p>
                </div><!-- .steps__text/ -->
             </div><!-- ./steps__bottom__content -->
          </div><!-- ./steps__inner -->
        </div><!-- ./floe__steps -->

        <div class="flow__steps">
         <div class="steps__inner">
             <div class="steps__bottom__content flex al-cent">
                <div class="thumb">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/use/flow02.jpg?6dbddba84c650683" alt="カートの中の内容を確認">
                </div><!-- ./thumb -->
                <div class="steps__text">
                  <h3 class="steps__tit"><span>STEP2.</span>カートの中の内容を確認</h3>
                  <p>カートの中の内容（直前の申し込みフォームで選択した内容）にお間違いがなければ、『次へ』ボタンをクリックします。</p>
                </div><!-- .steps__text/ -->
              </div><!-- ./steps__bottom__content -->
          </div><!-- ./steps__inner -->
        </div><!-- ./floe__steps -->
          <div class="flow__steps">
         <div class="steps__inner">
             <div class="steps__bottom__content flex al-cent">
                <div class="thumb">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/use/flow03.jpg?6dbddba84c650683" alt="会員登録">
                </div><!-- ./thumb -->
                <div class="steps__text">
                  <h3 class="steps__tit"><span>STEP3.</span>会員登録</h3>
                  <p><span class="fw600">※本サービスのご利用には会員登録が必須となります。</span></p>
                  <p>写真の画面が表示されましたら、『会員登録がお済みでない方はこちら▼』(写真の下部の入力フォーム)の氏名・メールアドレス・ログインパスワードなどの必要事項をご入力していただき、ご入力が完了いたしましたら『会員登録をして次へ』のボタンをクリックください。<br>会員登録されると自動的にログインされます。</p>
                    <p>※会員登録済みの方は、『会員の方はこちら▼』（写真上部のフォーム）よりメールアドレスとログインパスワードを入力して、『次へ』ボタンをクリックください。<br>また、事前にログインしている方はこの画面がスキップされ、お支払い情報のページに遷移します。</p>
                  <p>※<a href="<?php echo home_url('/');?>usces-member/?page=newmember" target="_blank">こちらのページ</a>にて、事前に会員登録することも可能です。</p>
                </div><!-- .steps__text/ -->
              </div><!-- ./steps__bottom__content -->
          </div><!-- ./steps__inner -->
        </div><!-- ./floe__steps -->
          <div class="flow__steps">
         <div class="steps__inner">
             <div class="steps__bottom__content flex al-cent">
                <div class="thumb">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/use/flow04.jpg?6dbddba84c650683" alt="会員登録">
                </div><!-- ./thumb -->
                <div class="steps__text">
                  <h3 class="steps__tit"><span>STEP4.</span>クレジットカード登録</h3>
                  <p>お支払い方法に関しては、<br>今回の定額サービスにおいては<span class="fw600">クレジットカード</span>のみとなりますので、<br class="pc">支払方法をクレジットカードに選択します。</p>
                  <p>備考欄に何かご記入したい点などがございましたら、<br>ご記入ください。</p>
                  <p>その後、『次へ』ボタンをクリックすると、クレジットカード情報の入力ボックスが表示されます。<br>そこで、カード情報を入力していただき、<br>カード情報を入力したらボックス内の『次へ』ボタンをクリックして、<br class="pc">お申し込み内容確認ページへ遷移します。</p>
                  <p>※<a href="<?php echo home_url('/');?>usces-member" target="_blank">マイページ</a>にて、<br>事前にクレジットカードを登録することも可能です。</p>
                </div><!-- .steps__text/ -->
              </div><!-- ./steps__bottom__content -->
          </div><!-- ./steps__inner -->
        </div><!-- ./floe__steps -->
         <div class="flow__steps">
         <div class="steps__inner">
             <div class="steps__bottom__content flex al-cent">
                <div class="thumb">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/use/flow05.jpg?6dbddba84c650683" alt="会員登録">
                </div><!-- ./thumb -->
                <div class="steps__text">
                  <h3 class="steps__tit"><span>STEP5.</span>お申し込み内容確認</h3>
                  <p>お申し込みした内容・会員登録の情報にお間違いがなければ、『上記内容で注文する』ボタンをクリックします。<br>内容に相違がある場合は、『戻る』ボタンをクリックして内容を修正してください。</p>
                </div><!-- .steps__text/ -->
              </div><!-- ./steps__bottom__content -->
          </div><!-- ./steps__inner -->
        </div><!-- ./floe__steps -->
         <div class="flow__steps">
         <div class="steps__inner">
             <div class="steps__bottom__content flex al-cent">
                <div class="thumb">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/use/flow06.jpg?6dbddba84c650683" alt="申し込み完了">
                </div><!-- ./thumb -->
                <div class="steps__text">
                  <h3 class="steps__tit"><span>STEP6.</span>申し込み完了</h3>
                  <p>クレジットカートの決済が終了したら、『ご注文内容の確認メール』が届きます。</p><p><span class="fw600">こちらのメールは、クリニックにご来院いただく際に、必要なものとなりますので、大切に保存するようにお願い致します。</span></p>
                  <p>また、クリニックの来院予約は<a href="https://connect-app.net/r_yag/reserve/top" target="_blank">こちらのサイト</a>から行うことが可能です。ご希望の日時・クリニックを選択してご予約くださいませ。</p>
                </div><!-- .steps__text/ -->
              </div><!-- ./steps__bottom__content -->
          </div><!-- ./steps__inner -->
        </div><!-- ./floe__steps -->
    </li>


  <!--


  TAB content 02


  -->

     <li class="tab__content second">
        <div class="flow__steps">
          <div class="steps__inner">
             <div class="steps__bottom__content flex al-cent">
                <div class="thumb">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/use/flow07.jpg?6dbddba84c650683" alt="施術を受けるクリニックとプランを選択">
                </div><!-- ./thumb -->
                <div class="steps__text">
                  <h3 class="steps__tit"><span>STEP1.</span>ご予約</h3>
                  <p>お電話もしくは、<a href="https://connect-app.net/r_yag/reserve/top" target="_blank">こちらのページ</a>の予約フォームからご希望の日時・クリニックを選択いただき、ご予約したクリニックへ来院ください。</p>
              <!--     <span><span class="fw600">※本サービスを実施していないクリニックもあります。ご予約の際はご注意ください。</span></span> -->
                </div><!-- .steps__text/ -->
             </div><!-- ./steps__bottom__content -->
          </div><!-- ./steps__inner -->
        </div><!-- ./floe__steps -->


         <div class="flow__steps">
          <div class="steps__inner">
             <div class="steps__bottom__content flex al-cent">
                <div class="thumb">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/use/flow08.jpg?6dbddba84c650683" alt="施術を受けるクリニックとプランを選択">
                </div><!-- ./thumb -->
                <div class="steps__text">
                  <h3 class="steps__tit"><span>STEP2.</span>ご来院</h3>
                  <p>ご来院した際に、受付スタッフに『継続課金サービス』の説明希望の旨を伝えて、スタッフから本サービスについての説明を受けます。<br>ご不明な点があれば、お気軽にご質問ください。</p>
                </div><!-- .steps__text/ -->
             </div><!-- ./steps__bottom__content -->
          </div><!-- ./steps__inner -->
        </div><!-- ./floe__steps -->

        <div class="flow__steps">
         <div class="steps__inner">
             <div class="steps__bottom__content flex al-cent">
                <div class="thumb">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/use/flow09.jpg?6dbddba84c650683" alt="カートの中の内容を確認">
                </div><!-- ./thumb -->
                <div class="steps__text">
                  <h3 class="steps__tit"><span>STEP3.</span>お申し込み</h3>
                  <p>本サービスの説明を受けて、本サービスのお申し込みを希望する方は<a href="<?php echo home_url('/');?>" target="_blank"><br>こちらのページ</a><!-- または、スタッフから提示されたQRコードを読み取って、 -->からお申し込みフォームへ進みます。</p>
                  <p><span class="fw600">以降の流れは、WEBでのお申し込みと同様になります。</span></p>
                </div><!-- .steps__text/ -->
              </div><!-- ./steps__bottom__content -->
          </div><!-- ./steps__inner -->
        </div><!-- ./floe__steps -->
    </li>
  </ul>
</section>

 <div class="sub__tit" id="desc02">
    <h2 class="tc">ログイン・ログアウト方法</h2>
  </div>
<section class="use__flow">
  <div class="section__inner">

  <ul class="flow__tab" id="tabs">
    <li class="tab__list is-active">ログイン方法</li>
    <li class="tab__list">ログアウト方法</li>
  </ul>
 </div>
  <!-- ./section__inner -->


  <ul class="use__flow__content">

  <!--


  TAB content 01


  -->

    <li class="is-active tab__content">
        <div class="flow__steps">
          <div class="steps__inner">
             <div class="steps__bottom__content flex al-cent">
                <div class="thumb">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/use/flow10.jpg?6dbddba84c650683" alt="ログインページへ移動">
                </div><!-- ./thumb -->
                <div class="steps__text">
                  <h3 class="steps__tit"><span>STEP1.</span>ログインページへ移動</h3>
                  <p>ページ上部またはページ下部内のログインの文字列（赤色の枠の中）をクリックしてログインページに移動します。</p><p><span class="fw600">※ログインしているときは『マイページ』という文字列になり、マイページへ移動します。</span></p>
                </div><!-- .steps__text/ -->
             </div><!-- ./steps__bottom__content -->
          </div><!-- ./steps__inner -->
        </div><!-- ./floe__steps -->

          <div class="flow__steps">
          <div class="steps__inner">
             <div class="steps__bottom__content flex al-cent">
                <div class="thumb">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/use/flow11.jpg?6dbddba84c650683" alt="施術を受けるクリニックとプランを選択">
                </div><!-- ./thumb -->
                <div class="steps__text">
                  <h3 class="steps__tit"><span>STEP2.</span>ログイン</h3>
                  <p>写真のページに移動したら、会員登録の際に入力した<br>メールアドレスとパスワードを入力してください。<br>入力が完了したら 『ログイン』ボタンをクリックしてください。</p>
                  <p>※パスワードを忘れてしまった方は、写真内の『パスワードをお忘れですか？』をクリックするか、<a href="<?php echo home_url('/');?>usces-member/?page=lostmemberpassword" target="_blank">こちら</a>をクリックして、遷移先のページにて登録したメールアドレスを入力してください。（ログインしているときは、マイページに遷移します。）</p>
                  <p><span class="fw600">※会員登録がお済みでない方は、<a href="<?php echo home_url('/');?>usces-member/?page=newmember" target="_blank">こちらのページ</a>で会員登録をお願い致します。</span></p>
                </div><!-- .steps__text/ -->
             </div><!-- ./steps__bottom__content -->
          </div><!-- ./steps__inner -->
        </div><!-- ./floe__steps -->


        <div class="flow__steps">
          <div class="steps__inner">
             <div class="steps__bottom__content flex al-cent">
                <div class="thumb">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/use/flow12.jpg?6dbddba84c650683" alt="施術を受けるクリニックとプランを選択">
                </div><!-- ./thumb -->
                <div class="steps__text">
                  <h3 class="steps__tit"><span>STEP3.</span>マイページへ移動</h3>
                  <p>ログインできたら、マイページの画面に遷移します。<br>こちらでは、登録情報の確認・変更、注文内容の確認・クレジットカードの登録が可能です。</p>
                </div><!-- .steps__text/ -->
             </div><!-- ./steps__bottom__content -->
          </div><!-- ./steps__inner -->
        </div><!-- ./floe__steps -->


    </li>


  <!--


  TAB content 02


  -->

     <li class="tab__content second">
        <div class="flow__steps">
          <div class="steps__inner">
             <div class="steps__bottom__content flex al-cent">
                <div class="thumb">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/use/flow13.jpg?6dbddba84c650683" alt="マイページへ移動">
                </div><!-- ./thumb -->
                <div class="steps__text">
                  <h3 class="steps__tit"><span>STEP1.</span>マイページへ移動</h3>
                  <p>ページ上部またはページ下部内のマイページの文字列（赤色の枠の中）をクリックしてマイページに移動します。</p><p><a href="<?php echo home_url('/');?>usces-member/" target="_blank">こちらから</a>でもマイページへ移動できます。</p>
              <!--     <span><span class="fw600">※本サービスを実施していないクリニックもあります。ご予約の際はご注意ください。</span></span> -->
                </div><!-- .steps__text/ -->
             </div><!-- ./steps__bottom__content -->
          </div><!-- ./steps__inner -->
        </div><!-- ./floe__steps -->

         <div class="flow__steps">
          <div class="steps__inner">
             <div class="steps__bottom__content flex al-cent">
                <div class="thumb">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/use/flow12.jpg?6dbddba84c650683" alt="マイページへ移動">
                </div><!-- ./thumb -->
                <div class="steps__text">
                  <h3 class="steps__tit"><span>STEP2.</span>ログアウトをクリック</h3>
                  <p>マイページに移動したら、<br>『ログアウト』（グレーのボタン）をクリックします。<br>クリックしたら、ログアウトされます。</p>
              <!--     <span><span class="fw600">※本サービスを実施していないクリニックもあります。ご予約の際はご注意ください。</span></span> -->
                </div><!-- .steps__text/ -->
             </div><!-- ./steps__bottom__content -->
          </div><!-- ./steps__inner -->
        </div><!-- ./floe__steps -->
    </li>
  </ul>



</section>


<div class="sub__tit" id="desc03">
    <h2 class="tc">解約方法</h2>
  </div><!-- ./sub__tit -->


<section class="use__flow">
  <ul class="use__flow__content">
    <li class="is-active tab__content">
        <div class="flow__steps">
          <div class="steps__inner">
             <div class="steps__bottom__content flex al-cent">
                <div class="thumb">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/use/flow14.jpg?6dbddba84c650683" alt="お問い合わせページへ移動">
                </div><!-- ./thumb -->
                <div class="steps__text">
                  <h3 class="steps__tit"><span>STEP1.</span>お問い合わせページへ移動</h3>
                  <p>ページ上部またはページ下部内のお問い合わせの文字列（赤色の枠の中）をクリックしてお問い合わせページに移動します。<br><?php if (usces_is_login()): ?><!-- ログインしているときはパラメータ付与--><a href="<?php home_url('/'); ?>contact?氏名=<?php usces_memberinfo('name1') ?><?php usces_memberinfo('name2');?>&お問い合わせの種類=ご解約&num=<?php usces_memberinfo('ID');?>&メールアドレス=<?php usces_memberinfo('mailaddress1');?>" target="_blank">
<!-- ログアウト時はエラーするのでパラメーター外す -->
        <?php else: ?>  <a href="<?php home_url('/'); ?>contact?お問い合わせの種類=ご解約" target="_blank">
 <?php endif; ?>こちらからでも</a>、お問い合わせページへ移動できます。</p>
                </div><!-- .steps__text/ -->
             </div><!-- ./steps__bottom__content -->
          </div><!-- ./steps__inner -->
        </div><!-- ./floe__steps -->

          <div class="flow__steps">
          <div class="steps__inner">
             <div class="steps__bottom__content flex al-cent">
                <div class="thumb">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/use/flow15.jpg?6dbddba84c650683" alt="フォームを入力">
                </div><!-- ./thumb -->
                <div class="steps__text">
                  <h3 class="steps__tit"><span>STEP2.</span>フォームにて必要事項を入力</h3>
                  <p>お問い合わせページに移動したら、写真の赤枠内の氏名・メールアドレス・会員番号を入力ください。<br>そして、黄色の枠内のお問い合わせの種類から『ご解約』を選択してください。</p><p><span class="fw600">※会員番号は、<a href="<?php echo home_url('/');?>usces-member/" target="_blank">マイページ</a>から確認できます。</span></p>

                  <p>入力が完了したら、フォーム下の『確認画面へ』のボタンをクリックしてください。<br>その後の確認画面で問題がなければ『送信する』ボタンをクリックして手続き完了です。</p><p>その後は、運営スタッフの方で、解約手続きを行います。</p>


                </div><!-- .steps__text/ -->
             </div><!-- ./steps__bottom__content -->
          </div><!-- ./steps__inner -->
        </div><!-- ./floe__steps -->

    </li>
</ul>

</div>
<!-- ./section__inner -->
</section>

<?php get_footer();?>
