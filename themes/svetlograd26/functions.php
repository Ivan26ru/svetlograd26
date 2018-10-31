<?php
include (TEMPLATEPATH . '/moduls/functions/other_functions.php');
include (TEMPLATEPATH . '/moduls/functions/acf_meta_tax.php');
include (TEMPLATEPATH . '/moduls/functions/foreach_tax_index.php');
include (TEMPLATEPATH . '/moduls/functions/pagination.php');

//
// работа с меню сайта
//
if( is_super_admin( $user_id ) ){
    // ...
    if( function_exists('acf_add_options_page') ) { 
        acf_add_options_page('Настройки сайта');
    };
};

register_nav_menus(array( // Регистрируем 2 меню
    'top' => 'Верхнее меню', // Верхнее
    'social' => 'Соц сети', //социалки
    'footer-1' => 'подвал 1',
    'footer-2' => 'подвал 2',
    'footer-3' => 'подвал 3',
    'footer-4' => 'подвал 4'
));

// add_filter( 'nav_menu_css_class', 'nav_css_filter' );
// function nav_css_filter( $classes ){
//         $classes[]='nav-item';
//         return $classes;
// }

// add_filter( 'nav_menu_link_attributes', 'nav_link_filter', 10, 4 );
// function nav_link_filter( $atts, $item, $args, $depth ){
//         $atts['class'] = 'nav-link';
//         return $atts;
// }

class top_menu extends Walker_Nav_Menu {
    /**
     * @see Walker::start_el()
     * @since 3.0.0
     *
     * @param string $output
     * @param object $item Объект элемента меню, подробнее ниже.
     * @param int $depth Уровень вложенности элемента меню.
     * @param object $args Параметры функции wp_nav_menu
     */
    function start_el(&$output, $item, $depth, $args) {
        global $wp_query;
        /*
         * Некоторые из параметров объекта $item
         * ID - ID самого элемента меню, а не объекта на который он ссылается
         * menu_item_parent - ID родительского элемента меню
         * classes - массив классов элемента меню
         * post_date - дата добавления
         * post_modified - дата последнего изменения
         * post_author - ID пользователя, добавившего этот элемент меню
         * title - заголовок элемента меню
         * url - ссылка
         * attr_title - HTML-атрибут title ссылки
         * xfn - атрибут rel
         * target - атрибут target
         * current - равен 1, если является текущим элементов
         * current_item_ancestor - равен 1, если текущим является вложенный элемент
         * current_item_parent - равен 1, если текущим является вложенный элемент
         * menu_order - порядок в меню
         * object_id - ID объекта меню
         * type - тип объекта меню (таксономия, пост, произвольно)
         * object - какая это таксономия / какой тип поста (page /category / post_tag и т д)
         * type_label - название данного типа с локализацией (Рубрика, Страница)
         * post_parent - ID родительского поста / категории
         * post_title - заголовок, который был у поста, когда он был добавлен в меню
         * post_name - ярлык, который был у поста при его добавлении в меню
         */
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        /*
         * Генерируем строку с CSS-классами элемента меню
         */
        $class_names = $value = '';
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        // функция join превращает массив в строку
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = ' class="nav-item ' . esc_attr( $class_names ) . '"';

        /*
         * Генерируем ID элемента
         */
        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
        $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

        /*
         * Генерируем элемент меню
         */
        $output .= $indent . '<li' . $id . $value . $class_names .'>';

        // атрибуты элемента, title="", rel="", target="" и href=""
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

        // ссылка и околоссылочный текст
        $item_output = $args->before;
        $item_output .= '<a'. $attributes .' class="nav-link">';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

        // var_dump($output);
        // var_dump($item_output);
        // var_dump($item);
        // var_dump($args);
    }
};


class True_Walker_Nav_Menu extends Walker_Nav_Menu {
    /**
     * @see Walker::start_el()
     * @since 3.0.0
     *
     * @param string $output
     * @param object $item Объект элемента меню, подробнее ниже.
     * @param int $depth Уровень вложенности элемента меню.
     * @param object $args Параметры функции wp_nav_menu
     */
    function start_el(&$output, $item, $depth, $args) {
        global $wp_query;
        /*
         * Некоторые из параметров объекта $item
         * ID - ID самого элемента меню, а не объекта на который он ссылается
         * menu_item_parent - ID родительского элемента меню
         * classes - массив классов элемента меню
         * post_date - дата добавления
         * post_modified - дата последнего изменения
         * post_author - ID пользователя, добавившего этот элемент меню
         * title - заголовок элемента меню
         * url - ссылка
         * attr_title - HTML-атрибут title ссылки
         * xfn - атрибут rel
         * target - атрибут target
         * current - равен 1, если является текущим элементов
         * current_item_ancestor - равен 1, если текущим является вложенный элемент
         * current_item_parent - равен 1, если текущим является вложенный элемент
         * menu_order - порядок в меню
         * object_id - ID объекта меню
         * type - тип объекта меню (таксономия, пост, произвольно)
         * object - какая это таксономия / какой тип поста (page /category / post_tag и т д)
         * type_label - название данного типа с локализацией (Рубрика, Страница)
         * post_parent - ID родительского поста / категории
         * post_title - заголовок, который был у поста, когда он был добавлен в меню
         * post_name - ярлык, который был у поста при его добавлении в меню
         */
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        /*
         * Генерируем строку с CSS-классами элемента меню
         */
        $class_names = $value = '';
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        // функция join превращает массив в строку
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = ' class="' . esc_attr( $class_names ) . '"';

        /*
         * Генерируем ID элемента
         */
        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
        $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

        /*
         * Генерируем элемент меню
         */
        // $output .= $indent . '<li' . $id . $value . $class_names .'>';

        // атрибуты элемента, title="", rel="", target="" и href=""
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

        // ссылка и околоссылочный текст
        $item_output = $args->before;
        $item_output .= '<a'. $attributes .' class="footer_menu">';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

        // var_dump($output);
        // var_dump($item_output);
        // var_dump($item);
        // var_dump($args);
    }
};


//
// добавление скриптов и стилей
//
add_action('wp_footer', 'add_scripts'); // приклеем ф-ю на добавление скриптов в футер
if (!function_exists('add_scripts')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
    function add_scripts() { // добавление скриптов
        if(is_admin()) return false; // если мы в админке - ничего не делаем
        // wp_deregister_script('jquery'); // выключаем стандартный jquery
        // wp_enqueue_script('jquery3', 'https://code.jquery.com/jquery-3.2.1.slim.min.js','','',true);
        wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js','','',true);
        wp_enqueue_script('bs4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js','','',true);
        wp_enqueue_script('slick', get_template_directory_uri().'/libs/slick/slick.min.js','','',true);
        wp_enqueue_script('my_scripts', get_template_directory_uri().'/js/my_scripts.js?' . date("U"),'','',true);
    }
};

add_action('wp_print_styles', 'add_styles'); // приклеем ф-ю на добавление стилей в хедер
if (!function_exists('add_styles')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
    function add_styles() { // добавление стилей
        if(is_admin()) return false; // если мы в админке - ничего не делаем
        wp_enqueue_style( 'bootstrap-4', get_template_directory_uri() . '/libs/bootstrap-4.0.0-dist/css/bootstrap.min.css' ); // бутстрап
        wp_enqueue_style( 'main', get_template_directory_uri().'/style.css?' . date("U") ); // основные стили шаблона
        wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/libs/font-awesome-4.7.0/css/font-awesome.min.css' ); // иконки
        wp_enqueue_style( 'slick', get_template_directory_uri() . '/libs/slick/slick.css' ); // библиотека слайдера
        // wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css?' . date("U") ); // основные стили шаблона
    }
}


// новые размеры миниатюр
add_image_size('plashka_index_210', '210','210',false);

// Включил поддержку миниатюр в постах
add_theme_support( 'post-thumbnails' );

?>