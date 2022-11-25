<div class="head-box" style="background-image: url(<?php the_post_thumbnail_url(); ?>); margin-bottom: 50px;">
    <?php $banhome = new WP_Query(array('post_type' => 'banhome', 'order' => 'ASC')) ?>
    <?php if ($banhome->have_posts() ): ?>
    <?php while ($banhome->have_posts()) : $banhome->the_post(); ?>
        <div class="head-cont box">
            <?php the_content(); ?>
            <div class="head-cont-title"><?php echo  get_field('titlebantwo'); ?></div>
            <div class="head-cont-desc"><?php echo  get_field('banmini_content'); ?></div>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_query(); ?>

</div>

<?php //the_field('название_поля'); ?>
<?php //echo get_field('название_поля'); ?>