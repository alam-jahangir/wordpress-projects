<?php
add_action('init', 'custom_post_types_inhalt');

function custom_post_types_inhalt() {
    $labels = array(
        'name' => 'Inhalt',
        'all_items' => 'All Inhalt',
        'singular_name' => 'Add New',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Inhalt',
        'edit_item' => 'Edit Inhalt',
        'new_item' => 'New Inhalt',
        'view_item' => 'View Inhalt',
        'search_items' => 'Insert Inhalt Keywords',
        'not_found' => 'There are no results(Inhalt) matching your search. Please try a different search or browse through the list of Notices',
        'not_found_in_trash' => 'There are no results(Inhalt) matching your search. Please try a different search or browse through the list of Trash',
        'parent_item_colon' => 'null',
        'menu_name' => 'Inhalt',
        'popular_items' => 'Popular Inhalt',
        'update_item' => 'Update Inhalt',
        'new_item_name' => 'New Inhalt Name',
        'separate_items_with_commas' => 'Separate Inhalt with commas',
        'add_or_remove_items' => 'Add or remove Inhalt',
        'choose_from_most_used' => 'Choose from the most used Inhalt',
        'parent_item' => null,
        'choose_from_most_used' => 'Choose from the most used Inhalt',
        'add_or_remove_items' => 'Add or remove Inhalt',
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
        'description' => 'Description for Inhalt',
        'query_var' => true,
        'can_export' => true,
        'show_in_nav_menus' => true,
        'rewrite' => true,
        'parent' => 'Parent for Inhalt',
        'capability_type' => 'post',
        'hierarchical' => true,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields', 'revisions', 'page-attributes', 'post-formats')
    );

    $taxonomy = array(
        'hierarchical' => TRUE,
        'show_ui' => TRUE,
        'rewrite' => TRUE,
        'query_var' => TRUE,
        'public' => TRUE,
        'label' => 'Inhalt Categories',
        'show_admin_column' => TRUE,
    );

    register_taxonomy('inhalt_taxonomy', 'inhalt', $taxonomy);
    register_post_type('inhalt', $args);
}

function filter_for_inhalt() {
    global $typenow;
    $taxonomy = 'inhalt_taxonomy';

    if ($typenow == "inhalt") {
        $filters = array($taxonomy);
        foreach ($filters as $tax_slug) {
            $tax_obj = get_taxonomy("inhalt_taxonomy");
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

add_action('restrict_manage_posts', 'filter_for_inhalt');

add_action('admin_init', 'inhalt_custom_field');

function inhalt_custom_field() {
    add_meta_box('inhalt_field_meta', 'Inhalt Information', 'inhalt_field_meta', 'inhalt');
}

// Grab Data
function inhalt_field_meta() {
    global $post;
    $custom = get_post_custom($post->ID);

    $sidebar_title_1 = $custom["sidebar_title_1"][0];
    $sidebar_text_1 = $custom["sidebar_text_1"][0];
    $sidebar_link_1 = $custom["sidebar_link_1"][0];

    // Security
    echo '<input type="hidden" name="stremimg-nonce" id="stremimg-nonce" value="' .
    wp_create_nonce('stremimg-nonce') . '" />';
    ?>
    <div class="staff_filed_meta">
        <table>
            <tr>
                <td><label>Right Sidebar Title 1</label></td>
                <td><input class="staff_code_box" name="sidebar_title_1" value="<?php echo $sidebar_title_1; ?>" /></td>
            </tr>
            <tr>
                <td><label>Right Sidebar Text 1</label></td>

                <td><textarea class="staff_code_box" name="sidebar_text_1"><?php echo $sidebar_text_1; ?></textarea></td>
            </tr>
            <tr>
                <td><label>Right Link 1</label></td>
                <td><input class="staff_code_box" name="sidebar_link_1" value="<?php echo $sidebar_link_1; ?>" /></td>
            </tr>
        </table>
    </div>
    <?php
}

// 5. Save Data 
add_action('save_post', 'save_inhalt_field');

function save_inhalt_field() {

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

function inhalt_field_style_admin() {
    ?>
    <style type="text/css">
        .staff_filed_meta{}
        .staff_code_box{
            width: 100%;
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

add_action('admin_head', 'inhalt_field_style_admin');
?>