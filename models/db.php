<?php

$conn = mysqli_connect("localhost", "ubuntu", "", "shoppingList");
        
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}