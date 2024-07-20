<?php
    $Fname = $_POST['Fname'];
    $Email = $_POST['Email'];
    $Address = $_POST['Address'];
    $City = $_POST['City'];
    $State = $_POST['State'];
    $Zip = $_POST['Zip'];
    $Ncard = $_POST['Ncard'];
    $Cno = $_POST['Cno'];

    $conn=new mysqli('localhost','root','','test');
    if($conn->connect_error)
    {
        die('Connection failed: '.$conn->connect_error);
    }
    else{
        $stmt=$conn->prepare("insert into payment(Fname, Email, Address, City, State, Zip, Ncard, Cno) values (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssisi",$Fname, $Email, $Address, $City, $State, $Zip, $Ncard, $Cno);
        $stmt->execute();
        echo "registeration success!"; 
        $stmt->close();
        $conn->close();
        header("Location: http://localhost/scoopism/Main.html");
    }
?>