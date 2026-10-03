# Week 3 PHP Read Me

## Arrays, Functions, and Introduction to Files

**Course focus:** This week begins with multidimensional arrays and
continues through array functions, PHP functions, variable scope, and
including files.

## Chapter Objectives

By the end of this week, students should be able to:

-   Explain multidimensional arrays and how nested arrays organize data.
-   Identify common PHP array functions and describe their purposes.
-   Define functions and explain their advantages.
-   Distinguish parameters from arguments.
-   Explain how functions return values.
-   Compare passing by value and passing by reference.
-   Describe default argument values and variable scope.
-   Explain how PHP includes or requires files.

## 1. Multidimensional Arrays

A **multidimensional array** is an array that contains one or more
arrays. A two-dimensional array is an array of arrays; additional levels
create arrays with more dimensions.

**Key concepts:** - Useful for data arranged in a table-like
structure. - The dimension indicates how many indices are needed to
access an element. - Nested loops can be used to process elements in
nested arrays.

## 2. Using Array Functions

PHP provides built-in functions to inspect and manipulate arrays.

  -----------------------------------------------------------------------
  Function                            Purpose
  ----------------------------------- -----------------------------------
  `is_array()`                        Checks whether a variable is an
                                      array.

  `in_array()`                        Checks whether a value exists in an
                                      array.

  `count()` / `sizeof()`              Returns the number of elements.

  `sort()` / `rsort()`                Sorts values in ascending /
                                      descending order.

  `asort()` / `arsort()`              Sorts an associative array by
                                      value, ascending / descending.

  `max()` / `min()`                   Returns the highest / lowest value.

  `implode()`                         Converts an array into a string.

  `explode()`                         Splits a string into an array using
                                      a separator.

  `shuffle()`                         Places elements in random order.

  `array_merge()`                     Combines arrays into one array.

  `array_reverse()`                   Returns elements in reverse order.

  `array_push()`                      Adds elements to the end of an
                                      array.

  `array_pop()`                       Removes and returns the last
                                      element.

  `end()`                             Returns the last element of an
                                      array.
  -----------------------------------------------------------------------

**Study focus:** Know which function is appropriate for checking,
counting, sorting, combining, rearranging, or modifying an array.

## 3. Introduction to Functions

A **function** is a set of statements that performs a particular task
and may return a value. A function can be defined once and called
whenever its task is needed.

**Key concepts:** - A function definition starts with the `function`
keyword. - The function name is followed by parentheses. - Optional
parameters are written inside the parentheses. - The function body is
enclosed in braces. - A function runs when it is called; it does not
execute automatically just because the page loads.

**Advantages of functions:** - Reduce repeated code and typing. -
Support code reuse. - Help reduce syntax and other programming errors. -
Accept input values and can be used for different cases.

## 4. Parameters vs. Arguments

-   **Parameter:** A named placeholder in a function definition that
    receives a value.
-   **Argument:** The actual value or variable supplied when the
    function is called.

Remember: parameters appear in the function definition; arguments are
supplied in the function call.

## 5. Returning a Value

A function can send a result back to the code that called it by using
the `return` statement.

**Key concepts:** - A returned value can be assigned to a variable or
used in an expression. - Executing `return` ends the function at that
point. - Statements after an executed `return` are not run. - A function
can return an array.

## 6. Passing by Value vs. Passing by Reference

**Passing by value:** The function receives a copy of the argument.
Changes to the parameter inside the function do not change the original
variable. This is the default method described in the lecture.

**Passing by reference:** The function can work with the original
variable, so changes made through the parameter can affect the variable
supplied by the caller. The lecture uses an ampersand (`&`) before the
parameter to indicate this.

**Study focus:** Understand whether the original variable changes after
the function is called. The lecture cautions that reference passing can
contribute to security risks and difficult-to-track bugs.

## 7. Default Argument Values

A **default argument value** is assigned to a parameter in the function
definition. It is used when the caller omits that argument.

Default values allow a function to be called without supplying every
argument when an omitted parameter has a default.

## 8. Scope of Variables

**Variable scope** is the part of a script where a variable can be
referenced or used.

-   **Local variable:** Declared within a function and accessible within
    that function.
-   **Global variable:** Declared outside a function. The lecture
    explains that it is accessed outside the function unless brought
    into the function's scope.
-   **`global` keyword:** Allows a function to access a global variable
    by name.
-   **`$GLOBALS`:** A PHP array that provides access to global variables
    using their names as keys.
-   **Static variable:** Local to the function that declares it, but
    retains its value across multiple calls.
-   **Superglobals:** Predefined variables available throughout the
    script. Examples in the lecture include `$_GET`, `$_SESSION`,
    `$_FILES`, `$_SERVER`, and `$GLOBALS`.

**Study focus:** Understand where variables are declared and where they
can be used, especially when local and global variables have the same
name.

## 9. Introduction to Files in PHP

PHP can insert the contents of another file, such as a PHP or HTML file,
into a script before execution. This supports reuse instead of copying
and pasting code.

### Include and Require

-   **`include`:** Loads the specified file. If the file cannot be
    found, PHP issues a warning and the script continues.
-   **`require`:** Used when the file is essential. If it fails, PHP
    produces a fatal error and stops the script.
-   **`include_once`:** Includes and evaluates a file only once during
    script execution.
-   **`require_once`:** The once-only form used when the required file
    is essential.

### Why Include Files?

-   Store shared headers, footers, and menus separately for reuse.
-   Update shared content in one place for use across multiple pages.
-   Keep function libraries in separate files and include them where
    needed.

### Paths and Function Checks

-   A **relative path** identifies a file in relation to the current
    directory. The lecture uses `../` as an example of moving to a
    parent directory.
-   Hard-coded full paths may cause problems when a project is moved to
    an environment with a different directory structure.
-   **`function_exists()`** checks whether a named predefined or
    user-created function is available.

## Quick Revision Checklist

Before the lesson or exam, make sure you can:

-   [ ] Define a multidimensional array and explain how nested arrays
    are accessed.
-   [ ] Name the array functions covered and state their purposes.
-   [ ] Explain what a function is and list its advantages.
-   [ ] Distinguish parameters from arguments.
-   [ ] Explain `return`, including returning an array.
-   [ ] Compare passing by value and passing by reference.
-   [ ] Explain default argument values.
-   [ ] Differentiate local, global, static, and superglobal variables.
-   [ ] Explain `global` and `$GLOBALS`.
-   [ ] Compare `include`, `include_once`, `require`, and
    `require_once`.
-   [ ] Explain relative paths and the purpose of `function_exists()`.

**Source:** Prepared from the uploaded *Chapter 3: Arrays and Functions
in PHP* lecture slides, starting at Multidimensional Arrays and ending
with the file-inclusion material. This read me summarizes concepts
rather than reproducing the lecture's code examples.
