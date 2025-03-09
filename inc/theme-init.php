<?php
if (!defined('ABSPATH')) exit;

// لود تمام کلاس‌های قالب
require_once get_template_directory() . '/inc/classes/class-theme-setup.php';
require_once get_template_directory() . '/inc/classes/class-theme-scripts.php';
require_once get_template_directory() . '/inc/classes/class-theme-widgets.php';
require_once get_template_directory() . '/inc/classes/class-theme-customizer.php';

// مقداردهی اولیه کلاس‌ها
Theme_Setup::get_instance();
Theme_Scripts::get_instance();
Theme_Widgets::get_instance();
Theme_Customizer::get_instance();
?>
