<?php
    
    if(isset($_POST['submit']))
    {
        $cname = $_POST['cname'];
        $location = $_POST['location'];
        $email = $_POST['email'];
        $phonenum = $_POST['phonenum'];
        $sdate = $_POST['sdate'];
        $edate = $_POST['edate'];
        $payment = $_POST['payment'];
        $feedback = $_POST['feedback'];
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

    $sql = "INSERT INTO feedbackdetails ( clientname, location, email, phonenum, startdate, enddate, payment, feedback) VALUES ( '$cname', '$location','$email', '$phonenum', '$sdate', '$edate', '$payment','$feedback')";
    
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Your Feedback has been Registered Successfully :) ";
        echo " <br><a href='index.html'> Click to Home page</a> ";
    }
   
    mysqli_close($con);

?>