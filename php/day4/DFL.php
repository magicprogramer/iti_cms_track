<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'root';
   $dbname = 'mysql';
   $port = 3307;
   //create the db users
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $port);
   if (!$conn)
   {
    die("couldn't connect");
   }
  $sql = "create database if not exists users";
   $query = mysqli_query($conn, $sql);
   if (!$query)
   {
        die("database can't be created !");
   }
   mysqli_close($conn);
  //use the users database
   $dbname = "users";
   $conn  = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $port);
   if (!$conn)
   {
    die("cannot connect to users db !");
   }
   mysqli_select_db($conn, $dbname);
   //create users table

   $queries = "create_table.sql";
   $fsql = fopen($queries, "r");
   $sql = fread($fsql, filesize(($queries)));
   fclose($fsql);
   $query = mysqli_query($conn, $sql);
   if (!$query)
   {
    die ("cannot create users table");
   }
   mysqli_close($conn);
?>
    