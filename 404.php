

<?php get_header();?>


<div class="c-breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/" id="js-pages-head">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>


<div class="l-inner">


<div class="p-page-note-find">

<h1 class="tc p-page-note-find__ttl">準備中</h1>

<p class="tc p-page-note-find__desc">申し訳ございません。現在ページ作成中です。<br>
ページの公開まで今しばらくお待ちくださいませ。</p>

<a href="<?php echo home_url( '/' ); ?>" class="c-btn p-btn-404">
    トップページへ戻る
</a>

</div>



</div><!-- ./section__inner -->


<?php get_footer();?>
