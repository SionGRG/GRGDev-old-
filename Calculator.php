<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style> 
		body {
			padding-top: 20px;
			background: #555;
			text-align: center;
		}
		input {
			border-radius: 7px;
			border-color: #111;
			height: 35px;
		}
		button {
			border-color: cyan;
			border-radius: 15px;
			background: cyan;
			padding: 7px;
			
		}
	</style>
</head>
<body>
	
	<form action=""> 
		<input type="text" name="num1" placeholder="Number 1">
		<input type="text" name="num2" placeholder="Number 2">
		<select name="operator">
			<option>None</option>
			<option>Add</option>
			<option>Subtract</option>
			<option>Multiply</option>
			<option>Divide</option>
		</select>
		<br>
		<br>
		<button type="submit" name="submit" value="submit">Calculate</button>
	</form>

	<p>The answer is:</p>
	
	<?php
		if (isset($_GET['submit'])) {
			$result1 = $_GET['num1'];
			$result2 = $_GET['num2'];
			$operator = $_GET['operator'];
			switch ($operator) {
				case "None":
					echo "You need to select a method!";
					break;
				case "Add":
					echo $result1 + $result2;
					break;
				case "Subtract":
					echo $result1 - $result2;
					break;
				case "Multiply":
					echo $result1 * $result2;
					break;
				case "Divide":
					echo $result1 / $result2;
					break;
			}
		}
	?>
</body>
</html>	