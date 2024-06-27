<?php
function start_session()
{
    if (!isset($_SESSION))  
        session_start();
    if (isset($_SESSION['views']))
    {
        echo "welcome back " . $_SESSION['username'] . "this is ur " . ++ $_SESSION['views'] . " visit".nl2br("\r\n");
    }
    else
    {
        $_SESSION['views'] = 1;
        $_SESSION['username'] = "ahmed";
        echo "hello new user u visited this page " . $_SESSION['views'] . " times";
    }
    echo "cookies" . nl2br("\r\n");
    show_cookies();
    echo "session". nl2br("\r\n");
    show_session();
}
function show_cookies()
{
    echo "<table>";
    foreach($_COOKIE as $key => $value)
    {
        echo "<tr>";
        echo "<td>";
        echo $key;
        echo "</td>";
        echo "<td>";
        echo $value;
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
function show_session()
{
  
    echo "<table>";
    foreach($_SESSION as $key => $value)
    {
        echo "<tr>";
        echo "<td>";
        echo $key;
        echo "</td>";
        echo "<td>";
        echo $value;
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";  
}
function reset_session()
{
    if (!isset($_SESSION))
        session_start();
    session_destroy();
    setcookie("PHPSESSID", "", time() - 1, "/");
    unset($_SESSION);
}
?>