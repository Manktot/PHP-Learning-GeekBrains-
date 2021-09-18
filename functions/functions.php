<?php
// Задание 1
function getNumberType(){   // Я не придумал подходящего имени функции
    $a = rand(-100, 100);
    $b = rand(-100, 100);
    $output = "Значение \$a = {$a}, значение \$b = {$b}. <br> Результат работы функции: ";
    $comparison = (($a >= 0) && ($b >= 0))
        ? ( '$a и $b положительные.' )
        : ((($a < 0) && ($b < 0)) ? ('$a и $b отрицательные.') : ('$a и $b разных знаков'));
    return $output . $comparison;
};
$task_01 = getNumberType();

// Задание 2
function getSubsequence(){
    $a = rand((int)0,(int)15);
    $output = "Значение \$a = {$a}. Последовательность чисел: ";

    switch ($a){
        case 1: $output .= "$a, "; $a++;
        case 2: $output .= "$a, "; $a++;
        case 3: $output .= "$a, "; $a++;
        case 4: $output .= "$a, "; $a++;
        case 5: $output .= "$a, "; $a++;
        case 6: $output .= "$a, "; $a++;
        case 7: $output .= "$a, "; $a++;
        case 8: $output .= "$a, "; $a++;
        case 9: $output .= "$a, "; $a++;
        case 10: $output .= "$a, "; $a++;
        case 11: $output .= "$a, "; $a++;
        case 12: $output .= "$a, "; $a++;
        case 13: $output .= "$a, "; $a++;
        case 14: $output .= "$a, "; $a++;
        case 15: $output .= "$a"; break;
    }
    return $output;
}
$task_02 = getSubsequence();

function getSubsequenceRecursion($a, $history = NULL, $c = NULL){

    if ($a === 16) {
        return
            "Значение \$a для рекурсии: {$c[0]}. Последовательный вывод через рекурсию: "
            . substr($history,0,-2); //  Удаляем последнюю запятую
    }
    $history .= "{$a}, ";
    $c[] = $a; // Такой способ сохранить первоначальное значение $a
    return (getSubsequenceRecursion($a + 1, "{$history}", $c));
}
$task_02_recursion = getSubsequenceRecursion(rand((int)0,(int)15));

// Задание 3
function getAddition($a, $b){
    return "Операция сложения ({$a}) + ({$b}) = " . ($a + $b);
}

function getSubtraction($a, $b){
    return "Операция вычитания ({$a}) - ({$b}) = " . ($a - $b);
}

function getMultiplication ($a, $b){
    return "Операция умножения ({$a}) * ({$b}) = " . ($a * $b);
}

function getDivision ($a, $b){
    if ($b === 0) return "Ошибка! На ноль делить нельзя.";
    return "Операция деления ({$a}) : ({$b}) c округлением до 2 знаков = " . (round($a / $b, 2));
}


// Задание 4
function mathOperation($arg1, $arg2, $operation){
    // Возможно имелась ввиду конструкция вроде $$operation. Но я не стал так делать, т.к пользователь может вызвать
    // нежелательную функцию. К тому же вы сами продемонстрировали решение в видео.

    $result = NULL;
    switch ($operation){
        case "getAddition": $result = getAddition($arg1, $arg2); break; // Пишут, что return в switch - плохая идея
        case "getSubtraction": $result = getSubtraction($arg1, $arg2); break;
        case "getMultiplication": $result = getMultiplication($arg1, $arg2); break;
        case "getDivision": $result = getDivision($arg1, $arg2); break;
        default: return "Указанная функция {$operation} еще не создана или допущена ошибка в названии. Рандом указал на нее :)";
    }
    return $result;
}

function getRandomFunctionName(){ // Для вашего удобства. Так вам не потребуется менять что-то в коде для проверки.
    $functions = ["getAddition", "getSubtraction", "getMultiplication", "getDivision", "destroyAllHuman"];
    $roll = rand(0,4);
    return $functions[$roll];
}
$task_04 = mathOperation(
    rand(-100, 100),
    rand(-100,100),
    getRandomFunctionName() // Получим случайную функцию из ранее созданных, плюс одна с неправильным названием
);

// Задание 5 в отдельной папке Task_05

// Задание 6
function power($val, $pow, $log = NULL){
    $log[] = $val; //для хранения первоначального значения
    $log[] = $pow; // Для вывода на какую степень возводится
    if ($pow === 1) return "Возвести число {$log[0]} в степень {$log[1]} = " . $val;
    return power($val * $log[0], $pow - 1, $log);
};
$task_06 = power(
    rand(0, 10),
    rand(1, 5) // Хватит и 5 для отображения результата
);

function getTime(){
    $time = [(int)(date("H")), (int)(date("i"))]; // Похоже date отдает string

    // Отрабатываем исключение: 11, 12, 13, 14 часов и 2, 3, 4 часа
    $hour = ($time[0] > 10) && ($time[0] < 15) || ($time[0] < 5)? $time[0] : (int)substr($time[0], 1);

    // Отрабатываем исключение: 11, 12, 13, 14 минут и 02, 03, 04 минуты
    $minutes = ($time[1] > 11) && ($time[1] < 15) || ($time[1] < 5) ? $time[1] : (int)substr($time[1], 1);

// Можно и через цикл, но switch нагляднее
    switch ($hour){ // Без массивов и других функций только наверно так
        case 0:
        case 5:
        case 6:
        case 7:
        case 8:
        case 9:
        case 11:
        case 12:
        case 13:
        case 14:
            $hour = "Сейчас {$time[0]} часов и "; break;
        case 2:
        case 3:
        case 4:
            $hour = "Сейчас {$time[0]} часа и "; break;
        default: $hour = "Сейчас {$time[0]} час и "; break;
    }

    switch ($minutes){ // Дубль...
        case 0:
        case 5:
        case 6:
        case 7:
        case 8:
        case 9:
        case 11:
        case 12:
        case 13:
        case 14:
            $minutes = "{$time[1]} минут."; break;
        case 2:
        case 3:
        case 4:
            $minutes = "{$time[1]} минуты."; break;
        default: $minutes = "{$time[1]} минута."; break;
    }

    return $hour . $minutes;
}
$task_07 = getTime();

