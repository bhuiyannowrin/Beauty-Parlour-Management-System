<!DOCTYPE html>
<html>
	<head>
	    <link href="servicestyle.css" rel="stylesheet">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Beauty Parlour Management System</title>
	</head>
	<body>
			<div class="head">
				<h2>Beauty Salon</h2>
			</div>
			<div class="header">
				<a href="p1.php"><h2>Home</h2></a>
				<a href="1.php"><h2>Services</h2></a>
				<a href="2.php"><h2>About Us</h2></a>
				<a href="contact.php"><h2>Contact Us</h2></a>
			</div>
			<div class="body">
				<div class="allpic">
					<img src="image/m1.jpg" class="m">
					Design : 1 <br>
					Service Charge: 150/=
				</div>
				<div class="allpic">
					<img src="image/m2.jpg" class="m">
					Design : 2 <br>
					Service Charge: 110/=
				</div>
				<div class="allpic">
					<img src="image/m3.jpg" class="m">
					Design : 3 <br>
					Service Charge: 150/=
				</div>
				<select>
		 	   	  	<option>Design : 1</option>
		 	   	  	<option>Design : 2</option>
		 	   	  	<option>Design : 3</option>
		 	   	</select>
				<button onclick="myFunction()">Appointment</button>

				<p id="1"></p>

				<script>
				function myFunction() {
				  var txt;
				  if (confirm("Press a button!")) {
					txt = "Appointment Confirm :)";
				  } else {
					txt = "Appointment Cancel!";
				  }
				  document.getElementById("1").innerHTML = txt;
				}
				</script>
			</div>
			<div class="add">
				<h4>Mehendi Designs</h4>
				<a href="haircut.html"><h4>Hair Cut</h4></a>
				<a href="bridal.html"><h4>Bridal Makeup</h4></a>
			</div>
			<div class="footer">
				<h2>Copyright &copy</h2>
			</div>
	</body>
</html>
