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
$result = array_merge($params, $props);

foreach($result as $key=>$value) {
    if ( array_key_exists($key,$params)) {
        $result=array_intersect_key($props, $params);
        $params[ $props[$key] ] = $value;
    }
}
print_r($result);
