<div class="hero">
    <?php
    $slides = get_field('slider');
    if ($slides): ?>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php foreach ($slides as $slide): ?>
                    <?php
                    $image = $slide['slider-image'];
                    $title = $slide['slider-title'];
                    $subtitle = $slide['slider-subtitle'];
                    ?>
                    <div class="swiper-slide" style="background-image: url('<?php echo esc_url($image['url']); ?>');">
                        <div class="slide-wrapper wrapper">
                            <div class="slide-content">
                                <h3 class="slide-content__title"><?php echo esc_html($title); ?></h3>
                                <p class="slide-content__subtitle"><?php echo esc_html($subtitle); ?></p>
                                <button class="hero__btn btn btn-white">Book a tour</button>
                                <div class="slide-content__add">
                                    <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/tick-circle.svg"
                                            alt="Иконка">100% specialized in Tanzania</p>
                                    <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/tick-circle.svg"
                                            alt="Иконка">World class safari guides</p>
                                    <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/tick-circle.svg"
                                            alt="Иконка">Private safaris</p>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>

                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
            <div class="swiper-pagination swiper-pagination-vertical"></div>
        </div>
    <?php endif; ?>
</div>