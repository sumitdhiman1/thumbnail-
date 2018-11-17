<?php 

if(isset($_POST['submit'])){
$name = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$state = $_POST['state'];
$city = $_POST['city'];
$state = $_POST['state'];
$gender = $_POST['radio'];
$checkbox = $_POST['checkbox'];
$b = implode(",",$checkbox);

echo "<h1>Your First name is:".$name."<br> </h1>";
echo "<h1>Your Last name is:".$last."<br> </h1>";
echo "<h1>Your email is:".$email."<br> </h1>";
echo "<h1>Your password is:".$password."<br> </h1>";
echo "<h1>Your confirm password is:".$cpassword."<br> </h1>";
echo "<h1>Your State name is:".$state."<br> </h1>";
echo "<h1>Your city name is:".$city."<br> </h1>";
echo "<h1>Your gender is:".$_POST['radio']."<br> </h1>";
echo "<h1>Your  Hobbies is:".$b."<br> </h1>";


}

?>