
<nav class="main-nav">
	<input type="checkbox" id="menu-toggle" class="menu-toggle">
	<label for="menu-toggle" class="menu-icon">&#9776;</label>
	<div class=menu-wrapper>
		<label for="menu-toggle" class="close-icon">&#10006;</label>
		<?php
		wp_nav_menu([
                    'theme_location' => 'primary',
                    'menu_class' => 'menu',
                    'container' => false,
		]);
        ?>
	</div>
</nav>
