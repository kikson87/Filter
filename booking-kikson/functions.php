<?php 

/* AJAX URL */

add_action('wp_head', 'myplugin_ajaxurl');

function myplugin_ajaxurl() {

   echo '<script type="text/javascript">
           var ajaxurl = "' . admin_url('admin-ajax.php') . '";
         </script>';
}

/* AJAX URL */

/* BOOKING LOCATION */

add_action('wp_ajax_booking_location', 'booking_location');
add_action('wp_ajax_nopriv_booking_location', 'booking_location');

function booking_location() {

    $tester = $_POST['booking_location']; ?>
    
        <?php 
        $args = array(
            'taxonomy' => 'location',
            'orderby' => 'name',
            'order' => 'ASC',
            'hide_empty' => false,
            'search' => $tester,
        );
        $the_query = new WP_Term_Query($args);
        foreach($the_query->get_terms() as $term){ ?>
            <div class="location-answer">
                <div class="location-answer-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15 8.25a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm1.5 0a4.5 4.5 0 1 0-9 0 4.5 4.5 0 0 0 9 0zM12 1.5a6.75 6.75 0 0 1 6.75 6.75c0 2.537-3.537 9.406-6.75 14.25-3.214-4.844-6.75-11.713-6.75-14.25A6.75 6.75 0 0 1 12 1.5zM12 0a8.25 8.25 0 0 0-8.25 8.25c0 2.965 3.594 9.945 7 15.08a1.5 1.5 0 0 0 2.5 0c3.406-5.135 7-12.115 7-15.08A8.25 8.25 0 0 0 12 0z"></path></svg>
                </div>
                <div class="location-answer-text"><?php echo $term->name." (".$term->count.")"; ?></div>
            </div>
        <?php
        } ?>

    <?php wp_die();

    }

/* BOOKING LOCATION */

?>