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

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		
		<ins class="adsbygoogle"
			style="display:block"
			data-ad-client="ca-pub-7693878068989997"
			data-ad-slot="8841514260"
			data-ad-format="auto"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
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
										<img src="<?php echo get_template_directory_uri(); ?>/img/Intensa.png" alt="Logo" class="logo-img">
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
								Intensa
								</div>
							</div>
							<div class="collapse navbar-collapse dont-collapse-sm" id="menu-intensa">
									<div class="logo d-none d-md-flex">
										Intensa
									</div>	
								<?php shep_main_nav(); ?>
							</div>
						
						</div>
					
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->