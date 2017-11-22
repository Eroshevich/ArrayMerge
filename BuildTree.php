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

$arrayIterator = new RecursiveArrayIterator($result);
$iterator = new RecursiveIteratorIterator($arrayIterator);

for($iterator; $iterator->valid(); $iterator->next()){
    foreach ($iterator as $key => $value) {
      $depth = $iterator->getDepth();
      print_r ("depth=$depth k=$key v=$value\n");
    }
}
