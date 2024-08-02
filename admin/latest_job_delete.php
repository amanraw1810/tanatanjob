<?php
require('../config/db.php');
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];

    $sql="DELETE FROM `latest_jobs_link` WHERE lj_id =$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        header('location:add_latestjob.php');
        echo "Deleted Successfull";
        
    }
    else {
        {
            die(mysqli_error($way));
        }
    }
}
?>