<?php
function task1($data, $return = false)
{
    $result = implode(" ", array_map(function ($word) {
        return "<p>$word</p>";
    }, $data));

    if($return) {
        return $result;
    }
    echo $result;
}

function task2($operation, ...$numbers)
{
    foreach($numbers as $number) {
        if(!is_int($number) && !is_float($number)) {
            return "$number is not a number";
        }
    }
    switch ($operation) {
        case '+':
            return array_sum($numbers);
        case '-':
            return array_shift($numbers) - array_sum($numbers);
        case '*':
            $result = 1;
            foreach ($numbers as $number) {
                $result = $result * $number;
            }
            return $result;
        case '/':
            $result = array_shift($numbers);
            foreach ($numbers as $number) {
                if($number == 0) {
                    return "Divide by zero is not allowed";
              }
                $result = $result / $number;
            }
            return $result;
        default: return "$operation is not an operation";
    }
}

function task3($var1, $var2)
{
    if(!is_int($var1) || !is_int($var2)) {
        echo "Both variables must be integers";
        return null;
    }
    echo "<table>";
    for($i = 1; $i <= $var1; $i++) {
        echo "<tr> \n";
        for($j = 1; $j <= $var2; $j++) {
            $res = $i * $j;
            echo "<td>$res</td> \n";
        }
    }
    echo "</table>";
}

function task4()
{
    date_default_timezone_set('Europe/Riga');
    echo date('d.m.Y H:i');
    echo "<br>";
    echo strtotime('24.02.2016 00:00:00');
}

function task5()
{
    $string1 = "Карл у Клары украл Кораллы";
    echo str_replace('К', '', $string1);
    echo "<br>";
    $string2 = "Две бутылки лимонада";
    echo str_replace('Две', 'Три', $string2);
}

function getFileContents($filename)
{
    $fp = fopen($filename, 'r');
    if(!$fp) {
        return false;
    }
    $str = '';
    while(!feof($fp)) {
        $str .= fgets($fp, 1024);
    }
    echo $str;
}