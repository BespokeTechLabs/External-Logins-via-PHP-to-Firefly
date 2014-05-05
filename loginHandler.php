<?php 

//Get the auth data posted
$username = $_POST['username'];
$password = $_POST['password'];

//Create the data request with correct syntax
$data = "username=" . $username . "&password=" . $password . "";

/////////////////////////////
//YOUR FIREFLY SERVER HERE //
/////////////////////////////

$url = "https://firefly.clevedonschool.org.uk/login/login.aspx?prelogin=https%3a%2f%2ffirefly.clevedonschool.org.uk%2f&kr=ActiveDirectoryKeyRing";

/////////////////////////////

$post = curl_init();

//initialise params
curl_setopt($post, CURLOPT_URL, $url);
curl_setopt($post, CURLOPT_POST, true);
curl_setopt($post, CURLOPT_POSTFIELDS, $data);
curl_setopt($post, CURLOPT_RETURNTRANSFER, true);

//Request the results
$result = curl_exec($post);

//Shorten response to the first 52 characters
//which is enough to read the first response line
$auth = substr($result,0,52);

curl_close($post);

if($auth == '<html><head><title>Object moved</title></head><body>') {
   //Login successful
   echo("Logged In.");

   //A wild staff member appeared
   //CUSTOM PRE-DEFINED LOGIN HANDLERS - GOOGLE "PHP Login Script" for more info
   //   //Allow the user sufficient time on the system
   //   $username = strtolower($username);
   //   setcookie("username", $username, time()+(84600*30));
   //   header("Location: ./index.php");
   //   exit();
} else {
  //Incorrect username or password
  //Choose how to handle this on the previous page
  header("Location: ./index.php?login=failed");
  exit();
}

?>
