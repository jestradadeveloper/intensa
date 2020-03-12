<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
			<meta charset="<?php bloginfo('charset'); ?>">
			<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
			<link href="//www.google-analytics.com" rel="dns-prefetch">
      <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
      <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
			<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
			<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />
			<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
			
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta name="description" content="<?php bloginfo('description'); ?>">
			<meta name="p:domain_verify" content="19b4a7dc0f40ea70a42e05f35ae7da22"/>

			<?php wp_head(); ?>
				<script>
						// conditionizr.com
						// configure environment tests
						conditionizr.config({
								assets: '<?php echo get_template_directory_uri(); ?>',
								tests: {}
						});
        </script>
		<script data-ad-client="ca-pub-7693878068989997" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-52ST38C');</script>
		<!-- End Google Tag Manager -->
	</head>
	<body <?php body_class(); ?>>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-52ST38C"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
				

		<!-- wrapper -->
		<div class="wrapper">


			<!-- header -->
			<header class="header clear" role="banner">
					<div class="border-pink-top"></div>
					<div class="container mt-4">
						<div class="row">
							<div class="col-12 text-center">
									<div class="logo text-center py-4">
									<a href="<?php echo home_url(); ?>" class="text-center">
										<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
										<img src="<?php echo get_template_directory_uri(); ?>/img/logo-2020-intensamx.png" alt="Logo" class="logo-img">
									</a>
								</div>
							</div>
						</div>
					</div>

					<nav class="navbar bg-hard-pink d-flex justify-content-center text-dark" role="navigation"  data-spy="affix" data-offset-top="30">
						<div class="container-fluid">
							<div class="navbar-header">
							<button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#menu-intensa"
    aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
				class="fa fa-bars"></i></span></button>
			
								<div class="logo d-md-none w-100 text-center">
									<a href="<?php echo home_url(); ?>">
									Intensa
									</a>
							
								</div>
						
							</div>
							<div class="collapse navbar-collapse dont-collapse-sm" id="menu-intensa">
									<div class="logo d-none d-md-flex">
										<a href="<?php echo home_url(); ?>">
										Intensa
										</a>
										
									</div>	
									<div class="left">
										<?php shep_main_nav(); ?>
										<button type="button" class="btn btn-buscar" data-toggle="modal" data-target="#myModal">
											
											<svg id="Capa_1" enable-background="new 0 0 515.558 515.558" height="30" viewBox="0 0 515.558 515.558" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m378.344 332.78c25.37-34.645 40.545-77.2 40.545-123.333 0-115.484-93.961-209.445-209.445-209.445s-209.444 93.961-209.444 209.445 93.961 209.445 209.445 209.445c46.133 0 88.692-15.177 123.337-40.547l137.212 137.212 45.564-45.564c0-.001-137.214-137.213-137.214-137.213zm-168.899 21.667c-79.958 0-145-65.042-145-145s65.042-145 145-145 145 65.042 145 145-65.043 145-145 145z"/></svg>
										</button>
									</div>
								
							</div>
						
						</div>
					
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
