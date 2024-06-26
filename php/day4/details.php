<html>
    <head>
        <style>
            td{
                border : solid 1px black;
            }
            tr:hover{
                background-color:red;
            }
            </style>
    </head>
    <body>
        
        <h1 style = "display : inline;"> Users Details </h1>
        <a href = "reg.php"><button style = "background-color : green; margin-left: 25%;"> add user</button></a>
    <?php
    include "crud.php";
    
    retrieve_users();
    ?>
    </body>
    </html>