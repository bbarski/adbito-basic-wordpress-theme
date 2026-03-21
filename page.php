<?php
get_template_part('components/header');?>

<main class="page-main">
    <div class="page-container">
        <article id="post-<?php the_ID(); ?>" <?php post_class('page-content'); ?>>
            <h1 class="page-title"><?php the_title(); ?></h1>
            <div class="page-body">
                <?php the_content(); ?>
            </div>
        </article>
    </div>
</main>

<?php
get_template_part('components/footer');?>