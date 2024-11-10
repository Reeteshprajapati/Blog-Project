<?php
$username = filter_input(INPUT_POST ,"name");
$email = filter_input(INPUT_POST ,"email");
$password = filter_input(INPUT_POST ,"password");  ///connectiveity
$cpassword = filter_input(INPUT_POST ,"cpassword");  ///connectiveity

if (!empty($username)){
    if(!empty($password)){
        $host = "localhost";
        $dbusername = "root";   ///server
        $dbpassword = "";
        $dbname = "register";
        
        $connection = new mysqli($host,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error()){     ////connect
            echo"connection error";
        }
        else{
            $sql = "INSERT INTO rp(name,email,password,cpassword)
            VALUES('$username','$email','$password','$cpassword')";

            if($connection->query($sql)){
                header("location:login_form.php");
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







// ********************************************************************************************
// singup1
// $firstname = filter_input(INPUT_POST ,"firstname");
// $lastname = filter_input(INPUT_POST ,"lastname");
// $password = filter_input(INPUT_POST ,"password");  ///connectiveity
// $email = filter_input(INPUT_POST ,"email");

// if (!empty($firstname)){
// if (!empty($lastname)){
//     if(!empty($password)){
//         $host = "localhost";
//         $dbusername = "root";   ///server
//         $dbpassword = "";
//         $dbname = "rp";
        
//         $connection = new mysqli($host,$dbusername,$dbpassword,$dbname);
//         if(mysqli_connect_error()){     ////connect
//             echo"connection error";
//         }
//         else{
//             $sql = "INSERT INTO signup1(firstname,lastname,password,email)
//             VALUES('$firstname','$lastname','$password','$email')";

//             if($connection->query($sql)){
//                 header("location:connectionsignup.php");
//             }
//             $connection->close();
//         }
//     }
//     else{
//         echo'<script>alter("password must be required")</script>';
//         die();
//     }
// }
// }

// else{
//     echo'<script>alter("username must be required")</script>';
//         die();
// }
// ?> 