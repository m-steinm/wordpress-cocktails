<?php
	$name = get_field('name');
	$description = get_field('description');

?>

<collection-card>
	<h2 class="name"><?=$name?></h2>

	<p class="description"><?=$description?></p>

	<?php
	$cocktails = get_field('cocktails'); //this field is a relationship, can be many cocktails
	if( $cocktails ): ?>

		<?php foreach( $cocktails as $cocktail ): //look at each cocktail and get the data from that content type
		$permalink = get_permalink( $cocktail->ID );
		$title = get_the_title( $cocktail->ID );
		?>

		<a href="><?=$permalink?>"><?=$title?></a>

		<?php endforeach; ?>

	<?php endif; ?>


	<a href="<?php the_permalink(); ?>">More</a>

</collection-card>


	