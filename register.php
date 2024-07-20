<?php
    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $Username = $_POST['Username'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    $conn=new mysqli('localhost','root','','test');
    if($conn->connect_error)
    {
        die('Connection failed: '.$conn->connect_error);
    }
    else
    {
        $dupl=mysqli_query($conn,"SELECT * FROM register WHERE Username='$Username' OR Email='$Email'");
        {
            if(mysqli_num_rows($dupl)>0)
            {
                echo "<script>alert('Username or Email already exists!');</script>";
            }
            else
            {
                $stmt=$conn->prepare("insert into register(Fname, Lname, Username, Email, Password) values (?, ?, ?, ?, ?)");
                $stmt->bind_param("sssss",$Fname,$Lname,$Username,$Email,$Password);
                $stmt->execute();
                $stmt=$conn->prepare("insert into login(Username1, Email1, Password1) values (?, ?, ?)");
                $stmt->bind_param("sss",$Username,$Email,$Password);
                $stmt->execute();
                $stmt->close();
                header("Location: http://localhost/scoopism/Main.html");
            }
        }
    }
    $conn->close();

?>
