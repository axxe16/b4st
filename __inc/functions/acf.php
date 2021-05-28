<?php 
/**
 * GENERA PAGINA OPZIONI GENERALE
*/

 //aggiunge una pagina option dentro la sezione impostazioni
 if( function_exists('acf_add_options_page') ) {
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Impostazioni Tema',
		'menu_title'	=> 'Impostazioni Tema',
		'parent_slug'	=> 'options-general.php',
	));
}



//Generazione campi ACF statici 
if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_60afac3608d93',
        'title' => 'Impostazione Tema',
        'fields' => array(
            array(
                'key' => 'field_60afb216c68bb',
                'label' => 'Logo',
                'name' => 'logo',
                'type' => 'image',
                'instructions' => 'nome campo [logo]',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_60afac5e4d06e',
                'label' => 'Google Analytics',
                'name' => 'ga',
                'type' => 'textarea',
                'instructions' => 'nome campo [ga]',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'new_lines' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-impostazioni-tema',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    
    endif;