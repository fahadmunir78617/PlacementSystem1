<?php
if (isset($_SESSION['adminname'])) {
    ?>

    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="active">
                <a href="adminhomepage.php"><i style="font-size:24px" class="fa fa-home"></i>&emsp;Dashboard</a></i>
            </li>
            <li>
                <a href="searchcompany.php"><i style="font-size:24px" class="fa fa-search"></i>&emsp;Search Job</a>
            </li>
            <li>
                <a href="createjobs.php"><i style="font-size:24px" class="fa fa-check-circle-o"></i>&emsp;Create
                    Jobs</a>
            </li>
            <li>
                <a href="applied-jobs.php"><i style="font-size:24px" class="fa fa-envelope-o"></i>&emsp;Job Application</a>
            </li>


            <li>
                <a href="ApproveEmployer.php"><i style="font-size:24px" class="fa fa-envelope-o"></i>&emsp; <span style="font-size: 12px">Employee Managment</span></a>
            </li>

        </ul>
        <form method="post">
            <button type="submit" name="logout" class="btn btn-info" style="margin: 10px 0 0 64px;">Logout</button>
        </form>
    </div>

    <?php
}
else if (isset($_SESSION['employername'])) {
    ?>


    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="active">
                <a href="adminhomepage.php"><i style="font-size:24px" class="fa fa-home"></i>&emsp;Dashboard</a></i>
            </li>
            <li>
                <a href="searchcompany.php"><i style="font-size:24px" class="fa fa-search"></i>&emsp;Search Job</a>
            </li>
            <li>
                <a href="createjobs.php"><i style="font-size:24px" class="fa fa-check-circle-o"></i>&emsp;Create
                    Jobs</a>
            </li>
            <li>
                <a href="applied-jobs.php"><i style="font-size:24px" class="fa fa-envelope-o"></i>&emsp;Job Application</a>
            </li>
        </ul>
        <form method="post">
            <button type="submit" name="logout" class="btn btn-info" style="margin: 10px 0 0 64px;">Logout</button>
        </form>
    </div>
    <?php
} ?>