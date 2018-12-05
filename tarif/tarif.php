<?php
/*
Plugin Name: Tarif Buffet
Description: Metabox pour les tarifs du buffet (avec, sans, full boisson) pour le buffet
Author: Enza Lombardo
Author URI: www.enzalombardo.be
Version: 1.0
*/

/* -------------------------------------------------- */
/* ------------   METABOX  Tarif buffet   ----------- */
/* -------------------------------------------------- */


add_action('add_meta_boxes', 'add_metabox_tarif_buffets');

function add_metabox_tarif_buffets(){
    add_meta_box('metabox_tarif_buffets', 'Tarif Buffet', 'MB_tarif_buffet', 'tarifbuffets');
}

// 2 -  construction de la metabox

function MB_tarif_buffet($POST){
    wp_nonce_field(basename(__FILE__), 'metabox_tarif_buffets');
    $SB_prix     = get_post_meta($POST->ID, 'SB_prix', true);
    $SB_comporte = get_post_meta($POST->ID, 'SB_comporte', true);
    $BC_prix     = get_post_meta($POST->ID, 'BC_prix', true);
    $BC_comporte = get_post_meta($POST->ID, 'BC_comporte', true);
    $BF_prix     = get_post_meta($POST->ID, 'BF_prix', true);
    $BF_comporte = get_post_meta($POST->ID, 'BF_comporte', true);
    ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <div class="row">
        <div class="col-4">
            <div class="cadre">
                <h1>Buffet SANS boissons</h1>
                <div class="cadre-body">
                    <div class="cadre-prix">
                        <label for="SB_prix">Prix : </label>
                        <input id="SB_prix" type="text" name="SB_prix" value="<?php echo $SB_prix; ?>"/>  €
                    </div>
                    <div>
                        <label for="SB_comporte">Ça comporte : </label><br />
                        <textarea id="SB_comporte" type="SB_comporte" name="SB_comporte"><?php echo $SB_comporte; ?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="cadre">
                <h1>Buffet AVEC boissons</h1>
                <div class="cadre-body">
                    <div class="cadre-prix">
                        <label for="BC_prix">Prix : </label>
                        <input id="BC_prix" type="text" name="BC_prix" value="<?php echo $BC_prix; ?>"/>  €
                    </div>
                    <div>
                        <label for="BC_comporte">Ça comporte : </label><br />
                        <textarea id="BC_comporte" type="BC_comporte" name="BC_comporte"><?php echo $BC_comporte; ?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="cadre">
                <h1>Buffet FULL boissons</h1>
                <div class="cadre-body">
                    <div class="cadre-prix">
                        <label for="BF_prix">Prix : </label>
                        <input id="BF_prix" type="text" name="BF_prix" value="<?php echo $BF_prix; ?>"/>  €
                    </div>
                    <div>
                        <label for="BF_comporte">Ça comporte : </label><br />
                        <textarea id="BF_comporte" type="BF_comporte" name="BF_comporte"><?php echo $BF_comporte; ?></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
}

// 3 - Sauvegarde des données de la métabox

add_action('save_post', 'save_metabox_tarif_buffets');

function save_metabox_tarif_buffets($POST_ID){

    // SANS boissons -----------------------
    if(isset($_POST['SB_prix'])){
        update_post_meta($POST_ID, 'SB_prix', esc_html($_POST['SB_prix']));
    }
    if(isset($_POST['SB_comporte'])){
        update_post_meta($POST_ID, 'SB_comporte', esc_textarea($_POST['SB_comporte']));
    }

    // AVEC boissons --------------------
    if(isset($_POST['BC_prix'])){
        update_post_meta($POST_ID, 'BC_prix', esc_html($_POST['BC_prix']));
    }
    if(isset($_POST['BC_comporte'])){
        update_post_meta($POST_ID, 'BC_comporte', esc_textarea($_POST['BC_comporte']));
    }

    // FULL boissons -----------------------
    if(isset($_POST['BF_prix'])){
        update_post_meta($POST_ID, 'BF_prix', esc_html($_POST['BF_prix']));
    }
    if(isset($_POST['BF_comporte'])){
        update_post_meta($POST_ID, 'BF_comporte', esc_textarea($_POST['BF_comporte']));
    }
}


/**
* Adds the metabox stylesheet when appropriate
*/
function tarif_styles(){
    wp_enqueue_style( 'tarif_styles', plugin_dir_url( __FILE__ ) . 'tarif_style.css' );

}
add_action( 'admin_print_styles', 'tarif_styles' );
