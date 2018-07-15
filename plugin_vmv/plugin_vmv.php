<?php
/*
 * Plugin Name: Films_view_plugin
 * Plugin URI: https://plugin_uri.com
 * Description: Plugin Description
 * Version: 1.1.1
 * Author: Plugin Author
 * Author URI: https://author_uri.com
 * License: GPLv2 or later
 */


if( ! function_exists( 'is_page_films' ) ){
	function is_page_films(){

		if ( is_page( 'films' ) ){
			?><div class="row"><?php
				// параметры по умолчанию
				$args = array(
					'post_type'			=>	array( 'film' ),
					'numberposts' => 10,
					// 'suppress_filters'	=>	true, // подавление работы фильтров изменения SQL запроса
				);
				$films = get_posts( $args );
				foreach ( $films as $film ) {
					?><div class="col-xs-3" style="border: 1px solid black;">
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
					</div><?php
				}
			?></div><?php
		}
	}
}
add_action( 'loop_end', 'is_page_films' );
