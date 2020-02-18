
<?php
include "../dbcon.php";
$adminid = $_POST['empid'];
if (isset($_POST['approve']))
{
    $sql="update company set cjob_status = 1 WHERE id = '$adminid'";

    if ($con->query($sql) == true)
    {
        echo "data submitted";
        header("location:Approvedjob.php");
    }
}


else if (isset($_POST['block']))
{
    $sql="update company set cjob_status = 0 WHERE id = '$adminid'";

    if ($con->query($sql) == true)
    {
        echo "data submitted";
        header("location:Approvedjob.php");
    }
}
?>