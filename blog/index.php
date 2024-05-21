<?php
require_once "../manager.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>INICIO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="3M-lW6gLjmCYb0kjxQADuXI8GqoEDRidGG-01jUY2C4" />

    <link rel="icon" href="https://res.cloudinary.com/dq3iibpqc/image/upload/v1715650582/logo/qw0vyfe6fugcxp6wuanj.ico" type="image/x-icon">
    <link rel="icon" href="https://res.cloudinary.com/dq3iibpqc/image/upload/v1715656973/logo/evj0z1lurs4uvy7l1jja.png" type="image/png">
    <link rel="shortcut icon" href="https://res.cloudinary.com/dq3iibpqc/image/upload/v1715650582/logo/qw0vyfe6fugcxp6wuanj.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="https://res.cloudinary.com/dq3iibpqc/image/upload/v1715656973/logo/evj0z1lurs4uvy7l1jja.png">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include "../navbar.php"?>

    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4">Noticias Recientes
        <small class="text-danger">Informate aqui</small>
      </h1>

      <?php 
      if(isset($_GET['q'])){
        $busqueda = $_GET['q'];

        $query = $db->prepare("SELECT * FROM blog WHERE blogtitle like '%$busqueda%' order by blogid desc");
        $query->execute();
        $blognumber = $query->rowCount();
        $bloginfo = $query->fetchAll(PDO::FETCH_ASSOC);
      }
      ?>

      <div class="row">
        <?php
        foreach($bloginfo as $blog)
        {
          $numberofcharacters = strlen($blog["blogtext"]);
          ?>

          <!-- Blog Post -->
          <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card h-100">
              <img class="card-img-top top-image" src="<?php echo htmlspecialchars($blog["blogimage"]); ?>" alt="blog Image">
              <div class="card-body">
                <h5 class="card-title"><a href="blog/blog.php?blogid=<?php echo $blog["blogid"];?>"><?php echo $blog["blogtitle"]?></a></h5>
                <?php
                if($numberofcharacters > 200)
                {
                  // Add logic if needed
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
                Posted by <a href="#">Amado Click</a>
                <span class="text-secondary"><?php echo date("F j, Y, g:i a", strtotime($blog["time"]))?></span>
              </div>
            </div>
          </div>

          <?php
        }
        ?>
      </div>

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
    <!-- /.container -->

    <!--footer-->
    <?php include "../footer.php"?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
