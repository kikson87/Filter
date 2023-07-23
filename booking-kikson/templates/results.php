<?php

 add_shortcode( 'filter_booking_kikson', 'filter_booking_kikson' );

 function results_booking_kikson( $atts ){ ?>

    <div class="results-booking-kikson">
        <?php

            $args = array(
                'post_type' => 'booking',
                'posts_per_page' => -1,
            );

            $query = new WP_Query( $args );


            if ( $query->have_posts() ) {

                while ( $query->have_posts() ) {
                    $query->the_post();

                    $title = get_the_title();
                    $thumbnail = get_the_post_thumbnail();
                    $permalink = get_the_permalink();

                    $maxchar = 72;
                    $text = strip_tags( get_the_content() );
                    $content = mb_substr( $text, 0, $maxchar );

                    $results = $results . '<a href="' . $permalink . '" class="single-booking-result">';
                    $results = $results . '<div class="image">' . $thumbnail . '</div>';
                    $results = $results . '<div class="title">' . $title . '</div>';
                    $results = $results . '<div class="excerpt">' . $content . '...</div>';
                    $results = $results . '</a>';

                }
            }
            else {
                $results = 'No results.';
            }

            return $results;

            wp_reset_postdata(); ?>
    </div>

 <?php }

 add_shortcode( 'results_booking_kikson', 'results_booking_kikson' ); ?>
