<?php get_header(); ?>
	<div class="container article">
	<main role="main" class="mt-4 row">
	<!-- section -->
			<section class="col-12 col-md-8 my-4">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<h1 class="text-center">
						<a  class="" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<div class="py-1 text-center text-uppercase text-pink bold">
			<?php the_category(', '); ?>
			</div>
			<div class="text-center autor-facts pb-4">
			<p>Por: <span> <?php the_author_posts_link(); ?></span></p>
			<p><?php the_time('d/M/Y'); ?></p>
			</div>
		
				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<!-- post thumbnail -->
					<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail(); // Fullsize image for the single post ?>
						</a>
					<?php endif; ?>
					<!-- /post thumbnail -->

					<!-- post title -->

					<!-- /post title -->

					<!-- post details -->
					
					<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
					<!-- /post details -->
					<div class="py-2 content-text">
					<?php the_content(); // Dynamic Content ?>
					</div>

					<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

					<?php #comments_template(); ?>

				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

				</article>
				<!-- /article -->

			<?php endif; ?>

			</section>
			<div class="col-4 my-4">
						<div class="sponsors">
								<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
						</div>
			</div>
	<!-- /section -->
	</main>
	</div>
	
<?php get_footer(); ?>
