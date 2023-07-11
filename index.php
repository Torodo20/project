
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   
    <title>Reseau Social</title>
 </head>
 <body>
 <div class="bg-primary ">
       <h1 class=" " style="text-align: center; width: 100%; color:aquamarine;"><b>BOOK</b> </h1> 
       <a href="add.php"><input type="submit" name="addpost" class="btn btn-success"  style="box-shadow:2px 2px 1px black;" value="Add Post" ></a>
</div>

    <div style="width: 400px;" class="container">

    <form action="index.php" method="post" class="form-control" >
    <?php

     ?>
        <input type="submit" value="post" class="fa fa-paper-plane">
    </form>
    </div>
 </body>
 <script src="https://example.com/fontawesome/v6.4.0/js/fontawesome.js" data-auto-replace-svg="nest"></script>
  <script src="https://example.com/fontawesome/v6.4.0/js/solid.js"></script>
  <script src="https://example.com/fontawesome/v6.4.0/js/brands.js"></script>

 </html>
<?php
include "connex.php";
if (isset($_POST['post']))
{
$id=$_POST['id'];
$content=$_POST['content'];
$created_at=$_POST['created_at'];

$req=" INSERT INTO post (id, content) VALUES ( '$id', '$content')";
$result=mysqli_query($conn, $req);
if($result)
{
    echo "Post ajouté";
}
else
{
    echo "Erreur: " .mysqli_error($conn);
}
}
$req1="SELECT post.* , user.username FROM post, user WHERE post.id=user.id_u ORDER BY created_at DESC ";
$result1=mysqli_query($conn, $req1);

if (mysqli_num_rows($result1)> 0)
{
  while($row=mysqli_fetch_assoc($result1))
  {
     $username=$row['username'];
     $content=$row['content'];
     $created_at=$row['created_at'];

     echo "<p> <h3> $username </h3> <p>  ";
     echo "<p>$content</p>";
     echo " <p>$created_at</p>";
     echo "<br> ";

  }
   
}
 else
{
echo "Pas de post";
}

?>