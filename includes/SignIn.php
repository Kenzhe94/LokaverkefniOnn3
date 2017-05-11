<?php
        $servername = "tsuts.tskoli.is";
        $username = "0510942049";
        $password = "mypassword";
        $dbname = "0510942049_lokaverkefni";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Það tókst ekki að connect-a við database-ið: " . $conn->connect_error);
        }

        $name = $_REQUEST['username'];
        $pass = $_REQUEST['password'];

        $query = "SELECT 'username' FROM login WHERE username = '$name' AND password = '$pass'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

        if (mysqli_num_rows($result) == 1) {
            echo '<script language="javascript">';
            echo 'alert("nafnið er nu þegar tekið")';
            echo '</script>';
            echo "<script>setTimeout(\"location.href = 'sing_up.php';\",1500);</script>";
        }

        else {
            $sql = "INSERT INTO login (username, password) VALUES ('$name', '$pass');";
            $conn -> query($sql);
            echo '<script language="javascript">';
            echo 'alert("Notandi er skráður")';
            echo '</script>';
            echo "<script>setTimeout(\"location.href = 'index.php';\",1500);</script>";
        }
?>