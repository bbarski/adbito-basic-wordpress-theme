<div class="blog">
	<div class="blog-posts-container">
		<h2 class="section-title">BLOG</h2>
		<?php if ( have_posts() ) : ?>
		<div class="post-list">
			<?php while ( have_posts() ) : the_post(); ?>
			<section class="post">
				<div class="post-container">
									<div class="post-list-post-thumbnail">
					<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php the_permalink(); ?>" class="post-thumbnail-link-to">
						<?php the_post_thumbnail('medium_large'); ?>
                    </a>
					<?php else : ?>
					<a href="<?php the_permalink(); ?>" class="post-link-to">
						<?php echo __('No thumbnail', 'mytheme'); ?>
					</a>
					<?php endif; ?>
				</div>
				<div class="post-content">
					<h2 class="post-title">
						<a href="<?php the_permalink(); ?>" class="post-link-to">
							<?php the_title(); ?>
						</a>
					</h2>
					<div class="post-excerpt"><?php the_excerpt(); ?></div>
				</div>
			</div>

		</section>
			<?php endwhile; ?>
			<div class="gradient-divider"></div>
			<!-- Pagination -->
			<div class="pagination">
                            <?php
                            the_posts_pagination(array(
                                'mid_size' => 2,
                                'prev_text' => '« ' . __('Previous', 'mytheme'),
                                'next_text' => __('Next', 'mytheme') . ' »',
                            ));
                            ?>
                        </div>
                    </div>
                	<?php else : ?>
                    	<p>Brak postów do wyświetlenia.</p>
                	<?php endif; ?>
            	</div>
		</div>