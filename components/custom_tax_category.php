<div style="margin-bottom: 50px;">

    Custom taxonomy

    <?php
    $terms = get_terms(
        array(
            'taxonomy'   => 'country',
            'hide_empty' => false,
            'hierarchical' => false,
            'orderby' => 'name',
            'order' => 'ASC',
        )
    );

    foreach ( $terms as $term ): ?>
        <h2><?php echo $term->name; ?></h2>

        <div class='partners-list'>
            <?php

                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 5,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'country',
                            'field' => 'name',
                            'terms' => $term->name
                        )
                    )
                );

            //the query
            $partnersList = new WP_Query( $args );

            //loop through query
            if($partnersList->have_posts()): ?>

                <?php while($partnersList->have_posts()): ?>
                    <?php $partnersList->the_post(); ?>

                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

                <?php endwhile; ?>


            <?php else: ?>
            <?php endif; ?>


          <?php  wp_reset_postdata(); ?>
        </div>

        <p><a href="<?php echo esc_url( get_term_link( $term ) ) ?>">Все записи из таксономии <?php echo $term->name; ?></a></p>

    <?php endforeach; ?>




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