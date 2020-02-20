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
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 35%;
            height: 400px;
        }
        .jobtext{
            font-weight:bold;
            color: black;
            font-size: 30px;

        }
    </style>
</head>
<body>
<?php
include "dbcon.php";
$seemore = $_GET['seemore'];
$sql = "SELECT * FROM company WHERE id = '$seemore' ";
$result = $con->query($sql);
if($result->num_rows > 0)
{
while($row = $result->fetch_assoc())
{?>
    <div class="row">
        <div class="con">
<div class="banner" style="margin-bottom: 2%; margin-top: 5%;">
    <h1 style ="text-align: center;margin-bottom:30px; font-weight:bold;" id="hhg"> Company Logo</h1>
    <hr>
    <img src="images/<?php echo $row['clogo']; ?>" class="img-responsive center"" >
</div>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 style="text-align: center; font-weight:bold;">Job Description</h1>
                    <hr>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 3%; margin-bottom: 5%">
            <div class="row">
                <div class="col-md-12 ">
                    <p ><span class="jobtext">Salary : </span><?php echo $row['csalary']; ?> / Month</p><br>
                    <p ><span class="jobtext">Requirements : </span><?php echo $row['cdesc']; ?></p><br>
                    <p ><span class="jobtext">City : </span><?php echo $row['ccity']; ?></p><br>
                    <p ><span class="jobtext">Experience : </span><?php echo $row['cexperience']; ?> Years</p>
                </div>
            </div>
        </div>





<?php }

}

?>


</body>
</html>