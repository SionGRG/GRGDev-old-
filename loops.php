<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style/main.css">
</head>
<body>
		
	<?php
		
	   //Loop

	   //While Loop
		$x = 1;
		while ($x < 3) {
			echo "Hi there<br>";
			$x++;
		}
	   //Do While Loop
		$y = 1;
		do {
			echo "Hi Tanya<br>";
			$y++;
		}
		while ($y < 3);
	   //For Loop
		for ($z = 0; $z <= 2; $z++) {
			echo "Hi<br>";
		}
	   //Foreach Loop
		$array = array("Zeek", "Ana", "Zara");
		
		foreach ($array as $loopdata) {
			echo "My name is ". $loopdata. "<br>";
		}

	?>
</body>
</html>	
