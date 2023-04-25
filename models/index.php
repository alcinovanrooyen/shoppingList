<?php

require_once( __DIR__ . '/db.php');

class IndexModel {
    private $conn;
    
    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }
    
    public function index() {
        $sql = "SELECT * FROM list_items";
        
        $result = mysqli_query($this->conn, $sql);
        
        $items = [];
        while($row = mysqli_fetch_object($result)) {
            $items[] = $row;
        }
        return $items;
    }
}