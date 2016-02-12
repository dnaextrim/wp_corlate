<?php
/**
 * Extra Social Form in User Form
 * @param object $user
 */
add_action('show_user_profile', 'add_extra_social_links');
add_action('user_new_form', 'add_extra_social_links');
add_action('edit_user_profile', 'add_extra_social_links');

function add_extra_social_links($user)
{
    ?>
    <h3>Add Social Information</h3>

    <table class="form-table">
        <tr>
            <th><label for="facebook">Facebook Url</label></th>
            <td><input type="text" name="facebook"
                       value="<?php echo esc_attr(get_the_author_meta('wp_corlate_facebook', $user->ID)); ?>"
                       class="regular-text"/></td>
        </tr>

        <tr>
            <th><label for="twitter">Twitter Url</label></th>
            <td><input type="text" name="twitter"
                       value="<?php echo esc_attr(get_the_author_meta('wp_corlate_twitter', $user->ID)); ?>"
                       class="regular-text"/></td>
        </tr>

        <tr>
            <th><label for="gplus">Google+ Url</label></th>
            <td><input type="text" name="gplus"
                       value="<?php echo esc_attr(get_the_author_meta('wp_corlate_gplus', $user->ID)); ?>"
                       class="regular-text"/></td>
        </tr>
        <tr>
            <th><label for="github">Github Url</label></th>
            <td><input type="text" name="github"
                       value="<?php echo esc_attr(get_the_author_meta('wp_corlate_github', $user->ID)); ?>"
                       class="regular-text"/></td>
        </tr>
    </table>
    <?php
}

/**
 * Action add and update
 */
add_action('personal_options_update', 'save_extra_social_links');
add_action('user_register', 'save_extra_social_links');
add_action('edit_user_profile_update', 'save_extra_social_links');

function save_extra_social_links($user_id)
{
    update_user_meta($user_id, 'wp_corlate_facebook', sanitize_text_field($_POST['facebook']));
    update_user_meta($user_id, 'wp_corlate_twitter', sanitize_text_field($_POST['twitter']));
    update_user_meta($user_id, 'wp_corlate_gplus', sanitize_text_field($_POST['gplus']));
    update_user_meta($user_id, 'wp_corlate_github', sanitize_text_field($_POST['github']));
}

/**
 * Action delete user
 */
add_action('delete_user', 'delete_extra_social_links');
function delete_extra_social_links($user_id)
{
    delete_user_meta($user_id, 'wp_corlate_facebook');
    delete_user_meta($user_id, 'wp_corlate_twitter');
    delete_user_meta($user_id, 'wp_corlate_gplus');
    delete_user_meta($user_id, 'wp_corlate_github');
}

// End