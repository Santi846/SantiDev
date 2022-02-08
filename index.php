<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Santiago Arocha Pérez">
    <link rel="stylesheet" href="assets/styles.css">
    <title>Santi.dev</title>
</head>
<body>
        <h1>Santi.dev</h1>  
        <h2>Suscríbete</h2>
        <form action="post">
            <input type="text" name = "name" placeholder="Nombre Completo">
            <input type="email" name="email" placeholder="Email">
            <input type="submit" name="register">
        </form>
        <?php 
            include("registrar.php");
            echo "I'll change this";
            echo "I enjoy this";
                ?>
</body>
</html>