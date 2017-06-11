<?php

kirby()->hook('panel.page.create', function ($page) {
	$templates = c::get('ka.autopublish.templates');
	if (!$templates || in_array($page->intendedTemplate(), $templates)) {
		try {
			$page->sort('last');
		} catch (Exception $e) {
			return response::error($e->getMessage());
		}
	}
});
