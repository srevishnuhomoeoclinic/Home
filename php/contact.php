<?php
$servername="localhost";
$username="root";
$password="";
$dbname="comments";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
die("Connection Error:".mysqli_connect_error());
else{
$a = $_POST['name']; 
$b = $_POST['email'];
$c = $_POST['phone'];
$d = $_POST['comments'];
$sql="INSERT INTO feedback (Name,Email,Phone,Comments) values 
('$a','$b','$c','$d')";
$result=mysqli_query($conn,$sql);
if($result)
{
echo "<center><h1>Your comment is recorded</h1></center>";
}else
{
 echo "Error:" . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>
