<?php /* Template Name: Home Template */ get_header();
?>
	<h1 class="text-white" style="font-size:.5em"><small>Intensa</small></h1>
	<main role="main" class="container">
    <div id="main-posts" class="my-4 py-4">
   
 
    <?php
      // The Query
      $args= array(
        'orderby' => 'date',
        'category_name'=> 'destacado',
        'posts_per_page' =>3
      
      );
      $the_query = new WP_Query($args);

      // The Loop
      if ( $the_query->have_posts() ) {
        echo '<div class="row">';
        while ( $the_query->have_posts() ) {
          $the_query->the_post();
          echo '<div class="col-12 col-md-4 col-sm-4 col-lg-4">' ;
          echo '<div class="cover-image image-general">';
          echo '<a href="'.esc_url( get_permalink() ).'" class="">';
          the_post_thumbnail('large');
          echo '</a>';
          echo '</div>';
          ?>
          <div class="d-flex w-100 justify-content-center my-2 text-uppercase">
		
          <?php
          $categories = get_the_category();
          if ( ! empty( $categories ) ) {
              echo '<a class="text-pink bold main-category-text" href="' . esc_url( get_category_link( $categories[1]->term_id ) ) . '">' . esc_html( $categories[1]->name ) . '</a>';
          }
          ?>
          </div>
          <h2 class="strong text-center font-title">
            <a class="font-weight-bold text-body text-center" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
          </h2>
          <?php 
          echo '</div>';
        }
        echo '</div>';
        /* Restore original Post Data */
        wp_reset_postdata();
      } else {
        // no posts found
            }
      ?>
       
    </div>
    
	</main>
  <div class="container py-4 my-5">
    <div class="main row mas-leido">
    <div class="col-12">
    <h2 class="pl-5 p-4 title-lomas d-block d-md-none">Lo más leído <span><img src="<?php echo get_template_directory_uri(); ?>/img/estrellita.png" alt="" class="img-fluid"></span> <span class="stars"><img src="<?php echo get_template_directory_uri(); ?>/img/estrellitas.png" alt="" class="img-fluid d-none d-md-flex"></span></h2>
    </div>
    <div class="col-12 col-md-6">
      <?php
      // The Query
      $args= array(
        'orderby' => 'date',
        'posts_per_page' =>5,
        'meta_key'=> 'post_views',
      
      );
      $the_query = new WP_Query($args);

      // The Loop
      if ( $the_query->have_posts() ) {

        echo '<div class="slider slider-for">';
        while ( $the_query->have_posts() ) {
          $the_query->the_post();
            //// code to display thumbnail goes here
            echo '<div class="image-popular">' ;
            echo '<a href="'.esc_url( get_permalink() ).'" class="">';
            the_post_thumbnail('large');
            echo "</a>";
          ?>
          <?php 
          echo '</div>';
        }
        echo '</div>';
        /* Restore original Post Data */
        wp_reset_postdata();
      } else {
        // no posts found
            }
      ?>
      </div>


      <div class="col-12 col-md-6 p-0 bg-hard-pink menu-popular pt-4">
        <h2 class="pl-5 p-4 title-lomas d-none d-md-flex">Lo más leído <span><img src="<?php echo get_template_directory_uri(); ?>/img/estrellita.png" alt="" class="img-fluid"></span> <span class="stars"><img src="<?php echo get_template_directory_uri(); ?>/img/estrellitas.png" alt="" class="img-fluid"></span></h2>
      <?php
      // The Query
      $args= array(
        'posts_per_page' =>5,
        'meta_key'=> 'post_views',
        'orderby' => 'meta_value_num',
        'order' => 'DESC',
      );
      $the_query = new WP_Query($args);
      $num=1;
      // The Loop
      if ( $the_query->have_posts()) {
        echo '<div class="slider slider-nav">';
        while ( $the_query->have_posts() ) {
           $the_query->the_post();
          echo '<div>' ;
          echo '<div class="row py-1">';
          echo '<span class="col-1 font-secondary plus-number d-flex align-items-center justify-content-end">';
          echo '0'.$num++;
          echo '</span>';
          echo '<h3 class="col-11">';
  
          the_title();
          echo '</h3>';
          
          echo '</div>';
          
          ?>
          <?php 
          echo '</div>';
          
        }
        echo '</div>';
        /* Restore original Post Data */
        wp_reset_postdata();
      } else {
        // no posts found
            }
      ?>


      </div>
    </div>

   <!-- <div class="container py-4 my-5" id="favoritos">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="main-title"> LOS FAVORITOS </h2> 
                </div>
            </div>
    </div>
    -->
    <div class="container py-4 my-5" id="mas-nuevo">
            <div class="row">
                <div class="col-12 text-center my-5">
                    <h2 class="main-title"> LO NUEVO</h2> 
                </div>

            </div>


               
            <?php
                  // The Query
                  $args= array(
                    'orderby' => 'date',
                    'posts_per_page' =>8
                  
                  );
                  $the_query = new WP_Query($args);

                  // The Loop
                  if ( $the_query->have_posts() ) {
                    echo '<div class="row">';
                    while ( $the_query->have_posts() ) {
                      $the_query->the_post();
                      echo '<div class="col-6">' ;
                      echo '<div class="cover-image bg-low-pink image-general">';
                      echo '<a href="'.esc_url( get_permalink() ).'" class="">';
                      the_post_thumbnail('large');
                      echo '</a>';
                      echo '</div>';
                      ?>
                      <div class="d-flex w-100 justify-content-center my-2 text-uppercase">
                
                      <?php
                      $categories = get_the_category();
                      if ( ! empty( $categories ) ) {
                          echo '<a class="text-pink bold main-category-text" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                      }
                      ?>
                      </div>
                      <h2 class="strong text-center font-title">
                        <a class="font-weight-bold text-body text-center" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                      </h2>
                      <?php 
                      echo '</div>';
                    }
                    echo '</div>';
                    /* Restore original Post Data */
                    wp_reset_postdata();
                  } else {
                    // no posts found
                        }
                  ?>
    


    </div>


  </div>
  

<?php get_footer(); ?>
