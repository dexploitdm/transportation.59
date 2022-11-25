<div class="reviews">
    <div class="container">
        <div class="container-layout">
            <div class="reviews-block bg-lines">
                <div class="reviews-layout">
                    <div class="reviews-layout_block">
                        <h2 class="page-title">Отзывы</h2>
                        <div class="swiper reviewsSwiper">
                            <div class="swiper-wrapper">
                                <?php $banhome = new WP_Query(array('post_type' => 'banhome', 'order' => 'ASC')) ?>
                                <?php if ($banhome->have_posts() ): ?>
                                    <?php while ($banhome->have_posts()) : $banhome->the_post(); ?>
                                        <div class="swiper-slide">
                                            <div class="reviews-cover">
                                                <img src="<?php the_post_thumbnail_url(); ?>">
                                            </div>
                                            <div class="reviews-content">
                                                <div class="reviews-content_desc">
                                                    <?php the_content(); ?>
                                                </div>
                                                <div class="reviews-content_from">
                                                    <?php the_title(); ?>
                                                </div>

                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php wp_reset_query(); ?>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>