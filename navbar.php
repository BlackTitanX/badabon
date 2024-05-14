<?php
require_once "manager.php";
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOMOS NOTICIAS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="https://res.cloudinary.com/dq3iibpqc/image/upload/v1715650582/logo/qw0vyfe6fugcxp6wuanj.ico" type="image/x-icon">
    <link rel="shortcut icon" href="https://res.cloudinary.com/dq3iibpqc/image/upload/v1715650582/logo/qw0vyfe6fugcxp6wuanj.ico" type="image/x-icon">
</head>
<div class="section" id="b-section-header" name="Header">
    <div class="widget Header" data-version="2" id="Header1">
        <div class="header image-placement-behind no-image">
            <h1 id="banner-letters" class="text-center">SOMOS NOTICIAS</h1>
            <div class="container" style="background-image: url('https://asset.cloudinary.com/dbllecqwm/b4f9d26d38ba5a1ceae540fd984c441a'); background-size: cover;">
            </div>
        </div>
    </div>
</div>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="https://res.cloudinary.com/dbllecqwm/image/upload/v1715528143/pytx5uinfzpoju1cgkay.png" class="custom-logo" alt=""> AMADO CLICK
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="index.php">INICIO</a>
                <?php if(isset($_SESSION["email"])): ?>
                    <?php if($authority == "Admin"): ?>
                        <a class="nav-link" href="blog/addblog.php">Add Text</a>
                    <?php endif; ?>
                    <a class="nav-link" href="./profile.php">Perfil</a>
                    <a class="nav-link" href="./logout.php">Salir</a>
                <?php endif; ?>
            </div>
            <form class="form-inline ml-auto">
                <input aria-label="Search this blog" class="form-control mr-sm-2" name="q" placeholder="Search this blog" type="text">
            </form>
        </div>
    </div>
</nav>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

