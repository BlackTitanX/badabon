<?php
require_once "manager.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>INICIO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="3M-lW6gLjmCYb0kjxQADuXI8GqoEDRidGG-01jUY2C4" />
    
</head>
<body>


    <body>

<?php include "./navbar.php"?>
 
<!-- Contador de visitas -->
<div class="contador"><a href="https://websmultimedia.com/contador-de-visitas-gratis" title="Contador De Visitas Gratis">
<img style="border: 0px solid; display: inline;" alt="contador de visitas" src="https://websmultimedia.com/contador-de-visitas.php?id=16766"></a></div>
<!-- Fin Contador de visitas -->
	



    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-12">

          <h1 class="my-4">Noticias Recientes
            <small class="text-danger">Informate aqui</small>
          </h1>
           
          <?php 
          if(isset($_GET['q'])){
            $busqueda = $_GET['q'];
          
            $query = $db->prepare("SELECT * FROM blog WHERE blogtitle like %$busqueda% order by blogid desc");
            $query->execute();
            $blognumber = $query->rowCount();
            $bloginfo = $query->fetchAll(PDO::FETCH_ASSOC);
          }
          
          
          ?>

          <?php
          foreach($bloginfo as $blog)
          {
            $numberofcharacters = strlen($blog["blogtext"]);
            ?>

          <!-- Blog Post -->
          <div class="card mb-4 mx-auto" id="card">
            <img class="card-img-top top-image"   src="<?php echo htmlspecialchars($blog["blogimage"]); ?>" alt="blog Image">
            <div class="card-body">
              <h2 class="card-title"><a href="blog/blog.php?blogid=<?php echo $blog["blogid"];?>"><h5 class="card-title text-dark"><?php echo $blog["blogtitle"]?></h5></a></h2>
            
              <?php
                 if($numberofcharacters > 200)
                 {
                      echo substr('<p class="card-text">'.$blog["blogtext"],0,350) .'</p>'."...";
                    ?>
                    <?php echo substr('<p class="card-text">'.$blog["blogtext"],0,50) ?>
                    <?php
                 }
                 else
                 {
                  ?>
                    <p class="card-text"><?php echo $blog["blogtext"]?></p>
                  <?php
                 }
                ?>

             



            </div>

          <div class="card-footer text-muted">
           Posted by
           <a href="#">Amado Click</a>
           <a class="text-secondary"><?php echo date("F j, Y, g:i a", strtotime($blog["time"]))?></a>
    
    </div>


          </div>
            
          <?php
          }
        ?>
            
          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">← Older</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">Newer →</a>
            </li>
          </ul>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
         

          <!-- Categories Widget -->
        

          <!-- Side Widget -->
        
 <!-- Side Widget -->
          
          <!-- tweeter -->
          <div class="">
            <div class="">
             

            </div>
          </div>
        </div>
          
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!--footer-->

    <?php include "./footer.php"?>

  </body>

</html>