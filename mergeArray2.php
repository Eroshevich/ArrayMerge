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
    
$result = array_intersect_key(array_replace_recursive($params, $props), $params);

$iterator = new RecursiveArrayIterator($result);

while ($iterator->valid()) {

    if ($iterator->hasChildren()) {
        foreach ($iterator->getChildren() as $key => $value) {
            echo $key . ' : ' . $value . "\n";
        }
    }

    $iterator->next();
}
