<?php get_template_part( 'header' ); ?>
		<div id="content">
		
			<div id="main">
			
				<div id="content">					

				<?php the_post(); ?>

				<h2 class="page-title author"><?php echo(get_the_author()) ?></h2>

				<?php if ( get_the_author_meta( 'description' ) ) : // Si une description est disponible  ?>
				
					<div id="entry-author-info">
						
						<div id="auteur-avatar"> <!-- #avatar de l'auteur	-->
							<?php echo get_avatar( get_the_author_meta( 'user_email' )); ?>
						</div>
						
						<div id="auteur-description"> <!-- #Description de l'auteur	-->
								<?php the_author_meta( 'description' ); ?>
						</div> 
					
					</div> <!-- .entry-author-info -->
				
				<?php endif; ?>


			</div><!-- #content -->
			
			</div><!--main-->
			
			<div id="side">
							
				<?php get_template_part( 'sidebar' ); ?>
				
			</div><!--side-->
			
		<div class="pousseur"></div>		
		</div><!--content-->	
		
	</div><!--wrapper-->
<?php get_template_part( 'footer' ); ?>