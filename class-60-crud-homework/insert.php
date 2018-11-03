 <!doctype html>

<html>
	<head> 
		<meta charset="UTF-8">
		<title> Mark-sheet </title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
	</head>

	<body>
		<div class="container">
			<div class="row header">
				<header style="text-align:center">
					<div class="col-md-2"><img src="images/logo.png" alt="BCC Logo" style="padding-top:30px;"></div>
					<div class="col-md-8">
						<h3>Tejgaon Adarsha School and College  </h3>
						<h4>Inserting Marks into Tabulation-sheet </h4>
					</div>
					 <div class="col-md-2">&nbsp;</div>
				</header>
			</div>
			<div class="row">
				<div class="col-md-12 mainMenu">&nbsp;</div>
			</div>
			<div id="php_code">
				<?php
				include('function.php');
					if(isset($_POST['submit'])){
						// echo "<pre>";
						 //print_r($_POST);
						 
						$class = $_POST['class'];
						$group = $_POST['group'];
						$roll = $_POST['roll'];
						$name = $_POST['name'];
						$bangla = $_POST['bangla'];
						$english = $_POST['english'];
						$ict = $_POST['ict'];
						$civics = $_POST['civics'];
						$history = $_POST['history'];
						$s_work = $_POST['s_work'];
						$economics = $_POST['economics'];
						$agriculture = $_POST['agriculture'];
						$photo = $_FILES['photo']['name'];

						
						  try{
						  	$connectionObject= new dbConnectionClass;
						  	$insert = "INSERT INTO hu VALUES('$roll','$name','$bangla','$english','$ict','$civics','$history','$s_work','$economics','$agriculture','$photo')";
						  	$connectionObject->insert($insert);
						  	echo "not inserted";
						  }catch(exception $e){
						  	echo "inserted";
						  	move_uploaded_file($_FILES['photo']['tmp_name'],'images/'.$photo);
						  		
						  		/*if($photo){
							 $randomNumber = rand().rand().rand();
							 $ext = substr($_FILES['photo']['name'],-4);
							 $img_name=$randomNumber."$ext";
							move_uploaded_file($_FILES['photo']['tmp_name'],'images/'.$img_name);
							}else{echo "picture error";}
							*/
						  }
					}
				?>
			 
			</div>
			<div class="row mainbody">
				<section>
					<div>
						<form action="" method="post" enctype="multipart/form-data">
							<div class="div margin10">
							 <div class="margin10">
								<div class="panel panel-success">
									<div class="panel-heading">
									   <h3 align="center">Insert Student-details & Marks</h3>
								   </div>
								   <div class="panel-body">
								   		<div class="row form-group">
											<label for="name" class="col-md-2 col-form-label">Class</label>
										
											 <div class="col-md-10">
												<input type="text"  class="form-control" id="class" name="class">  
												 
											</div>
										</div>
								   	<div class="row form-group">
											<label for="name" class="col-md-2 col-form-label">Group</label>
										
											 <div class="col-md-10">
												<input type="text"  class="form-control" id="group" name="group">  
												 
											</div>
										</div>
										<div class="row form-group">
											<label for="name" class="col-md-2 col-form-label">Roll</label>
										
											 <div class="col-md-10">
												<input type="number"  class="form-control" id="roll" name="roll">  
												 
											</div>
										</div>
										<div class="form-group row">
												<label for="password" class="col-sm-2 col-form-label">Student's Name</label>
											  <div class="col-sm-10">
												   <input type="text"  class="form-control" id="name" name="name" >
												   
											  </div>
										 </div>
										    <div class="form-group row">
											  <label for="bangla" class="col-sm-2 col-form-label">Bangla</label>
											   <div class="col-sm-10">
												<input type="number"  class="form-control" id="bangla" name="bangla">
														 
													</div>
											</div>
											<div class="form-group row">
											  <label for="english" class="col-sm-2 col-form-label">English</label>
											   <div class="col-sm-10">
													  <input type="number"  class="form-control" id="english" name="english">
														 
													</div>
											</div>
											<div class="form-group row">
											  <label for="bangla" class="col-sm-2 col-form-label">ICT</label>
											       <div class="col-sm-10">
													  <input type="number"  class="form-control" id="ict" name="ict">
														 
													</div>
											  </div>
											  <div class="form-group row">
											  <label for="bangla" class="col-sm-2 col-form-label">Civics</label>
											       <div class="col-sm-10">
													  <input type="number"  class="form-control" id="civics" name="civics">
														 
													</div>
											  </div>
											  <div class="form-group row">
											  <label for="bangla" class="col-sm-2 col-form-label">Islamic History</label>
											       <div class="col-sm-10">
													  <input type="number"  class="form-control" id="history" name="history">
														 
													</div>
											  </div>
											  <div class="form-group row">
											  <label for="bangla" class="col-sm-2 col-form-label">Social Work</label>
											       <div class="col-sm-10">
													  <input type="number"  class="form-control" id="s_work" name="s_work">
														 
													</div>
											  </div>
											   <div class="form-group row">
											  <label for="bangla" class="col-sm-2 col-form-label">Economics</label>
											       <div class="col-sm-10">
													  <input type="number"  class="form-control" id="economics" name="economics">
														 
													</div>
											  </div>
											   <div class="form-group row">
											  <label for="bangla" class="col-sm-2 col-form-label">Agriculture</label>
											       <div class="col-sm-10">
													  <input type="number"  class="form-control" id="agriculture" name="agriculture">
														 
													</div>
											  </div>

											 <div class="form-group row">
												   <label for="photo" class="col-sm-2 col-form-label">Photo</label>
												   <div class="col-sm-5">
													  <input type="file"  class="form-control " id="photo" name="photo">
														 
												   </div>
										 	  </div>
										 </div>
										  <div class="form-group">
											   <div class="col-sm-offset-4 col-sm-8">
													<button type="submit" class="btn btn-primary" name="submit">
													<i class="glyphicon glyphicon-plus">
													</i> Submit</button>

												</div>
										   </div>
								   </div>
								</div>
							 </div>
						</form>
							
						
						
					</div>
				</section>
			</div>
			<div class="footer row">
				<footer>
					<div class="col-md-12"><h2>Bangladesh Computer Council</h2> 
											  <h4> ICT Tower, Agargaon<br/>
											   Dhaka-1207.</h4>
											   <p>&copy; Copyright @ <a href="#">Bangladesh Computer Council</a></p>
					
					</div>
					 
				</footer>
			 </div>
		</div>
	</body>
</html>