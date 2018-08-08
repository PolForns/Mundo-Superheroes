<?php

/*
* Template Name: Etiquetes
* Description: Web Mundo Superheroes
*/

get_header(); ?>

<div class="container">
		
	<header>
		<a href="http://www.mundo-superheroes.com"><img class="logoPetit" src="http://www.mundo-superheroes.com/wp-content/uploads/2017/12/logo-portada.png" alt="Logo Mundo Superhéroes"></a>
	</header>

	<?php
		while ( have_posts() ) : the_post();
			the_content();
		endwhile;
	?>

</div>


<?php get_footer(); ?>