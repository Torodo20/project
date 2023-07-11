<?php
// session_start();
include "connex.php";
$req3="SELECT * FROM user  ";
$res=mysqli_query($conn, $req3);

// include "add.php";
if(mysqli_num_rows($res) > 0)
{
   $err="Email existe deja";
}
else
{
$passHash=password_hash($pass, PASSWORD_DEFAULT);

$quete=" INSERT INTO user ( prenom , nom, username, mail, pass) VALUES('$prenom' , '$nom' , '$username', '$mail' , '$pass')";
$result= mysqli_query($conn, $quete);
if ($result)
{
   header( " location: login.php");
}
else
{
   $err= "Error: " .mysqli_error($conn);
}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN IN</title>
</head>
<body>

<div class="bg-primary ">
       <h1 class=" " style="text-align: center; width: 100%; color:aquamarine;"><b>BOOK</b> </h1> 
       <button class="btn btn-success"  style="box-shadow:2px 2px 1px black;" ><a href="login.php"><span  style="color:white;" > Login </span></a></button>
</div>


<div class="container" style="width: 400px;">
<form role="form" id="formInscription" method="POST">
 <h1 class="">Inscription</h1>
 <label for='prenom' style="padding-top: 5px;">FIRST NAME</label>
   <input type='text' id="prenom" name='prenom' class="form-control" style='width: 80%;'  placeholder="nom" required >
   <br><br>
   <label for='nom' style="padding-top: 5px;">LAST NAME</label>
   <input type='text' id="nom" name='nom' class="form-control" style='width: 80%;'  placeholder="nom" required >
   <br><br>
   <label for='username' style="padding-top: 5px;"> USERNAME </label>
   <input type='text' id="username" name='username' class="form-control" style='width: 80%;'  placeholder="username"  required>
   <br><br>
   <label for='mail' style="padding-top: 5px;"> EMAIL </label>
   <input type='mail' id="mail" name='mail' class="form-control" style='width: 80%;'  placeholder="exemple@gmail.com"  required>
   <br><br>
   <label for='tel' style="padding-top: 5px;"> TEL </label>
   <input type='text' id="tel" name='tel' class="form-control" style='width: 80%;'  placeholder="numero de tel"  required>
   <br><br>
   <?php
    $option=mysqli_fetch_assoc($res);

   while ($option)
   { ?>
    <option value=""> <?php echo $option=mysqli_fetch_assoc($res); ?> </option>
    <?php } ?>
   </select>

   <label for='pass'  style="padding-top: 5px;"> PASSWORD </label>
   <input type='password' id="pass" name='pass' class='form-control' style='width: 80%;' required><br> 
  <br><br>
  <label for='pass'  style="padding-top: 5px;"> CONFIRM PASSWORD </label>
   <input type='password' id="pass" class='form-control' disabled' style='width: 80%;'  name='confirmPassword' required> 
   <br><br>
   <a href="index.php"><input type='submit' class='btn btn-success' id="submit" value='Sign Up' name='signup' required> </a>
</form> 
</div>
<?php



   include "footer.php";
?>