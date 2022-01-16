<?php
    require 'src/functions.php';

    //task1

    $data = ['I', 'love', 'PHP'];
    task1($data, true);

    //task2
    $res = task2('3', 1,2,3,4);
    echo "Task 2 result: $res";
    echo "<br>";

    //task3
    task3(4,5);
    echo "<br>";

    //task4
    task4();
    echo "<br>";
    echo "<br>";

    //task5
    task5();
    echo "<br>";

    //task6
    file_put_contents('test.txt', 'Hello again!');
    getFileContents('test.txt');


