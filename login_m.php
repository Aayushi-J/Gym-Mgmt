<?php
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $conn=new mysqli('localhost','root','','test');
    if($conn->connect_error)
    {
        die('Connection failed: '.$conn->connect_error);
    }
    else{
        $stmt=$conn->prepare("insert into login(Username, Password) values (?, ?)");
        $stmt->bind_param("ss",$Username,$Password);
        $stmt->execute();
        echo "registeration success!"; 
        $stmt->close();
        $conn->close();
    }
?>