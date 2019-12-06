				<div class="module">					
					<?php get_template_part('searchform'); ?>									
				</div><!--module-->
				
				<div class="module">					

					<h2>Derniers articles</h2>

					<ul>      
					    <?php
						  $number = 3;//Nombre d'articles
					      $recent_posts = wp_get_recent_posts($number);
					      foreach($recent_posts as $post){
						  
					        echo '<li><a href="' . get_permalink($post["ID"]) . '" title="Look '.$post["post_title"].'" >' .   $post["post_title"].'</a> </li> ';


						  } ?>
					</ul>
								
				</div><!--module-->

				<!---Widget-->
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Barre laterale") ) : ?>
					Insérer un Widget
				<?php endif; ?>