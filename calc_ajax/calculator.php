<?php

function mathOperation($arg1, $arg2, $operation){
    $result = null;
        switch ($operation){
            case "add": $result = $arg1 + $arg2; break;
            case "sub": $result = $arg1 - $arg2; break;
            case "multi": $result = $arg1 * $arg2;  break;
            case "div":
                // Тройная вложенность, наверно не очень хорошо.
                $arg2 == 0 ? $result = "На ноль делить нельзя" : $result = $arg1 / $arg2; break;
        }
    return $result;
}

$arg1 = $_POST['operand1'];
$arg2 = (int)$_POST['operand2'];
$operation = $_POST['operation'];

$result = mathOperation($arg1, $arg2, $operation);


$file=fopen("data.txt", 'w');
$str= $arg1 . " {$operation} " .  $arg2 . " = " .  $result;
fputs($file, $str);
fclose($file);


$responce['result'] = $result;
echo json_encode($responce);