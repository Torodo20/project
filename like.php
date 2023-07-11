<?php
 include "connex.php";

if (isset($_GET["like_post"]))
{
    $id=$_GET["like_post"];

    $req2="UPDATE post SET like + 1 WHERE id = '$id' ";
    $result= mysqli_query($conn, $req2);

    if($result)
    {
        echo "Post liked";
    }
    else
    {
        echo "Error: " .mysqli_error($conn);
    }
}

?>