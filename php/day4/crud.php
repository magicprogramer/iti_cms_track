<?php
include "DDL.php";
function create_user($name, $email, $gender = 'M', $stat = 0)
{
        
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = 'root';
    $dbname = 'users';
    $port = 3307;
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $port);
   if (!$conn)
   {
        die("cannot connect to database");
   }
   $query = "insert into users (name, email, gender, mail_status) values ('$name', '$email', '$gender', $stat)";
  // echo $query;
  $result = "";
  try{
        $result = mysqli_query($conn, $query);
  }
  catch (Exception $e)
  {
  }
   if (!$result)
   {
        die("cannot create user");
   }
   echo "<center>user created succesfully !</center>";
   mysqli_close($conn);
}
function retrieve_users()
{
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = 'root';
    $dbname = 'users';
    $port = 3307;
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $port);
    if (!$conn)
    {
        die("cannot connect to database !");
    }
    $sql = "select * from users;";
    $result = mysqli_query($conn, $sql);
    if (!$result)
    {
        die("cannot get data");
    }
    echo "<table > ";
    echo "<tr>";
    echo "<td> # </td>";
    echo "<td> name </td>";
    echo "<td> email</td>";
    echo "<td> gender </td>";
    echo "<td> mail status </td>";
    echo "<td> action </td>";
    echo "</tr>";
    if (mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_assoc($result))
        {
            $id = $row['id'];
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row["name"]  . "</td>";
            echo "<td>" . $row["email"]  . "</td>";
            echo "<td>" . $row["gender"]  . "</td>";
            echo "<td>" . ($row['mail_status'] ? "yes" : "no") . "</td>";
            echo "<td>
            <button>
            view
            </button>
            <button>
            edit
            </buton>
            <button>
            delete
            </buton>
            </td>
            ";
            echo "</tr>";
        }
    }
    else {
        echo "<tr> <td colspan = '6'> there is no data to show </td> </td>";
    }
    
    echo "</table>";
    mysqli_close($conn);
}
function update_user($id, $new_name, $new_email, $new_gender, $new_state)
{
    //todo
}
function delete_user($id)
{
    
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = 'root';
    $dbname = 'users';
    $port = 3307;
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $port);
    $query = "Delete from users where id = $id";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    //todo : call this function with buttons
}
function view_user($id)
{
    //todo
}
?>