<?php
	include 'conn.php';
	session_start();
	$stdid=$_POST['stdid'];
	$password=$_POST['password'];
	$check=mysqli_query($conn,"select * from stdlog where stdid='$stdid' and pass='$password'");
	if (mysqli_num_rows($check)>0)
	{
		$_SESSION['stdid']=$stdid;
		
		$rowoe = mysqli_fetch_assoc($check);
		$_SESSION['stdname']=$rowoe['name'];
		$_SESSION['stdsem']=$rowoe['currentsem'];
		$_SESSION['stddob']=$rowoe['dob'];
		$_SESSION['stdemail']=$rowoe['mail'];
		$_SESSION['stdgender']=$rowoe['gender'];
		$_SESSION['stdmobile']=$rowoe['mobileno'];
		$_SESSION['stdblood']=$rowoe['bloodgroup'];
		$_SESSION['stdstate']=$rowoe['domicilestate'];
		
		
		echo json_encode(array("loginStatus"=>123));
	}
	else{
		echo json_encode(array("loginStatus"=>456));
	}
	mysqli_close($conn);
	
?>
  