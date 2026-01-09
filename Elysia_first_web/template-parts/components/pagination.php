<?php
$elysia_query = null;

if (isset($GLOBALS['elysia_blog_query']) && $GLOBALS['elysia_blog_query'] instanceof WP_Query) {
    $elysia_query = $GLOBALS['elysia_blog_query'];
} elseif (isset($GLOBALS['elysia_product_pages_query']) && $GLOBALS['elysia_product_pages_query'] instanceof WP_Query) {
    $elysia_query = $GLOBALS['elysia_product_pages_query'];
} else {
    global $wp_query;
    if ($wp_query instanceof WP_Query) {
        $elysia_query = $wp_query;
    }
}

if (!$elysia_query instanceof WP_Query) {
    return;
}

$elysia_total_pages = (int) $elysia_query->max_num_pages;
if ($elysia_total_pages <= 1) {
    return;
}

$elysia_paged = 1;
if (get_query_var('paged')) {
    $elysia_paged = (int) get_query_var('paged');
} elseif (get_query_var('page')) {
    $elysia_paged = (int) get_query_var('page');
}
if ($elysia_paged < 1) {
    $elysia_paged = 1;
}

$elysia_links = paginate_links(
    array(
        'total'     => $elysia_total_pages,
        'current'   => $elysia_paged,
        'type'      => 'array',
        'mid_size'  => 1,
        'prev_next' => false,
    )
);

if (empty($elysia_links) || !is_array($elysia_links)) {
    return;
}

$elysia_next_url = '';
if ($elysia_paged < $elysia_total_pages) {
    $elysia_next_url = get_pagenum_link($elysia_paged + 1);
}
?>

<nav class="ct-pagination" data-pagination="simple">
    <div class="ct-hidden-sm">
        <?php foreach ($elysia_links as $elysia_link) {
            echo wp_kses_post($elysia_link);
        } ?>
    </div>
    <?php if ($elysia_next_url) : ?>
        <a class="next page-numbers" rel="next" href="<?php echo esc_url($elysia_next_url); ?>">
            <?php esc_html_e('Next', 'elysia_first_web'); ?>
            <svg width="9px" height="9px" viewBox="0 0 15 15" fill="currentColor">
                <path d="M4.1,15c0.2,0,0.4-0.1,0.6-0.2L11.4,8c0.3-0.3,0.3-0.8,0-1.1L4.8,0.2C4.5-0.1,4-0.1,3.7,0.2C3.4,0.5,3.4,1,3.7,1.3l6.1,6.1l-6.2,6.2c-0.3,0.3-0.3,0.8,0,1.1C3.7,14.9,3.9,15,4.1,15z" />
            </svg>
        </a>
    <?php endif; ?>
</nav>