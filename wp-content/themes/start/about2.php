<?php
add_action('init', 'custom_post_types_about');

function custom_post_types_about() {
    $labels = array(
        'name' => 'About',
        'all_items' => 'All About',
        'singular_name' => 'Add New',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New About',
        'edit_item' => 'Edit About',
        'new_item' => 'New About',
        'view_item' => 'View About',
        'search_items' => 'Insert About Keywords',
        'not_found' => 'There are no results(About) matching your search. Please try a different search or browse through the list of Notices',
        'not_found_in_trash' => 'There are no results(About) matching your search. Please try a different search or browse through the list of Trash',
        'parent_item_colon' => 'null',
        'menu_name' => 'About',
        'popular_items' => 'Popular About',
        'update_item' => 'Update About',
        'new_item_name' => 'New About Name',
        'separate_items_with_commas' => 'Separate About with commas',
        'add_or_remove_items' => 'Add or remove About',
        'choose_from_most_used' => 'Choose from the most used About',
        'parent_item' => null,
        'choose_from_most_used' => 'Choose from the most used About',
        'add_or_remove_items' => 'Add or remove About',
    );

    $args = array(
        'labels' => $labels,
        'publicly_queryable' => true,
        'show_in_menu' => true,
        'exclude_from_search' => true,
        'menu_position' => null,
        'public' => true,
        'menu_icon' => get_stylesheet_directory_uri() . '/images/inhalt.png',
        'has_archive' => true,
        'query_var' => true,
        'show_ui' => true,
        'description' => 'Description for About',
        'query_var' => true,
        'can_export' => true,
        'show_in_nav_menus' => true,
        'rewrite' => true,
        'parent' => 'Parent for About',
        'capability_type' => 'post',
        'hierarchical' => true,
        'supports' => array('title', 'editor', 'thumbnail')
    );

    $taxonomy = array(
        'hierarchical' => TRUE,
        'show_ui' => TRUE,
        'rewrite' => TRUE,
        'query_var' => TRUE,
        'public' => TRUE,
        'label' => 'About Categories',
        'show_admin_column' => TRUE,
    );

    register_taxonomy('about_taxonomy', 'about', $taxonomy);
    register_post_type('about', $args);
}

function filter_for_about() {
    global $typenow;
    $taxonomy = 'about_taxonomy';

    if ($typenow == "about") {
        $filters = array($taxonomy);
        foreach ($filters as $tax_slug) {
            $tax_obj = get_taxonomy("about_taxonomy");
            $tax_name = $tax_obj->labels->name;
            $terms = get_terms($tax_slug);
            echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
            echo "<option value=''>Show All $tax_name</option>";
            foreach ($terms as $term) {
                echo '<option value=' . $term->slug, $_GET[$tax_slug] == $term->slug ? ' selected="selected"' : '', '>' . $term->name . ' (' . $term->count . ')</option>';
            }
            echo "</select>";
        }
    }
}

add_action('restrict_manage_posts', 'filter_for_about');

add_action('admin_init', 'about_custom_field');

function about_custom_field() {
    add_meta_box('about_field_meta_1', 'Right Sidebar Block #1', 'about_field_meta_1', 'about');
}

function about_field_meta_1() {
    global $post;
    $custom = get_post_custom($post->ID);

    $sidebar_title_1 = $custom["sidebar_title_1"][0];
    $sidebar_text_1 = $custom["sidebar_text_1"][0];
    $sidebar_link_1 = $custom["sidebar_link_1"][0];

    echo '<input type="hidden" name="stremimg-nonce" id="stremimg-nonce" value="' .
    wp_create_nonce('stremimg-nonce') . '" />';
    ?>
    <div class="staff_filed_meta">
        <table>
            <tr>
                <td><label>Main Title</label></td>
                <td><input class="staff_code_box" name="" value="<?php echo $main_title; ?>" /></td>
            </tr>
            <tr>
                <td><label>Main Paragraph</label></td>
                <td><textarea class="staff_code_box" name=""><?php echo $main_paragraph; ?></textarea></td>
            </tr>
            <tr>
                <td><label>Title of Address</label></td>
                <td><input class="staff_code_box" name="" value="<?php echo $title_of_address; ?>" /></td>
            </tr>
            <tr>
                <td><label>Address Detail</label></td>
                <td><input class="staff_code_box" name="" value="<?php echo $address_detail; ?>" /></td>
            </tr>
            <tr>
                <td><label>Google Map Link</label></td>
                <td><textarea class="staff_code_box" name=""><?php echo $google_map_link; ?></textarea></td>
            </tr>
            <tr>
                <td><label>Title of Profile</label></td>
                <td><input class="staff_code_box" name="" value="<?php echo $title_of_profile; ?>" /></td>
            </tr>
            <tr>
                <td><label>Manager Name</label></td>
                <td><input class="staff_code_box" name="" value="<?php echo $manager_name; ?>" /></td>
            </tr>
            <tr>
                <td><label>Manager Designation</label></td>
                <td><textarea class="staff_code_box" name=""><?php echo $manager_designation; ?></textarea></td>
            </tr>
            <tr>
                <td><label>Manager Profile Des.</label></td>
                <td><input class="staff_code_box" name="" value="<?php echo $manager_profile_des; ?>" /></td>
            </tr>
        </table>
    </div>
    <?php
}

// 5. Save Data 
add_action('save_post', 'save_about_field');

function save_about_field() {

    global $post;

// - still require nonce

    if (!wp_verify_nonce($_POST['stremimg-nonce'], 'stremimg-nonce')) {
        return $post->ID;
    }
    if (!current_user_can('edit_post', $post->ID))
        return $post->ID;

    if (!isset($_POST["sidebar_title_1"])):
        return $post;
    endif;
    $updateendd = $_POST["sidebar_title_1"];
    update_post_meta($post->ID, "sidebar_title_1", $updateendd);

    if (!isset($_POST["sidebar_text_1"])):
        return $post;
    endif;
    $updateendd = $_POST["sidebar_text_1"];
    update_post_meta($post->ID, "sidebar_text_1", $updateendd);

    if (!isset($_POST["sidebar_link_1"])):
        return $post;
    endif;
    $updateendd = $_POST["sidebar_link_1"];
    update_post_meta($post->ID, "sidebar_link_1", $updateendd);
}

function about_field_style_admin() {
    ?>
    <style type="text/css">
        .staff_filed_meta{}
        .staff_code_box{
            width: 600px;
            margin: 10px;
            border:1px solid #ddd; 
            padding:5px;
            border: 1px solid #ddd;
            transition: all 0.2s linear;
            font-family: "Helvetica Neue", sans-serif;
            font-size: 13px;
            color: #555;
            position: relative;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
        }
        .staff_code_box:focus{
            border:1px solid #aaa; 
        }
    </style>
    <?php
}

add_action('admin_head', 'about_field_style_admin');
?>
