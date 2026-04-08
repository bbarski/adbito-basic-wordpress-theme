<?php $data = get_data_for_template('contact'); ?>
<footer class="footer">
	<div class="footer-container">
		<p class="footer-text">
			&copy; <?php echo date('Y'); ?>
			<a class="footer-blog-info-name" href="<?php echo home_url(); ?>">
				<?php bloginfo('description'); ?>
			</a>
			<i class="fa-solid fa-compass"></i>
			<a target="_blank" 
			   rel="noopener noreferrer" 
			   class="footer-creator" 
			   href="<?php echo CREATOR_LINK; ?>">
				<?php echo CREATOR_NAME; ?>
			</a>
		</p>
	</div>
	<?php wp_footer(); ?>
</footer>
</body>
</html>

