<?php
require_once("config/db.php");
if($_POST)
{
	$sea=$_POST['search'];

	            			$data4=mysqli_query($con,"SELECT * FROM `latest_jobs_link` WHERE `lj_name` LIKE '%$sea%'");
	            			while($row4=mysqli_fetch_array($data4,MYSQLI_ASSOC))
	            			{
	            				// echo "<pre>";
	            				// print_r($row4);
	            				$lj_id =$row4['lj_id'];
	            				$cat_name=$row4['cat_name'];
	            				$state=$row4['state'];
                                $lj_link=$row4['lj_link'];
                                $lj_name=$row4['lj_name'];
                                $lj_details=$row4['lj_details'];
                              
	            				// $pro_title=$row4['pro_title'];
	            				// $pro_title=$row4['pro_title'];
	            				

	            				?>

<div class="grid_1_of_4 images_1_of_4">
    <small style="text-transform: capitalize;text-decoration:none"><a href="job_details.php?c_id=<?php echo $lj_id; ?>"
            target="_blank">
            <?php echo $lj_name; ?>
        </a></small>

</div>
<?php
											}
											
}						
		
	            			
?>