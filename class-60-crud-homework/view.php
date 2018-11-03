 <!doctype html>

<html>
	<head> 
		<meta charset="UTF-8">
		<title> Mark-sheet </title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="style _view.css">
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
			 
			</div>
			<div class="row mainbody">
				<section>
					<div class="div margin10">
						<form action="" method="post" enctype="multipart/form-data">
							 <div class="margin10">
								<div class="panel panel-success">
											<div class="panel-heading">
											  <h2 style="color:red;text-align:center;"> Insert Student-details & Marks </h2>
											 </div>
											 <div class="panel-body">
											 	<div class="row">
											 		<div class="col-md-12">
											 			<a href="insert.php" class="btn btn-info" role="button">Add new student's mark </a>
											 			<table>
											 				<tr>
											 					<td><h3>Exam Name:</h3></td><td> </td>
											 				</tr>
											 				<tr>
											 					<td align="right"><h3>Group: </h3></td><td> </td>
											 				</tr>
											 			</table>
											 		</div>
											 	</div>
											 	<div class="row">
											 		<div class="col-md-12">
											 			<div class="table-responsive">
												 			<table class="table" border="1px">
												 				 <tr>
												 				 	<th>Roll </th>
												 				 	<th>Name </th>
												 				 	<th>Bangla </th>
												 				 	<th>English </th>
												 				 	<th>ICT </th>
												 				 	<th>Civics </th>
												 				 	<th>Islamic History </th>
												 				 	<th>Social Work </th>
												 				 	<th>Economics </th>
												 				 	<th>Agriculture </th>
												 				 	<th>Photo</th>
												 				 	<th>Action</th>
												 				 </tr>

												 				 <?php
												 				 include('function.php');

												 				 $select= "SELECT * FROM hu";
												 				 $connectionObject= new dbConnectionClass;
												 				 $selectData = $connectionObject->select($select);
												 				 while ($selectAllData=$selectData->fetch_object()) {?>
												 				 	 <tr>
												 				 	 	<td><?php echo $selectAllData->roll;?></td>
												 				 	 	<td><?php echo $selectAllData->name;?></td>
												 				 	 	<td><?php echo $selectAllData->bangla;?> </td>
												 				 	 	<td><?php echo $selectAllData->english;?> </td>
												 				 	 	<td><?php echo $selectAllData->ict;?> </td>
												 				 	 	<td><?php echo $selectAllData->civics;?> </td>
												 				 	 	<td><?php echo $selectAllData->history;?> </td>
												 				 	 	<td><?php echo $selectAllData->s_work;?> </td>
												 				 	 	<td><?php echo $selectAllData->economics;?> </td>
												 				 	 	<td><?php echo $selectAllData->agriculture;?> </td>
												 				 	 	<td><img src="images/<?php echo $selectAllData->photo;?>" width="30px"> </td>
												 				 	 	<td> 
												 				 	 		<a href="edit.php?roll=<?php echo $selectAllData->roll;?>">Edit </a>
												 				 	 		<a href="edit.php?roll=<?php echo $selectAllData->roll;?>">Delete </a>
												 				 	 	</td>
												 				 	 </tr>
												 				<?php }
												 				 ?>
												 			</table>
												 		</div>
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