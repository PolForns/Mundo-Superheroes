<?php

/*
* Template Name: Pàgina d'inici
* Description: Web Mundo Superheroes
*/

get_header(); ?>

<div class="container">
		
	<header>
		<img class="logoPortada" src="http://www.mundo-superheroes.com/wp-content/uploads/2017/12/logo-portada.png" alt="Logo Mundo Superhéroes">
	</header>

	<div class="contingutPortada">
		<?php
			while ( have_posts() ) : the_post();
				the_content();
			endwhile;
		?>
	</div>

</div>


<?php get_footer(); ?>