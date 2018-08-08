<?php
/**
 * Plugin Name: SAA-SEM Casos
 * Plugin URI: http://mypluginuri.com/
 * Description: This plugin handles SAA-SEM cases.
 * Version: 1.0
 * Author: Olga Cobaquil
 * Author URI: Author's website
 * License: A "Slug" license name e.g. GPL12
 */



function saasem_casos_post_type(){
    $labels = array(
        'name'                  => 'Casos',
        'singular-name'         => 'Casos',
        'add_new'               => 'Agregar Nuevo',
        'all_items'             => 'Todos los casos',
        'add_new_item'          => 'Agregar Nuevo',
        'edit_item'             => 'Editar Caso',
        'view_item'             => 'Ver Caso',
        'search_item'           => 'Buscar caso',
        'not_found'             => 'No se ha encontrado el elemento',
        'not_found_in_trash'    => 'No se ha encontrado en el basurero',
        'parent_item_colon'     => 'Parent Item'
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'has_archive'           => true,
        'publicly_queryable'    => true,
        'query_var'             => true,
        'rewrite'               => true,
        'capability_type'       => 'post',
        'show_ui'               => true,
        'hierarchical'          => false,
        'show_in_rest'          => true,
        'rest_base'             => 'caso',
        'support'   => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
            ),
        'taxonomies' => array(),
        'menu_position' => 5,
        'exclude_from_search' => false
    );

    register_post_type('caso', $args);
    flush_rewrite_rules();
}


add_action('init', 'saasem_casos_post_type');





// Upload Pdf
function add_custom_meta_boxes() {
    add_meta_box('wp_custom_attachment', 'Caso Pdf', 'wp_custom_attachment', 'caso', 'side', 'low');
}
add_action('add_meta_boxes', 'add_custom_meta_boxes');

function wp_custom_attachment() {
    wp_nonce_field(plugin_basename(__FILE__), 'wp_custom_attachment_nonce');
    $html = '<p class="description">';
    $html .= 'Suba su PDF aqui.';
    $html .= '</p>';
    $html .= '<input type="file" id="wp_custom_attachment" name="wp_custom_attachment" value="" size="100">';

    $filearray = get_post_meta( get_the_ID(), 'wp_custom_attachment', true );
    $this_file = $filearray['url'];
    if($this_file != ""){
        $html .= '<div>Archivo actual:<br>"' . $this_file . '"</div>';
    }

    echo $html;
}

add_action('save_post', 'save_custom_meta_data');
function save_custom_meta_data($id) {
    if(!empty($_FILES['wp_custom_attachment']['name'])) {

        // Nombre del PDF
        $custom_pdf_name = 'pdf_caso_0000X';

        $supported_types = array('application/pdf');
        $arr_file_type = wp_check_filetype(basename($_FILES['wp_custom_attachment']['name']));
        $uploaded_type = $arr_file_type['type'];

        if(in_array($uploaded_type, $supported_types)) {
            $upload = wp_upload_bits($_FILES['wp_custom_attachment']['name'], null, file_get_contents($_FILES['wp_custom_attachment']['tmp_name']));
            if(isset($upload['error']) && $upload['error'] != 0) {
                wp_die('Hubo un error subiendo el archivo. El archivo: ' . $upload['error']);
            } else {
                update_post_meta($id, 'wp_custom_attachment', $upload);
            }
        }
        else {
            wp_die("El tipo de archivo que esta tratando de subir no es un PDF.");
        }
    }
}

function update_edit_form() {
    echo ' enctype="multipart/form-data"';
}
add_action('post_edit_form_tag', 'update_edit_form');




function caso_pais_taxonomy(){
    $labels = array(
        'name'              => 'Pais',
        'singular_name'     => 'Pais',
        'search_items'      => 'Buscar Pais',
        'all_items'         => 'Todos los Paises',
        'parent_items'      => 'Paises Padres',
        'parent_item_colon' => 'Paises Padres',
        'edit_item'         => 'Editar Pais',
        'update_item'       => 'Actualizar Pais',
        'add_new_item'      => 'Agregar un Nuevo Pais',
        'new_item_name'     => 'Nombre del Nuevo Pais',
        'menu_name'         => 'Paises'
    );

    $args   = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'pais')
    );

    register_taxonomy('pais', array('caso'), $args);
    flush_rewrite_rules();
}

add_action('init', 'caso_pais_taxonomy');


function fix_rr(){
    flush_rewrite_rules();
}
add_action('init', 'fix_rr');
?>