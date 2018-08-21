<?php

/*
* Template Name: Pagina Product Review
* Description: Web Mundo Superheroes
*/

get_header(); ?>

<div class="container">

	<div class="contingutReviewProducte">

		<?php
			while ( have_posts() ) : the_post();
				the_content();
			endwhile;
		?>
	</div>

</div>

<?php get_footer(); ?>