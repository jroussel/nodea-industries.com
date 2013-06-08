<?php

$locale_default = 'en';
if (!empty($_SERVER['HTTP_ACCEPT_LANGUAGE']) && 0 === strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'], 'fr')) {
	$locale_default = 'fr';
}

$locale = !empty($_REQUEST['locale'])?$_REQUEST['locale']:$locale_default;
$template = !empty($_REQUEST['template'])?$_REQUEST['template']:'index';
$layout = 'default';

try {
	$root = dirname(__FILE__) . '/..';

	$layout_path = sprintf('%s/layout/%s.%s.html.php', $root, $layout, $locale);
	if (!is_file($layout_path)) {
		throw new Exception('Layout not found');
	}

	$template_path = sprintf('%s/templates/%s/%s.html.php', $root, $locale, $template);
	if (!is_file($template_path)) {
		throw new Exception('Page not found');
	}

	ob_start();
	include $template_path;
	$contents = ob_get_contents();
	ob_end_clean();

	include $layout_path;
} catch (Exception $e) {
	include '404.html';
}
