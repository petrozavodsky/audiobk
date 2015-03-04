<?php
/* Add New Post Type - "Books" */

add_theme_support('post-thumbnails', array('audio-books'));


add_action('init', 'abooks_register' );

function abooks_register(){
	$args = array(
		'label' => 'Аудио Книги',
		'singular_label' => 'Аудио Книга',
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'has_archive' => true,
		'rewrite' => true,
		'supports' => array('title', 'editor', 'thumbnail'),
		'taxonomies' => array('genre'),
		'menu_icon' => 'dashicons-book-alt',
		'show_in_nav_menus' => true
	);

	register_post_type( 'audio-books', $args );
}

/* Add Metabox */
require_once('inc/meta-box-reg.php');
$options = array(
	array( // первый метабокс
		'id'	=>	'meta1', // ID метабокса, а также префикс названия произвольного поля
		'name'	=>	'Дополнительные настройки', // заголовок метабокса
		'post'	=>	array('audio-books'), // типы постов для которых нужно отобразить метабокс
		'pos'	=>	'normal', // расположение, параметр $context функции add_meta_box()
		'pri'	=>	'high', // приоритет, параметр $priority функции add_meta_box()
		'cap'	=>	'edit_posts', // какие права должны быть у пользователя
		'args'	=>	array(
			array(
				'id'			=>	'book-author', // атрибуты name и id без префикса, например с префиксом будет meta1_field_1
				'title'			=>	'Автор Книги', // лейбл поля
				'type'			=>	'text', // тип, в данном случае обычное текстовое поле
				'cap'			=>	'edit_posts'
			),
			array(
				'id'			=>	'book-voice', // атрибуты name и id без префикса, например с префиксом будет meta1_field_1
				'title'			=>	'Озвучил(а)', // лейбл поля
				'type'			=>	'text', // тип, в данном случае обычное текстовое поле
				'cap'			=>	'edit_posts'
			),
			array(
				'id'			=>	'book-year', // атрибуты name и id без префикса, например с префиксом будет meta1_field_1
				'title'			=>	'Год выпуска', // лейбл поля
				'type'			=>	'text', // тип, в данном случае обычное текстовое поле
				'cap'			=>	'edit_posts'
			),
			array(
				'id'			=>	'book-time', // атрибуты name и id без префикса, например с префиксом будет meta1_field_1
				'title'			=>	'Длительность', // лейбл поля
				'type'			=>	'text', // тип, в данном случае обычное текстовое поле
				'cap'			=>	'edit_posts'
			),
			array(
				'id'			=>	'book-best',
				'title'			=>	'Лучшее',
				'type'			=>	'checkbox', // чекбокс
				'desc'			=>	'дабавить в список лучших аудио книг',
				'cap'			=>	'edit_posts'
			),
			array(
				'id'			=>	'book-performance',
				'title'			=>	'Спектакли',
				'type'			=>	'checkbox', // чекбокс
				'desc'			=>	'дабавить в список спектаклей',
				'cap'			=>	'edit_posts'
			),
		)
	)
);

foreach ($options as $option) {
	$truemetabox = new trueMetaBox($option);
}

/* Register Taxonomy for Books*/
$labels = array(
	'name' => 'Жанры'
	,'singular_name' => 'Жанр'
	,'search_items' => 'Искать жанр'
	,'all_items' => 'Все жанры'
	,'parent_item' => 'Родительский жанр'
	,'parent_item_colon' => 'Родительский жанр:'
	,'edit_item' => 'Редактировать жанр'
	,'update_item' => 'Обновить жанр'
	,'add_new_item' => 'Добавить новый жанр'
	,'new_item_name' => 'Имя нового жанра'
	,'menu_name' => 'Жанры'
);

$args = array(
	'label' => '' // определяется параметром $labels->name
	,'labels' => $labels
	,'public' => true
	,'show_in_nav_menus' => true // равен аргументу public
	,'show_ui' => true 	// равен аргументу public
	,'show_tagcloud' => true // равен аргументу show_ui
	,'hierarchical' => true
	,'update_count_callback' => ''
	,'rewrite' => true
	,'query_var' => ''
	,'capabilities' => array()
	,'_builtin' => false
);
register_taxonomy('genre', 'audio-books', $args);




/* Add Main Menu */
function theme_register_nav_menu() {
	register_nav_menu( 'top-nav', 'Top Navigation' );
}
add_action( 'after_setup_theme', 'theme_register_nav_menu' );

?>
