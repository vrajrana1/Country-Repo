<?php
require_once("index.php");
if(isset($_POST['submit'])){
    
        $name = $_POST['Username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        if(empty($name)){
            echo "<span style='color:red'>Name is required </span>";
            
        }
//ashwin
}
?>
