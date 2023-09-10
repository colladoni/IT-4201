 <?php

 session_start();


function check_patient($conn)
{

	if(isset($_SESSION['Patient_ID']))
	{

		$Patient_ID = $_SESSION['Patient_ID'];
		$query = "select * from patient_profile where Patient_ID = '$Patient_ID' limit 1";

		$result = mysqli_query($conn,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

}