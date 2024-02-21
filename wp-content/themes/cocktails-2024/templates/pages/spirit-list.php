
</section>

<section class="page-section">
		<h1>Liquor</h1>

		<div class="ingredient-list">
			<?php

				$parameters = array(
					'post_type' => 'liquor',
					);

					$query = new WP_Query( $parameters ); 

					while ( $query->have_posts() ) : $query->the_post(); 
						include(getFile('templates/components/ingredient-card.php'));

					endwhile;

					wp_reset_postdata(); 
			?>
		</div>
</section>