
<!DOCTYPE HTML>

<html>

<head>

	<meta charset="utf-8">

	<meta name="keywords" content="html,css,js,bootstrap">

	<meta name="description" content="One page">

	<meta name="author" content="BKI">

	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<title> Form Validation </title>

	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">

	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">


</head>

<body>


 <section id="header"> 
 
		<div class="container-fluid">
		
		  <?php
		  	 session_start();
			 if(isset($_SESSION['message'])){ ?>
			 	<div class="alert alert-danger">
		  		<strong>Deleted!</strong> 
		    <?php 
		    	echo $_SESSION['message'];
		        unset($_SESSION['message']);
		    }
		?>
		</div>
		
		<div class="row"> 
		
			<div class="col-md-12"> 
			
			<div class="top-header"> <h2> CRUD</h2> </div> <!--end of mai header-->
			
			
			
			</div>
		
		</div>

	</div><!--end of container-->
 
 
 </section>

 
 
 
 <section id="navigation"> 
 
 <div class="container-fluid"> 
 
 <nav class="navbar navbar-default"> 
 
 <div class="navbar-header">

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>

      </button>

     <ul class="nav navbar-nav"> 
	 
	 <li> <a href="#">Home</a> </li>
	 
	 <li> <a href="#"> Service </a> </li>
	 
	 <li> <a href="#"> About Us </a> </li>
	 
	 </ul><!--end of ul nav-->

   </div> <!--end of navbar header-->
 
 
 
 </nav>
       	
 
 </div><!--end of container-->
 
 </section><!--end of nav-->
 
 
  <div class="content"> 
 
 
 
 <div class="container-fluid"> 
 
 <div class="row"> 
 
 
 <div class="col-md-12"> 
 
	<div class="panel panel-info">

<div class="panel-heading"> <h3> Form Vaidation and Api  </h3> </div> 

<div class="panel-body"> 


	<table id="myTable" class="table table-bordered table-striped"> 
	
	<thead>
		
		<tr>
			
			<th>  Name </th>
			
			<th>  Email </th>
			
			<th> Phone </th>
			
			<th> Country Code</th>
			
			<th> Address </th>

			<th> Biography </th>
			
			<th> Main Job Role </th>

			<th> Skill Level </th>

			<th> Picture </th>
			
			<th> Action </th>
			
		
		</tr>
	
	</thead>
	
	<tbody>
	
	<?php 


	include('function.php');

	$select ="SELECT * FROM students";

	$data =$webapps->select($select);

	while($all_data=$data->fetch_object()){ ?>
	
	<tr>  

		<td> <?php echo $all_data->name;?> </td>

		<td> <?php  echo $all_data->email;?> </td>

		<td> <?php echo $all_data->phone;?> </td>

		<td>

		<?php

			$country_id = $all_data->country_code_id;

			$country_sql ="SELECT * FROM country_code_id WHERE id='$country_id'";

			$country_data =$webapps->select($country_sql);

			while($countryName = $country_data->fetch_object())

			{

				echo $countryName->code_id;

			}

		?>

		</td>

		<td> <?php echo $all_data->address;?> </td>;

		<td> 

			<?php 

				$file = $all_data->biography;

				if(file_exists("biography/".$file))

				{

					$file_data =fopen("biography/". $file,"r");

					echo fread($file_data,filesize("biography/".$file));

				}

				else {


					echo "no data found";
				}

			?>

		</td>

		<td>

			<?php 

				$job_id = $all_data->main_job_role_id;

				$job_sql = "SELECT * FROM main_job_role_id WHERE id='$job_id'";

				$job_data = $webapps->select($job_sql);

				while($job_role=$job_data->fetch_object())

				{

					echo $job_role->role;

				}


			?>

		</td>

		<td> <?php echo $all_data->skill_Level;?> </td>


		<td>

			<?php 

				$file = $all_data->picture ;

				if(file_exists("images/".$file)){?>


					<img src="images/<?php echo $all_data->picture;?>" width="30px">


					<?php }

					else 

					{

						echo "No image found";
					}

				?>

		</td>


		<td>  

		<a href="edit.php?id=<?php echo $all_data->id;?>" class="btn btn-info"> Edit </a>

		<a class="btn btn-danger delete" href="delete.php?id=<?php echo $all_data->id;?>&file=<?php echo $all_data->biography;?>&image=<?php echo $all_data->picture;?>" >Delete</a>

		</td>

	</tr>

	<?php }

	?>
	
	</tbody>
	
	</table>


 </div> <!--end of panel body-->

<div class="panel-footer"> </div>

 </div><!--end of panel-->
 
 </div><!--end of col md 6-->
 
 
 
 </div><!--end of row-->
 
 
 </div><!--end of container-->
 
 
 </div><!--end of content-->
 
 </section>


<script type="text/javascript" src="js/style.js"> </script>

<script type="text/javascript" src="js/bootstrap.min.js"> </script>

<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

<script>
  $('.delete').click(function(e) {
    e.preventDefault(); // Prevent the href from redirecting directly
    var linkURL = $(this).attr("href");
    warnBeforeRedirect(linkURL);
  });

  function warnBeforeRedirect(linkURL) {
    swal({
      title: "Sure want to delete?", 
      text: "If you click 'OK' file will be deleted", 
      type: "warning",
      showCancelButton: true
    }, function() {
      // Redirect the user | linkURL is href url
      window.location.href = linkURL;
    });
  }
</script>
<script>
	$(document).ready( function () {
	    $('#myTable').DataTable();
	});
</script>

</body>

</html>