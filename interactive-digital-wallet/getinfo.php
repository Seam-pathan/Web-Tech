<?php
require_once('db.php');
$connection = new db();
$conobj = $connection->OpenCon();
$userdata = $connection->getinfo($conobj, "dwallet");
$connection->CloseCon($conobj);
$emparray = array();
while ($row = mysqli_fetch_assoc($userdata)) {
    $emparray[] = $row;
}
echo json_encode($emparray);
?>