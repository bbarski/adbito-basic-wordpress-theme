<?php $products_data = get_data_for_template('products'); ?>

<section class="products-section">
    <div class="products-container">
		
        <div class="product-content <?php echo esc_html($products_data['product_image_1_position']) == 'right' ? 'image-right' : 'image-left'; ?>">
			<div class="product-image ">
                <img src="<?php echo esc_url($products_data['products_image_1']); ?>" alt="" />
            </div>
            <div class="product-text">
                <p><?php echo esc_html($products_data['products_p_1']); ?></p>
				<a class="product-cta-button" href="<?php echo esc_url($products_data['products_cta_1_url']); ?>">
                    <?php echo esc_html($products_data['products_cta_1_text']); ?>
                </a>
            </div>

        </div>
		        <div class="product-content">
            <div class="product-text">
                <p><?php echo esc_html($products_data['products_p_2']); ?></p>
				<a class="product-cta-button" href="<?php echo esc_url($products_data['products_cta_2_url']); ?>">
                    <?php echo esc_html($products_data['products_cta_2_text']); ?>
                </a>
            </div>
            <div class="product-image">
                <img src="<?php echo esc_url($products_data['products_image_2']); ?>" alt="" />
            </div>
        </div>
    </div>
    <div class="scroll-down-indicator"></div>
</section>

