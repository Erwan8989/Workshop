
<html>
<head></head>
<body>

<?php

@session_start();

$mov = "";
$gal = "";

if (isset($_POST['gal'])) {
$gal=$_POST['gal']; }
 
if (isset($_POST['mov'])) {
$mov=$_POST['mov'];}


if($mov=='moins')
{
$gal--;
}

if($mov=='plus')
{

$gal++;
}


echo '<FORM ACTION="test.php" METHOD=POST>';
echo "<INPUT TYPE=HIDDEN SIZE=1 NAME='mov' VALUE='moins'>";
echo "<INPUT TYPE=HIDDEN SIZE=1 NAME='gal' VALUE='$gal'>";
echo "<INPUT TYPE=SUBMIT VALUE='moins'>";
echo "</FORM>";
echo '<FORM ACTION="test.php" METHOD=POST>';
echo "<INPUT TYPE=TEXT SIZE=4 NAME='gal' VALUE='$gal'>";
echo "<INPUT TYPE=SUBMIT VALUE='Voir'>";
echo "</FORM>";
echo '<FORM ACTION="test.php" METHOD=POST>';
echo "<INPUT TYPE=HIDDEN SIZE=1 NAME='mov' VALUE='plus'>";
echo "<INPUT TYPE=HIDDEN SIZE=1 NAME='gal' VALUE='$gal'>";
echo "<INPUT TYPE=SUBMIT VALUE='plus'>";
echo "</FORM>";
?>

</body>
</html>