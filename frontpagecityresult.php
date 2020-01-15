<?php
include "dbcon.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
    <link rel="shortcut icon" type="image/png" href="..\images\favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" href="..\images\favicon.ico" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'  type='text/css'>

</head>
<body>

<?php


if(isset($_POST['apply']))
{

    $cid = $_GET['id'];
    $semail = $_SESSION['email'];
    $query = "SELECT * FROM appliedjob WHERE cid = '". $cid ."' AND studentemail = '". $semail ."'";
    $result = $con->query($query);
    if ($result->num_rows > 0)
    {
        $message = "Already applied to that job";
        echo "<script type='text/javascript'> alert('$message'); window.location.href='homepage.php'; </script>";
    }
    else
    {
        $sql1 = "SELECT * FROM company WHERE id = '$cid'";
        $result = $con->query($sql1);
        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                $cname = $row['cname']; $cdesc = $row['cdesc'];
            }
            $studentfname = $_SESSION['fname']; $studentlname = $_SESSION['lname']; $studentemail = $_SESSION['email'];
            $cvs = $_SESSION['cv'];
            $empid = $_POST['empid'];
            $sql="INSERT INTO appliedjob (cname,studentfname,studentlname,studentemail,cv,status,cdesc,cid,empid)"
                . "VALUES ('$cname','$studentfname','$studentlname','$studentemail','$cvs','Pending','$cdesc','$cid','$empid')";

            if ($con->query($sql) == true)
            {
                $message = "Applied Successfully";
                echo "<script type='text/javascript'> alert('$message'); window.location.href='homepage.php'; </script>";
            }
            else
            {
                $_SESSION['message'] = "Not applied";
            }
        }
        else
        {
            echo(mysqli_error($con));
        }
    }
}
?>

<section class="preloader">
    <div class="spinner">
        <span class="spinner-rotate"></span>
    </div>
</section>


<section style="background: #192a56;">

    <div style="width: 100%; height: auto;">



        <div class="mainpage">

            <div class="text-center">
                <h2 style="color: #fff;">Click on Apply button to Apply Job</h2>

            </div>
            <br><br>
            <div class="container">


                <div class="setting">


                    <div class="flex-row row">

                        <div class="col-md-4"></div>
                        <?php
                        $ids = $_GET['city'];
                        $sql = "SELECT * FROM company WHERE ccity LIKE '%$ids%' Order By cname ASC";
                        $result = $con->query($sql);
                        if($result->num_rows > 0)
                        {
                            while($row = $result->fetch_assoc())
                            {
                                ?>
                                <div class="col-md-4">

                                    <div class="thumbnail ">
                                        <img src="images/<?php echo $row['clogo']; ?>" alt="companylogo">

                                        <div class="caption">

                                            <h3><?php echo $row['cname']; ?></h3>
                                            <p class="flex-text text-muted"><br>Salary: $<?php echo $row['csalary']; ?>/Month
                                                <br>Requirements: <?php echo $row['cdesc']; ?>
                                                <br>City: <?php echo $row['ccity']; ?>
                                                <br>Experience: <?php echo $row['cexperience']; ?> Years
                                            </p>
                                            <form method="post" action="frontpageclickresult.php?id=<?php echo $row["id"]; ?>">
                                                <input type="hidden" name="empid" value="<?php echo $row['employerid'] ?>">
                                                <button type="submit" name="apply" class="btn btn-primary" >Apply Job</button>
                                            </form>
                                        </div>
                                        <!-- /.caption -->
                                    </div>
                                    <!-- /.thumbnail -->
                                    <div class="col-md-4"></div>
                                </div>





                                <?php
                            }
                        }
                        ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


</section>

<script src="js/jquery.js"></script>
<script src="js/custom.js"></script>
</body>

</html>