<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<title>Ban Co</title>
</head>
<style type="text/css" media="screen">
.banco{
	width: 800px;
	margin: auto;
}
.oco{
	width: 100px;
	height: 100px;
	float: left;
}
.den{
	background-color: #000;
}
.trang{
	background-color: #fff;
}
</style>
<body>
	<div class="banco">
	<?php 
		for($i=1;$i<=8;$i++)
		{
			for($j=1;$j<=8;$j++)
			{
				if(($i+$j)%2==0)
				{
					echo('<div class="oco trang"></div>');
				}
				else
					echo('<div class="oco den"></div>');
			}
		}
	 ?>
	</div>	
</body>
</html>
