<?php
    $name = get_field('name');
    $description = get_field('description');
    $bases = get_field('base_spirit'); 
?>
<?php
    $collections = get_field('collection'); 
    
    if( $collections ): ?>

        <?php foreach( $collections as $collection ):
            $collection_link = get_permalink( $collection->ID );
            $collection_title = get_the_title( $collection->ID );
        ?>

    <?php endforeach; ?>
<?php endif; ?>

<?php

if( $bases ): ?>

    <?php foreach( $bases as $base ):
        $base_link = get_permalink( $base->ID );
        $spirit = get_the_title( $base->ID );

     ?>

    <?php endforeach; ?>
<?php endif; ?>



<cocktail-card>
    <div class="name-wrapper">
    <h2 class="name attention-voice "><?=$name?></h2>
   </div>

   <div class="sorting-wrapper">
    
    <p class="collection-title calm-voice-plus"><a href="<?=$collection_link?>"><?=$collection_title?></a></p>
    
    <p class="spirit calm-voice-plus"><a href="<?=$base_link?>"><?=$spirit?></a></p>
   </div>

    <a class="description-box calm-voice" href="<?php the_permalink(); ?>" >
        <box>
            <p class="description"><?=$description?></p>
        </box>
    </a>

</cocktail-card>



