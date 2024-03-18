<?php
function isPrime($number) {
    // Проверяем, что число больше 1
    if ($number <= 1) {
        return false;
    }

    // Проверяем делится ли число нацело на какое-либо число от 2 до sqrt($number)
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false; // Если число делится нацело, оно не является простым
        }
    }
    return true; // Если число не делится нацело ни на одно из чисел от 2 до sqrt($number), оно простое
}

// Пример использования функции:
$number = 17;
if (isPrime($number)) {
    echo "$number является простым числом.";
} else {
    echo "$number не является простым числом.";
}
?>