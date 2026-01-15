<?php

defined('ABSPATH') || exit;

$elysia_video_url = '';
$elysia_video_aspect_ratio = '';

if (function_exists('get_field')) {
    $elysia_video_url = (string) get_field('solution_detail_sidebar_video_url');
    $elysia_video_aspect_ratio = (string) get_field('solution_detail_sidebar_video_aspect_ratio');
}

if (!$elysia_video_url) {
    $elysia_context_id = get_queried_object_id();
    if ($elysia_context_id && function_exists('get_field')) {
        $fallback_url = (string) get_field('solution_sidebar_video_url', $elysia_context_id);
        $fallback_ratio = (string) get_field('solution_sidebar_video_aspect_ratio', $elysia_context_id);
        if ($fallback_url) {
            $elysia_video_url = $fallback_url;
        }
        if ($fallback_ratio) {
            $elysia_video_aspect_ratio = $fallback_ratio;
        }
    }
}

if (!$elysia_video_url && function_exists('get_field')) {
    $default_url = (string) get_field('solution_default_sidebar_video_url', 'option');
    $default_ratio = (string) get_field('solution_default_sidebar_video_aspect_ratio', 'option');
    if ($default_url) {
        $elysia_video_url = $default_url;
    }
    if ($default_ratio) {
        $elysia_video_aspect_ratio = $default_ratio;
    }
}

if (!$elysia_video_aspect_ratio) {
    $elysia_video_aspect_ratio = '16/9';
}

$elysia_video_embed_url = '';
$elysia_video_is_youtube = false;
if ($elysia_video_url) {
    if (function_exists('elysia_get_youtube_embed_url')) {
        $converted = elysia_get_youtube_embed_url($elysia_video_url);
        if ($converted !== $elysia_video_url) {
            $elysia_video_embed_url = $converted;
            $elysia_video_is_youtube = true;
        } else {
            $elysia_video_embed_url = $elysia_video_url;
        }
    } else {
        $elysia_video_embed_url = $elysia_video_url;
    }
}

if ($elysia_video_embed_url) :
    $elysia_cover_image_url = get_template_directory_uri() . '/static/image/f15e9f56-e802-41c0-a541-33339e5a6f9a-1.jpg';
    if (function_exists('get_field')) {
        $elysia_cover_image_id = get_field('solution_detail_sidebar_video_cover_image');
        if (!$elysia_cover_image_id) {
            $elysia_context_id = get_queried_object_id();
            if ($elysia_context_id) {
                $elysia_cover_image_id = get_field('solution_sidebar_video_cover_image', $elysia_context_id);
            }
        }
        if (!$elysia_cover_image_id && function_exists('get_field')) {
            $elysia_cover_image_id = get_field('solution_default_sidebar_video_cover_image', 'option');
        }
        if ($elysia_cover_image_id) {
            if (is_array($elysia_cover_image_id)) {
                $elysia_cover_image_url = isset($elysia_cover_image_id['url']) ? $elysia_cover_image_id['url'] : wp_get_attachment_image_url($elysia_cover_image_id, 'full');
            } else {
                $elysia_cover_image_url = wp_get_attachment_image_url($elysia_cover_image_id, 'full');
            }
        }
    }
    ?>
    <div class="elementor-element elementor-element-faebde6 elementor-widget elementor-widget-image" data-id="faebde6" data-element_type="widget" data-widget_type="image.default">
        <div class="elementor-widget-container">
            <a class="elysia-video-trigger" href="#" data-video-url="<?php echo esc_attr($elysia_video_embed_url); ?>" data-video-is-html5="0">
                <img src="<?php echo esc_url($elysia_cover_image_url); ?>" 
                     alt="<?php echo esc_attr__('Solution Video', 'elysia_first_web'); ?>"
                     class="elysia-video-cover" 
                     loading="lazy" />
                <span class="elysia-video-play-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M8 5v14l11-7z"/>
                    </svg>
                </span>
            </a>
        </div>
    </div>
<?php endif; ?>
