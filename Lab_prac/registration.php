<?php 
	session_start();

	$id = $_POST['id'];
	$password = $_POST['password'];
    $Confirm_password= $_POST['confirmpassword'];
    $name=$_POST['username'];
    $type=$_POST['type'];
    
	if($id == null || $password == null ||   $name == null||  $type== null){
		echo "null ";
	}
    else{
		$user = $id."|".$password."|". $name."|". $type."\r\n";
        if($password==$Confirm_password){
            $file = fopen('user.txt', 'a');
		    fwrite($file, $user);
		    header('location: registration.html');

        }
        else{

            echo "Passwords does not match";

        }	
	}
?>