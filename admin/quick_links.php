<?php include_once("../config/db.php");   ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <?php
if (isset($_POST['add_quicklinks'])){
    $l_name = $_POST['l_name'];
    $link = $_post['link'];
    
    $insert_query;
}

?>
    <div class="container p-5">
        <h1>Add Quick Links</h1>
        <form action="" method="post">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Link Name </span>
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="l_name">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Link</span>
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="link">
            </div>
            <input type="submit" value="Submit" class="form-control btn btn-success" name="add_quicklinks">
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>