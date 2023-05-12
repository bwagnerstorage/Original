<?php
session_start();

function getSolution()
{
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
   $db_name = 'bnwagner_Solutions';
   $db_host = 'localhost';
   $db_user = 'bnwagner_cs1';
   $db_password = "CompSci1";
   $table_name = "table_password";
   $mysqli-> real_connect($db_host, $db_user, $db_password, $db_name);

   if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      exit();
    }

   // Check if server is alive
   if ($mysqli -> ping()) {
      echo "Connection is ok!";

      if(isset($_POST['submit']))
      {
         echo "Crazy1\n";
      }
   } 

      $sql = "SELECT * FROM $table_name";
      echo $sql;
      $mysqli -> real_query($sql);
      if ($results = $mysqli -> use_result()) {
         $row = $results -> fetch_row();
         printf("row1 = %s\n ", $row[0]);
      }
     
	/* $sql = "SELECT * FROM $table_name WHERE 'password' = $password";
    $result = mysqli_query($mysqli, $sql);
    echo "Result = " . $result;
    $row =  mysqli_num_rows($result);
    printf("row = %s\n", $row[0]);*/
   //$url = "http://csregular/unit12_selection/solutions/01_compareSolution.php";
   //echo "url = " . $url;
   $_SESSION['username']="CompSci_Student";

   echo "<script>";
   echo "window.location.href = window.localStorage.getItem('url')";
   echo "</script>";


   $mysqli->close();
   }
   getSolution();

?>
