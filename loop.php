<?php 

if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<div class="col-4">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('large'); // Declare pixel size you need inside the array ?>
			</a>
			<div class="d-flex w-100 justify-content-center my-2 text-uppercase">
		
			<?php
			$categories = get_the_category();
			if ( ! empty( $categories ) ) {
					echo '<a class="text-pink bold main-category-text" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
			}
			?>
			</div>
		<?php endif; ?>
		<!-- /post thumbnail -->

		<!-- post title -->
		<h2 class="strong text-center">
			<a class="font-weight-bold text-body text-center" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->

		<!-- post details -->
		<span class="date"><?php //the_time('F j, Y'); ?> <?php // the_time('g:i a'); ?></span>
		<span class="author"><?php // _e( 'Published by', 'html5blank' ); ?> <?php // the_author_posts_link(); ?></span>
		<span class="comments"><?php // if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
		<!-- /post details -->

		<?php //html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

		<?php edit_post_link(); ?>

	</article>
	</div>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
