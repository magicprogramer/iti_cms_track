<html>
    <head></head>
    <body>
        <h1>
            <b>
                User Registration Form
            </b> </h1>
            <h3>
                please fill this form and submit to add user to database
            </h3>
        <?php
        include "crud.php";
        ?>
        <?php
        $name = "";
        $email = "";
        if (isset($_POST['submit']) && isset($_POST['name']))$name = $_POST['name'];
        if (isset($_POST['submit']) && isset($_POST['email']))$email = $_POST['email'];
        
        ?>
        <form action = "<?php $PHP_SELF ?>"
        method = "post">
            <label for = "name">
                name
</label><br>
<input type = "txt" name = "name" value = "<?php echo $name ?>">
<br>
<label for = "email">
    email </label><br>
    <input type = "email" name = "email" value = "<?php echo $email ?>" >
    <br>
    <label for = "Gender"> Gender </label>
    <br>
    <input type = "radio" name = "gender" value = "F" > female
    <input type = "radio" name  ="gender" value = "M" > male
    <br>
    <input type = "checkbox" name = "agree"> recieve emails
    <br>
    <input type = "submit" value = "submit" name = "submit">
    <button onclick = "<?php $name = ''; $email = ''; ?>"> Cancel </button>
</form>
<a href = "details.php"> users list </a>
<?php
    if (isset($_POST['submit']))
    {
        $gender = 'M';
        $stat = 0;
        if (isset($_POST['gender']) && $_POST['gender'] == "F")
        {
            $gender = 'F';
        }
        if (isset($_POST['agree']))$stat = 1;
        create_user($_POST["name"], $_POST["email"], $gender, $stat);
    }
?>

</body>
    </html>