<section class="page-section">
		<!-- <h1>Cocktails</h1> -->

		<ul class="cocktail-list">
			<?php

				$parameters = [
					'post_type' => 'cocktail',
				];

				$query = new WP_Query( $parameters ); 

				while ( $query->have_posts() ) : $query->the_post(); 
					include(getFile('templates/components/cocktail-card/cocktail-card.php'));
				endwhile;

				wp_reset_postdata(); 
			?>

		</ul>
</section>

<!-- add list items -->