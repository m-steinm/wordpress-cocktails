<?php
	$name = get_field('name');
	$description = get_field('description');

?>

<ingredient-card>

	<h2 class="name attention-voice"><?=the_title()?></h2>
		<?php if($description) {?> 
			<div class="more">
				<a class="link-voice"href="<?php the_permalink(); ?>">
				More</a>
			</div>
		<?php } ?>

</ingredient-card>

