<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="style.css" rel="stylesheet">
		<title>Beauty Parlour Management System</title>
		<style>
			input[type=text], select, textarea {
				width: 100%;
				height:50%
				padding: 12px; 
				border: 1px solid #ccc; 
				border-radius: 4px; 
				box-sizing: border-box;
				margin-top: 6px; 
				margin-bottom: 16px;
				resize: vertical
            }
			input[type=submit] {
			  background-color: #C70039;
			  color: white;
			  padding: 12px 20px;
			  border: none;
			  border-radius: 4px;
			  cursor: pointer;
			}
			input[type=submit]:hover {
			  background-color: #45a049;
			}
			.container {
			  border-radius: 5px;
			  background-color: #f2f2f2;
			  padding: 20px;
			}
		</style>
	</head>
	<body>
			<div class="head">
				<h2>Beauty Salon</h2>
			</div>
			<div class="header">
				<a href="p1.html"><h2>Home</h2></a>
				<a href="1.html"><h2>Services</h2></a>
				<a href="2.html"><h2>About Us</h2></a>
				<a href="contact.html"><h2>Contact Us</h2></a>
			</div>
			<div class="body">
				<h2> Booking For Bridal Makeup</h2>
				<div class="container">
					<form action="contact.html" target="_blank" method="get>

					<label for="fname"><b>Bridal Name</b></label>
					<input type="text" id="fname" name="firstname" placeholder="Your name.." required>

					<label for="lname"><b>Address<b/></label>
					<input type="text" id="lname" name="lastname" placeholder="Your address.." required>

					<label for="email"><b>Email</b></label>
					<input type="text" name="email" placeholder="Enter Email.." required>
					<label for="fname"><b>Packege Name</b></label>
					<input type="text" id="fname" name="firstname" placeholder="Combo.." required>
						<button onclick="myFunction()">Booking</button>

						<p id="1"></p>

						<script>
						function myFunction() {
						  var txt;
						  if (confirm("Press a button!")) {
							txt = "Booking Confirm :)";
						  } else {
							txt = "Booking Cancel!";
						  }
						  document.getElementById("1").innerHTML = txt;
						}
						</script>

					</form>
				</div>
			</div>
			<div class="add">
			    <a href="mehendi.html"><h4>Mehendi Designs</h4></a>
				<a href="haircut.html"><h4>Hair Cut</h4></a>
				<h4>Bridal Makeup</h4>
			</div>
			<div class="footer">
				<h2>Copyright &copy</h2>
			</div>
	</body>
</html>
