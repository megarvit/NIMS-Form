<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
        This is my first PHP website<br>
        <?php 
            echo "This is printed using PHP";
        ?>

        <?php 
            define('PI',3.14); //define constants
            $variable1 = 34;
            $variable2 = 45;
            echo $variable1;
            echo $variable2; //dynamic type language

            echo "<br>";
            echo $variable1 + $variable2;

            echo "<br>";
            echo "The value of 1==4 is ";
            echo var_dump(1==4);

            echo "<br>";
            echo PI;
        ?>

        <?php 
            $languages = array("Python", "C++", "PHP", "Javascript");
            echo "<br>";
            echo $languages[0];
            $a = 0;
            while($a < count($languages)){
                echo "<br>The value of language is ";
                echo $languages[$a];
                $a++;
            }
            //foreach loop
            echo "<br>";
            foreach($languages as $value){
                echo "<br>The value is ";
                echo $value;
            }
        ?>

        <?php 
            function print1(){
                echo "<br>";
                echo "Hello World";
                echo "<br>";
            }
            print1();
        ?>

        <?php 
            $str = "This";
            echo $str . "<br>";
            $lenn = strlen($str);
            echo "The length of this string is " . $lenn;
            echo "<br>";
            echo "The word count of this string is " . str_word_count($str);
            echo "<br>";
            echo "The replaced string is " . str_replace("is", "at", $str);
        ?>
    </div>
</body>
</html>