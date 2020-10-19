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
			.m{
				height: 200px;
				width: 300px;
				display: none;
				border: 2px solid black
			}
		</style>
	</head>
	<body>
			<div class="head">
				<h2>Beauty Salon</h2>
			</div>
			<div class="header">
				<a href="p1.php"><h2>Home</h2>
				<a href="1.php"><h2>Services</h2></a>
				<a href="2.php"><h2>About Us</h2></a>
				<h2>Contact Us</h2></a>
			</div>
			<div class="body">
				<div class="container">
					<form action="coninsert.php" method="POST">

					<label for="fname"><b>First Name</b></label>
					<input type="text" id="fname" name="firstname" placeholder="Your name.." required>

					<label for="lname"><b>Last Name<b/></label>
					<input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

					<label for="email"><b>Email</b></label>
					<input type="text" name="email" placeholder="Enter Email.." required>


					<label for="subject">Problems</label>
						<textarea id="subject" name="subject" placeholder="Write Your Problems.." style="height:200px"></textarea>

						<input onclick="myFunction()" type="submit" value="Submit" name="sumbit">
						

						<p id="1"></p>

						<script>
						function myFunction() {
						  var txt;
						  if (confirm("Press a button!")) {
							txt = "Submit Suceessful :)";
						  } else {
							txt = "Not Submitted!";
						  }
						  document.getElementById("1").innerHTML = txt;
						}
						</script>

					</form>
				</div>
			</div>
			</div>
			<div class="add">
				<h2>Photos of the show room</h2>
				<img src="Image/salon1.jpg" class="m" id="1">
				<img src="Image/salon2.jpg" class="m" id="2">
				<img src="Image/Salon3.jpg" class="m" id="a">
				<img src="Image/Salon4.jpg" class="m" id="b">
				<script>
					var i=0;
					function x()
					{
						if(i==0)
						{
							document.getElementById('1').style.display='block';
							document.getElementById('2').style.display='none';
							i=1;
						}
						else
						{
							document.getElementById('1').style.display='none';
							document.getElementById('2').style.display='block';
							i=0;
						}
						setTimeout(function(){x();},2500);
						
					}
					x();
					var j=0;
					function y()
					{
						if(j==0)
						{
							document.getElementById('a').style.display='block';
							document.getElementById('b').style.display='none';
							j=1;
						}
						else
						{
							document.getElementById('a').style.display='none';
							document.getElementById('b').style.display='block';
							j=0;
						}
						setTimeout(function(){y();},2000);
						
					}
					y();

				</script>
			</div>
			<div class="footer">
				<h2>Copyright &copy</h2>
			</div>
	</body>
</html>