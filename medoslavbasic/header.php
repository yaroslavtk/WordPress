<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package medoslavbasic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<?php

	wp_nav_menu(
		array(
			'theme_location' => 'header_nav',
			'menu_class' => 'myClass'
		)
	);

	get_search_form();

	//esc_attr() - attributes escape
	//esc_html() - html escape
	//esc_url() - link escape
	//wp_kses() - allowed tags and attributes
	//wp_kses_post() - post html allowed
	//wp_kses_data() - comments html allowed
	//esc_js() - inline JS
	//esc_textarea()
	
	/*$name = 'Some <strong>text</strong> with <div>"words"</div>';
	echo '<br>';
	$args = array (
	'strong'=> array(),
	'a'=> array (
	'href' => array()
	),
	'title' => array()
	);
	echo wp_kses($name, $args);
	echo '<br>';
	echo wp_kses_post($name);*/

	echo '<br>'; 

	$name = esc_html__('Hello', 'medoslavbasic');
	esc_html_e('Hello', 'medoslavbasic'); //e for echo

	echo '<br>';

	$city = "London";
	$country = "UK";

	printf(esc_html__('My city is %1$s and my country is %2$s', 'medoslavbasic'), $city, $country);

	echo '<br>';

	?>

	<!-- <input type="author" value="<?php echo esc_html(esc_attr($name)); ?>">
	<br>
	<a href="<?php echo esc_url(home_url("/")) ?>">Home</a> -->

	<?php 
	
	if(is_tax('flavour', array('Мед', 'Акацієвий'))) {
		echo "Header for Flavour pages";
		echo "<br>";
	} else {
		echo "Simple Header";
	}

	?>