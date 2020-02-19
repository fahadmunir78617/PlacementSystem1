<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Clas | Advantage of Social Media</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap3.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap4.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Poppins:400,500,500i,600,600i,700,700i,800,800i|Rosario:400,400i,700,700i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Aclonica&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700|Satisfy&display=swap" rel="stylesheet">
    <style>
        p{
            font-size: 15px;

        }
        ul{
            font-size: 16px;
            line-height: 40px;
            margin-left: 10px;

        }
        #hd{
            text-align: center;
            padding: 20px;
            margin-bottom: 20px;
        }
        #hy{
            text-align: center;
            font-weight: 700;
            font-size: 26px;
            padding: 20px;
        }
    </style>
</head>
<body>
<?php
include "dbcon.php";
$seemore = $_GET['seemore'];
echo "$seemore";
echo "ok";
$sql = "SELECT * FROM company WHERE id = '$seemore' ";
$result = $con->query($sql);
if($result->num_rows > 0)
{
while($row = $result->fetch_assoc())
{?>
<div class="banner" style="margin-bottom: 2%;">
    <img src="images/<?php echo $row['clogo']; ?>" class="img-responsive " >
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 style ="text-align: center;margin-bottom:30px; font-weight:bold;" id="hhg"> Job Description </h1>
            <p>

                We are looking for sharp and motivated PHP developer internees who have a good hands-on experience with LAMP stack. The candidate will work in a team to design, develop and support company/clients critical applications.
            </p>
            <hr>
        </div>


        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <h2 id="hd">You will be able to learn through the internship is</h2>
            <ul>
                <li> Regularly interact with Team Lead to receive information and updates about product progress and results </li>
                <li> Analyze & Develop product requirements </li>
                <li> Work with Team lead to incorporate client needs in product development </li>
                <li> Monitors & Cater changes as per the need </li>
            </ul>

        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <img src="join-us-web3.jpg" width="100%">
        </div>


        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <img src="join-us-web4.jpg" width="100%">
            <hr>



        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">

            <h2 id="hy">Skills:</h2>
            <ul>
                <li> Cascade Style Sheets(CSS)</li>
                <li> Object Oriented Programming</li>
                <li> LAMP</li>
                <li> Model View Controller (MVC)</li>
                <li> Java Script</li>
                <li> JQuery</li>
                <li> Laravel</li>
            </ul>
            <hr>
        </div>
        <hr>
        <div class="col-lg-3 col-md-3 col-sm-12 col-12">
            <h2 style="text-align:center">Job Type:  </h2>
            <p style="text-align:center"> Full Time/Permanent  </p>
            <hr>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-12">
            <h2 style="text-align:center"> Job Location: </h2>
            <p style="text-align:center"> Lahore, Pakistan  </p>
            <hr>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-12">
            <h2 style="text-align:center"> Minimum Education </h2>
            <p style="text-align:center">  Bachelor </p>
            <hr>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-12">
            <h2 style="text-align:center"> Degree Title </h2>
            <p style="text-align:center">  BS (CS) & Associate Degree </p>
            <hr>
        </div>



    </div>
</div>
<?php }

}

?>


</body>
</html>