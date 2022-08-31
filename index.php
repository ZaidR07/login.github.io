<?php
$insert = false;
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "trip";

    $con = mysqli_connect($server, $username, $password , $dbname);
    
    if(!$con){
        die("connection to the database failed due to". mysqli_connect_error());
    }
    
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $dept=$_POST['dept'];
    $phone=$_POST['phone'];
    $other=$_POST['other'];

    $sql = "INSERT INTO chennai (name,age,gender,dept,phone,other)VALUES ('$name','$age','$gender','$dept','$phone','$other')";

    if($con->query($sql)== true)
    {
        echo "Succesfully inserted";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close(); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.js">
    <title>WELCOME TO TRAVEL FORM</title>
</head>
<body>
    <img src="bg.jpg" alt="pic" class="back">
    <div class="container">
        
        <h2>WElCOME TO DALMIA COLLEGE CHENNAI TRIP FORM</h3>
        <p>Enter your details and submit this form to confirm your booking in the TRIP  </p>
        <?php
        if($insert == true){
            echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the trip</p>";
            }
        ?>
        <br><br>
        <form action="index.php" method="post">
            Enter your name:
            <input type="text" name="name" id="name" placeholder="ZAID RAHMAN"><br>
            Enter your age:
            <input type="text" id="age" placeholder="20" name="age"><br>
            Enter your Gender:
            <input type="text" id="gender" placeholder="MALE/Female" name="gender"><br>
            Enter your Department:
            <input type="text" id="dept" placeholder="Bcom" name="dept"><br>
            Enter Mobile:
            <input type="phone" id="phone" placeholder="99#####340" name="phone"><br>
            Enter any other information: <br>
            <textarea name="other" id="other" cols="30" rows="2"></textarea><br><br>
            <button class="btn">Submit</button>
    
            


        </form>
    </div>
    <script src="index.js"></script>
    
    
</body>
</html>