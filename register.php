<?phpif($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_post['full name'];
        $email =$_post['email address'];
        $passwod =$_post['password'];
        $mobile =$_post['mobile no.'];
        $country =$_post['country'];
        $address =$_post['address'];
       

        //connect to the data base
        $servername = "localhost";
        $username ="root";
        $password ="";
        $database ="register";

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
        $sql = "INSERT INTO 'register1' ( 'name', 'email', 'password', 'mobile', 'country', 'address') VALUES ('$name', '$email', '$password', '$mobile', '$country', '$address')";
        $result = mysqli_query($conn, $sql);
        //add a new trip to the table in the database
        if($result){
            echo"entry has been submited";
        }
        else{
            echo "the record was not inserted successfully because error".mysqli_error($conn);
        }
    }?>