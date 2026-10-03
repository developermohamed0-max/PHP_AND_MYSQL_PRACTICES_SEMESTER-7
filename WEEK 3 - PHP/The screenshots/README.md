# Week 3 PHP Screenshots

This README explains the screenshots included in the Week 3 PHP lesson. These images illustrate the practical examples for multidimensional arrays, array functions, associative arrays, and basic PHP functions.

## Folder Contents

- [01.png](01.png)
- [02.png](02.png)
- [03.png](03.png)
- [04.png](04.png)
- [05.png](05.png)

---

## 1. Two-Dimensional Numeric Indexed Array

[01.png](01.png)

This screenshot shows a two-dimensional numeric indexed array that stores student records. Each student is represented by an inner array containing a name, ID, and year value.

Example concept:

```php
$students = array(
    array("Mohamed", "CA2313", 2025),
    array("Ali", "CA2314", 2026),
    array("Abdi", "CA2315", 2027)
);
```

### Definition
A multidimensional array is an array that contains other arrays. In this case, each student record is itself an array nested inside the main array.

### Purpose
- Organizes related data in rows and columns
- Stores structured information such as name, code, and year
- Allows access to each item using index positions

---

## 2. Displaying Data from a Two-Dimensional Array

[02.png](02.png)

This screenshot shows how the program loops through the outer array and prints each value from the inner arrays using indexes.

Example concept:

```php
foreach ($students as $student) {
    echo $student[0]."<br>";
    echo $student[1]."<br>";
    echo $student[2]."<br>";
}
```

### Definition
A `foreach` loop is used to iterate through each element of an array. In a multidimensional array, each iteration gets one inner array.

### Purpose
- Displays all student values one by one
- Shows how nested array elements are accessed using indexes
- Demonstrates practical use of loops with arrays

---

## 3. `is_array()` and `in_array()` Functions

[03.png](03.png)

This screenshot demonstrates array checks in PHP. The code tests whether the variable is an array using `is_array()`, and then checks whether a value exists in a nested array using `in_array()`.

### Definitions
- **`is_array()`**: A built-in PHP function that checks whether a variable is an array.
- **`in_array()`**: A built-in PHP function that checks whether a specific value exists inside an array.

### Purpose
- Verifies the data type of a variable
- Searches for a given value within an array
- Helps validate data before processing it further

---

## 4. Associative Array Example

[04.png](04.png)

This screenshot shows an associative array where values are stored with key names instead of numeric indexes.

Example concept:

```php
$info = array(
    "name" => "Mohamed",
    "age" => 20,
    "country" => "Egypt"
);
```

### Definition
An associative array is an array where each value is associated with a named key. The key is written before the arrow `=>`, and the value comes after it.

### Purpose
- Stores data in meaningful name/value pairs
- Makes code easier to read and understand
- Allows retrieval by key name instead of numeric index

---

## 5. `count()` Function and Array Size

[05.png](05.png)

This screenshot shows the use of the `count()` function to calculate the size of an associative array.

Example concept:

```php
echo "The size of the info array is: " . count($info);
```

### Definition
The `count()` function returns the number of elements in an array.

### Purpose
- Measures the length of an array
- Helps check how many elements are stored
- Useful when looping or validating data

---

## Summary

The five screenshots in this folder cover the major topics taught in Week 3:

- multidimensional arrays
- nested array access
- `is_array()` and `in_array()`
- associative arrays
- `count()` and array size checking

These examples are important because they show how PHP stores, checks, and displays structured data in a practical and organized way.

## Related Files

- [../Code/Two_dimensional_numeric_indexed.php](../Code/Two_dimensional_numeric_indexed.php)
- [../WEEK 3 - READ ME.md](../WEEK%203%20-%20READ%20ME.md)
