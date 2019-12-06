<!DOCTYPE html>
<html lang="fr">
<head>

<title>AlsaWP</title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="bidulum..." />
<meta name="description" content="lorem ipsum.." />

<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/medias/favicon.ico" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style/style.css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
<!--[if gte IE 6]><link type="text/css" rel="stylesheet" href="style/ie.css" media="all" /><![endif]-->

</head>
<body>

	<div id="wrapper">
	
		<div id="header">
		
			<div id="bandeau">
			
				<a href="http://www.alsacreations.com"><img src="<?php bloginfo('template_url'); ?>/medias/logo.png" alt="logo JoomAlsa" id="logo"/></a>
				<a href="#" id="admin">Espace Soline est dans la place !</a>
				
			<div class="pousseur"></div>
			</div><!--bandeau-->
			
			<h1><a href="#" title="<?php wp_title('');?>JoomAlsa"><img id="titre" alt="Titre du site" src="<?php bloginfo('template_url'); ?>/medias/titre.png"/></a></h1>
			
		</div><!--header-->	

		<div id="navigation">
			<ul>
				<li><a href="#">Accueil</a></li>	
				<li><a href="#">Page</a></li>	   
				<li><a href="#">Contact</a></li>	  
			</ul>
		</div><!--navigation-->			
		
		<div id="content">
		
			<div id="main">
				<h2>A la une :</h2>
				
				<div class="billet">
				<div class="pousseur"></div>	
					<a href="#" title="titre"><img class="vignette" src="<?php bloginfo('template_url'); ?>/medias/wordpress.png" alt="vignette" width="127" height="115"/></a>
					
					<div class="extrait">
						<h3><a href="#" title="titre">Ma vie en AlsaWP</a></h3>
						<p>La vie en AlsaWP création est très intéressant et vraiment très chouette, n'hésitez pas à lire cet article vraiment très intéressant </p>
						<p class="next"><a href="#" title="commentaire">Lire la suite</a></p>
					</div><!--extrait-->
				
				<div class="pousseur"></div>	
				</div><!--billet-->
				
			
			</div><!--main-->
			
			<div id="side">
				
				
				<div class="module">
				<h2>Recherche</h2>
				
					<form class="form" method="post" action="#">
						<fieldset>
							<legend>Recherche</legend>
							
							<label>
								<input type="text" value="Que dois-je chercher ?" id="recherche"  />								
							</label>
							
							
							<input type="image" class="submit" name="submit" src="<?php bloginfo('template_url'); ?>/medias/bouton_submit.png" alt="Chercher !" title="Chercher !" />
						</fieldset>
					</form>
									
				</div><!--module-->
				
				<div class="module">
				<h2>Module 1</h2>
				
					<p>Insertion du module</p>
					
									
				</div><!--module-->				
				
				<div class="module">
				<h2>Module 2</h2>
				
					<p>Insertion du module</p>
					
				</div><!--module-->
				

				
			</div><!--side-->
			
		<div class="pousseur"></div>
		
		</div><!--content-->	
		
	</div><!--wrapper-->
	
	<div id="footer">
	
		<div id="wrapper_bottom">
		
			<div id="module_bottom1" class="module_bottom">
				<h2>A propos :</h2>
				
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, 
				eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae.</p>
				
				<p>totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae.</p>
			</div><!--module_bottom1-->
			
			<div id="module_bottom2" class="module_bottom">
				<h2>Réseaux Sociaux</h2>
			
				<p>At vero eos et accusamus et iusto odio dignissimos ducimus :</p>
				
				<p class="sociaux">
					<a href="#"><img src="<?php bloginfo('template_url'); ?>/medias/twitter.png" alt="Twitter" /></a>
					<a href="#"><img src="<?php bloginfo('template_url'); ?>/medias/facebook.png" alt="Facebook" /></a>	
				</p>
		
			</div><!--module_bottom2-->
			
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

	
</body>