<?php get_header(); ?>

		<!-- Row for main content area -->
		<div id="content" class="eight columns">
	
			<div class="post-box">
				<h1><?php _e('File Not Found', 'rockin'); ?></h1>
				<div class="error">
					<p class="bottom"><?php _e('The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'rockin'); ?></p>
				</div>
				<p><?php _e('Please try the following:', 'rockin'); ?></p>
				<ul> 
					<li><?php _e('Check your spelling', 'rockin'); ?></li>
					<li><?php printf(__('Return to the <a href="%s">home page</a>', 'rockin'), home_url()); ?></li>
					<li><?php _e('Click the <a href="javascript:history.back()">Back</a> button', 'rockin'); ?></li>
				</ul>
			</div>

		</div><!-- End Content row -->
		
		<?php get_sidebar(); ?>
		
<?php get_footer(); ?>