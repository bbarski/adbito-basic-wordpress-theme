<?php $data = get_data_for_template('contact'); ?>
<div class="header-phone-link">
	<a href="<?php echo esc_html($data['contact_section_phn_url']); ?>">
		<?php echo esc_html($data['contact_section_phn']); ?> 
	</a>
</div>
