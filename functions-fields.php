<?php
/**
 * Custom Field Manager for WordPress
 * 
 * This file contains functions to register, get, set, and display custom fields.
 */

// Get custom field definitions grouped by field groups
function get_grouped_custom_field_definitions() {
    $fields = array(
        'hero' => array(
            'title' => 'Hero',
            'instructions' => '',
            'fields' => array(
                array(
                    'name' => 'hero_subheading',
                    'type' => 'text',
                    'scope' => 'global',
                    'instructions' => 'Write a subheading that goes underneath the page title
Word count: 210-220 characters.',
                ),
            ),
        ),
        'services' => array(
            'title' => 'Services',
            'instructions' => '',
            'fields' => array(
                array(
                    'name' => 'service_short_description',
                    'type' => 'text',
                    'scope' => 'service',
                    'instructions' => '90-100 character description of the service, it will be used around the site where this service is linked. Do not mention the site name or location, focus only on the service.',
                ),
            ),
        ),
        'homepage_hero' => array(
            'title' => 'Homepage Hero',
            'instructions' => '',
            'fields' => array(
                array(
                    'name' => 'hero_heading',
                    'type' => 'text',
                    'scope' => 'page_specific',
                    'instructions' => 'The 40-70 character phrase will be used on the homepage of the site. It will go underneath the header. It should not mention the location.',
                ),
                array(
                    'name' => 'hero_subheading',
                    'type' => 'text',
                    'scope' => 'page_specific',
                    'instructions' => 'This 90-100 character phrase will be used on the homepage of the site. It will go underneath the header. It should not mention the location.',
                ),
            ),
        ),
        'homepage_about' => array(
            'title' => 'homepage_about',
            'instructions' => 'about the company section on the homepage',
            'fields' => array(
                array(
                    'name' => 'about_heading',
                    'type' => 'text',
                    'scope' => 'page_specific',
                    'instructions' => 'short heading for the about section, incorporating the niche and location',
                ),
                array(
                    'name' => 'about_text',
                    'type' => 'textarea',
                    'scope' => 'page_specific',
                    'instructions' => '1500 characters, about the company. Do not include any headings. You must include basic HTML for the paragraphs.',
                ),
            ),
        ),
        'homepage_services' => array(
            'title' => 'homepage_services',
            'instructions' => '',
            'fields' => array(
                array(
                    'name' => 'services_subheading',
                    'type' => 'text',
                    'scope' => 'page_specific',
                    'instructions' => '80-100 character subheader to go under the niche services heading. underneath is a list of services, so dont mention any specific ones.',
                ),
            ),
        ),
        'homepage_why' => array(
            'title' => 'homepage_why',
            'instructions' => 'Have a think about what are the 6 most important things when looking for a local service provider in this niche. Consists of headings and related content that goes under each.',
            'fields' => array(
                array(
                    'name' => 'why_heading',
                    'type' => 'text',
                    'scope' => 'page_specific',
                    'instructions' => 'heading that will go in a section about why us, mention the location and service',
                ),
                array(
                    'name' => 'why_subheading',
                    'type' => 'text',
                    'scope' => 'page_specific',
                    'instructions' => '80-100 character subheading for the why section',
                ),
                array(
                    'name' => 'why_1_heading',
                    'type' => 'text',
                    'scope' => 'page_specific',
                    'instructions' => 'heading for a section on why choose us. Niche specific.',
                ),
                array(
                    'name' => 'why_1_content',
                    'type' => 'text',
                    'scope' => 'page_specific',
                    'instructions' => '140-145 characters on the why_1_heading heading.',
                ),
                array(
                    'name' => 'why_2_heading',
                    'type' => 'text',
                    'scope' => 'page_specific',
                    'instructions' => 'heading for a section on why choose us. Niche specific.',
                ),
                array(
                    'name' => 'why_2_content',
                    'type' => 'text',
                    'scope' => 'page_specific',
                    'instructions' => '140-145 characters on the why_2_heading heading.',
                ),
                array(
                    'name' => 'why_3_heading',
                    'type' => 'text',
                    'scope' => 'page_specific',
                    'instructions' => 'heading for a section on why choose us. Niche specific.',
                ),
                array(
                    'name' => 'why_3_content',
                    'type' => 'text',
                    'scope' => 'page_specific',
                    'instructions' => '140-145 characters on the why_3_heading heading.',
                ),
                array(
                    'name' => 'why_4_heading',
                    'type' => 'text',
                    'scope' => 'page_specific',
                    'instructions' => 'heading for a section on why choose us. Niche specific.',
                ),
                array(
                    'name' => 'why_4_content',
                    'type' => 'text',
                    'scope' => 'page_specific',
                    'instructions' => '140-145 characters on the why_4_heading heading.',
                ),
                array(
                    'name' => 'why_5_heading',
                    'type' => 'text',
                    'scope' => 'page_specific',
                    'instructions' => 'heading for a section on why choose us. Niche specific.',
                ),
                array(
                    'name' => 'why_5_content',
                    'type' => 'text',
                    'scope' => 'page_specific',
                    'instructions' => '140-145 characters on the why_5_heading heading.',
                ),
                array(
                    'name' => 'why_6_heading',
                    'type' => 'text',
                    'scope' => 'page_specific',
                    'instructions' => 'heading for a section on why choose us. Niche specific.',
                ),
            ),
        ),
        'homepage_testimonials' => array(
            'title' => 'homepage_testimonials',
            'instructions' => 'Testimonial section for the homepage. All quotes should be a similar short length, approx 100 characters. Use a different writing style for each so they sound real and authentic. The name should be first name and initial (e.g. Nick P.)',
            'fields' => array(
                array(
                    'name' => 'testimonial_1_quote',
                    'type' => 'text',
                    'scope' => 'page_specific',
                    'instructions' => '',
                ),
                array(
                    'name' => 'testimonial_1_name',
                    'type' => 'text',
                    'scope' => 'page_specific',
                    'instructions' => '',
                ),
                array(
                    'name' => 'testimonial_2_quote',
                    'type' => 'text',
                    'scope' => 'page_specific',
                    'instructions' => '',
                ),
                array(
                    'name' => 'testimonial_2_name',
                    'type' => 'text',
                    'scope' => 'page_specific',
                    'instructions' => '',
                ),
                array(
                    'name' => 'testimonial_3_quote',
                    'type' => 'text',
                    'scope' => 'page_specific',
                    'instructions' => '',
                ),
                array(
                    'name' => 'testimonial_3_name',
                    'type' => 'text',
                    'scope' => 'page_specific',
                    'instructions' => '',
                ),
                array(
                    'name' => 'testimonial_4_quote',
                    'type' => 'text',
                    'scope' => 'page_specific',
                    'instructions' => '',
                ),
                array(
                    'name' => 'testimonial_4_name',
                    'type' => 'text',
                    'scope' => 'page_specific',
                    'instructions' => '',
                ),
                array(
                    'name' => 'why_6_content',
                    'type' => 'text',
                    'scope' => 'page_specific',
                    'instructions' => '40-145 characters on the why_6_heading heading.',
                ),
            ),
        ),
    );
    return $fields;
}

// Get all custom field definitions
function get_custom_field_definitions() {
    $grouped_fields = get_grouped_custom_field_definitions();
    $fields = array();
    foreach ($grouped_fields as $group) {
        $fields = array_merge($fields, $group['fields']);
    }
    return $fields;
}

// Register custom fields
function register_custom_fields() {
    $custom_fields = get_custom_field_definitions();
    $post_types = array('post', 'page', 'services');

    foreach ($custom_fields as $field) {
        foreach ($post_types as $post_type) {
            register_post_meta($post_type, $field['name'], array(
                'show_in_rest' => true,
                'single' => true,
                'type' => 'string', // Change this if you need other types
                'description' => $field['instructions'],
                'auth_callback' => function() {
                    return current_user_can('edit_posts');
                }
            ));
        }
    }
}
add_action('init', 'register_custom_fields');

// Display custom fields for a specific group
function display_custom_fields_group($post, $args) {
    if (!isset($args['args']['group']) || !isset($args['args']['group']['fields'])) {
        echo '<p>Error: No fields defined for this group.</p>';
        return;
    }
    
    $group = $args['args']['group'];
    
    if (!empty($group['instructions'])) {
        echo '<p class="description">' . esc_html($group['instructions']) . '</p>';
    }
    
    foreach ($group['fields'] as $field) {
        $value = get_post_meta($post->ID, $field['name'], true);
        ?>
        <div class="custom-field">
            <label for="<?php echo esc_attr($field['name']); ?>"><?php echo esc_html($field['name']); ?>:</label>
            <input type="text" id="<?php echo esc_attr($field['name']); ?>" name="<?php echo esc_attr($field['name']); ?>" value="<?php echo esc_attr($value); ?>">
            <p class="description"><?php echo esc_html($field['instructions']); ?></p>
        </div>
        <?php
    }
}

// Add custom fields metaboxes to post editor
function add_custom_fields_metaboxes() {
    $post_types = ['page', 'post', 'services'];
    $grouped_fields = get_grouped_custom_field_definitions();

    foreach ($post_types as $post_type) {
        foreach ($grouped_fields as $group_name => $group) {
            add_meta_box(
                'custom_fields_' . $group_name,
                $group['title'],
                'display_custom_fields_group',
                $post_type,
                'normal',
                'default',
                array('group' => $group)
            );
        }
    }
}
add_action('add_meta_boxes', 'add_custom_fields_metaboxes');

// Save custom field values
function save_custom_fields($post_id) {
    // Check if this is an autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    // Check the user's permissions
    if (isset($_POST['post_type']) && 'page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) return;
    } else {
        if (!current_user_can('edit_post', $post_id)) return;
    }

    $custom_fields = get_custom_field_definitions();
    
    foreach ($custom_fields as $field) {
        if (isset($_POST[$field['name']])) {
            update_post_meta($post_id, $field['name'], sanitize_text_field($_POST[$field['name']]));
        }
    }
}
add_action('save_post', 'save_custom_fields');
add_action('save_page', 'save_custom_fields');

// Helper function to get a custom field value
function get_custom_field($post_id, $field_name) {
    return get_post_meta($post_id, $field_name, true);
}

// Helper function to set a custom field value
function set_custom_field($post_id, $field_name, $value) {
    update_post_meta($post_id, $field_name, $value);
}

// Helper function to determine if a field is global or page-specific
function is_global_field($field_name) {
    $custom_fields = get_custom_field_definitions();
    foreach ($custom_fields as $field) {
        if ($field['name'] === $field_name) {
            return $field['scope'] === 'global';
        }
    }
    return false;
}

// Register the 'services' custom post type
function register_services_post_type() {
    $args = array(
        'public'       => true,
        'show_in_rest' => true,
        'label'        => 'Services',
        'supports'     => array('title', 'editor', 'excerpt', 'custom-fields'),
    );
    register_post_type('services', $args);
}
add_action('init', 'register_services_post_type');
