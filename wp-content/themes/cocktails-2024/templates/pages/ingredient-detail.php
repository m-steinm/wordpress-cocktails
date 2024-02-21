<?php
	$name = get_field('name');
	$description = get_field('description');

?>

<ingredient-detail>
	<div class="ingredient-name">
	<h2 class=" attention-voice"><?=the_title()?></h2>
</div>
<div class="ingredient-description">
	<p class=" calm-voice"><?=$description?></p>
</div>
</ingredient-detail>
