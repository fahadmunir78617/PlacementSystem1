
<?php
include "dbcon.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registers</title>
    <link rel="shortcut icon" type="image/png" href="images\favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="css\style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" href="..\images\favicon.ico" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'  type='text/css'>

</head>
<body class="loginbody">

<a href="index.php"><i class="fa fa-home" style="font-size:48px;color: rgba(193, 255, 226, 0.856);margin: 20px 0 0 30px;"></i></a>
<section class="preloader">
    <div class="spinner">
        <span class="spinner-rotate"></span>
    </div>
</section>


<div class="mainpageregister">
    <div class="title">
        <h1>Register as a Employer</h1>
    </div>
    <form action="" method="post" enctype="multipart/form-data" name="form" ">

    <?php
    $fnameErr = $companynameErr = $addressErr = $cityErr = $contactErr = $companysizeErr = $streamErr = $skillsErr = $aboutErr = $stateErr =  $emailErr = $passErr =  "";
    $fname = $companyname = $address = $city = $contact = $companysize = $stream = $skills = $about = $state =  $email = $password = "";




    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

        $email = $_POST["email"];
        if (empty($_POST["email"]))
        {
            $emailErr = "*Email is required";
        }else
        {
            if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $emailErr = "*Invalid email format";
            }
        }
        if(empty($_POST["fname"]))
        {
            $fnameErr = "*First name is required";
        }else
        {
            $fname = $_POST['fname'];
        }
        if(empty($_POST["companyname"]))
        {
            $companynameErr = "*Last name is required";
        }else
        {
            $companyname = $_POST['companyname'];
        }
        if(empty($_POST["address"]))
        {
            $addressErr = "*Address is required";
        }else
        {
            $address = $_POST['address'];
        }
        if(empty($_POST["city"]))
        {
            $cityErr = "*City is required";
        }else
        {
            $city = $_POST['city'];
        }
        if(empty($_POST["contact"]))
        {
            $contactErr = "*Contact is required";
        }else
        {
            $contact = $_POST['contact'];
            if(preg_match("/^[0-9]$/", $_POST['contact']))
            {
                $contactErr = "*Contact number is not valid";
            }
        }
        if(empty($_POST["companysize"]))
        {
            $companysizeErr = "*companysize is required";
        }else
        {
            $companysize = $_POST['companysize'];
        }

        if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $_POST['password']))
        {
            $passErr = "*Passsword is not valid";
        }
        else
        {
            if(isset($_POST['password']) && isset($_POST['email']) && $_POST['password']!="" && $_POST['email']!="" )
            {
                $password = $_POST['password'];

                // Check connection
                if (mysqli_connect_errno())
                {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }

                $sql="INSERT INTO admin(name,CompanyName,companyCity,companyAdress,phoneNum,CompanySize,email,password,type,status)
                     VALUES ('$fname','$companyname','$city','$address','$contact','$companysize','$email','$password','0','0')";

                if ($con->query($sql) == true)
                {
                    $message = "Registered Successfully";
                    echo "<script type='text/javascript'> alert('$message'); window.location.href='index.php';</script>";
                }
                else
                {
                    echo "Error description: " . mysqli_error($con);
                    echo $sql;
                    $message = "Could not insert data in database";
                    echo "<script type='text/javascript'> alert('$message'); </script>";
                }
            }
        }
    }
    ?>
    <div class="row">

        <div class="col-md-6 latest-job ">

            <div class="form-group">
                <label for="fname">First Name</label> <div style="color: red;float: right;"> <?php echo $fnameErr;?></div>
                <input type="text" class="form-control input-sm"   required pattern="([A-Za-z ]+)" autofocus required title="Use Only characters" name="fname" placeholder="First Name" value="<?php echo isset($_POST["fname"]) ? $_POST["fname"] : ''; ?>">
            </div>

            <div class="form-group">
                <label for="companyname">Comapny Name</label> <span style="color: red;float: right;"> <?php echo $companynameErr;?></span>
                <input type="text" class="form-control input-sm" required  name="companyname" placeholder="Company Name" value="<?php echo isset($_POST["companyname"]) ? $_POST["companyname"] : ''; ?>" >
            </div>



            <div class="form-group">
                <label for="address">Address</label> <span style="color: red;float: right;"> <?php echo $addressErr;?></span>
                <textarea id="address" required name="address" class="form-control input-sm" rows="4" placeholder="Address"><?php echo isset($_POST["address"]) ? $_POST["address"] : ''; ?></textarea>
            </div>

            <div class="form-group">
                <label for="city">City</label> <span style="color: red;float: right;"> <?php echo $cityErr;?></span>
                <input type="text" class="form-control input-sm" id="city"  required pattern="([A-Za-z ]+)" autofocus required title="Use Only characters" name="city" value="<?php echo isset($_POST["city"]) ? $_POST["city"] : ''; ?>" placeholder="city">
            </div>


        </div>

        <div class="col-md-6 latest-job ">


            <div class="form-group">
                <label for="contactno">Contact Number</label> <span style="color: red;float: right;"> <?php echo $contactErr;?></span>
                <input type="text" class="form-control input-sm" id="contactno" required required pattern="[0-9]{11}"  autofocus required title="only use digits 0-9 and length must be 11" name="contact" placeholder="Contact Number" value="<?php echo isset($_POST["contact"]) ? $_POST["contact"] : ''; ?>">
            </div>

            <div class="form-group">
                <label for="companysize">Company Size</label> <span style="color: red;float: right;"> <?php echo $companysizeErr;?></span>
                <input type="text" class="form-control input-sm" id="companysize" required pattern="[0-9]{3}"  autofocus required title="only use digits 0-9 and Size of company must be less then 999" name="companysize" placeholder="Company Size" value="<?php echo isset($_POST["companysize"]) ? $_POST["companysize"] : ''; ?>">
            </div>

            <div class="form-group">
                <label for="email">Email address</label> <span style="color: red;float: right;"> <?php echo $emailErr;?></span>
                <input type="email" class="form-control input-sm" id="email"  name="email" placeholder="Email" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>" >
            </div>

            <div class="form-group">
                <label for="password">Password</label> <span style="color: red;float: right;"> <?php echo $passErr;?></span>
                <input type="password" class="form-control input-sm" id="password" name="password" placeholder="Password" value="<?php echo isset($_POST["password"]) ? $_POST["password"] : ''; ?>">
            </div>




        </div>
    </div>
    <div class="form-group register">
        <button type="submit" class="btn btn-flat btn-success" >Register</button>
    </div>
    </form>


</div>

</section>


<script src="js/jquery.js"></script>
<script src="js/custom.js"></script>
</body>

</html>