<?php
    define('PERCH_LICENSE_KEY', 'P21703-PGU693-CFJ607-WZJ688-VAE022');

    define("PERCH_DB_USERNAME", 'root');
    define("PERCH_DB_PASSWORD", 'root');
    define("PERCH_DB_SERVER", "localhost:8889");
    define("PERCH_DB_DATABASE", "perchASG");
    define("PERCH_DB_PREFIX", "perch2_");
    
    define('PERCH_TZ', 'UTC');

    define('PERCH_EMAIL_FROM', 'derek@arunsunshine.org.uk');
    define('PERCH_EMAIL_FROM_NAME', 'Derek Moore');

    define('PERCH_LOGINPATH', '/asg/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
