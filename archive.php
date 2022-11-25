<?php get_header(); ?>
    <div>
        archive <br>



        <?php
        $category = get_queried_object();
        $current_cat_id = $category->term_id;
        $current_cat_name = $category->name;
        $current_cat_ID = $category->cat_ID;
        echo 'Name: ' . $current_cat_name . '<br>';
        echo 'ID: ' . $current_cat_ID;
        ?>

        <p><strong>Список дочерних:</strong></p>
        <?php
        $categories = get_categories( array(
            'taxonomy'     => 'category',
            'type'         => 'post',
            'orderby'      => 'name',
            'order'        => 'ASC',
            'parent'       => $current_cat_ID,
            'number'       => 0,
        ) );
        foreach( $categories as $categoty ): ?>

            <?php echo $categoty->name ?>


        <?php endforeach; wp_reset_postdata(); ?>


        <p><strong>Список записей из текущей категории:</strong></p>
        <?php
        # получаем записи из текущей категории
        $myposts = get_posts( array(
            'numberposts' => -1,
            'category'    => $current_cat_ID,
            'orderby'     => 'post_date',
            'order'       => 'DESC',
        ) );
        global $post;
        foreach($myposts as $post) : ?>

            <?php echo '<li><a href="'. get_permalink() .'">'. get_the_title() .'</a></li>'; ?>

        <?php endforeach; ?>

        <?php wp_reset_postdata(); ?>

    </div>
<?php get_footer(); ?>