<?php
$params = [
    'parameters' => [
        'my_mailer.gateways' => 'mail1'],
];
$props = [
    'parameters' => [
        'my_mailer.gateways' => 'mail2',
        'extra' => 'value'
],
    'extra' => 'value'];

$result = [$params,$props];


$iterator = new RecursiveArrayIterator($result);
$tree = new RecursiveTreeIterator($iterator);

foreach( $tree as $key => $value ){
    echo $key, $value . PHP_EOL;
}
