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