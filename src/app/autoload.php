<?
spl_autoload_register(function($class){

  $to_lowercase=  function($str){
    $str = preg_replace('/([A-Z])/', '_$1', $str);
    $str = strtolower($str);
    $str = str_replace('\\_', '/', $str);
    $str = ltrim($str, '_');
    return $str;  
  };

  $str= $to_lowercase($class);
  $filepath= __DIR__ . "/{$str}.php";
  if(is_readable($filepath)) require $filepath;
});
