<?php
	$name = get_field('name');
	$description = get_field('description');

?>
<inner-column>
<ingredient-card>
	<div class="ingredient-name">
	<h2 class=" attention-voice"><?=the_title()?></h2>
</div>
<div class="ingredient-description">
	<p class=" calm-voice"><?=$description?></p>
</div>
</ingredient-card>
</inner-column>