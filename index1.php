<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>SDF MIS</title>
	<!-- <link rel="stylesheet" type="text/css" href="ipr.css"> -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">

</head>
<body class="contain">
	<center><p><h2>   Welcome to IPRC Ngoma SDF Program </h2></p></center>
	<center><p> SDF is a program implemented by IPRC Ngoma to upskill the youth in IT related field  </center>
		<!-- <a href="#">  click here.</a>  -->
	</p>

	<div class="container">
		

		         <p><h3> Fill this form to apply:</h3> </p>

		<form name="new_applicant_form" action="registration_confirmation.php" method="post" style="width: 60%">
			<p> First name: <input type="text" name="izina" class="form-control"> </p>
			<p> Last name:  <input type="text" name="last_name" class="form-control"></p>
			<p> Gender: <br>
				<div class="form-check"><input type="radio" id="female" name="gender" value="Female" class="form-check-input">
				<label for="female" class="form-lable">Female</label><br></div>
				<div class="form-check"><input type="radio" id="male" name="gender" value="Male" class="form-check-input">
				<label for="male" class="form-lable" >Male</label><br></div>
			<p> Date of birth: <input type="date" name="date_of_birth " class=""></p>
			<p>Highest academic level 
				<select name="highest_academic_level" class="form-select">
					<option value="primary">Primary</option>
					<option value="secondary">Secondary</option>
					<option value="university">University</option>
				</select>
			</p>
			<p> Province: <input type="text" name="province" class="form-control"></p>
			<p> District: <input type="text" name="district" class="form-control"></p>
			<p> Sector:   <input type="text" name="sector" class="form-control"></p>
	<p> Cell:     <input type="text" name="cell" class="form-control"></p>
		<p> Email:<input type="email" name="email" class="form-control"></p>
			<p> Password: <input type="password" name="password" class="form-control"></p>
			<p> Learning Option: <br>
				<input type="radio" id="iot" name="learning_option" value="1"  class="form-check-input">
				<label for="iot"class="form-lable">IOT</label><br>
				<input type="radio" id="sod" name="learning_option" value="2"  class="form-check-input">
				<label for="sod" class="form-lable">Software Development</label>
				<input type="radio" id="civil_engineering" name="learning_option" value="3"  class="form-check-input">
				<label for="civil_engineering" class="form-lable">Civil Engineering</label>
			</p>
			<p><input type="submit" name="submit" value="Submit"   class="btn btn-primary"></p><br>
		</form>
	</div>
</body>
</html>