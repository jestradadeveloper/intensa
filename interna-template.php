<?php /* Template Name: Interna */ get_header(); ?>
<section class="container my-2 ">
  <div class="row">
    <div class="col-12">
      <h1 class="title-internal text-center py-4"><?=the_title()?></h1>
    </div>
  </div>



</section>
<div class="section container mb-5">

<div class="row py-1">
      <?php
      global $post;
      $post_slug = $post->post_name;
      $post_slug=='pop-culture'? $post_slug='popculture':$post_slug;
      $args = array( 'numberposts' => -1, 'category_name' => $post_slug  );
      $posts = get_posts( $args );
      $i=1;
        foreach( $posts as $post ): setup_postdata($post); 
      ?>  
       
       
         
          <div class="col-6 col-md-4 py-3">
          <a href="<?php echo esc_url( get_permalink() ); ?>" class="">
            <div class="img-post-internal img-fluid">
              <?= the_post_thumbnail() ?>
            </div>

            <div class="title">
            <a href="<?php echo esc_url( get_permalink() ); ?>" class="">
              <h3 class="p-1"><?=the_title()?></h3>
            </a>
            <?= edit_post_link()?>
            </div>
          </a>
          </div>
       
  
      <?php endforeach; ?>
      </div>
        

      <?php wp_reset_query(); ?>
     

</div>
<?php get_footer(); ?>
