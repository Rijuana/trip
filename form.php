<?php
$insert=false;
if(isset($_POST['name'])){
  include 'connection.php';
//echo "Successful connection to the database";
//COLLECT POST VARIABLES
$name=$_POST['name'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$desc=$_POST['desc'];

$sql="INSERT INTO `trip`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

//echo $sql;
//EXECUTE THE QUERY
if($conn->query($sql)==TRUE){
    //FLAG FOR SUCCESSFUL INSERTION
    $insert=true;
   // echo"Successfully Inserted";

}
else{
    echo "ERROR: $sql <br> $conn->error";
}
//CLOSE THE DATABASE CONNECTION
$conn->close();
}
?>
<!-- html file -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Travel Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:|Sriacha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
<body>
    <img class ="bg" src="pic.jpg" alt="UNIVERSITY OF KALYANI" >
    <div class ="container">
        <h1>Welcome to University Of Kalyani US Trip Form</h1>
        <p>Enter your details  and submit the form to confirm your participation in the trip</p>
        <?php
        if($insert==true){
       echo " <p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining for the US trip</p>";
        }
    ?>
        <form action="form.php" method="post">
    
    <input type="text" name="name" id="name" placeholder="Enter Your Name">
    <input type="text" name="age" id="age" placeholder="Enter Your Age">
    <input type="text" name="gender" id="gender" placeholder="Enter Your Gender">
    <input type="email" name="email" id="email" placeholder="Enter Your Email Id">
    <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone Number">
    <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter Any Other Information Here"></textarea>
    <button class="btn">Submit</button>
    


</form>
</div>

   
</body>
</html>