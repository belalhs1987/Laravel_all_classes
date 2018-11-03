
	 


<!doctype html>
<html>
<head>
	<title> Form Validation with php </title>
	<style>
		.form-validaton{
			width: 450px;
			margin:0 auto;
			background: #ddd;
			padding 20px 50px;
			box-sizing: border-box;
		}
		#table{padding-left:50px; padding-bottom: 20px;}
		.label{
			float: left;
			width: 100%;
			font-size:16px;
			font-weight:bold;
			padding-top:10px;
		}
		.text{
			float:left;
			width:300px;
			height:30px;
			padding:5px;
			box-sizing:border-box;
		}
		.row{
			float:left;
			width:100%;
			margin-bottom:5px;
		}
		h2{
			text-align:center;
			text-transform: uppercase;
			padding-top:20px;
		}
		.btn{
			float:right;
			padding:10px 15px;
			font-size: 16px;
			text-transform:  uppercase;
			font-weight: bold;
			color:#555;
			border: 1px solid #eee;
			background: #fff;
		}
		.error{
			color:#cc0000;
			padding-top: 5px;
			float:left;
			width:100%;
		}
	</style>
</head>
<?php
	include('function.php');

	if(isset($_POST['submit'])){
		 //echo "<pre>";
		 //print_r($_POST);
		$email=$_POST['email'];
		$phone = $_POST['phone'];
		$password=$_POST['password'];
		
		$error = 0;
		$msg = "";

		if($email == ""){
			$error = $error+1;
			$email_err = "<p style='color:red;'>* Email required</p>";
			echo $email_err;
		 }
if($email){
$db_class =new db_class;

	$select ="SELECT email FROM customer WHERE email='$email'";

	$data = $db_class->select($select);

	$email= $data->fetch_object();
	
		 if($email != null){
			$error = $error+1;
			$email_err2 = "<p style='color:red;'>* email already ase</p>";
			echo $email_err2;
		 }
		 }
		  
		if($password == ""){
			$error = $error+1;
			$msg1 = "<p style='color:red;'>* password required</p>";
			echo $msg1;
		 }
		 if($password ==!preg_match('/[0-9]?[A-Z]/',$password)){
			$error = $error+1;
			$msg5 = "<p style='color:red;'>* At least one number and capital letter required in password</p>";
			echo $msg5;
		 }
		 if($phone == ""){
			$error = $error+1;
			$phone_err1 = "<p style='color:red;'>* phone required</p>";
			echo $phone_err1;
		 }
		 if($phone){
		 	$count = strlen($phone);
		 	if($count!=11){
		 		$error = $error+1;
		 		$phone_err2 = "<p style='color:red;'>* Phone Number should be 11 digits</p>";
			echo $phone_err2;
		 	}
			 
		 }

		 if($error == 0){
						try{
							$db_class = new $db_class;
							$insert_query = "INSERT INTO customer VALUES('','$email','$phone','$password')";
							$db_class->insert($insert_query);
							echo "not inserted";
						}catch(exception $e){
							echo "inserted";
							//image
						}

		}else{
			echo "not inserted";
		}

		 	}
?>
 
<body>
	<div class="form-validaton">
		<h2> Create an Account	</h2>
		<form action="" method="post" enctype="multipart/form-data">
			<table id="table">
				 
				 
				<tr class="row">
					<td><label for="email">Email</label> </td>
					<td> <input class="text" type="email" id="email" name="email" placeholder="Email"></td>
				</tr>
				<tr class="row">
					 <td><label for="phone">Phone</label> </td>
					<td> <input class="text" type="number" id="phone" name="phone" placeholder="Phone Number" ></td>
				</tr>
				 
				  
				 
				<tr class="row">
					<td><label for="password">password: </label> </td>
					<td><input type="password" name="password"> </td>
				</tr>
				 
				 
				<tr class="row">
					<td> <button type="submit" name="submit" value="submit">Sign Up </button> </td>
				</tr>
			</table>
		</form>
	</div>
	 
</body>
</html>