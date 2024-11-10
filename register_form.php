<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    
<div class="form_container">

<form action="connect_register.php" method="post">
    <h3>register now</h3>
    <input type="text" name="name" require placeholder="enter name">
    <input type="email" name="email" require placeholder="enter email">
    <input type="password" name="password" require placeholder="enter password">
    <input type="password" name="cpassword" require placeholder="enter password">
    <!-- <select name="user_type" id="">
        <option value="user">user</option>
        <option value="admin">admin</option>
    </select> -->
    <input type="submit" value="register now" class="form-btn">
    <p>already have an account? <a href="login_form.php">login now</a></p>
</form>

</div>
</body>
</html>