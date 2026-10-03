# PHP Study Guide: Operators to Associative Arrays

**Based on Chapter 2: PHP Fundamentals & Control Structures and Chapter 3: Arrays and Functions in PHP**

## Study Scope
This guide covers the concepts from **PHP Operators** in Chapter 2 through **Associative Arrays** and the `=>` operator in Chapter 3. It focuses on concepts and definitions, not code examples.

# Chapter 2: PHP Operators

## 1. What Are Operators?
Operators are symbols or language elements that tell PHP to perform operations on values or variables. They are used for calculations, comparisons, logical decisions, assigning values, and joining strings.

## 2. Main Types of Operators

### Assignment Operator (`=`)
Assigns a value to a variable by storing the right-hand value in the variable on the left.

### Arithmetic Operators
Perform mathematical calculations:
- **Addition (`+`)** adds values.
- **Subtraction (`-`)** subtracts one value from another.
- **Multiplication (`*`)** multiplies values.
- **Division (`/`)** divides one value by another.
- **Modulus (`%`)** gives the remainder after division.

### Arithmetic Assignment Operators
Combine an arithmetic operation with assignment. They update a variable using its current value and another value. Examples include `+=`, `-=`, `*=`, `/=`, and `%=`.

### Comparison Operators
Compare two values and produce a Boolean result: true or false.
- **`<`** less than; **`<=`** less than or equal to.
- **`>`** greater than; **`>=`** greater than or equal to.
- **`==`** equal to; **`!=`** not equal to.

### Logical Operators
Combine or reverse conditions:
- **AND (`&&`)** is true when both conditions are true.
- **OR (`||`)** is true when at least one condition is true.
- **NOT (`!`)** reverses a Boolean value or condition.

### Concatenation Operator (`.`)
Joins strings or values converted to strings into a single string.

### Increment and Decrement Operators
- **Increment (`++`)** increases a value by one.
- **Decrement (`--`)** decreases a value by one.

### Ternary Operator (`? :`)
A compact conditional expression. It evaluates a condition and produces one value if true and another if false. It is a short form of an `if...else` decision.

## 3. Operators by Number of Operands
An **operand** is a value or variable on which an operator acts.
- **Unary operators** use one operand, such as increment, decrement, and logical NOT.
- **Binary operators** use two operands; arithmetic and comparison operators are common examples.
- **Ternary operator** uses three operands: a condition and two possible results.

## 4. Operator Precedence
Operator precedence determines which operation is evaluated first when an expression contains multiple operators. Parentheses can clarify the intended order.

The Chapter 2 slides show this general order from higher to lower precedence:
1. Parentheses: `()`
2. Increment/decrement: `++`, `--`
3. Logical NOT: `!`
4. Multiplication, division, modulus: `*`, `/`, `%`
5. Addition, subtraction, concatenation: `+`, `-`, `.`
6. Inequality comparisons: `<`, `<=`, `>`, `>=`
7. Equality comparisons: `==`, `!=`
8. Logical AND: `&&`
9. Logical OR: `||`
10. Assignment operators
11. Word-form logical AND: `and`
12. Word-form logical OR: `or`

**Key point:** Use parentheses to make complex expressions easier to understand.

# Chapter 3: Arrays in PHP

## 5. Introduction to Arrays
An array is a variable that holds multiple values under one name. Each value is an **element**. Elements are accessed through keys, which may be numeric or string-based.

Arrays can contain values of different data types. PHP provides built-in functions for sorting, counting, searching, and manipulating arrays.

## 6. Types of Arrays
PHP has three main types:
- **Numerically indexed arrays:** use numeric indexes to identify elements.
- **Associative arrays:** use string keys to identify elements.
- **Multidimensional arrays:** contain one or more arrays within another array.

## 7. Numerically Indexed Arrays
A numerically indexed array stores each element under a numeric index. Automatically assigned indexes begin at zero, or indexes can be assigned manually.

Important concepts:
- An **index** identifies an element in the array.
- The first automatically assigned index is `0`.
- Each element can be accessed using its numeric index.
- Elements can be added as needed.

## 8. The `foreach...as` Loop
The `foreach...as` loop is designed to process array elements. It starts with the first element and continues to the last. On each pass, a variable holds the current element.

**Why it is useful:** It processes array elements without requiring the programmer to manage numeric indexes manually.

## 9. Associative Arrays
An associative array stores values using named keys rather than relying on numeric indexes. Each key is associated with a value, forming a **key/value pair**.

Important characteristics:
- Keys are commonly strings that describe the information they identify.
- Associative arrays are useful for storing related information as name/value pairs.
- A key is used to refer to its corresponding value.
- PHP superglobal arrays such as `$_REQUEST`, `$_GET`, `$_POST`, and `$_FILES` are associative arrays.

## 10. The Access Mechanism Operator (`=>`)
The double arrow operator (`=>`) connects a key to its value when defining an associative array. The item before the arrow is the key; the item after it is the value.

When processing an associative array, `foreach...as` can work with both the key and its corresponding value. This helps identify what each value represents.

**Remember:** The key identifies the value; the value is the information stored under that key.

# Important Terms to Review

| Term | Meaning |
|---|---|
| Operator | A symbol or language element that performs an operation |
| Operand | A value or variable used by an operator |
| Precedence | The order in which operators are evaluated |
| Boolean | A value that is either true or false |
| Concatenation | Joining strings or string representations |
| Ternary operator | A compact conditional expression with two possible results |
| Array | A variable that stores multiple values under one name |
| Element | One value stored in an array |
| Index | A numeric identifier used to access an array element |
| Associative array | An array that uses named keys associated with values |
| Key/value pair | A key and its associated value |
| Multidimensional array | An array that contains other arrays |
| `foreach...as` | A loop that processes array elements one by one |

# Self-Check Questions
1. What are operators, and what tasks do they perform?
2. What is the difference between assignment and comparison operators?
3. What is the purpose of arithmetic assignment operators?
4. How do logical AND, OR, and NOT differ?
5. What does the concatenation operator do?
6. What is the difference between unary, binary, and ternary operators?
7. What does operator precedence determine?
8. What is an array, and what is an array element?
9. What are the three main types of arrays in PHP?
10. How does a numerically indexed array identify its elements?
11. What is the purpose of the `foreach...as` loop?
12. How does an associative array differ from a numerically indexed array?
13. What are keys and values in an associative array?
14. What is the purpose of the `=>` operator?
15. Name some PHP superglobal variables that are associative arrays.

---
**Reading boundary:** This guide ends at associative arrays and the `=>` operator. Multidimensional arrays, array functions, and PHP functions are outside the requested scope.
