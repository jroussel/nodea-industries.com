<?php

$email = 'contact@nodea-industries.com';

$email_mailto = '';
for ($i=0; $i < strlen($email); $i++) { 
	$email_mailto .= sprintf('%%%s', strtoupper(dechex(ord($email[$i]))));
}
$email_safe = preg_replace('/^([^@]+)@([^\.]+)\.(.+)$/i', '${1} (at) ${2} (point) ${3}', $email);

$locale_default = 'en';
if (!empty($_SERVER['HTTP_ACCEPT_LANGUAGE']) && 0 === strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'], 'fr')) {
	$locale_default = 'fr';
}

$locale = !empty($_REQUEST['locale'])?$_REQUEST['locale']:$locale_default;
$template = !empty($_REQUEST['template'])?$_REQUEST['template']:'index';

$root = dirname(__FILE__) . '/..';

$template_path = sprintf('%s/templates/%s/%s.html.php', $root, $locale, $template);
if (!is_file($template_path)) {
	header('HTTP/1.0 404 Not Found');
	$template_path = sprintf('%s/templates/%s/404.html.php', $root, $locale);
}

ob_start();
include $template_path;
$contents = ob_get_contents();
ob_end_clean();

include sprintf('%s/layout/default.html.php', $root);
