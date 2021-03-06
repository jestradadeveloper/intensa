			<!-- footer -->
			
			<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade modal-busqueda" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
				<?php get_search_form(); ?>
      </div>
      
    </div>
  </div>
</div>
			<footer class="footer" role="contentinfo">
				<div class="bg-hard-pink">
					<div class="container">
						<div class="row">
							<div class="col-12 text-center py-3">
								<h2 class="text-center bold text-dark pt-1 title-siguenos">Intensa en Instagram</h2>
								<a href="https://www.instagram.com/intensa.mx/" class="text-center w-100 instagram-user text-dark">@intensa.mx</a>
							</div>
						</div>
						
					</div>
				</div>
				<?php dynamic_sidebar("widget-area-1"); ?>
				<div class="bg-hard-pink border-top boletin-area">
					<div class="container">
						<div class="row">
							<div class="col-12">
									<?php dynamic_sidebar("widget-area-3"); ?>
								
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-12 text-center footer-nav py-4">
							<?php shep_footer_nav(); ?>
						</div>
					</div>
				</div>
				<div class="container pb-3">
					<div class="row">
						<div class="col-12 offset-0 col-md-6 offset-md-3 text-center socials-icons">
							<a href="https://www.facebook.com/intensa.mex/" target="_blank"><i class="fa fa-facebook"></i></a>
							<a href="https://www.instagram.com/intensa.mx/" target="_blank"><i class="fa fa-instagram"></i></a>
							<a href="https://www.twitter.com/intensa_mx/" target="_blank"><i class="fa fa-twitter"></i></a>
							<a href="https://www.pinterest.com.mx/intensa_mx/" target="_blank"><i class="fa fa-pinterest"></i></a>
						
						</div>
					</div>
				</div>

				<!-- copyright -->
				<div class="container">
				<div class="row">
					<div class="col-12">
						<p class="copyright">
							&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>
				
						</p>
						<!-- /copyright -->
					</div>
				</div>
		
				</div>
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script>
	
		// masonry 
		window.onload = function() {
    var body = document.body;
    var stickyHeaderTop = body.offsetTop;

    window.onscroll = function() {
        if (window.pageYOffset > stickyHeaderTop) {
            body.classList.add('menu-fixed');
        } else {
            body.classList.remove('menu-fixed');
        }
    };
};
		</script>

	</body>
</html>
