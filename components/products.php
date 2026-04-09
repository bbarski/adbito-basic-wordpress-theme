<?php $data = get_data_for_template('products'); ?>

<section class="products-section">
    <div class="products-container">
	<h2 class="section-title"><?php echo esc_html($data['products_section_title']); ?></h2>
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
		<div class="product-content">
		<div id="product-image-2" class="product-image <?php echo esc_html($data['product_image_2_position']) == 'right' ? 'image-right' : 'image-left'; ?>">
                <img src="<?php echo esc_url($data['products_image_2']); ?>" alt="" />
        </div>
            <div class="product-text">
                <p><?php echo esc_html($data['products_p_2']); ?></p>
				<a class="product-cta-button" href="<?php echo esc_url($data['products_cta_2_url']); ?>">
                    <?php echo esc_html($data['products_cta_2_text']); ?>
                </a>
            </div>
        </div>
		
				<div class="product-content">
		<div id="product-image-3" class="product-image <?php echo esc_html($data['product_image_3_position']) == 'right' ? 'image-right' : 'image-left'; ?>">
			<img src="<?php echo esc_url($data['products_image_3']); ?>" alt="" />
        </div>
            <div class="product-text">
                <p><?php echo esc_html($data['products_p_3']); ?></p>
				<a class="product-cta-button" href="<?php echo esc_url($data['products_cta_3_url']); ?>">
                    <?php echo esc_html($data['products_cta_3_text']); ?>
                </a>
            </div>
        </div>
		<div class="product-content">
		<div id="product-image-4" class="product-image <?php echo esc_html($data['product_image_4_position']) == 'right' ? 'image-right' : 'image-left'; ?>">
                <img src="<?php echo esc_url($data['products_image_4']); ?>" alt="" />
        </div>
            <div class="product-text">
                <p><?php echo esc_html($data['products_p_4']); ?></p>
				<a class="product-cta-button" href="<?php echo esc_url($data['products_cta_4_url']); ?>">
                    <?php echo esc_html($data['products_cta_4_text']); ?>
                </a>
            </div>
        </div>
		
				<div class="product-content">
		<div id="product-image-5" class="product-image <?php echo esc_html($data['product_image_5_position']) == 'right' ? 'image-right' : 'image-left'; ?>">
			<img src="<?php echo esc_url($data['products_image_5']); ?>" alt="" />
        </div>
            <div class="product-text">
                <p><?php echo esc_html($data['products_p_5']); ?></p>
				<a class="product-cta-button" href="<?php echo esc_url($data['products_cta_5_url']); ?>">
                    <?php echo esc_html($data['products_cta_5_text']); ?>
                </a>
            </div>
        </div>
		<div class="product-content">
		<div id="product-image-6" class="product-image <?php echo esc_html($data['product_image_6_position']) == 'right' ? 'image-right' : 'image-left'; ?>">
                <img src="<?php echo esc_url($data['products_image_6']); ?>" alt="" />
        </div>
            <div class="product-text">
                <p><?php echo esc_html($data['products_p_6']); ?></p>
				<a class="product-cta-button" href="<?php echo esc_url($data['products_cta_6_url']); ?>">
                    <?php echo esc_html($data['products_cta_6_text']); ?>
                </a>
            </div>
        </div>
		
    </div>
    <div class="scroll-down-indicator"></div>
</section>

