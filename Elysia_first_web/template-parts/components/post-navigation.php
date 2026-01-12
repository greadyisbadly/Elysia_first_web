<?php

defined('ABSPATH') || exit;

$elysia_prev_label = 'Previous';
$elysia_next_label = 'Next';
if (function_exists('get_field')) {
    $field_prev = get_field('blog_detail_prev_label', 'option');
    if ($field_prev) {
        $elysia_prev_label = $field_prev;
    }
}

$elysia_prev_post = get_previous_post();
$elysia_next_post = get_next_post();

if (
    !$elysia_prev_post instanceof WP_Post
    && !$elysia_next_post instanceof WP_Post
) {
    return;
}

$elysia_prev_link = $elysia_prev_post instanceof WP_Post ? get_permalink($elysia_prev_post) : '';
$elysia_prev_title = $elysia_prev_post instanceof WP_Post ? get_the_title($elysia_prev_post) : '';

$elysia_next_link = $elysia_next_post instanceof WP_Post ? get_permalink($elysia_next_post) : '';
$elysia_next_title = $elysia_next_post instanceof WP_Post ? get_the_title($elysia_next_post) : '';
?>
<section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-top-section elementor-element elementor-element-14ac244 ignore-toc elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="14ac244" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-38a1d924" data-id="38a1d924" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-72c9480 elementor-widget elementor-widget-post-navigation" data-id="72c9480" data-element_type="widget" data-widget_type="post-navigation.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-post-navigation" role="navigation" aria-label="Post Navigation">
                            <div class="elementor-post-navigation__prev elementor-post-navigation__link">
                                <?php if ($elysia_prev_post instanceof WP_Post): ?>
                                    <a href="<?php echo esc_url($elysia_prev_link); ?>" rel="prev">
                                        <span class="post-navigation__arrow-wrapper post-navigation__arrow-prev">
                                            <i aria-hidden="true" class="fas fa-angle-left"></i>
                                            <span class="elementor-screen-only">Prev</span>
                                        </span>
                                        <span class="elementor-post-navigation__link__prev">
                                            <span class="post-navigation__prev--label">
                                                <?php echo esc_html($elysia_prev_label); ?>
                                            </span>
                                            <span class="post-navigation__prev--title">
                                                <?php echo esc_html($elysia_prev_title); ?>
                                            </span>
                                        </span>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div class="elementor-post-navigation__next elementor-post-navigation__link">
                                <?php if ($elysia_next_post instanceof WP_Post): ?>
                                    <a href="<?php echo esc_url($elysia_next_link); ?>" rel="next">
                                        <span class="elementor-post-navigation__link__next">
                                            <span class="post-navigation__next--label">
                                                <?php echo esc_html($elysia_next_label); ?>
                                            </span>
                                            <span class="post-navigation__next--title">
                                                <?php echo esc_html($elysia_next_title); ?>
                                            </span>
                                        </span>
                                        <span class="post-navigation__arrow-wrapper post-navigation__arrow-next">
                                            <i aria-hidden="true" class="fas fa-angle-right"></i>
                                            <span class="elementor-screen-only">Next</span>
                                        </span>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>