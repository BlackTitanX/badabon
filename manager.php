<?php
error_reporting(0);
ob_start();
session_start();
try
{
    $db = new PDO("mysql:host=localhost;dbname=blog;charset=utf8;", "root", "Is19990204!");
}
catch(PDOException $dberror)
{
    echo $dberror->getMessage();
}

//We pulled the logged in user's data from the database
if(isset($_SESSION["email"]))
{
    $query = $db->prepare("SELECT * FROM users WHERE email=?");
    $query->execute(array($_SESSION["email"]));
    $usernumber = $query->rowCount();
    $usersinfo = $query->fetch(PDO::FETCH_ASSOC);
    if($usernumber > 0)
    {
        $username = $usersinfo["username"];
        $email = $usersinfo["email"];
        $registerdate = $usersinfo["registerdate"];
        $authority = $usersinfo["authority"];
    }
}

// we pull data of blog posts from database
$query = $db->prepare("SELECT * FROM blog order by blogid desc");
$query->execute();
$blognumber = $query->rowCount();
$bloginfo = $query->fetchAll(PDO::FETCH_ASSOC);

if($_GET)
{
    $blogid = intval($_GET["blogid"]);
    $query = $db->prepare("SELECT * FROM blog WHERE blogid=?");
    $query->execute(array($_GET["blogid"]));
    $info = $query->fetch(PDO::FETCH_ASSOC);
}

?>
<style>
  
  .header {
      position: relative;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      -ms-flex-direction: column;
      flex-direction: column;
      -ms-flex-pack: center;
      justify-content: center;
      min-height: 270px;
      padding-top: 4rem;
      padding-bottom: 4rem;
      color: #fff;
      background-color:  #6f42c1;
      background-image: url("https://res.cloudinary.com/dbllecqwm/image/upload/v1715224756/photo1715224702_p86qqh.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
  }

  .custom-logo {
    width: 50px; /* Adjust the width according to your requirement */
    height: auto; /* To maintain aspect ratio */
  }
  
  *, ::after, ::before {
      box-sizing: box;
  }
  h1 {
      font-size: 3.5rem;
      font-weight: 300;
      line-height: 1.1;
  }
  .header h1 a {
      color: #fff;
      text-decoration: none;
  }
  /*********footer*******************/
  .kilimanjaro_area {
      position: relative;
      z-index: 1;
      }
      .foo_top_header_one {
      background-color: #15151e;
      color: #fff;
  }
  .section_padding_100_70 {
      padding-top: 100px;
      padding-bottom: 70px;
  }
  .foo_top_header_one {
      color: #fff;
  }.kilimanjaro_part {
      margin-bottom: 30px;
  }
  .foo_top_header_one .kilimanjaro_part > h5 {
      color: #fff;
  }
  .kilimanjaro_part h4, .kilimanjaro_part h5 {
      margin-bottom: 30px;
  }
  .kilimanjaro_single_contact_info > p, .kilimanjaro_single_contact_info > h5, .kilimanjaro_blog_area > a, .foo_top_header_one .kilimanjaro_part > p {
      color: rgba(255,255,255,.5);
  }
  p, ul li, ol li {
      font-weight: 300;
  }
  ul {
      margin: 0;
      padding: 0;
  }
  .kilimanjaro_bottom_header_one {
      background-color: #111;
  }
  .section_padding_50 {
      padding: 50px 0;
  }
  .kilimanjaro_bottom_header_one p {
      color: #fff;
      margin: 0;
  }
  p, ul li, ol li {
      font-weight: 300;
  }
  .kilimanjaro_bottom_header_one a {
      color: inherit;
      font-size: 14px;
  }
  a, h1, h2, h3, h4, h5, h6 {
      font-weight: 400;
  }
  .m-top-15 {
      margin-top: 15px;
  }
  ul {
      margin: 0;
      padding: 0;
  }
  
  .kilimanjaro_widget > li {
      display: inline-block;
  }
  p, ul li, ol li {
      font-weight: 300;
  }
  ol li, ul li {
      list-style: outside none none;
  }
  .kilimanjaro_widget a {
      border: 1px solid #333;
      border-radius: 6px;
      color: #888;
      display: inline-block;
      font-size: 13px;
      margin-bottom: 4px;
      padding: 7px 12px;
  }
  ul {
      margin: 0;
      padding: 0;
  }
  .kilimanjaro_links a {
      border-bottom: 1px solid #333;
      color: rgba(255,255,255,.5);
      display: block;
      font-size: 13px;
      margin-bottom: 5px;
      padding-bottom: 10px;
  }
  .kilimanjaro_links a {
      color: rgba(255,255,255,.5);
      font-size: 13px;
  }
  top-15 {
      margin-top: 15px;
  }
  .foo_top_header_one .kilimanjaro_part > h5 {
      color: #fff;
  }
  .kilimanjaro_part h4, .kilimanjaro_part h5 {
      margin-bottom: 30px;
  }
  .kilimanjaro_social_links > li {
      display: inline-block;
  }
  p, ul li, ol li {
      font-weight: 300;
  }
  .kilimanjaro_social_links a {
      border: 1px solid #333;
      border-radius: 6px;
      color: #888;
      display: inline-block;
      font-size: 13px;
      margin-bottom: 3px;
      padding: 7px 12px;
  }
  .kilimanjaro_blog_area .kilimanjaro_date {
      color: #27ae60;
      font-size: 13px;
      margin-bottom: 5px;
  }
  .kilimanjaro_blog_area > p {
      color: rgba(255,255,255,.5);
      line-height: 1.3;
      margin-bottom: 0;
  }
  .kilimanjaro_works > a {
      display: inline-block;
      float: left;
      position: relative;
      width: 33.33333333%;
      z-index: 1;
  }
  .kilimanjaro_thumb {
      left: 0;
      position: absolute;
      top: 0;
      width: 75px;
  }
  .kilimanjaro_links a i {
      padding-right: 10px;
  }
    /* :: 18.0 Footer Area CSS */
  
      .footer_area {
          position: relative;
          z-index: 1;
      }
   .footer_bottom p > i,
      .footer_bottom p > a:hover {
          color: #27ae60;
      }	
  
      .social_links_area {
          border-bottom: 1px solid rgba(255, 255, 255, 0.2);
          padding: 50px 0 30px 0;
          text-align: center;
          position: relative;
          z-index: 1;
      }
   .social_links_area > a:hover {
          color: #27ae60;
      }
  
      .inline-style .social_links_area > a:hover {
          background-color: transparent;
          color: #27ae60;
          border: 0px solid transparent;
      }
   .single_feature:hover .feature_text h4 {
          color: #27ae60;
      }
  .kilimanjaro_blog_area {
      border-bottom: 1px solid #333;
      margin-bottom: 15px;
      padding: 0 0 15px 90px;
      position: relative;
      z-index: 1;
  }
  .kilimanjaro_links a {
      border-bottom: 1px solid #333;
      color: rgba(255,255,255,.5);
      display: block;
      font-size: 13px;
      margin-bottom: 5px;
      padding-bottom: 10px;
  }
  
  
  
  </style>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
