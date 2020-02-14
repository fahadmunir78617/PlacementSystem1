<?php
include "../dbcon.php";
?>


<!DOCTYPE html>
<html>
<head>
    <title>Create Job</title>
    <link rel="shortcut icon" type="image/png" href="..\images\favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="css\adminstyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" href="..\images\favicon.ico" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'  type='text/css'>

</head>
<body>

<?php
session_start();
$_SESSION['message'] = '';
$userid = $_SESSION['userid'];



if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $cname = $_POST['cname'];
    $cjob_title = $_POST['cjob_title'];
    $csalary = $_POST['csalary'];
    $cdesc = $_POST['cdesc'];
    $cexperience = $_POST['cexperience'];
    $ccity = $_POST['ccity'];
    $clogo_path = $con->real_escape_string('../upload/'.$_FILES['clogo']['name']);

    if(preg_match("!image!", $_FILES['clogo']['type']))
    {
        if (copy($_FILES['clogo']['tmp_name'], $clogo_path))
        {
            $_SESSION['cname'] = $cname;
            $_SESSION['cjob_title'] = $cjob_title;
            $_SESSION['csalary'] = $csalary;
            $_SESSION['cdesc'] = $cdesc;
            $_SESSION['cexperience'] = $cexperience;
            $_SESSION['ccity'] = $ccity;
            $_SESSION['clogo'] = $clogo_path;

            $sql="INSERT INTO company (employerid,cname,cjob_title,csalary,cdesc,cexperience,ccity,clogo)"
                . "VALUES ('$userid','$cname','$cjob_title','$csalary','$cdesc','$cexperience','$ccity','$clogo_path')";

            if ($con->query($sql) == true)
            {
                $message = "Job Posted Successfully";
                echo "<script type='text/javascript'> alert('$message'); window.location.href='adminhomepage.php'; </script>";
            }
            else
            {
                $_SESSION['message'] = "Job could not be added to database";
            }
        }
        else
        {
            $_SESSION['message'] = "File upload failed";
        }
    }
    else
    {
        $_SESSION['message'] = "Please only upload logo/image";
    }
}


if(!isset($_SESSION['adminname'])&&!isset($_SESSION['employername'])){
    header("Location: ../index.php");
}


if(isset($_POST['logout'])){
    session_destroy();
    header("Location: ../index.php");
}


?>

<section class="preloader">
    <div class="spinner">
        <span class="spinner-rotate"></span>
    </div>
</section>
<header>
    <div class="logo">
        <img src="..\images\logo1.png" alt="#HOME" >
    </div>
    <?php
    if (isset($_SESSION['adminname'])) {
        ?>

        <div class="title">Welcome to Admin Dashboard</div>
        <nav>
            <ul class="main-nav">
                <li>
                    <span style="color: #949695;"><?php echo "Welcome " . $_SESSION['adminname'] . "&emsp;&emsp;"; ?></span>
                </li>
            </ul>
        </nav>
        <?php
    }
    else if (isset($_SESSION['employername'])) {
        ?>

        <div class="title">Welcome to Employer Dashboard</div>
        <nav>
            <ul class="main-nav">
                <li>
                    <span style="color: #949695;"><?php echo "Welcome " . $_SESSION['employername'] . "&emsp;&emsp;"; ?></span>
                </li>
            </ul>
        </nav>
        <?php
    }
    ?>
</header>
<section>

    <div style="width: 100%; height: auto;">

        <?php
        include "navigation.php";
        ?>
        <?php
        $editid =$_GET['edit'];

        $sql = "SELECT * FROM company  WHERE id = '$editid'";


        $result = $con->query($sql);
        $result = $con->query($sql);


        if($result->num_rows > 0)
        {
        while($row = $result->fetch_assoc())
        {
           ?>



        <div class="mainpage">
            <div class="hd_title">New Job Post</div>

            <div class="main">
                <div class="createjobset">
                    <form role="form" action="createjobs.php" method="post" enctype="multipart/form-data">
                        <div class="row">

                            <div class="col-md-6 latest-job ">

                                <div class="form-group">
                                    <label for="fname">Company Name</label>
                                    <input type="text" class="form-control input-sm" name="cname" placeholder="Company Name" value="<?php echo $row['cname']; ?>" required="">
                                </div>

                                <div class="form-group">
                                    <label for="lname">City</label>
                                    <input type="text" class="form-control input-sm"  name="ccity" placeholder="City" value="<?php echo $row['ccity']; ?>" required="">
                                </div>

                                <div class="form-group">
                                    <label for="lname">Description</label>
                                    <textarea type="text" class="form-control input-sm"  rows="4" name="cdesc" placeholder="Description" value="" required=""><?php echo $row['cdesc']; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-flat btn-success">Create Job</button>
                                </div>
                            </div>

                            <div class="col-md-6 latest-job ">

                                <div class="form-group">
                                    <label for="contactno">Job title eg web developer</label>
                                    <input type="text" class="form-control input-sm" name="cjob_title" placeholder="job title eg web developer" value="<?php echo $row['cjob_title']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="contactno">Salary</label>
                                    <input type="text" class="form-control input-sm" name="csalary" placeholder="Salary" value="<?php echo $row['csalary']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="qualification">Experience</label>
                                    <input type="text" class="form-control input-sm" name="cexperience" placeholder="Experience" value="<?php echo $row['cexperience']; ?>">
                                </div>

                                <div class="form-group">
                                    <label>Upload Logo</label><br>
                                    <img src="<?php echo $row['clogo']; ?>" hight="50px" width="50px">
                                    <input type="file" name="clogo" value=" " class="btn btn-default">

                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php }
        }
        ?>
    </div>

</section>
<script src="../js/jquery.js"></script>
<script src="../js/custom.js"></script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
</body>

</html>