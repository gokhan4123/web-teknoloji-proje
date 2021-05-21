<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Paper Stack</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css" />
</head>

<body>
<div class="container">
	<section id="content">
		<form action="postlogin.php" method="post" >
			<h1>Login</h1>
			<div>
				<input type="email" placeholder="Kullanici" name="username" id="username" required/>
			</div>
			<div>
				<input type="password" placeholder="Sifre" name="password" id="password" required/>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->
		
	</section><!-- content -->
</div><!-- container -->
</body>
</html>

<?PHP
    session_start();

    if (isset($_SESSION["message"])) {        
        echo "<script>alert('".$_SESSION["message"]."')</script>";
        
        unset($_SESSION["message"]);
    }
?>