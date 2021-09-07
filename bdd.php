        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "workshop";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

?>