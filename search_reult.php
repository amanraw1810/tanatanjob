<?php
error_reporting(0);
require("config/db.php");
$search_result=$_GET['search'];
$data=mysqli_query($con,"SELECT * FROM `latest_jobs_link` WHERE `lj_name`='$search_result'");
$row=mysqli_fetch_array($data,MYSQLI_ASSOC);

$lj_id=$row['lj_id'];
$cat_name=$row['cat_name'];
$state=$row['state'];
$lj_link=$row['lj_link'];
$lj_name=$row['lj_name'];
$lj_details=$row['lj_details'];


// $data1=mysqli_query($con,"SELECT * FROM `admission_link` WHERE `ad_name`='$search_result'");
// $row1=mysqli_fetch_array($data1,MYSQLI_ASSOC);

// $a_id=$row1['a_id'];
// $cat_name=$row1['cat_name'];
// $ad_link=$row1['ad_link'];
// $ad_name=$row1['ad_name'];
// $ad_details=$row1['ad_details'];


// $data3=mysqli_query($con,"SELECT * FROM `admit_card_link` WHERE `ac_name`='$search_result'");
// $row3=mysqli_fetch_array($data3,MYSQLI_ASSOC);

// $ac_id=$row3['ac_id'];
// $cat_name=$row3['cat_name'];
// $ac_link=$row3['ac_link'];
// $ac_name=$row3['ac_name'];
// $ac_details=$row3['ac_details'];


// $data4=mysqli_query($con,"SELECT * FROM `answer_key` WHERE `ak_name`='$search_result'");
// $row4=mysqli_fetch_array($data4,MYSQLI_ASSOC);

// $ac_id=$row4['ac_id'];
// $cat_name=$row4['cat_name'];
// $ak_link=$row4['ak_link'];
// $ak_name=$row4['ak_name'];
// $ak_details=$row4['ak_details'];


// $data5=mysqli_query($con,"SELECT * FROM `certificate_link` WHERE `ct_name`='$search_result'");
// $row5=mysqli_fetch_array($data5,MYSQLI_ASSOC);

// $ct_id=$row5['ct_id'];
// $cat_name=$row5['cat_name'];
// $ct_link=$row5['ct_link'];
// $ct_name=$row5['ct_name'];
// $ct_details=$row5['ct_details'];




// $data6=mysqli_query($con,"SELECT * FROM `imp_link` WHERE `imp_name`='$search_result'");
// $row6=mysqli_fetch_array($data6,MYSQLI_ASSOC);

// $imp_id=$row6['imp_id'];
// $cat_name=$row6['cat_name'];
// $imp_link=$row6['imp_link'];
// $imp_name=$row6['imp_name'];
// $imp_details=$row6['imp_details'];



// $data7=mysqli_query($con,"SELECT * FROM `link` WHERE `link_name`='$search_result'");
// $row7=mysqli_fetch_array($data7,MYSQLI_ASSOC);

// $imp_id=$row7['imp_id'];
// $cat_name=$row7['cat_name'];
// $link=$row7['link'];
// $link_name=$row7['link_name'];
// $link_details=$row7['link_details'];




// $data8=mysqli_query($con,"SELECT * FROM `misslaneous_link` WHERE `m_name`='$search_result'");
// $row8=mysqli_fetch_array($data8,MYSQLI_ASSOC);

// $imp_id=$row8['imp_id'];
// $cat_name=$row8['cat_name'];
// $m_link=$row8['m_link'];
// $m_name=$row8['m_name'];
// $m_details=$row8['m_details'];





// $data9=mysqli_query($con,"SELECT * FROM `misslaneous_link` WHERE `m_name`='$search_result'");
// $row9=mysqli_fetch_array($data9,MYSQLI_ASSOC);

// $m_id=$row9['m_id'];
// $cat_name=$row9['cat_name'];
// $m_link=$row9['m_link'];
// $m_name=$row9['m_name'];
// $m_details=$row9['m_details'];




// $data10=mysqli_query($con,"SELECT * FROM `syllabus_link` WHERE `s_name`='$search_result'");
// $row10=mysqli_fetch_array($data10,MYSQLI_ASSOC);

// $s_id=$row10['s_id'];
// $cat_name=$row10['cat_name'];

// $s_link=$row10['s_link'];
// $s_name=$row10['s_name'];
// $s_details=$row10['s_details'];



?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tanatan Jobs</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<style>
.logo {
    width: "60%";
    height: "70px";
    text-align: center;
    justify-content: center;
    padding-top: 10px;
    padding-bottom: 10px;

}

.text1 {
    font-size: 35px;
    font-weight: 700;
}

.col_white_amrc {
    color: #FFF;
}

footer {
    width: 100%;
    background-color: #263238;
    min-height: 250px;
    padding: 10px 0px 25px 0px;
}

.pt2 {
    padding-top: 40px;
    margin-bottom: 20px;
}

footer p {
    font-size: 13px;
    color: #CCC;
    padding-bottom: 0px;
    margin-bottom: 8px;
}

.mb10 {
    padding-bottom: 15px;
}

.footer_ul_amrc {
    margin: 0px;
    list-style-type: none;
    font-size: 14px;
    padding: 0px 0px 10px 0px;
}

.footer_ul_amrc li {
    padding: 0px 0px 5px 0px;
}

.footer_ul_amrc li a {
    color: #CCC;
}

.footer_ul_amrc li a:hover {
    color: #fff;
    text-decoration: none;
}

.fleft {
    float: left;
}

.padding-right {
    padding-right: 10px;
}

.footer_ul2_amrc {
    margin: 0px;
    list-style-type: none;
    padding: 0px;
}

.footer_ul2_amrc li p {
    display: table;
}

.footer_ul2_amrc li a:hover {
    text-decoration: none;
}

.footer_ul2_amrc li i {
    margin-top: 5px;
}

.bottom_border {
    border-bottom: 1px solid #323f45;
    padding-bottom: 20px;
}

.foote_bottom_ul_amrc {
    list-style-type: none;
    padding: 0px;
    display: table;
    margin-top: 10px;
    margin-right: auto;
    margin-bottom: 10px;
    margin-left: auto;
}

.foote_bottom_ul_amrc li {
    display: inline;
}

.foote_bottom_ul_amrc li a {
    color: #999;
    margin: 0 12px;
}

.social_footer_ul {
    display: table;
    margin: 15px auto 0 auto;
    list-style-type: none;
}

.social_footer_ul li {
    padding-left: 20px;
    padding-top: 10px;
    float: left;
}

.social_footer_ul li a {
    color: #CCC;
    border: 1px solid #CCC;
    padding: 8px;
    border-radius: 50%;
}

.social_footer_ul li i {
    width: 20px;
    height: 20px;
    text-align: center;
}

.padd {
    padding-left: 150px;
}


@media screen and (max-width: 600px) {
    .logo {
        width: "40px";
        height: "65px";
        padding-top: 10px;
        padding-bottom: 10px;
        text-align: center;
    }

    .text1 {
        font-size: 20px;
        font-weight: 600;
    }

    .padd {
        padding-left: 0px;
    }
}
</style>

<body>





    <?php 
 include("navbar.php");
 ?>





    <div class="container mt-2" style="width:80%">
        <div class="row">
            <div class="col-md-4 pb-1">
                <div style="border: solid 3px; color:black;">
                    <h2 style="background-color: black;text-align:center; font-weight: 700;color:white">Search Result
                    </h2>
                    <?php
                    $search_result=$_GET['search'];
        $data=mysqli_query($con,"SELECT * FROM `latest_jobs_link` WHERE `lj_name`='$search_result'");
        while($row=mysqli_fetch_array($data,MYSQLI_ASSOC))
        {
            $lj_id=$row['lj_id'];
            $cat_name=$row['cat_name'];
            $state=$row['state'];
            $lj_link=$row['lj_link'];
            $lj_name=$row['lj_name'];
            $lj_details=$row['lj_details'];
            // $data5=mysqli_query($con,"SELECT `car_image_name` FROM `car_image` WHERE `car_ref_id`='$car_id' 
            // ORDER BY img_id asc LIMIT 1");
            // $row5=mysqli_fetch_array($data5,MYSQLI_ASSOC);
            // $car_image_name=$row5['car_image_name'];

            // $data1=mysqli_query($con,"SELECT * FROM `admission_link` WHERE `ad_name`='$search_result'");
            // $row1=mysqli_fetch_array($data1,MYSQLI_ASSOC);

            // $a_id=$row1['a_id'];
            // $cat_name=$row1['cat_name'];
            // $ad_link=$row1['ad_link'];
            // $ad_name=$row1['ad_name'];
            // $ad_details=$row1['ad_details'];

    ?>

                    <ul>

                        <li>
                            <a href="job_details.php?c_id=<?php echo $lj_id; ?>" target="_blank"><?php echo $lj_name; ?>
                            </a>
                        </li>

                        <!-- <li> <a href="admission_details.php?c_id=<?php echo $a_id; ?>"
                                target="_blank"><?php echo $ad_link; ?></a></li> -->

                    </ul>
                    <?php
                        }
                    
                    ?>
                    <a href="result.php" target="_blank"> <input type="submit" value="Read More"
                            class="text-center btn btn-dark px-3 mx-3"></a>
                </div>

            </div>

        </div>
    </div>




    <div class="text-center"> <a href=""> <img src="assets/gallery/dmca_premi_badge.png" alt=""> </div></a>



    <div class="container" align="center" style="overflow:hidden;">
        <div class="row">
            <div style="border: solid 3px; color:black">
                <?php
                    $data = mysqli_query($con, "SELECT * FROM `content`");
                    while($row=mysqli_fetch_array($data, MYSQLI_ASSOC))
                    {
                    $content_id = $row["content_id"];
                    $c_heading = $row["c_heading"];
                    $c_description = $row["c_description"];
                    $c_description2 = $row["c_description2"];
                    $c_description3 = $row["c_description3"];
                ?>
                <div class="p-2">
                    <h2
                        style=" background: linear-gradient(to top right, #ffffff 13%, #3366ff 100%);text-align:center;">
                        <?php echo $c_heading; ?></h2>
                    <p class="justify-content-center text-center p-2"><?php echo $c_description;  ?></p>
                    <p class="justify-content-center text-center p-2"><?php echo $c_description2;  ?></p>
                    <p class="justify-content-center text-center p-2"><?php echo $c_description3;  ?></p>


                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>


    <!--Footer Starts -->
    <?php 
include("footer.php");
?>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>