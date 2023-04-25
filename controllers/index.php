<?php

require(MODEL_DIR.'/index.php');

class Index 
{
    private $slItems;
    private $model;
    
    public function __construct() {
        $this->model = new IndexModel();
        $this->getShoppingList();
        require_once(VIEW_DIR.'/index.php');
    }
    
    private function getShoppingList() {
        $this->slItems = $this->model->index();
    }
}

$index = new Index();