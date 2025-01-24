<?php
$insert = false;
if(isset($_POST['name'])){
    //set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "trip"; 

    //create a database connection
    $con = mysqli_connect($server, $username, $password, $database);


    //check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connection to the db";

    //check post variables
    $name = $_POST['name'] ?? '';
    $age = $_POST['age'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $desc = $_POST['desc'] ?? '';


    $sql = "INSERT INTO `trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

    // echo $sql;

    //execute the query
    if($con->query($sql) == TRUE){
        // echo "Successfully inserted";

        //flag for successful insertion
        $insert = TRUE;
    }
    else{
        echo "ERROR: $sql <br> $con->error";   
    }

    //close the db connection
    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Apply Form</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <img class="bg" src="image.png" alt="USA">
    <div class="container">
        <h1>Welcome to NIMS University Application Form</h1>
        <p>Enter your details and submit your form to confirm your participation</p>

        <?php
        if($insert == TRUE){
            echo "<p class='submitMsg'>Thanks for submitting the form, We are happy to see you joining us</p>";
        }
        ?>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your Name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your Gender">
            <input type="email" name="email" id="email" placeholder="Enter your Email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your Phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other Information here"></textarea>
            <button class="btn">Submit</button>
            <!-- <button class="btn">Reset</button> -->
        </form>

    </div>

    <!-- <script src="index.js"></script> -->
</body>
</html>