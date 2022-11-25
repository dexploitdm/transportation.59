<div style="margin-bottom: 50px;">
    category

    <?php
    $categories = get_categories( array(
        'taxonomy'     => 'category',
        'type'         => 'post',
        'orderby'      => 'name',
        'order'        => 'ASC',
        'number'       => 0,
    ) );
    foreach( $categories as $categoty ): ?>

        <?php echo $categoty->name ?>

        <?php
        # получаем записи из рубрики
        $myposts = get_posts( array(
            'numberposts' => -1,
            'category'    => $categoty->cat_ID,
            'orderby'     => 'post_date',
            'order'       => 'DESC',
        ) );
        global $post;
        foreach($myposts as $post) : ?>

            <?php echo '<li><a href="'. get_permalink() .'">'. get_the_title() .'</a></li>'; ?>

        <?php endforeach; ?>

    <?php endforeach; wp_reset_postdata(); ?>

</div>


<!--$categoty->term_id // id термина таксономии-->
<!--$categoty->name // Название категории-->
<!--$categoty->slug // Слаг-->
<!--$categoty->term_taxonomy_id-->
<!--$categoty->taxonomy // category-->
<!--$categoty->description // Описание рубрики-->
<!--$categoty->parent // Родитель-->
<!--$categoty->count // Количество записей-->
<!--$categoty->cat_ID // ID рубрики-->
<!--$categoty->category_count // Количество категорий-->
<!--$categoty->category_description // Описание рубрики-->
<!--$categoty->cat_name (Рубрика 1) // Название категории-->
<!--$categoty->category_nicename (rubrika-1) // Никнэйм категории-->
<!--$categoty->category_parent (0) // ID родительской категории-->
<!--get_category_link( $category->term_id );-->