<?php
    
    if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $phonenum = $_POST['phonenum'];
        $date = $_POST['date'];
        $time = $_POST['time'];
    }

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "indulekapaintingservices";

    $con = mysqli_connect($host, $username, $password, $dbname);

    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    $sql = "INSERT INTO contactdetails ( fname, email, phonenum, date, time) VALUES ( '$fname', '$email', '$phonenum', '$date', '$time')";
    
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Your Date has been Booked Successfully :) ";
        echo " <br><a href='index.html'> Click to Home page</a> ";
    }
   
    mysqli_close($con);

?>