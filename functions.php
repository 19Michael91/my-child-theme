<?php

function load_bootstrap(){
	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js');
	wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.min.css');
}

// Регистрируем новый тип поста

if ( ! function_exists( 'register_post_type_film' ) ){
	function register_post_type_film(){
		register_post_type( 'film' , array(
			'label'					=>	'Films',
			'lables'				=>	array(
											'name'					=>	'Film',
											'singular_name'			=>	'Films',
											'add_new'				=>	'Add new',
											'add_new_item'			=>	'Add new Film',
											'edit_item'				=>	'Edit Film',
											'new_item'				=>	'New Film',
											'view_item'				=>	'View Film',
											'search_items'			=>	'Search Film',
											'not_found'				=>	'Film not found',
											'not_found_in_trash'	=>	'Film not found in trash',
											'parent_item_colon'		=> '',
											'menu_name'				=> 'Films'
										),
			'public'				=>	true,
			'publicly_queryable'	=>	true,
			'show_ui'				=>	true,
			'show_in_menu'			=>	true,
			'show_in_admin_bar'		=>	true,
			'show_in_nav_menus'		=>	true,
			'query_var'				=>	true,
			'rewrite'				=>	true,
			'capability_type'		=>	'post',
			'has_archive'			=>	true,
			'hierarchical'			=>	false,
			'menu_position'			=>	9,
			'menu_icon'				=>	'dashicons-video-alt',
			'supports'				=>	array(	'title',
												'editor',
												// 'author',
												'thumbnail',
												// 'excerpt',
												// 'comments'
											),
		 ) );
	}
}

// Регистрируем новые таксономии (метки)

if ( ! function_exists( 'create_taxonomy_genres' ) ){
	function create_taxonomy_genres(){
		register_taxonomy( 'genres', array( 'film' ), array(
				'label'		=>	'Genre',
				'labels'	=> array(
									'name'				=>	'Genres',
									'singular_name'		=>	'Genre',
									'search_items'		=>	'Search Genres',
									'all_items'			=>	'All Genres',
									'view_item '		=>	'View Genre',
									'parent_item'		=>	'Parent Genre',
									'parent_item_colon'	=>	'Parent Genre:',
									'edit_item'			=>	'Edit Genre',
									'update_item'		=>	'Update Genre',
									'add_new_item'		=>	'Add New Genre',
									'new_item_name'		=>	'New Genre Name',
									'menu_name'			=>	'Genre',
									),
				'description'			=>	'',
				'public'				=>	true,
				'publicly_queryable'	=>	null,
				'show_in_nav_menus'		=>	true,
				'show_ui'				=>	true,
				'show_in_menu'			=>	false,
				'show_tagcloud'			=>	true,
				'show_in_rest'			=>	null,
				'rest_base'				=>	null,
				'hierarchical'			=>	 false,
				'update_count_callback'	=>	'',
				'rewrite'				=>	true,
				//'query_var'			=>	$taxonomy,
				'capabilities'			=>	array(),
				'meta_box_cb'			=>	null,
				'show_admin_column'		=>	false,
				'_builtin'				=>	false,
				'show_in_quick_edit'	=>	null
			) );
	}
}

if ( ! function_exists( 'create_taxonomy_сountry' ) ){
	function create_taxonomy_сountry(){
		register_taxonomy( 'country', array( 'film' ), array(
				'label'		=>	'Country',
				'labels'	=> array(
									'name'				=>	'Countries',
									'singular_name'		=>	'Country',
									'search_items'		=>	'Search Countries',
									'all_items'			=>	'All Countries',
									'view_item '		=>	'View Country',
									'parent_item'		=>	'Parent Country',
									'parent_item_colon'	=>	'Parent Country:',
									'edit_item'			=>	'Edit Country',
									'update_item'		=>	'Update Country',
									'add_new_item'		=>	'Add New Country',
									'new_item_name'		=>	'New Country Name',
									'menu_name'			=>	'Country',
									),
				'description'			=>	'',
				'public'				=>	true,
				'publicly_queryable'	=>	null,
				'show_in_nav_menus'		=>	true,
				'show_ui'				=>	true,
				'show_in_menu'			=>	false,
				'show_tagcloud'			=>	true,
				'show_in_rest'			=>	null,
				'rest_base'				=>	null,
				'hierarchical'			=>	 false,
				'update_count_callback'	=>	'',
				'rewrite'				=>	true,
				//'query_var'			=>	$taxonomy,
				'capabilities'			=>	array(),
				'meta_box_cb'			=>	null,
				'show_admin_column'		=>	false,
				'_builtin'				=>	false,
				'show_in_quick_edit'	=>	null
			) );
	}
}

if ( ! function_exists( 'create_taxonomy_years' ) ){
	function create_taxonomy_years(){
		register_taxonomy( 'years', array( 'film' ), array(
				'label'		=>	'Years',
				'labels'	=> array(
									'name'				=>	'Years',
									'singular_name'		=>	'Years',
									'search_items'		=>	'Search Years',
									'all_items'			=>	'All Years',
									'view_item '		=>	'View Years',
									'parent_item'		=>	'Parent Years',
									'parent_item_colon'	=>	'Parent Years:',
									'edit_item'			=>	'Edit Years',
									'update_item'		=>	'Update Years',
									'add_new_item'		=>	'Add New Years',
									'new_item_name'		=>	'New Years Name',
									'menu_name'			=>	'Years',
									),
				'description'			=>	'',
				'public'				=>	true,
				'publicly_queryable'	=>	null,
				'show_in_nav_menus'		=>	true,
				'show_ui'				=>	true,
				'show_in_menu'			=>	false,
				'show_tagcloud'			=>	true,
				'show_in_rest'			=>	null,
				'rest_base'				=>	null,
				'hierarchical'			=>	 false,
				'update_count_callback'	=>	'',
				'rewrite'				=>	true,
				//'query_var'			=>	$taxonomy,
				'capabilities'			=>	array(),
				'meta_box_cb'			=>	null,
				'show_admin_column'		=>	false,
				'_builtin'				=>	false,
				'show_in_quick_edit'	=>	null
			) );
	}
}

if ( ! function_exists( 'create_taxonomy_actors' ) ){
	function create_taxonomy_actors(){
		register_taxonomy( 'actors', array( 'film' ), array(
				'label'		=>	'Actor',
				'labels'	=> array(
									'name'				=>	'Actors',
									'singular_name'		=>	'Actor',
									'search_items'		=>	'Search Actors',
									'all_items'			=>	'All Actors',
									'view_item '		=>	'View Actor',
									'parent_item'		=>	'Parent Actor',
									'parent_item_colon'	=>	'Parent Actor:',
									'edit_item'			=>	'Edit Actor',
									'update_item'		=>	'Update Actor',
									'add_new_item'		=>	'Add New Actor',
									'new_item_name'		=>	'New Actor Name',
									'menu_name'			=>	'Actor',
									),
				'description'			=>	'',
				'public'				=>	true,
				'publicly_queryable'	=>	null,
				'show_in_nav_menus'		=>	true,
				'show_ui'				=>	true,
				'show_in_menu'			=>	false,
				'show_tagcloud'			=>	true,
				'show_in_rest'			=>	null,
				'rest_base'				=>	null,
				'hierarchical'			=>	false,
				'update_count_callback'	=>	'',
				'rewrite'				=>	true,
				//'query_var'			=>	$taxonomy,
				'capabilities'			=>	array(),
				'meta_box_cb'			=>	null,
				'show_admin_column'		=>	false,
				'_builtin'				=>	false,
				'show_in_quick_edit'	=>	null
			) );
	}
}



// Добавляем 2 текстовых поля к типу поста Фильмы

// Добавляем блоки в основную колонку на страницах постов и пост. страниц
function add_price_metabox(){
	add_meta_box( 'my_sectionid_1', 'Price', 'meta_box_price_callback', 'film' );
}
// HTML код блока
function meta_box_price_callback( $post, $meta ){
	global $post;
	$price = get_post_meta( $post->ID, 'meta_key_price' );
	$screens = $meta['args'];
	// Используем nonce для верификации
	wp_nonce_field( plugin_basename(__FILE__), 'myplugin_noncename_1' );
	// Поля формы для введения данных
	echo '<label for="price_field">' . __("$", 'myplugin_textdomain' ) . '</label> ';
	echo '<input type="text" id= "price_field" name="price_field" />';
}
// Сохраняем данные, когда пост сохраняется
function save_postdata_price_metabox( $post_id ) {
	// Убедимся что поле установлено.
	if ( ! isset( $_POST['price_field'] ) ){
		return;
	}
	// проверяем nonce нашей страницы, потому что save_post может быть вызван с другого места.
	if ( ! wp_verify_nonce( $_POST['myplugin_noncename_1'], plugin_basename(__FILE__) ) ){
		return;
	}
	// если это автосохранение ничего не делаем
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
		return;
	}
	// проверяем права юзера
	if( ! current_user_can( 'edit_post', $post_id ) ){
		return;
	}
	// Все ОК. Теперь, нужно найти и сохранить данные
	// Очищаем значение поля input.
	$my_data = sanitize_text_field( $_POST['price_field'] );
	// Обновляем данные в базе данных.

	if ( ! get_post_meta( $post_id, 'meta_key_price' )){
		update_post_meta( $post_id, 'meta_key_price', $my_data );
	}
}

function add_date_metabox(){
	add_meta_box( 'my_sectionid_2', 'Date', 'meta_box_date_callback', 'film' );
}
function meta_box_date_callback( $post, $meta ){
	global $post;
	$screens = $meta['args'];
	// Используем nonce для верификации
	wp_nonce_field( plugin_basename(__FILE__), 'myplugin_noncename_2' );
	// Поля формы для введения данных
	echo '<label for="data_field">' . __("date", 'myplugin_textdomain' ) . '</label> ';
	echo '<input type="text" id= "data_field" name="data_field" />';
}
function save_postdata_date_metabox( $post_id ) {
	if ( ! isset( $_POST['data_field'] ) ){
		return;
	}
	if ( ! wp_verify_nonce( $_POST['myplugin_noncename_2'], plugin_basename(__FILE__) ) ){
		return;
	}
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
		return;
	}
	if( ! current_user_can( 'edit_post', $post_id ) ){
		return;
	}
	$my_data = sanitize_text_field( $_POST['data_field'] );
	// Обновляем данные в базе данных.

	if ( ! get_post_meta( $post_id, 'meta_key_date' )){
		update_post_meta( $post_id, 'meta_key_date', $my_data );
	}
}



// Shortcode
function shortcode_films( $atts ){
	$params = shortcode_atts( array( 'order'			=>	'DESC',
									'numberposts'	=>	5,
									),
							$atts );
	$args = array(
		'post_type'		=>	array( 'film' ),
		'order'			=>	$params['order'],
		'numberposts'	=>	$params['numberposts'],
	);
	$films = get_posts( $args );
	// return site_url(); // никаких echo, только return
	foreach($films as $film){
		//var_dump( $post );
		//echo '<br>';
		?><div class="row">
			<div class="col-xs-3" style="border: 1px solid black;">
				<a href="<?php the_permalink( $film->ID ); ?>">
					<?php echo get_the_title( $film->ID ) . '<br />'; ?>
				</a>
			</div>
			<div class="col-xs-9" style="text-align: center; border: 1px solid black; border-left: none;">
				<?php
				echo $film->post_content . '<br />';
			?>
			</div>
			<?php
			$taxonomies = get_the_taxonomies( $film );
			?>
			<div class="col-xs-12" style="border: 1px solid black; border-top: none; margin-bottom: 20px;">
				<div class="col-xs-6">
					<?php
					// var_dump( $taxonomies );
					echo $taxonomies['genres'] . '<br />';
					echo $taxonomies['country'] . '<br />';
					// echo $taxonomies['years'] . '<br />';
					// echo $taxonomies['actors'] . '<br />';
				?></div>
				<div class="col-xs-6" style="border-left: 1px solid black; border-top: none;">
					<?php
					$post_meta = get_post_meta( $film->ID );
					//var_dump( $post_meta );
					echo 'Price: ' . $post_meta['meta_key_price'][0] . '<br />';
					echo 'Data: ' . $post_meta['meta_key_date'][0] . '<br />';
					// echo $film->ID;
					// echo get_the_title( $film->ID ) . '<br />';
					// echo the_permalink( $film->ID ) . '<br />';
				?></div>
			</div>
		</div><?php
	}
}
function true_add_mce_button() {
	// проверяем права пользователя - может ли он редактировать посты и страницы
	if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) ) {
		return; // если не может, то и кнопка ему не понадобится, в этом случае выходим из функции
	}
	// проверяем, включен ли визуальный редактор у пользователя в настройках (если нет, то и кнопку подключать незачем)
	// if ( 'true' == get_user_option( 'rich_editing' ) ) {
		add_filter( 'mce_external_plugins', 'true_add_tinymce_script' );
		add_filter( 'mce_buttons', 'true_register_mce_button' );
	// }
}
// В этом функции указываем ссылку на JavaScript-файл кнопки
function true_add_tinymce_script( $plugin_array ) {
	$plugin_array['true_mce_button'] = get_stylesheet_directory_uri() .'/js/true_button.js'; // true_mce_button - идентификатор кнопки
	return $plugin_array;
}
// Регистрируем кнопку в редакторе
function true_register_mce_button( $buttons ) {
	array_push( $buttons, 'true_mce_button' ); // true_mce_button - идентификатор кнопки
	return $buttons;
}


add_action('admin_head', 'true_add_mce_button');
add_action( 'init', 'register_post_type_film' );
add_action( 'init', 'create_taxonomy_genres' );
add_action( 'init', 'create_taxonomy_сountry' );
add_action( 'init', 'create_taxonomy_years' );
add_action( 'init', 'create_taxonomy_actors' );
add_action( 'add_meta_boxes', 'add_price_metabox' );
add_action( 'save_post', 'save_postdata_price_metabox' );
add_action( 'add_meta_boxes', 'add_date_metabox' );
add_action( 'save_post', 'save_postdata_date_metabox' );
add_action('wp_enqueue_scripts', 'load_bootstrap');
add_shortcode( 'films', 'shortcode_films' );

?>
