<?php

require(MODEL_DIR.'/save.php');

class Save 
{
    private $model;
    private $success;
    private $error;
    
    public function __construct() {
        $this->model = new SaveModel();
        
        $saved = $this->save();
        
    }
    
    private function save() {
        $names = $_REQUEST['names'];
        $saved = $this->model->save($names);
        
        if ($saved) 
            header("Location: index.php?status=1");
        else
            header("Location: index.php?status=0");
    }
}

$index = new Save();