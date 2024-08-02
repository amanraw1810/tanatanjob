<?php
error_reporting(0);
    require('../config/db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">


    <?php
        require('layout/title.php');
    ?>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <script src="tinymce/tinymce.min.js"></script>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->

        <!-- Sidebar Start -->
        <?php
            require('layout/sidebar.php');
        ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php
                require('layout/navbar.php');
            ?>
            <!-- Navbar End -->


            <?php 

// require_once("../config/db.php");

extract($_POST);
if(isset($addlatestjobs_link))
{
        // 	echo "<pre>";
        // 	print_r($_POST);

    $name=$_FILES['brand_image']['name'];
    $temp=$_FILES['brand_image']['tmp_name'];

    $ext=end(explode(".", $name));

    if($ext=="jpg" or $ext=="png" or $ext=="webp")
    {
        $brand_image=rand(99999,999999);

        $f_pic=$brand_image.".jpg";

        $upload="../assets/gallery/$f_pic";
        $upload1="assets/gallery/$f_pic";
        move_uploaded_file($_FILES["brand_image"]["tmp_name"][$key],$upload);

        if(move_uploaded_file($temp, "../assets/gallery/$f_pic"))
        {
            $sql="INSERT INTO `latest_jobs_link` (`cat_name`,`state`,`lj_link`,`lj_name`,`lj_details`,`pic`) 
            VALUES ('$cat_name','$state','$lj_link','$lj_name','$lj_details','$upload1')";
            if(mysqli_query($con,$sql))
            {
                // header("location:Brand.php");
                $msg="Brand Inserted Successfully !";
            }  	

            else    
            {
                $msg="Record Not Inserted !";	
            }
        }

        else
        {
            $msg="Upload first Brand";
        }             

    }
    
    else
    {
        $msg="Must be upload  Brand picture";
    }
}

?>
            <div class="container p-5">
                <h1>Add Latest Job</h1>
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Select Category</label>
                        <select class="form-control" name="cat_name">
                            <option>----Select Category-----</option>
                            <?php  
                                    $data=mysqli_query($con,"SELECT * FROM `category`");
                                    while ($row=mysqli_fetch_array($data,MYSQLI_ASSOC)) {
                                    // $category_id = $row['category_id'];
                                        $cat_name=$row['cat_name'];
                                        ?>
                            <option value="<?php echo $cat_name; ?>"><?php echo $cat_name; ?></option>
                            <?php
                                    }
                             ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Select States</label>
                        <select class="form-control" name="state">
                            <option>----Select States-----</option>
                            <?php  
                                    $data=mysqli_query($con,"SELECT * FROM `states`");
                                    while ($row=mysqli_fetch_array($data,MYSQLI_ASSOC)) {
                                    // $category_id = $row['category_id'];
                                        $s_name=$row['s_name'];
                                        ?>
                            <option value="<?php echo $s_name; ?>"><?php echo $s_name; ?></option>
                            <?php
                                    }
                             ?>
                        </select>
                    </div>
                    <!-- <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">State Name</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" name="state">
                    </div> -->
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Latest jobs Link</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" name="lj_link">
                    </div>



                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Latest jobs Name</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" name="lj_name">
                    </div>



                    <div class="input-group mb-3">
                        <textarea cols="30" rows="10" class="form-control" name="lj_details" id="texteditor"></textarea>
                        <script>
                        tinymce.init({
                            selector: '#texteditor',
                            plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
                            menubar: 'file edit view insert format tools table help',
                            toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
                            toolbar_sticky: true,
                            autosave_ask_before_unload: true,
                            autosave_interval: '30s',
                            autosave_prefix: '{path}{query}-{id}-',
                            autosave_restore_when_empty: true,
                            autosave_retention: '2m',
                            image_advtab: true,
                            link_list: [{
                                    title: 'My page 1',
                                    value: 'https://www.codexworld.com'
                                },
                                {
                                    title: 'My page 2',
                                    value: 'http://www.codexqa.com'
                                }
                            ],
                            image_list: [{
                                    title: 'My page 1',
                                    value: 'https://www.codexworld.com'
                                },
                                {
                                    title: 'My page 2',
                                    value: 'http://www.codexqa.com'
                                }
                            ],
                            image_class_list: [{
                                    title: 'None',
                                    value: ''
                                },
                                {
                                    title: 'Some class',
                                    value: 'class-name'
                                }
                            ],
                            importcss_append: true,
                            file_picker_callback: (callback, value, meta) => {
                                /* Provide file and text for the link dialog */
                                if (meta.filetype === 'file') {
                                    callback('https://www.google.com/logos/google.jpg', {
                                        text: 'My text'
                                    });
                                }

                                /* Provide image and alt text for the image dialog */
                                if (meta.filetype === 'image') {
                                    callback('https://www.google.com/logos/google.jpg', {
                                        alt: 'My alt text'
                                    });
                                }

                                /* Provide alternative source and posted for the media dialog */
                                if (meta.filetype === 'media') {
                                    callback('movie.mp4', {
                                        source2: 'alt.ogg',
                                        poster: 'https://www.google.com/logos/google.jpg'
                                    });
                                }
                            },
                            templates: [{
                                    title: 'New Table',
                                    description: 'creates a new table',
                                    content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>'
                                },
                                {
                                    title: 'Starting my story',
                                    description: 'A cure for writers block',
                                    content: 'Once upon a time...'
                                },
                                {
                                    title: 'New list with dates',
                                    description: 'New List with dates',
                                    content: '<div class="mceTmpl"><span class="cdate">cdate</span><br><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>'
                                }
                            ],
                            template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
                            template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
                            height: 400,
                            image_caption: true,
                            quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
                            noneditable_class: 'mceNonEditable',
                            toolbar_mode: 'sliding',
                            contextmenu: 'link image table',
                            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
                        });
                        </script>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Upload file</span>
                        <input type="file" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" name="brand_image">
                    </div>


                    <input type="submit" value="Submit" class="form-control btn btn-success" name="addlatestjobs_link">
                </form>

            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">categoryname</th>
                        <th scope="col">state</th>
                        <th scope="col">Link</th>
                        <th scope="col">Link Name</th>
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                                                $sql="SELECT * FROM `latest_jobs_link`";
                                                $result=mysqli_query($con,$sql);
                                                if ($result) 
                                                {
                                                    while( $row=mysqli_fetch_assoc($result))
                                                    {
                                                        $id=$row['lj_id'];
                                                        $cat_name=$row['cat_name'];
                                                        $state=$row['state'];
                                                        $lj_link=$row['lj_link'];
                                                        $lj_name=$row['lj_name'];
                                                        $lj_details=$row['lj_details'];
                                            
                                            ?>
                    <tr>
                        <th scope="row"><?php echo $id; ?></th>

                        <td><?php echo $cat_name; ?></td>
                        <td><?php echo $state; ?></td>
                        <td><?php echo $lj_link; ?></td>
                        <td><?php echo $lj_name; ?></td>

                        <td><a href="latest_job_update.php?updateid=<?php echo $id; ?>">
                                <button type="button" class="btn btn-outline-primary m-2">
                                    Update
                                </button>
                            </a></td>

                        <td><a href="latest_job_delete.php?deleteid=<?php echo $id; ?>">
                                <button type="button" class="btn btn-outline-primary m-2">
                                    Delete
                                </button>
                            </a></td>

                    </tr>
                    <?php
                                                    }
                                                }
                                            ?>


                </tbody>
            </table>


            <!-- Footer Start -->
            <?php
            require('layout/footer.php');
        ?>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/conpoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>



    <script src="js1/jquery-2.2.4.min.js"></script>
    <script src="js1/bootstrap.min.js"></script>
    <script src="js1/jquery.dataTables.min.js"></script>
    <script src="js1/dataTables.bootstrap.min.js"></script>
    <script src="js1/select2.full.min.js"></script>
    <script src="js1/jquery.inputmask.js"></script>
    <script src="js1/jquery.inputmask.date.extensions.js"></script>
    <script src="js1/jquery.inputmask.extensions.js"></script>
    <script src="js1/moment.min.js"></script>
    <script src="js1/bootstrap-datepicker.js"></script>
    <script src="js1/icheck.min.js"></script>
    <script src="js1/fastclick.js"></script>
    <script src="js1/jquery.sparkline.min.js"></script>
    <script src="js1/jquery.slimscroll.min.js"></script>
    <script src="js1/jquery.fancybox.pack.js"></script>
    <script src="js1/app.min.js"></script>
    <script src="js1/jscolor.js"></script>
    <script src="js1/on-off-switch.js"></script>
    <script src="js1/on-off-switch-onload.js"></script>
    <script src="js1/clipboard.min.js"></script>
    <script src="js1/demo.js"></script>
    <script src="js1/summernote.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>




</body>

</html>