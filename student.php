<?php
    $connect = mysqli_connect('localhost','root','','university');


    if(!($connect))
    {
        echo "Could not connect to the database".mysqli_connect_error();
    }else{

    $regno = $_POST['regno'];
    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $mname = $_POST['mname'];
    $sex = $_POST['sex'];
    $year = $_POST['yob'];
    
    $sql ="INSERT INTO students (registration_number,fname,mname,sname,gender,year) VALUES('$regno','$fname','$mname','$sname','$sex','$year')";

        if(mysqli_query($connect,$sql))
        {
            echo "Record inserted successfully";
        }else{
            echo "Record unsuccessful".mysqli_error($connect);
        }

        // (mysqli_query($connect,$sql)) ? ( "Record inserted successfully"):("Record unsuccessful".mysqli_error($connect));

    }
?>