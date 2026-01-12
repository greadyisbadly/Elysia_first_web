<?php

/**
 * template-parts/components/share-buttons.php
 * Share Buttons Component
 */
 $elysia_share_url = get_permalink();
 $elysia_share_text = get_the_title();
 $elysia_encoded_url = rawurlencode($elysia_share_url);
 $elysia_encoded_text = rawurlencode($elysia_share_text);
 $elysia_facebook_url = 'https://www.facebook.com/sharer/sharer.php?u=' . $elysia_encoded_url;
 $elysia_pinterest_url = 'https://pinterest.com/pin/create/button/?url=' . $elysia_encoded_url . '&description=' . $elysia_encoded_text;
 $elysia_twitter_url = 'https://twitter.com/intent/tweet?url=' . $elysia_encoded_url . '&text=' . $elysia_encoded_text;
 $elysia_linkedin_url = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $elysia_encoded_url . '&title=' . $elysia_encoded_text;
 $elysia_whatsapp_url = 'https://api.whatsapp.com/send?text=' . $elysia_encoded_text . '%20' . $elysia_encoded_url;
 $elysia_email_url = 'mailto:?subject=' . $elysia_encoded_text . '&body=' . $elysia_encoded_url;
 ?>

<section data-particle_enable="false" data-particle-mobile-disabled="false"
    class="elementor-section elementor-inner-section elementor-element elementor-element-382be663 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="382be663" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5334fe41"
            data-id="5334fe41" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-6808db63 elementor-widget__width-auto elementor-hidden-mobile elementor-widget elementor-widget-heading"
                    data-id="6808db63" data-element_type="widget"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h6 class="elementor-heading-title elementor-size-default">Share
                            This Product</h6>
                    </div>
                </div>
                <div class="elementor-element elementor-element-4ff6a882 elementor-share-buttons--view-icon elementor-share-buttons--shape-circle elementor-widget__width-auto elementor-share-buttons--skin-gradient elementor-grid-0 elementor-share-buttons--color-official elementor-widget elementor-widget-share-buttons"
                    data-id="4ff6a882" data-element_type="widget"
                    data-widget_type="share-buttons.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-grid" role="list">
                            <div class="elementor-grid-item" role="listitem">
                                <a class="elementor-share-btn elementor-share-btn_facebook"
                                    href="<?php echo esc_url($elysia_facebook_url); ?>" target="_blank"
                                    rel="noopener noreferrer" aria-label="Share on facebook">
                                    <span class="elementor-share-btn__icon">
                                        <i class="fab fa-facebook" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="elementor-grid-item" role="listitem">
                                <a class="elementor-share-btn elementor-share-btn_pinterest"
                                    href="<?php echo esc_url($elysia_pinterest_url); ?>" target="_blank"
                                    rel="noopener noreferrer" aria-label="Share on pinterest">
                                    <span class="elementor-share-btn__icon">
                                        <i class="fab fa-pinterest" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="elementor-grid-item" role="listitem">
                                <a class="elementor-share-btn elementor-share-btn_twitter"
                                    href="<?php echo esc_url($elysia_twitter_url); ?>" target="_blank"
                                    rel="noopener noreferrer" aria-label="Share on twitter">
                                    <span class="elementor-share-btn__icon">
                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="elementor-grid-item" role="listitem">
                                <a class="elementor-share-btn elementor-share-btn_linkedin"
                                    href="<?php echo esc_url($elysia_linkedin_url); ?>" target="_blank"
                                    rel="noopener noreferrer" aria-label="Share on linkedin">
                                    <span class="elementor-share-btn__icon">
                                        <i class="fab fa-linkedin" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="elementor-grid-item" role="listitem">
                                <a class="elementor-share-btn elementor-share-btn_whatsapp"
                                    href="<?php echo esc_url($elysia_whatsapp_url); ?>" target="_blank"
                                    rel="noopener noreferrer" aria-label="Share on whatsapp">
                                    <span class="elementor-share-btn__icon">
                                        <i class="fab fa-whatsapp" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="elementor-grid-item" role="listitem">
                                <a class="elementor-share-btn elementor-share-btn_email"
                                    href="<?php echo esc_url($elysia_email_url); ?>"
                                    aria-label="Share on email">
                                    <span class="elementor-share-btn__icon">
                                        <i class="fas fa-envelope" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
