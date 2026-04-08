<?php 
$data = get_data_for_template('testimonials');
?> 
<section class="testimonials-section">
<div class="testimonials-container">
<h2 class="section-title"><?php echo esc_html($data['testimonials_section_title']); ?></h2>
<div class="testimonials-slider">
<div class="slides">
<div class="testimonial-slide">
<div class="testimonial-content">
<div class="testimonial-photo">
<img src="<?php echo esc_url($data['testimonials_image_1']); ?>" alt="<?php ?>">
</div>
<div class="testimonial-text">
<p><?php echo esc_html($data['testimonials_text_1']); ?></p>
</div>
<div class="testimonial-name">
<?php echo esc_html($data['testimonials_name_1']); ?>
</div>
</div>
</div>

<div class="testimonial-slide">
<div class="testimonial-content">
<div class="testimonial-photo">
<img src="<?php echo esc_url($data['testimonials_image_2']); ?>" alt="<?php ?>">
</div>
<div class="testimonial-text">
<p><?php echo esc_html($data['testimonials_text_2']); ?></p>
</div>
<div class="testimonial-name">
<?php echo esc_html($data['testimonials_name_2']); ?>
</div>
</div>
</div>

<div class="testimonial-slide">
<div class="testimonial-content">
<div class="testimonial-photo">
<img src="<?php echo esc_url($data['testimonials_image_3']); ?>" alt="<?php ?>">
</div>
<div class="testimonial-text">
<p><?php echo esc_html($data['testimonials_text_3']); ?></p>
</div>
<div class="testimonial-name">
<?php echo esc_html($data['testimonials_name_3']); ?>
</div>
</div>
</div>
	
<div class="testimonial-slide">
<div class="testimonial-content">
<div class="testimonial-photo">
<img src="<?php echo esc_url($data['testimonials_image_4']); ?>" alt="<?php ?>">
</div>
<div class="testimonial-text">
<p><?php echo esc_html($data['testimonials_text_4']); ?></p>
</div>
<div class="testimonial-name">
<?php echo esc_html($data['testimonials_name_4']); ?>
</div>
</div>
</div>	
	
</div>

</div>
</div>
</section>