<?php
include 'include/header.php';
?>
<html> 
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<style>
body {

	background-image: url("images/the-pleiades-star-cluster.jpg");
}
#p2
{
	color="pink";
}
</style>
<body>
<h3 style="color:#fff;"><marquee id="p2">Here, you can create your account for registering this site</marquee>
</h3>
<div id="p1" class="panel panel-primary col-sm-offset-3 col-sm-6">
<div class="panel-heading">
<h1><span class="glyphicon glyphicon-user"></span> Sign Up Page</h1>
</div>
<form action="scripts/register_script.php" method="POST">
<br>
USERNAME
<br />
<input type="text" name="username" class="form-control" required>
<br />
GMAIL:
<br />
<input type="email" name="gmail" class="form-control" required>
<br />
PASSWORD:
<br />
<input type="password" name="password" class="form-control" required>
<br />
<input type="submit" value="SUBMIT" class="form-control btn btn-info">
<br />
</form>
</div>

</body>
</html>
