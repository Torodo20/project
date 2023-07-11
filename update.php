<?php
include " connex.php ";
include " add.php ";

if(isset($_POST["update_post"]))
{
$id=$_POST['id'];
$content=$_POST['content'];
$created_at=$_POST['created_at'];

$req4=" UPDATE post SET content='$content' WHERE id='$id' ";
$res4 = mysqli_query($conn, $req4);  
if( $res4)
{
  echo "Post mis a jr";
}
else
{
    echo "Error:" . mysqli_error($conn);
}
}
?>