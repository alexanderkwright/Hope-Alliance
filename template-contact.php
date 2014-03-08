<?php
/**
 * Template Name: Contact
 * The template for displaying any single page.
 *
 */

get_header(); // This fxn gets the header.php file and renders it ?>
	<section id="primary">
		<div id="content" class="row" role="main">

			<div class="small-12 large-9 push-3 columns">
				<?php if ( have_posts() ) :
				// Do we have any posts/pages in the databse that match our query?
				?>

					<?php while ( have_posts() ) : the_post();
					// If we have a page to show, start a loop that will display it
					?>

						<article class="post">

							<!--<h1 class="title"><?php //the_title(); ?></h1>-->

							<div class="the-content">
								<?php the_content(); ?>

								<?php wp_link_pages(); ?>
							</div><!-- the-content -->

						</article>

					<?php endwhile; ?>

				<?php else : ?>

					<article class="post error">
						<h1 class="404">Nothing posted yet</h1>
					</article>

				<?php endif; ?>
			</div>

			<aside class="small-12 large-3 pull-9 columns">
				<?php
					if(is_active_sidebar('contact_widget'))
						dynamic_sidebar('contact_widget');
					else
						get_sidebar();
				?>
			</aside>

		</div><!-- #content .site-content -->
	</section><!-- #primary .content-area -->
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>