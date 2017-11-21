
<?php
$params = [
    'parameters' => [
        'my_mailer.gateways' => 'mail1'
    ],
    'test-key' => 'test-value'
];
$props = [
    'parameters' => [
        'my_mailer.gateways' => 'mail2',
        'extra' => 'value'
    ],
    'extra' => 'value'];
    $result = [$params];
    $iterator = new RecursiveArrayIterator($result);
          
while ($iterator->valid()) {
    if ($iterator->hasChildren()) {
        foreach ($iterator->getChildren() as $key => $value) {
            foreach ($props as $key2 => $value2) {
                if (array_key_exists($key, $iterator)){
                $iterator[$key] = $props[$key2];
                }
                if ($props){
                    $iterator[$key] = $value2;
                    var_dump (iterator_to_array($iterator,true));
                }
            }
        }
    $iterator->next();
    }
}
