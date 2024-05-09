<?php
require_once "manager.php";
?>


<div class="section" id="b-section-header" name="Header"><div class="widget Header" data-version="2" id="Header1">
<div class="header image-placement-behind no-image">
  
<div class="container" style="background-image: url('/assets/bannerr.jpg');">

</div>
</div>
</div>
</div>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

      
      <div class="container">
    <a class="navbar-brand" href="index.php">Amado Click <span><img src="./assets/logoX.png" class="custom-logo" alt=""></span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">INICIO</a>
      </div>
    </div>
    <form class="form-inline my-2 my-lg-0">
      <?php
      if(isset($_SESSION["email"]))
      {
        if($authority == "Admin")
        {
          ?>
           <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
              Admin Panel
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="blog/addblog.php">Add Text</a>
            </div>
        </div>
          <?php
        }
        ?>
        
        <a class="nav-link" href="./profile.php">Perfil</a>
        <a class="nav-link" href="./logout.php">Salir</a>
        <?php
      }
      else
      {
        ?>
        <a class="nav-link" href="./login.php">Login</a>
        <?php
      }
      ?>
    </form>
  </div>

<div class="ml-auto my-2 my-lg-0 mt-2">
<div class="section" id="b-section-navbar-search-form" name="Navbar: search form">
<div class="widget BlogSearch mt-2" data-version="2" id="BlogSearch1">
<form action="" class="form-inline">
<input aria-label="Search this blog" class="form-control mr-sm-2" name="q" placeholder="Search this blog" type="text">
<button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
</form>
</div></div>
</div>
        </div>
      </div>
    </nav>
    



