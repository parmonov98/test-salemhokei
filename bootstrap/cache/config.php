<?php return array (
  'app' => 
  array (
    'name' => 'Salem_hokei',
    'env' => 'local',
    'debug' => true,
    'url' => 'http://test.salemhokei.loc/',
    'asset_url' => NULL,
    'timezone' => 'UTC',
    'locale' => 'ru',
    'fallback_locale' => 'ru',
    'faker_locale' => 'en_US',
    'key' => 'base64:jRi0mJiIAg0QH237rSYp286yVAoSOxGpErhnhr8fvDM=',
    'cipher' => 'AES-256-CBC',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'App\\Providers\\AppServiceProvider',
      23 => 'App\\Providers\\AuthServiceProvider',
      24 => 'App\\Providers\\EventServiceProvider',
      25 => 'App\\Providers\\RouteServiceProvider',
      26 => 'App\\Providers\\ComposerServiceProvider',
      27 => 'Intervention\\Image\\ImageServiceProvider',
      28 => 'Barryvdh\\LaravelIdeHelper\\IdeHelperServiceProvider',
      29 => 'NotificationChannels\\SmscRu\\SmscRuServiceProvider',
      30 => 'Collective\\Html\\HtmlServiceProvider',
      31 => 'Lavary\\Menu\\ServiceProvider',
      32 => 'Harimayco\\Menu\\MenuServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'AppMenu' => 'Lavary\\Menu\\Facade',
      'AdminMenu' => 'Harimayco\\Menu\\Facades\\Menu',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'token',
        'provider' => 'users',
        'hash' => false,
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
      ),
    ),
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
        array (
          'cluster' => 'mt1',
          'useTLS' => true,
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => '/home/dev/www/test.salemhokei.loc/storage/framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
    ),
    'prefix' => 'salem_hokei_cache',
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => 'salemhok_db',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'salemhok_db',
        'username' => 'root',
        'password' => '19981965aBc',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => false,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'salemhok_db',
        'username' => 'root',
        'password' => '19981965aBc',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'salemhok_db',
        'username' => 'root',
        'password' => '19981965aBc',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'predis',
      'options' => 
      array (
        'cluster' => 'predis',
        'prefix' => 'salem_hokei_database_',
      ),
      'default' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 0,
      ),
      'cache' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 1,
      ),
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => '/home/dev/www/test.salemhokei.loc/storage/app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => '/home/dev/www/test.salemhokei.loc/storage/app/public',
        'url' => 'http://test.salemhokei.loc//storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'bucket' => '',
        'url' => NULL,
      ),
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 1024,
      'threads' => 2,
      'time' => 2,
    ),
  ),
  'laravel-menu' => 
  array (
    'settings' => 
    array (
      'default' => 
      array (
        'auto_activate' => true,
        'activate_parents' => true,
        'active_class' => 'active',
        'restful' => false,
        'cascade_data' => true,
        'rest_base' => '',
        'active_element' => 'item',
        'data_toggle_attribute' => 'data-toggle',
      ),
    ),
    'views' => 
    array (
      'bootstrap-items' => 'laravel-menu::bootstrap-navbar-items2',
    ),
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'daily',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => '/home/dev/www/test.salemhokei.loc/storage/logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => '/home/dev/www/test.salemhokei.loc/storage/logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
    ),
  ),
  'mail' => 
  array (
    'driver' => 'smtp',
    'host' => 'srv-plesk45.ps.kz',
    'port' => '465',
    'from' => 
    array (
      'address' => 'devpageuz@gmail.com',
      'name' => 'Example',
    ),
    'encryption' => 'ssl',
    'username' => 'info@salemhokei.kz',
    'password' => 'SalemHokei2021!!',
    'sendmail' => '/usr/sbin/sendmail -bs',
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => '/home/dev/www/test.salemhokei.loc/resources/views/vendor/mail',
      ),
    ),
    'log_channel' => NULL,
  ),
  'maileclipse' => 
  array (
    'path' => 'maileclipse',
    'mailables_dir' => '/home/dev/www/test.salemhokei.loc/app/Mail/',
    'factory' => true,
    'relation_depth' => 2,
    'allowed_environments' => 
    array (
      0 => 'local',
      1 => 'staging',
      2 => 'testing',
    ),
    'middlewares' => 
    array (
      0 => 'web',
    ),
    'skeletons' => 
    array (
      'html' => 
      array (
        'airmail' => 
        array (
          0 => 'confirm',
          1 => 'invite',
          2 => 'invoice',
          3 => 'ping',
          4 => 'progress',
          5 => 'reignite',
          6 => 'survey',
          7 => 'upsell',
          8 => 'welcome',
        ),
        'cerberus' => 
        array (
          0 => 'fluid',
          1 => 'hybrid',
          2 => 'responsive',
        ),
        'cleave' => 
        array (
          0 => 'confirm',
          1 => 'invite',
          2 => 'invoice',
          3 => 'ping',
          4 => 'progress',
          5 => 'reignite',
          6 => 'survey',
          7 => 'upsell',
          8 => 'welcome',
        ),
        'go' => 
        array (
          0 => 'confirm',
          1 => 'invite',
          2 => 'invoice',
          3 => 'ping',
          4 => 'progress',
          5 => 'reignite',
          6 => 'survey',
          7 => 'upsell',
          8 => 'welcome',
        ),
        'goldstar' => 
        array (
          0 => 'birthday',
          1 => 'confirm',
          2 => 'invite',
          3 => 'invoice',
          4 => 'progress',
          5 => 'reignite',
          6 => 'survey',
          7 => 'update',
          8 => 'welcome',
        ),
        'mantra' => 
        array (
          0 => 'activation',
          1 => 'birthday',
          2 => 'coupon',
          3 => 'progress',
          4 => 'rating',
          5 => 'receipt',
          6 => 'shipped',
          7 => 'update',
          8 => 'welcome',
        ),
        'meow' => 
        array (
          0 => 'confirmation',
          1 => 'coupon',
          2 => 'digest-left',
          3 => 'digest-right',
          4 => 'progress',
          5 => 'receipt',
          6 => 'survey',
          7 => 'two-column',
          8 => 'welcome',
        ),
        'narrative' => 
        array (
          0 => 'confirm',
          1 => 'invite',
          2 => 'invoice',
          3 => 'ping',
          4 => 'progress',
          5 => 'reignite',
          6 => 'survey',
          7 => 'upsell',
          8 => 'welcome',
        ),
        'neopolitan' => 
        array (
          0 => 'confirm',
          1 => 'invite',
          2 => 'invoice',
          3 => 'ping',
          4 => 'progress',
          5 => 'reignite',
          6 => 'survey',
          7 => 'upsell',
          8 => 'welcome',
        ),
        'oxygen' => 
        array (
          0 => 'confirm',
          1 => 'invite',
          2 => 'invoice',
          3 => 'ping',
          4 => 'progress',
          5 => 'reignite',
          6 => 'survey',
          7 => 'upsell',
          8 => 'welcome',
        ),
        'plain' => 
        array (
          0 => 'plain',
        ),
        'skyline' => 
        array (
          0 => 'confirm',
          1 => 'invite',
          2 => 'invoice',
          3 => 'ping',
          4 => 'progress',
          5 => 'reignite',
          6 => 'survey',
          7 => 'upsell',
          8 => 'welcome',
        ),
        'sunday' => 
        array (
          0 => 'confirm',
          1 => 'invite',
          2 => 'invoice',
          3 => 'ping',
          4 => 'progress',
          5 => 'reignite',
          6 => 'survey',
          7 => 'upsell',
          8 => 'welcome',
        ),
        'zenflat' => 
        array (
          0 => 'confirm',
          1 => 'invite',
          2 => 'invoice',
          3 => 'ping',
          4 => 'progress',
          5 => 'reignite',
          6 => 'survey',
          7 => 'upsell',
          8 => 'welcome',
        ),
      ),
      'markdown' => 
      array (
        'postmark' => 
        array (
          0 => 'blank',
          1 => 'comment-notification',
          2 => 'invoice',
          3 => 'receipt',
          4 => 'reset-password',
          5 => 'reset-password-help',
          6 => 'trial-expired',
          7 => 'trial-expiring',
          8 => 'user-invitation',
          9 => 'welcome',
        ),
      ),
    ),
  ),
  'menu' => 
  array (
    'middleware' => 
    array (
    ),
    'table_prefix' => 'admin_',
    'table_name_menus' => 'menus',
    'table_name_items' => 'menu_items',
    'route_path' => '/harimayco',
    'use_roles' => false,
    'roles_table' => 'roles',
    'roles_pk' => 'id',
    'roles_title_field' => 'name',
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => '',
        'secret' => '',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
      ),
    ),
    'failed' => 
    array (
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
    ),
    'postmark' => 
    array (
      'token' => NULL,
    ),
    'ses' => 
    array (
      'key' => '',
      'secret' => '',
      'region' => 'us-east-1',
    ),
    'sparkpost' => 
    array (
      'secret' => NULL,
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => '/home/dev/www/test.salemhokei.loc/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'salem_hokei_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => false,
    'http_only' => true,
    'same_site' => NULL,
  ),
  'shinobi' => 
  array (
    'cache' => 
    array (
      'enabled' => false,
      'length' => 86400,
      'tag' => 'shinobi',
    ),
    'models' => 
    array (
      'role' => 'Caffeinated\\Shinobi\\Models\\Role',
      'permission' => 'Caffeinated\\Shinobi\\Models\\Permission',
    ),
    'tables' => 
    array (
      'roles' => 'roles',
      'permissions' => 'permissions',
      'role_user' => 'role_user',
      'permission_role' => 'permission_role',
      'permission_user' => 'permission_user',
    ),
    'migrate' => true,
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => '/home/dev/www/test.salemhokei.loc/resources/views',
    ),
    'compiled' => '/home/dev/www/test.salemhokei.loc/storage/framework/views',
  ),
  'debugbar' => 
  array (
    'enabled' => NULL,
    'except' => 
    array (
      0 => 'telescope*',
    ),
    'storage' => 
    array (
      'enabled' => true,
      'driver' => 'file',
      'path' => '/home/dev/www/test.salemhokei.loc/storage/debugbar',
      'connection' => NULL,
      'provider' => '',
    ),
    'include_vendors' => true,
    'capture_ajax' => true,
    'add_ajax_timing' => false,
    'error_handler' => false,
    'clockwork' => false,
    'collectors' => 
    array (
      'phpinfo' => true,
      'messages' => true,
      'time' => true,
      'memory' => true,
      'exceptions' => true,
      'log' => true,
      'db' => true,
      'views' => true,
      'route' => true,
      'auth' => false,
      'gate' => true,
      'session' => true,
      'symfony_request' => true,
      'mail' => true,
      'laravel' => false,
      'events' => false,
      'default_request' => false,
      'logs' => false,
      'files' => false,
      'config' => false,
      'cache' => false,
      'models' => false,
    ),
    'options' => 
    array (
      'auth' => 
      array (
        'show_name' => true,
      ),
      'db' => 
      array (
        'with_params' => true,
        'backtrace' => true,
        'timeline' => false,
        'explain' => 
        array (
          'enabled' => false,
          'types' => 
          array (
            0 => 'SELECT',
          ),
        ),
        'hints' => true,
      ),
      'mail' => 
      array (
        'full_log' => false,
      ),
      'views' => 
      array (
        'data' => false,
      ),
      'route' => 
      array (
        'label' => true,
      ),
      'logs' => 
      array (
        'file' => NULL,
      ),
      'cache' => 
      array (
        'values' => true,
      ),
    ),
    'inject' => true,
    'route_prefix' => '_debugbar',
    'route_domain' => NULL,
  ),
  'debug-server' => 
  array (
    'host' => 'tcp://127.0.0.1:9912',
  ),
  'image' => 
  array (
    'driver' => 'gd',
  ),
  'generators' => 
  array (
    'config' => 
    array (
      'migration_template_path' => '/home/dev/www/test.salemhokei.loc/vendor/kitloong/laravel-migrations-generator/src/Way/Generators/templates/migration.txt',
      'migration_target_path' => '/home/dev/www/test.salemhokei.loc/database/migrations',
    ),
  ),
  'iseed::config' => 
  array (
    'path' => '/database/seeders',
    'chunk_size' => 500,
  ),
  'trustedproxy' => 
  array (
    'proxies' => NULL,
    'headers' => 30,
  ),
  'ide-helper' => 
  array (
    'filename' => '_ide_helper',
    'format' => 'php',
    'meta_filename' => '.phpstorm.meta.php',
    'include_fluent' => false,
    'include_factory_builders' => false,
    'write_model_magic_where' => true,
    'write_model_relation_count_properties' => true,
    'write_eloquent_model_mixins' => false,
    'include_helpers' => false,
    'helper_files' => 
    array (
      0 => '/home/dev/www/test.salemhokei.loc/vendor/laravel/framework/src/Illuminate/Support/helpers.php',
    ),
    'model_locations' => 
    array (
      0 => 'app',
    ),
    'ignored_models' => 
    array (
    ),
    'extra' => 
    array (
      'Eloquent' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'Illuminate\\Database\\Query\\Builder',
      ),
      'Session' => 
      array (
        0 => 'Illuminate\\Session\\Store',
      ),
    ),
    'magic' => 
    array (
    ),
    'interfaces' => 
    array (
    ),
    'custom_db_types' => 
    array (
    ),
    'model_camel_case_properties' => false,
    'type_overrides' => 
    array (
      'integer' => 'int',
      'boolean' => 'bool',
    ),
    'include_class_docblocks' => false,
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
