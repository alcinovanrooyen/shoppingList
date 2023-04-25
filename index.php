<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('VIEW_DIR', __DIR__.'/views');
define('MODEL_DIR', __DIR__.'/models');
define('CONTROLLER_DIR', __DIR__.'/controllers');

require_once(__DIR__ . "/controllers/index.php");
die();
if (!isset($_POST['route'])) 
    die( json_encode( ['error' => true, 'msg' =>'no route specified'] ) );
    
if (!file_exists("controllers/{$_POST['route']}.php"))
    die( json_encode( ['err'=>true, 'msg' => 'route not found'] ) );
    
require_once("controllers/{$_POST['route']}.php");
