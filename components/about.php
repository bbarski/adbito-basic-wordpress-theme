<?php
$data = get_data_for_template('about');
?>
<section id="about-us" class="about-us-section">
    <div class="about-us-container <?php echo esc_html($data['about_image_position']) == 'right' ? 'image-right' : 'image-left'; ?>">
        <h2 class="section-title"><?php echo esc_html($data['about_section_title']); ?></h2>
        <div class="about-us-content">
            <div class="about-us-image">
                <img src="<?php echo esc_url($data['about_image']); ?>">
            </div>
            <div class="about-us-text">
                <?php echo wpautop(nl2br(esc_html($data['about_text']))); ?>
            </div>
        </div>
    </div>
</section>

