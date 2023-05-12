
<?php
session_start();

if(!$_POST['password'])
{ 
   log("Enter wrong password response");
   header("Location: /php/show_login.html");
   exit;
}
$password = $_POST['password'];
$db_name = "bnwagner_Solutions";
$table_name = "table_password";
$mysqli = new mysqli("localhost", "bnwagner_cs1", "Kolty0624", $db_name);
//$connection = @mysqli_connect("localhost", "bnwagner_cs1", "Kolty0624") or die(mysqli_error());
$db = @mysqli_select_db($connection, $db_name) or die(mysqli_error());
$sql = "SELECT * FROM $table_name 
        WHERE password = $password";
$result = @mysqli_query($sql, $connection) or die(mysqli_error());
$num = mysqli_num_rows($result);
if($num != 0)
{
    echo "<script>";
    echo "console.log($result);";
    echo "</script>";
}
/*
if($num != 0)
{ 
    $_SESSION['username']="CompSci_Student";
    echo "<script>";
    echo "console.log('test');";
    echo "document.location.href = window.sessionStorage.url";
    echo "</script>";
}
else
{
   header("Location: /php/show_login.html");
   exit;
}
*/
?>

<html>

<head>
    <title>Authentication</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>

<body>
</body>

</html>