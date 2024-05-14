<?php
// cannot access the page if there is no session
require_once "../manager.php";
require_once '../vendor/autoload.php';

use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;

Configuration::instance('cloudinary://395275118691212:EOIkHQAjTrykQB3Ndzl-7UlSNEs@dq3iibpqc?secure=true');







if(!isset($_SESSION["email"]))
{
    header("Location: ../index.php");
}

try{
if($_POST)
{
    $title = $_POST["title"];
    $text = $_POST["text"];
    $titlenumber = strlen($title);
    $blogphotourl = '';

    if(isset($_FILES)){
        try{
    
    $blogImage =  $_FILES["blog_image"]["tmp_name"];
    $upload = new UploadApi();
    $publicId = uniqid('file_', true);

    $result = $upload->upload($blogImage, [
        'public_id' => $publicId,
        'use_filename' => true,
        'overwrite' => true]);


      
     
     $blogphotourl = $result['secure_url'];

    }catch(Exception $e) {

        echo $e->getMessage();
    
    }
}

    if($titlenumber > 80)
    {
        $errormsg = "Title is too long.";
    }
    else
    {
        if($title!="" && $text!="")
        {

            try{
            $query = $db->prepare("INSERT INTO blog SET blogtitle=?, blogtext=?, user=?, time=?, blogimage=?");
            $addblog = $query->execute(array($title, $text, $username, date("Y-m-d h:i:s"),$blogphotourl));
            }
            catch(Exception $e){
                echo $e->getMessage();
            }
            if($addblog)
            {
                $errormsg = "Text Added.";
            }
            else
            {
                $errormsg = "Could not add text.";
            }
        }
        else
        {
            $errormsg = "Do not leave empty space!";
        }
    }
}
}catch(Exception $e){
    echo $e->getMessage();
}



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Add Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" href="https://res.cloudinary.com/dq3iibpqc/image/upload/v1715650582/logo/qw0vyfe6fugcxp6wuanj.ico" type="image/x-icon">
    <link rel="icon" href="https://res.cloudinary.com/dq3iibpqc/image/upload/v1715656973/logo/evj0z1lurs4uvy7l1jja.png" type="image/png">
    <link rel="shortcut icon" href="https://res.cloudinary.com/dq3iibpqc/image/upload/v1715650582/logo/qw0vyfe6fugcxp6wuanj.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="https://res.cloudinary.com/dq3iibpqc/image/upload/v1715656973/logo/evj0z1lurs4uvy7l1jja.png">
</head>
<body>



    <?php include "../navbar.php"?>
    <div class="container mt-3">
      <div class="row">
      <div class="col-md-12 mx-auto">

             <form method="POST" method="post" enctype="multipart/form-data">
            <input type="file" name="blog_image" id="blog_image">
            <input type="text" name="title"  class="form-control" placeholder="Title">
            <textarea id="summernote" name="text" class="form-control mt-1">Hello Summernote</textarea>
            

            <?php
                if(!empty($errormsg))
                {
                    ?>
                    <div class="alert alert-success mt-1" role="alert">
                    <?php echo $errormsg;?>
                    </div>
                    <?php
                }
                ?>
            <button type="submit" class="btn btn-warning mt-1">Publish</button>
        </form>
      </div>
      </div>
    </div>

    <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>



</body>
</html>