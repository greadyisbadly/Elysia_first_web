<div data-elementor-type="popup" data-elementor-id="306" class="elementor elementor-306 elementor-location-popup" data-elementor-settings="{&quot;entrance_animation&quot;:&quot;fadeIn&quot;,&quot;exit_animation&quot;:&quot;fadeIn&quot;,&quot;entrance_animation_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.6,&quot;sizes&quot;:[]},&quot;a11y_navigation&quot;:&quot;yes&quot;,&quot;timing&quot;:[]}" data-elementor-post-type="elementor_library">
    <section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-top-section elementor-element elementor-element-39edb463 elementor-section-items-stretch elementor-section-height-min-height elementor-section-boxed elementor-section-height-default" data-id="39edb463" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6263cc0c" data-id="6263cc0c" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-488627f8 elementor-widget elementor-widget-heading" data-id="488627f8" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h1 class="elementor-heading-title elementor-size-default">Get in touch with sunway</h1>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-a5168d0 elementor-widget elementor-widget-html" data-id="a5168d0" data-element_type="widget" data-widget_type="html.default">
                        <div class="elementor-widget-container">
                            <iframe aria-label="Sunway Contact Form" frameborder="0" allow="geolocation;" style="height:500px;width:99%;border:none;" src="https://formscn.zohopublic.com.cn/easyceotech/form/SunwayContactForm/formperma/pzNRX0a0vTLnd9POzzlI5FD2DQm4WX5_ZfrCo5BuWow"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    (function() {
        if (window.__elysiaPopupManagerInitialized) return;
        window.__elysiaPopupManagerInitialized = true;

        function base64UrlDecode(value) {
            if (!value) return '';
            var normalized = String(value).replace(/-/g, '+').replace(/_/g, '/');
            var pad = normalized.length % 4;
            if (pad) normalized += new Array(5 - pad).join('=');
            try {
                return atob(normalized);
            } catch (e) {
                return '';
            }
        }

        function getPopupIdFromElementorActionHref(href) {
            if (!href) return '';
            var decoded = href;
            try {
                decoded = decodeURIComponent(href);
            } catch (e) {}

            if (decoded.indexOf('#elementor-action') !== 0) return '';

            var afterHash = decoded.slice(1);
            var colonIndex = afterHash.indexOf(':');
            var queryPart = colonIndex >= 0 ? afterHash.slice(colonIndex + 1) : '';
            if (!queryPart) return '';

            var settingsMatch = queryPart.match(/(?:^|&)settings=([^&]+)/);
            if (settingsMatch && settingsMatch[1]) {
                var jsonStr = base64UrlDecode(settingsMatch[1]);
                if (jsonStr) {
                    try {
                        var obj = JSON.parse(jsonStr);
                        if (obj && obj.id) return String(obj.id);
                    } catch (e) {}
                }
            }

            var idMatch = queryPart.match(/(?:^|&)id=(\d+)/);
            if (idMatch && idMatch[1]) return String(idMatch[1]);

            return '';
        }

        function ensurePopupModal(id) {
            if (!id) return null;

            var existing = document.getElementById('elementor-popup-modal-' + id);
            if (existing) return existing;

            var template = document.querySelector('[data-elementor-type="popup"][data-elementor-id="' + id + '"]');
            if (!template) return null;

            var content = template.cloneNode(true);
            content.removeAttribute('data-elementor-type');
            content.removeAttribute('data-elementor-id');
            content.removeAttribute('data-elementor-settings');
            content.removeAttribute('data-elementor-post-type');

            var modal = document.createElement('div');
            modal.id = 'elementor-popup-modal-' + id;
            modal.className = 'elementor-popup-modal dialog-type-lightbox';
            modal.setAttribute('role', 'dialog');
            modal.setAttribute('aria-modal', 'true');
            modal.setAttribute('aria-hidden', 'true');
            modal.style.position = 'fixed';
            modal.style.inset = '0';
            modal.style.top = '0';
            modal.style.right = '0';
            modal.style.bottom = '0';
            modal.style.left = '0';
            modal.style.zIndex = '9999';
            modal.style.display = 'none';

            var widget = document.createElement('div');
            widget.className = 'dialog-widget-content';
            widget.style.position = 'relative';

            var message = document.createElement('div');
            message.className = 'dialog-message';
            message.appendChild(content);

            var closeBtn = document.createElement('button');
            closeBtn.type = 'button';
            closeBtn.className = 'dialog-close-button';
            closeBtn.setAttribute('aria-label', 'Close');
            closeBtn.style.position = 'absolute';
            closeBtn.style.top = '2%';
            closeBtn.style.right = '2%';
            closeBtn.style.left = 'auto';
            closeBtn.style.bottom = 'auto';
            closeBtn.style.display = 'flex';

            var icon = document.createElement('i');
            icon.className = 'eicon-close';
            icon.setAttribute('aria-hidden', 'true');
            closeBtn.appendChild(icon);

            widget.appendChild(message);
            widget.appendChild(closeBtn);
            modal.appendChild(widget);
            document.body.appendChild(modal);

            closeBtn.addEventListener('click', function() {
                closePopup(id);
            });

            modal.addEventListener('click', function(e) {
                if (e.target === modal) closePopup(id);
            });

            return modal;
        }

        var previousBodyOverflow = '';
        var openPopupId = '';

        function openPopup(id) {
            var modal = ensurePopupModal(id);
            if (!modal) return;

            openPopupId = id;
            previousBodyOverflow = document.body.style.overflow || '';
            document.body.style.overflow = 'hidden';

            modal.style.display = 'flex';
            modal.setAttribute('aria-hidden', 'false');

            var btn = modal.querySelector('.dialog-close-button');
            if (btn && btn.focus) {
                try {
                    btn.focus({
                        preventScroll: true
                    });
                } catch (e) {
                    btn.focus();
                }
            }
        }

        function closePopup(id) {
            var modal = document.getElementById('elementor-popup-modal-' + id);
            if (!modal) return;

            modal.style.display = 'none';
            modal.setAttribute('aria-hidden', 'true');

            document.body.style.overflow = previousBodyOverflow;
            previousBodyOverflow = '';
            openPopupId = '';
        }

        document.addEventListener('click', function(e) {
            var trigger = e.target.closest('[data-elysia-popup-open]');
            if (trigger) {
                var popupId = trigger.getAttribute('data-elysia-popup-open');
                if (popupId) {
                    e.preventDefault();
                    if (e.stopImmediatePropagation) e.stopImmediatePropagation();
                    e.stopPropagation();
                    openPopup(popupId);
                    return;
                }
            }

            var anchor = e.target.closest('a[href]');
            if (!anchor) return;

            var href = anchor.getAttribute('href') || '';
            if (href.indexOf('#elementor-action') === 0) {
                var popupIdFromHref = getPopupIdFromElementorActionHref(href);
                if (popupIdFromHref) {
                    e.preventDefault();
                    if (e.stopImmediatePropagation) e.stopImmediatePropagation();
                    e.stopPropagation();
                    openPopup(popupIdFromHref);
                }
            }
        }, true);

        document.addEventListener('keydown', function(e) {
            if (!openPopupId) return;
            if (e.key === 'Escape' || e.keyCode === 27) {
                closePopup(openPopupId);
            }
        });
    })();
</script>