<?php

// 1) Strings
// A string is a sequence of characters.
$string_example = "Hello, World!";
echo "String Example: " . $string_example . "<br>";

// 2) Numbers
// PHP supports integer and floating point numbers.
$integer_example = 10; // Integer
$float_example = 10.5; // Float
echo "Integer Example: " . $integer_example . "<br>";
echo "Float Example: " . $float_example . "<br>";

// 3) var_dump()
// The var_dump() function displays structured information (type and value) about one or more variables.
$var_example = array(1, 2, 3);
echo "var_dump Example: ";
var_dump($var_example);
echo "<br>";

// 4) Boolean & Comparison operators
// Boolean values can be TRUE or FALSE. Comparison operators are used to compare values.
$bool_example_true = true;
$bool_example_false = false;

echo "Boolean Example (TRUE): " . var_export($bool_example_true, true) . "<br>";
echo "Boolean Example (FALSE): " . var_export($bool_example_false, true) . "<br>";

$a = 5;
$b = 10;
echo "Comparison Example (a > b): " . var_export($a > $b, true) . "<br>";  // a > b (false)
echo "Comparison Example (a == b): " . var_export($a == $b, true) . "<br>";  // a == b (false)
echo "Comparison Example (a < b): " . var_export($a < $b, true) . "<br>";  // a < b (true)

// 5) if else / Conditional Statements
// The if else statement checks conditions and executes code accordingly.
$age = 18;
if ($age >= 18) {
    echo "You are an adult.<br>";
} else {
    echo "You are not an adult.<br>";
}

// 6) isset, empty & unset
// isset() checks if a variable is set (exists and is not NULL).
// empty() checks if a variable is empty (it is considered empty if it is "", 0, NULL, false, or an empty array).
// unset() destroys a variable.

$var1 = "Hello";
$var2 = "";

echo "isset() Example (var1): " . var_export(isset($var1), true) . "<br>"; // true
echo "isset() Example (var2): " . var_export(isset($var2), true) . "<br>"; // true

echo "empty() Example (var1): " . var_export(empty($var1), true) . "<br>"; // false
echo "empty() Example (var2): " . var_export(empty($var2), true) . "<br>"; // true

unset($var1);
echo "isset() after unset (var1): " . var_export(isset($var1), true) . "<br>"; // false

?>
