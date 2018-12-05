<?php
/*
Plugin Name: Tarif réduit
Description: Metabox pour les tarifs du buffet réduit (enfant tranche d'age)
Author: Enza Lombardo
Author URI: www.enzalombardo.be
Version: 1.0
*/


/* -------------------------------------------------- */
/* --------   METABOX  Buffet Spécial   ------- */
/* -------------------------------------------------- */


add_action('add_meta_boxes', 'add_metabox_special');

function add_metabox_special(){
    add_meta_box('metabox_special', 'Buffet Spécial', 'MB_special', 'tarifspeciaus');
}

// 2 -  construction de la metabox

function MB_special($POST){
    wp_nonce_field(basename(__FILE__), 'metabox_special');
    $prix_special     = get_post_meta($POST->ID, 'prix_special', true);
    $remarque = get_post_meta($POST->ID, 'remarque', true);
    ?>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <div class="row">
        <div class="col-4">
            <div class="cadre">
                <div class="cadre-body">
                    <div class="cadre-prix">
                        <label for="prix_special">Prix : </label>
                        <input id="prix_special" type="text" name="prix_special" value="<?php echo $prix_special; ?>"/>
                    </div>
                    <div>
                        <label for="remarque">Remarque</label>
                        <textarea id="remarque" type="remarque" name="remarque"><?php echo $remarque; ?></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}

// 3 - Sauvegarde des données de la métabox

add_action('save_post', 'save_metabox_special');

function save_metabox_special($POST_ID){

    if(isset($_POST['prix_special'])){
        update_post_meta($POST_ID, 'prix_special', esc_html($_POST['prix_special']));
    }
    if(isset($_POST['remarque'])){
        update_post_meta($POST_ID, 'remarque', esc_textarea($_POST['remarque']));
    }
}

/**
* Adds the metabox stylesheet when appropriate
*/
function tarif_reduit_styles(){
    wp_enqueue_style( 'tarif_reduit_styles', plugin_dir_url( __FILE__ ) . 'tarif_reduit_styles.css' );

}
add_action( 'admin_print_styles', 'tarif_reduit_styles' );
