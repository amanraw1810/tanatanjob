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





    <nav class="navbar bg-light p-0 m-0">
        <div class="container-fluid" style="background: black;color:white;">

            <!-- <div align="center" style="margin:auto;">
                <a href="#">
                    <img src="assets/gallery/logo.png" class="logo" style="width: 150px; margin:auto"align="center"></a>
                </div> -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="p-0 m-0">
                            <a href="index.php">
                                <img src="assets/gallery/logo3.png" class="logo" style="width: 100px;"> </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mt-3">
                            <h2 class="text-center" style="font-weight:700;">www.TANATANJOB.com</h2>
                            <h6 class="text-center">Govt.Job|Result|Admit Card</h6>
                        </div>
                    </div>
                    <div class="col-md-4">

                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!--navbar starts-->
    <nav class="navbar navbar-expand-lg bg-dark m-0">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item padd">
                        <a class="nav-link active" style="color: #FFF;font-size:16px" aria-current="page"
                            href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #FFF;font-size:16px" href="latest.php">Latest Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #FFF;font-size:16px" href="result.php">Result</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #FFF;font-size:16px" href="admit.php">Health Care Jobs</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" style="color: #FFF;font-size:16px" href="answer.php">12<sup>th</sup>
                            Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #FFF;font-size:16px" href="syllabus.php">Graduation Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #FFF;font-size:16px" href="admission.php">Police/Defence
                            Jobs</a>
                    </li>
                    <!--<li class="nav-item">-->
                    <!--    <a class="nav-link" style="color: #FFF;font-size:16px" href="contact.php">Contact Us</a>-->
                    <!--</li>-->
                    <!--<li class="nav-item">-->
                    <!--    <a class="nav-link" style="color: #FFF;font-size:16px" href="about.php">About Us</a>-->
                    <!--</li>-->
                    <li class="nav-item">
                        <button type="button" class="btn btn-Secondary" style="color:#FFF;font-size:16px"
                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                            States Govt Jobs
                        </button>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!--Navbar Ends -->

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





    <?php
     $c_id=$_GET['c_id'];
    $data=mysqli_query($con,"SELECT * FROM `syllabus_link` WHERE `s_id`='$c_id'");
    $row=mysqli_fetch_array($data,MYSQLI_ASSOC);
  
    $s_id=$row["s_id"];
    $cat_name=$row["cat_name"];
    $s_link=$row["s_link"];
    $s_details=$row["s_details"];
    $pic=$row['pic'];
?>



    <div class="container table-responsive " align="center">
        <?php echo $s_details; ?>
    </div>
    <div class="container w-50 border-2 mt-4 " align="center">
        <img src=" <?php echo $pic; ?>" alt="" style="width:100%">
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