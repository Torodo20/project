<?php
 include 'add.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
</head>
<body>
    <div class="bg-primary ">
       <h1 class="" style="text-align: center; width: 100%; color:aquamarine;"><b>BOOK</b> </h1> 
       <button class="btn btn-success"  style="box-shadow:2px 2px 1px black;" ><a href="sign.php"> <span  style="color:white;" > Sign Up </span> </a> </button>
    </div>

    <div class="container pt-5" style="width: 400px;">
 <!-- zone de connexion -->
 <?php
 include 'connex.php';
 ?>
 <form action="verif.php" method="POST">
 <h1>Connexion</h1>

 <label><b>USERNAME</b></label>
 <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required> <br><br>

 <label><b>PASSWORD</b></label>
 <input type="password" placeholder="Entrer le mot de passe" name="password" required><br><br>

 <a href="index.php"><input class="btn btn-success" type="submit" id='submit' value='LOGIN' ></a>
 <?php
 if(isset($_GET['erreur'])){
 $err = $_GET['erreur'];
 if($err==1 || $err==2)
 echo "<p>Utilisateur ou mot de passe incorrect</p>";
 }
 ?>
 </form>
 </div>
</body>
</html>