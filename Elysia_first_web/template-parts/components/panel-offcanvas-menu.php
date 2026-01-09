<div id="offcanvas" class="ct-panel ct-header" data-behaviour="right-side" role="dialog" aria-label="<?php esc_attr_e('Offcanvas modal', 'elysia_first_web'); ?>" inert>
	<div class="ct-panel-inner">
		<div class="ct-panel-actions">
			<button class="ct-toggle-close" data-type="type-1" aria-label="<?php esc_attr_e('Close drawer', 'elysia_first_web'); ?>">
				<svg class="ct-icon" width="12" height="12" viewBox="0 0 15 15">
					<path
						d="M1 15a1 1 0 01-.71-.29 1 1 0 010-1.41l5.8-5.8-5.8-5.8A1 1 0 011.7.29l5.8 5.8 5.8-5.8a1 1 0 011.41 1.41l-5.8 5.8 5.8 5.8a1 1 0 01-1.41 1.41l-5.8-5.8-5.8 5.8A1 1 0 011 15z" />
				</svg>
			</button>
		</div>

		<div class="ct-panel-content" data-device="desktop">
			<div class="ct-panel-content-inner"></div>
		</div>

		<div class="ct-panel-content" data-device="mobile">
			<div class="ct-panel-content-inner">
				<nav class="mobile-menu menu-container has-submenu" data-id="mobile-menu" data-interaction="click" data-toggle-type="type-1" data-submenu-dots="yes" aria-label="<?php esc_attr_e('Main Menu', 'elysia_first_web'); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'container'      => '',
							'menu_id'        => 'menu-main-menu-1',
							'menu_class'     => '',
							'fallback_cb'    => false,
						)
					);
					?>
				</nav>
			</div>
		</div>
	</div>
</div>
