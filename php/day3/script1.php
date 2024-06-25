<?php


$students = [
    ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'track' => 'PHP'],
    ['name' => 'Shamy', 'email' => 'ali@test.com', 'track' => 'CMS'],
    ['name' => 'Youssef', 'email' => 'basem@test.com', 'track' => 'PHP'],
    ['name' => 'Waleid', 'email' => 'farouk@test.com', 'track' => 'CMS'],
    ['name' => 'Rahma', 'email' => 'hany@test.com', 'track' => 'PHP'],
];

echo "<table>";
echo "<tr>";
echo "<td> <b> name </b> </td>";
echo "<td> <b> email </b> </td>";
echo "<td> <b> track </b> </td>";
echo "</tr>";
foreach($students as $student)
{
    if ($student['track'] == 'CMS')
        echo "<tr style = 'color : red;'>";
    else 
        echo "<tr>";
    echo "<td>";
    echo $student['name'];
    echo "</td>";
    echo "<td>";
    echo $student['email'];
    echo "</td>";
    echo "<td>";
    echo $student['track'];
    echo "</td>";
    echo "</tr>";
}

echo "<table>";
?>