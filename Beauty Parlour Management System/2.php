<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="style.css" rel="stylesheet">
		<title>About Us</title>
		<style>
			.top-left {
				position: absolute;
				top: 250px;
				left: 30px;
			}
			.p {
				text-indent: 50px;
			}
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
					background: url(2.jpg) no-repeat fixed center;
					color: black;
					margin-left: 20px;
					width: 66%;
					height:500px;
					float: left;
			}
			.body h2{
				text-align:center;
				font-size:14px;
				font-weight:bold;
			}
			.add{
				background-color: #5499C7;
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
				border: 2px solid black
			}
		</style>
	</head>
	<body>
			<!--<img src="2.jpg" style="width:100%;">-->
			<div class="head">
				<h2>Beauty Salon</h2>
			</div>
			<div class="header">
				<a href="p1.php"><h2>Home</h2>
				<a href="1.php"><h2>Services</h2></a>
				<h2>About Us</h2>
				<a href="contact.php"><h2>Contact Us</h2></a>
			</div>
			<div class="body">
				<img src="Image/2.jpg" style="width:100%;">
				<div class="top-left">
						We guarantee to furnish our customers with the most recent in<br>
						innovation and instruction. We are focused on remaining <br>
						educated on the most recent patterns and mold by going to broad<br>
						workshops and meetings yearly. A significant number of our<br>
						beauticians have accomplished high status in the business by <br>
						holding workplaces at the state and national dimension in the <br>
						National Cosmetology Association. For our customers with kids, <br>
						we approach that you make different game plans for their <br>
						consideration if your arrangement is planned to last over <br>
						30 minutes.On the off chance that you get yourself unfit to <br>
						keep your arrangement, if it’s not too much trouble<br>
						advise us 24 hours ahead of time so another person may have<br>
						the chance to plan around then.<br>
						We trust your involvement with our salon is extraordinary. <br>
						Assuming this is the case, it would be ideal if you told your companions.<br>
						<h3>Opening Time :</h3> 11:30 AM
						<h3>Closing Time :</h3> 10:00 PM
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
