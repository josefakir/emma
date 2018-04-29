<?php get_header(); ?>
	<div id="carrusel" class="owl-carousel">
		<div class="item1 item">
			<div class="container">
				<div class="col-md-6">
					<img src="<?php echo THEME_DIR ?>/img/combo-sublimacion.png" alt="" class="animated bounce imgbanner">
				</div>
				<div class="col-md-6">
					<div class="txtbanner animated wobble">
						<p>Máquinas <br> de Prensa</p>
						<a href="" class="btnbanner">PRENSA PARA TAZA</a>
						<a href="" class="btnbanner">PRENSA EN COMBO</a>
					</div>
				</div>
			</div>
		</div>
		<div class="item2 item">
			<div class="container">
				<div class="col-md-6">
					<div class="txtbanner">
						<p>Blanks <br> exclusivos</p>
						<a href="" class="btnbanner">Ver disponibilidades</a>
					</div>
				</div>
				<div class="col-md-6">
					<img src="<?php echo THEME_DIR ?>/img/blanks-slider8.png" alt="" class="animated bounce imgbanner">
				</div>
			</div>
		</div>
		<!--<div class="item3 item"></div>
		<div class="item4 item"></div>-->
	</div>
	<div class="contHistorico">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
				<?php 
					global $wp_query;
					$cat = $wp_query->get_queried_object();
					$id_cat_current = $cat->term_id;
					$name_cat_current = $cat->name;
					echo "<h3>$name_cat_current</h3>";
					$orderby = 'name';
					$order = 'asc';
					$hide_empty = false ;
					$cat_args = array(
					    'orderby'    => $orderby,
					    'order'      => $order,
					    'hide_empty' => $hide_empty,
					);
					 
					$product_categories = get_terms( 'product_cat', $cat_args );
					if(!empty($product_categories)){
						echo "<ul>";
						
						foreach($product_categories as $p){
							if($p->parent==$id_cat_current or ($p->parent==@$_GET['parent']) and $p->parent!=0 ){
								//echo "asdf".$id_cat_current;
								echo "<li><a href='".get_category_link( $p->term_id )."?parent=$p->parent'>$p->name</a></li>";
							}
						}
						echo "</ul>";
					}
				?>
				</div>
				<div class="col-sm-9" id="contHistorico">
					<div class="row">
						<?php 
						$cont = 1;
						if ( have_posts() ) {
							while ( have_posts() ) {
								the_post(); 
								?>
						<div class="col-md-4 producto">
							<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium',array('class'=>'w100')); ?></a>
							<h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
						</div>
								<?php
								if($cont%3==0){ echo '<div class="clearfix"></div>';}
								$cont++;
							} // end while
						} // end if
						?>
			    	</div>
					<!--<div id="nav-below"><?php next_posts_link( 'Entradas anteriores »', 0 ); ?></div>-->
					<?php 
						$total = $wp_query->max_num_pages;
						// solo seguimos con el resto si tenemos más de una página
						if ( $total > 1 )  {
						     // obtenemos la página actual
						     if ( !$current_page = get_query_var('paged') )
						          $current_page = 1;
						     // la estructura de “format” depende de si usamos enlaces permanentes "humanos"
						     $format = empty( get_option('permalink_structure') ) ? '&page=%#%' : 'page/%#%/';
						     echo paginate_links(array(
						          'base' => get_pagenum_link(1) . '%_%',
						          'format' => $format,
						          'current' => $current_page,
						          'prev_next' => True,
						          'prev_text' => __('&laquo; Anterior'),
						          'next_text' => __('Siguiente &raquo;'),
						          'total' => $total,
						          'mid_size' => 4,
						          'type' => 'list'
						     ));
						}

					?>

			  	</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>