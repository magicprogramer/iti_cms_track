<html>
    <head>
        <style>
            td{
                border : solid 1px black;
            }
            tr:hover{
                background-color:red;
            }
            body {
                background-color : <?php
                //choose a random color based on time 
                $colors = ['red', 'blue', 'green', 'yellow', 'cyan'];
                echo $colors[time() % count($colors)];
                ?>
            }
            button {
                    background-color : <?php
                    //choose a random color based on time 
                    $colors = ['red', 'blue', 'green', 'yellow', 'cyan'];
                    echo $colors[(time() + 2) % count($colors)];
                    ?>
            }
            
            table {
                    background-color : <?php
                    
                    //choose a random color based on time 
                    $colors = ['red', 'blue', 'green', 'yellow', 'cyan'];
                    echo $colors[(time() + 1) % count($colors)] ;
                    ?>;

                }
            img {
                width : 70%;
            }
            </style>
    </head>
    <body>
        <?php
            include "crud.php";
            if (isset($_REQUEST['id']))
            {
                if (isset($_REQUEST['operation']))
                {
                    if ($_REQUEST['operation'] == 'delete')
                    {
                        delete_user($_REQUEST['id']);
                    }
                }
            }
            ?>
        <h1 style = "display : inline;"> Users Details </h1>
        <a href = "reg.php"><button style = "margin-left: 25%;"> add user</button></a>
    <script>
            function d()
            {
                
            }
            </script>
    <?php
    retrieve_users();
    ?>
    </body>
    </html>