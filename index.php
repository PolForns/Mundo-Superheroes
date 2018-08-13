<?php

/*
* Template Name: Pàgina d'inici
* Description: Web Mundo Superheroes
*/

get_header(); ?>

<div class="container">
		
	<header>
		<!-- <h1>MUNDO SUPERHÉROES</h1> -->
		<img class="logoPortada" src="http://mundo-superheroes.com/wp-content/themes/mundo-superheroes/images/logo.png" alt="Mundo Superhéroes">
	</header>

	<div class="contingutPortada">
		<div class="portadaSuperheroe">
			<h2>¡Escoge tu superhéroe!</h2>
			<div class="portadaRecuadres">
				<div class="portadaRecuadres__superheroes portadaRecuadres__superheroes--iron">
					<h3>Iron Man</h3>
				</div>
				<div class="portadaRecuadres__superheroes portadaRecuadres__superheroes--capi">
					<h3>Capitan América</h3>
				</div>
				<div class="portadaRecuadres__superheroes portadaRecuadres__superheroes--batman">
					<h3>Batman</h3>
				</div>
				<div class="portadaRecuadres__superheroes portadaRecuadres__superheroes--spider portadaRecuadres__superheroes--large">
					<h3>Spiderman</h3>
				</div>
				<div class="portadaRecuadres__superheroes portadaRecuadres__superheroes--thor">
					<h3>Thor</h3>
				</div>
				<div class="portadaRecuadres__superheroes portadaRecuadres__superheroes--super portadaRecuadres__superheroes--large">
					<h3>Superman</h3>
				</div>
				<div class="portadaRecuadres__superheroes portadaRecuadres__superheroes--guardi">
					<h3>Guardianes de la Galáxia</h3>
				</div>
				<div class="portadaRecuadres__superheroes portadaRecuadres__superheroes--venga">
					<h3>Los Vengadores</h3>
				</div>
				<div class="portadaRecuadres__superheroes portadaRecuadres__superheroes--dead">
					<h3>Deadpool</h3>
				</div>
				<div class="portadaRecuadres__superheroes portadaRecuadres__superheroes--wonder portadaRecuadres__superheroes--large">
					<h3>Wonder Woman</h3>
				</div>
			</div>
		</div>

		<div class="portadaProducto">
			<h2>o un tipo de producto</h2>
			<div class="portadaRecuadres">
				<div class="portadaRecuadres__inner">
					Camisetas
				</div>
				<div class="portadaRecuadres__inner">
					Funko Pop!
				</div>
				<div class="portadaRecuadres__inner">
					Disfraces
				</div>
				<div class="portadaRecuadres__inner">
					Réplicas
				</div>
			</div>
		</div>

		<div class="portadaDestacados">
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