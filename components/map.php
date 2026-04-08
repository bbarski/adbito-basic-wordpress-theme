<?php 
$data = get_data_for_template('contact');

$template_addr_path = '/components/elements/contact-mail-phn-addr-div';
$template_default_path = '/components/elements/contact-mail-phn-div';
?>
<section id="contact" class="contact-section">
	<div class="contact-container">
		<h2 class="section-title"><?php echo esc_html($data['contact_section_title']); ?></h2>
<?php 
		if($data['contact_container_content'] === 'cont_addr')
		{
		get_template_part($template_addr_path);	
		}
		else 
		{
		get_template_part($template_default_path);	
		}

?>

	</div>
</section>
