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

 function merge($params, $props) {
     $result = [];
    foreach ($params as $key => $value) {
        if(array_key_exists($key, $props)){
            $params[$key] = $props[$key];
       }
       if ($props){
           $result[$key] = $value;
       }else {
           return NULL;
       }
  }
}
merge($params,$props);
