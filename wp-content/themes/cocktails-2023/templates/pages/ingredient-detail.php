<?php
	$name = get_field('name');
	$description = get_field('description');

?>

<ingredient-card>
	<h2 class="name"><?=the_title()?></h2>

	<p class="description"><?=$description?></p>

</ingredient-card>
