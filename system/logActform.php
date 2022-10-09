<?php include '../dbconnection/connection.php';
$username=$_POST['username'];
$password=$_POST['password'];
$user=$_POST['whom'];

/*if(isset($_POST['submit'])){
	if ($user="asPatient") {
		$find="SELECT * FROM dams_patient WHERE (email='$username' AND password='$password')";
		$result=$conn->query($find);
		if ($result->num_rows >0) {
			while ($row=$result->fetch_assoc()) {
				header("Location: userDashbord.php");
			}
			
		}
		
	}
	elseif ($user="asAdmin") {
		$find="SELECT * FROM dams_patient WHERE (email='$username' AND password='$password')";
		$result=$conn->query($find);
		if ($result->num_rows >0) {
			while ($row=$result->fetch_assoc()) {
				header("Location: userDashbord.php");
			/*}
			*/
		/*}*//*else echo "please register yourself";*/
		
/*
	elseif ($user="asDoctor") {
		header("Location: appointment.php");
	}
	else

	{
	 header("Location: open.php");
}
}*/ 

if (isset($_POST['submit'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	$user=$_POST['whom'];
	/*if ($user="asAdmin") {
		header("Location: adminDashboard.php");
	}elseif ($user="asDoctor") {
		header("Location: appointment.php");
	}elseif ($user="asPatient") {
		header("Location: userDashbord.php");
	}
	else{
		header("Location: open.php");
	}*/
	switch ($user) {
		case 'asPatient':
			$find="SELECT * FROM dams_patient WHERE (email='$username' AND password='$password')";
			$result=$conn->query($find);
			if ($result->num_rows >0) {
			while ($row=$result->fetch_assoc()) {
				header("Location: userDashbord.php");
				}
			}else{
				header("Location: open.php");
			}
			break;

			case 'asDoctor':
			header("Location: appointment.php");
			break;

			case 'asAdmin':
			header("Location: adminDashboard.php");
			break;
		default:
			header("Location: open.php");
			break;
	}
}
 ?>