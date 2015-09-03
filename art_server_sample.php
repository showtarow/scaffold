<?
define('ART_PATH', __DIR__);
define('ART_ENV', "development");

if(ART_ENV == "development"){
  define('DB_NAME', 'site_development');
  define('DB_USER', 'root');
  define('DB_PASSWORD', '');
  define('DB_HOST', 'localhost');
  define('DB_CHARSET', 'utf8');
  define('DB_COLLATE', '');

  define('WP_SITEURL', 'http://showtarow.local:3030');
  define('WP_HOME',    'http://showtarow.local:3000');
  define('WP_CONTENT_DIR', __DIR__ . '/public/wp-content');
  define('WP_CONTENT_URL', 'http://showtarow.local:3000/wp-content');
  $table_prefix  = 'wp_';
}

define('WP_DEBUG', false);
