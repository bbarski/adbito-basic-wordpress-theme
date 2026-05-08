		<div class="product-content">
		<div id="product-image-1" class="product-image <?php echo esc_html($data['product_image_1_position']) == 'right' ? 'image-right' : 'image-left'; ?>">
			<img src="<?php echo esc_url($data['products_image_1']); ?>" alt="" />
        </div>
            <div class="product-text">
                <p><?php echo esc_html($data['products_p_1']); ?></p>
				<a class="product-cta-button" href="<?php echo esc_url($data['products_cta_1_url']); ?>">
                    <?php echo esc_html($data['products_cta_1_text']); ?>
                </a>
            </div>
        </div>