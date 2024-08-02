<?php
include_once("config/db.php");
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

    <div class="container" style="max-width: 525px" ondblclick="window.location.reload()">
        <div class="card-header alert alert-warning text-center p-0 m-0" style="background-color:black;color:white">
            <h6>Search Jobs</h6>
        </div>
        <input type="text" class="form-control" style="border:2px solid black" name="live_search" id="my_val"
            autocomplete="off" placeholder="                                            Type here ..."
            onkeyup="search_product_details()">
        <div id="result" style="cursor:pointer;">
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </div>




    <div class="container pt-1" style="overflow:hidden;">
        <div class="row">
            <div>
                <img src="d1.png" alt="" width="100%" height="40px">
            </div>
        </div>
        <div class="row">
            <div style="text-align:center;color:black;font-size:22px;font-weight:700;">
                Tanatan Job : tanatanjob.com All Government Jobs Online Form at Tanatan Job 2023
            </div>
        </div>
        <div class="row">
            <div style="text-align:center;color:red;font-size:22px;">
                Welcome to India's No 1 Education Website Tanatan Job
            </div>
        </div>

    </div>
    <div class="container" align="center" style="overflow:hidden;">
        <div class="row">
            <h2 class="text-center" style="color:orange;font-size:42px;font-weight:700;">Latest Update</h2>
        </div>
        <div class="row">
            <?php
                $data = mysqli_query($con,"SELECT * FROM `latest_jobs_link` ORDER BY lj_id desc LIMIT 8");
                while($row=mysqli_fetch_array($data, MYSQLI_ASSOC))
                {
                    $lj_id = $row["lj_id"];
                    $cat_name = $row["cat_name"];
                    $lj_link = $row["lj_link"];
                    $lj_name = $row["lj_name"];
                
            ?>
            <div class="col-md-3">
                <div class="btn-group mt-2" role="group" aria-label="Basic example">
                    <a type="button" href="job_details.php?c_id=<?php echo $lj_id; ?>" class="btn btn-primary"
                        target="_blank"
                        style="width:260px;height:100px; background-color:blue;font-size:19px;font-weight:700;">
                        <?php echo $lj_name; ?>
                    </a>
                </div>
            </div>
            <?php
                }
            ?>
        </div>


    </div>
    <div class="container mt-2" style="overflow:hidden;">
        <div class="row">
            <div class="col-md-4 pb-1">
                <div style="border: solid 3px; color:black;">
                    <h2 style="background-color: black;text-align:center; font-weight: 700;color:white">Result</h2>

                    <?php
                        $data = mysqli_query($con,"SELECT * FROM `link` ORDER BY link_id desc  LIMIT 16");
                        while($row=mysqli_fetch_array($data, MYSQLI_ASSOC))
                        {
                            $link_id = $row["link_id"];
                            $cat_name = $row["cat_name"];
                            $link_name = $row["link_name"];
                            $link = $row["link"];
                        
                    ?>
                    <ul>

                        <li> <a href="result_details.php?c_id=<?php echo $link_id; ?>"
                                style="font-size:20px;font-weight:600" target="_blank"><?php echo $link_name; ?></a>
                        </li>

                    </ul>
                    <?php
                        }
                    ?>
                    <a href="result.php" target="_blank"> <input type="submit" value="Read More"
                            class="text-center btn btn-dark px-3 mx-3"></a>
                </div>

            </div>
            <div class="col-md-4 pb-1">
                <div style="border: solid 3px; color:black">
                    <h2 style="background-color: black;color:white;text-align:center;font-weight: 700;">Admit Card
                    </h2>
                    <?php
                        $data = mysqli_query($con,"SELECT * FROM `admit_card_link` ORDER BY ac_id desc LIMIT 16");
                        while($row=mysqli_fetch_array($data, MYSQLI_ASSOC))
                        {
                            $ac_id = $row["ac_id"];
                            $cat_name = $row["cat_name"];
                            $ac_link = $row["ac_link"];
                            $ac_name = $row["ac_name"];
                            $ac_details = $row["ac_details"];
                    ?>
                    <ul>

                        <li>
                            <a href="admit_card_details.php?c_id=<?php echo $ac_id; ?>"
                                style="font-size:20px;font-weight:600" target="_blank"><?php echo $ac_name; ?>
                            </a>
                        </li>


                    </ul>
                    <?php
                        }
                    ?>
                    <a href="admit.php" target="_blank"> <input type="submit" value="Read More"
                            class="text-center btn btn-dark px-3 mx-3"></a>
                </div>
            </div>
            <div class="col-md-4 pb-1">
                <div style="border: solid 3px; color:black">
                    <h2 style="background-color: black;color:white;text-align:center;font-weight: 700;">
                        Latest Jobs
                    </h2>
                    <?php
                        $data = mysqli_query($con,"SELECT * FROM `latest_jobs_link` ORDER BY lj_id desc LIMIT 16");
                        while($row=mysqli_fetch_array($data, MYSQLI_ASSOC))
                        {
                            $lj_id = $row["lj_id"];
                            $cat_name = $row["cat_name"];
                            $lj_link = $row["lj_link"];
                            $lj_name = $row["lj_name"];
                        
                    ?>
                    <ul>

                        <li> <a href="job_details.php?c_id=<?php echo $lj_id; ?>"
                                style="font-size:20px;font-weight:600"><?php echo $lj_name; ?></a></li>

                    </ul>
                    <?php
                        }
                    ?>
                    <a href="latest.php" target="_blank"> <input type="submit" value="Read More"
                            class="text-center btn btn-dark px-3 mx-3"></a>
                </div>
            </div>
            <div class="col-md-4 pb-1">
                <div style="border: solid 3px; color:black">
                    <h2 style="background-color: black;color:white;text-align:center;font-weight: 700;">
                        12<sup>th</sup> Level Jobs</h2>
                    <?php
                        $data = mysqli_query($con,"SELECT * FROM `answer_key` ORDER BY ak_id desc LIMIT 16");
                        while($row=mysqli_fetch_array($data, MYSQLI_ASSOC))
                        {
                            $ak_id = $row["ak_id"];
                            $cat_name = $row["cat_name"];
                            $ak_link = $row["ak_link"];
                            $ak_name = $row["ak_name"];
                        
                    ?>
                    <ul>

                        <li> <a href="anshwer_details.php?c_id=<?php echo $ak_id; ?>"
                                style="font-size:20px;font-weight:600" target="_blank"><?php echo $ak_name; ?></a></li>

                    </ul>
                    <?php
                        }
                    ?>
                    <a href="answer.php" target="_blank"> <input type="submit" value="Read More"
                            class="text-center btn btn-dark px-3 mx-3"></a>
                </div>
            </div>
            <div class="col-md-4 pb-1">
                <div style="border: solid 3px; color:black">
                    <h2 style="background-color: black;color:white;text-align:center;font-weight: 700;">
                        Graduation Jobs
                    </h2>
                    <?php
                        $data = mysqli_query($con,"SELECT * FROM `syllabus_link` ORDER BY s_id desc LIMIT 16");
                        while($row=mysqli_fetch_array($data, MYSQLI_ASSOC))
                        {
                            $s_id = $row["s_id"];
                            $cat_name = $row["cat_name"];
                            $s_link = $row["s_link"];
                            $s_name = $row["s_name"];
                        
                    ?>
                    <ul>

                        <li> <a href="syllabus_details.php?c_id=<?php echo $s_id; ?>"
                                style="font-size:20px;font-weight:600" target="_blank"><?php echo $s_link; ?></a></li>

                    </ul>
                    <?php
                        }
                    ?>
                    <a href="syllabus.php" target="_blank"><input type="submit" value="Read More"
                            class="text-center btn btn-dark px-3 mx-3"></a>
                </div>
            </div>
            <div class="col-md-4 pb-1">
                <div style="border: solid 3px; color:black">
                    <h2 style="background-color: black;color:white;text-align:center;font-weight: 700;">
                        Police/Defence
                        Jobs</h2>
                    <?php
                        $data = mysqli_query($con,"SELECT * FROM `admission_link` ORDER BY a_id desc LIMIT 16");
                        while($row=mysqli_fetch_array($data, MYSQLI_ASSOC))
                        {
                            $a_id = $row["a_id"];
                            $cat_name = $row["cat_name"];
                            $ad_link = $row["ad_link"];
                            $ad_name = $row["ad_name"];
                            $ad_details = $row["ad_details"];
                        
                    ?>
                    <ul>

                        <li> <a href="admission_details.php?c_id=<?php echo $a_id; ?>"
                                style="font-size:20px;font-weight:600" target="_blank"><?php echo $ad_link; ?></a></li>

                    </ul>
                    <?php
                        }
                    ?>
                    <a href="admission.php" target="_blank"><input type="submit" value="Read More"
                            class="text-center btn btn-dark px-3 mx-3"></a>
                </div>
            </div>
            <div class="col-md-4 pb-1">
                <div style="border: solid 3px; color:black">
                    <h2 style="background-color: black;color:white;text-align:center;font-weight: 700;">
                        Health Care Jobs
                    </h2>
                    <?php
                        $data = mysqli_query($con,"SELECT * FROM `certificate_link` ORDER BY ct_id desc LIMIT 16 ");
                        while($row=mysqli_fetch_array($data, MYSQLI_ASSOC))
                        {
                            $ct_id  = $row["ct_id"];
                            $cat_name = $row["cat_name"];
                            $ct_link = $row["ct_link"];
                            $ct_name = $row["ct_name"];
                        
                    ?>
                    <ul>

                        <li> <a href="certificate_details.php?c_id=<?php echo $ct_id; ?>"
                                style="font-size:20px;font-weight:600" target="_blank"><?php echo $ct_name; ?></a>
                        </li>

                    </ul>
                    <?php
                        }
                    ?>
                    <a href="certificate.php" target="_blank"><input type="submit" value="Read More"
                            class="text-center btn btn-dark px-3 mx-3"></a>
                </div>
            </div>
            <div class="col-md-4 pb-1">
                <div style="border: solid 3px; color:black">
                    <h2 style="background-color: black;color:white;text-align:center;font-weight: 700;">
                        Engineering Jobs
                    </h2>
                    <?php
                        $data = mysqli_query($con,"SELECT * FROM `imp_link` ORDER BY imp_id desc LIMIT 16");
                        while($row=mysqli_fetch_array($data, MYSQLI_ASSOC))
                        {
                            $imp_id = $row["imp_id"];
                            $cat_name = $row["cat_name"];
                            $imp_link = $row["imp_link"];
                            $imp_name = $row["imp_name"];
      
                    ?>
                    <ul>

                        <li> <a href="important_details.php?c_id=<?php echo $imp_id; ?>"
                                style="font-size:20px;font-weight:600" target="_blank"><?php echo $imp_name; ?></a>
                        </li>

                    </ul>
                    <?php
                        }
                    ?>
                    <a href="important.php" target="_blank"><input type="submit" value="Read More"
                            class="text-center btn btn-dark px-3 mx-3"></a>
                </div>
            </div>
            <div class="col-md-4 pb-1">
                <div style="border: solid 3px; color:black">
                    <h2 style="background-color: black;color:white;text-align:center;font-weight: 700;">
                        Miscellaneous Jobs
                    </h2>
                    <?php
                      $data = mysqli_query($con,"SELECT * FROM `misslaneous_link` ORDER BY m_id desc LIMIT 16");
                      while($row=mysqli_fetch_array($data, MYSQLI_ASSOC))
                      {
                        $m_id = $row["m_id"];
                        $cat_name = $row["cat_name"];
                        $m_link = $row["m_link"];
                        $m_name	 = $row["m_name"];
                      
                    ?>
                    <ul>

                        <li> <a href="misslaneous_details.php?c_id=<?php echo $m_id; ?>"
                                style="font-size:20px;font-weight:600" target="_blank"><?php echo $m_name	; ?></a>
                        </li>

                    </ul>
                    <?php
                        }
                    ?>
                    <a href="misslaneous.php" target="_blank">
                        <input type="submit" value="Read More" class="text-center btn btn-dark px-3 mx-3">
                    </a>
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







    <script type="text/javascript">
    $(document).ready(function() {
        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
    </script>
    <a href="#" id="toTop"> </a>
    <script type="text/javascript" src="js/navigation.js"></script>

    <script type="text/javascript">
    function search_product_details() {
        let sea = $("#my_val").val();
        // alert(sea)
        var dataString = 'search=' + sea;

        $.ajax({
            type: "POST",
            url: "live_serch.php",
            data: dataString,
            cache: false,
            success: function(html) {
                //alert(html);
                $("#result").html(html).show();
                // location.reload();

            }
        });
    }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>