<?php 
$data = get_data_for_template('gallery');
?>
<section class="gallery-section">
	<div class="galery-container">
		<h2 class="section-title">
			<?php echo esc_html($data['gallery_section_title']); ?>
		</h2>
		<div class="gallery">
<?php
            foreach ($data as $key => $value) {
				if (filter_var($value, FILTER_VALIDATE_URL)) {
            		echo '<div class="gallery-item">';
        			echo '<img src="' . esc_url($value) . '" alt="' . esc_attr($key) . '" />';
                	echo '</div>';
				}	
            }			
?>
		</div>
		<button></button>
	</div>
</section>
