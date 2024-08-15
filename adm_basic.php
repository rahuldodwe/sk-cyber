<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SK-Cyber</title>

	<link rel="icon" type="image/x-icon" href="img/top-logo.png">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/form.css">



</head>
<body>

	<div class="container">
		<form action="basic.php" method="post" class="adm_cp">
			<h2 class="text-center" style="font-family: serif; font-weight: bold; text-decoration: underline;">Admission In Computer Basic</h2>
			
			<div class="form-group">
				<label class="lab">Student Name:</label>
				<input type="text" name="sname" autocomplete="off" class="form-control" placeholder="Enter Your Name" required>
			</div>

			<div class="form-group">
				<label class="lab">Father Name:</label>
				<input type="text" name="fname" autocomplete="off" class="form-control" placeholder="Enter Your Father Name" required>
			</div>


			<div class="form-group">
			    <p>Education:</p>

                <input type="radio" value="b10" id="b10" name="edu" required/>
				<label for="bl10">Below 10th</label>
                
				<input type="radio" value="11-12" id="11-12" name="edu" required/>
                <label for="11-12">11th-12th</label>
                
				<input type="radio" value="college" id="college" name="edu" required/>
				<label for="college">College</label>   
			</div>

			<div class="form-group">
			    <p>Gender:</p>

                <input type="radio" value="M" id="M" name="gender" required/>
				<label for="male">Male</label>
                
				<input type="radio" value="F" id="F" name="gender" required/>
                <label for="male">Female</label>
                
				<input type="radio" value="o" id="o" name="gender" required/>
				<label for="other">Other</label>   
			</div>             
			

			<div class="form-group">
				<label class="lab">Mobile NO.</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control" placeholder="Enter Your Mobile Number" maxlength="10" required>
			</div>

			<div class="form-group">
				<label class="lab" name="addr">Address:</label>
				<textarea class="form-control" name="addr" placeholder="Add....." required></textarea>
			</div>

			<center>

			<input type="submit" name="submit" value="submit" class="btn btn-warning"/>

			</center>
		

		</form>
	</div>

</body>
</html>