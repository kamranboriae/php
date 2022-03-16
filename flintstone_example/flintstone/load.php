<?php
/**
 * Created by PhpStorm.
 * User: mavarae_bourse
 * Date: 2022-03-05
 * Time: 20:44
 */

$flintstone_files = array(

    'Config.php',
    'Database.php',
    'Exception.php',
    'Flintstone.php',
    'Line.php',
    'Validation.php',
    'Cache\CacheInterface.php',
    'Cache\CacheInterface.php',
    'Cache\ArrayCache.php',
    'Formatter\FormatterInterface.php',
    'Formatter\JsonFormatter.php',
    'Formatter\SerializeFormatter.php'

);

$flintstone_dir = __DIR__.'/';

foreach ($flintstone_files as $flintstone_file){

    require_once $flintstone_dir . $flintstone_file;

}