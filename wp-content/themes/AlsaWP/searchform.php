<?php
/**
 * The Search Form
 *
 * Optional file that allows displaying a custom search form
 * when the get_search_form() template tag is used.
 *
 * @package WordPress
 * @subpackage Twenty Ten
 * @since 3.0.0
 */
?>
	<h2>Recherche</h2>
				
					<form class="form" name="searchform" method="get" action="<?php echo home_url(); ?>">
						<fieldset>
							<legend>Recherche</legend>
							
							<label>
								<input type="text"  name="s" value="Que dois-je chercher ?" id="recherche"  />								
							</label>
							
							
							<input type="image" class="submit" id="searchsubmit" name="submit" src="<?php bloginfo('template_url'); ?>/medias/bouton_submit.png" alt="Chercher !" title="Chercher !" />
						</fieldset>
					</form>