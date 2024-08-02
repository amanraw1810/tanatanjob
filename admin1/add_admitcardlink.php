<?php include_once("../config/db.php");   ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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
    <?php
if (isset($_POST['addadmitcard_link'])){
  $cat_name = $_POST['cat_name'];
  $link_name = $_POST['link_name'];
  $link = $_POST['link'];
  $ac_details = $_POST['ac_details'];
  $insert_query = "INSERT INTO `admit_card_link`(`cat_name`, `ac_link`, `ac_name`, `ac_details`) VALUES ('$cat_name',' $link','$link_name','$ac_details')";
  $result = mysqli_query($con, $insert_query);
  if ($result) {
    echo "Link Inserted";
  } else {
    echo "try again";
  }

}

?>
    <div class="container p-5">
        <h1>ADD Admit Card</h1>
        <form action="" method="post">
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
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Admit Card Name</span>
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="link_name">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Admit Card Link</span>
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="link">
            </div>

            <div class="input-group mb-3">
                <textarea class="form-control" name="ac_details" id="editor1"></textarea>
            </div>

            <input type="submit" value="Submit" class="form-control btn btn-success" name="addadmitcard_link">
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>





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

    <script>
    $(document).ready(function() {
        $('#editor1').summernote({
            height: 300
        });
        $('#editor2').summernote({
            height: 300
        });
        $('#editor3').summernote({
            height: 300
        });
        $('#editor4').summernote({
            height: 300
        });
        $('#editor5').summernote({
            height: 300
        });
    });
    $(".top-cat").on('change', function() {
        var id = $(this).val();
        var dataString = 'id=' + id;
        $.ajax({
            type: "POST",
            url: "get-mid-category.php",
            data: dataString,
            cache: false,
            success: function(html) {
                $(".mid-cat").html(html);
            }
        });
    });
    $(".mid-cat").on('change', function() {
        var id = $(this).val();
        var dataString = 'id=' + id;
        $.ajax({
            type: "POST",
            url: "get-end-category.php",
            data: dataString,
            cache: false,
            success: function(html) {
                $(".end-cat").html(html);
            }
        });
    });
    </script>

    <script>
    $(function() {

        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd-mm-yyyy", {
            "placeholder": "dd-mm-yyyy"
        });
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm-dd-yyyy", {
            "placeholder": "mm-dd-yyyy"
        });
        //Money Euro
        $("[data-mask]").inputmask();

        //Date picker
        $('#datepicker').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy',
            todayBtn: 'linked',
        });

        $('#datepicker1').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy',
            todayBtn: 'linked',
        });

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        });



        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });

        $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });

        $('#confirm-approve').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });

    });

    function confirmDelete() {
        return confirm("Are you sure want to delete this data?");
    }

    function confirmActive() {
        return confirm("Are you sure want to Active?");
    }

    function confirmInactive() {
        return confirm("Are you sure want to Inactive?");
    }
    </script>

    <script type="text/javascript">
    function showDiv(elem) {
        if (elem.value == 0) {
            document.getElementById('photo_div').style.display = "none";
            document.getElementById('icon_div').style.display = "none";
        }
        if (elem.value == 1) {
            document.getElementById('photo_div').style.display = "block";
            document.getElementById('photo_div_existing').style.display = "block";
            document.getElementById('icon_div').style.display = "none";
        }
        if (elem.value == 2) {
            document.getElementById('photo_div').style.display = "none";
            document.getElementById('photo_div_existing').style.display = "none";
            document.getElementById('icon_div').style.display = "block";
        }
    }

    function showcontentInputArea(elem) {
        if (elem.value == 'Full Width Page Layout') {
            document.getElementById('showPagecontent').style.display = "block";
        } else {
            document.getElementById('showPagecontent').style.display = "none";
        }
    }
    </script>

    <script type="text/javascript">
    $(document).ready(function() {

        $("#btnAddNew").click(function() {

            var rowNumber = $("#ProductTable tbody tr").length;

            var trNew = "";

            var addLink = "<div class=\"upload-btn" + rowNumber +
                "\"><input type=\"file\" name=\"photo[]\"  style=\"margin-bottom:5px;\"></div>";

            var deleteRow =
                "<a href=\"javascript:void()\" class=\"Delete btn btn-danger btn-xs\">X</a>";

            trNew = trNew + "<tr> ";

            trNew += "<td>" + addLink + "</td>";
            trNew += "<td style=\"width:28px;\">" + deleteRow + "</td>";

            trNew = trNew + " </tr>";

            $("#ProductTable tbody").append(trNew);

        });

        $('#ProductTable').delegate('a.Delete', 'click', function() {
            $(this).parent().parent().fadeOut('slow').remove();
            return false;
        });

    });



    var items = [];
    for (i = 1; i <= 24; i++) {
        items[i] = document.getElementById("tabField" + i);
    }

    items[1].style.display = 'block';
    items[2].style.display = 'block';
    items[3].style.display = 'block';
    items[4].style.display = 'none';

    items[5].style.display = 'block';
    items[6].style.display = 'block';
    items[7].style.display = 'block';
    items[8].style.display = 'none';

    items[9].style.display = 'block';
    items[10].style.display = 'block';
    items[11].style.display = 'block';
    items[12].style.display = 'none';

    items[13].style.display = 'block';
    items[14].style.display = 'block';
    items[15].style.display = 'block';
    items[16].style.display = 'none';

    items[17].style.display = 'block';
    items[18].style.display = 'block';
    items[19].style.display = 'block';
    items[20].style.display = 'none';

    items[21].style.display = 'block';
    items[22].style.display = 'block';
    items[23].style.display = 'block';
    items[24].style.display = 'none';

    function funcTab1(elem) {
        var txt = elem.value;
        if (txt == 'Image Advertisement') {
            items[1].style.display = 'block';
            items[2].style.display = 'block';
            items[3].style.display = 'block';
            items[4].style.display = 'none';
        }
        if (txt == 'Adsense Code') {
            items[1].style.display = 'none';
            items[2].style.display = 'none';
            items[3].style.display = 'none';
            items[4].style.display = 'block';
        }
    };

    function funcTab2(elem) {
        var txt = elem.value;
        if (txt == 'Image Advertisement') {
            items[5].style.display = 'block';
            items[6].style.display = 'block';
            items[7].style.display = 'block';
            items[8].style.display = 'none';
        }
        if (txt == 'Adsense Code') {
            items[5].style.display = 'none';
            items[6].style.display = 'none';
            items[7].style.display = 'none';
            items[8].style.display = 'block';
        }
    };

    function funcTab3(elem) {
        var txt = elem.value;
        if (txt == 'Image Advertisement') {
            items[9].style.display = 'block';
            items[10].style.display = 'block';
            items[11].style.display = 'block';
            items[12].style.display = 'none';
        }
        if (txt == 'Adsense Code') {
            items[9].style.display = 'none';
            items[10].style.display = 'none';
            items[11].style.display = 'none';
            items[12].style.display = 'block';
        }
    };

    function funcTab4(elem) {
        var txt = elem.value;
        if (txt == 'Image Advertisement') {
            items[13].style.display = 'block';
            items[14].style.display = 'block';
            items[15].style.display = 'block';
            items[16].style.display = 'none';
        }
        if (txt == 'Adsense Code') {
            items[13].style.display = 'none';
            items[14].style.display = 'none';
            items[15].style.display = 'none';
            items[16].style.display = 'block';
        }
    };

    function funcTab5(elem) {
        var txt = elem.value;
        if (txt == 'Image Advertisement') {
            items[17].style.display = 'block';
            items[18].style.display = 'block';
            items[19].style.display = 'block';
            items[20].style.display = 'none';
        }
        if (txt == 'Adsense Code') {
            items[17].style.display = 'none';
            items[18].style.display = 'none';
            items[19].style.display = 'none';
            items[20].style.display = 'block';
        }
    };

    function funcTab6(elem) {
        var txt = elem.value;
        if (txt == 'Image Advertisement') {
            items[21].style.display = 'block';
            items[22].style.display = 'block';
            items[23].style.display = 'block';
            items[24].style.display = 'none';
        }
        if (txt == 'Adsense Code') {
            items[21].style.display = 'none';
            items[22].style.display = 'none';
            items[23].style.display = 'none';
            items[24].style.display = 'block';
        }
    };
    </script>
</body>

</html>