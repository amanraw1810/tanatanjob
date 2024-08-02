<?php
require('../config/db.php');
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];

    $sql="DELETE FROM `answer_key` WHERE ak_id =$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        header('location:add_answerkey.php');
        echo "Deleted Successfull";
        
    }
    else {
        {
            die(mysqli_error($way));
        }
    }
}
?>