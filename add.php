<?php
include "connex.php";

if (isset($_POST['signup']))
{
$id_u=$_POST['id_u'];
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$username=$_POST['username'];
$mail=$_POST['mail'];
$pass=$_POST['pass'];


$req1="INSERT INTO user (id_u, prenom, nom, username, mail, pass ) VALUES('$id_u', '$prenom', '$nom', '$username', '$mail', $pass) "; 
$resul=mysqli_query($conn, $req1);
if($resul)
{
    header("location:index.php");
}
}

if (isset($_POST['post']))
{
    $id=$_POST['id'];
    $content=$_POST['content'];
    $created_at=$_POST['created_at'];

    $req4=" INSERT INTO post  (id , content, created_at) VALUES ('$id', $content', '$creatd_at') ";
    $res4 = mysqli_query($conn, $req4); 

    $result=mysqli_query($conn, $req1);
  if($result)
{
    header("location:index.php");
}
}

?>

<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   
    <title>AJOUT POST</title>
 </head>
 <body>
 <div class="bg-primary ">
       <h1 class=" " style="text-align: center; width: 100%; color:aquamarine;"><b>BOOK</b> </h1> 
       <a href="index.php"><input type="submit" name="addpost" class="btn btn-success"  style="box-shadow:2px 2px 1px black;" value="See Posts" ></a>
</div>

    <div style="width: 400px;" class="container">

    <form action="add.php" method="post" class="form-control" >
 
        <textarea name="content" style="width: 400px;"  placeholder="Write your Post" required></textarea> <br></br>
        <input type="submit" value="post" class="btn btn-primary" >
    </form>
    </div>
 </body>
 <script src="https://example.com/fontawesome/v6.4.0/js/fontawesome.js" data-auto-replace-svg="nest"></script>
  <script src="https://example.com/fontawesome/v6.4.0/js/solid.js"></script>
  <script src="https://example.com/fontawesome/v6.4.0/js/brands.js"></script>
 </html>
