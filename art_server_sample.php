<?
define('ART_PATH', __DIR__);
define('ART_ENV', "development");

if(ART_ENV == "development"){
  define('DB_NAME', '**ENTER DB NAME**');
  define('DB_USER', '**ENTER DB USER **');
  define('DB_PASSWORD', '**ENTER DB PASSWORD**');
  define('DB_HOST', 'localhost');
  define('DB_CHARSET', 'utf8');
  define('DB_COLLATE', '');
  
  define('WP_SITEURL', '**ENTER YOUR WP INSTALLED URL**');
  define('WP_HOME',    '**ENTER YOUR SITE URL**');
  define('WP_CONTENT_DIR', __DIR__ . '/public/wp-content');
  define('WP_CONTENT_URL', WP_HOME. '/wp-content');
  $table_prefix  = 'wp_';
}

define('WP_DEBUG', false);
