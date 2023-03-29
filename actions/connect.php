<?php
$con=mysqli_connect("localhost","root","demo123","keystroke");
// if we give some other root password it will show database error

//we show error only if DB is not connected properly
if (!$con){
    die(mysqli_error($con));
}
?>















<!-- password= ovs@ovs123 -->