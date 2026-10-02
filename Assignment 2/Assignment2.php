<?php

// Question 1: Write PHP code that declares an array and initialize it to the given values.
$numbers = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

// Question 2: Print all elements of the array.
foreach ($numbers as $number) {
    echo $number . " ";
}

echo "<br>";

// Question 3: Calculate and print total of all elements.
$total = 0;

foreach ($numbers as $number) {
    $total = $total + $number;
}

echo "Total: " . $total . "<br>";

// Question 4: Calculate and print total of even elements.
$evenTotal = 0;

foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        $evenTotal = $evenTotal + $number;
    }
}

echo "Even Total: " . $evenTotal . "<br>";

// Question 5: Calculate and print total of odd elements.
$oddTotal = 0;

foreach ($numbers as $number) {
    if ($number % 2 != 0) {
        $oddTotal = $oddTotal + $number;
    }
}

echo "Odd Total: " . $oddTotal . "<br>";

// Question 6: Find minimum element and its positions.
$min = $numbers[0];
$minPositions = "";

foreach ($numbers as $position => $number) {
    if ($number < $min) {
        $min = $number;
    }
}

foreach ($numbers as $position => $number) {
    if ($number == $min) {
        $minPositions = $minPositions . $position . " ";
    }
}

echo "Minimum: " . $min . "<br>";
echo "Minimum Positions: " . $minPositions . "<br>";

// Question 7: Find maximum element and its positions.
$max = $numbers[0];
$maxPositions = "";

foreach ($numbers as $position => $number) {
    if ($number > $max) {
        $max = $number;
    }
}

foreach ($numbers as $position => $number) {
    if ($number == $max) {
        $maxPositions = $maxPositions . $position . " ";
    }
}

echo "Maximum: " . $max . "<br>";
echo "Maximum Positions: " . $maxPositions . "<br>";


// Question 8: Declare an associative two-dimensional array with Light, Normal, Dark and Red, Green, Blue.

$colors = array(
    "Light" => array(
        "Red" => "Light Red",
        "Green" => "Light Green",
        "Blue" => "Light Blue"
    ),
    "Normal" => array(
        "Red" => "Normal Red",
        "Green" => "Normal Green",
        "Blue" => "Normal Blue"
    ),
    "Dark" => array(
        "Red" => "Dark Red",
        "Green" => "Dark Green",
        "Blue" => "Dark Blue"
    )
);

foreach ($colors as $row => $columns) {
    echo $row . ": ";

    foreach ($columns as $value) {
        echo $value . " ";
    }

    echo "<br>";
}


// Question 9: Declare an associative two-dimensional array with Name, Phone and Address.

$students = array(
    "CA221" => array(
        "Name" => "Mohamed Ahmed Ali",
        "Phone" => "0648440403",
        "Address" => "Laba Dhagax, Wardhiigley"
    ),
    "CA223" => array(
        "Name" => "Ahmed Abdi Jama",
        "Phone" => "0647223201",
        "Address" => "Taleex, Hodan"
    ),
    "CA224" => array(
        "Name" => "Amina Nur Adan",
        "Phone" => "0646990276",
        "Address" => "Macmacaanka, Dharkeynley"
    )
);

foreach ($students as $id => $student) {
    echo "ID: " . $id . "<br>";
    echo "Name: " . $student["Name"] . "<br>";
    echo "Phone: " . $student["Phone"] . "<br>";
    echo "Address: " . $student["Address"] . "<br><br>";
}

?>