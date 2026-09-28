# Assignment 2

A beginner PHP assignment demonstrating indexed arrays, loops, conditionals, and associative multidimensional arrays.

## What it does

- Prints the values in a numeric array.
- Calculates the sum of all values and separate sums for even and odd values.
- Finds the minimum and maximum values and prints every matching array index (zero-based).
- Prints a two-dimensional color-name array.
- Prints student IDs with each student's name, phone number, and address.

## Requirements

- PHP 7.0 or newer
- A terminal, or a local PHP-enabled web server

## Run

From this folder, run the file directly in a terminal:

```sh
php Assignment2.php
```

The script uses HTML line breaks, so for a formatted browser view, start PHP's built-in server in this folder:

```sh
php -S localhost:8000
```

Then open <http://localhost:8000/Assignment2.php> in a browser. Stop the server with `Ctrl+C`.

## Expected numeric results

- Total: `35`
- Even total: `30`
- Odd total: `5`
- Minimum: `-7`, at zero-based indexes `1`, `4`, and `9`
- Maximum: `12`, at zero-based indexes `2` and `7`

The remaining output lists the three color groups and the three student records defined in `Assignment2.php`.
