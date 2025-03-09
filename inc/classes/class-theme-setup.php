<?php
if (!defined('ABSPATH')) exit;

class Theme_Setup {
    private static $instance = null;

    private function __construct() {
        add_action("after_setup_theme", [$this, "setup"]);
    }

    public static function get_instance() {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function setup() {
        add_theme_support("automatic-feed-links");
        add_theme_support("title-tag");
        add_theme_support("post-thumbnails");
        add_theme_support("html5", ["search-form", "comment-form", "comment-list", "gallery", "caption"]);
        register_nav_menus([
            "primary-menu" => __("Primary Menu", "theme"),
            "footer-menu" => __("Footer Menu", "theme")
        ]);
    }
}
?>
