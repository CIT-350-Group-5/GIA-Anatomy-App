<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Registration</title>
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <h1 class="register-title">Registration</h1>
  <form class="register" action="insert_data.php" method="post">

    <input type="email" class="register-input" placeholder="Email address" name ="email" required>
    <input type="password" class="register-input" placeholder="Password" name ="password1" required>
	<input type="password" class="register-input" placeholder="Verify Password" name ="password2" required>
	<input type="firstname" class="register-input" placeholder="First Name" name ="fname" required>
	<input type="lastname" class="register-input" placeholder="Last Name" name ="lname" required>
	<input type="age" class="register-input" placeholder="Age" name ="age" required>
	
	<div class="register-switch">
		<input type="radio" name="gender" value="Female" id="sex_f" class="register-switch-input" >
		<label for="sex_f" class="register-switch-label">Female</label>
		<input type="radio" name="gender" value="Male" id="sex_m" class="register-switch-input">
		<label for="sex_m" class="register-switch-label">Male</label>
	</div>
	
    <input name="submit" type="submit" value="Create Account" class="register-button"/>
	
  </form>

</body>
</html>
