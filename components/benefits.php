<?php 
$data = get_data_for_template('benefits');
?>
<section id="benefits" class="benefits-section">
	<div class="benefits-container">
		<h2 class="section-title"><?php echo esc_html($data['benefits_section_title']); ?></h2>
		<div class="benefit-content">
				<div class="benefit">
					<h2><?php echo esc_html( $data['benefit_1_title'] ); ?></h2>
					<p><?php echo esc_html( $data['benefit_1_text'] ); ?></p>	
        		</div>
				<div class="benefit">
					<h2><?php echo esc_html( $data['benefit_2_title'] ); ?></h2>
					<p><?php echo esc_html( $data['benefit_2_text'] ); ?></p>	
        		</div>
				<div class="benefit">
					<h2><?php echo esc_html( $data['benefit_3_title'] ); ?></h2>
					<p><?php echo esc_html( $data['benefit_3_text'] ); ?></p>	
        		</div>	
		</div>
    </div>
</section>
