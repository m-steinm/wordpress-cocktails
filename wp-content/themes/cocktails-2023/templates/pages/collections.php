<section class="page-section">
	<inner-column>
		<h1>Collections</h1>

		<div class="collection-list">
			<?php

				$parameters = array(
					'post_type' => 'collection',
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