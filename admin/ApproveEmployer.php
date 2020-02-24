<?php
include "../dbcon.php";



session_start();

if(!isset($_SESSION['adminname'])&&!isset($_SESSION['employername'])){
    header("Location: ../index.php");
}


if(isset($_POST['logout'])){
    session_destroy();
    header("Location: ../index.php");

}
?>

<header>
			<div class="logo">
                <img src="..\images\razaq.png" style="width:60px;" alt="#HOME" >
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

<?php

include "navigation.php";
    ?>









<!DOCTYPE html>
<html>
<head>

<title>Approve Employee</title>
    <link rel="shortcut icon" type="image/png" href="..\images\favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="css\adminstyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" href="..\images\favicon.ico" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'  type='text/css'>


</head>
<body>
<br>
<br>
<br>
<br>


<h2 style="text-align: center">Approve/Block Employer</h2>
<br>
<br>
<br>

<table class="table table-dark table-responsive" style="width: 80%">
<thead>
<tr>
    <th scope="col">Name</th>
    <th scope="col">Company Name</th>
    <th scope="col">Phone</th>
    <th scope="col">City</th>
    <th scope="col">Email</th>
    <th scope="col">Status</th>
    <th scope="col">Approve</th>
    <th scope="col">Block</th>

</tr>
</thead>
<tbody>

<?php
$sql = "SELECT * FROM admin  WHERE type = 0";

$result = $con->query($sql);
if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {

    ?>
<tr>
<th><?php echo $row['name']?></th>
<th><?php echo $row['CompanyName']?></th>
<th><?php echo $row['phoneNum']?></th>
<th><?php echo $row['companyCity']?></th>
<th><?php echo $row['email']?></th>
<th><?php $value = "";if ($row['status']==0) {$value = "Block";} else if ($row['status']==1) {$value = "Approved";}echo $value; ?></th>
<th><form action="approveBlockEmp.php" method="post">
        <input type="hidden" name="empid" value="<?php echo $row['id']?>">
        <input type="submit" class="btn btn-primary" value="Approve" name="approve">
    </form>
</th>
    <th><form action="approveBlockEmp.php" method="post">
            <input type="hidden" name="empid" value="<?php echo $row['id']?>">
            <input type="submit" class="btn btn-danger" value="Block" name="block">
        </form>
    </th>


</tr>
<?php
        }
    }
    ?>
</tbody>
</table>

</body>
</html>
