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

$result = [];

foreach ($params as $key => &$value) {
    foreach ($props as $key2 => &$value2) {
        if($key == $key2){
            $result = $value2;
       } else {
          unset($key2); 
        }
    }
}
print_r($result);

