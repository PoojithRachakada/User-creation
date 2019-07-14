<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shakthi";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['mail'];
$password = $_POST['password'];
$rpassword = $_POST['rpassword'];
$mobile = $_POST['mobile'];
if($password==$rpassword){
$sql = "INSERT INTO users(names,email,passwords,mobile)
VALUES ('$name','$email','$password','$mobile')";

if (mysqli_query($conn, $sql)) {
    echo "THANKYOU FOR REGISTERING";
}
}

else {
    echo "PASSWORDS DOESNOT MATCH";
}
}

mysqli_close($conn); 
?>