<?php get_template_part('components/header'); ?>
<div class="blog-post">
	<div class="single-post-container">
		<article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
			<?php if (has_post_thumbnail()): ?>
			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
            </div>
			<?php endif; ?>
			<div class="post-content">
				<h1 class="post-title">
					<?php the_title(); ?>
				</h1>
				<div class="post-text">
					<?php the_content(); ?>
				</div>
			</div>
		</article>
	</div>
</div>
<?php
//
//START NEXT POST LINK
//								
// Get the current post's ID
$current_post = get_the_ID();

// Get the first post (in the order you want)
$first_post = get_posts(array(
    'numberposts' => 1,
    'order' => 'ASC', // Ensure first post is selected based on your preferred order
    'post_type' => 'post',
    'fields' => 'ids' // Only fetch the ID
))[0];

// Get the last post
$last_post = get_posts(array(
    'numberposts' => 1,
    'order' => 'DESC', // Last post in reverse order
    'post_type' => 'post',
    'fields' => 'ids'
))[0];

// Logic to display the next link
if ($current_post == $last_post) {
    // If we're on the last post, link to the first post
    $next_post_url = get_permalink($first_post);
    $next_post_title = get_the_title($first_post);
} else {
    // Otherwise, link to the next post
    $next_post = get_next_post();
    if ($next_post) {
        $next_post_url = get_permalink($next_post->ID);
        $next_post_title = get_the_title($next_post->ID);
    } else {
        // Fallback if no next post is found
        $next_post_url = '#';
        $next_post_title = __('No next post available', 'your-textdomain');
    }
}

// Retrieve the label from the Customizer
$next_post_label = get_theme_mod( 'next_post_label', __( 'Next Post', 'your-textdomain' ) );
?>
<section class="next-post">
<a href="<?php echo esc_url($next_post_url); ?>">
    <?php printf( esc_html( $next_post_label . ': %s' ), esc_html( $next_post_title ) ); ?>
</a>
</section>	
<?php
//
//END NEXT POST LINK
//
?>						
<?php get_template_part('components/footer'); ?>