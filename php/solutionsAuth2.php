<?php

$mysqli = mysqli_init();
if (!$mysqli) {
    die('mysqli_init failed');
}

if (!$mysqli->options(MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT = 0')) {
    die('Setting MYSQLI_INIT_COMMAND failed');
}

if (!$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 5)) {
    die('Setting MYSQLI_OPT_CONNECT_TIMEOUT failed');
}

$password = $_POST['password'];
$db_name = "bnwagner_Solutions";
$table_name = "table_password";

$mysqli-> real_connect('localhost', 'bnwagner_cs1', 'CompSci1', 'bnwagner_Solutions');

// Check if server is alive
if ($mysqli -> ping()) {
   echo "Connection is ok!";
 } 
 else {
   echo "Error 1: ". $mysqli->connect_error;
 }

if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   exit();
 }


 if(empty($password)) {
    echo "Stop2... \n";
    //header("Location: show_login.html");
    exit();
}
else
{
      // hashing the password
      //$pass = md5($password); // not used

      //  echo "Stop3 = ".$password. "\n";
      $sql = "SELECT * FROM '$table_name'";
      echo $sql;
      $mysqli -> real_query($sql);
       
    /*if ($mysqli -> field_count > 0) {*/
   if ($result = $mysqli -> use_result()) {
        $row = $result -> fetch_row();
         printf("row = %s\n", $row[0]);
    }


    


        
	// $sql = "SELECT * FROM '$table_name' WHERE password='$password'";
      // $result = mysqli_query($mysqli, $sql);
      // echo "Result = " . $result;
      // $rows =  mysqli_num_rows($result);
      //  echo "Stop4 = ".$row." \n";
	//	if ($row == 0) {
      //      echo "Stop6... \n";
			//header("Location: /show_login.html");
	    //    exit();
      //  }
      //  else {
            echo "<script>";
            echo "window.location = sessionStorage.getItem('url')";
            echo "</script>";
      //  } 
    }  

$mysqli->close();
?>
