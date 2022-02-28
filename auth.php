
 <?php
include 'config.php'; 
 session_start();
$id=$_SESSION['DEVT_ID'];
$sql = "SELECT * FROM devotee_info WHERE DEVT_ID= '$id'"; // Fetch data from the table customers using id
$result=mysqli_query($conn,$sql);
$singleRow = mysqli_fetch_assoc($result);
?>