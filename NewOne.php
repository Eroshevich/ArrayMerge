
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
            foreach ($props as $key => $value) {
                if (array_key_exists($key, $iterator)){
                $iterator[$key] = $props[$key];
                }
                if ($iterator[$key] == $props[$key]){
                $iterator[$key] = $value;
                    print_r ($iterator);
                }
            }
        }
    $iterator->next();
    }
}
