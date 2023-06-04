<!DOCTYPE html>
<html>
<head>
  <title>Testing...</title>
  <meta charset="utf-8"/>

</head>

</body>
</html>

<?php
    require '../function/function.php';

	/**
	*  Це єдина функція для запуску всіх тестів. 
	*  Нові тести додаємо тут:
	*/
	function runAllTests() {

	    echo PHP_EOL;
	    echo "Починаю тестування!" . PHP_EOL;

	    // Тут пишемо перелік тестів:
	    echo "<br><br>-=-=-=-=-=-=-=-=-=-=-<br>";
	    shortString();
	    echo "<br><br>-=-=-=-=-=-=-=-=-=-=-<br>";
	    longString();
	    echo "<br><br>-=-=-=-=-=-=-=-=-=-=-<br>";
	    numberString();
	    echo "<br><br>-=-=-=-=-=-=-=-=-=-=-<br>";
	    arrayString();
	    echo "<br><br>-=-=-=-=-=-=-=-=-=-=-<br>";
	    boolString();
	    echo "<br><br>-=-=-=-=-=-=-=-=-=-=-<br>";
	    nullString();
	    echo "<br><br>-=-=-=-=-=-=-=-=-=-=-<br>";

	    echo "<br>Тестування завершено!";
	}
	runAllTests();

	/**
	 *  Ця функція перевіряє чи вірно працює isValidEmail().
	 *  Якщо передати у неї слово "test", то функція повинна повернути false.
	 */
	function shortString() {
	    $string = "test";
	    $validationResult = isValidEmail($string);
	    echo "<br>Тестую короткий рядок: " . $string. "" . PHP_EOL;

	    // Якщо поверне true
	    if($validationResult['is_valid']) {
	        // то це означає, що функція працює не вірно! Бо слово test не відповідає довжині у 6 символів.
	        echo "<br>Тест провалено! Функція не працює." . PHP_EOL;
	    } else {
	        // А якщо поверне false, тоді все вірно:
	        echo "<br>Тест успішно пройдено! Функція працює як треба!." . PHP_EOL;
	    }

	    echo PHP_EOL;
	}

	function longString() {
	    $string = "longertestlongertestlongertestlongertestlongertestlongertestlongertest";
	    $validationResult = isValidEmail($string);
	    echo "<br>Тестую довгий рядок: " . $string. "" . PHP_EOL;

	    // Якщо поверне true
	    if($validationResult['is_valid']) {
	        // то це означає, що функція працює не вірно! Бо слово longertestlongertestlongertestlongertestlongertestlongertestlongertest не відповідає довжині у 64 символа.
	        echo "<br>Тест провалено! Функція не працює." . PHP_EOL;
	    } else {
	        // А якщо поверне false, тоді все вірно:
	        echo "<br>Тест успішно пройдено! Функція працює як треба!." . PHP_EOL;
	    }

	    echo PHP_EOL;
	}

	function numberString() {
	    $string = 123456;
	    $validationResult = isValidEmail($string);
	    echo "<br>Тестую цифровий рядок: " . $string. "" . PHP_EOL;

	    // Якщо поверне true
	    if($validationResult['is_valid']) {
	        // то це означає, що функція працює не вірно! Бо цифри не відповідають правильному вводу.
	        echo "<br>Тест провалено! Функція не працює." . PHP_EOL;
	    } else {
	        // А якщо поверне false, тоді все вірно:
	        echo "<br>Тест успішно пройдено! Функція працює як треба!." . PHP_EOL;
	    }

	    echo PHP_EOL;
	}

	function arrayString() {
	    $string = array("test1", "test2", "test3");
	    $validationResult = isValidEmail($string);
	    echo "<br>Тестую масивний рядок: " . $string. "" . PHP_EOL;

	    // Якщо поверне true
	    if($validationResult['is_valid']) {
	        // то це означає, що функція працює не вірно! Бо масив не відповідає правильному вводу.
	        echo "<br>Тест провалено! Функція не працює." . PHP_EOL;
	    } else {
	        // А якщо поверне false, тоді все вірно:
	        echo "<br>Тест успішно пройдено! Функція працює як треба!." . PHP_EOL;
	    }

	    echo PHP_EOL;
	}

	function boolString() {
	    $string = true;
	    $validationResult = isValidEmail($string);
	    echo "<br>Тестую булевий рядок: " . $string. "" . PHP_EOL;

	    // Якщо поверне true
	    if($validationResult['is_valid']) {
	        // то це означає, що функція працює не вірно! Бо булеві вирази не відповідають правильному вводу.
	        echo "<br>Тест провалено! Функція не працює." . PHP_EOL;
	    } else {
	        // А якщо поверне false, тоді все вірно:
	        echo "<br>Тест успішно пройдено! Функція працює як треба!." . PHP_EOL;
	    }

	    echo PHP_EOL;
	}

	function nullString() {
	    $string = null;
	    $validationResult = isValidEmail($string);
	    echo "<br>Тестую пустий рядок: " . $string. "" . PHP_EOL;

	    // Якщо поверне true
	    if($validationResult['is_valid']) {
	        // то це означає, що функція працює не вірно! Бо null не відповідає правильному вводу.
	        echo "<br>Тест провалено! Функція не працює." . PHP_EOL;
	    } else {
	        // А якщо поверне false, тоді все вірно:
	        echo "<br>Тест успішно пройдено! Функція працює як треба!." . PHP_EOL;
	    }

	    echo PHP_EOL;
	}
?>