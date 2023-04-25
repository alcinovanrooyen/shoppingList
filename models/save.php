<?php

require_once( __DIR__ . '/db.php');

class SaveModel {
    private $conn;
    
    
    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }
    
    public function save($names) {
        
        $rows = " (' " . implode( " ') , (' ", $names ) . " ') ";
        
        $sql = "INSERT INTO list_items (item_title) VALUES {$rows} ;";
        
        $result = mysqli_query($this->conn, $sql);
        
        return $result;
    }
}