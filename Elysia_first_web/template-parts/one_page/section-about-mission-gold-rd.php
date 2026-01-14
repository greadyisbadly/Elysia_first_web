<?php
$elysia_mission_background_settings = '';
$elysia_mission_has_items = false;
$elysia_mission_has_background = false;
$elysia_mission_section_style = '';
$elysia_mission_first_background_url = '';

$elysia_mission_item_1_index = '';
$elysia_mission_item_1_title = '';
$elysia_mission_item_1_description = '';
$elysia_mission_item_1_animation = '';

$elysia_mission_item_2_index = '';
$elysia_mission_item_2_title = '';
$elysia_mission_item_2_description = '';
$elysia_mission_item_2_animation = '';

$elysia_mission_item_3_index = '';
$elysia_mission_item_3_title = '';
$elysia_mission_item_3_description = '';
$elysia_mission_item_3_animation = '';

$elysia_mission_fallback_items = array(
    array(
        'index' => '01',
        'title' => 'Our mission',
        'description' => '<p>Our company has been adhering to the &ldquo;integrity-based, talent for the root of products for life, service for the soul, win-win for the way&rdquo; management philosophy and &ldquo;dedicated, persistent, excellence, continuous improvement&rdquo; of the spirit of enterprise to serve the industry customers, in order to &ldquo;buy things become a sensory journey&rdquo; for the corporate mission.</p>',
        'animation' => 'zoomIn',
    ),
    array(
        'index' => '02',
        'title' => 'Our Gold',
        'description' => '<p>Sunway has always been committed to providing professional cold-forming machinery, equipment training, global installation, improve after-sales as one of the solutions, &ldquo;to provide cold forming machinery with system solutions to varies industry&rdquo; is the goal of Sunway constantly strive for.</p>',
        'animation' => 'zoomIn',
    ),
    array(
        'index' => '03',
        'title' => 'R &amp; D',
        'description' => '<p>Sunway has strong research and development and production capacity, mature production technology, strict quality control and advanced operation mode, so that we have been in the lead in the industry, won the reputation of customers.</p>',
        'animation' => 'zoomIn',
    ),
);

$elysia_mission_fallback_bg_url = function_exists('get_template_directory_uri')
    ? (get_template_directory_uri() . '/static/image/low-angle-view-modern-ceiling.jpg')
    : '';

if (function_exists('get_field')) {
    $items = get_field('about_mission_items');

    if (!is_array($items) || empty($items)) {
        $items = get_field('mission_items', 'option');
    }

    if (!is_array($items) || empty($items)) {
        $items = $elysia_mission_fallback_items;
    }

    if (is_array($items) && !empty($items)) {
        $elysia_mission_has_items = true;

        if (isset($items[0])) {
            $item = $items[0];
            if (isset($item['index']) && $item['index'] !== '') {
                $elysia_mission_item_1_index = $item['index'];
            }
            if (isset($item['title']) && $item['title'] !== '') {
                $elysia_mission_item_1_title = $item['title'];
            }
            if (isset($item['description']) && $item['description'] !== '') {
                $elysia_mission_item_1_description = $item['description'];
            }
            if (isset($item['animation']) && $item['animation'] !== '') {
                $elysia_mission_item_1_animation = $item['animation'];
            }
        }

        if (isset($items[1])) {
            $item = $items[1];
            if (isset($item['index']) && $item['index'] !== '') {
                $elysia_mission_item_2_index = $item['index'];
            }
            if (isset($item['title']) && $item['title'] !== '') {
                $elysia_mission_item_2_title = $item['title'];
            }
            if (isset($item['description']) && $item['description'] !== '') {
                $elysia_mission_item_2_description = $item['description'];
            }
            if (isset($item['animation']) && $item['animation'] !== '') {
                $elysia_mission_item_2_animation = $item['animation'];
            }
        }

        if (isset($items[2])) {
            $item = $items[2];
            if (isset($item['index']) && $item['index'] !== '') {
                $elysia_mission_item_3_index = $item['index'];
            }
            if (isset($item['title']) && $item['title'] !== '') {
                $elysia_mission_item_3_title = $item['title'];
            }
            if (isset($item['description']) && $item['description'] !== '') {
                $elysia_mission_item_3_description = $item['description'];
            }
            if (isset($item['animation']) && $item['animation'] !== '') {
                $elysia_mission_item_3_animation = $item['animation'];
            }
        }
    }

    if ($elysia_mission_item_1_index === '' && isset($elysia_mission_fallback_items[0]['index'])) {
        $elysia_mission_item_1_index = $elysia_mission_fallback_items[0]['index'];
    }
    if ($elysia_mission_item_1_title === '' && isset($elysia_mission_fallback_items[0]['title'])) {
        $elysia_mission_item_1_title = $elysia_mission_fallback_items[0]['title'];
    }
    if ($elysia_mission_item_1_description === '' && isset($elysia_mission_fallback_items[0]['description'])) {
        $elysia_mission_item_1_description = $elysia_mission_fallback_items[0]['description'];
    }
    if ($elysia_mission_item_1_animation === '' && isset($elysia_mission_fallback_items[0]['animation'])) {
        $elysia_mission_item_1_animation = $elysia_mission_fallback_items[0]['animation'];
    }

    if ($elysia_mission_item_2_index === '' && isset($elysia_mission_fallback_items[1]['index'])) {
        $elysia_mission_item_2_index = $elysia_mission_fallback_items[1]['index'];
    }
    if ($elysia_mission_item_2_title === '' && isset($elysia_mission_fallback_items[1]['title'])) {
        $elysia_mission_item_2_title = $elysia_mission_fallback_items[1]['title'];
    }
    if ($elysia_mission_item_2_description === '' && isset($elysia_mission_fallback_items[1]['description'])) {
        $elysia_mission_item_2_description = $elysia_mission_fallback_items[1]['description'];
    }
    if ($elysia_mission_item_2_animation === '' && isset($elysia_mission_fallback_items[1]['animation'])) {
        $elysia_mission_item_2_animation = $elysia_mission_fallback_items[1]['animation'];
    }

    if ($elysia_mission_item_3_index === '' && isset($elysia_mission_fallback_items[2]['index'])) {
        $elysia_mission_item_3_index = $elysia_mission_fallback_items[2]['index'];
    }
    if ($elysia_mission_item_3_title === '' && isset($elysia_mission_fallback_items[2]['title'])) {
        $elysia_mission_item_3_title = $elysia_mission_fallback_items[2]['title'];
    }
    if ($elysia_mission_item_3_description === '' && isset($elysia_mission_fallback_items[2]['description'])) {
        $elysia_mission_item_3_description = $elysia_mission_fallback_items[2]['description'];
    }
    if ($elysia_mission_item_3_animation === '' && isset($elysia_mission_fallback_items[2]['animation'])) {
        $elysia_mission_item_3_animation = $elysia_mission_fallback_items[2]['animation'];
    }

    $slides = get_field('about_mission_background_slides');

    if (!is_array($slides) || empty($slides)) {
        $slides = get_field('mission_background_slides', 'option');
    }

    if (!is_array($slides) || empty($slides)) {
        if ($elysia_mission_fallback_bg_url !== '') {
            $slides = array(
                array(
                    'image' => array(
                        'ID' => 0,
                        'url' => $elysia_mission_fallback_bg_url,
                    ),
                ),
            );
        }
    }

    if (is_array($slides) && !empty($slides)) {
        $gallery = array();
        foreach ($slides as $slide_row) {
            if (isset($slide_row['image']) && is_array($slide_row['image']) && !empty($slide_row['image']['url'])) {
                $image = $slide_row['image'];
                $gallery[] = array(
                    'id' => isset($image['ID']) ? (int) $image['ID'] : 0,
                    'url' => $image['url'],
                );
            }
        }

        if (!empty($gallery)) {
            $elysia_mission_has_background = true;
            if (!empty($gallery[0]['url'])) {
                $elysia_mission_first_background_url = (string) $gallery[0]['url'];
                $elysia_mission_section_style = 'background-image:url(' . esc_url($elysia_mission_first_background_url) . ');background-size:cover;background-position:center center;background-repeat:no-repeat;';
            }
            $background_array = array(
                'background_background' => 'slideshow',
                'background_slideshow_gallery' => $gallery,
                'background_slideshow_loop' => 'yes',
                'background_slideshow_slide_duration' => 5000,
                'background_slideshow_slide_transition' => 'fade',
                'background_slideshow_transition_duration' => 500,
            );
            if (function_exists('wp_json_encode')) {
                $elysia_mission_background_settings = wp_json_encode($background_array);
            } else {
                $elysia_mission_background_settings = json_encode($background_array);
            }
        }
    }
}

if (!$elysia_mission_has_items && !$elysia_mission_has_background) {
    return;
}
?>
<section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-top-section elementor-element elementor-element-165f95c0 ct-section-stretched elementor-section-height-min-height elementor-section-items-stretch elementor-section-content-bottom elementor-section-boxed elementor-section-height-default" data-id="165f95c0" data-element_type="section" data-settings="<?php echo esc_attr($elysia_mission_background_settings !== '' ? $elysia_mission_background_settings : '{}'); ?>" <?php echo $elysia_mission_section_style !== '' ? ' style="' . esc_attr($elysia_mission_section_style) . '"' : ''; ?>>
    <div class="elementor-container elementor-column-gap-extended">
        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-252b6837" data-id="252b6837" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-inner-section elementor-element elementor-element-ad38fbd box1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ad38fbd" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-48fac586" data-id="48fac586" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-1007caa4 elementor-widget elementor-widget-text-editor" data-id="1007caa4" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p><strong><?php echo esc_html($elysia_mission_item_1_index); ?></strong></p>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-6b0a46e8 elementor-widget elementor-widget-heading" data-id="6b0a46e8" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default"><?php echo esc_html($elysia_mission_item_1_title); ?></h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-117abb6e elementor-widget elementor-widget-text-editor hide-first<?php echo $elysia_mission_item_1_animation === 'zoomIn' ? ' animated-fast' : ''; ?>" data-id="117abb6e" data-element_type="widget" data-settings="<?php echo esc_attr($elysia_mission_item_1_animation === 'zoomIn' ? '{"_animation":"zoomIn"}' : '{}'); ?>" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <?php echo function_exists('wp_kses_post') ? wp_kses_post($elysia_mission_item_1_description) : esc_html($elysia_mission_item_1_description); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-5d1b642a" data-id="5d1b642a" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-inner-section elementor-element elementor-element-388df2fd box1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="388df2fd" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-231110a5" data-id="231110a5" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-2cae5324 elementor-widget elementor-widget-text-editor" data-id="2cae5324" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p><strong><?php echo esc_html($elysia_mission_item_2_index); ?></strong></p>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-70666f70 elementor-widget elementor-widget-heading" data-id="70666f70" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default"><?php echo esc_html($elysia_mission_item_2_title); ?></h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-49239f8 elementor-widget elementor-widget-text-editor hide-first<?php echo $elysia_mission_item_2_animation === 'zoomIn' ? ' animated-fast' : ''; ?>" data-id="49239f8" data-element_type="widget" data-settings="<?php echo esc_attr($elysia_mission_item_2_animation === 'zoomIn' ? '{"_animation":"zoomIn"}' : '{}'); ?>" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <?php echo function_exists('wp_kses_post') ? wp_kses_post($elysia_mission_item_2_description) : esc_html($elysia_mission_item_2_description); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-4ffcf4d6" data-id="4ffcf4d6" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-inner-section elementor-element elementor-element-79bc4863 box1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="79bc4863" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-4bbc7d9f" data-id="4bbc7d9f" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-299d4386 elementor-widget elementor-widget-text-editor" data-id="299d4386" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p><strong><?php echo esc_html($elysia_mission_item_3_index); ?></strong></p>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-7d49a8ba elementor-widget elementor-widget-heading" data-id="7d49a8ba" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default"><?php echo esc_html($elysia_mission_item_3_title); ?></h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-7e56b15b elementor-widget elementor-widget-text-editor hide-first<?php echo $elysia_mission_item_3_animation === 'zoomIn' ? ' animated-fast' : ''; ?>" data-id="7e56b15b" data-element_type="widget" data-settings="<?php echo esc_attr($elysia_mission_item_3_animation === 'zoomIn' ? '{"_animation":"zoomIn"}' : '{}'); ?>" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <?php echo function_exists('wp_kses_post') ? wp_kses_post($elysia_mission_item_3_description) : esc_html($elysia_mission_item_3_description); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>