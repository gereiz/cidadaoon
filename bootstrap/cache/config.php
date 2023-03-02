<?php return array (
  'app' => 
  array (
    'name' => 'Laravel',
    'env' => 'production',
    'debug' => false,
    'url' => 'http://localhost/cidadaoon/',
    'asset_url' => NULL,
    'timezone' => 'UTC',
    'locale' => 'en_US',
    'fallback_locale' => 'en',
    'key' => 'base64:bjZBRXgwM0F1bDZmUFhSUEdLUFRYUFlyR0VxM0RlcVc=',
    'cipher' => 'AES-256-CBC',
    'log' => 'daily',
    'providers' => 
    array (
      0 => 'MicroweberPackages\\App\\Providers\\AppServiceProvider',
      1 => 'MicroweberPackages\\App\\Providers\\EventServiceProvider',
      2 => 'MicroweberPackages\\App\\Providers\\RouteServiceProvider',
    ),
    'manifest' => 'C:\\laragon\\www\\cidadaoon\\storage\\framework',
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
      ),
      'sanctum' => 
      array (
        'driver' => 'sanctum',
        'provider' => NULL,
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'MicroweberPackages\\User\\Models\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
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
        'path' => 'C:\\laragon\\www\\cidadaoon\\storage/framework/cache',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
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
        'connection' => 'default',
      ),
    ),
    'prefix' => 'laravel',
  ),
  'compile' => 
  array (
    'files' => 
    array (
      0 => 'C:\\laragon\\www\\cidadaoon\\app\\Providers\\AppServiceProvider.php',
      1 => 'C:\\laragon\\www\\cidadaoon\\app\\Providers\\EventServiceProvider.php',
      2 => 'C:\\laragon\\www\\cidadaoon\\app\\Providers\\RouteServiceProvider.php',
    ),
    'providers' => 
    array (
    ),
  ),
  'cors' => 
  array (
    'paths' => 
    array (
    ),
    'allowed_methods' => 
    array (
      0 => '*',
    ),
    'allowed_origins' => 
    array (
      0 => '*',
    ),
    'allowed_origins_patterns' => 
    array (
    ),
    'allowed_headers' => 
    array (
      0 => '*',
    ),
    'exposed_headers' => 
    array (
    ),
    'max_age' => 0,
    'supports_credentials' => false,
  ),
  'database' => 
  array (
    'fetch' => 8,
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'database' => 'C:\\laragon\\www\\cidadaoon\\storage\\database.sqlite',
        'prefix' => '',
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'host' => 'localhost',
        'database' => 'cid_on',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => '',
        'strict' => false,
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'host' => 'localhost',
        'database' => 'forge',
        'username' => 'forge',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'schema' => 'public',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'host' => 'localhost',
        'database' => 'database',
        'username' => 'root',
        'password' => '',
        'prefix' => '',
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'cluster' => false,
      'default' => 
      array (
        'host' => '127.0.0.1',
        'port' => 6379,
        'database' => 0,
      ),
    ),
  ),
  'debugbar' => 
  array (
    'enabled' => false,
    'except' => 
    array (
      0 => 'telescope*',
    ),
    'storage' => 
    array (
      'enabled' => true,
      'driver' => 'file',
      'path' => 'C:\\laragon\\www\\cidadaoon\\storage\\debugbar',
      'connection' => NULL,
      'provider' => '',
    ),
    'editor' => 'phpstorm',
    'remote_sites_path' => '',
    'local_sites_path' => '',
    'include_vendors' => true,
    'capture_ajax' => false,
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
      'log' => false,
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
      'models' => true,
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
    'theme' => 'auto',
    'debug_backtrace_limit' => 50,
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
        'root' => 'C:\\laragon\\www\\cidadaoon\\storage/app',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => 'your-key',
        'secret' => 'your-secret',
        'bucket' => 'your-bucket',
      ),
      'rackspace' => 
      array (
        'driver' => 'rackspace',
        'username' => 'your-username',
        'key' => 'your-key',
        'container' => 'your-container',
        'endpoint' => 'https://identity.api.rackspacecloud.com/v2.0/',
        'region' => 'IAD',
      ),
      'media' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\laragon\\www\\cidadaoon\\userfiles\\media\\default\\',
        'url' => 'http://localhost/cidadaoon/userfiles/media/default/',
        'visibility' => 'public',
      ),
    ),
  ),
  'flare' => 
  array (
    'key' => NULL,
    'flare_middleware' => 
    array (
      0 => 'Spatie\\FlareClient\\FlareMiddleware\\RemoveRequestIp',
      1 => 'Spatie\\FlareClient\\FlareMiddleware\\AddGitInformation',
      2 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddNotifierName',
      3 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddEnvironmentInformation',
      4 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddExceptionInformation',
      5 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddDumps',
      'Spatie\\LaravelIgnition\\FlareMiddleware\\AddLogs' => 
      array (
        'maximum_number_of_collected_logs' => 200,
      ),
      'Spatie\\LaravelIgnition\\FlareMiddleware\\AddQueries' => 
      array (
        'maximum_number_of_collected_queries' => 200,
        'report_query_bindings' => true,
      ),
      'Spatie\\LaravelIgnition\\FlareMiddleware\\AddJobs' => 
      array (
        'max_chained_job_reporting_depth' => 5,
      ),
      'Spatie\\FlareClient\\FlareMiddleware\\CensorRequestBodyFields' => 
      array (
        'censor_fields' => 
        array (
          0 => 'password',
          1 => 'password_confirmation',
        ),
      ),
      'Spatie\\FlareClient\\FlareMiddleware\\CensorRequestHeaders' => 
      array (
        'headers' => 
        array (
          0 => 'API-KEY',
        ),
      ),
    ),
    'send_logs_as_events' => true,
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
  ),
  'l5-swagger' => 
  array (
    'default' => 'default',
    'documentations' => 
    array (
      'default' => 
      array (
        'api' => 
        array (
          'title' => 'L5 Swagger UI',
        ),
        'routes' => 
        array (
          'api' => 'api/documentation',
        ),
        'paths' => 
        array (
          'docs_json' => 'api-docs.json',
          'docs_yaml' => 'api-docs.yaml',
          'annotations' => 
          array (
            0 => 'C:\\laragon\\www\\cidadaoon\\src/MicroweberPackages',
          ),
        ),
      ),
    ),
    'defaults' => 
    array (
      'routes' => 
      array (
        'docs' => 'docs',
        'oauth2_callback' => 'api/oauth2-callback',
        'middleware' => 
        array (
          'api' => 
          array (
          ),
          'asset' => 
          array (
          ),
          'docs' => 
          array (
          ),
          'oauth2_callback' => 
          array (
          ),
        ),
        'group_options' => 
        array (
        ),
      ),
      'paths' => 
      array (
        'docs' => 'C:\\laragon\\www\\cidadaoon\\storage\\api-docs',
        'views' => 'C:\\laragon\\www\\cidadaoon\\resources/views/vendor/l5-swagger',
        'base' => NULL,
        'swagger_ui_assets_path' => 'vendor/swagger-api/swagger-ui/dist/',
        'excludes' => 
        array (
        ),
      ),
      'securityDefinitions' => 
      array (
        'securitySchemes' => 
        array (
          'token' => 
          array (
            'type' => 'apiKey',
            'description' => 'Enter token in format: (Bearer token12345)',
            'name' => 'Authorization',
            'in' => 'header',
          ),
        ),
        'security' => 
        array (
        ),
      ),
      'generate_always' => false,
      'generate_yaml_copy' => false,
      'proxy' => false,
      'additional_config_url' => NULL,
      'operations_sort' => NULL,
      'validator_url' => NULL,
    ),
  ),
  'livewire' => 
  array (
    'class_namespace' => 'App\\Http\\Livewire',
    'view_path' => 'C:\\laragon\\www\\cidadaoon\\resources\\views/livewire',
    'layout' => 'layouts.app',
    'asset_url' => NULL,
    'app_url' => NULL,
    'middleware_group' => 'web',
    'temporary_file_upload' => 
    array (
      'disk' => NULL,
      'rules' => NULL,
      'directory' => NULL,
      'middleware' => NULL,
      'preview_mimes' => 
      array (
        0 => 'png',
        1 => 'gif',
        2 => 'bmp',
        3 => 'svg',
        4 => 'wav',
        5 => 'mp4',
        6 => 'mov',
        7 => 'avi',
        8 => 'wmv',
        9 => 'mp3',
        10 => 'm4a',
        11 => 'jpg',
        12 => 'jpeg',
        13 => 'mpga',
        14 => 'webp',
        15 => 'wma',
      ),
      'max_upload_time' => 5,
    ),
    'manifest_path' => NULL,
    'back_button_cache' => false,
    'render_on_redirect' => false,
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
          0 => 'single',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => 'C:\\laragon\\www\\cidadaoon\\storage\\logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => 'C:\\laragon\\www\\cidadaoon\\storage\\logs/laravel.log',
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
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => 'C:\\laragon\\www\\cidadaoon\\storage\\logs/laravel.log',
      ),
    ),
  ),
  'mail' => 
  array (
    'driver' => 'smtp',
    'host' => NULL,
    'port' => NULL,
    'from' => 
    array (
      'address' => 'georgie.reis@localhost',
      'name' => 'georgie.reis',
    ),
    'encryption' => NULL,
    'username' => NULL,
    'password' => NULL,
    'sendmail' => '/usr/sbin/sendmail -bs',
    'pretend' => false,
    'stream' => 
    array (
      'ssl' => 
      array (
        'allow_self_signed' => true,
        'verify_peer' => false,
        'verify_peer_name' => false,
      ),
    ),
    'transport' => NULL,
  ),
  'microweber' => 
  array (
    'version' => '1.3.1',
    'install_default_template' => 'new-world',
    'install_default_template_content' => 1,
    'compile_assets' => 1,
    'disable_model_cache' => 0,
    'admin_url' => 'admpainel',
    'site_lang' => 'en_US',
    'has_admin' => 1,
    'is_installed' => 1,
    'updated_at' => '2023-01-14 13:07:57',
  ),
  'permission' => 
  array (
    'models' => 
    array (
      'permission' => 'Spatie\\Permission\\Models\\Permission',
      'role' => 'Spatie\\Permission\\Models\\Role',
    ),
    'table_names' => 
    array (
      'roles' => 'roles',
      'permissions' => 'permissions',
      'model_has_permissions' => 'model_has_permissions',
      'model_has_roles' => 'model_has_roles',
      'role_has_permissions' => 'role_has_permissions',
    ),
    'column_names' => 
    array (
      'model_morph_key' => 'model_id',
    ),
    'display_permission_in_exception' => false,
    'display_role_in_exception' => false,
    'enable_wildcard_permission' => false,
    'cache' => 
    array (
      'expiration_time' => 
      DateInterval::__set_state(array(
         'y' => 0,
         'm' => 0,
         'd' => 0,
         'h' => 24,
         'i' => 0,
         's' => 0,
         'f' => 0.0,
         'weekday' => 0,
         'weekday_behavior' => 0,
         'first_last_day_of' => 0,
         'invert' => 0,
         'days' => false,
         'special_type' => 0,
         'special_amount' => 0,
         'have_weekday_relative' => 0,
         'have_special_relative' => 0,
      )),
      'key' => 'spatie.permission.cache',
      'model_key' => 'name',
      'store' => 'default',
    ),
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
        'expire' => 60,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'ttr' => 60,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => 'your-public-key',
        'secret' => 'your-secret-key',
        'queue' => 'your-queue-url',
        'region' => 'us-east-1',
      ),
      'iron' => 
      array (
        'driver' => 'iron',
        'host' => 'mq-aws-us-east-1.iron.io',
        'token' => 'your-token',
        'project' => 'your-project-id',
        'queue' => 'your-queue-name',
        'encrypt' => true,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'queue' => 'default',
        'expire' => 60,
      ),
    ),
    'failed' => 
    array (
      'table' => 'failed_jobs',
    ),
  ),
  'services' => 
  array (
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => 120,
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => 'C:\\laragon\\www\\cidadaoon\\storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'laravel_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => false,
    'same_site' => 'lax',
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => 'C:\\laragon\\www\\cidadaoon\\resources\\views',
    ),
    'compiled' => 'C:\\laragon\\www\\cidadaoon\\storage\\framework\\views',
  ),
  'workbench' => 
  array (
    'name' => '',
    'email' => '',
  ),
  'livewire-ui-modal' => 
  array (
    'include_css' => false,
    'include_js' => true,
    'component_defaults' => 
    array (
      'modal_max_width' => '2xl',
      'close_modal_on_click_away' => true,
      'close_modal_on_escape' => true,
      'close_modal_on_escape_is_forceful' => true,
      'dispatch_close_event' => false,
      'destroy_on_close' => false,
    ),
  ),
  'backup' => 
  array (
    'backup_location' => '',
    'backup_cache_location' => '',
  ),
  'markdown' => 
  array (
    'views' => true,
    'extensions' => 
    array (
      0 => 'League\\CommonMark\\Extension\\CommonMark\\CommonMarkCoreExtension',
      1 => 'League\\CommonMark\\Extension\\Table\\TableExtension',
    ),
    'renderer' => 
    array (
      'block_separator' => '
',
      'inner_separator' => '
',
      'soft_break' => '
',
    ),
    'commonmark' => 
    array (
      'enable_em' => true,
      'enable_strong' => true,
      'use_asterisk' => true,
      'use_underscore' => true,
      'unordered_list_markers' => 
      array (
        0 => '-',
        1 => '+',
        2 => '*',
      ),
    ),
    'html_input' => 'strip',
    'allow_unsafe_links' => true,
    'max_nesting_level' => 9223372036854775807,
    'slug_normalizer' => 
    array (
      'max_length' => 255,
      'unique' => 'document',
    ),
  ),
  'laravel-swagger' => 
  array (
    'title' => NULL,
    'description' => '',
    'appVersion' => '1.0.0',
    'host' => NULL,
    'basePath' => '/',
    'schemes' => 
    array (
    ),
    'consumes' => 
    array (
    ),
    'produces' => 
    array (
    ),
    'ignoredMethods' => 
    array (
      0 => 'head',
    ),
    'parseDocBlock' => true,
    'parseSecurity' => true,
    'authFlow' => 'accessCode',
  ),
  'passport' => 
  array (
    'private_key' => NULL,
    'public_key' => NULL,
    'client_uuids' => false,
    'personal_access_client' => 
    array (
      'id' => NULL,
      'secret' => NULL,
    ),
  ),
  'sanctum' => 
  array (
    'stateful' => 
    array (
      0 => 'localhost',
      1 => 'localhost:3000',
      2 => '127.0.0.1',
      3 => '127.0.0.1:8000',
      4 => '::1',
      5 => 'localhost',
    ),
    'guard' => 
    array (
      0 => 'web',
    ),
    'expiration' => NULL,
    'middleware' => 
    array (
      'verify_csrf_token' => 'App\\Http\\Middleware\\VerifyCsrfToken',
      'encrypt_cookies' => 'App\\Http\\Middleware\\EncryptCookies',
    ),
  ),
  'repositories' => 
  array (
    'per_page' => 50,
    'max_per_page' => 100,
    'cache_enabled' => true,
    'cache_skip_param' => 'skipCache',
  ),
  'tagging' => 
  array (
    'tag_model' => 'MicroweberPackages\\Tag\\Model\\Tag',
    'tagged_model' => 'MicroweberPackages\\Tag\\Model\\Tagged',
    'tag_group_model' => 'MicroweberPackages\\Tag\\Model\\TagGroup',
  ),
  'seo-helper' => 
  array (
    'title' => 
    array (
      'default' => 'Default Title',
      'site-name' => 'Laravel',
      'separator' => '-',
      'first' => true,
      'max' => 55,
    ),
    'description' => 
    array (
      'default' => 'Default description',
      'max' => 155,
    ),
    'keywords' => 
    array (
      'default' => 
      array (
      ),
    ),
    'misc' => 
    array (
      'canonical' => true,
      'robots' => false,
      'default' => 
      array (
        'viewport' => 'width=device-width, initial-scale=1',
        'author' => '',
        'publisher' => '',
      ),
    ),
    'webmasters' => 
    array (
      'google' => '',
      'bing' => '',
      'alexa' => '',
      'pinterest' => '',
      'yandex' => '',
    ),
    'open-graph' => 
    array (
      'enabled' => true,
      'prefix' => 'og:',
      'type' => 'website',
      'title' => 'Default Open Graph title',
      'description' => 'Default Open Graph description',
      'site-name' => '',
      'properties' => 
      array (
      ),
    ),
    'twitter' => 
    array (
      'enabled' => true,
      'prefix' => 'twitter:',
      'card' => 'summary',
      'site' => 'Username',
      'title' => 'Default Twitter Card title',
      'metas' => 
      array (
      ),
    ),
    'analytics' => 
    array (
      'google' => '',
    ),
  ),
);
