            <?php var_dump($category) ?>
            <a href="<?php get_permalink($category->ID) ?>"><?=$category->name?></a>
            <p><?php echo esc_html( $category->description ); ?></p>



                <?php 
        $collection = get_field('collection');
        if( $collection ): ?> 
            <?php foreach( $collection as $c ): //look at each garnish and get the data from that content type
                        $permalink = get_permalink( $c->ID );
                        $title = get_the_title( $c->ID );
                        // $custom_field = get_field( 'field_name', $g->ID );
                        ?>
                    <?php endforeach; ?>
            <a href="<?php $permalink ?>">link</a>
<!-- this isbn't working at all -->
        <?php endif; ?>

            <?php 
        $collection_slug = get_field('collection');
        $collection_permalink = get_permalink( get_page_by_path( $collection_slug ) );
        ?>

        <a href="<?php $collection_slug ?>"><?=$collection_slug?></a>




        <section class="page-section">
    <inner-column>
        <h1>Juices</h1>

        <div class="ingredient-list">
            <?php

                $parameters = array(
                    'post_type' => 'juice',
                    );

                    $query = new WP_Query( $parameters ); 

                    while ( $query->have_posts() ) : $query->the_post(); 
                        include(getFile('templates/components/ingredient-card.php'));

                    endwhile;

                    wp_reset_postdata(); 
            ?>
        </div>
    </inner-column>
</section>


<section class="page-section">
    <inner-column>
        <h1>Liqueurs</h1>

        <div class="ingredient-list">
            <?php

                $parameters = array(
                    'post_type' => 'liqueur',
                    );

                    $query = new WP_Query( $parameters ); 

                    while ( $query->have_posts() ) : $query->the_post(); 
                        include(getFile('templates/components/ingredient-card.php'));

                    endwhile;

                    wp_reset_postdata(); 
            ?>
        </div>
    </inner-column>
</section>

<section class="page-section">
    <inner-column>
        <h1>Syrups</h1>

        <div class="ingredient-list">
            <?php

                $parameters = array(
                    'post_type' => 'syrup',
                    );

                    $query = new WP_Query( $parameters ); 

                    while ( $query->have_posts() ) : $query->the_post(); 
                        include(getFile('templates/components/ingredient-card.php'));

                    endwhile;

                    wp_reset_postdata(); 
            ?>
        </div>
    </inner-column>
</section>

<section class="page-section">
    <inner-column>
        <h1>Spirits</h1>

        <div class="ingredient-list">
            <?php

                $parameters = array(
                    'post_type' => 'spirits',
                    );

                    $query = new WP_Query( $parameters ); 

                    while ( $query->have_posts() ) : $query->the_post(); 
                        include(getFile('templates/components/ingredient-card.php'));

                    endwhile;

                    wp_reset_postdata(); 
            ?>
        </div>
    </inner-column>
</section>

<section class="page-section">
    <inner-column>
        <h1>Garnishes</h1>

        <div class="ingredient-list">
            <?php

                $parameters = array(
                    'post_type' => 'garnish',
                    );

                    $query = new WP_Query( $parameters ); 

                    while ( $query->have_posts() ) : $query->the_post(); 
                        include(getFile('templates/components/ingredient-card.php'));

                    endwhile;

                    wp_reset_postdata(); 
            ?>
        </div>
    </inner-column>
</section>


// or 


<section class="page-section">
    <inner-column>

        <div class="ingredient-list">
            <?php

                $liquor = array(
                    'post_type' => 'liquor',
                    );

                    $query = new WP_Query( $liquor ); 

                    while ( $query->have_posts() ) : $query->the_post(); 
    
                        include(getFile('templates/components/ingredient-card.php'));

                    endwhile;

                    wp_reset_postdata(); 

                $juice = array(
                    'post_type' => 'juice',
                    );

                    $query = new WP_Query( $juice ); 

                    while ( $query->have_posts() ) : $query->the_post(); 
                        include(getFile('templates/components/ingredient-card.php'));

                    endwhile;

                    wp_reset_postdata();
            ?>
        </div>
    </inner-column>
</section>








----


collection detial

<?php
    if ($query->have_posts())
        if( $query ): ?>

        <?php foreach( $query as $cocktail ): //look at each cocktail and get the data from that content type
        $permalink = get_permalink( $cocktail );
        $title = get_the_title( $cocktail);
        ?>

        <a href="><?=$permalink?>"><?=$title?></a>

        <?php endforeach; ?>

    <?php endif; ?>




    

      foreach( $collections as $collection ): //look at each collection and get the data from that content type
                $title = get_the_title( $collection);
                $name = get_sub_field($name);
                ?>

                 <?=$name?>

                <?php endforeach; ?>
                <?php
                    $name = new WP_Query( $parameters ); 

                    while ( $query->have_posts() ) : $query->the_post(); 
                        include(getFile('templates/components/collection-card.php'));

                    endwhile;

                    wp_reset_postdata(); 
            ?>