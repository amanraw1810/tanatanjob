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






    <div class="container pt-3">
        <div class="row">
            <div style="text-align:center;color:black;font-size:22px;font-weight:700;">Tanatan Jobs :
                tanatan.Com Sarkari Naukri Latest Jobs Online Form at Tanatan Jobs 2023</div>
        </div>
        <div class="row">
            <div style="text-align:center;color:red;font-size:22px;">Welcome to India's No 1 Education Website Tanatan
                Jobs</div>
        </div>
        <div class="row">
            <div class="mt-5" style="text-align:center;">
                <!--<a href="https://alkastudy.com/"> <img src="assets/gallery/4.png" alt=""-->
                <!--        style="text-align:center;width:100%;"></a>-->
            </div>

        </div>
    </div>


    </div>
    <div class="container" style="width:80%">
        <div class="row">
            <div class="col-md-12 p-1">
                <div style="border: solid 3px; color:black">
                    <h2 style="background-color: black;color:white;text-align:center;font-weight: 700;">Latest Jobs</h2>
                    <?php
      $data = mysqli_query($con,"SELECT * FROM `latest_jobs_link` ORDER BY lj_id desc  ");
      while($row=mysqli_fetch_array($data, MYSQLI_ASSOC))
      {
        $lj_id = $row["lj_id"];
        $cat_name = $row["cat_name"];
        $lj_link = $row["lj_link"];
        $lj_name = $row["lj_name"];
        $lj_details = $row["lj_details"];
      ?>
                    <ul>

                        <li> <a href="job_details.php?c_id=<?php echo $lj_id; ?>"
                                style="font-size:20px;font-weight:600"><?php echo $lj_name; ?></a>
                        </li>


                    </ul>
                    <?php
      }
      ?>
                    <!--<input type="submit" value="Read More" class="text-center btn btn-dark px-3 mx-3">-->
                </div>
            </div>
        </div>
    </div>
    <div class="container">
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
    <footer class="footer mt-5" style="background-color:black">
        <div class="container-fluid bottom_border ">
            <div class="row">
                <div class=" col-sm-3 col-md col-sm-4  col-12 col">
                    <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
                    <!--headin5_amrc-->
                    <p class="mb10">Tantanjob टनाटन जॉब

                        For All Govt Job,
                        Latest Notification
                        Admit Card
                        Result</p>
                    <p><i class="fa fa-location-arrow"></i>New Delhi</p>
                    <p><i class="fa fa-envelope"></i> tantantanjob@yahoo.com </p>
                    <p><i class="fa fa fa-envelope"></i> tanatanjob@gmail.com </p>


                </div>


                <!-- <div class=" col-sm-4 col-md  col-6 col">
                    <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                    
                    <ul class="footer_ul_amrc">
                        <li><a href="http://webenlance.com">Image Rectoucing</a></li>
                        <li><a href="http://webenlance.com">Clipping Path</a></li>
                        <li><a href="http://webenlance.com">Hollow Man Montage</a></li>
                        <li><a href="http://webenlance.com">Ebay & Amazon</a></li>
                        <li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
                        <li><a href="http://webenlance.com">Image Cropping</a></li>
                    </ul>
                   
                </div> -->



                <div class=" col-sm-3 col-md  col-12 col">
                    <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                    <!--headin5_amrc-->
                    <ul class="footer_ul_amrc">
                        <li><a href="latest.php">Latest Jobs</a></li>
                        <li><a href="admission.php">Admission</a></li>
                        <li><a href="answer.php">Answer Key</a></li>
                        <li><a href="certificate.php">Certificate</a></li>
                        <li><a href="result.php">Result</a></li>
                        <li><a href="syllabus.php">Syllabus</a></li>
                    </ul>
                    <!--footer_ul_amrc ends here-->
                </div>

                <div class=" col-sm-3 col-md  col-12 col">
                    <h5 class="headin5_amrc col_white_amrc pt2">Ploicies</h5>
                    <!--headin5_amrc-->
                    <ul class="footer_ul_amrc">
                        <li><a href="privacy.php">Privacy policy </a></li>
                        <li><a href="disclaimer.php">Disclaimer </a></li>

                    </ul>
                    <!--footer_ul_amrc ends here-->
                </div>


                <div class=" col-sm-3 col-md  col-12 col">
                    <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
                    <!--headin5_amrc ends here-->

                    <ul class="footer_ul2_amrc">
                        <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
                            <p>Twitter<a
                                    href="https://twitter.com/tanatanjob?t=aLau8BgDEzQps_W-9y1_KQ&s=09">https://www.tanatan/twitter.com/</a>
                            </p>
                        </li>
                        <!--<li><a href="#"><i class="fab fa-facebook fleft padding-right"></i> </a>-->
                        <!--    <p>Facebook<a href="#">https://www.lipsum.com/</a></p>-->
                        <!--</li>-->
                        <li><a href="#"><i class="fab fa-instagram fleft padding-right"></i> </a>
                            <p>Instagram<a
                                    href="https://instagram.com/tanatanjob?igshid=ZDdkNTZiNTM=">https://www.tanatan/instagram.com/</a>
                            </p>
                        </li>
                        <li><a href="#"><i class="fab fa-linkedin fleft padding-right"></i> </a>
                            <p>Linkedin<a
                                    href="https://www.linkedin.com/in/tanatan-job-0560ab268">https://www.tanatan/Linkdin.com/</a>
                            </p>
                        </li>
                    </ul>
                    <!--footer_ul2_amrc ends here-->
                </div>
            </div>
        </div>


        <div class="container">
            <ul class="foote_bottom_ul_amrc">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>



                <li><a href="contact.php">Contact</a></li>
            </ul>
            <!--foote_bottom_ul_amrc ends here-->
            <p class="text-center">Copyright @2023 | Designed And Developed By <a href="msdigitalbranding.in">MS Digital
                    Branding</a></p>

            <ul class="social_footer_ul">
                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://twitter.com/tanatanjob?t=aLau8BgDEzQps_W-9y1_KQ&s=09"><i
                            class="fab fa-twitter"></i></a></li>
                <li><a href="https://www.linkedin.com/in/tanatan-job-0560ab268"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="https://instagram.com/tanatanjob?igshid=ZDdkNTZiNTM="><i class="fab fa-instagram"></i></a>
                </li>
            </ul>
            <!--social_footer_ul ends here-->
        </div>

    </footer>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>