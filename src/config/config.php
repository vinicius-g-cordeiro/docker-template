<?php
/**
 * @file config.php 
 * @package vinicius-g-cordeiro/docker-template
 * @version 0.0.1
 * @copyright 2025 Vinícius Gonçalves Cordeiro <vinicordeirogo@gmail.com>
 * @link https://github.com/vinicius-g-cordeiro/docker-template
 * @link https://linkedin.com/in/vinicordeirox
 */

/** Get the .env variables from the .env file */
namespace Config;

class DotEnvLoader
{

    /**
     * Loads the .env file from the given path.
     * 
     * The .env file is expected to have the format:
     * 
     * KEY=VALUE
     * 
     * Where KEY is the name of the environment variable and 
     * VALUE is the value of the environment variable.
     * 
     * This function loads the .env file and sets the environment variables
     * using putenv() and sets the $_ENV and $_SERVER variables.
     * 
     * @param string $path The path to the .env file
     * 
     * @example use:
     * $loader = new DotEnvLoader();
     * $loader->load('/path/to/.env');
     * 
     * echo getenv('KEY'); or echo $_ENV['KEY'];
     * 
     */
   public function load($path): void
   {
      $newPath = realpath(__DIR__ . '/../' . $path);
      $files = glob($newPath);
      if(empty($files)){
         dd('File not found');
         return;
      }
      $lines = file($files[0]);
      // // Load the .env file
      // $lines = file($path);
      foreach ($lines as $line) {
         $line = trim($line);
         if (strpos($line, '#') === 0 || $line === '') {
            continue;
         }
         $parts = explode('=', $line, 2);
         $key = trim($parts[0]);
         $value = trim($parts[1]);
         putenv("$key=$value");
         $_ENV[$key] = $value;         
      }
   }
}