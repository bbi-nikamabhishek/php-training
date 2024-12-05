<?php

// 1. Creating Arrays
$fruits = ["Apple", "Banana", "Cherry", "Date"];
$person = [
    "name" => "John",
    "age" => 30,
    "city" => "New York"
];
$students = [
    ["name" => "Alice", "age" => 22, "grade" => "A"],
    ["name" => "Bob", "age" => 23, "grade" => "B"],
    ["name" => "Charlie", "age" => 21, "grade" => "C"]
];

// 2. Using `foreach` Loop
echo "<h3>Using foreach Loop</h3>";
echo "Indexed Array: <br>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

echo "Associative Array: <br>";
foreach ($person as $key => $value) {
    echo "$key: $value<br>";
}

echo "Multidimensional Array: <br>";
foreach ($students as $student) {
    echo "Name: " . $student['name'] . ", Age: " . $student['age'] . ", Grade: " . $student['grade'] . "<br>";
}

// 3. Adding, Removing, and Manipulating Array Elements
$fruits[] = "Elderberry";
array_push($fruits, "Fig");
array_pop($fruits);
array_shift($fruits);
array_unshift($fruits, "Avocado");
$person["age"] = 31;

// 4. Sorting Arrays
echo "<h3>Sorting Arrays</h3>";
sort($fruits);
echo "Sorted Fruits: <br>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

ksort($person);
echo "Sorted Person by Key: <br>";
foreach ($person as $key => $value) {
    echo "$key: $value<br>";
}

asort($person);
echo "Sorted Person by Value: <br>";
foreach ($person as $key => $value) {
    echo "$key: $value<br>";
}

// 5. Array Filtering and Mapping
$adults = array_filter($students, function($student) {
    return $student['age'] >= 22;
});

echo "<h3>Filtered Students (Age >= 22):</h3>";
foreach ($adults as $student) {
    echo "Name: " . $student['name'] . ", Age: " . $student['age'] . ", Grade: " . $student['grade'] . "<br>";
}

$upperCasedFruits = array_map('strtoupper', $fruits);
echo "Uppercase Fruits: <br>";
foreach ($upperCasedFruits as $fruit) {
    echo $fruit . "<br>";
}

// 6. Merging Arrays
$moreFruits = ["Grape", "Honeydew", "Iced Apple"];
$allFruits = array_merge($fruits, $moreFruits);

echo "<h3>Merged Fruits:</h3>";
foreach ($allFruits as $fruit) {
    echo $fruit . "<br>";
}

// 7. Searching and Checking in Arrays
$searchResult = in_array("Apple", $fruits) ? "Apple found!" : "Apple not found!";
echo "<h3>Searching in Array:</h3>";
echo $searchResult . "<br>";

$key = array_search("New York", $person);
echo "The key for 'New York' in person array: " . $key . "<br>";

// 8. Array Splice and Slice
$slicedFruits = array_slice($fruits, 1, 2);
echo "<h3>Sliced Fruits (from index 1, 2 items):</h3>";
foreach ($slicedFruits as $fruit) {
    echo $fruit . "<br>";
}

$removedFruits = array_splice($fruits, 1, 2);
echo "<h3>Array After Splice (removed 2 items starting from index 1):</h3>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

echo "Removed Fruits: <br>";
foreach ($removedFruits as $fruit) {
    echo $fruit . "<br>";
}

// 9. Combining Arrays with Keys
$keys = ["a", "b", "c"];
$values = [1, 2, 3];
$combined = array_combine($keys, $values);
echo "<h3>Combined Array (keys with values):</h3>";
foreach ($combined as $key => $value) {
    echo "$key: $value<br>";
}

// 10. Array Sum and Count
$numbers = [1, 2, 3, 4, 5];
echo "<h3>Array Sum and Count:</h3>";
echo "Sum of numbers: " . array_sum($numbers) . "<br>";
echo "Count of numbers: " . count($numbers) . "<br>";

// 11. Resetting and Reversing Arrays
$reversedFruits = array_reverse($fruits);
echo "<h3>Reversed Fruits:</h3>";
foreach ($reversedFruits as $fruit) {
    echo $fruit . "<br>";
}

reset($fruits);
echo "<h3>First Element after Reset:</h3>";
echo current($fruits) . "<br>";

// 12. Multidimensional Array Iteration with `foreach`
echo "<h3>Iterating Over Multidimensional Array:</h3>";
foreach ($students as $student) {
    echo "Name: " . $student['name'] . " | ";
    echo "Age: " . $student['age'] . " | ";
    echo "Grade: " . $student['grade'] . "<br>";
}

?>
