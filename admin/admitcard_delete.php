<?php
require('../config/db.php');
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];

    $sql="DELETE FROM `admit_card_link` WHERE ac_id =$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        header('location:add_admitcardlink.php');
        echo "Deleted Successfull";
        
    }
    else {
        {
            die(mysqli_error($way));
        }
    }
}
?>