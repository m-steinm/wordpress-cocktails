<?php
$name = get_field('name');
$description = get_field('description');
$notes = get_field('notes');

$picture = get_field('picture');
?>


<!-- clean up this part -->
<?php
    $collections = get_field('collection');
        if( $collections ): ?>
            <?php foreach( $collections as $collection ):
                $permalink = get_permalink( $collection->ID );
                $title = get_the_title( $collection->ID );
                ?>
            <?php endforeach; ?>
        <?php endif; ?>

<div class="cocktail-detail">

    <section class="detail">
      
        <div class="detail-header">
            <h1 class="loud-voice"><?=$name?></h1>
        </div>   
    
    </section>
<div class="collection">
    <a class=" calm-voice-plus" href="<?php the_permalink($collection->ID) ?>"><?=$title?></a>
</div>

<div class="recipe-wrapper">
<section class="recipe calm-voice">

<?php
    $ingredients = get_field('ingredients');
        if( have_rows('ingredients') ): ?>
        <ul>
            <?php while( have_rows('ingredients') ) : the_row();?>
                <li>
                    <!-- this could be its own card -->
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
        <div class="notes">
        <p><?=$notes?></p>
        </div>
        
</section>
</div>

<picture style='background-image: url(<?=$picture['url']?>') >
    <!-- <img class="cocktail-picture" src="" alt=""> -->
</picture>
<div class="description">
    <p class="calm-voice"><?=$description?></p>
</div>
</div>



