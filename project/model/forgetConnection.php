<?php

        include("Connection.php");

         $findresult = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

        if($res = mysqli_fetch_array($findresult))
        {
            $username = $res['username'];
            $password = $res['password'];
            
        }

        if(isset($_POST['submit']))
        {
            $password = $_POST['password'];
            $sql = "SELECT * FROM users WHERE username = '$username'";
            $res = mysqli_query($conn, $sql);

        if(mysqli_num_rows($res)>0)
        {
            $row = mysqli_fetch_assoc($res);


        }
        $result = mysqli_query($conn, "UPDATE users SET password='$password' WHERE username = '$username'");
        if($result)
        {
            echo "Password Recovered <br>";
            echo"Go back to login again";
        }
        else
        {
            echo "Failed";
        }
    }
?>