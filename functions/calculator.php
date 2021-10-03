<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $arg1 = $_POST['arg1'];
    $arg2 = $_POST['arg2'];
    $operation = $_POST['operation'];
    if (is_numeric($arg1) && is_numeric($arg2)) {
        $result = mathOperation($arg1, $arg2, $operation);
    } else {
        $result = "Допускаются только цифры.";
    }
} else {
    $result = "результат.";
}

function mathOperation($arg1, $arg2, $operation){
    $result = null;
    if(is_numeric($arg1) & is_numeric($arg2)){
        switch ($operation){
            case "add": $result = $arg1 + $arg2; break;
            case "sub": $result = $arg1 - $arg2; break;
            case "multi": $result = $arg1 * $arg2; break;
            case "div":
                // Тройная вложенность, наверно не очень хорошо.
                $arg2 == 0 ? $result = "На ноль делить нельзя" : $result = $arg1 / $arg2;  break;
        }
    } else {
        $result = "Допускаются только цифры.";
    }
    return $result;
}
