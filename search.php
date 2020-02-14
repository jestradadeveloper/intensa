<?php get_header(); ?>

	<main role="main" class="container">
		<!-- section -->
		<section>

			<h1 class="text-center w-100"><?php echo sprintf( __( 'Intensa,esto fue lo que encontre para ti, %s resultado(s) para "<strong class="text-pink">', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></strong>"</h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
