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



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Get All Latest Jobs By States</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php
      $data = mysqli_query($con,"SELECT * FROM `latest_jobs_link`");
      while($row=mysqli_fetch_array($data, MYSQLI_ASSOC))
      {
        $lj_id = $row["lj_id"];
        $cat_name = $row["cat_name"];
        $state = $row["state"];
        $lj_link = $row["lj_link"];
        $lj_name = $row["lj_name"];
      
      ?>
                    <ul>

                        <li> <a href="state.php?s_name=<?php echo $state; ?>"><?php echo $state; ?></a></li>

                    </ul>
                    <?php
      }
      ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>




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
    <div class="container" style="width:80%;">
        <div class="row">
            <div class="col-md-12 p-1">
                <div style="border: solid 3px; color:black">
                    <h2 style="background-color: black;color:white;text-align:center;font-weight: 700;">Graduation Jobs
                    </h2>
                    <?php
      $data = mysqli_query($con,"SELECT * FROM `syllabus_link` ORDER by s_id desc ");
      while($row=mysqli_fetch_array($data, MYSQLI_ASSOC))
      {
        $s_id = $row["s_id"];
        $cat_name = $row["cat_name"];
        $s_link = $row["s_link"];
        $s_name = $row["s_name"];
        $s_details = $row["s_details"];
      ?>
                    <ul>

                        <li> <a href="syllabus_details.php?c_id=<?php echo $s_id; ?>"
                                style="font-size:20px;font-weight:600"><?php echo $s_name; ?></a>
                        </li>


                    </ul>
                    <?php
      }
      ?>

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
    <?php 
include("footer.php");
?>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>