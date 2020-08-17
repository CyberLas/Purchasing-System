<!DOCTYPE html>
<html>
<head>
	<title>Creater User</title>
	<meta charset="utf-8">
</head>
<body>
    <form method="post">
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("Register.php");
        ?>
</body>
</html>