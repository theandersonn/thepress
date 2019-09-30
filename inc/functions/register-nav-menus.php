<?php
/*--------------------------------------------------------------
	CRIAÇÃO DA ACTION INIT E REGISTRO DE MENUS
--------------------------------------------------------------*/
add_action('init', 'thepress_init_menu');

function thepress_init_menu() {
    register_nav_menus(
            array(
               'menu-header' => 'Menu header'
    )       );
}

/*--------------------------------------------------------------
	EXIBE OS MENUS
--------------------------------------------------------------*/
function menu_header(){
    wp_nav_menu(
        array(
            // identificação do menu
            'menu'              => 'Menu header',
            // localização do menu
            'theme_location'    => 'menu-header',
            // níveis de hierarquia do menu
            'depth'             => 1,
            // container para envolver o menu
            'container'         => false,
            // id do menu
            'container_id'      => '',
            // class do menu
            'menu_class'        => ''
        )
    );
}