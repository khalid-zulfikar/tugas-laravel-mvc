<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<h1>Buat Account Baru!</h1>
	<h3>Sign Up Form</h3>
	<form action="/biodata" method="POST">
		@csrf 
	  <p>First Name:</p>
	  <input type="text" name="first">
	  <p>Last Name:</p>
	  <input type="text" id="lname" name="last">
	  <p>Gender:</p>
	  <input type="radio" id="male" name="gender" value="male">
	  <label for="male">Male</label><br>
	  <input type="radio" id="female" name="gender" value="female">
	  <label for="female">Female</label><br>
	  <input type="radio" id="other" name="gender" value="other">
	  <label for="other">Other</label>
	  <p>Nationality:</p>
	  <select id="national" name="national">
	    <option value="Indonesia" selected>Indonesia</option>
	    <option value="Singapura">Singapura</option>
	    <option value="Malaysia">Malaysia</option>
	    <option value="Australia">Australia</option>
	  </select>
	  <p>Language Spoke:</p>
	  <input type="checkbox" id="bahasa" name="bahasa" value="bahasa">
	  <label for="bahasa"> Bahasa Indonesia</label><br>
	  <input type="checkbox" id="english" name="english" value="english">
	  <label for="english"> English </label><br>
	  <input type="checkbox" id="other" name="other" value="other">
	  <label for="other"> Other</label>
	  <p>Bio</p>
	  <textarea rows="6" cols="30" name="bio"></textarea><br><br>
	  <input type="submit" value="Submit">
	</form> 
</body>
</html>