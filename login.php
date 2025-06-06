<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_post['username'];
        $email =$_post['password'];
       
        $servername = "localhost";
        $username ="root";
        $password ="";
        $database ="login";

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
        $sql = "INSERT INTO 'login1'('username', 'password') VALUES ('username', 'password')";
        $result = mysqli_query($conn, $sql);
        //add a new trip to the table in the database
        if($result){
             echo "You entry has been submited!";
            
        }
        else{
            echo "the record was not inserted successfully because error".mysqli_error($conn);
        }
    }?>