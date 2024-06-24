<html>
    <head>
</head>
<body>
    <?php
    /*
        4-  Write a PHP script to get the sum and avg of an indexed array
        with value = 45 in index =1
        with value = 12 in index =0
        with value = 25 in index =3
        with value = 10 in index =2
    */
    function avg($arr)
    {
        return array_sum($arr) / count($arr);
    }
    function compare1($e1, $e2) //sort ascending
    {
        return $e1 > $e2;
    }
    function compare2($e1, $e2)//sort descending 
    {
        return $e1 < $e2;
    }
    $arr = array(12,45, 10, 25 );
    echo "sum = ". array_sum($arr) . nl2br("\r\n");
    echo "average = ". avg($arr) . nl2br("\r\n");
    sort($arr);
    $arr = array_reverse($arr);
    print_r($arr); // 45 25 12 10
    echo nl2br("\r\n");
    echo nl2br("\r\n");
    echo nl2br("\r\n");
        /*
        5-  Write a PHP script to sort the following associative array :
    
    array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40) in
    a) ascending order sort by value
    b) ascending order sort by Key
    c) descending order sorting by Value
    d) descending order sorting by Key
    */
    $arr2 = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);
    echo "original array : ";
    print_r($arr2);
    echo nl2br("\r\n");
    //a asc by value
    uasort($arr2, "compare1");
    echo "sort asc by value : ";
    print_r($arr2);
    echo nl2br("\r\n");
    //b asc by key
    echo "sorty asc by key ";
    uksort($arr2, "compare1");
    print_r($arr2);
    echo nl2br("\r\n");
    //c desc by value
    echo "sort desc by value ";
    uasort($arr2, "compare2");
    print_r($arr2);
    echo nl2br("\r\n");
    //d deesc by key
    echo "sort desc by key ";
    uksort($arr2, "compare2");
    print_r($arr2);


    ?>
</body>
    </html>