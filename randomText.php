<?php
/*
 * Plugin Name:       Random Text
 * Plugin URI:        https://farzanenazmabadi.liara.run
 * Description:       you can see random text in the dashboard head evely reloading
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Farzane Nazmabadi
 * Author URI:        https://farzanenazmabadi.liara.run
 * Text Domain:       random-text
 * Domain Path:       /languages
 */
load_plugin_textdomain( 'random-text', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );

function addingStyleToText() {
    wp_enqueue_style('admin_notices', plugin_dir_url(__FILE__) . '/asset/style.css');
 }


function get_random_text(){
    $all_text=[
        __('When money speaks, the truth remains silent.','random-text'),
        __('The pen is mightier than the sword.','random-text'),
        __('The first step is always the hardest.','random-text'),
        __('Slow and steady wins the race.','random-text'),
        __('You can’t keep a man down.','random-text'),
        __('It takes two to tango.','random-text'),
        __('No news is good news.','random-text'),
    ];
    echo "<p class='random-text'>".$all_text[rand(0,7)]."</p>";
};
add_filter( 'admin_notices', 'get_random_text');
add_action('admin_enqueue_scripts', 'addingStyleToText');