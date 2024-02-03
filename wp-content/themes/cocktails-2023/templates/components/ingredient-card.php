<?php
	$name = get_field('name');
	$description = get_field('description');

?>

<ingredient-card>
	<h2 class="name"><?=the_title()?></h2>

	<!-- <p class="description"><?=$description?></p> -->

	<!-- 
 		to do 
 		
		if there is a description
		display the link for 'more'

	 -->

	<a href="<?php the_permalink(); ?>">More</a>

</ingredient-card>

