	<div id="footer">
	
		<div id="wrapper_bottom">
				<!---Widget-->
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer gauche") ) : ?>
					<!---texte qui apparaît si aucun widget-->
					<p>Insérez un Widget</p>
				<?php endif; ?>
			
				<!---Widget-->
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer milieu") ) : ?>
					<!---texte qui apparaît si aucun widget-->
					<p>Insérez un Widget</p>
				<?php endif; ?>
			
			<div id="module_bottom3" class="module_bottom">
				<h2>Contact</h2>
				
				<form class="form" method="post" action="#">
					<fieldset>
						<legend>Formulaire de contact</legend>
						
						<label>
							<span>Nom</span>
							<input type="text"  />								
						</label>
						
						<label>
							<span>Adresse Email</span>
							<input type="text"  />								
						</label>
						
						<label>
							<span>Votre Message</span>
						<textarea cols="3" rows="3"></textarea>
						</label>
						
						<input type="image" class="submit" name="submit" src="<?php bloginfo('template_url'); ?>/medias/bouton_envoyer.png" alt="Submit" title="Submit" />
					</fieldset>
				</form>				
		
			</div><!--module_bottom3-->
			
		
		</div><!--wrapper_bottom-->

	</div><!--footer-->

<?php wp_footer() ?>	
</body>

</html>
