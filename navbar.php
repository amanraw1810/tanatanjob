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
                               <img src="assets/gallery/logo4.png" class="logo" style="width: 120px;"> </a>
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
                       <a class="nav-link active" style="color: #FFF;font-size:18px;font-weight:600; "
                           aria-current="page" href="index.php">Home &nbsp|</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" style="color: #FFF;font-size:18px;font-weight:600;" href="latest.php"
                           target="_blank">Latest Jobs &nbsp|</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" style="color: #FFF;font-size:18px;font-weight:600;" href="result.php"
                           target="_blank">Result &nbsp|</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" style="color: #FFF;font-size:18px;font-weight:600;" href="admit.php"
                           target="_blank">Admit Card &nbsp|</a>
                   </li>

                   <li class="nav-item">
                       <a class="nav-link" style="color: #FFF;font-size:18px;font-weight:600;" href="answer.php"
                           target="_blank">12<sup>th</sup>
                           Pass Jobs &nbsp|</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" style="color: #FFF;font-size:18px;font-weight:600;" href="syllabus.php"
                           target="_blank">Graduation Jobs &nbsp|</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" style="color: #FFF;font-size:18px;font-weight:600;"
                           href="admission.php">Police/Defence
                           Jobs &nbsp|</a>
                   </li>
                   <!--<li class="nav-item">-->
                   <!--    <a class="nav-link" style="color: #FFF;font-size:16px" href="contact.php">Contact Us</a>-->
                   <!--</li>-->
                   <!--<li class="nav-item">-->
                   <!--    <a class="nav-link" style="color: #FFF;font-size:16px" href="about.php">About Us</a>-->
                   <!--</li>-->
                   <li class="nav-item">
                       <button type="button" class="btn btn-Secondary"
                           style="color:#FFF;font-size:20px;font-weight:600;" data-bs-toggle="modal"
                           data-bs-target="#exampleModal">
                           States Govt Jobs
                       </button>
                   </li>
               </ul>
               <!-- <form class="d-flex" role="search" action="search_reult.php">
                   <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search"
                       id="job" required>
                 
                   <button class="btn btn-outline-success" type="submit">Search</button>
               </form>
               <div id="search_result"></div> -->
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
      $data = mysqli_query($con,"SELECT * FROM `states`");
      while($row=mysqli_fetch_array($data, MYSQLI_ASSOC))
      {
        $s_id = $row["s_id"];
        $s_name = $row["s_name"];
        // $state = $row["state"];
        // $lj_link = $row["lj_link"];
        // $lj_name = $row["lj_name"];
      
      ?>
                   <ul>

                       <li> <a href="state.php?s_name=<?php echo $s_name; ?>" target="_blank"><?php echo $s_name; ?></a>
                       </li>

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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script type="text/javascript">
$(document).ready(function() {
    $("#job").keyup(function() {
        var query = $(this).val();
        if (query != "") {
            $.ajax({
                url: 'live_serch.php',
                method: 'POST',
                data: {
                    query: query
                },
                success: function(data) {
                    $('#search_result').html(data);
                    $('#search_result').css('display', 'block');
                    $("#job").focusout(function() {
                        $('#search_result').css('display', 'none');
                    });
                    $("#job").focusin(function() {
                        $('#search_result').css('display', 'block');
                    });
                }
            });
        } else {
            $('#search_result').css('display', 'none');
        }
    });
});
   </script>