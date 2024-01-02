<section class="page-section">
	<inner-column>
		<h1>This is the list page now</h1>

		<?php

			$parameters = array(
				'post_type' => 'cocktail',
				);

				$query = new WP_Query( $parameters ); 

				while ( $query->have_posts() ) : $query->the_post(); 
					include(getFile('templates/components/cocktail-card.php'));

				endwhile;

				wp_reset_postdata(); 
		?>
	</inner-column>
</section>