<?
require "autoload.php";

// FOR livereload
if(ART_ENV === "development" )
  add_filter("redirect_canonical", function(){return false;});

do_action("template_redirect");//FOR JSON_REST_API;


Remover::run();
Loader::run();