<?php
 echo $_COOKIE['newhobby']."</br>";
 $con=mysqli_connect('localhost','root','root','OpenS');
 if($con){
 	$name=$_COOKIE['newhobby'];
 	$sql="SELECT * FROM Community where hobbyname='$name'";
 	$r=mysqli_query($con,$sql);
 	echo "<ul type='disk'>";
 	while($c=mysqli_fetch_array($r)){echo $c[1]."</br>";}
 	echo "</ul>";
 }else{
 	//should be cleared during commercialization
 	echo "Error ";
 }
?>