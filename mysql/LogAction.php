<?php
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];

    $con = new mysqli("localhost","root","","test");
    if($con->connect_error)
    {
        die("Failed to connect: ".$con->connect_error);
    }
    else
    {
        $stmt = $con->prepare("select * from uregistration where username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0)
        {
            $data = $stmt_result->fetch_assoc();
            if($data['pwd'] === $pwd)
            {
                echo "<h2>Welcome</h2>";
            }
            else
            {
                echo "<h2>Invalid username or password</h2>";
            }
        }
        else
        {
            echo "<h2>Invalid username or password</h2>";
        }
    }
?>