<?php
/*
Plugin Name: Recent Posts Easy
Description: A simple shortcode for displaying recent posts with thumbnails and meta descriptions.
Version: 1.1
Author: ERA Solutions
Author URI: http://plugins.era-solutions.com
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

function recent_posts_shortcode($atts) {
    $atts = shortcode_atts(array(
        'limit' => '5',
        'image_size' => 'thumbnail',
        'post_type' => 'post',
        'category' => '',
        'order' => 'DESC',
        'meta_limit' => '15'
    ), $atts);
    
    $args = array(
        'post_type' => sanitize_text_field($atts['post_type']),
        'posts_per_page' => intval($atts['limit']),
        'category_name' => sanitize_text_field($atts['category']),
        'order' => sanitize_text_field($atts['order'])
    );
    
    $recent_posts = new WP_Query($args);
    
    if ($recent_posts->have_posts()) {
        $output = '<div class="recent-posts-row">';
        
        while ($recent_posts->have_posts()) {
            $recent_posts->the_post();
            $output .= '<div class="recent-post">';
            $output .= '<div class="recent-post-thumbnail">' . get_the_post_thumbnail(null, sanitize_text_field($atts['image_size'])) . '</div>';
            $output .= '<div class="recent-post-content">';
            $output .= '<h4 class="recent-post-title"><a href="' . esc_url(get_permalink()) . '">' . esc_html(get_the_title()) . '</a></h4>';
            $output .= '<p class="recent-post-meta">' . esc_html(wp_trim_words(get_the_excerpt(), intval($atts['meta_limit']), '...')) . '</p>';
            $output .= '</div>';
            $output .= '</div>';
        }
        
        $output .= '</div>';
        wp_reset_postdata();
        return $output;
    }
}

add_shortcode('recent-posts', 'recent_posts_shortcode');
