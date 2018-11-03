<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  </head>
<body>
	<form action="{{ route('insertForm') }}" method="post">
		{{ csrf_field() }}
		Student Name:<input type="text" name="student_name"> <br><br>
		Student Email:<input type="text" name="student_email"><br><br>
		Student Password:<input type="text" name="password"><br><br>
		Retype Password:<input type="text" name="password_confirmation"><br><br>
		Date of birth:<input type="text" name="dob"><br><br>
		Phone:<input type="text" name="phone"><br><br>
		Image:<input type="text" name="image"><br><br>
		Male:<input type="radio" name="gender" value="0">
		Female:<input type="radio" name="gender" value="1"><br><br>
		<select name="group">
			<option value="">Select a group</option>
			<option value="1">Science</option>
			<option value="2">Arts</option>
		</select><br><br>
		english : <input type="checkbox" name="subject[]" value="english">
		math : <input type="checkbox" name="subject[]" value="math">
		bangla : <input type="checkbox" name="subject[]" value="bangla">
		sports : <input type="checkbox" name="subject[]" value="sports"><br><br>
		<input type="submit" name="submit" value="insert">
	</form>


</body>
</html>
