<?php
include " connex.php ";

if(isset($_GET["delete_post"]))
{
    $id=$_GET["delete_post"];

    $req2="DELETE FROM post WHERE id='$id'";
    $resultat=mysqli_query($conn, $req2);

    if($resultat)
    {
        echo "Post Supp";
    }
    else
    {
        echo "Error:". mysqli_error($conn);
    }
}
?>