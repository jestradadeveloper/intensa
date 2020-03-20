<?php get_header(); ?>
<section class="container my-2 ">
  <div class="row">
    <div class="col-12">
	<h1 class="title-internal text-center py-4"><?php single_cat_title(); ?></h1>
    </div>
  </div>



</section>
<div class="section container mb-5">
	<main role="main">
		<!-- section -->
		<section>
		

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>
	</div>

<?php get_footer(); ?>
