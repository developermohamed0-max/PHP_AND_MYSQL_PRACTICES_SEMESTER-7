# PHP & MySQL — Read Me / Chapter Study Guide

**Coverage:** Chapter 1 — *Introduction to PHP & MySQL* and Chapter 2 — *PHP Fundamentals & Control Structures* (up to and including **if...else**).

This read-me file outlines the purpose of each chapter, its learning objectives, the main topics to study, and the practical skills you should be able to demonstrate after reading the lecture slides.

---

## Chapter 1: Introduction to PHP & MySQL

### Chapter overview
This chapter introduces web application development and explains the role of PHP in creating dynamic and interactive web pages. It also reviews how browsers and web servers communicate and introduces the tools needed to run PHP locally.

### Definitions
- **PHP:** PHP is a server-side scripting language used to create dynamic web pages and handle backend logic.
- **MySQL:** MySQL is a database management system used to store and manage data for web applications.
- **HTTP:** HyperText Transfer Protocol is the communication protocol used by browsers and web servers to exchange requests and responses.
- **HTML:** HyperText Markup Language is the standard language used to structure web pages and display content in a browser.
- **Client:** A client is a device or browser that requests information or services from a server.
- **Server:** A server is a system that receives client requests and sends back the required data or web page.
- **Web page request/response:** A request is sent when a browser asks the server for a page, and a response is the page or data returned by the server.
- **XAMPP:** XAMPP is a local development package that includes Apache, MySQL, PHP, and other tools needed to run PHP applications on a computer.
- **Document root:** The document root is the folder on the server where website files are stored and served from, such as `C:/xampp/htdocs`.
- **Localhost:** Localhost is the local address used to view a web application running on the same computer.

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
- **PHP:** PHP stands for Hypertext Preprocessor. It is a server-side scripting language used to create dynamic web pages and process data.
- **HTTP:** HyperText Transfer Protocol is the rule set used by browsers and servers to communicate over the web.
- **HTML:** HyperText Markup Language is used to create the structure and content of a web page that appears in a browser.
- **Client:** A client is a user device or browser that sends a request to a server.
- **Server:** A server is a computer program or machine that receives requests and returns the necessary result.
- **Browser:** A browser is an application such as Chrome or Edge that displays web pages to users.
- **XAMPP:** XAMPP is a package that installs Apache, MySQL, PHP, and tools needed for local web development.
- **Apache:** Apache is the web server software that serves web pages locally or on the internet.
- **MySQL:** MySQL is a database system used to store and organize data for web applications.
- **Document root:** The document root is the folder where website files are stored and served; in XAMPP, this is usually `C:/xampp/htdocs`.
- **Localhost:** Localhost is the address used to access a web application running on the same computer.

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

### Definitions
- **PHP script:** A PHP script is a file containing PHP code, usually saved with the `.php` extension.
- **Statement:** A statement is an instruction in a program; in PHP, a statement usually ends with a semicolon.
- **Variable:** A variable is a named storage place in memory used to hold data, and it begins with `$` in PHP.
- **Data type:** A data type defines the kind of value stored, such as integer, float, string, or boolean.
- **String:** A string is a sequence of characters used to store text.
- **Constant:** A constant is a value that remains fixed during program execution and is defined once.
- **Operator:** An operator is a symbol that performs a task such as addition, comparison, or assignment.
- **Condition:** A condition is an expression that evaluates to either true or false.
- **Control structure:** A control structure decides the order in which statements are executed.
- **If statement:** An `if` statement executes code only when a condition is true.
- **If...else statement:** An `if...else` statement executes one block of code when the condition is true and another block when it is false.

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
- **Statement:** A statement is a complete instruction in a PHP program, and it usually ends with a semicolon.
- **Variable:** A variable is a named place used to store data in memory. In PHP, variables begin with `$`.
- **Data type:** A data type is the category of a value, such as integer, float, string, or boolean.
- **String:** A string is text data stored in quotes, such as "Hello" or 'PHP'.
- **Constant:** A constant is a value that does not change while the program runs.
- **Operator:** An operator is a sign or symbol used to perform tasks like arithmetic, comparison, or assignment.
- **Condition:** A condition is a logical expression that is evaluated as true or false.
- **Conditional control structure:** This is a structure that allows code to run or skip depending on whether a condition is true.
- **If statement:** An `if` statement executes code only when the condition is true.
- **If...else statement:** An `if...else` statement chooses between two blocks of code based on a condition.

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
