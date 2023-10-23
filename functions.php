<!-- For showing menu in dashboard -->
<?php
function assetadvise_setup()
{
    add_theme_support("menus");
    register_nav_menus(array(
        'main_menu' => __('Main Menu', 'assetadvise'),
        'top_menu' => __('Top Menu', 'assetadvise'),
        'footer_menu' => __('Footer Menu', 'assetadvise'),
    ));
}
add_action('after_setup_theme','assetadvise_setup');
?>