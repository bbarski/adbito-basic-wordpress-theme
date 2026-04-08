<?php get_template_part('components/header'); ?>

<main>
    <?php
    if (is_front_page() && !is_home()) :
		display_section_if_enabled('hero_section_visibility', 'components/hero');
	    display_section_if_enabled('products_section_visibility', 'components/products');
	    display_section_if_enabled('benefits_section_visibility', 'components/benefits');
		display_section_if_enabled('gallery_section_visibility', 'components/gallery');
	    display_section_if_enabled('about_section_visibility', 'components/about');
		display_section_if_enabled('services_section_visibility', 'components/services');
	    display_section_if_enabled('testimonials_section_visibility', 'components/testimonials');
	    display_section_if_enabled('contact_section_visibility', 'components/map');
        the_content();
    elseif (is_home()) :
        get_template_part('components/blog');
    endif;
    ?>
</main>

<?php get_template_part('components/footer'); ?>
