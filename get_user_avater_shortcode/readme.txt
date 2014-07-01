=== Avatar - User Photo Shortcode  ===
Contributors: 
Tags: get_avatar, user, avatar, gravatar, profile, photo, user picture, members, wordpress image, image, user image, app image, profile.php, profile fields, membership, blavatar
Requires at least: 3.0.1
Tested up to: 3.9.1
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Simple plugin that adds a shortcode [get_avatar]. Allows you to use avatars the same way wordpress lets you in templates. Use the same paramaters you would in the template to show the current user or any other users picture. 

== Description ==

This plugin adds the avatar shortcode. It lets you show any user photo on your site. Simply place the [get_avatar] shortcode in you post content. While you can do this in templates many times you might want to show an avatar without writing PHP. This plugin adds the same paramaters that the get_avatar function does.

As a developer you might use this in your template:

`<?php echo get_avatar( 'email@example.com', 64, 'http://www.example.com/custom-default-avatar.png', 'Image Alt Text' ); ?>`

The above would get you this for logged in users:

`<img alt="" src="http://1.gravatar.com/avatar/123" class="avatar avatar-64 photo" height="64" width="64">`

With this shortcode you can do the same thing in your content:
`[get_avatar id="email@example.com" size="64" default="http://www.example.com/custom-default-avatar.png" alt"Image Alt Text"]`

The shortcode would return almost the exact same thing with some additionals:

`<span class="get_avatar " style=""><img alt="Image Alt Text" src="http://1.gravatar.com/avatar/123" class="avatar avatar-64 photo" height="64" width="64"></span>`


I added a span tag around the image to allow for additional styling. Just add the style or class attributes to the shortcode to customize it's look.

`[get_avatar class="circle"]`

Currently I added the rounded and circle styles which you can use. Circle will make the image a complete circle similar to how gmail shows your picture in the top right corner.

`[get_avatar style="border: 2px solid #000000"]`

While you can include any of your classes using the class attribute you can also include styles inline using the method above. This will get added directly inline in the span tag. While this is good for general styling like borders, to add css directly to the image itself use either your own class or the get_avatar class and add any additional styling to your themes stylesheet.

This method gives you the most customization although it requires you to add css.

Using get_avatar in your stylesheet:

    .get_avatar img {
    
    }

Or you could add several different styles depending on the pages of your site. 

For example I could add this to my stylesheet to style  to style different avatars:

    .get_avatar homepage img {
    
    }
    
    .get_avatar profilepage img {
    
    }
    
    .get_avatar author john_smith img {
    
    }


Then my shortcodes would look like this :

`[get_avatar class="homepage"]`

`[get_avatar class="profilepage"]`

`[get_avatar class="author john_smith"]`



Thats pretty much it. See http://codex.wordpress.org/Function_Reference/get_avatar for the default template function usage. Questions or requests let me know.


== Installation ==

This section describes how to install the plugin and get it working.

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Add the `[get_avatar]` shortcode in your content.
== Frequently Asked Questions ==

How do I use the ID field?

Leave it blank to get the image of the currently logged in user :

`[get_avatar]`

Use some users email address :

`[get_avatar id='johnsmith@gmail.com']`

Use some users id :

`[get_avatar id='2']`

If you have other ways you'd like to be able to show specific users let me know and I will add a way to do it if it's not already available.


== Screenshots ==


== Changelog ==






