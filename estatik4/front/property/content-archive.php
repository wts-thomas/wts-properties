<?php $target_blank = ! empty( $target_blank ) ? $target_blank : '';

if ( empty( $ignore_wrapper ) ) : ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php endif; ?>
    <div class="js-es-listing es-listing es-listing--<?php the_ID(); ?>" data-post-id="<?php the_ID(); ?>">
        <?php es_load_template( 'front/property/content-archive-image.php', array(
                'target_blank' => $target_blank,
                'wishlist_confirm' => ! empty( $wishlist_confirm ) ? $wishlist_confirm : null,
                'show_compare' => isset( $show_compare ) ? $show_compare : true,
        ) ); ?>
        <div class="es-listing__content">
            <div class="es-listing__content__inner">
                
               <div class="es-listing__content__left">
                     <?php if( get_field('poh_listing-entry-number') ): ?>
                        <div class="poh_entry-container">
                           <strong><?php the_field('poh_listing-entry-number'); ?></strong>
                        </div>
                     <?php endif; ?>
                    <?php es_the_title( '<h3 class="es-listing__title">
                        <a href="' . es_get_the_permalink() . '" ' . $target_blank . '>', '</a></h3>' ); ?>
                    <div class='es-badges es-listing--hide-on-list'>
                        <?php es_the_price();
                        es_the_field( 'price_note', '<span class="es-badge es-badge--normal">', '</span>' ); ?></div>
                    <?php es_the_address( '<div class="es-address es-listing--hide-on-grid">', '</div>' );
                    if ( get_the_excerpt() && ests( 'is_listing_description_enabled' ) ) : ?>
                        <p class="es-excerpt es-listing--hide-on-grid"><?php the_excerpt(); ?></p>
                    <?php endif;
                    do_action( 'es_property_meta', array( 'use_icons' => true ) );
                    es_the_address( '<div class="es-address es-listing--hide-on-list">', '</div>' ); ?>
                     <?php if( get_field('poh_community-logo') ): ?>
                        <div class="pohCommunity-logo"><img src="<?php the_field('poh_community-logo'); ?>" /></div>   
                     <?php endif; ?>
                </div>
                
                <div class="es-listing__content__right es-listing--hide-on-grid">
                    <div class="es-property__control es-listing--hide-on-grid">
                        <?php do_action( 'es_property_control', array(
                            'show_sharing' => false,
                            'is_full' => false,
                            'icon_size' => 'big',
                            'context' => 'property-content',
                            'show_compare' => isset( $show_compare ) ? $show_compare : false,
                        ) ); ?>
                    </div>
                    <?php es_the_price(); ?>
                    <?php es_the_field( 'price_note', '<span class="es-badge es-badge--normal">', '</span>' ); ?>
                </div>
            </div>
            <div class="es-listing__footer">
                <!-- <?php es_load_template( 'front/property/partials/property-terms.php' ); ?> -->
            </div>

            <?php do_action( 'es_after_property_content', get_the_ID() ); ?>
        </div>
    </div>
<?php if ( empty( $ignore_wrapper ) ) : ?>
    </div>
<?php endif;
