<?php
$name = filter_input(INPUT_POST ,"name");
$phone = filter_input(INPUT_POST ,"phone");  ///connectiveity
$email = filter_input(INPUT_POST ,"email");
$subject = filter_input(INPUT_POST ,"subject");
$message = filter_input(INPUT_POST ,"message");

if (!empty($name)){
    if(!empty($phone)){
        $host = "localhost";
        $dbusername = "root";   ///server
        $dbpassword = "";
        $dbname = "contact";
        
        $connection = new mysqli($host,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error()){     ////connect
            echo"connection error";
        }
        else{
            $sql = "INSERT INTO contact(name,phone,email,subject,message)
            VALUES('$name','$phone','$email','$subject','$message')";

            if($connection->query($sql)){
                header("location:connect_contact.php");
            }
            $connection->close();
        }
    }
    else{
        echo'<script>alter("password must be required")</script>';
        die();
    }
}

else{
    echo'<script>alter("username must be required")</script>';
        die();
}

?>