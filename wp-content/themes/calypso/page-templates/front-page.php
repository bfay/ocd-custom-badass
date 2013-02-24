<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>


<div class="row">
	<div class="front-page-left eight columns">
	<div class="splash-title">
		Welcome to the premier of the #1 site for guitar lessons! 
	</div>
	<div class="row">
		<div class="splash-numbers two columns">
		<em>1</em>	
		</div>
	<div class="splash-text eleven columns">
	More than 1,300,000 views on YouTube in the last 6 months!
	</br><a href="/about" title="Read more">Read on...</a>        	
	</div>
	</div><!-- ! end row 1 -->
		<div class="row">
		<div class="splash-numbers two columns">
		<em>2</em>	
		</div>
	<div class="splash-text eleven columns">
	Premium lessons for an active community of guitar enthusiasts!
	</br><a href="/memberships" title="Read more">Read on...</a>                
	</div>
	</div><!-- ! end row 2 -->
			<div class="row">
		<div class="splash-numbers two columns">
		<em>3</em>	
		</div>
	<div class="splash-text eleven columns">
	Coming Soon!  Access anywhere, anytime, from any device!
	</br><a href="/#coming-soon" title="Read more">Read on...</a>                
	</div>
	</div><!-- ! end row 3 -->

	</div><!-- ! eight columns -->


	<div id="primary" class="site-content">
		<div id="content" role="main">
			<div class="row">
				<div class="eight columns">
					<div class="lesson-library-container">
					<div class="row">
						<div class="full section-title">
							<h4>Check out our free song library</h4>
						</div>
					</div>
					<div class="row">
					<div class="lesson-library full">
						<a href="http://www.rockinguitarlessons.com/acoustic_lessons" title="Acoustic Lesson Library" class="red-button-1"></a>
						<a href="http://www.rockinguitarlessons.com/electric_lessons" title="Electric Lesson Library" class="red-button-2"></a>					
					</div>
					</div>
				</div><!-- ! end lesson library container -->
				</div><!-- ! end row -->
			</div><!-- ! end columns -->
			</div><!-- ! end row -->
			
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="entry-page-image">
						<?php the_post_thumbnail(); ?>
					</div><!-- .entry-page-image -->
				<?php endif; ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>
		
		</div><!-- #content -->
	</div><!-- #primary -->
	<div class="front-page-sidebar"><?php get_sidebar(); ?></div>

<?php get_footer(); ?>