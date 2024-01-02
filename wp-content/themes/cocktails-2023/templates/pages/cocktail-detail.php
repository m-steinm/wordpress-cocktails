<?php
	$name = get_field('name');
	$description = get_field('description');
	$notes = get_field('notes');

?>

<section class="page-section">
<inner-column>
	
	<h1 class="name"><?=$name?></h1>
	<p class="description">DESCRIPTION:<?=$description?></p>

	<p class="notes">NOTES:<?=$notes?></p>

</inner-column>
</section>

<section>
<inner-column>
	
		<?php
$garnishes = get_field('garnish'); //this field is a relationship, can be many garnishes
if( $garnishes ): ?>
    <ul>
    <?php foreach( $garnishes as $g ): //look at each garnish and get the data from that content type
        $permalink = get_permalink( $g->ID );
        $title = get_the_title( $g->ID );
        // $custom_field = get_field( 'field_name', $g->ID );
        ?>
        <li>
            GARNISH: <?=$title?>
        </li>
    <?php endforeach; ?>
    </ul>


<?php endif; ?>


</inner-column>
</section>

<section>
<inner-column>
	
		<?php
$ingredients = get_field('ingredients');

    // Check rows exists.
    if( have_rows('ingredients') ):

        // Loop through rows.
        while( have_rows('ingredients') ) : the_row();
//can be abstracted
            $ingredient = get_sub_field('ingredient')[0];
            $liquor = $ingredient->post_title;
                echo $liquor;
            // Load sub field value.
            $measurment = get_sub_field('measurment');
            // Do something...
            echo $measurment;

            the_sub_field('unit');
            // Do something...
           

        // End loop.
        endwhile;

    // No value.
    else :
        // Do something...
    endif;
?>

</inner-column>
</section>

<?php
//print_r(array_values($ingredients));


