<?php get_header(); ?>
    <div style="margin: 100px 0;">
        singular <br>

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>


                <h2>Инфо</h2>
                <?php the_title(); ?><br>
                <?php the_ID(); ?><br>
                <?php the_permalink(); ?><br>
                <?php the_content(); ?><br>


                <h2>Изображение</h2>
                <div class="img-box">
                    <style>
                        .img-box img {max-width: 200px;     height: auto;}
                    </style>
                    <?php the_post_thumbnail('full'); ?>
                    <?php the_post_thumbnail_url('full'); ?>
                </div>
                <a href="<?php the_post_thumbnail_url('full'); ?>">
                    <?php echo the_post_thumbnail('thumbnail'); ?>
                </a>



                <h2>Рубрики / категории</h2>
                <?php the_category(); ?>
<!--                --><?php //$category = get_the_category();
//                print_r($category); ?>
                <br>

                <h2>Метки / теги</h2>
                <?php the_tags('<p>Метки: ', ', ', '</p>'); ?>
                <br>


                <h2>Вывод записей из той же категории</h2>
                <?php
                $category = get_the_category();
                $query = new WP_Query(
                    array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 6,
                        'cat' => $category[0]->cat_ID,
                        'post__not_in' => array(get_the_ID()),
                        'orderby' => 'date',
                        'order' => 'DESC'
                    )
                );

                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        ?>

                        <div class="post-item">
                            Ссылка и название записи
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>

                            Картинка
                            <?php the_post_thumbnail(array(200 ,200)); ?>

                            Превью
                            <?php echo get_field('имя_поля'); ?>
                        </div>

                        <?php
                    }
                    wp_reset_postdata();
                }
                ?>

            <?php endwhile; ?>
        <?php endif; ?>

    </div>
<?php get_footer(); ?>