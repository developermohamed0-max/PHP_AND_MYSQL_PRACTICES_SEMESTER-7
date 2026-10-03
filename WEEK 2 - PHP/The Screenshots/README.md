# Week 2 PHP Screenshots

This README documents the 10 screenshots in this folder, which illustrate the PHP examples practiced during Week 2. The screenshots correspond to the code in [../Codes/loops.php](../Codes/loops.php) and [../Codes/associativeArray.php](../Codes/associativeArray.php).

## Folder Contents

- [01.png](01.png)
- [02.png](02.png)
- [03.png](03.png)
- [04.png](04.png)
- [05.png](05.png)
- [06.png](06.png)
- [07.png](07.png)
- [08.png](08.png)
- [09.png](09.png)
- [10.png](10.png)

---

## 1. For Loop Example

[01.png](01.png)

This screenshot shows the basic `for` loop structure in PHP. The loop starts at `1` and continues while the value is less than or equal to `5`, printing each number on a new line.

Purpose:
- Demonstrates loop initialization, condition, and increment
- Shows how repeated output is generated in PHP

---

## 2. For Loop Output

[02.png](02.png)

This screenshot shows the output of the `for` loop example. Each value from `1` to `5` is printed on the browser page.

Purpose:
- Illustrates how loop logic produces repeated output
- Helps understand the relationship between code and result

---

## 3. do-while Loop Example

[03.png](03.png)

This screenshot shows a `do...while` loop. In this structure, the loop body executes at least once before the condition is checked.

Purpose:
- Explains the difference between `do...while` and `while`
- Demonstrates repeated execution with a condition at the end

---

## 4. Factorial Example Using do-while Loop

[04.png](04.png)

This screenshot shows a factorial calculation using a `do...while` loop. The variable `result` is multiplied repeatedly while `n` is greater than `0`.

Purpose:
- Demonstrates iteration with multiplication logic
- Shows how loops can be used for calculations, not only printing values

---

## 5. While Loop Example

[05.png](05.png)

This screenshot shows a `while` loop that prints numbers from `1` to `5`.

Purpose:
- Demonstrates the condition-controlled loop structure
- Shows how `count` is updated after each iteration

---

## 6. Multiplication Example Using While Loop

[06.png](06.png)

This screenshot shows a `while` loop generating a multiplication pattern for `12`.

Example logic:
- The loop runs while the count is less than or equal to `12`
- Each value is multiplied by `12` and displayed

Purpose:
- Shows how loops can generate repeated arithmetic output
- Reinforces understanding of condition-based iteration

---

## 7. Break and Continue Example

[07.png](07.png)

This screenshot demonstrates the use of `break` and `continue` in a `for` loop. It stops execution when the loop reaches `5` and skips the iteration at `3`.

Purpose:
- Shows how to stop a loop early
- Demonstrates skipping selected iterations without ending the loop completely

---

## 8. Nested Loops for Multiplication Table

[08.png](08.png)

This screenshot shows a nested loop example used to create a multiplication table. The outer loop controls the first number and the inner loop controls the second number.

Purpose:
- Introduces nested loops in PHP
- Demonstrates how a multiplication table can be generated using repeated loops

---

## 9. Associative Array Example

[09.png](09.png)

This screenshot shows an associative array being declared with keys such as name, age, and city. The values are stored using the `=>` operator.

Example:

```php
$person = array(
    "name" => "Mohamed Salman Afan",
    "age" => 22,
    "city" => "Mogadishu"
);
```

Purpose:
- Explains key/value pairs in PHP
- Shows how data can be stored using meaningful labels instead of numeric indexes

---

## 10. Associative Array Output Using foreach

[10.png](10.png)

This screenshot shows the output of an associative array displayed using `foreach`. The loop prints both keys and values, such as `name: Mohamed Salman Afan`.

Purpose:
- Demonstrates how associative arrays are accessed and displayed
- Shows how `foreach ($person as $key => $value)` works in PHP

---

## Summary

These 10 screenshots cover the major PHP control structures and array concepts discussed in Week 2, including:

- `for` loops
- `while` loops
- `do...while` loops
- `break` and `continue`
- nested loops
- associative arrays
- `foreach` loops

This set of screenshots represents the practical work completed during the Week 2 PHP exercises and can be used for revision, reporting, and assignment documentation.
