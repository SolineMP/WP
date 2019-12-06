<?php /* Template Name: Page dynamic */ ?>
<?php get_template_part( 'header' ); ?>
		<div id="content">
		
			<div id="main">
				<!--Boucle article-->
				<?php

				query_posts('category_name=Actualités'); 

					if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<div class="billet">
						
							<a href="<?php the_permalink(); ?>" title="titre"><img class="vignette" src="<?php echo get_post_meta($post->ID, 'vignette', true); ?>" alt="vignette"/></a>
							
							<div class="extrait">
								<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
								<small>Publié le <?php the_date('j F, Y'); ?> par <?php the_author_posts_link(); ?> </small>
								
						<?php
							global $more;
							$more = 0;
						?>
								
								<?php the_content('Lire la suite'); ?>

							</div><!--extrait-->
						
						<div class="pousseur"></div>	
						</div><!--billet-->
					
							<?php endwhile;?> 

		<?php else: ?>

					
					
						
					<?php endif; ?>


				<?php

				// On remet à zéro la requête
				wp_reset_query();

				?>

				<!--Fin boucle article-->
				
			
			</div><!--main-->
			
			<div id="side">
							
				<?php get_template_part( 'sidebar' ); ?>
				
			</div><!--side-->
			
		<div class="pousseur"></div>		
		</div><!--content-->	
		
	</div><!--wrapper-->
<?php get_template_part( 'footer' ); ?>