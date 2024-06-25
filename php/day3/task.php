<html>
    <head>
        <style>
            span{
                color:red;
            }
            table, td {
                border : solid 1px red;
                background-color : blue;
            }
            label {
                width : 40%;
            }
            </style>
    </head>
    <body style = "background-color : cyan;">
        <h1>CMS2024 Clas Registration </h1>
        <?php
        include "script1.php";
        ?><center style = "background-color: yellow;">
        <span> * Required field</span><br>
        
        <form action = "<?php $PHP_SELF ?>"
        method = "post">
        <label for = "naem">
            Name : 
</label>
<input type = "text" name = "name" value = "
<?php
if (isset($_POST['submit']) && !empty($_POST["name"]))
{
    echo $_POST["name"];
}
?>"
> <span>*</span>
<?php 
function contain_digits($str)
{
    for ($i = 0; $i < strlen($str); $i ++)
    {
        if (is_numeric($str[$i]))
        {
            return true;
        }
    }
    return false;
}
if (isset($_POST["submit"]))
{
    if (empty($_POST["name"]))
    {
        echo "<span> name is required </span>";
    }
    else if (contain_digits($_POST["name"]))
    {
        $_POST["name"] = "";
        echo "<span> name contains digits </span>";
    }
}
?>
<br>
<label for = "email">
    email 
</label>
<input type = "email" name = "email" value = "
<?php
if (isset($_POST['submit']) && !empty($_POST["email"]))
{
    echo $_POST["email"];
}
?>">
<?php
if (isset($_POST["submit"]))
{
    if (empty($_POST["email"]))
    {
        echo "<span> email is required </span>";
    }
}
?> <span>*</span>
<br>
<lable for = "Group">
    Group # 
</label>
<input typpe = "number" name = "group" value = '
<?php
if (isset($_POST['submit']) && !empty($_POST["group"]))
{
    echo $_POST["group"];
}
?>'> <br>
<label for = "details">
    Class details 
</label>
<textarea wdith = "20px" height = "100px" name = "details" value = "
<?php
if (isset($_POST['submit']) && !empty($_POST["details"]))
{
    echo $_POST["details"];
}
?>">
</textarea><br>
<label for = "gender">
    Gender 
</label>
<input type = "radio" name = "gender" value = "female"> female
<input type = "radio" name = "gender" value = "male"> male
<br>
<lable for = "courses">
    Select courses
</label>
<select  name = "courses[]" multiple>
    <option value = "php" name = "PHP"  >PHP </option>
    <option value = "javascript" name = "js">javascript</option>
    <option value = "mysql" name = "mysql">mysql </option>
</select>
<br>
<label for ="agree"> Agree
</label>
<input type = "checkbox" name = "agree">
<input type = "submit" value = "submit" name = "submit">
</form>
</center>
<?php
if (isset($_POST['submit']))
{
    if (!empty($_POST['name']) && !empty($_POST['email']))
        {
            echo "<h2> your given data are : </h2>";
            echo "name : ".$_POST["name"] . nl2br("\r\n");
            echo "email : ".$_POST['email'] . nl2br("\r\n");
            echo "Group ";
            if (!empty($_POST["group"]))
                echo $_POST['group'] . nl2br("\r\n");
            else echo "empty ". nl2br("\r\n");
            echo "class details " . $_POST["details"] . nl2br("\r\n");
            echo "gender " ;
            if (!empty($_POST["gender"]))
                echo  $_POST["gender"];
            else echo "empty ";
            echo nl2br("\r\n");
            echo "courses  : ";
            if (!empty($_POST['courses']))
                foreach($_POST['courses'] as $course)
                    echo $course . " ";
            else echo "empty ";
        }
}
?>
</body>
</body>
</html>