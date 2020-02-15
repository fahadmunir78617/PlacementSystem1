<?php
include "../dbcon.php";;
$delete_ID=$_GET['delete'];

$query="delete from company where id='$delete_ID'";
/*$data = mysqli_query($con,$query);


echo "<script> location='adminhomepage.php' </script>";*/
if ($con->query($query) == true)
{
    echo '<script language="javascript">';
    echo 'alert("Job data delete into database successfully")';
    echo '</script>';

    echo "<script> location='adminhomepage.php'</script>";

}
else {
    echo '<script language="javascript">';
    echo 'alert("Job data is not delete into database")';
    echo '</script>';

    echo "<script> location='adminhomepage.php'</script>";
}
?>