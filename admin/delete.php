<?php
$id = $_GET["id"];
if($id){
    include("../admin_connect.php");
    $sqlDelete = "DELETE FROM posts WHERE id = $id";
    if(mysqli_query($conn,$sqlDelete)){
        header("Location:index.php");
    }else{
        die("Something is not write. Data is not Delete");
    }
}else{
    echo "Post Not Found";
}
?>