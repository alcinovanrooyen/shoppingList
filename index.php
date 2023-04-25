<?php

if (!isset($_POST['route'])) 
    die( json_encode( ['error' => true, 'msg' =>'no route specified'] ) );
    
if (!file_exists("controllers/{$_POST['route']}.php"))
    die( json_encode( ['err'=>true, 'msg' => 'route not found'] ) );
    
require_once("controllers/{$_POST['route']}.php");
