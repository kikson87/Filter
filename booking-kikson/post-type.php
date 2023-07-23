<?php 

add_image_size( 'booking-image', 450, 250, true );

add_action( 'init', 'register_booking_pligin' );

function register_booking_pligin(){

	register_post_type( 'booking', [
		'label'  => null,
		'labels' => [
			'name'               => 'Booking',
			'singular_name'      => 'Booking',
			'add_new'            => 'Add Booking',
			'add_new_item'       => 'Adding Booking',
			'edit_item'          => 'Booking Editing',
			'new_item'           => 'New Booking', 
			'view_item'          => 'See Booking',
			'search_items'       => 'Search Booking',
			'not_found'          => 'Not found',
			'not_found_in_trash' => 'Not found in cart',
			'parent_item_colon'  => '',
			'menu_name'          => 'Booking',
		],
		'description'            => '',
		'public'                 => true,
		'show_in_menu'           => null,
		'show_in_rest'        => null,
		'rest_base'           => null,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-list-view',
		'hierarchical'        => true,
		'supports'            => [ 'title', 'editor', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	] );

}

/* REGISTER TAXONOMY */

add_action( 'init', 'booking_register_taxonomy' );
 
function booking_register_taxonomy() {
 
	$args = array(
		'labels' => array(
			'menu_name' => 'Location'
		),
		'public' => true,
	);
	register_taxonomy( 'location', 'booking', $args );
}

/* REGISTER TAXONOMY */ 

//add_submenu_page( 'edit.php?post_type=booking' );

add_action( 'admin_menu', 'true_add_submenus' );
 
function true_add_submenus() {
	
	//add_menu_page( 'Booking Settings', 'Booking Settings', 'manage_options', 'true_slider', 'booking_settings_visual', 'dashicons-images-alt2' );
	// первый элемент субменю дублирует родительский элемент
	add_submenu_page( 'edit.php?post_type=booking', 'Settings', 'Settings', 'manage_options', 'booking_settings', 'booking_settings_visual' );

 
}

 
function booking_settings_visual(){ ?>

	<?php echo '<div class="wrap">
	<h1>' . get_admin_page_title() . '</h1>
	<form method="post" action="options.php">';
 
		settings_fields( 'true_slider_settings' ); // название настроек
		do_settings_sections( 'true_slider' ); // ярлык страницы, не более
		submit_button(); // функция для вывода кнопки сохранения
 
	echo '</form></div>'; ?>

	<div style="color: #000; font-size: 96px; line-height: 120px; margin-bottom: 50px;">Записать заказ тот что выбрал клиент в базу данных и добавить GULP для солидности проекта.</div>

	<div style="color: red; font-size: 36px; margin-top: 50px;">Data -> Location.<?php echo $test; ?></div>
	<div style="color: red; font-size: 36px; margin-top: 50px;">Data -> Date.</div>
	<div style="color: red; font-size: 36px; margin-top: 50px;">Data -> Person.</div>
	<div style="color: red; font-size: 36px; margin-top: 50px;">WhatsApp, Telegram, ChatBot.</div>
	<div style="color: red; font-size: 36px; margin-top: 50px;">Sorting DATA.</div>
	<div style="color: red; font-size: 36px; margin-top: 50px;">STYLIZING.</div>

	<?php // задаем нужные нам критерии выборки данных из БД
$args = array(
	'posts_per_page' => 5,
	'orderby' => 'comment_count'
);

$query = new WP_Query( $args );

// Цикл
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
		?>
		<li><?php the_title() ?></li>
		<?php
	}
}
else {
	// Постов не найдено
}

// Возвращаем оригинальные данные поста. Сбрасываем $post.
wp_reset_postdata(); ?>

	<div class="send-me-message">
		<div class="title">Написать автору</div>
		<div class="after-title">Напишите автору плагина и он тебе ответит в течении 30 минут.</div>
		<div class="icons">
			<a href="https://wa.me/380680253137" target="_blang" class="icon">
				<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 48 48">
					<path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"></path><path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"></path><path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"></path><path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"></path><path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path>
				</svg>
			</a>
			<a href="https://t.me/kikson87" target="_blang" class="icon">
				<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 48 48">
					<path fill="#29b6f6" d="M24 4A20 20 0 1 0 24 44A20 20 0 1 0 24 4Z"></path><path fill="#fff" d="M33.95,15l-3.746,19.126c0,0-0.161,0.874-1.245,0.874c-0.576,0-0.873-0.274-0.873-0.274l-8.114-6.733 l-3.97-2.001l-5.095-1.355c0,0-0.907-0.262-0.907-1.012c0-0.625,0.933-0.923,0.933-0.923l21.316-8.468 c-0.001-0.001,0.651-0.235,1.126-0.234C33.667,14,34,14.125,34,14.5C34,14.75,33.95,15,33.95,15z"></path><path fill="#b0bec5" d="M23,30.505l-3.426,3.374c0,0-0.149,0.115-0.348,0.12c-0.069,0.002-0.143-0.009-0.219-0.043 l0.964-5.965L23,30.505z"></path><path fill="#cfd8dc" d="M29.897,18.196c-0.169-0.22-0.481-0.26-0.701-0.093L16,26c0,0,2.106,5.892,2.427,6.912 c0.322,1.021,0.58,1.045,0.58,1.045l0.964-5.965l9.832-9.096C30.023,18.729,30.064,18.416,29.897,18.196z"></path>
				</svg>
			</a>
		</div>
	</div>
<?php } ?>

<?php add_action( 'admin_init',  'true_slider_fields' );
 
function true_slider_fields(){
 
	// регистрируем опцию
	register_setting(
		'true_slider_settings', // название настроек из предыдущего шага
		'number_of_slider_slides', // ярлык опции
		'absint' // функция очистки
	);
 
	// добавляем секцию без заголовка
	add_settings_section(
		'slider_settings_section_id', // ID секции, пригодится ниже
		'', // заголовок (не обязательно)
		'', // функция для вывода HTML секции (необязательно)
		'true_slider' // ярлык страницы
	);
 
	// добавление поля
	add_settings_field(
		'number_of_slider_slides',
		'Количество слайдов в слайдере',
		'true_number_field', // название функции для вывода
		'true_slider', // ярлык страницы
		'slider_settings_section_id', // // ID секции, куда добавляем опцию
		array( 
			'label_for' => 'number_of_slider_slides',
			'class' => 'misha-class', // для элемента <tr>
			'name' => 'number_of_slider_slides', // любые доп параметры в колбэк функцию
		)
	);
 
}
 
function true_number_field( $args ){
	// получаем значение из базы данных
	$value = get_option( $args[ 'name' ] );
 
	printf(
		'<input type="number" min="1" id="%s" name="%s" value="%d" />',
		esc_attr( $args[ 'name' ] ),
		esc_attr( $args[ 'name' ] ),
		absint( $value )
	);
 
} ?>