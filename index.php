<?php
require_once "manager.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>INICIO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


    <body>

<?php include "./navbar.php"?>

	



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
          <div class="card mb-4 mx-auto">
            <img class="card-img-top top-image"   src="<?php echo htmlspecialchars($blog["blogimage"]); ?>">
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

             <a href="blog/blog.php?blogid=<?php echo $blog["blogid"];?>" class="btn btn-primary">Leer Mas →</a>



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