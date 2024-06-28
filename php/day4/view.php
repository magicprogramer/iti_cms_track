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
        <h1> View Record </h1>
        <?php
            include 'crud.php';
            $user = retrieve_userinfo($_REQUEST['id']);
            foreach($user as $key => $value)
            {
                if ($key == 'mail_status')
                {
                    $text = $value ? "You will recieve mails from us" :
                                        "You won't recieve mails from us";
                    echo $text;
                    break;
                }
                echo "<h2> $key </h2>" . "<p> $value </p>";
                    
            }
        ?>
        <a href = "details.php"> users list </a>
</body>
    </html>