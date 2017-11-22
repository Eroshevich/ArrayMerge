
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
iterator_apply($iterator, 'traverseStructure', array($iterator));

function traverseStructure($iterator) {
   
    while ( $iterator->valid() ) {

        if ( $iterator->hasChildren() ) {
       
            traverseStructure($iterator->getChildren());
        }
        $iterator -> next();
    }
} 
    $new = [$iterator];
    
    foreach ($new as $key => $value){
        foreach ($props as $key2 => $value2){
            if (array_key_exists($key, $new)){
                $new[$key] = $props[$key2];
            }
            if ($new[$key] = $props[$key2]){
                $new[$key] = $value2;
            }
            print_r ($new);
            break;
            }
        }
