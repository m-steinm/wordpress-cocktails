<section class="page-section">
	<inner-column>
		<!-- <h1>Cocktails</h1> -->

		<div class="cocktail-list">
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
		</div>
	</inner-column>
</section>