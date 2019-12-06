<?php get_template_part( 'header' ); ?>
		<div id="content">
		
			<div id="main">
				<!--Boucle article-->
				<?php if ( have_posts() ) :?>

					<?php while ( have_posts() ) : the_post(); ?>
										
					<h2><?php the_title(); ?></h2>
					
						<div class="billet">	
													
								<?php the_content(); ?>
								<small>Le <?php the_time('j F, Y'); ?></small>
												
						<div class="pousseur"></div>	
						</div><!--billet-->
												
						
						
						<?php endwhile; else: ?>
						<p>Aucun r�sultat :(</p>						
						
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