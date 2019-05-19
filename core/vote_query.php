<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_database="test";

 $con = mysqli_connect($db_host, $db_user, $db_password,$db_database);


 $res = mysqli_query($con, "SELECT * FROM users");
 $num = mysqli_num_rows($res);
 if ($num > 0) {
   echo "Output";
}else{
  echo "Error!";
}
while ($dsatz = mysqli_fetch_assoc($res)) {

}



mysqli_close($con);







 ?>
