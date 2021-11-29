<?php
class db
{
    function openCon()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "test";
        $con = new mysqli($dbhost, $dbuser, $dbpass, $db);

        return $con;
    }
    function getinfo($con,$table)
    {
        $result = $con->query("SELECT * FROM  $table where status = 'pending'"); 
        return $result;
    }
    function closeCon($con)
    {
        $con->close();
    }
}
?>