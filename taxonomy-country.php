<?php get_header(); ?>
    <div>
        country

        <?php
        $terms = get_terms(array(
            'taxonomy'     => array('country'),
            'orderby'      => 'name',
            'order'        => 'ASC',
            'hierarchical' => false,
            'hide_empty'  => 0,
            'parent' => get_queried_object_id() // Возвращает ID текущей категории
        ));
        ?>

        <?php foreach ($terms as $term): ?>
            <a href="<?= get_term_link($term->term_id, 'country'); ?>">

                <div class="catalog-box__info">
                    <?= $term->name; ?>
                    <?= str_replace(',', ', ', $term->description); ?>
                </div>
            </a>

            <!--                ВЫВОД Дочерних категорий-->

        <?php endforeach; ?>
        <?php  wp_reset_postdata(); ?>






        <!--                ВЫВОД Записей текущей категории -->
        <?php
        global $wp_query;
        $term = get_term( get_queried_object_id(), 'country' );
        $wp_query = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 5,
            'tax_query' => array(
                array(
                    'taxonomy' => 'country',
                    'field' => 'name',
                    'terms' => $term->name
                )
            )
        )); ?>


<!--        <pre>--><?php //print_r($wp_query) ?><!--</pre>-->


        <?php if ( $wp_query->have_posts() ) : ?>

            <ul>

                <!-- the loop -->
                <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile; ?>
                <!-- end of the loop -->

            </ul>

            <?php wp_reset_query(); ?>

        <?php else : ?>
            <p><?php _e( 'Извините, нет записей, соответствуюших Вашему запросу.' ); ?></p>
        <?php endif; ?>

    </div>
<?php get_footer(); ?>