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
        'supports' => array('title', 'editor', 'thumbnail')
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
    add_meta_box('inhalt_field_meta_1', 'Right Sidebar Block #1', 'inhalt_field_meta_1', 'inhalt');
    add_meta_box('inhalt_field_meta_2', 'Right Sidebar Block #2', 'inhalt_field_meta_2', 'inhalt');
    add_meta_box('inhalt_field_meta_3', 'Right Sidebar Block #3', 'inhalt_field_meta_3', 'inhalt');
    add_meta_box('inhalt_field_meta_4', 'Right Sidebar Block #4', 'inhalt_field_meta_4', 'inhalt');
    add_meta_box('inhalt_field_meta_5', 'Right Sidebar Block #5', 'inhalt_field_meta_5', 'inhalt');
    add_meta_box('inhalt_field_meta_6', 'Right Sidebar Block #6', 'inhalt_field_meta_6', 'inhalt');
    add_meta_box('inhalt_field_meta_7', 'Right Sidebar Block #7', 'inhalt_field_meta_7', 'inhalt');
    add_meta_box('inhalt_field_meta_8', 'Right Sidebar Block #8', 'inhalt_field_meta_8', 'inhalt');
    add_meta_box('inhalt_field_meta_9', 'Right Sidebar Block #9', 'inhalt_field_meta_9', 'inhalt');
    add_meta_box('inhalt_field_meta_10', 'Right Sidebar Block #10', 'inhalt_field_meta_10', 'inhalt');
}

function inhalt_field_meta_1() {
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
                <td><label>Right Sidebar Title</label></td>
                <td><input class="staff_code_box" name="sidebar_title_1" value="<?php echo $sidebar_title_1; ?>" /></td>
            </tr>
            <tr>
                <td><label>Right Sidebar Text</label></td>
                <td><textarea class="staff_code_box" name="sidebar_text_1"><?php echo $sidebar_text_1; ?></textarea></td>
            </tr>
            <tr>
                <td><label>Right Sidebar Link</label></td>
                <td><input class="staff_code_box" name="sidebar_link_1" value="<?php echo $sidebar_link_1; ?>" /></td>
            </tr>
        </table>
    </div>
    <?php
}

function inhalt_field_meta_2() {
    global $post;
    $custom = get_post_custom($post->ID);

    $sidebar_title_2 = $custom["sidebar_title_2"][0];
    $sidebar_text_2 = $custom["sidebar_text_2"][0];
    $sidebar_link_2 = $custom["sidebar_link_2"][0];

    echo '<input type="hidden" name="stremimg-nonce" id="stremimg-nonce" value="' .
    wp_create_nonce('stremimg-nonce') . '" />';
    ?>
    <div class="staff_filed_meta">
        <table>
            <tr>
                <td><label>Right Sidebar Title</label></td>
                <td><input class="staff_code_box" name="sidebar_title_2" value="<?php echo $sidebar_title_2; ?>" /></td>
            </tr>
            <tr>
                <td><label>Right Sidebar Text</label></td>
                <td><textarea class="staff_code_box" name="sidebar_text_2"><?php echo $sidebar_text_2; ?></textarea></td>
            </tr>
            <tr>
                <td><label>Right Sidebar Link</label></td>
                <td><input class="staff_code_box" name="sidebar_link_2" value="<?php echo $sidebar_link_2; ?>" /></td>
            </tr>
        </table>
    </div>
    <?php
}

function inhalt_field_meta_3() {
    global $post;
    $custom = get_post_custom($post->ID);

    $sidebar_title_3 = $custom["sidebar_title_3"][0];
    $sidebar_text_3 = $custom["sidebar_text_3"][0];
    $sidebar_link_3 = $custom["sidebar_link_3"][0];

    echo '<input type="hidden" name="stremimg-nonce" id="stremimg-nonce" value="' .
    wp_create_nonce('stremimg-nonce') . '" />';
    ?>
    <div class="staff_filed_meta">
        <table>
            <tr>
                <td><label>Right Sidebar Title</label></td>
                <td><input class="staff_code_box" name="sidebar_title_3" value="<?php echo $sidebar_title_3; ?>" /></td>
            </tr>
            <tr>
                <td><label>Right Sidebar Text</label></td>
                <td><textarea class="staff_code_box" name="sidebar_text_3"><?php echo $sidebar_text_3; ?></textarea></td>
            </tr>
            <tr>
                <td><label>Right Sidebar Link</label></td>
                <td><input class="staff_code_box" name="sidebar_link_3" value="<?php echo $sidebar_link_3; ?>" /></td>
            </tr>
        </table>
    </div>
    <?php
}

function inhalt_field_meta_4() {
    global $post;
    $custom = get_post_custom($post->ID);

    $sidebar_title_4 = $custom["sidebar_title_4"][0];
    $sidebar_text_4 = $custom["sidebar_text_4"][0];
    $sidebar_link_4 = $custom["sidebar_link_4"][0];

    echo '<input type="hidden" name="stremimg-nonce" id="stremimg-nonce" value="' .
    wp_create_nonce('stremimg-nonce') . '" />';
    ?>
    <div class="staff_filed_meta">
        <table>
            <tr>
                <td><label>Right Sidebar Title</label></td>
                <td><input class="staff_code_box" name="sidebar_title_4" value="<?php echo $sidebar_title_4; ?>" /></td>
            </tr>
            <tr>
                <td><label>Right Sidebar Text</label></td>
                <td><textarea class="staff_code_box" name="sidebar_text_4"><?php echo $sidebar_text_4; ?></textarea></td>
            </tr>
            <tr>
                <td><label>Right Sidebar Link</label></td>
                <td><input class="staff_code_box" name="sidebar_link_4" value="<?php echo $sidebar_link_4; ?>" /></td>
            </tr>
        </table>
    </div>
    <?php
}

function inhalt_field_meta_5() {
    global $post;
    $custom = get_post_custom($post->ID);

    $sidebar_title_5 = $custom["sidebar_title_5"][0];
    $sidebar_text_5 = $custom["sidebar_text_5"][0];
    $sidebar_link_5 = $custom["sidebar_link_5"][0];

    echo '<input type="hidden" name="stremimg-nonce" id="stremimg-nonce" value="' .
    wp_create_nonce('stremimg-nonce') . '" />';
    ?>
    <div class="staff_filed_meta">
        <table>
            <tr>
                <td><label>Right Sidebar Title</label></td>
                <td><input class="staff_code_box" name="sidebar_title_5" value="<?php echo $sidebar_title_5; ?>" /></td>
            </tr>
            <tr>
                <td><label>Right Sidebar Text</label></td>
                <td><textarea class="staff_code_box" name="sidebar_text_5"><?php echo $sidebar_text_5; ?></textarea></td>
            </tr>
            <tr>
                <td><label>Right Sidebar Link</label></td>
                <td><input class="staff_code_box" name="sidebar_link_5" value="<?php echo $sidebar_link_5; ?>" /></td>
            </tr>
        </table>
    </div>
    <?php
}

function inhalt_field_meta_6() {
    global $post;
    $custom = get_post_custom($post->ID);

    $sidebar_title_6 = $custom["sidebar_title_6"][0];
    $sidebar_text_6 = $custom["sidebar_text_6"][0];
    $sidebar_link_6 = $custom["sidebar_link_6"][0];

    echo '<input type="hidden" name="stremimg-nonce" id="stremimg-nonce" value="' .
    wp_create_nonce('stremimg-nonce') . '" />';
    ?>
    <div class="staff_filed_meta">
        <table>
            <tr>
                <td><label>Right Sidebar Title</label></td>
                <td><input class="staff_code_box" name="sidebar_title_6" value="<?php echo $sidebar_title_6; ?>" /></td>
            </tr>
            <tr>
                <td><label>Right Sidebar Text</label></td>
                <td><textarea class="staff_code_box" name="sidebar_text_6"><?php echo $sidebar_text_6; ?></textarea></td>
            </tr>
            <tr>
                <td><label>Right Sidebar Link</label></td>
                <td><input class="staff_code_box" name="sidebar_link_6" value="<?php echo $sidebar_link_6; ?>" /></td>
            </tr>
        </table>
    </div>
    <?php
}

function inhalt_field_meta_7() {
    global $post;
    $custom = get_post_custom($post->ID);

    $sidebar_title_7 = $custom["sidebar_title_7"][0];
    $sidebar_text_7 = $custom["sidebar_text_7"][0];
    $sidebar_link_7 = $custom["sidebar_link_7"][0];

    echo '<input type="hidden" name="stremimg-nonce" id="stremimg-nonce" value="' .
    wp_create_nonce('stremimg-nonce') . '" />';
    ?>
    <div class="staff_filed_meta">
        <table>
            <tr>
                <td><label>Right Sidebar Title</label></td>
                <td><input class="staff_code_box" name="sidebar_title_7" value="<?php echo $sidebar_title_7; ?>" /></td>
            </tr>
            <tr>
                <td><label>Right Sidebar Text</label></td>
                <td><textarea class="staff_code_box" name="sidebar_text_7"><?php echo $sidebar_text_7; ?></textarea></td>
            </tr>
            <tr>
                <td><label>Right Sidebar Link</label></td>
                <td><input class="staff_code_box" name="sidebar_link_7" value="<?php echo $sidebar_link_7; ?>" /></td>
            </tr>
        </table>
    </div>
    <?php
}

function inhalt_field_meta_8() {
    global $post;
    $custom = get_post_custom($post->ID);

    $sidebar_title_8 = $custom["sidebar_title_8"][0];
    $sidebar_text_8 = $custom["sidebar_text_8"][0];
    $sidebar_link_8 = $custom["sidebar_link_8"][0];

    echo '<input type="hidden" name="stremimg-nonce" id="stremimg-nonce" value="' .
    wp_create_nonce('stremimg-nonce') . '" />';
    ?>
    <div class="staff_filed_meta">
        <table>
            <tr>
                <td><label>Right Sidebar Title</label></td>
                <td><input class="staff_code_box" name="sidebar_title_8" value="<?php echo $sidebar_title_8; ?>" /></td>
            </tr>
            <tr>
                <td><label>Right Sidebar Text</label></td>
                <td><textarea class="staff_code_box" name="sidebar_text_8"><?php echo $sidebar_text_8; ?></textarea></td>
            </tr>
            <tr>
                <td><label>Right Sidebar Link</label></td>
                <td><input class="staff_code_box" name="sidebar_link_8" value="<?php echo $sidebar_link_8; ?>" /></td>
            </tr>
        </table>
    </div>
    <?php
}

function inhalt_field_meta_9() {
    global $post;
    $custom = get_post_custom($post->ID);

    $sidebar_title_9 = $custom["sidebar_title_9"][0];
    $sidebar_text_9 = $custom["sidebar_text_9"][0];
    $sidebar_link_9 = $custom["sidebar_link_9"][0];

    echo '<input type="hidden" name="stremimg-nonce" id="stremimg-nonce" value="' .
    wp_create_nonce('stremimg-nonce') . '" />';
    ?>
    <div class="staff_filed_meta">
        <table>
            <tr>
                <td><label>Right Sidebar Title</label></td>
                <td><input class="staff_code_box" name="sidebar_title_9" value="<?php echo $sidebar_title_9; ?>" /></td>
            </tr>
            <tr>
                <td><label>Right Sidebar Text</label></td>
                <td><textarea class="staff_code_box" name="sidebar_text_9"><?php echo $sidebar_text_9; ?></textarea></td>
            </tr>
            <tr>
                <td><label>Right Sidebar Link</label></td>
                <td><input class="staff_code_box" name="sidebar_link_9" value="<?php echo $sidebar_link_9; ?>" /></td>
            </tr>
        </table>
    </div>
    <?php
}

function inhalt_field_meta_10() {
    global $post;
    $custom = get_post_custom($post->ID);

    $sidebar_title_10 = $custom["sidebar_title_10"][0];
    $sidebar_text_10 = $custom["sidebar_text_10"][0];
    $sidebar_link_10 = $custom["sidebar_link_10"][0];

    echo '<input type="hidden" name="stremimg-nonce" id="stremimg-nonce" value="' .
    wp_create_nonce('stremimg-nonce') . '" />';
    ?>
    <div class="staff_filed_meta">
        <table>
            <tr>
                <td><label>Right Sidebar Title</label></td>
                <td><input class="staff_code_box" name="sidebar_title_10" value="<?php echo $sidebar_title_10; ?>" /></td>
            </tr>
            <tr>
                <td><label>Right Sidebar Text</label></td>
                <td><textarea class="staff_code_box" name="sidebar_text_10"><?php echo $sidebar_text_10; ?></textarea></td>
            </tr>
            <tr>
                <td><label>Right Sidebar Link</label></td>
                <td><input class="staff_code_box" name="sidebar_link_10" value="<?php echo $sidebar_link_10; ?>" /></td>
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





    if (!isset($_POST["sidebar_title_2"])):
        return $post;
    endif;
    $updateendd = $_POST["sidebar_title_2"];
    update_post_meta($post->ID, "sidebar_title_2", $updateendd);

    if (!isset($_POST["sidebar_text_2"])):
        return $post;
    endif;
    $updateendd = $_POST["sidebar_text_2"];
    update_post_meta($post->ID, "sidebar_text_2", $updateendd);

    if (!isset($_POST["sidebar_link_2"])):
        return $post;
    endif;
    $updateendd = $_POST["sidebar_link_2"];
    update_post_meta($post->ID, "sidebar_link_2", $updateendd);



    if (!isset($_POST["sidebar_title_3"])):
        return $post;
    endif;
    $updateendd = $_POST["sidebar_title_3"];
    update_post_meta($post->ID, "sidebar_title_3", $updateendd);

    if (!isset($_POST["sidebar_text_3"])):
        return $post;
    endif;
    $updateendd = $_POST["sidebar_text_3"];
    update_post_meta($post->ID, "sidebar_text_3", $updateendd);

    if (!isset($_POST["sidebar_link_3"])):
        return $post;
    endif;
    $updateendd = $_POST["sidebar_link_3"];
    update_post_meta($post->ID, "sidebar_link_3", $updateendd);



    if (!isset($_POST["sidebar_title_4"])):
        return $post;
    endif;
    $updateendd = $_POST["sidebar_title_4"];
    update_post_meta($post->ID, "sidebar_title_4", $updateendd);

    if (!isset($_POST["sidebar_text_4"])):
        return $post;
    endif;
    $updateendd = $_POST["sidebar_text_4"];
    update_post_meta($post->ID, "sidebar_text_4", $updateendd);

    if (!isset($_POST["sidebar_link_4"])):
        return $post;
    endif;
    $updateendd = $_POST["sidebar_link_4"];
    update_post_meta($post->ID, "sidebar_link_4", $updateendd);





    if (!isset($_POST["sidebar_title_5"])):
        return $post;
    endif;
    $updateendd = $_POST["sidebar_title_5"];
    update_post_meta($post->ID, "sidebar_title_5", $updateendd);

    if (!isset($_POST["sidebar_text_5"])):
        return $post;
    endif;
    $updateendd = $_POST["sidebar_text_5"];
    update_post_meta($post->ID, "sidebar_text_5", $updateendd);

    if (!isset($_POST["sidebar_link_5"])):
        return $post;
    endif;
    $updateendd = $_POST["sidebar_link_5"];
    update_post_meta($post->ID, "sidebar_link_5", $updateendd);




    if (!isset($_POST["sidebar_title_6"])):
        return $post;
    endif;
    $updateendd = $_POST["sidebar_title_6"];
    update_post_meta($post->ID, "sidebar_title_6", $updateendd);

    if (!isset($_POST["sidebar_text_6"])):
        return $post;
    endif;
    $updateendd = $_POST["sidebar_text_6"];
    update_post_meta($post->ID, "sidebar_text_6", $updateendd);

    if (!isset($_POST["sidebar_link_6"])):
        return $post;
    endif;
    $updateendd = $_POST["sidebar_link_6"];
    update_post_meta($post->ID, "sidebar_link_6", $updateendd);



    if (!isset($_POST["sidebar_title_7"])):
        return $post;
    endif;
    $updateendd = $_POST["sidebar_title_7"];
    update_post_meta($post->ID, "sidebar_title_7", $updateendd);

    if (!isset($_POST["sidebar_text_7"])):
        return $post;
    endif;
    $updateendd = $_POST["sidebar_text_7"];
    update_post_meta($post->ID, "sidebar_text_7", $updateendd);

    if (!isset($_POST["sidebar_link_7"])):
        return $post;
    endif;
    $updateendd = $_POST["sidebar_link_7"];
    update_post_meta($post->ID, "sidebar_link_7", $updateendd);



    if (!isset($_POST["sidebar_title_8"])):
        return $post;
    endif;
    $updateendd = $_POST["sidebar_title_8"];
    update_post_meta($post->ID, "sidebar_title_8", $updateendd);

    if (!isset($_POST["sidebar_text_8"])):
        return $post;
    endif;
    $updateendd = $_POST["sidebar_text_8"];
    update_post_meta($post->ID, "sidebar_text_8", $updateendd);

    if (!isset($_POST["sidebar_link_8"])):
        return $post;
    endif;
    $updateendd = $_POST["sidebar_link_8"];
    update_post_meta($post->ID, "sidebar_link_8", $updateendd);



    if (!isset($_POST["sidebar_title_9"])):
        return $post;
    endif;
    $updateendd = $_POST["sidebar_title_9"];
    update_post_meta($post->ID, "sidebar_title_9", $updateendd);

    if (!isset($_POST["sidebar_text_9"])):
        return $post;
    endif;
    $updateendd = $_POST["sidebar_text_9"];
    update_post_meta($post->ID, "sidebar_text_9", $updateendd);

    if (!isset($_POST["sidebar_link_9"])):
        return $post;
    endif;
    $updateendd = $_POST["sidebar_link_9"];
    update_post_meta($post->ID, "sidebar_link_9", $updateendd);



    if (!isset($_POST["sidebar_title_10"])):
        return $post;
    endif;
    $updateendd = $_POST["sidebar_title_10"];
    update_post_meta($post->ID, "sidebar_title_10", $updateendd);

    if (!isset($_POST["sidebar_text_10"])):
        return $post;
    endif;
    $updateendd = $_POST["sidebar_text_10"];
    update_post_meta($post->ID, "sidebar_text_10", $updateendd);

    if (!isset($_POST["sidebar_link_10"])):
        return $post;
    endif;
    $updateendd = $_POST["sidebar_link_10"];
    update_post_meta($post->ID, "sidebar_link_10", $updateendd);
}

function inhalt_field_style_admin() {
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

add_action('admin_head', 'inhalt_field_style_admin');
?>
