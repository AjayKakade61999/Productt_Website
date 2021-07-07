

 <!-- HEADER SECTION -->

 

  




<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
$fullname = $_POST['fullname'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$address=$_POST['address'];
$subject = $_POST['subject'];
$db_name = 'WEBPROJECT';
$db_user = 'root';
$db_pass = 'root';
$db_host = 'localhost';
$conn = mysqli_connect($db_host, $db_user, $db_pass,$db_name,3308);
if (!$conn)
{
 die('Could not connect: ' .mysqli_error());
}
else
{
$query = "insert into website values('$fullname','$mobile','$email','$address','$subject')";
// $retval = mysqli_query( $query);
 if($conn->query($query) === FALSE )
{
 echo "Error:" . $conn->error;
}
else
{
header('Location: message.html');
}
}
$conn->close();
}
?>


<html>
<head>
<link rel = "stylesheet" type = "text/css" href = "style.css" />
</head>
<body>

<div class="header">
    <div class ="container">
      <div class = "navbar">
        <nav>
          <ul id="MenuItems">
            <li><a href="index.html">Home </a></li>
            <li><a href="Product.html"> Products </a></li>
            <li><a href="About.html">About </a></li>
            <li><a href="addentry.php">Contact </a></li>
            <ul>
        </nav>
      </div>
    </div>
  </div>

  <br>
  
  <div id="grad1">
  <div class="register">
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" name="myform" method="post"><br>
    <label>Full Name:</label>
    <input type="text" name="fullname" id="fullname" placeholder= "Your Full Name" required="required" onfocus="this.value = '';"><br>
  
    <label>Mobile Number:</label>
    <input type="text" name="mobile" id="mobile" placeholder=" Your Mobile Number" required="required" onfocus="this.value = '';"><br>
    
    <label>E-Mail Address:</label>
    <input type="text" name="email" id="email" placeholder="Your E-Mail Address" required="required" onfocus="this.value = '';"><br>

    <label>Address:</label>
    <input type="text" name="address" id="address" placeholder="Your Address" required="required" onfocus="this.value = '';"><br>

    <label>Subject:</label>
    <input type="text" name="subject" id="subject" placeholder= "Describe......." required="required" onfocus="this.value = '';">
  <br>
  <br>

   <input type="submit" value="Submit">
</form>
</div>
</div>


<br>


<div class="footer">
    <div class="foot-container">
      <div class ="footer-col-4">
      <div class = "navbar">
              <nav>
                <ul>
                  <li><a href="#">Home </a></li>
                  <li><a href="Product.html"> Products </a></li>
                  <li><a href="About.html">About </a></li>
                  <li><a href="Contact.html">Contact </a></li>
                 <ul>
              </nav>
            </div>
          <h3>Follow us !!!</h3>
          <ul>
            <li><a href="www.instagram.com">Instagram</a></li> 
            <li><a href="https://www.youtube.com/channel/UC1Gh0NIyMCaWCc3xcvvT4hg">Youtube</a></li> 
            <li><a target="_blank" rel="nofollow" href="https://asclepiuswellness.com/index.html">For more details visit: https://asclepiuswellness.com/index.html</a></li>
          </ul>
      </div>
     </div>
  <hr>
  <p class="Copyright">Ajay Kakade &copy;</p>
</div>
</body>
</html>
