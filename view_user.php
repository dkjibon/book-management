<?php
	require 'db_conn.php';

  session_start();
  if(!isset($_SESSION['email'])){
   
     header('Location:login.php');
   }

?>
<?php

	$orader_id =$_GET['orader_id'];
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname   ="ebook";
	try {

		  $conn = new PDO("mysql:host=$hostname;dbname=$dbname",$username,$password);
		  $query = $conn->prepare("SELECT * FROM orader_users_information WHERE orader_id={$orader_id}");
		  $query->execute();
		  $result = $query->fetch();
		 /* echo "<pre>";
		  print_r($result);*/
	/*if( !empty( $_POST['update'] ) )
		{

           $fristname  = $_POST['fristname'];
           $lastname   = $_POST['lastname'];
           $email 	   = $_POST['email'];
           $phonenumber= $_POST['phonenumber'];
           $gender 	   = $_POST['gender'];
           $date_of_birth = $_POST['date_of_birth'];
           $present_add   = $_POST['present_add'];
           $permanent_address = $_POST['permanent_address'];
           $photo          = $_POST['photo'];
           $orader_id = $_POST['orader_id'];
			
			
			$sql = "UPDATE 
					orader_users_information 
					SET 
						frist_name='{$fristname}', 
						last_name='{$lastname}', 
						email='{$email}', 
						phone_number='{$phonenumber}',
						gender='{$gender}', 
						date_of_birth='{$date_of_birth}', 
						present_address='{$present_add}', 
						permanent_address='{$permanent_address}',
						profile_photo='{$photo}' 
					WHERE 
					orader_id={$orader_id}
				";
			
			$staement = $conn->prepare($sql);
			$staement->bindValue(":fristname",$fristname);
			$staement->bindValue(":lastname",$lastname); 
			$staement->bindValue(":email",$email); 
			$staement->bindValue(":phonenumber",$phonenumber); 
			$staement->bindValue(":gender",$gender); 
			$staement->bindValue(":date_of_brith",$date_of_brith);
			$staement->bindValue(":present_add",$present_add);
			$staement->bindValue(":permanent_address",$permanent_address);
			$staement->bindValue(":photo",$photo);
			$staement->bindValue(":orader_id",$orader_id);
			$query = $conn->prepare($sql);
		    if($query->execute()) 
		    {
		    	echo "<script>
	                   alert('Data Updated Successfully !!!!!');
	             </script>"; 
	             header('Location:user_list.php');
		    }else
		    {
		    	echo "<script>
	                   alert('Data Not Updated Successfully !!!!!');
	             </script>"; 
		    }
			
			
			$conn = null; 
		}
	}*/ } catch (Exception $e) {
    	echo "error".$e->getMessage();
    	
	}		


?>

<!DOCTYPE html>
	<html>
	<head>

		<title>User View</title>
		<meta content="noindex, nofollow" name="robots">
		<link href="css/oder_information.css" rel="stylesheet">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		  <title>jQuery UI Datepicker - Default functionality</title>
		  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
		  <link rel="stylesheet" href="/resources/demos/style.css">
		  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
		  <script>
		  $( function() {
		    $( "#datepicker" ).datepicker();
		  } );
		  </script>
	</head>
<body>
<div class="maindiv">
<div class="form_div">
	<div class="title">
		<h2>View Data</h2>
		</div>
		<form action="" method="POST">
			
			<!-- span class="error">* required field.</span> -->
			First Name : <?php echo $result['frist_name'];?>
			<br><br>
			Last Name : <?php echo $result['last_name']; ?>
			<br><br>
			E-mail Address :<?php echo $result['email'] ?>
			<br><br>
			Phone Number : <?php echo $result['phone_number'] ?>
			<br><br>
			Gender :<?php ($result['gender'] == 'famale')?"checked='checked'" :''; ?>
					<?php ($result['gender'] == 'male')?"checked='checked'" :''; ?>
			<br><br>
			Date of Birth :<?php echo $result['date_of_birth']; ?>
			<br><br>
			Present Address : <?php echo $result['present_address']; ?>
			<br><br>
			 Permanent Address : <?php echo $result['permanent_address']; ?>
			<br><br>
			Profile Picture : <?php echo $result['profile_photo']; ?>
			<br><br>
			<a href='user_list.php' button class='<button7 button6'>Black</button></a>
		</form>
</div>

<?php
	
?>
</body>
</html>