<?php
/**
 * Template Name: 关于我们页面
 *
 * 关于我们页面模板（从 swforming/index-4.html 迁移）
 * 模块化拆分版本
 *
 * @package Elysia_First_Web
 */

get_header();
?>

<div class="entry-content is-layout-constrained">
	<div data-elementor-type="wp-page" data-elementor-id="188" class="elementor elementor-188" data-elementor-post-type="page">
		
		<?php 
		// Section 1: Page Hero Title
		get_template_part('template-parts/about_us/about-hero-title');
		?>

		<?php 
		// Section 2: About SUNWAY Introduction
		get_template_part('template-parts/about_us/about-intro');
		?>

		<?php 
		// Section 3: Our Capabilities
		get_template_part('template-parts/about_us/about-capabilities');
		?>

		<?php 
		// Section 4: Mission, Gold, R&D (Three Columns)
		get_template_part('template-parts/about_us/about-mission');
		?>

		<!-- WordPress Editor Content Area -->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php if ( get_the_content() ) : ?>
				<div class="elementor-element elementor-element-populated">
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-widget-container">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			<?php endif; ?>
		<?php endwhile; endif; ?>

	</div>
</div>

<?php
get_footer();
