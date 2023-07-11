<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    include 'connex.php';
 
 $username = mysqli_real_escape_string($conn,htmlspecialchars($_POST['username'])); 
 $password = mysqli_real_escape_string($conn,htmlspecialchars($_POST['password']));

 if($username !== "" && $password !== "")
 {
 $requete = "SELECT count(*) FROM user where username = '$username' and pass = '$password' ";

 $result = mysqli_query($conn,$requete);
 $reponse = mysqli_fetch_array($result);
 $count = $reponse['count(*)'];
 if($count!=0) 
 {
 $_SESSION['username'] = $username;
 header('Location: index.php');
 }
 else
 {
 header('Location: login.php?erreur=1'); 
 }
 }
 else
 {
 header('Location: login.php?erreur=2'); 
 }
}
else
{
 header('Location: login.php');
}
mysqli_close($conn); 
?>