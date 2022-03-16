<?php
/**
 * Created by PhpStorm.
 * User: mavarae_bourse
 * Date: 2022-03-05
 * Time: 20:33
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

$users->set(1,array('username'=>'admin', 'password'=>'admin'));
$users->set(2,array('username'=>'kamran', 'password'=>'12548'));
$users->set(3,array('username'=>'jamshid', 'password'=>'52148'));


