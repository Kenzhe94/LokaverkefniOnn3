<?php
		include 'dbcon.php';
        $name = $_POST['username'];
        $pass = $_POST['password'];

        $query = "SELECT 'username' FROM login WHERE username = '$name' AND password = '$pass'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

        if (mysqli_num_rows($result) == 1) {
            echo '<script language="javascript">';
            echo 'alert("nafnið er nu þegar tekið")';
            echo '</script>';
            echo "<script>setTimeout(\"location.href = './SignUp.php';\",1500);</script>";
        }

        else {
            $sql = "INSERT INTO login (username, password) VALUES ('$name', '$pass');";
            $conn -> query($sql);
            echo '<script language="javascript">';
            echo 'alert("Notandi er skráður")';
            echo '</script>';
            echo "<script>setTimeout(\"location.href = './index.php';\",1500);</script>";
        }
?>