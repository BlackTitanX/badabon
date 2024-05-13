<?php
//error_reporting(0);
require_once "../manager.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $info["blogtitle"];?></title>
  </head>
  <body>
    <?php include "../navbar.php";?>

 <!-- New content -->

   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $info["blogtitle"];?></title>

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    


  </head>

        <!--NEW content -->
        <div class="container">

      <div class="row">
      <div class="container">
        <div class="row">
            <div class="col-md-1-12 mx-auto w-200">
            </div>
        </div>
    </div>

        <!-- Blog Entries Column -->
        <div class="col-lg-8">

          <!-- Title -->
          <h1 class="mt-4"><?php echo $info["blogtitle"];?></h1>
         
          <!-- Author -->
          <p class="lead">
            by
            <a href="#">AMADO CLICK</a>
          </p>

          <hr>

          <!-- Date/Time -->
          <p>Publicado en <span><?php echo date($info["time"]);?></span></p>

          <hr>
          <?php
                if($authority == "Admin")
                {
                    ?>
                    <a href="editblog.php?blogid=<?php echo $info["blogid"];?>">Edit</a>
                    <a href="deleteblog.php?blogid=<?php echo $info["blogid"];?>">Delete</a>
                    <?php
                }
                ?>
          <!-- Preview Image -->
          <img class="card-img-top" src="<?php echo $info["blogimage"];?>" alt="Card image cap">

          <hr>

          <!-- Post Content -->
           <p><?php echo $info["blogtext"];?></p>
           <button type="button" onClick="share()" class="btn btn-primary">Compartir</button>
          <hr>
         
          <!-- Comments Form -->
          
          <!-- Single Comment -->
         

          <!-- Comment with nested comments -->
         

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          
          <!-- Categories Widget -->
       

          <!-- Side Widget -->
          
 <!-- Side Widget -->
          
          <!-- tweeter -->
          <div class="">
            <h5 class="">
            <div class="">
             

            </div>
          </div>
        </div>
          
      </div>
      <!-- /.row -->

    </div>
        <!-- New content -->





 
    <?php include "../footer.php"?>
    <script>
     

     let share = ()=>{
      if (navigator.share) {
      navigator.share({
      title: 'Amado.Click',
       text: 'Mira lo que acabo de leer!.',
       url: `${window.location.href}`,
  })
    .then(() => console.log('Successful share'))
    .catch((error) => console.log('Error sharing', error));
}
     }




    </script>




  </body>
</html>