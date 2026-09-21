# PHP Programming Screenshots

## Student Information

**Student Name:** Mohamed Salman Afan  
**Course:** Web Application Development - PHP & MySQL  
**Faculty:** Computer & Information Technology  

This folder contains screenshots from my PHP learning exercises. These images show the basic concepts that I am learning in the first week of the course. I used them to better understand how PHP works and how to practice writing simple programs in a web environment.

---

# PHP Introduction

This screenshot introduces PHP as a server-side scripting language used to build dynamic web pages. In this lesson, I learned that PHP is very useful for handling logic, data, and browser output. PHP code is executed on the server before the result is sent to the browser.

Important points I learned:
- PHP files use the `.php` extension.
- PHP code is embedded inside special tags.
- PHP is commonly used with HTML and web servers such as XAMPP.
- It helps in creating interactive and data-driven web applications.

![PHP Introduction](1.%20HELLO%20WORLD.png)

---

# 1. Hello World Program

This screenshot shows the simplest PHP program: printing text on the webpage.

The `echo` statement is used to display output in the browser. A basic example is:

```php
<?php

echo "Hello World!";

?>
```

This helps me understand the basic structure of a PHP script and how PHP output is shown in the browser. It also shows me how to start writing code using the PHP tags.

![Hello World](1.%20HELLO%20WORLD.png)

---

# 2. Using Echo

This screenshot explains how the `echo` statement is used to display text, strings, and values in PHP.

I learned that `echo` is one of the most common ways to output something on a webpage. It can print text and even multiple values at once. `echo` is easy to use and does not return a value.

Example:

```php
<?php

echo "Welcome to PHP";
echo "<br>";
echo "My name is Mohamed Salman Afan";

?>
```

This screenshot helps me understand that `echo` is simple and very useful for showing messages to the user in a browser.

![Using Echo](2.%20USING%20ECHO.png)

---

# 3. Using Print

This screenshot shows how the `print` statement works in PHP. `print` is also used to display text on the webpage, similar to `echo`.

The main difference is that `print` can only take one argument at a time, while `echo` can print multiple values. This is a useful concept I learned while comparing both statements.

Example:

```php
<?php

print "Welcome to PHP";

?>
```

This screenshot helps me understand that `print` is useful for simple output, but `echo` is often preferred because it is more flexible.

![Using Print](3.%20USING%20PRINT.png)

---

# 4. Using Echo and Print Together

This screenshot demonstrates both `echo` and `print` in a single example. It helps compare the two output statements and shows how they behave in the same program.

From this example, I learned that both can display text, but they have some differences:

- `echo` can print more than one value.
- `print` usually prints one value only.
- `echo` is faster and commonly used in PHP programs.

This helps me choose the right statement depending on the task I am working on.

![Echo and Print Together](4.%20USING%20ECHO%20AND%20PRINT%20TOGETHER.png)

---

# 5. Creating Variables and Printing Them

This screenshot explains variables in PHP. Variables are used to store data such as text, numbers, or values that can change while the program runs.

In PHP, variable names start with `$` and can hold many types of data.

Example:

```php
<?php

$name = "Mohamed Salman Afan";
$age = 20;

echo "Name: " . $name;
echo "<br>";
echo "Age: " . $age;

?>
```

This was an important part of my learning because variables are used in almost every PHP project. They help store information and make programs dynamic.

![Variables](5.%20CREATING%20VARIABLES%20AND%20PRINTING%20THEM.png)

---

# 6. Constants

This screenshot introduces constants. A constant is a value that does not change during the execution of the program.

In PHP, constants are declared using `define()` and are usually written in uppercase letters.

Example:

```php
<?php

define("SITE_NAME", "PHP Learning");

echo SITE_NAME;

?>
```

I learned that constants are useful when a value should remain the same throughout the script, such as a website name, application name, or fixed configuration value.

![Constants](6.%20CONSTANTS.png)

---

# 7. If...Else Statement

This screenshot demonstrates conditional statements in PHP. The `if...else` structure is used to decide what action to take based on a condition.

Example:

```php
<?php

$age = 18;

if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are not an adult yet.";
}

?>
```

This helps me understand logic in programming. I can check if a condition is true or false and then display different results accordingly.

![If Else](7.%20IF...ELSE.png)

---

# 8. Switch Statement

This screenshot explains the `switch` statement in PHP. A `switch` is used when there are multiple possible values to check. It is helpful instead of writing many `if...else` conditions.

Example:

```php
<?php

$day = 2;

switch ($day) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    default:
        echo "Another day";
}

?>
```

I learned that `switch` statements make code easier to read when there are multiple choices. It is especially useful for menu options, day names, and status values.

![Switch](8.%20SWITCH.png)

---

# Summary

These screenshots helped me understand the basic foundations of PHP programming. I learned how to:

- create PHP files,
- write simple output using `echo` and `print`,
- store and display data using variables,
- use constants,
- write conditional logic with `if...else`, and
- use `switch` for multiple decision options.

These are very important beginner concepts, and they form the base for more advanced web development tasks in PHP, MySQL, and web application development.

---

# Student Reflection

As a student, I feel that learning these PHP basics is very important because they are the foundation of web application development. By understanding how PHP works, I can build more advanced web pages and connect them with databases in the future. This course helped me improve my programming logic and prepared me to work on more complex projects.

My name is Mohamed Salman Afan, and I am continuing to learn and practice PHP step by step with confidence.
