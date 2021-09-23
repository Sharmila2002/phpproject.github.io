<?php
//variable setting
$name = $_REQUEST['name']; //give the data from form
$dob=$_REQUEST['birthday'];
$email=$_REQUEST['email'];
$Pass=$_REQUEST['pass'];
$Mob=$_REQUEST['mobile'];
if(empty($name) || empty($dob) || empty($email) || empty($Pass) || empty($Mob))
{
echo "<script type='text/javascript'>alert('please fill all the fields ') </script>";
}
else
{
echo "<script type='text/javascript'> alert('your registration is successfully ')
</script>";
echo " Thanks for Registration";
}
?>
<?php
if(isset($_POST['register'])){
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['mobile'];
$to='sharmilabhosale2020@gmail.com'; // Receiver Email ID
$subject='Form Submission';
$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n";
$headers="From: ".$email;
if(mail($to, $subject, $message, $headers)){
echo "<h1>Sent Successfully! Thank you"." ".$name." !</h1>";
}
else{
echo "Something went wrong!";
}
}
?>