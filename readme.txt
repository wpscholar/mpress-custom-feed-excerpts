=== mPress Custom Feed Excerpts ===
Contributors: woodent
Donate link: https://www.paypal.me/wpscholar
Tags: feed, feeds, feed excerpt, WordPress feed excerpt, excerpt, excerpts, custom feed, rss, atom
Requires at least: 3.2
Tested up to: 4.5.2
Stable tag: 1.0
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Customize your feed excerpts by simply using the &lt;!--more--&gt; tag in posts.

== Description ==

The **mPress Custom Feed Excerpts** plugin allows to you customize your WordPress feed excerpts by simply using the &lt;!-- more --&gt; tag in WordPress.

= Why? =

Everyone who uses feeds in WordPress wants to be able to control what shows up for their readers.  There is a fine line between an excerpt that is too short to capture interest and a full post that never brings your readers to your actual website. At the same time, WordPress strips out all the HTML on feed excerpts and none on full posts.  Now, you can customize the feed excerpt on a post-by-post basis and maintain the HTML as seen by visitors on your site.

= How? =

Using this plugin is simple:

1. Install the plugin
2. Activate the plugin
3. Go to 'Reading' under 'Settings' in the WordPress admin menu and make sure you are using the 'Full text' option for your feeds.
4. Save your changes
5. In your posts, just use the &lt;!-- more --&gt; tag where you want to cut off the post in your feed.

= Features =

* Works with custom post types
* No settings page, just adds an easy way for you to customize your feed excerpts
* Clean, well written code that won't bog down your site

== Installation ==

= Prerequisites =
If you don't meet the below requirements, I highly recommend you upgrade your WordPress install or move to a web host
that supports a more recent version of PHP.

* Requires WordPress version 3.2 or greater
* Requires PHP version 5 or greater ( PHP version 5.2.4 is required to run WordPress version 3.2 )

= The Easy Way =

1. In your WordPress admin, go to 'Plugins' and then click on 'Add New'.
2. In the search box, type in 'mPress Custom Feed Excerpts' and hit enter.  This plugin should be the first and likely the only result.
3. Click on the 'Install' link.
4. Once installed, click the 'Activate this plugin' link.

= The Hard Way =

1. Download the .zip file containing the plugin.
2. Upload the file into your `/wp-content/plugins/` directory and unzip
3. Find the plugin in the WordPress admin on the 'Plugins' page and click 'Activate'

= Usage Instructions =

Once the plugin is installed and activated, go to 'Reading', which is under 'Settings' in the WordPress admin menu.  Make sure you are using the 'Full text' option for your WordPress feeds. Now, just use the &lt;!--more--&gt; tag in any post to create the cut-off point for the feed excerpt!

NOTE: To customize the link text, just add your text to the more tag, like this: &lt;!--more My custom text...--&gt;

== Changelog ==

= 1.0 =

* Tested in WordPress version 4.5.2

= 0.3 =

* Added the ability customize the link text.

= 0.2 =

* Added a continue reading link

= 0.1 =

* Initial commit

== Upgrade Notice ==

= 1.0 =

* Plugin updated to reflect that it works with WordPress version 4.5.2