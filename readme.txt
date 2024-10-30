=== Chrono Cloud ===
Contributors: mortenf
Donate link: http://www.mfd-consult.dk/paypal/
Tags: widget, sidebar, cloud, archives, monthly
Requires at least: 2.3
Tested up to: 3.8.3
Stable tag: trunk

A function providing a tag cloud like view of monthly archives.

== Description ==

With Chrono Cloud you will be able to add a third cloud to your archives page: A cloud based on time.

Just as categories can be viewed as a tag cloud through the use if the `taxonomy=category` argument to
the `wp_tag_cloud` function, this plugin provides a similar functionality, displaying each month with posts as
a tag in a cloud.

Example usage in e.g. `archives.php`:

`<?php chrono_cloud_echo(); ?>`

== Installation ==

1. Download Plugin .zip-file.
1. Unzip and upload to the plugin directory, usually at `wp-content/plugins/`.
1. Activate the plugin from the WordPress "Plugin" administration screen.
1. Add a line like `<?php chrono_cloud_echo(); ?>` somewhere in your theme files, preferably in the `archives.php` file.

== Screenshots ==

1. Example (with builtin Danish localisation)

== Frequently Asked Questions ==

None so far, but please do leave a comment in the forum or on the plugin's homepage:
[www.mfd-consult.dk/chrono-cloud](http://www.mfd-consult.dk/chrono-cloud/)

== Changelog ==

= 1.1 =
* Fix for revised output from wp_get_archives.

= 1.0 =
* Initial release.

== License ==

Copyright (c) 2009-2014 Morten Høybye Frederiksen <morten@mfd-consult.dk>

Permission to use, copy, modify, and distribute this software for any
purpose with or without fee is hereby granted, provided that the above
copyright notice and this permission notice appear in all copies.

THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES
WITH REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF
MERCHANTABILITY AND FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR
ANY SPECIAL, DIRECT, INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES
WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS, WHETHER IN AN
ACTION OF CONTRACT, NEGLIGENCE OR OTHER TORTIOUS ACTION, ARISING OUT OF
OR IN CONNECTION WITH THE USE OR PERFORMANCE OF THIS SOFTWARE.
