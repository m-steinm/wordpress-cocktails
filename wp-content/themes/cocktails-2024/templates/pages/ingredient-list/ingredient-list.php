<section class="page-section">
	
		<h1 class="loud-voice">Juices</h1>

		<div class="ingredient-list">
			<?php

				$parameters = [
					'post_type' => 'juice',
					];

					$query = new WP_Query( $parameters ); 

					while ( $query->have_posts() ) : $query->the_post(); 
						include(getFile('templates/components/ingredient-card/ingredient-card.php'));

					endwhile;

					wp_reset_postdata(); 
			?>
		</div>
	
</section>


<section class="page-section">
		<h1 class="loud-voice">Liqueurs</h1>

		<div class="ingredient-list">
			<?php

				$parameters = array(
					'post_type' => 'liqueur',
					);

					$query = new WP_Query( $parameters ); 

					while ( $query->have_posts() ) : $query->the_post(); 
						include(getFile('templates/components/ingredient-card/ingredient-card.php'));

					endwhile;

					wp_reset_postdata(); 
			?>
		</div>
</section>

<section class="page-section">
		<h1 class="loud-voice">Syrups</h1>

		<div class="ingredient-list">
			<?php

				$parameters = array(
					'post_type' => 'syrup',
					);

					$query = new WP_Query( $parameters ); 

					while ( $query->have_posts() ) : $query->the_post(); 
						include(getFile('templates/components/ingredient-card/ingredient-card.php'));

					endwhile;

					wp_reset_postdata(); 
			?>
		</div>
</section>

<section class="page-section">
		<h1 class="loud-voice">Spirits</h1>

		<div class="ingredient-list">
			<?php

				$parameters = array(
					'post_type' => 'spirits',
					);

					$query = new WP_Query( $parameters ); 

					while ( $query->have_posts() ) : $query->the_post(); 
						include(getFile('templates/components/ingredient-card/ingredient-card.php'));

					endwhile;

					wp_reset_postdata(); 
			?>
		</div>
</section>

<section class="page-section">
		<h1 class="loud-voice">Garnishes</h1>

		<div class="ingredient-list">
			<?php

				$parameters = array(
					'post_type' => 'garnish',
					);

					$query = new WP_Query( $parameters ); 

					while ( $query->have_posts() ) : $query->the_post(); 
						include(getFile('templates/components/ingredient-card/ingredient-card.php'));

					endwhile;

					wp_reset_postdata(); 
			?>
		</div>
</section>

<section class="page-section">
		<h1 class="loud-voice">Liquor</h1>

		<div class="ingredient-list">
			<?php

				$parameters = array(
					'post_type' => 'liquor',
					);

					$query = new WP_Query( $parameters ); 

					while ( $query->have_posts() ) : $query->the_post(); 
						include(getFile('templates/components/ingredient-card/ingredient-card.php'));

					endwhile;

					wp_reset_postdata(); 
			?>
		</div>
</section>