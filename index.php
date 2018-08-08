<?php

/*
* Template Name: Paàgina d'inici
* Description: Web Mundo Superheroes
*/

get_header(); ?>

<div class="container">
		
	<header>
		<img class="logoPortada" src="http://www.mundo-superheroes.com/wp-content/uploads/2017/12/logo-portada.png" alt="Logo Mundo Superhéroes">
	</header>

	<div class="contingutPortada">
		<div>
			<h2>Categorias de productos</h2>
		</div>
		<div>
			<h2>Etiquetas</h2>
		</div>
		<div>
			<h2>Destacados</h2>
		</div>
	</div>

	<?php
		while ( have_posts() ) : the_post();
			the_content();
		endwhile;
	?>

</div>


<?php get_footer(); ?>