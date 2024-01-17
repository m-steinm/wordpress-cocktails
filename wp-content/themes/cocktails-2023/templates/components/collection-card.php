<?php
	$name = get_field('name');
	$description = get_field('description');

?>

<cocktail-card>
	<h2 class="name"><?=$name?></h2>

	<p class="description"><?=$description?></p>

	<p class="test">test</p>




<!-- 	<h2>Ingredient</h2>
	<h2>Ingredient 2</h2>
	<h2>Garnish</qqh2>
	<h2>Glassware</h2> -->

	<a href="<?php the_permalink(); ?>">More</a>

</cocktail-card>



<!-- scratch 

	$cocktails = get_field('cocktails'); //this field is a relationship, can be many cocktails
	if( $cocktails ): ?>

		<?php foreach( $cocktails as $cocktail ): //look at each cocktail and get the data from that content type
		$permalink = get_permalink( $cocktail->ID );
		$title = get_the_title( $cocktail->ID );
		?>

		<a href="<?php the_permalink($cocktail->ID) ?>"><?=$cocktails?></a>

		<?php endforeach; ?>

	<?php endif; ?>

	-->