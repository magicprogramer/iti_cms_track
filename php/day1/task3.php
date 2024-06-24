<html>
    <head>
</head>
<body>
    <?php
    $age = 10;
    switch($age)
    {
        case $age < 5:
            echo "Stay at Home";
            break;
        case $age == 5:
            echo "Go to Kindergarden,";
            break;
        case $age > 5 && $age <= 12 :
            echo "Go to grade ".( $age - 6);
            break;
    }
    ?>
</body>
    </html>
