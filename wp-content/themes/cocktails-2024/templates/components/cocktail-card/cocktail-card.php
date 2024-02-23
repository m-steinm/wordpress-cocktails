<?php
    $name = get_field('name');
    $description = get_field('description');
    $bases = get_field('base_spirit'); 
?>

<?php
    $collections = get_field('collection'); 
    //what if there is more than one collection?
    if ( $collections ): 
        foreach ( $collections as $collection ):
            $collection_link = get_permalink( $collection->ID );// change to custom name field
            $collection_title = get_the_title( $collection->ID );
        endforeach; 
    endif; 


    //clean up the php 
    if ( $bases ):
        foreach ( $bases as $base ):
            $base_link = get_permalink( $base->ID );
            $spirit = get_the_title( $base->ID );
        endforeach; 
    endif; 

?>

<cocktail-card>

    <h1 class="name attention-voice"><?=$name?></h2>

    <div class="filters">
        <!-- just links? -->
        <p class="category calm-voice-plus"><a href="<?=$collection_link?>"><?=$collection_title?></a></p>

        <p class="spirit calm-voice-plus"><a href="<?=$base_link?>"><?=$spirit?></a></p>
    </div>

    <a class="description-box calm-voice" href="<?php the_permalink(); ?>" >
        <box>
            <p class="description"><?=$description?></p>
        </box>
    </a>

</cocktail-card>



