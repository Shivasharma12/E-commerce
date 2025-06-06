<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_post['name'];
    $email =$_post['email'];
    $message =$_post['message'];
   

    //connect to the data base
    $servername = "localhost";
    $username ="root";
    $password ="";
    $database ="contact";

    //create a connection
    $conn = mysqli_connect($servername, $username, $password );
    //Die if connection was not success full
    if($cann){
        die("sorry we failed to connect:".mysqli_connect_error() );
    }
    else{
    echo "connectio was successful";
    
    }

    //sql query to be executed
    $sql = "INSERT INTO 'contact1' ( 'name', 'email', 'message') VALUES ('$name', '$email', '$message')";
    $result = mysqli_query($conn, $sql);
    //add a new trip to the table in the database
    if($result){
        
      echo "You entry has been submited!";
       
    else{
        echo "the record was not inserted successfully because error".mysqli_error($conn);
    }
}?>