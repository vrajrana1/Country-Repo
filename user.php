<?php
    require_once("dbtransaction.php");


  class User{

     public $insertTransaction;

     function displayMsg()
     {
        echo"Data Inserted Succesfully";
     }


  }
    $transaction = new DBTransaction();
        $query = "insert into user (user_name,user_password,user_email) values(:Username,:password,:email)";
        $insertId = $transaction->insertTransaction($query, [
          'Username' => $name,
          'password' => $password,
          'email' =>  $email,
        ]);
        // echo 'Data Inserted Succesfully'. PHP_EOL;
        // echo $insertId;
//i have  just add other comment
        
  $us_er=new User();
  $us_er->displayMsg();


?>
