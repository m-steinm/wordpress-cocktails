<?php
    $name = get_field('name');
    $description = get_field('description');

?>

<section class="page-section">

    <div class="collection-list">

       <?=$name?>

    <?php
    $cocktails = get_field('cocktails'); //this field is a relationship, can be many cocktails
    if( $cocktails ): ?>

        <?php foreach( $cocktails as $cocktail ): //look at each cocktail and get the data from that content type
        $permalink = get_permalink( $cocktail->ID );
        $title = get_the_title( $cocktail->ID );
        ?>

            <cocktail-card>

            <h1 class="name attention-voice "><?=$title?></h2>

        <a class="description-box calm-voice" href="<?php the_permalink(); ?>" >
            <box>
                <p class="description"><?=$info?></p>
            </box>
        </a>

    </cocktail-card>

        <?php endforeach; ?>

    <?php endif; ?>

        </div>
</section>