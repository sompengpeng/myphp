
<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>西威电梯销售部下单系统</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body class="style-2">

		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="menu">
						<li class="active"><a href="index2.html">西威销售部下单系统</a></li>	
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					

					<!-- Start Sign In Form -->
					<form method="post" class="fh5co-form animate-box" data-animate-effect="fadeInLeft">
						<h2>Sign In</h2>
						<div class="form-group">
							<label for="username" class="sr-only">Username</label>
							<input type="text" name="name" class="form-control" id="username" placeholder="Username" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="password" class="sr-only">Password</label>
							<input type="password" name="pw"class="form-control" id="password" placeholder="Password" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="remember"><input type="checkbox" id="remember"> Remember Me</label>
						</div>
						<div class="form-group">
							<p>西威电梯销售部下单系统<!-- <a href="sign-up2.html">Sign Up</a> | <a href="forgot2.html">Forgot Password?</a> --></p>
						</div>
						<div class="form-group">
							<button type="submit" name="submit" class="btn btn-primary">登录
								
							</button><!-- <input type="submit" value="Sign In" class="btn btn-primary"> -->
						</div>
					</form>
					<!-- END Sign In Form -->

				</div>
			</div>
			<div class="row" style="padding-top: 60px; clear: both;">
				<div class="col-md-12 text-center"><p><small>&copy; by sompeng <a href="http://www.xwdt.com.cn/" target="_blank" title="西威电梯-行政部">西威电梯行政部</a> - Collect from <a href="http://www.xwdt.com.cn/" title="西威电梯-行政部" target="_blank">西威电梯行政部</a></small></p></div>
			</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Placeholder -->
	<script src="js/jquery.placeholder.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php 
	$link = mysqli_connect('localhost', 'root', '', 'xwuser');
	if (!$link){
	    echo"<script>alert('数据库连接失败！')</script>";
	}else {
	    if (isset($_POST['submit'])){
	        $query = "select * from user where username = '{$_POST['name']}' and password = '{$_POST['pw']}'";
	        $result = mysqli_query($link, $query);
	        //print_r($result);
	        if (mysqli_num_rows($result) == 1){
	        	echo "<script>location.href='index.php'</script>";
	            //header("Location:index.php");
	        }else{
	        	echo "<script>alert('您的账号不对，请重新登录')</script>";
	        }
	    }
	}
	?>
	</body>
</html>

