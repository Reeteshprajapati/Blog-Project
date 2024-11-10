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

<form action="connect_login.php" method="post">
    <h3>login now</h3>
    
    <input type="email" name="email" require placeholder="enter email">
    <input type="password" name="password" require placeholder="enter password">

    <input type="submit" value="login now" class="form-btn" >
    <p>don't have an account? <a href="register_form.php">register now</a></p>
</form>

</div>
</body>
</html>