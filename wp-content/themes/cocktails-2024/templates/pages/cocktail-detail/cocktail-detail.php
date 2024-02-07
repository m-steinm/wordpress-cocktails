<?php
$name = get_field('name');
$description = get_field('description');
$notes = get_field('notes');
?>



<?php
    $collections = get_field('collection');
        if( $collections ): ?>
            <?php foreach( $collections as $collection ):
                $permalink = get_permalink( $collection->ID );
                $title = get_the_title( $collection->ID );
                ?>
            <?php endforeach; ?>
        <?php endif; ?>

<div class="detail-container">

    <section class="page-section detail">
    <inner-column>
      
        <div class="detail-header">
            <h1 class="loud-voice"><?=$name?></h1>
        </div>   

        <a class="collection calm-voice-plus" href="<?php the_permalink($collection->ID) ?>"><?=$title?></a>

    </inner-column>
    </section>

<section class="page-section recipe calm-voice">
<inner-column>

<?php
    $ingredients = get_field('ingredients');
        if( have_rows('ingredients') ): ?>
        <ul>
            <?php while( have_rows('ingredients') ) : the_row();?>
                <li>
                    <?php
                        $ingredient = get_sub_field('ingredient')[0];
                        $liquor = $ingredient->post_title;
                    ?>
                    
                    <a href="<?=the_permalink($ingredient->ID)?>"><?=$liquor?></a>
                    -
                    <?php
                        $measurment = get_sub_field('measurment');
                        echo $measurment;

                        the_sub_field('unit');
                    ?> 
                </li>
            <?php endwhile; ?>
<?php
    $garnishes = get_field('garnish');
        if( $garnishes ): ?>
            <?php foreach( $garnishes as $g ):
                $permalink = get_permalink( $g->ID );
                $garnish = get_the_title( $g->ID );
            ?>
                            <li class="garnish"><?=$garnish?></li>

            <?php endforeach; ?>
        <?php endif; ?>
            </ul>
            <?php        
            else :
            endif;
?>
        <div class="note-wrapper">
        <p class="notes"><?=$notes?></p>
        </div>
</inner-column>
</section>

 <p class="description"><?=$description?></p>

</div>



