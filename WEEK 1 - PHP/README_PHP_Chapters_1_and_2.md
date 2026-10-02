# PHP & MySQL — Read Me / Chapter Study Guide

**Coverage:** Chapter 1 — *Introduction to PHP & MySQL* and Chapter 2 — *PHP Fundamentals & Control Structures* (up to and including **if...else**).

This read-me file outlines the purpose of each chapter, its learning objectives, the main topics to study, and the practical skills you should be able to demonstrate after reading the lecture slides.

---

## Chapter 1: Introduction to PHP & MySQL

### Chapter overview
This chapter introduces web application development and explains the role of PHP in creating dynamic and interactive web pages. It also reviews how browsers and web servers communicate and introduces the tools needed to run PHP locally.

### Chapter objectives
By the end of this chapter, you should be able to:

- Explain the purpose of the PHP & MySQL course and identify the technologies used.
- Define PHP and describe its role in server-side web development.
- Explain the basic relationship between a client, a web server, HTTP, and HTML.
- Describe the request-and-response process when a browser opens a web page.
- Identify common uses and key features of PHP.
- Identify the basic software and knowledge required for PHP development.
- Explain what XAMPP is and identify the roles of Apache, MySQL, and PHP in a local development environment.
- Locate the XAMPP document root and explain how to access a local website through a browser.
- Create and run a basic PHP page.

### Main topics to read
1. **Course introduction and objectives** — course purpose, technologies, and expected learning.
2. **HTTP and HTML** — what HTTP and HTML mean and how they are used.
3. **Client and server** — the browser as a client and the web server's role.
4. **Request/response procedure** — how a browser requests a page and receives it.
5. **PHP: what it is** — PHP as a server-side scripting language embedded in HTML.
6. **What PHP can do and key features** — dynamic content, form processing, database connectivity, sessions, files, and APIs.
7. **What you should know and what you need** — prerequisites, editor, browser, server, and related tools.
8. **Types of websites and PHP platforms** — examples listed in the lecture.
9. **Setting up a development server** — XAMPP and the alternatives WAMP, LAMP, and MAMP.
10. **Testing the installation and accessing the document root** — localhost, ports, and `htdocs`.
11. **Your first page and using a program editor** — the `index.php` example and Visual Studio Code.

### Important terms
- **PHP:** PHP: Hypertext Preprocessor; a server-side scripting language for dynamic web pages.
- **HTTP:** A communication standard for requests and responses between a browser and a web server.
- **HTML:** A markup language for documents displayed in a browser.
- **Client:** The computer or browser that requests a service or web page.
- **Server:** The system that receives a request and sends a response.
- **XAMPP:** A local development environment containing tools used to run and test PHP applications.
- **Document root:** The server directory from which local website files are served; for XAMPP, the slides give `C:/xampp/htdocs`.

### Practical work / self-check
- Describe the steps from entering a URL to seeing a page in the browser.
- Explain why PHP code is processed on the server.
- Identify where a PHP file should be saved in the XAMPP setup shown in the slides.
- Explain how to test a local server using `localhost`.
- Read the first-page example and identify the HTML section and the PHP section.

---

## Chapter 2: PHP Fundamentals & Control Structures

### Chapter overview
This chapter introduces the basic syntax and building blocks of PHP. It covers output, quotation marks, comments, variables, data types, constants, and operators, then introduces control structures. The requested coverage ends at the `if...else` statement.

### Chapter objectives
By the end of the covered material, you should be able to:

- Recognize the structure of a PHP script and its opening and closing tags.
- Explain basic PHP syntax, including statements and semicolons.
- Display output using `echo` and `print` and state the differences presented in the slides.
- Distinguish how single and double quotation marks handle variable text.
- Write single-line and multi-line comments.
- Define a variable and apply the variable-naming rules.
- Identify the basic data types introduced in the chapter.
- Create a string and use the string functions shown in the slides.
- Explain what a constant is and define one using `define()`.
- Identify the main groups of PHP operators and recognize the ternary operator.
- Explain sequential and conditional control structures.
- Write a simple `if` statement and an `if...else` statement.

### Main topics to read
1. **Introduction to PHP programming** — PHP files, the `.php` extension, and how PHP files are processed.
2. **PHP syntax and statements** — PHP tags and the semicolon at the end of statements.
3. **PHP output: `echo` and `print`** — displaying text and the differences between the two constructs.
4. **Coding with quotation marks** — single quotes versus double quotes.
5. **Comments and coding style** — `//`, `#`, and `/* ... */`.
6. **Variables and variable naming rules** — the `$` sign, valid names, and case sensitivity.
7. **Basic data types** — integers, floating-point numbers, strings, and booleans.
8. **Strings** — creating strings and the `strlen()` and `str_word_count()` examples.
9. **Constants** — defining constants with `define()` and naming conventions.
10. **Operators** — assignment, arithmetic, comparison, logical, concatenation, increment/decrement, and ternary operators.
11. **Operator precedence** — the order of evaluation shown in the lecture.
12. **Control structures** — sequential, conditional, and loop control structures.
13. **Conditional control structures: `if` and `if...else`** — conditions and choosing which statement to execute.

### Important terms
- **Statement:** An instruction in a PHP program; the slides note that PHP statements end with a semicolon.
- **Variable:** A named place to store a value, written with `$` before its name.
- **Data type:** The kind of value stored, such as integer, float, string, or boolean.
- **Constant:** A named value that is not intended to change during program execution.
- **Operator:** A symbol or construct used to perform an operation on values.
- **Condition:** An expression evaluated as true or false to guide a conditional statement.
- **Conditional control structure:** A structure that changes the program's execution path based on a condition.

### Syntax examples to recognize

**PHP tags and output**
```php
<?php
    echo "Hello World!";
    print "Welcome to PHP";
?>
```

**Quotes and variables**
```php
$a = 10;
echo 'Value: $a';  // The variable text is not expanded
echo "Value: $a";  // The value 10 is displayed
```

**Comments**
```php
// Single-line comment
# Another single-line comment

/* Multi-line
   comment */
```

**Variable, string function, and constant**
```php
$userName = "Ali";
$my_str = "Welcome to PHP Republic";
echo strlen($my_str);
echo str_word_count($my_str);

define("PI", 3.14);
echo PI;
```

**if statement**
```php
$a = 2;
$b = 3;

if ($a < $b) {
    echo "$a is less than $b";
}
```

**if...else statement**
```php
$marks = 48;

if ($marks >= 50) {
    echo "Pass";
} else {
    echo "Not pass";
}
```

### Practical work / self-check
- Identify the PHP tags and statements in a short code sample.
- Predict the output of `echo` and `print` examples.
- Explain the difference between `'Hello $name'` and `"Hello $name"`.
- Correct invalid variable names.
- Identify the data type of a given value.
- Explain what each operator in a short expression does.
- Trace an `if` statement and determine whether its body runs.
- Trace an `if...else` statement and state which branch runs for a given value.

---

## Suggested reading order

1. Read Chapter 1's introduction and course objectives.
2. Study HTTP, HTML, client/server, and the request/response process.
3. Review PHP's purpose and features.
4. Read the XAMPP setup, document-root, and first-page sections.
5. Begin Chapter 2 with PHP syntax, tags, and output.
6. Study quotation marks and comments before moving to variables.
7. Review data types, strings, constants, and operators.
8. Finish with control structures, focusing on `if` and `if...else`.

**Scope:** This file covers the two supplied lecture chapters only through **`if...else`**. Later Chapter 2 topics such as `elseif`, `switch`, loops, `break`, `continue`, and nested loops are outside the requested range.
