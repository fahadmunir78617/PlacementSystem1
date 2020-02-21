<?PHP
include "dbcon.php";


?>


<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="shortcut icon" type="image/png" href="images/razaq.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Slider CS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">


    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/navstyle.css">
    <style>
        .form-control-borderless {
    border: none;
}

.form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
    border: none;
    outline: none;
    box-shadow: none;
}

</style>
</head>

<body>

    <div class="container">
        <br />
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-12">
                <form action="viewedSearched.php" method="post" class="card card-sm">
                    <div class="card-body row no-gutters align-items-center">
                        <div class="col-auto">
                            <i class="fa fa-search h4 text-body"></i>
                        </div>
                        <!--end of col-->
                        <div class="col">
                            <input class="form-control form-control-lg form-control-borderless" type="text" name="search-title" placeholder="Search topics or keywords">
                        </div>
                        <!--end of col-->
                        <div class="col-auto">
                            <button class="btn btn-lg btn-success" name="search" type="submit">Search</button>
                        </div>
                        <!--end of col-->
                    </div>
                </form>
            </div>
            <!--end of col-->
        </div>
    </div>
    <script src=""></script>
</body>

</html>
