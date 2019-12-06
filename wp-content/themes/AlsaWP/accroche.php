<?php /* Template Name: accroche */ ?>
<?php get_template_part( 'header' ); ?>
		<div id="content">
		
			<div id="accroche">
			
			<?php
				$accroche= new WP_Query();
				//$accroche->query('posts_per_page=1&category_name=blog'); autre syntaxe possible.
				$accroche->query(array(   
								'posts_per_page'=>1,  
								'category_name'=>'Actualités',  //choix de la catégorie
						   ));					   
								
				while($accroche->have_posts()) : $accroche->the_post();
					$wp_query->in_the_loop = true;
					$accroche_ID = $post->ID;
			?>

				
				<?php if (get_post_meta($post->ID, 'grande-vignette',true)) { ?>

				<div class="grande-vignette left"> 
						<img src="<?php echo get_post_meta($post->ID, 'grande-vignette', true); ?>" alt="Featured Post" /> 
				</div> 
				
				<?php } ?> 

					<div class="extrait"> 
						<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2> 
						
						<?php
							global $more;
							$more = 0;
						?>
						
						<?php the_content('Lire la suite'); ?>
					</div> 
				
				<?php endwhile; ?>
			
			</div> <!--accroche -->
		
			<div id="main">
			
				<!--Boucle article standard-->
				<?php
							global $more;
							$more = 0;
				?>
				
				<?php query_posts('category_name=Actualités'); ?>
				
				<?php if ( have_posts() ) :?>

					<?php while ( have_posts() ) : the_post(); ?>
					
					<?php if ($post->ID != $accroche_ID) { ?>
											
						<h2><?php the_title(); ?></h2>
						
							<div class="billet">	
														
									<?php the_content(); ?>
									<small>Le <?php the_time('j F, Y'); ?></small>
													
							<div class="pousseur"></div>	
							</div><!--billet-->
													
					<?php } ?>							
					
					<?php endwhile; else: ?>
							
							<p>Aucun résultat :(</p>	
							
					
					
					
				<?php endif; ?>
				<!--Fin boucle article-->
			
			</div><!--main-->
			
			<div id="side">
							
				<?php get_template_part( 'sidebar' ); ?>
				
			</div><!--side-->
			
		<div class="pousseur"></div>		
		</div><!--content-->	
		
	</div><!--wrapper-->
<?php get_template_part( 'footer' ); ?>