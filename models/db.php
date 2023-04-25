<?php

$conn = mysqli_connect("localhost", "ubuntu", "", "shoppingList");
        
// Check connection
if($this->conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}