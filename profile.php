<?php
require_once "manager.php";

// cannot access the page if there is no session
if(!isset($_SESSION["email"]))
{
    header("Location: index.php");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Perfil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php include "navbar.php"?>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6 ">
            <ul class="list-group">
            <li class="list-group-item active">Informacion de cuenta</li>
            <li class="list-group-item">Usuario: <?php echo $usersinfo["username"]?></li>
            <li class="list-group-item">Email: <?php echo $usersinfo["email"]?></li>
            <li class="list-group-item">Dia de registro: <?php echo $usersinfo["registerdate"]?></li>
            <li class="list-group-item">Rol: <?php echo $usersinfo["authority"]?></li>
            </ul>
            </div>
        </div>
    </div>
</body>
</html>