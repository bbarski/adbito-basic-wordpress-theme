<?php $header_data = get_data_for_template('header'); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php wp_head(); ?>
</head>
	<body site-theme="<?php echo esc_html($header_data['theme_colors']); ?>"> 
		<header>
			<div class="header-container">
				<div class="header-content">
					<?php get_template_part('components/elements/header-logo'); ?>
					<?php get_template_part('components/nav');?>
					<?php // get_template_part('components/elements/header-site-description'); ?>
					<?php get_template_part('components/elements/header-phone-link'); ?>
				</div>
			</div>
		</header>

