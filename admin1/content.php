<?php include_once("../config/db.php");   ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
<?php
if (isset($_POST['add_content'])){
    $heading = $_POST['c_heading'];
    $desc = $_POST['c_description'];
    $desc_2 = $_POST['c_description2'];
    $desc_3 = $_POST['c_description3'];
    $insert_query = "INSERT INTO `content`(`c_heading`, `c_description`, `c_description2`, `c_description3`) VALUES ('$heading','$desc','$desc_2','$desc_3')";
    $result = mysqli_query($con, $insert_query);
    if($result)
    {
        echo "content Inserted";
    }
    else{
        echo "Try Again";
    }
}

?>
  <div class="container p-5">
    <h1>Add Content</h1>
    <form action="" method="post">
                        <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Heading</span>
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="c_heading">
            </div>
 <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Description1</span>
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="c_description">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Description2</span>
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="c_description2">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Description3</span>
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="c_description3">
            </div>
           
            <input type="submit" value="Submit" class="form-control btn btn-success" name="add_content">
            </form>
            </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>