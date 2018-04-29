<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
			<?php
					
					global $page, $paged;

						wp_title( '|', true, 'right' );
						if ( @$site_description && ( is_home() || is_front_page() ) ){
							echo " | $site_description";
						}
						if ( $paged >= 2 || $page >= 2 ){
							echo ' | ' . sprintf( __( 'Page %s', 'Emma Uncomplicated Gin' ), max( $paged, $page ) );
						}

			?>
	</title>
<?php wp_head(); ?>

</head>
<body class="home">
	<?php if(is_home()){ ?>
	<div class="bg"></div>
	<?php }else if(is_page('la-ginebra')){ ?>
	<div class="bg2"></div>
	<?php }else if(is_page('contacto')){ ?>
	<div class="bg3"></div>
	<?php } ?>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="<?php echo site_url(); ?>" class="logo"><img src="<?php echo THEME_DIR ?>/img/logo-header<?php if(is_page('productos') || is_single()){echo '-negro';} ?>.png" alt=""></a>
					<a href="" id="trigger"><i class="fa fa-bars"></i></a>
					<nav id="navigation">
						<ul class="menu <?php if(is_page('productos') || is_single()){echo ' negro ';} ?>">
							<li><a href="#" id="cerrarmenu"><i class="fa fa-times-circle"></i></a></li>
							<li><a href="<?php echo site_url('la-ginebra') ?>">LA GINEBRA</a></li>
							<li><a href="<?php echo site_url('productos') ?>">PRODUCTOS</a>
								<ul class="submenu">
									<li><a href="#">Sweet&Soft</a></li>
									<li><a href="#">Citric&Cool</a></li>
									<li><a href="#">Fresh&Fun</a></li>
									<li><a href="#">Winy&Wild</a></li>
								</ul>
							</li>
							<li><a href="<?php echo site_url('contacto') ?>">CONTACTO</a></li>
							<li><a href="<?php echo site_url('blog') ?>">BLOG</a></li>
							<li><a href="<?php echo site_url('tienda') ?>">TIENDA</a></li>
							<li><a href="#" class="social"><i class="fa fa-facebook-f"></i></a></li>
							<li><a href="#" class="social"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>