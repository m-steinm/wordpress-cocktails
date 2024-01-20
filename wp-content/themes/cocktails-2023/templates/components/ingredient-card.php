<?php
	$name = get_field('name');
	$description = get_field('description');

?>

<ingredient-card>
	<h2 class="name"><?=the_title()?></h2>

	<p class="description"><?=$description?></p>
	

<!-- 	<h2>Ingredient</h2>
	<h2>Ingredient 2</h2>
	<h2>Garnish</h2>
	<h2>Glassware</h2> -->

	<a href="<?php the_permalink(); ?>">More</a>

</ingredient-card>

