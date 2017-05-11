<?php
$servername ="tsuts.tskoli.is";
$username ="0510942049";
$password ="mypassword";
$dbname ="0510942049_lokaverkefni";
/*$name = $_POST['Name'];
$price = $_POST['Price'];
$description = $_POST['Description'];
$picture = $_POST['Picture'];
*/
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/*$sql = "SELECT ID FROM lokaverkefni"
$result = $conn->query($sql);
$result = $result.count()

for ($i = 0; $x <= $result; $i++) {
    $fetch = "SELECT Name, Price, Description, Picture FROM gear WHERE ID = $i";
    $result = $conn->query($fetch);

try 
	{
		$sql = "SELECT * FROM gear";
		$result = $pdo->query($sql);

	} catch (Exception $e) 
	{
		echo "Ekki tókst að ná í gögnin" . "<br>" . $e->getMessage();
	}
	while ($row = $result -> fetch()) 
	{
		$mynd[] = array($row['Name'],$row['Price'], $row['Description'], $row['Picture']);
	}
*/
/*
public function createUser()
    {
        if (isset($_POST['signup'])) {
            $password = $this->better_crypt($_POST['Password']);
            $sth = $this->db->prepare("INSERT INTO login(username, Password)
      VALUES (:username,'$password')");
            $sth->bindParam(':username', $_POST['username']);
            if (!empty($_POST['username']) && !empty($_POST['Password'])) {
                try {
                    $sth->execute();
                } catch (\PDOException $e) {
                    echo $e;
                }
            }
        }
        return false;
    }
public function Login()
    {
        if (isset($_POST['login'])) {
            $_SESSION['username'] = $_POST['username'];
            if (!empty($username = $_POST['username']) && !empty($password = $_POST['Password'])) {
                $sql = "SELECT * FROM login WHERE username=:username";
                $query = $this->db->prepare($sql);
                $query->execute(array(':username' => $username));
                $results = $query->fetchAll(PDO::FETCH_ASSOC);
                try {
                    if (password_verify($password, $password_hash)) {
                        session_start();
                        session_regenerate_id();
                        $_SESSION['login'] = TRUE;
                        header("Location: $redirect");
                        return TRUE;
                    } else {
                        return FALSE;
                    }
                } catch (Exception $e) {
                    echo $e;
                }
            }
        }
    }
public function SessionCheck()
    {
        //If session is started TRUE/FALSE
        if (php_sapi_name() !== 'cli') {
            if (version_compare(phpversion(), '5.4.0', '>=')) {
                return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
            } else {
                return session_id() === '' ? FALSE : TRUE;
            }
        }
        return FALSE;
    }


?>
*/
$conn->close();
?>