<section class="page-section">
	<inner-column>
		<h1>Liquors</h1>

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
	</inner-column>
</section>

<section class="page-section">
	<inner-column>
		<h1>Juices</h1>

		<div class="ingredient-list">
			<?php

				$parameters = array(
					'post_type' => 'juice',
					);

					$query = new WP_Query( $parameters ); 

					while ( $query->have_posts() ) : $query->the_post(); 
						include(getFile('templates/components/ingredient-card.php'));

					endwhile;

					wp_reset_postdata(); 
			?>
		</div>
	</inner-column>
</section>