<?php
require_once "manager.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php include "navbar.php"?>

    <body>

<?php include "../navbar.php"?>

	



    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4">Noticias Recientes
            <small class="text-danger">Informate aqui</small>
          </h1>
           

          <?php
          foreach($bloginfo as $blog)
          {
            $numberofcharacters = strlen($blog["blogtext"]);
            ?>

          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="https://3.bp.blogspot.com/--C1wpaf_S4M/W7V__10nRoI/AAAAAAAAK24/1NSfapuYSIY0f0wzXY9NgoH0FjQLT07YACKgBGAs/s1600/maxresdefault.jpg">
            <div class="card-body">
              <h2 class="card-title"><a href="blog/blog.php?blogid=<?php echo $blog["blogid"];?>"><h5 class="card-title text-dark"><?php echo $blog["blogtitle"]?></h5></a></h2>
            
              <?php
                 if($numberofcharacters > 200)
                 {
                      echo substr('<p class="card-text">'.$blog["blogtext"],0,350) .'</p>'."...";
                    ?>
                    <form method="get">
                      <a class="btn btn-primary" href="blog/blog.php?blogid=<?php echo $blog["blogid"];?>">Leer Mas!</a>
                    </form>
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
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-3">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Simba</a>
                    </li>
                    <li>
                      <a href="#">Nyati</a>
                    </li>
                    <li>
                      <a href="#">Faru</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Kiboko</a>
                    </li>
                    <li>
                      <a href="#">Fisi</a>
                    </li>
                    <li>
                      <a href="#">Pundamlia</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">maelezo</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
          </div>
 <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">banner</h5>
            <div class="card-body">
              <img class="card-img-top" src="https://2.bp.blogspot.com/-vvG5hMTFOro/W6RaoxdAikI/AAAAAAAAK1k/jezYdP7fvfYvt15Jv8a0agrGQE2lMU8YgCKgBGAs/s1600/MASAI-2.jpg" alt="Card image cap">
            </div>
          </div>
          <!-- tweeter -->
          <div class="card my-4">
            <h5 class="card-header">Tweeter here</h5>
            <div class="card-body">
             
<a class="twitter-timeline" href="https://twitter.com/Luckmoshy?ref_src=twsrc%5Etfw">Tweets by Luckmoshy</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
<a href="https://twitter.com/Luckmoshy?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @Luckmoshy</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
          </div>
        </div>
          
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!--footer-->

    <?php include "../footer.php"?>

  </body>

</html>