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

$result = array_merge($params, $props);

class Formatter extends RecursiveIteratorIterator
{
    public function current()
    {
        $current = parent::current();
        switch($this->key()) {
            case 'my_mailer.gateways':
                $current = strtolower($current);
                break;
            case 'extra':
                $current = ucwords($current);
                break;
            default:
                break;
        }
        return $current;
    }
}

$it = new Formatter(new RecursiveArrayIterator($result));
foreach($it as $key => $value) {
    echo "$key: $value/1", PHP_EOL;
}
