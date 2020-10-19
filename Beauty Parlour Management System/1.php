<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Beauty Parlour Management System</title>
		<style>
			.head{
				background-color:black;
				color:white;
				margin-left:20px;
				margin-right:20px;
				padding:40px;
			}
			.head h2{
				font-size:30px;
				font-weight:bold;
				padding-left: 400px;
				padding-top: 0px
			}
			.header{
				background-color: pink;
				color: black;
				margin-left:20px;
				width: 97%;
				height: 65px;
			}
			.header h2{
				padding: 5px 30px;
				font-size:20px;
				font-weight:bold;
				float: left;
			}
			.body{
					background-color: #fefbd8;
					color: black;
					margin-left: 20px;
					width: 66%;
					height:500px;
					float: left;
			}
			.body h2{
				text-decoration:none;
				font-size:20px;
				font-weight:bold;
			}
			.add{
				background-color: #fefbd8;
				color: black;
				width: 31%;
				height:500px;
				float: left;
			}
			.add h2{
				text-align:center;
				font-size:20px;
				font-weight:bold;
			}
			.footer{
				background-color: black;
				color: white;
				width:97%;
				height:100px;
				margin-left:20px;
				float: left;
			}
			.footer h2{
				font-size: 20px;
				font-weight: bold;
				padding-left: 500px;
				padding-top: 30px;

				}
			.footer button{
					background-color:red;
			}
			.m{
				height: 200px;
				width: 300px;
				display: none;
				border: 2px solid black;
			}
		</style>
	</head>
	<body>
			<div class="head">
				<h2>Beauty Salon</h2>
			</div>
			<div class="header">
				<a href="p1.php"><h2>Home</h2></a>
				<h2>Services</h2>
				<a href="2.php"><h2>About Us</h2></a>
				<a href="contact.php"><h2>Contact Us</h2></a>
			</div>
			<div class="body">
				<a href="mehendi.php"><h2>Mehendi Designs</h2></a>
				<a href="haircut.php"><h4>Hair Cut</h4></a>
				<a href="bridal.php"><h4>Bridal Makeup</h4></a>
		
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
