
<?php
include "../dbcon.php";
$adminid = $_POST['empid'];
if (isset($_POST['approve']))
{
$sql="update admin set status = 1 WHERE id = '$adminid'";

if ($con->query($sql) == true)
{
echo "data submitted";
header("location:ApproveEmployer.php");
}
}


else if (isset($_POST['block']))
{
    $sql="update admin set status = 0 WHERE id = '$adminid'";

    if ($con->query($sql) == true)
    {
        echo "data submitted";
        header("location:ApproveEmployer.php");
    }
}
?>