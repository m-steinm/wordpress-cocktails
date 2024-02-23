<?php
	$name = get_field('name');
	$description = get_field('description');
	$notes = get_field('notes');
    ?>


    <?php
        $garnishes = get_field('garnish'); //this field is a relationship, can be many garnishes
            if( $garnishes ): ?>
                <ul>
                    <?php foreach( $garnishes as $g ): //look at each garnish and get the data from that content type
                        $permalink = get_permalink( $g->ID );
                        $title = get_the_title( $g->ID );
                        // $custom_field = get_field( 'field_name', $g->ID );
                        ?>
                
                    <?php endforeach; ?>
                </ul>


    <?php endif; ?>

      <?php
        $collections = get_field('collection'); //this field is a relationship, can be many collections
            if( $collections ): ?>

                <?php foreach( $collections as $collection ): //look at each collection and get the data from that content type
                    $permalink = get_permalink( $collection->ID );
                    $title = get_the_title( $collection->ID );
                    ?>

                <?php endforeach; ?>

    <?php endif; ?>

<div class="cocktail-detail">


<section class="page-section detail">
<inner-column>
    <div class="detail-header">
        <h1 class="loud-voice"><?=$name?></h1>
                            

    </div>   
<a class="collection" href="<?php the_permalink($collection->ID) ?>"><?=$title?></a>
  

    	<p class="description"><?=$description?></p>

</inner-column>
</section>


    

<section class="page-section recipe">
<inner-column>
        <?php
        $ingredients = get_field('ingredients');

            // Check rows exists.
            if( have_rows('ingredients') ): ?>
                <ul>
        <?php            
                // Loop through rows.
                while( have_rows('ingredients') ) : the_row();
        //can be abstracted
                    ?>
                    <li>
        <?php
                    $ingredient = get_sub_field('ingredient')[0];
                    $liquor = $ingredient->post_title;
                    ?>
                    <a href="<?=the_permalink($ingredient->ID)?>">

                        <?=$liquor?>
                        </a>
<!-- 
                        // the_permalink($ingredient->ID)
                    // Load sub field value.
                         -->
                            -
                            <?php
                    $measurment = get_sub_field('measurment');
                    // Do something...
                    echo $measurment;

                    the_sub_field('unit');
                    // Do something...
                  
                  ?> 
                     </li>
        <?php             
                // End loop.
                endwhile;
                ?>
                 <li class="garnish">
                    <?=$title?>
                  </li>
                </ul>
        <?php        
            // No value.
            else :
                // Do something...
            endif;
        ?>

            <p class="notes"><?=$notes?></p>

</inner-column>
</section>

</div>



