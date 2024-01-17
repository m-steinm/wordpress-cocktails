<?php
	$name = get_field('name');
	$description = get_field('description');

?>

<cocktail-card>

	<h2 class="name"><?=$name?></h2>
	
	<a href="<?php the_permalink(); ?>">
		<box>
	<p class="description"><?=$description?></p>
	</box>
	</a>


<!-- 	<h2>Ingredient</h2>
	<h2>Ingredient 2</h2>
	<h2>Garnish</h2>
	<h2>Glassware</h2> -->


</cocktail-card>

