<?php

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

$mergeArrayObject = new ArrayObject($params);
$result = $mergeArrayObject->exchangeArray($props);

foreach($mergeArrayObject as $key=>$value) {
    if ( array_key_exists($key,$result)) {
        $mergeArrayObject=array_intersect_key($props, $result);
    }
}

print_r($mergeArrayObject);
