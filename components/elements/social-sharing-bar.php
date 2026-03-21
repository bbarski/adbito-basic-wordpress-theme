<?php
$share_links = get_social_share_links();
?>

	<div class="share-icons-wrapper">
		<div class="share-icons-bar">
			<?php foreach ($share_links as $platform => $url) : ?>
        		<a
            		href="<?php echo esc_url($url); ?>"
            		target="_blank"
            		rel="noopener noreferrer nofollow"
            		class="share-icon <?php echo esc_attr($platform); ?>"
        		>
            		<i class="fa-brands fa-<?php echo esc_attr($platform); ?>"></i>
        		</a>
    		<?php endforeach; ?>
		</div>
	</div>
