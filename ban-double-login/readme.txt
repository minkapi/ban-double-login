=== Ban Double Login ===
Contributors: minkapi
Tags: double-login, member-sites, login
Requires at least: 4.9
Tested up to: 5.5.3
Stable tag: 1.2
Requires PHP: 7.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin forbids double login.


== Description ==

This plugin forbids double login.
If you attempt double login with the same account while logging in using one account, it overrides the new session and clears the existing session.
It is suitable for member sites because it can prevent one account from being used by a large number of people.


== Installation ==

1. Upload `ban-double-login` to the `/wp-content/plugins/` directory.
2. Activate `Ban Double Login` through the 'Plugins' menu in WordPress.


== Changelog ==
= 1.2 =
* Support 5.5.3
= 1.1 =
* Support 5.1.1
= 1.0 =
* Publish this plugin
