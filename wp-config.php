/* WordPress Cache */
define( 'WP_CACHE', true );

/* Multisite */
define( 'WP_ALLOW_MULTISITE', false );

/* Auto Update WP Core */
define( ‘WP_AUTO_UPDATE_CORE’, true );

/* MySQL database table prefix */
$table_prefix = 'wp_';

/* MySQL settings */
define( 'DB_NAME',     'database_name_here' );
define( 'DB_USER',     'username_here' );
define( 'DB_PASSWORD', 'password_here' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );

/* SSL */
define( 'FORCE_SSL_LOGIN', true );
define( 'FORCE_SSL_ADMIN', true );

/* Disallow File Changes
define( 'DISALLOW_FILE_EDIT', true ); //disables file editor
define( 'DISALLOW_FILE_MODS', true ); //disables both file editor and installer

/* Debug */
define( 'WP_DEBUG', false );



/* Compression */
define( 'COMPRESS_CSS',        true );
define( 'COMPRESS_SCRIPTS',    true );
define( 'CONCATENATE_SCRIPTS', true );
define( 'ENFORCE_GZIP',        true );

/* CRON */
define( 'DISABLE_WP_CRON',      'true' );
define( 'ALTERNATE_WP_CRON',    'false' );

/* Specify maximum number of Revisions */
define( 'WP_POST_REVISIONS', '5' );

/* Media Trash */
define( 'MEDIA_TRASH', true );

/* Absolute path to the WordPress directory */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Sets up WordPress vars and included files */
require_once(ABSPATH . 'wp-settings.php');
