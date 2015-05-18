<?php
// create custom text settings menu
add_action('admin_menu', 'create_menu_custom_texts');

function create_menu_custom_texts() {

    //create new top-level menu
    add_menu_page('About Us Setting', 'About Us', 'administrator', __FILE__, 'custom_text_settings_page', plugins_url('/images/inhalt.png', __FILE__));

    //call register settings function
    add_action('admin_init', 'register_mysettings');
}

function register_mysettings() {
    //register our settings
    register_setting('custom-text-settings-group', 'main_title');
    register_setting('custom-text-settings-group', 'main_paragraph');
    register_setting('custom-text-settings-group', 'title_of_address');
    register_setting('custom-text-settings-group', 'address_detail');
    register_setting('custom-text-settings-group', 'google_map_link');
    register_setting('custom-text-settings-group', 'title_of_profile');
    register_setting('custom-text-settings-group', 'manager_name');
    register_setting('custom-text-settings-group', 'manager_designation');
    register_setting('custom-text-settings-group', 'manager_profile_des');
}

function custom_text_settings_page() {
    ?>

    <div class="wrap">
        <h2>Custom Text Settings</h2>
        <form method="post" action="options.php">
            <?php settings_fields('custom-text-settings-group'); ?>
            <?php do_settings_sections('custom-text-settings-group'); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Main Title</th>
                    <td><input type="text" style="width:400px;" name="main_title" value="<?php echo esc_attr(get_option('main_title')); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Main Paragraph</th>
                    <td><textarea style="width:400px; min-height: 300px;" name="main_paragraph"><?php echo esc_attr(get_option('main_paragraph')); ?></textarea></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Title of Address</th>
                    <td><input type="text" style="width:400px;" name="title_of_address" value="<?php echo esc_attr(get_option('title_of_address')); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Address Detail</th>
                    <td><textarea style="width:400px; min-height: 300px;" name="address_detail"><?php echo esc_attr(get_option('address_detail')); ?></textarea></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Google Map Link</th>
                    <td><textarea style="width:400px; min-height: 300px;" name="google_map_link"><?php echo esc_attr(get_option('google_map_link')); ?></textarea></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Title of Profile</th>
                    <td><input type="text" style="width:400px;" name="title_of_profile" value="<?php echo esc_attr(get_option('title_of_profile')); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Manager Name</th>
                    <td><input type="text" style="width:400px;" name="manager_name" value="<?php echo esc_attr(get_option('manager_name')); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Manager Designation</th>
                    <td><input type="text" style="width:400px;" name="manager_designation" value="<?php echo esc_attr(get_option('manager_designation')); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Manager Profile Des.</th>
                    <td><textarea style="width:400px; min-height: 300px;" name="manager_profile_des"><?php echo esc_attr(get_option('manager_profile_des')); ?></textarea></td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
<?php } ?>
