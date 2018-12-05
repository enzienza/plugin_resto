<?php
/*
Plugin Name: Horairs
Description: Metabox pour les heures d'ouverture et fermeture du resto
Author: Enza Lombardo
Author URI: www.enzalombardo.be
Version: 1.0
*/


/* -------------------------------------------------------------- */
/* -----    METABOX les Heures d'ouverture du restaurant    ----- */
/* -------------------------------------------------------------- */


add_action('add_meta_boxes', 'add_metabox_horaires');

function add_metabox_horaires(){
    add_meta_box('metabox_horaires', 'Heure d\'ouverture', 'MB_contacts', 'contacts');
}

// 2 -  construction de la metabox

function MB_contacts($POST){
    wp_nonce_field(basename(__FILE__), 'metabox_horaires_nonce');
    // lundi ----------------------
    $lundi_midi_de    = get_post_meta($POST->ID, 'lundi_midi_de', true);
    $lundi_midi_a     = get_post_meta($POST->ID, 'lundi_midi_a', true);
    $lundi_soir_de    = get_post_meta($POST->ID, 'lundi_soir_de', true);
    $lundi_soir_a     = get_post_meta($POST->ID, 'lundi_soir_a', true);

    // mardi ----------------------
    $mardi_midi_de    = get_post_meta($POST->ID, 'mardi_midi_de', true);
    $mardi_midi_a     = get_post_meta($POST->ID, 'mardi_midi_a', true);
    $mardi_soir_de    = get_post_meta($POST->ID, 'mardi_soir_de', true);
    $mardi_soir_a     = get_post_meta($POST->ID, 'mardi_soir_a', true);

    // mercredi --------------------
    $mercredi_midi_de = get_post_meta($POST->ID, 'mercredi_midi_de', true);
    $mercredi_midi_a  = get_post_meta($POST->ID, 'mercredi_midi_a', true);
    $mercredi_soir_de = get_post_meta($POST->ID, 'mercredi_soir_de', true);
    $mercredi_soir_a  = get_post_meta($POST->ID, 'mercredi_soir_a', true);

    // jeudi ------------------------
    $jeudi_midi_de    = get_post_meta($POST->ID, 'jeudi_midi_de', true);
    $jeudi_midi_a     = get_post_meta($POST->ID, 'jeudi_midi_a', true);
    $jeudi_soir_de    = get_post_meta($POST->ID, 'jeudi_soir_de', true);
    $jeudi_soir_a     = get_post_meta($POST->ID, 'jeudi_soir_a', true);

    // vendredi -----------------------
    $vendredi_midi_de = get_post_meta($POST->ID, 'vendredi_midi_de', true);
    $vendredi_midi_a  = get_post_meta($POST->ID, 'vendredi_midi_a', true);
    $vendredi_soir_de = get_post_meta($POST->ID, 'vendredi_soir_de', true);
    $vendredi_soir_a  = get_post_meta($POST->ID, 'vendredi_soir_a', true);

    // samedi ----------------------------
    $samedi_midi_de    = get_post_meta($POST->ID, 'samedi_midi_de', true);
    $samedi_midi_a     = get_post_meta($POST->ID, 'samedi_midi_a', true);
    $samedi_soir_de    = get_post_meta($POST->ID, 'samedi_soir_de', true);
    $samedi_soir_a    = get_post_meta($POST->ID, 'samedi_soir_a', true);

    // dimanche --------------------------
    $dimanche_midi_de = get_post_meta($POST->ID, 'dimanche_midi_de', true);
    $dimanche_midi_a  = get_post_meta($POST->ID, 'dimanche_midi_a', true);
    $dimanche_soir_de    = get_post_meta($POST->ID, 'dimanche_soir_de', true);
    $dimanche_soir_a     = get_post_meta($POST->ID, 'dimanche_soir_a', true);

    ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Jour</th>
                <th scope="col">Service du Midi</th>
                <th scope="col">Service du Soir</th>
            </tr>
        </thead>
        <tbody>
            <tr class="item-day">
                <td class="day">Lundi</td>
                <td>
                    <span>
                        <label for="lundi_midi_de"> de </label>
                        <input id="lundi_midi_de" type="time" name="lundi_midi_de" value="<?php echo $lundi_midi_de; ?>"/>
                    </span>
                    <span>
                        <label for="lundi_midi_a"> à </label>
                        <input id="lundi_midi_a" type="time" name="lundi_midi_a" value="<?php echo $lundi_midi_a; ?>"/>
                    </span>
                </td>
                <td>
                    <span>
                        <label for="lundi_soir_de"> de </label>
                        <input id="lundi_soir_de" type="time" name="lundi_soir_de" value="<?php echo $lundi_soir_de; ?>"/>
                    </span>
                    <span>
                        <label for="lundi_soir_a"> à </label>
                        <input id="lundi_soir_a" type="time" name="lundi_soir_a" value="<?php echo $lundi_soir_a; ?>"/>
                    </span>
                </td>
            </tr><!-- ./ itemday -->
            <tr class="item-day">
                <td class="day">Mardi</td>
                <td>
                    <span>
                        <label for="mardi_midi_de"> de </label>
                        <input id="mardi_midi_de" type="time" name="mardi_midi_de" value="<?php echo $mardi_midi_de; ?>"/>
                    </span>
                    <span>
                        <label for="mardi_midi_a"> à </label>
                        <input id="mardi_midi_a" type="time" name="mardi_midi_a" value="<?php echo $mardi_midi_a; ?>"/>
                    </span>
                </td>
                <td>
                    <span>
                        <label for="mardi_soir_de"> de </label>
                        <input id="mardi_soir_de" type="time" name="mardi_soir_de" value="<?php echo $mardi_soir_de; ?>"/>
                    </span>
                    <span>
                        <label for="mardi_soir_a"> à </label>
                        <input id="mardi_soir_a" type="time" name="mardi_soir_a" value="<?php echo $mardi_soir_a; ?>"/>
                    </span>
                </td>
            </tr><!-- ./tr itemday -->
            <tr class="item-day">
                <td class="day">Mercredi</td>
                <td>
                    <span>
                        <label for="mercredi_midi_de"> de </label>
                        <input id="mercredi_midi_de" type="time" name="mercredi_midi_de" value="<?php echo $mercredi_midi_de; ?>"/>
                    </span>
                    <span>
                        <label for="mercredi_midi_a"> à </label>
                        <input id="mercredi_midi_a" type="time" name="mercredi_midi_a" value="<?php echo $mercredi_midi_a; ?>"/>
                    </span>
                </td>
                <td>
                    <span>
                        <label for="mercredi_soir_de"> de </label>
                        <input id="mercredi_soir_de" type="time" name="mercredi_soir_de" value="<?php echo $mercredi_soir_de; ?>"/>
                    </span>
                    <span>
                        <label for="mercredi_soir_a"> à </label>
                        <input id="mercredi_soir_a" type="time" name="mercredi_soir_a" value="<?php echo $mercredi_soir_a; ?>"/>
                    </span>
                </td>
            </tr><!-- ./tr itemday -->
            <tr class="item-day">
                <td class="day">Jeudi</td>
                <td>
                    <span>
                        <label for="jeudi_midi_de"> de </label>
                        <input id="jeudi_midi_de" type="time" name="jeudi_midi_de" value="<?php echo $jeudi_midi_de; ?>"/>
                    </span>
                    <span>
                        <label for="jeudi_midi_a"> à </label>
                        <input id="jeudi_midi_a" type="time" name="jeudi_midi_a" value="<?php echo $jeudi_midi_a; ?>"/>
                    </span>
                </td>
                <td>
                    <span>
                        <label for="jeudi_soir_de"> de </label>
                        <input id="jeudi_soir_de" type="time" name="jeudi_soir_de" value="<?php echo $jeudi_soir_de; ?>"/>
                    </span>
                    <span>
                        <label for="jeudi_soir_a"> à </label>
                        <input id="jeudi_soir_a" type="time" name="jeudi_soir_a" value="<?php echo $jeudi_soir_a; ?>"/>
                    </span>
                </td>
            </tr><!-- ./tr itemday -->
            <tr class="item-day">
                <td class="day">Vendredi</td>
                <td>
                    <span>
                        <label for="vendredi_midi_de"> de </label>
                        <input id="vendredi_midi_de" type="time" name="vendredi_midi_de" value="<?php echo $vendredi_midi_de; ?>"/>
                    </span>
                    <span>
                        <label for="vendredi_midi_a"> à </label>
                        <input id="vendredi_midi_a" type="time" name="vendredi_midi_a" value="<?php echo $vendredi_midi_a; ?>"/>
                    </span>
                </td>
                <td>
                    <span>
                        <label for="vendredi_soir_de"> de </label>
                        <input id="vendredi_soir_de" type="time" name="vendredi_soir_de" value="<?php echo $vendredi_soir_de; ?>"/>
                    </span>
                    <span>
                        <label for="vendredi_soir_a"> à </label>
                        <input id="vendredi_soir_a" type="time" name="vendredi_soir_a" value="<?php echo $vendredi_soir_a; ?>"/>
                    </span>
                </td>
            </tr><!-- ./tr itemday -->
            <tr class="item-day">
                <td class="day">Samedi</td>
                <td>
                    <span>
                        <label for="samedi_midi_de"> de </label>
                        <input id="samedi_midi_de" type="time" name="samedi_midi_de" value="<?php echo $samedi_midi_de; ?>"/>
                    </span>
                    <span>
                        <label for="samedi_midi_a"> à </label>
                        <input id="samedi_midi_a" type="time" name="samedi_midi_a" value="<?php echo $samedi_midi_a; ?>"/>
                    </span>
                </td>
                <td>
                    <span>
                        <label for="samedi_soir_de"> de </label>
                        <input id="samedi_soir_de" type="time" name="samedi_soir_de" value="<?php echo $samedi_soir_de; ?>"/>
                    </span>
                    <span>
                        <label for="samedi_soir_a"> à </label>
                        <input id="samedi_soir_a" type="time" name="samedi_soir_a" value="<?php echo $samedi_soir_a; ?>"/>
                    </span>
                </td>
            </tr><!-- ./tr itemday -->
            <tr class="item-day">
                <td class="day">Dimanche</td>
                <td>
                    <span>
                        <label for="dimanche_midi_de"> de </label>
                        <input id="dimanche_midi_de" type="time" name="dimanche_midi_de" value="<?php echo $dimanche_midi_de; ?>"/>
                    </span>
                    <span>
                        <label for="dimanche_midi_a"> à </label>
                        <input id="dimanche_midi_a" type="time" name="dimanche_midi_a" value="<?php echo $dimanche_midi_a; ?>"/>
                    </span>
                </td>
                <td>
                    <span>
                        <label for="dimanche_soir_de"> de </label>
                        <input id="dimanche_soir_de" type="time" name="dimanche_soir_de" value="<?php echo $dimanche_soir_de; ?>"/>
                    </span>
                    <span>
                        <label for="dimanche_soir_a"> à </label>
                        <input id="dimanche_soir_a" type="time" name="dimanche_soir_a" value="<?php echo $dimanche_soir_a; ?>"/>
                    </span>
                </td>
            </tr><!-- ./tr itemday -->
        </tbody>
    </table>




    <?php
}

// 3 - Sauvegarde des données de la métabox

add_action('save_post', 'save_metabox_horaires');

function save_metabox_horaires($POST_ID){
    // lundi -------------------------
    if(isset($_POST['lundi_midi_de'])){
        update_post_meta($POST_ID, 'lundi_midi_de', esc_html($_POST['lundi_midi_de']));
    }
    if(isset($_POST['lundi_midi_a'])){
        update_post_meta($POST_ID, 'lundi_midi_a', esc_html($_POST['lundi_midi_a']));
    }
    if(isset($_POST['lundi_soir_de'])){
        update_post_meta($POST_ID, 'lundi_soir_de', esc_html($_POST['lundi_soir_de']));
    }
    if(isset($_POST['lundi_soir_a'])){
        update_post_meta($POST_ID, 'lundi_soir_a', esc_html($_POST['lundi_soir_a']));
    }

    // mardi -------------------------
    if(isset($_POST['mardi_midi_de'])){
        update_post_meta($POST_ID, 'mardi_midi_de', esc_html($_POST['mardi_midi_de']));
    }
    if(isset($_POST['mardi_midi_a'])){
        update_post_meta($POST_ID, 'mardi_midi_a', esc_html($_POST['mardi_midi_a']));
    }
    if(isset($_POST['mardi_soir_de'])){
        update_post_meta($POST_ID, 'mardi_soir_de', esc_html($_POST['mardi_soir_de']));
    }
    if(isset($_POST['mardi_soir_a'])){
        update_post_meta($POST_ID, 'mardi_soir_a', esc_html($_POST['mardi_soir_a']));
    }

    // mecredi ------------------------
    if(isset($_POST['mercredi_midi_de'])){
        update_post_meta($POST_ID, 'mercredi_midi_de', esc_html($_POST['mercredi_midi_de']));
    }
    if(isset($_POST['mercredi_midi_a'])){
        update_post_meta($POST_ID, 'mercredi_midi_a', esc_html($_POST['mercredi_midi_a']));
    }
    if(isset($_POST['mercredi_soir_de'])){
        update_post_meta($POST_ID, 'mercredi_soir_de', esc_html($_POST['mercredi_soir_de']));
    }
    if(isset($_POST['mercredi_soir_a'])){
        update_post_meta($POST_ID, 'mercredi_soir_a', esc_html($_POST['mercredi_soir_a']));
    }

    // jeudi --------------------------------
    if(isset($_POST['jeudi_midi_de'])){
        update_post_meta($POST_ID, 'jeudi_midi_de', esc_html($_POST['jeudi_midi_de']));
    }
    if(isset($_POST['jeudi_midi_a'])){
        update_post_meta($POST_ID, 'jeudi_midi_a', esc_html($_POST['jeudi_midi_a']));
    }
    if(isset($_POST['jeudi_soir_de'])){
        update_post_meta($POST_ID, 'jeudi_soir_de', esc_html($_POST['jeudi_soir_de']));
    }
    if(isset($_POST['jeudi_soir_a'])){
        update_post_meta($POST_ID, 'jeudi_soir_a', esc_html($_POST['jeudi_soir_a']));
    }

    // vendredi --------------------------------
    if(isset($_POST['vendredi_midi_de'])){
        update_post_meta($POST_ID, 'vendredi_midi_de', esc_html($_POST['vendredi_midi_de']));
    }
    if(isset($_POST['vendredi_midi_a'])){
        update_post_meta($POST_ID, 'vendredi_midi_a', esc_html($_POST['vendredi_midi_a']));
    }
    if(isset($_POST['vendredi_soir_de'])){
        update_post_meta($POST_ID, 'vendredi_soir_de', esc_html($_POST['vendredi_soir_de']));
    }
    if(isset($_POST['vendredi_soir_a'])){
        update_post_meta($POST_ID, 'vendredi_soir_a', esc_html($_POST['vendredi_soir_a']));
    }

    // samedi --------------------------------
    if(isset($_POST['samedi_midi_de'])){
        update_post_meta($POST_ID, 'samedi_midi_de', esc_html($_POST['samedi_midi_de']));
    }
    if(isset($_POST['samedi_midi_a'])){
        update_post_meta($POST_ID, 'samedi_midi_a', esc_html($_POST['samedi_midi_a']));
    }
    if(isset($_POST['samedi_soir_de'])){
        update_post_meta($POST_ID, 'samedi_soir_de', esc_html($_POST['samedi_soir_de']));
    }
    if(isset($_POST['samedi_soir_a'])){
        update_post_meta($POST_ID, 'samedi_soir_a', esc_html($_POST['samedi_soir_a']));
    }

    // dimanche ---------------------------------
    if(isset($_POST['dimanche_midi_de'])){
        update_post_meta($POST_ID, 'dimanche_midi_de', esc_html($_POST['dimanche_midi_de']));
    }
    if(isset($_POST['dimanche_midi_a'])){
        update_post_meta($POST_ID, 'dimanche_midi_a', esc_html($_POST['dimanche_midi_a']));
    }
    if(isset($_POST['dimanche_soir_de'])){
        update_post_meta($POST_ID, 'dimanche_soir_de', esc_html($_POST['dimanche_soir_de']));
    }
    if(isset($_POST['dimanche_soir_a'])){
        update_post_meta($POST_ID, 'dimanche_soir_a', esc_html($_POST['dimanche_soir_a']));
    }
}


/**
* Adds the metabox stylesheet when appropriate
*/
function horair_styles(){
    wp_enqueue_style( 'horair_styles', plugin_dir_url( __FILE__ ) . 'horair_style.css' );

}
add_action( 'admin_print_styles', 'horair_styles' );
