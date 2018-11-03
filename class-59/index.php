<?php 

include ('function.php');

if(isset($_POST['submit']))

{

		// 	echo "<pre>";
		// print_r($_POST);
		// print_r($_FILES);

	$name =$_POST['name'];

	$email =$_POST['email'];

	$password=$_POST['password'];

	$phone =$_POST['phone'];

	$country_code_id= $_POST['country_code_id'];

	$address=$_POST['address'];

	$biography=$_POST['biography'];

	$main_job_role_id=$_POST['main_job_role_id'];

	$skill_Level=$_POST['skill_Level'];

	$picture=$_FILES['picture']['name'];

	$ssc=$_POST['ssc'];

	$hsc=$_POST['hsc'];

	$graduation=$_POST['graduation'];

	$post_graduation=$_POST['post_graduation'];

	$webapps =new Webapp;

	$select ="SELECT email FROM students WHERE email='$email'";

	$data = $webapps->select($select);

	$email= $data->fetch_object();
	
	if($email != null){
		echo "email already ase";
	}
	die();

	try{

		

		$insert_query= "INSERT INTO students VALUES('','$name','$email','$password','$phone','$country_code_id',

			'$address','$bio_file_name','$main_job_role_id','$skill_Level','$picture','$ssc','$hsc','$graduation','$post_graduation')";

		$webapps->insert($insert_query);

		echo "not inserted";


	}

	catch(exception $e)

	{

		echo "inserted";

		// $range =range("a","z");

		// $rand=rand(0,999);

		// $datae =array($range,$rand);

		// $shuffle=shuffle($datae);

		
		//$range = range("a","z");
		$rand = rand(0,999);
		//$data = array($range,$rand);
		//$shuffle = shuffle($data);

		$bio_file_name = $rand.".txt";
		$fopen = fopen("biography/".$bio_file_name,"w");
		fwrite($fopen,$biography);


		move_uploaded_file($_FILES['picture']['tmp_name'],"images/".$_FILES['picture']['name']);
	}

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V13</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">

	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" method="post" action="" enctype="multipart/form-data">
					<span class="login100-form-title p-b-59">
						Sign Up
					</span>

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Full Name</span>
						<input class="input100" type="text" name="name" placeholder="Name...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Email addess...">
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="text" name="password" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Phone</span>
						<input class="input100" type="number" name="phone" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">

						<span class="label-input100">Country</span>

						<select class="input100" name="country_code_id">

							<?php 

								$select ="SELECT * FROM country_code_id";

								$data = $webapps->select($select);

								while($country=$data->fetch_object())

								{ ?>

									<option value="<?php echo $country->id;?>"> <?php echo $country->code_id;?> </option>


							<?php 	}

							?>

						</select>

						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Address</span>
						<textarea class="input100" name="address" placeholder="Your address"> </textarea>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Biography</span>
					<textarea class="input100" name="biography" placeholder="Your Biography"> </textarea>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Main Job</span>
						<select class="input100" name="main_job_role_id">

							<?php   

							$select = "SELECT * FROM main_job_role_id";

							$data = $webapps->select($select);

							while($main_job=$data->fetch_object())

							{ ?>

								<option value="<?php echo $main_job->id;?>"> <?php echo $main_job->role;?> </option>

						<?php	}

							?>
						

						</select>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Skill Level</span>
						<input class="input100" type="number" name="skill_Level" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Picture</span>
						<input class="input100" type="file" name="picture" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">SSC</span>
						<input class="input100" type="text" name="ssc" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

						<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">HSC</span>
						<input class="input100" type="text" name="hsc" placeholder="*************">
						<span class="focus-input100"></span>
					</div>


						<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Graduation</span>
						<input class="input100" type="text" name="graduation" placeholder="*************">
						<span class="focus-input100"></span>
					</div>


						<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Post Graduation</span>
						<input class="input100" type="text" name="post_graduation" placeholder="*************">
						<span class="focus-input100"></span>
					</div>



					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									I agree to the
									<a href="#" class="txt2 hov1">
										Terms of User
									</a>
								</span>
							</label>
						</div>


					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<input type="submit" value="Sign Up" name="submit" class="login100-form-btn">

						</div>

						<a href="#" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>
