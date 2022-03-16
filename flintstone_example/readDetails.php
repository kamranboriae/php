<?php
/**
 * Created by PhpStorm.
 * User: mavarae_bourse
 * Date: 2022-03-06
 * Time: 13:32
 */


include_once 'flintstone\load.php';

use Flintstone\Flintstone;
use Flintstone\Formatter\JsonFormatter;

$options = array(

    'dir' => __DIR__,
    'ext' => '.db',
    'gzip' => false,
    'cache' => true,
    'formatter' => new JsonFormatter()

);

$users = new Flintstone('user', $options);

echo '<pre>';

print_r($users->get(1));
print_r($users->getAll());
print_r($users->getKeys());


echo '</pre>';