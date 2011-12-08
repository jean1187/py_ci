<?php
 
define('APPPATH', dirname(__FILE__) . '/');
define('BASEPATH', APPPATH . '/../system/');
define('ENVIRONMENT', 'production'); // IMPORTANT! This should match the value in CodeIgniter's /index.php
 
chdir(APPPATH . '/libraries');
 
require_once 'Doctrine/Common/ClassLoader.php';

// Configure Doctrine Cli
// Normally these are arguments to the cli tasks but if they are set here the arguments will be auto-filled
$config = array('data_fixtures_path'  =>  dirname(__FILE__) . DIRECTORY_SEPARATOR . '/fixtures',
                'models_path'         =>  dirname(__FILE__) . DIRECTORY_SEPARATOR . '/models',
                'migrations_path'     =>  dirname(__FILE__) . DIRECTORY_SEPARATOR . '/migrations',
                'sql_path'            =>  dirname(__FILE__) . DIRECTORY_SEPARATOR . '/sql',
                'yaml_schema_path'    =>  dirname(__FILE__) . DIRECTORY_SEPARATOR . '/schema');


$classLoader = new \Doctrine\Common\ClassLoader('Doctrine');
$classLoader->register();
 
$classLoader = new \Doctrine\Common\ClassLoader('Symfony', 'Doctrine');
$classLoader->register();
 
$configFile = getcwd() . '/Doctrine.php';
 
$helperSet = null;
if (file_exists($configFile)) {
    if ( ! is_readable($configFile)) {
        trigger_error(
            'Configuration file [' . $configFile . '] does not have read permission.', E_ERROR
        );
    }
 
    require $configFile;
 
    foreach ($GLOBALS as $helperSetCandidate) {
        if ($helperSetCandidate instanceof \Symfony\Component\Console\Helper\HelperSet) {
            $helperSet = $helperSetCandidate;
            break;
        }
    }
}
$doctrine = new Doctrine();
$em = $doctrine->em;
 
$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
    'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($em->getConnection()),
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($em)
));
 
\Doctrine\ORM\Tools\Console\ConsoleRunner::run($helperSet);