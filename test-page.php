<?php
/*
Template Name: Тестовый макет
Template Post Type: post, page, product
*/
get_header(); ?>

    test page

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <?php the_title(); ?>

        <hr>

        <?php the_ID(); ?><br>
        <?php the_permalink(); ?><br>
        <?php the_content(); ?><br>
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

        <?php the_category(); ?>


    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>