<?php
if(strpos($_SERVER['REQUEST_URI'],"DB.php")){
    require_once 'Utils.php';
    PlainDie();
}

$conn = new mysqli("localhost", "id22278559_manchester", "Manchester0!", "id22278559_manchester01");
if($conn->connect_error != null){
    die($conn->connect_error);
}