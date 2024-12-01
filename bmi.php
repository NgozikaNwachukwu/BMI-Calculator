<!DOCTYPE html>
<html>
<head>
	<title>BMI Calculator</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<form method="POST" action="">
		<h1>BMI Calculator</h1>
		<fieldset>
			<legend align="left">
				Check your BMI now!
			</legend>
			Weight in Kg: <input type="text" name="weight"><br><br>
			Height in m: <input type="text" name="height"><br><br>
			<input type="submit" value="Calculate"><br><br>

			<?php
				if (!empty($_POST)) {
					$weight=$_POST['weight'];
					$height=$_POST['height'];
					$bmi=$weight/(pow($height,2));
					echo <<<_END
					  The answer is: <input type="text" value="$bmi">
					_END;
				}
			?>
			<script type="text/javascript">

			<?php
				if(isset($bmi)){
					echo "status($bmi)\n";
				}
			?>

			function status(bmi) {
				if(bmi<18.5) {
					document.write("You are underweight ");
				}
				else if (bmi >= 18.5 && bmi <= 30) {
					document.write("Your weight is normal ");
				}
				else {
					document.write("Obesity ");
				}
			}
		</script>
		</fieldset>
	</form>

	<br> <br>

	<form method="POST" action="">
		<h1>BMI Calculator (inches and pounds)</h1>
		<fieldset>
			<legend align="left">
				Check your BMI now!
			</legend>
			Weight in lbs: <input type="text" name="weight"><br><br>
			Height in in: <input type="text" name="height"><br><br>
			<input type="submit" value="Calculate"><br><br>

			<?php
				if (!empty($_POST)) {
					$weight2=$_POST['weight'];
					$height2=$_POST['height'];
					$bmi2=$weight*703/(pow($height2,2));
					echo <<<_END
					  The answer is: <input type="text" value="$bmi2">
					_END;
				}
			?>
			<script type="text/javascript">

			<?php
				if(isset($bmi2)){
					echo "status($bmi2)\n";
				}
			?>

			function status(bmi2) {
				if(bmi2<18.5) {
					document.write("You are underweight ");
				}
				else if (bmi2 >= 18.5 && bmi2 <= 30) {
					document.write("Your weight is normal ");
				}
				else {
					document.write("Obesity ");
				}
			}
		</script>
		</fieldset>
	</form>
</body>
</html>