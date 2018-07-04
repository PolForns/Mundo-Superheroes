<?php

/*
* Template Name: Mundo Superheroes ES
* Description: Web Mundo Superheroes
*/

get_header(); ?>

<div class="container">
		
	<header>
		<img class="logoMS" src="http://www.mundo-superheroes.com/wp-content/uploads/2017/12/logo-portada.png" alt="Logo Mundo Superhéroes">
	</header>

	<div id="contingut">
	
		<div id="contacte" class="seccio">
			<h2>Contacta'm!</h2>
			<div id="divForm">
				<?php
				while ( have_posts() ) : the_post();
					the_content();
				endwhile;
				?>
			</div>
		</div>
		
	</div>
</div>


<?php get_footer(); ?>