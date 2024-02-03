<?php
    $name = get_field('name');
    $description = get_field('description');

?>

<section class="page-section">

    <div class="collection-list">

    <inner-column>

       <?=$name?>

    <?php
    $cocktails = get_field('cocktails'); //this field is a relationship, can be many cocktails
    if( $cocktails ): ?>

        <?php foreach( $cocktails as $cocktail ): //look at each cocktail and get the data from that content type
        $permalink = get_permalink( $cocktail->ID );
        $title = get_the_title( $cocktail->ID );
        ?>

        <a href="><?=$permalink?>"><?=$title?></a>

        <?php endforeach; ?>

    <?php endif; ?>

        </div>
    </inner-column>
</section>