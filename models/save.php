<?php

require_once( __DIR__ . '/db.php');

class IndexModel {
    private $conn;
    
    public function __construct() {
        $this->conn = $conn;
    }
    
    public function index() {
        $sql = "SELECT * FROM list_items";
        
        $result = mysqli_query($this->conn, $sql);
        
        $items = mysqli_fetch_array($result);
        
        return $items;
    }
}