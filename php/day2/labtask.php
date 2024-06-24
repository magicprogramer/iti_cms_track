
<html>
    <head>
        <style>
            table, td {
                border : solid red 1px;
                background-color : cyan;
            }
            </style>
</head>
<body>
    <?php
    /* 1-  Search for how to make \n work in browser.
    note: <br> */
    echo nl2br("hello \r\n php");
    echo nl2br("\r\n");
    /*2-  Search 3 built-in function of a string.*/
    //count number of words in a string using str_word_count()
    echo str_word_count("this is php lab");
    echo nl2br("\r\n");
    //search for a word withen a string using strpos()
    echo strpos("this is php lab, this is cms track", "is");//it will return
                // 2 which is the position of first occurance of "is"
    echo nl2br("\r\n");
    //removing spacess from left form  a string using crypt() function
    
    echo trim("         hello there");
    echo nl2br("\r\n");
    //display $_SERVER in more readible way
    echo "<table>";
    foreach($_SERVER as $key=>$value)
    {
        echo "<tr>" ;
        echo "<td>" . $key . "</td>" . "<td>" . $value . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    ?>
</body>
    </html>