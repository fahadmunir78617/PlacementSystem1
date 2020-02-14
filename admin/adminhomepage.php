
<?php include "../dbcon.php";?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="shortcut icon" type="image/png" href="..\images\favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="css/adminstyle.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="icon" href="..\images\favicon.ico" type="image/gif" sizes="16x16">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'  type='text/css'>

</head>
<body>

<?php
session_start();

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
<section>

<div style="width: 100%; height: auto;">

	<?php
    include "navigation.php";
    ?>
	<div class="mainpage">

			<div class="hd_title">Latest Jobs</div>
	<div class="container">
		<div class="adminset">
	<div class="flex-row row">
        
        <?php
        $employerid = $_SESSION['userid'];

          $sql = "SELECT * FROM company  WHERE employerid = '$employerid' Order By cname ASC";


          $result = $con->query($sql);
          $result = $con->query($sql);


           if($result->num_rows > 0)
          {
            while($row = $result->fetch_assoc()) 
            {
			 ?>
			 <div class="col-xs-6 col-sm-6 col-lg-3">
			<div class="thumbnail ">
			<img src="<?php echo $row['clogo']; ?>" alt="companylogo">
                
                <div class="caption">
                    <h3><?php echo $row['cname']; ?></h3>
                    <p class="flex-text text-muted"><br>Salary: $<?php echo $row['csalary']; ?>/Month
                                                    <br>Requirements: <?php echo $row['cdesc']; ?> 
                                                    <br>City: <?php echo $row['ccity']; ?> 
                                                    <br>Experience: <?php echo $row['cexperience']; ?> Years
                    </p>
                    
				</div>
				<!-- /.caption -->
			</div>
			<!-- /.thumbnail -->
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

		
</section>

	<script src="../js/jquery.js"></script>
     <script src="../js/custom.js"></script>
</body>

</html>