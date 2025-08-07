<?php
/**
 * @file index.php 
 * Application entrypoint file for the Docker template 
 * @package vinicius-g-cordeiro/docker-template
 * @version 0.0.1
 * @copyright 2025 Vinícius Gonçalves Cordeiro <vinicordeirogo@gmail.com>
 * @link https://github.com/vinicius-g-cordeiro/docker-template
 * @link https://linkedin.com/in/vinicordeirox 
 */

include "../libs/autoload.php";

use Config\DotEnvLoader;

$envload = new DotEnvLoader();
$envload->load('../');
if(getenv("APP_DEBUG") == "true"){
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    // set all error as exception 
    set_error_handler(function ($severity, $message, $file, $line) {
        throw new ErrorException($message, $severity, $severity, $file, $line);
    });
}else{
    error_reporting(0);
    ini_set('display_errors', 0);
}

try{
    
echo "<!DOCTYPE html>
        <html>
            <head>
                <title>Docker Template</title>
            </head>
            <body>
                <h1>Welcome to Docker Template</h1>
                <footer>
                    <p>&copy; Copyright, All rights reserved  (2025 Vinícius Gonçalves Cordeiro)</p>
                </footer>
            </body>
        </html>";
}catch(Exception $e){
    dd($e);
}finally{
    exit(0);
}
