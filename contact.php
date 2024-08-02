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





    <?Php 
   include("navbar.php");
   ?>




    <div class="container mt-3" style="background-color:#092139;color:white;">
        <h1 class="text-center text-white">Contact Us</h1>
        <form action="send.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">

            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">

            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                <input type="text" name="phone" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">

            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Messege</label>
                <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>

            </div>


            <button type="submit" class="btn btn-primary mb-4 w-100">Submit</button>
        </form>
    </div>



    <!--Footer Starts -->
    <?php 
include("footer.php");
?>









<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
</script>
        
        
</body>

</html>