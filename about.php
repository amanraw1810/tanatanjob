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





    <div class="container mt-3">
        <div class="row">
            <div class="text-center" style="font-size:40px;font-weight:600;">About Us</div>
            <div class="text-center mt-2">
                Tanatanjob jobs portal providing Free information about All Government job Recurenent ,Recrurated by
                Various Goverment Agencies Either Central Govt. or State govt.<br>
                we providing information about<br>
                Latest Jobs<br>
                Admit Card<br>
                Exam Result<br>
                12th Pass Govt. Jobs<br>
                Graduate Govt. Jobs<br>
                Defence Or Police Jobs<br>
                Jobs For Engineer<br>
                Sate Govt Jobs<br>
                All India Govt Jobs<br>
                and All Other Govt Jobs<br>
                Our Ultimate Goal is to provide Systamatic
                and Very Convenient Manner, Correct and Right Time. information about ALL Govt. Jobs<br>
                Email:
                tanatanjob@gmail.com
                tanatanjob@yahoo.com</div>
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