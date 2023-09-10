<?php

    
    define('DBINFO','mysql:host=localhost;dbname=bhc');
    define('DBUSER','root');
    define('DBPASS','');

    function performQuery($query){
        $con = new PDO(DBINFO,DBUSER,DBPASS);
        $stmt = $con->prepare($query);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    function fetchAll($query){
        $con = new PDO(DBINFO, DBUSER, DBPASS);
        $stmt = $con->query($query);
        return $stmt->fetchAll();
    }
session_start();

function check_doctor($conn)
{

    if(isset($_SESSION['Doctor_ID']))
    {

        $Doctor_ID = $_SESSION['Doctor_ID'];
        $query = "select * from doctor_profile where Doctor_ID = '$Doctor_ID' limit 1";

        $result = mysqli_query($conn,$query);
        if($result && mysqli_num_rows($result) > 0)
        {

            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

}
function check_nurse($conn)
{

    if(isset($_SESSION['Nurse_ID']))
    {

        $Nurse_ID = $_SESSION['Nurse_ID'];
        $query = "select * from nurse_profile where Nurse_ID = '$Nurse_ID' limit 1";

        $result = mysqli_query($conn,$query);
        if($result && mysqli_num_rows($result) > 0)
        {

            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

}
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
?>