<html>
    <head>
        <style>
            
            body {
                    background-color : <?php
                    //choose a random color based on time 
                    $colors = ['red', 'blue', 'green', 'yellow', 'cyan'];
                    echo $colors[time() % count($colors)];
                    ?>
                }
            </style>
</head>
    <body>
    
        <?php
        include 'crud.php';
        echo $_REQUEST['id'];
        $user = retrieve_userinfo($_REQUEST['id']);
        echo "hello update user " . $user['name'] . 'data';
        ?>
        <form action = "<?php $PHP_SELF ?>"
        method = "post">
            <label for = "name">
                    name
        </label><br>
        <input type = "txt" name = "name" value = "<?php echo $user['name'] ?>">
        <br>
        <label for = "email">
            email </label><br>
            <input type = "email" name = "email" value = "<?php echo $user['email'] ?>" >
            <br>
            <label for = "Gender"> Gender </label>
            <br>
            <input type = "radio" name = "gender" value = "F" > female
            <input type = "radio" name  ="gender" value = "M" > male
            <br>
            <input type = "checkbox" name = "agree"> recieve emails
            <br>
            <input type = "submit" value = "submit" name = "submit">
        </form>
        <a href = "details.php"> users list </a>
        <?php
            if (isset($_REQUEST['submit']))
            {
                update_user($_REQUEST['id'], $_REQUEST['name'], $_REQUEST['email'],
                $_REQUEST['gender'],
                (isset($_REQUEST['mail']) ? 1 : 0));
            }
            ?>
        
        </form>
</body>
    </html>