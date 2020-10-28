<?php

	function add_head_styles_and_scripts(){
		//funcion para añadir los estilos y scripts de nuestro tema de wordpress
		$version = '0.0.1'.(date('Y-m-d H:i:s'));
		
		wp_enqueue_style('style', get_stylesheet_uri(),array(),$version);
	}
	
	add_action( 'wp_enqueue_scripts', 'add_head_styles_and_scripts' );

	
?>