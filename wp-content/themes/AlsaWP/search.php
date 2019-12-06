<?php get_template_part( 'header' ); ?>
		<div id="content">
		
			<div id="main">
				<h2>A la une :</h2>
				
				<div class="billet">
				<div class="pousseur"></div>	
					
					<?php if ( have_posts() ) :?>

					<?php while ( have_posts() ) : the_post(); ?>
					
										
						<div class="billet">
						
							<a href="<?php the_permalink() ?>" title="titre"><?php the_post_thumbnail('thumbnail')?></a>
														
							<div class="extrait">
								<h3><a href="<?php the_permalink(); ?>" title="#"><?php the_title(); ?></a></h3>
								<p class="small">Le <?php the_time('j F, Y'); ?> - nombre de commentaire : <?php echo($post->comment_count) ?></p>								
								<?php the_content('Lire la suite'); ?>
							</div><!--extrait-->
						
						<div class="pousseur"></div>	
						</div><!--billet-->
						
						<?php endwhile; else: ?>
						<p>Aucun résultat :(</p>
						
				<?php endif; ?>
				<!--Fin boucle article-->
				
				<div class="pousseur"></div>	
				</div><!--billet-->
			
			</div><!--main-->
			
			<div id="side">
							
				<?php get_template_part( 'sidebar' ); ?>
				
			</div><!--side-->
			
		<div class="pousseur"></div>
		
		</div><!--content-->	
		
	</div><!--wrapper-->
<?php get_template_part( 'footer' ); ?>

