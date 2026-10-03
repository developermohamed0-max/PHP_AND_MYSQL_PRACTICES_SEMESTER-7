<?php

// Two Dimensional Numeric Indexed Array
$students = array(
    array("Mohamed","CA2313",2025),
    array("Ali","CA2314",2026),
    array("Abdi","CA2315",2027)
);

foreach ($students as $student) {
    echo $student[0]."<br>";    
    echo $student[1]."<br>";
    echo $student[2]."<br>";
}


// is_Array()function
if (is_array($students)) {
    echo "The variable is an array.";
} else {
    echo "The variable is not an array.";
}


//in_Array() function
if (in_array("CA2313", $students)) {
    echo "CA2313 is in the array.";
} else {
    echo "CA2313 is not in the array.";
}

//Associative Array
$arrays = array(
    array(90,"Ali",2020),
    array(100,"Jamac",2021)
)

// finding 100 in is the array 0
if (in_array(100, $arrays[0])) {
    echo "100 is in the array.";
} else {
    echo "100 is not in the array.";
}

// info array

$info = array(
    "name" => "Mohamed",
    "age" => 20,
    "country" => "Egypt"
);

// Displaying the size of Array using count() function
echo "The size of the info array is: " . count($info);

?>