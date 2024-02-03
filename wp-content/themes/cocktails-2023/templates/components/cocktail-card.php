<?php
	$name = get_field('name');
	$description = get_field('description');
	$bases = get_field('base_spirit'); //this field is a relationship, can be many base
?>





<cocktail-card>
	<div>
		<h2 class="name"><?=$name?></h2>
	</div>
	
 <?php
     
         if( $bases ): ?>
             <ul>
                 <?php foreach( $bases as $base ): //look at each garnish and get the data from that content type
                     $base_link = get_permalink( $base->ID );
                     $spirit = get_the_title( $base->ID );

                     ?>
             
                 <?php endforeach; ?>
             </ul>


 <?php endif; ?>

  <?php
        $collections = get_field('collection'); //this field is a relationship, can be many collections
            if( $collections ): ?>

                <?php foreach( $collections as $collection ): //look at each collection and get the data from that content type
                    $permalink = get_permalink( $collection->ID );
                    $collection_title = get_the_title( $collection->ID );
                    ?>

                    <p class="collection-title"><a href="<?php the_permalink($collection->ID) ?>"><?=$collection_title?></a></p>

                <?php endforeach; ?>

    <?php endif; ?>
	

		<p class="spirit"><a href="<?=$base_link?>"><?=$spirit?></a></p>



	<a class="box" href="<?php the_permalink(); ?>" >
		<box>
			<p class="description"><?=$description?></p>
		</box>
	</a>

</cocktail-card>



