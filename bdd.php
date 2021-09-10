        <?php
$servername = "localhost";
$username = "id17568963_root";
$password = "WorkshopEPSIB2!";
$dbname = "id17568963_workshop";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

?>