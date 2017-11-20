<?php

const GRAFIC_TREE_CHILD_SEPARATOR = '___';
$params = [
    'parameters' => [
        'my_mailer.gateways' => 'mail1']
];
$props = [
    'parameters' => [
        'my_mailer.gateways' => 'mail2',
        'extra' => 'value'
    ],
    'extra' => 'value'];

$result = array_merge($params, $props);

function showDirectoryContents($result, $indent, $break)
{
    $items = scandir($result);
    foreach ($items as $item) {
        if ($item == '.' || $item == '..')
            continue;
        echo $indent.$item.$break;
        $path = $result.DIRECTORY_SEPARATOR.$item;
        if (is_dir($path) && is_readable($path) && !is_link($item)) {
            showDirectoryContents($path, str_replace(GRAFIC_TREE_CHILD_SEPARATOR, '   ', $indent).'|'.GRAFIC_TREE_CHILD_SEPARATOR, $break);
        }
    }
}
if (php_sapi_name()=='cli') {
    showDirectoryContents('.', '', "\n");
}
else {
    showDirectoryContents('.', '', "<br/>");
}
