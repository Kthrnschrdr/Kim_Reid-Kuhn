<?
    function register_entities() {
    register_nav_menu( 'top-nav', 'Top Navigation Bar');
    }
    add_action('init', 'register_entities');

?>