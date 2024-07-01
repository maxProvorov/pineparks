<?php if (have_rows('accordion_items')): ?>
    <div class="accordion">
        <div class="accordion__wrapper wrapper">
            <div class="accordion__left">
                <div class="accordion__subtitle">Interesting information</div>
                <div class="accordion__title"><?php the_field('accordion_title'); ?></div>
            </div>
            <div class="accordion__right">
                <?php while (have_rows('accordion_items')):
                    the_row(); ?>
                    <?php
                    $title = get_sub_field('title');
                    $content = get_sub_field('content');
                    ?>
                    <div class="accordion__item">
                        <div class="accordion__title">
                            <?php echo esc_html($title); ?>
                            <span class="accordion__icon">+</span>
                        </div>
                        <div class="accordion__content">
                            <?php echo $content; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php endif; ?>