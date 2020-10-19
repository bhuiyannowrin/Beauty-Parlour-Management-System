<!DOCTYPE html>
<html>
	<head>
		<link href="style.css" rel="stylesheet">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Beauty Parlour Management System</title>
	</head>
	<style>
		.m{
			height: 200px;
			width: 300px;
			display: none;
			border: 2px solid black;
		}
	</style>
	<body>
			<div class="head">
				<h2>Beauty Salon</h2>
			</div>
			<div class="header">
				<h2>Home</h2>
				<a href="1.php"><h2>Services</h2></a>
				<a href="2.php"><h2>About Us</h2></a>
				<a href="contact.php"><h2>Contact Us</h2></a>
			</div>
			<div class="body">
				<img src="Image/1.jpg" height="500" width="900"> 
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