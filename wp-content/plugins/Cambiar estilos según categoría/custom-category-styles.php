<?php
/*
Plugin Name: Cambiar estilos según categoría
Description: Cambia los estilos de un post según la categoría seleccionada.
Version: 1.0
Author: Tu Nombre
*/

function custom_category_styles() {
    $categories = get_the_category();
    $post_style = '';

    foreach ($categories as $category) {
        $category_name = $category->name;

        switch ($category_name) {
            case 'Nacional':
                $post_style .= 'background-color: #00B049; color: #FFFFFF;';
                break;
            case 'Entretenimiento':
                $post_style .= 'background-color: #FFC915; color: #FFFFFF;';
                break;
            case 'Tecnología':
                $post_style .= 'background-color: #00D3F8; color: #FFFFFF;';
                break;
            case 'Mascotas':
                $post_style .= 'background-color: #90456D; color: #FFFFFF;';
                break;
            case 'Deportes':
                $post_style .= 'background-color: #FF372C; color: #FFFFFF;';
                break;
            default:
                $post_style .= '';
                break;
        }
    }

    if (!empty($post_style)) {
        echo '<style>';
        echo '.single-post {';
        echo $post_style;
        echo '}';
        echo '</style>';
    }
}

add_action('wp_head', 'custom_category_styles');
?>
