<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //1. Hello world
    echo "hello world";
--------------------------------------------------

    //2. echo   
    echo "hello world";
--------------------------------------------------

    //3. print 
    print "hello world";
--------------------------------------------------

    //4. echo and print
    echo "hello world";
    print "hello world";
--------------------------------------------------

    //5. Creating variables and printing them
    $name = "Mohamed Salman Afan";
    $age = 22;
    echo $name;
    echo $age;
--------------------------------------------------

    //6. Constants
    define("name", "Mohamed Salman Afan");
    echo name;
    echo "<br>";

    --------------------------------------------------

    //7. If...else
    $age = 22;
    $grade = 4;
    if ($age<20){
        echo "that guy is old";
    }else if ($grade<2){
        echo "you have lower grade";
    }else if ($grade>2){
        echo "higher grade";
    }else{
          echo "you are not old enough";
    }
--------------------------------------------------

    //8. switch
    $marks = 90;
    switch ($marks){
        case($marks>80):
            echo "Grade A";
            break;
        case($marks>70):
            echo "Grade B";
            break;
        case($marks>60):
--------------------------------------------------

















































































































































































































































































































































































































            echo "Grade C";
            break;
        default:
            echo "LOW" 
    }

    

    
      
    

       
    
     
    
    ?>
    
</body>
</html>