<?php get_template_part( 'header' ); ?>
		<div id="content">
		
			<div id="main">

				<h2>Je suis single.php</h2>

				<!--Boucle article-->
				<?php if ( have_posts() ) :?>

					<?php while ( have_posts() ) : the_post(); ?>
										
					<h2><?php the_title(); ?></h2>
					
						<div class="billet">	
													
								<?php the_content(); ?>
								<small>Le <?php the_time('j F, Y'); ?></small>
												
						<div class="pousseur"></div>	
						</div><!--billet-->
												
						<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>" title="Partager sur facebook" target="blank">Partager sur Facebook</a>  
						 <a href="http://twitter.com/home?status=A voir : <?php the_permalink(); ?>" title="Partager sur Twitter !" target="_blank">Partager sur Twitter !</a>  
						<?php endwhile;?> 
						
												
						<?php else: ?>
						<p>Aucun résultat :(</p>						
						
				<?php endif; ?>
				<!--Fin boucle article-->
				
				<?php comments_template(); ?>
			
			</div><!--main-->
			
			<div id="side">
			
				<?php get_template_part( 'sidebar' ); ?>
				
			</div><!--side-->
			
		<div class="pousseur"></div>		
		</div><!--content-->	
		
	</div><!--wrapper-->
<?php get_template_part( 'footer' ); ?>