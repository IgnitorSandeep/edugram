<?php
$con=mysqli_connect("localhost","sandeeui_edugram","dbpass123","sandeeui_edugram");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM contactus");


while($row = mysqli_fetch_array($result)) {
  echo $row['email'] . " " . $row['name'];
  echo "<br>"; 
}

mysqli_close($con);
?>