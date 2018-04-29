<?php get_header(); ?>
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		?>
		<div class="contenido">
			<div class="container pt40">
				<div class="row">
					<div class="col-md-4">
						<?php the_post_thumbnail('full',array('class' => 'w100')) ?>
					</div>
					<div class="col-md-8">
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
						<?php echo $product->price; ?>
					</div>
				</div>
			</div>

			<div class="col-md-3">
			</div>
		</div>
		<?php
	} // end while
} // end if
?>
<?php get_footer(); ?>