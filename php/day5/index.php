<html>
    <head>
        <style>
            body {
                background-color : 
                <?php
                session_start();
                //we use the mod operation to make colors repeat cyclicly 
                $colors = ['red', 'green', 'blue'];
                echo $colors[$_SESSION['views'] % 3];
                ?>
                ;
            }
            </style>
    </head>
    <body>
        <?php
        include 'task1.php';
        start_session();
        ?>
        <a href = "delete_session.php"> delete session </a>
</body>
    </html>