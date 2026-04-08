<?php $data = get_data_for_template('contact'); ?>

<div class="main-container">
    <div class="main-column">
        <div class="contact-us-box">
            <div class="box-left"><i class="fa-solid fa-envelope"></i></div>
            <div class="box-right">
				<span class="box-right-row"><?php echo esc_html($data['contact_section_mail']); ?></span>
            </div>
        </div>
    </div>
    <div class="main-column">
        <div class="contact-us-box">
            <div class="box-left"><i class="fa-solid fa-phone"></i></div>
            <div class="box-right">
                <span class="box-right-row"><?php echo esc_html($data['contact_section_phn']); ?></span>
            </div>
        </div>
    </div>
</div>