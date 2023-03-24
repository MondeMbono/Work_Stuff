<?php

    if(isset($_POST['Submit']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $number = $_POST['number'];

        $host = "localhost";
        $username = "root";
        $password = "P@ss1234";
        $dbname = "first_db";

        $con = mysqli_connect($host, $username, $password, $dbname);

        if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }

        $sql = "INSERT INTO userdetails (fname, lname, email, number) VALUES ('$fname', '$lname', '$email', '$number')";

        $rs = mysqli_query($con, $sql);
            if($rs)
            {
                echo "Entries added!";
            }

            mysqli_close($con);
    }
?>