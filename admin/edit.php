<?php
include("template/header.php");
?>

<?php
$id = $_GET['id'];
if($id){
    include("../admin_connect.php");
    $sqlEdit = "SELECT * FROM posts WHERE id = $id";
    $result = mysqli_query($conn, $sqlEdit);
}else{
    echo "no page found";
}

?>
        <div class="create-form w-100 mx-auto p-4 " style="max-width:700px;">
            <form action="process.php"method="post">
                <?php
                    while($data = mysqli_fetch_array($result)){              
?>
                <div class="form-field mb-4">
                    <input type="text" class="form-control" name="title" placeholder="Enter title:" value="<?php echo $data['title'];?>">
                </div>
                <div class="form-field mb-4">
                    <textarea name="summary" class="form-control"  cols="30" rows="10" placeholder="enter summary"><?php echo $data['summary'];?></textarea>
                </div>
                <div class="form-field mb-4">
                    <textarea name="content" class="form-control"  cols="30" rows="10" placeholder="post:"><?php echo $data['content'];?></textarea>
                </div>
                <input type="hidden" name="date" value="<?php echo date("Y/m/d");?>"> 
                <input type="hidden" name= "id" value="<?php echo $id;  ?>">

                <div class="form-field">
                    <input type="submit" class="btn btn-primary" value="submit" name="update">
                </div>
                <?php
                 }
                ?>    

            </form>
        </div>
<?php
include("template/footer.php");
?>
   