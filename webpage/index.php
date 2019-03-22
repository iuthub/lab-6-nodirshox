<?php
error_reporting(0);

$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$username=$_REQUEST["username"];

$isGet=$_SERVER["REQUEST_METHOD"]=="GET";
$isPost=$_SERVER["REQUEST_METHOD"]=="POST";


$isNameError = $isPost && !preg_match('/\w+\/i',$name);
$isEmailError = $isPost && !preg_match('/^\w+@[a-z]+.[a-z]{1,3}/i',$email);
$isUsernameError = $isPost && !preg_match('/^\w+/i',$username);

$isFormError=$isNameError||$isEmailError||$isUsernameError;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
		<style>
			.error{
				color:red;
			}
		</style>
	</head>
	<body>
		<?php if($isGet||$isFormError) { ?>
		<h1>Registration Form</h1>
		<hr />
		<h2>Please, fill below fields correctly</h2>
		<form action="index.php" method="post">
			<dl>
				<dt>Name <span class="error"><?= $isNameError?"Error":"" ?></span></dt>
				<dd>
					<input type="text" name="name" value="<?= $name ?>">
				</dd>

				<dt>Email <span class="error"><?= $isEmailError?"Error":"" ?></span></dt></dt>
				<dd>
					<input type="text" name="email" value="<?= $email ?>">
				</dd>
				
				<dt>Username <span class="error"><?= $isUsernameError?"Error":"" ?></span></dt>
				<dd>
					<input type="text" name="username" value="<?= $username ?>">
				</dd>		

				<dt>Password</dt>
				<dd>
					<input type="text" name="password">
				</dd>

				<dt>Confirm passpord</dt>
				<dd>
					<input type="text" name="confirm_password">
				</dd>

				<dt>Date of Birth</dt>
				<dd>
					<input type="text" name="date_of_birth">
				</dd>

				<dt>Gender</dt>
				<dd>
					<select name="gender">
						<option value="male">Male</option>
						<option value="female">Female</option>
					</select>
				</dd>

				<dt>Marital Status</dt>
				<dd>
					<select name="marital_status">
						<option value="single">Single</option>
						<option value="Married">Married</option>
						<option value="divorced">Divorced</option>
						<option value="widowed">Widowed</option>
					</select>
				</dd>					

				<dt>Address</dt>
				<dd>
					<input type="text" name="address">
				</dd>

				<dt>City</dt>
				<dd>
					<input type="text" name="City">
				</dd>

				<dt>Postal Code</dt>
				<dd>
					<input type="text" name="postal_code">
				</dd>

				<dt>Home Phone</dt>
				<dd>
					<input type="text" name="home_phone">
				</dd>

				<dt>Mobile Phone</dt>
				<dd>
					<input type="text" name="mobile_phone">
				</dd>	

				<dt>Credit Card number</dt>
				<dd>
					<input type="text" name="card_number">
				</dd>

				<dt>Credit Card Expiry Date</dt>
				<dd>
					<input type="text" name=expiry_date">
				</dd>

				<dt>Monthly Salary</dt>
				<dd>
					<input type="text" name="salary">
				</dd>

				<dt>Web Site URL</dt>
				<dd>
					<input type="text" name="website">
				</dd>

				<dt>Overall GPA</dt>
				<dd>
					<input type="text" name="gpa">
				</dd>	
				<!-- Write other fiels similar to Name as specified in lab6.pdf -->
			</dl>
			<input type="submit" value="Submit">
		</form>
	<?php } else {
		?>
		<h1>Thank you</h1>
		<?php } ?>
	</body>
</html>