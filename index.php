<?php
$insert = false;
if(isset($_POST['name'])){
    // Set Connection Variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);
    mysqli_select_db($con, "trip");

    // Check for connection success
    if (!$con){
        die("Connection failed to database due to: " . mysqli_connect_error());
    }
    // echo "Succes Connecting to the db";

    // Collecting Post Variables
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

    // echo $sql;

    // Excute the query
    if($con->query($sql) == true){
        // echo "<p class='SubmitMsg'>Thanks for submitting the form. We are happy to see you joining us for the US trip!</p>";
        
        // Flag for successful insertion
        $insert = true;
        header("Location: " . $_SERVER['PHP_SELF'] . "?inserted=1");
        exit();
    }
    else{
        echo "Error: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>=
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha &display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="IIT Kharagpur">
    <div class="container">
        <h1>Welcome to IIT Kharagpur US Trip Form</h1>
        <p> Enter Your Details and Submit this form to Confirm your Participation in the trip </p>
        <?php
        if(isset($_GET['inserted']) && $_GET['inserted'] == 1){
            echo "<p class='SubmitMsg'>Thanks for submitting the form. We are happy to see you joining us for the US trip!</p>";
        }
        ?>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="text" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" 
            placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>