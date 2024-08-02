<?php include("../config/db.php");   ?>
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
if(isset($_POST['add_cate'])) 
{
    $cat_name = $_POST['cat_name'];

    $insert_query = "INSERT INTO `category`(`cat_name`) VALUES ('$cat_name')";
    $result = mysqli_query($con, $insert_query);
    if ($result)
    {
        echo "Category Add Successfully";
    } 
    else 
    {
        echo "try again";
    }
}
?>
  <div class="container p-5">
    <h1>ADD CATEGORY</h1>
    <form action="" method="post">
 <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Add Category</span>
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="cat_name">
            </div>
           
            <input type="submit" value="Submit" class="form-control btn btn-success" name="add_cate">
            </form>
            </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>