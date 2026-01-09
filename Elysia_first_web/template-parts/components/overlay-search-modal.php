<div id="search-modal" class="ct-panel" data-behaviour="modal" role="dialog" aria-label="<?php esc_attr_e('Search modal', 'elysia_first_web'); ?>" inert>
	<div class="ct-panel-actions">
		<button class="ct-toggle-close" data-type="type-1" aria-label="<?php esc_attr_e('Close search modal', 'elysia_first_web'); ?>">
			<svg class="ct-icon" width="12" height="12" viewBox="0 0 15 15">
				<path
					d="M1 15a1 1 0 01-.71-.29 1 1 0 010-1.41l5.8-5.8-5.8-5.8A1 1 0 011.7.29l5.8 5.8 5.8-5.8a1 1 0 011.41 1.41l-5.8 5.8 5.8 5.8a1 1 0 01-1.41 1.41l-5.8-5.8-5.8 5.8A1 1 0 011 15z" />
			</svg>
		</button>
	</div>

	<div class="ct-panel-content">
		<form role="search" method="get" class="ct-search-form" action="<?php echo esc_url(home_url('/')); ?>" aria-haspopup="listbox" data-live-results="thumbs">
			<input
				type="search"
				class="modal-field"
				placeholder="<?php esc_attr_e('Search', 'elysia_first_web'); ?>"
				value="<?php echo esc_attr(get_search_query()); ?>"
				name="s"
				autocomplete="off"
				title="<?php esc_attr_e('Search for...', 'elysia_first_web'); ?>"
				aria-label="<?php esc_attr_e('Search for...', 'elysia_first_web'); ?>">

			<div class="ct-search-form-controls">
				<button type="submit" class="wp-element-button" data-button="icon" aria-label="<?php esc_attr_e('Search', 'elysia_first_web'); ?>">
					<svg class="ct-icon ct-search-button-content" aria-hidden="true" width="15" height="15" viewBox="0 0 15 15">
						<path
							d="M14.8,13.7L12,11c0.9-1.2,1.5-2.6,1.5-4.2c0-3.7-3-6.8-6.8-6.8S0,3,0,6.8s3,6.8,6.8,6.8c1.6,0,3.1-0.6,4.2-1.5l2.8,2.8c0.1,0.1,0.3,0.2,0.5,0.2s0.4-0.1,0.5-0.2C15.1,14.5,15.1,14,14.8,13.7z M1.5,6.8c0-2.9,2.4-5.2,5.2-5.2S12,3.9,12,6.8S9.6,12,6.8,12S1.5,9.6,1.5,6.8z" />
					</svg>

					<span class="ct-ajax-loader">
						<svg viewBox="0 0 24 24">
							<circle cx="12" cy="12" r="10" opacity="0.2" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" />
							<path d="m12,2c5.52,0,10,4.48,10,10" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2">
								<animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="0.6s" from="0 12 12" to="360 12 12" repeatCount="indefinite" />
							</path>
						</svg>
					</span>
				</button>

				<input type="hidden" name="ct_post_type" value="post:page:product">
				<input type="hidden" value="" class="ct-live-results-nonce">
			</div>

			<div class="screen-reader-text" aria-live="polite" role="status">
				<?php esc_html_e('No results', 'elysia_first_web'); ?>
			</div>
		</form>
	</div>
</div>