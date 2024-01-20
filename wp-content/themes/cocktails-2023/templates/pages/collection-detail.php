<section class="page-section">
    <inner-column>
       
        <div class="collection-list">
            
<!-- look at the collection field
    if the link matches the field
    show the list of matching cocktails
 -->

            <?php

                $parameters = array(
                    'post_type' => 'collection',
                    );

                    $query = new WP_Query( $parameters ); 

                    while ( $query->have_posts() ) : $query->the_post(); 
                        include(getFile('templates/components/collection-card.php'));

                    endwhile;

                    wp_reset_postdata(); 
            ?>
        </div>
    </inner-column>
</section>