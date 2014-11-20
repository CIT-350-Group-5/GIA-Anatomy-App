<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example that shows off a responsive product landing page.">

    <title>Success</title>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure//pure.css">

<!--[if lte IE 8]>
  
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure//grids-responsive-old-ie.css">
  
<![endif]-->
<!--[if gt IE 8]><!-->
  
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure//grids-responsive.css">
  
<!--<![endif]-->
<!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/marketing-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/layouts/marketing.css">
    <!--<![endif]-->
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

</head>
<body>

<div class="splash-container">
    <div class="splash">
        <h1 class="splash-head"><?php echo "Welcome ".$_GET['fname'];?></h1>
        <p class="splash-subhead">
            You are being redirected to the sign-in page in 5 seconds or click below to sign in .
        </p>
        <p>
            <a href="http://purecss.io" class="pure-button pure-button-primary">Get Started</a>
        </p>
    </div>
</div>

<?php
// Redirect browser 
	header( "Refresh:5;url= login.php" );
	exit();
?>
</body>
</html>
