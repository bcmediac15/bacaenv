<?php
$env = file_get_contents(__DIR__."/.env");
$lines = explode("\n",str_replace(' ', '', $env));

foreach($lines as $line){
  preg_match("/([^#]+)\=(.*)/",$line,$matches);
  if(isset($matches[2])){ 
      list($name, $value) = explode('=', $line, 2);
      define("$name","$value");
  }
} 

echo "Nama DBHost: " . DBHOST ;
