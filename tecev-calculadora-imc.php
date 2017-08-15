<?php
/*
* Plugin Name: Calculadora de IMC
* Description: Calcula o seu IMC (índice de massa corporal)
* Version: 1.0
* Author: TecEv
* Author URI: www.tecev.com.br
*/

function formCreation(){
	ob_start();
	include 'front-end.php';
	return ob_get_clean();
}

add_shortcode('calculadora-imc', 'formCreation');