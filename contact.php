<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body> 
	<form method="POST" action="">
		<fieldset>
			<legend>
				Contact Me!
			</legend>
			<div>
				Subject: <select name="subject">
					<option value="Question">Question</option>
					<option value="Comment">Comment</option>
					<option value="Concern">Concern</option>
				</select>
			</div>
			<div>
				Name: <input type="text" name="name" value="<?php echo isset($_POST['name'])? htmlspecialchars($_POST['name']) : ''; ?>"><br>
			</div>
			<div>
				Email: <input type="text" name="email" value="<?php echo isset($_POST['email'])? htmlspecialchars($_POST['email']) : ''; ?>"><br>
			</div>
			<div>
				Message: <input type="textarea" name="message" value="<?php echo isset($_POST['message'])? htmlspecialchars($_POST['message']) : ''; ?>"><br>
			</div>
			<div>
				<input type="submit" value="Send Message"><br>
			</div>

			<?php
				if (!empty($_POST)) {
					$name=$_POST['name'];
					$email=$_POST['email'];
					$message=$_POST['message'];
					
					//validation
					if(empty($name) || empty($message)) {
						echo "<div id='missing'>All fields are required.</div>";
					}
					elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
						echo "<div id='invalid'>Invalid email format.</div>";
					}
					else {
						echo "<div id='valid'>Thank you, $name! Your message has been sent.</div>";
					}
				}
			?>
		</fieldset>
	</form>
</body>
</html>