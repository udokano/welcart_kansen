<li class="p-relation__item">
    <?php usces_the_item(); usces_have_skus(); ?>
    <a href="<?php the_permalink(); ?>" class="p-relation__link">
        <div class="p-relation__thumb"><?php usces_the_itemImage($number=0, $width=800, $height=800); ?></div>
        <div class="p-relation__bottom">
             <h2 class="p-relation__name"><?php usces_the_itemName(); ?></h2>
             <p class="p-relation__price"><?php usces_the_firstPrice(); ?><span class="yen">円</span><?php usces_guid_tax(); ?></p>
        </div>

    </a>
</li>
