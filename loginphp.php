<?php
  $Username1 = $_POST["Username"];
  $Email1 = $_POST["Email"];
  $Password1 = $_POST["Password"];
  $conn=new mysqli('localhost','root','','test');
  $result = mysqli_query($conn, "SELECT * FROM login WHERE Username1 = '$Username1' AND Email1 = '$Email1' AND Password1 ='$Password1'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($Password1 == $row['Password1']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      echo "<script> alert('Wrong Password'); </script>";
      header("Location: http://localhost/scoopism/Main.html");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
      header("Location: http://localhost/scoopism/REGISTER.html");

    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
    header("Location: http://localhost/scoopism/REGISTER.html");
  }

?>