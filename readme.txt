=== Recent Posts Easy ===
Contributors: afazza , eraplugins , ramielhabashy
Tags: recent posts, shortcode, thumbnails, meta descriptions
Requires at least: 4.0
Tested up to: 6.5.5
Stable tag: trunk
License: GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
A simple shortcode for displaying recent posts with thumbnails and meta descriptions.

== Description ==

The "Recent Posts Easy" plugin provides a simple shortcode for displaying recent posts with thumbnails and meta descriptions on your WordPress site.

The shortcode accepts several attributes that allow you to customize the output, including the number of posts to display, the image size, the post type, the category, the sort order, and the maximum length of the meta description.

To use the shortcode, simply add the following code to any page or post:

`[recent-posts]`

You can also customize the shortcode by adding attributes, like this:

[recent-posts limit="10" image_size="medium" post_type="page" category="news" order="ASC" meta_limit="30"]

To learn more about this plugin and its features, please visit our [plugin page](https://plugins.era-solutions.com/our_plugins/recent-posts-easy/).

== Installation ==

1. Upload the "recent-posts-easy" folder to the "/wp-content/plugins/" directory.
2. Activate the plugin through the "Plugins" menu in WordPress.
== Usage ==

To use the shortcode, simply add the following code to any page or post:

`[recent-posts]`

This will display the 5 most recent posts with thumbnails and meta descriptions.

You can also customize the shortcode by adding attributes. Here are the available attributes:

* `limit` - The maximum number of posts to display (default is 5)
* `image_size` - The size of the thumbnail image (default is "thumbnail")
* `post_type` - The post type to display (default is "post")
* `category` - The category to display (default is empty)
* `order` - The sort order of the posts (default is "DESC")
* `meta_limit` - The maximum length of the meta description (default is 15)
For example, to display the 10 most recent pages in the "news" category with medium-sized thumbnails and longer meta descriptions, you would use the following shortcode:

`[recent-posts limit="10" image_size="medium" post_type="page" category="news" order="ASC" meta_limit="30"]`

== Frequently Asked Questions ==

= How do I customize the output of the shortcode? =

You can customize the output by adding attributes to the shortcode. See the "Usage" section for a list of available attributes.

= Can I use this shortcode in a widget or a theme file? =

Yes, you can use the do_shortcode() function to embed the shortcode in a widget or a theme file. For example, you could use the following code in a widget or a template file:

<?php echo do_shortcode('[recent-posts]'); ?>
== Changelog ==

= 1.0 =

Initial release.
== Upgrade Notice ==

= 1.0 =
Initial release. No upgrade necessary.

= 1.1 =
Tested with 6.5.5
