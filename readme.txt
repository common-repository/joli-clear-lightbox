=== Joli CLEAR Lightbox ===
Contributors: wpjoli
Donate link: 
Tags: lightbox,gallery,fancybox,image,photo,summary
Requires at least: 4.0
Tested up to: 5.9.2
Stable tag: 1.0.3
Requires PHP: 5.6
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Ultralight Lightbox for WordPress. Designed for Speed. No jQuery. Responsive with gestures. Simple, Elegant, yet highly Customizable.
Turns your image links into a beautiful lightbox. No jQuery 

== Description ==

Supercharge your image & gallery links by displaying a simple, modern, & powerful lightbox.

Works with native guttenberg image/gallery blocks.

#### ⭐ CHECK OUR OTHER PLUGINS
* [Joli FAQ SEO](https://wordpress.org/plugins/joli-faq-seo/)
* [Joli Table Of Contents](https://wordpress.org/plugins/joli-table-of-contents/)

### Why should I choose Joli CLEAR Lightbox over another plugin ?
* It does not rely on jQuery
* It does not load unless it has to.
* It has a very small footprint (only one minified .css file (4Ko) & one minified .js file (8Ko)) 
* Icons are made from pure CSS, there is no extra images loading.
* It does not provide a bunch of heavy unnecessary features.
* It loads after your content.
* It is meant to remain simple yet offering full customization.
* It has been made with love.

**Dependency-free**: No jQuery, only pure JavaScript.

**Performance friendly**: Styles/Scripts DO NOT load if there are no image links within the content.

Joli **CLEAR** Lightbox stands for the following: 

**C**ustomizable

**L**ightweight

**E**legant

**A**ccessible

**R**esponsive.

#### Features

* Display on posts or pages
* Customize media types (jpg, png, gif etc)
* Transparent GIF/PNG support
* Fully responsive with swipe gestures.
* Dark & Light color scheme
* Enable/disable Loop over when the first/last image has been reached
* Enable/disable Esc key to close the lightbox
* Enable/disable Arrow keys navigation
* Enable/disable Close on click-away
* Display/hide counter
* Display/hide caption
* Customizable Vertical/horisontal paddings
* Customizable background color
* Customizable background opacity
* Enable/disable background blue
* Customizable navigation buttons height
* Enable/disable frame border
* Developer-friendly. Hooks provided. (See below for details).

#### Pro Features

[Get Joli CLEAR Lightbox Pro](https://wpjoli.com/joli-clear-lightbox/ "Joli CLEAR Lightbox Pro")

* All of the free features.
* AmbiBackground™: this unique feature makes the background have the same color tone as the current image. It provides a beautiful immersion to the viewer.
* **Custom Post Type** Support.
* **14+ Themes Included**.
* Customizable idle timer.
* Customizable Maximum image height.
* Customizable Maximum image width.
* Customizable Border width.
* Customizable Rounded corners radius.
* Customizable Border opacity.
* Enable/disable Frame shadow.
* Customizable Image rounded corners radius.
* Force **Enable/Disable** Lightbox per post settings.
* Override global theme per post settings.

*Supported post types:*
* Post
* Pages
* Custom Post Type ***(Pro only)***

### Hooks

**How to use ?**

Copy & paste the code examples below into your theme's functions.php file:

#### Filters
* `joli_clear_lightbox_disable_lightbox`

Globally disables Joli CLEAR Lightbox site-wide.

    add_filter('joli_clear_lightbox_disable_lightbox', function(){ return true; });

* `joli_clear_lightbox_options`

Customizes the options programmatically.

    add_filter('joli_clear_lightbox_options', 'my_custom_options_function');


#### Actions
* `joli_clear_lightbox_before_rendering`
Do something before rendering the lightbox



== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress
1. Use the Settings->Plugin Name screen to configure the plugin
1. (Make your instructions match the desired user flow for activating and installing your plugin. Include any steps that might be needed for explanatory purposes)




### INSTALLING FROM THE WORDPRESS ADMIN
1. Go to the “Plugins > Add New” page.
1. Type “Joli CLEAR Lightbox” in the search field
1. Look for the “Joli CLEAR Lightbox” plugin in the search result and click on the “Install Now” button, the installation process of plugin will begin.
1. Click “Activate” when the installation is complete.

### INSTALLING WITH THE ARCHIVE
Go to the page “Plugins > Add New” on the WordPress control panel
Click on the “Upload Plugin” button, the form to upload the archive will be opened.
Select the archive with the plugin and click “Install Now”.
Click on the “Activate Plugin” button when the installation is complete.

### MANUAL INSTALLATION
Upload the folder joli-clear-lightbox to your site's plugin folder, usually it is /wp-content/plugins/.
Go to the page “Plugins > Add New” on the WordPress control panel
Look for “Joli CLEAR Lightbox” in the plugins list and click “Activate”.

### HOW TO DISPLAY THE LIGHTBOX ON MY WEBSITE ?
While editing a post, Make sure images AND galleries are set to LINK TO "Media file".
The lightbox will then automatically appear upon clicking an image.

### WHAT TO DO AFTER ACTIVATION ?

Go to the Settings page under the Menu "Joli CLEAR Lightbox", then configure the following basic options to get started:

*GENERAL > THEME*
1. Choose a color scheme (dark or light)

*GENERAL > BEHAVIOUR*
1. Enable/disable the basic behaviour options.

*APPEARANCE > DISPLAY*
1. Choose whether to show caption/counter or not.
2. Adjust the padding to 0 if you wish to have the image go all the way to the edges of the viewport.

== Frequently Asked Questions ==

= Do I need coding skills to use Joli CLEAR Lightbox ? =

Nope! Joli CLEAR Lightbox works out of the box. You only need to adjust some settings if you wish to customize the way it looks and behaves.

= Joli CLEAR Lightbox does not show up when I click on images, what's wrong ? =

In order to view images in the lightbox, you need to make sur of the following:
Images AND galleries **MUST BE SET** to LINK TO "Media file". Check the documentation within the plugin to find out how to do this.

= Will Joli CLEAR Lightbox slow down my website ? =

No it won't. Turns out Joli CLEAR Lightbox has been designed to be as light as light could be. Not only does it have a very small footprint (only one minified .css file & one minified .js file), but it also does not need jQuery and does not load unless there are image links on your page. Also, all icons are made from CSS and that's even less ressources to load on your pages unlike other plugins!

= Is Joli CLEAR Lightbox responsive ? =

Yes! it is fully responsive and works with swipe gestures:
- Swipe right or left for next/previous picture.
- Swipe up or down to exit the lightbox.

= Does Joli CLEAR Lightbox work with other gallery plugins ? =

It does. Although, the plugin you are using must provide a way to deactivate the built-in lightbox or it may create conflicts.
For example, it works with NextGEN Gallery (but you have to deactivate their built-in lightbox from their options panel).

== Screenshots ==

1. General settings
2. Appearance settings
3. Styles settings
4. Dark scheme - No Padding
5. Dark scheme - No Padding (Mobile)
6. Dark scheme - Padding 50px - Border enabled
7. Dark scheme - Padding 50px - Border enabled (Mobile)
8. Swipe gesture to close (Mobile)
9. Light scheme - Padding 50px
10. Light scheme - Padding 50px (Mobile)
11. Dark scheme - 50% Transparent background - Padding 50px - Border enabled
12. Light scheme - 50% Transparent background - Padding 50px - Border enabled (Mobile)
13. Light scheme - Transparent background - Padding 50px - Border enabled

== Changelog ==

= 1.0.3 =
* WordPress 5.9.2 compatibility
* Security fix

= 1.0.2 =
* Added background scroll lock
* Added image width/height in the attributes.

= 1.0.1 =
* Improved admin scripts/styles
* Refreshed settings panel

= 1.0.0 =
* Initial release.

== Upgrade Notice ==

