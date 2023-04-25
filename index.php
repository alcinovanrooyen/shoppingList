<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('VIEW_DIR', __DIR__.'/views');
define('MODEL_DIR', __DIR__.'/models');
define('CONTROLLER_DIR', __DIR__.'/controllers');

if (isset($_REQUEST['route'])) {
    require_once("controllers/{$_REQUEST['route']}.php");
    exit;
}

require_once(__DIR__ . "/controllers/index.php");
    
