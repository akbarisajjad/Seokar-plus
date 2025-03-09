<?php
if (!defined('ABSPATH')) exit;

class Theme_Scripts {
    private static $instance = null;

    private function __construct() {
        add_action("wp_enqueue_scripts", [$this, "enqueue"]);
    }

    public static function get_instance() {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function enqueue() {
        wp_enqueue_style("theme-style", get_stylesheet_uri());
        wp_enqueue_script("theme-scripts", get_template_directory_uri() . "/assets/js/scripts.js", ["jquery"], false, true);
    }
}
?>
