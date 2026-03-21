<?php 
$data = get_data_for_template('portfolio');
?>
<section class="portfolio-section">
	<div class="portfolio-container">
		<h2 class="section-title"><?php echo esc_html($data['portfolio_section_title']); ?></h2>
		<div class="portfolio">
				<div class="portfolio-item">
                	<img src="<?php echo esc_html($data['portfolio_1_image']); ?>" />
            	</div>
				<div class="portfolio-item">
                	<img src="<?php echo esc_html($data['portfolio_2_image']); ?>" />
            	</div>
				<div class="portfolio-item">
                	<img src="<?php echo esc_html($data['portfolio_3_image']); ?>" />
            	</div>
		</div>
		<a class="btn btn-primary" href="<?php echo esc_html($data['portfolio_url']); ?>">
			  <?php echo esc_html($data['portfolio_btn_label']); ?>
		</a>
	</div>
</section>
