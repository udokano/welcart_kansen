
                        <!-- 関連商品出力 -->

                        <?php if(in_category("group")) :?>

                        <!-- 企業用のレコメンド カテゴリーがgroupのものだけ表示 -->

                    <h2 class="p-relation-ttl">関連アイテム</h2>

                    <ul class="p-relation">

                            <?php
                                    $args = array(
                                    'post_type' => 'post',
                                     'post_status' => 'publish',
                                    'category_name' => 'group',
                                     'post__not_in' => array($post->ID),
                                    'posts_per_page' => 3,
                                    'orderby' => 'rand',
                                    'order' => 'DESC',
                                    );
                                    $the_query = new WP_Query( $args );
                                    while ( $the_query->have_posts() ) : $the_query->the_post();
                                    ?>

                                    <!--ここにループの中の記述 -->
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

                                    <?php endwhile; wp_reset_postdata(); ?>

                        </ul>


                        <?php elseif(in_category("goto")) :?>


                        <!-- GOTOのものだけを表示 -->


                                       <h2 class="p-relation-ttl">関連アイテム</h2>

                    <ul class="p-relation">

                            <?php
                                    $args = array(
                                    'post_type' => 'post',
                                     'post_status' => 'publish',
                                    'category_name' => 'goto',
                                     'post__not_in' => array($post->ID),
                                    'posts_per_page' => 3,
                                    'orderby' => 'rand',
                                    'order' => 'DESC',
                                    );
                                    $the_query = new WP_Query( $args );
                                    while ( $the_query->have_posts() ) : $the_query->the_post();
                                    ?>

                                    <!--ここにループの中の記述 -->
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

                                    <?php endwhile; wp_reset_postdata(); ?>

                        </ul>

                        <?php elseif(in_category("visit")) :?>


                                       <h2 class="p-relation-ttl">関連アイテム</h2>

                    <ul class="p-relation">

                            <?php
                                    $args = array(
                                    'post_type' => 'post',
                                     'post_status' => 'publish',
                                    'category_name' => 'visit',
                                     'post__not_in' => array($post->ID),
                                    'posts_per_page' => 3,
                                    'orderby' => 'rand',
                                    'order' => 'DESC',
                                    );
                                    $the_query = new WP_Query( $args );
                                    while ( $the_query->have_posts() ) : $the_query->the_post();
                                    ?>

                                    <!--ここにループの中の記述 -->
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

                                    <?php endwhile; wp_reset_postdata(); ?>

                        </ul>

  <?php else: ?>
<!--


    一般用の商品レコメンド!!  企業用の商品は除外する！！
    企業用の商品のカテゴリーIDは　テスト環境 8 ローカル　19 本番 19
    GOTOのカテゴリーIDは、テスト　ローカル　59　本番　25
    来院用のカテゴリー ローカル 62 本番　28

 -->

                    <h2 class="p-relation-ttl">関連アイテム</h2>

                    <ul class="p-relation">

                            <?php
                                    $args = array(
                                    'post_type' => 'post',
                                     'post_status' => 'publish',
                                    'category_name' => 'item',
                                     'post__not_in' => array($post->ID),
                                    'category__not_in' => array(19,25,28),  //*** ここをちょくちょく変える  *** */
                                    'posts_per_page' => 3,
                                    'orderby' => 'rand',
                                    'order' => 'DESC',
                                    );
                                    $the_query = new WP_Query( $args );
                                    while ( $the_query->have_posts() ) : $the_query->the_post();
                                    ?>

                                    <!--ここにループの中の記述 -->
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

                                    <?php endwhile; wp_reset_postdata(); ?>

                        </ul>

                        <?php endif; ?>
