<?php
require('../config/db.php');
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];

    $sql="DELETE FROM `admission_link` WHERE a_id =$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        header('location:add_admissionlink.php');
        echo "Deleted Successfull";
        
    }
    else {
        {
            die(mysqli_error($way));
        }
    }
}
?>