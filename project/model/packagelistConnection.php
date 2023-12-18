<?php

    include('Connection.php');
        if($conn->connect_error)
        {
            die("Connection failed: ".$conn->connect_error);
        }

        $sql = "SELECT * FROM package";
        $result = $conn->query($sql);

        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                echo "<tr><td>".$row["packagename"]."</td><td>".$row["hotelname"]."</td><td>".$row["location"]."</td><td>".$row["cost"]."</td><td>".$row["rating"]."</td></tr>";

            }
            echo "</table>";
        }
        else
        {
            echo "No record";

        }
        $conn->close();

    ?>