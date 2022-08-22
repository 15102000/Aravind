<?php

if(isset($_POST['process']))
      {
          $name = $_POST['name'];
          $email = $_POST['email'];
          $password = $_POST['password'];

          $host = "localhost";
          $username = "root";
          $password = "";
          $db = "jerry";
          $conn = mysqli_connect($host, $username, $password, $db);
if (!$con)
          {
die("Connection failed!" . mysqli_connect_error());
          }
          $query = "INSERT INTO guvi (name, email, password) VALUES ($name, $email, $password)";
          $run = mysqli_query($conn, $query);
if (run)
          {
echo"Success";
          }
mysqli_close($conn);
      }


?>