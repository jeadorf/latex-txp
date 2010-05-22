<?php
include_once('src/plugin_util.php');

$plugin['name'] = 'jea_latex_txp';
$plugin['version'] = '0.1.1.dev';
$plugin['author'] = 'Julius Adorf';
$plugin['author_uri'] = 'http://www.juliusadorf.com';
$plugin['description'] = 'Lets you embed math formulae and other Latex-rendered output in textpattern articles.';
$plugin['help'] = file_get_contents('README.html');
$plugin['code'] = extract_code('src/jea_latex_txp.php');
$plugin['md5'] = md5($plugin['code']);

// Plugin types:
// 0 = regular plugin; loaded on the public web side only
// 1 = admin plugin; loaded on both the public and admin side
// 2 = library; loaded only when include_plugin() or require_plugin() is called
$plugin['type'] = 1;
$plugin['flags'] = 0;
?>
