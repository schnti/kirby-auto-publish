# Kirby Auto Publish

This plugin extends [Kirby 2.1](http://getkirby.com) with the possibility to auto publish pages that are created with the Admin Panel.

By default, new pages are invisible on creation. This plugin allows you to make all new pages or certain types of pages visible by default.

## Installation

Copy the `site/plugins/autopublish` directory to your `site/plugins/` directory.

## Usage

If you include the plugin without configuration all new pages created in the Admin Panel will be visible by default.

If you want to limit the auto publishing to certain types (templates) of pages, you can define those by configuring the `autopublish.templates` option to the array of page templates you want to make visible by default.

i.e. if you wish to make all pages using the "project" and "item" template visible by default, add the following line to your `site/config/config.php` file :

```
c::set('autopublish.templates', array('project', 'item'));
```

