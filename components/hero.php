<?php 
$hero_data = get_data_for_template('hero');
?>
<section class="hero-section">
    <div class="hero-container">
        <div class="hero-content">
            <div class="hero-text">
                <h2><?php echo esc_html($hero_data['hero_subheadline']); ?></h2>
				<a href="<?php echo esc_url($hero_data['hero_cta_url']); ?>" 
				   class="cta-button">
                    <?php echo esc_html($hero_data['hero_cta_text']); ?>
                </a>
                <h1><?php echo esc_html($hero_data['hero_headline']); ?></h1>

            </div>
            <div class="hero-image">
                <img src="<?php echo esc_url($hero_data['hero_image']); ?>" alt="Hero Image" />
            </div>
        </div>
    </div>
    <div class="scroll-down-indicator"></div>
</section>

