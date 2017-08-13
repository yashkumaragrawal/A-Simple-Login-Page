<?php
include 'include/header.php';
?>
<html> 
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  <style>
body {

    background-image: url("images/maxresdefault.jpg");
}

</style>  
</head>
<body> 
<div class="primary-info">
<h3 style="color:#fff;"><marquee>If you are already registerd then you can directly log in. Else Create a account</marquee></h3>
</div>
<div id="p1" class="panel panel-primary col-sm-offset-3 col-sm-6">
 <div class="panel-heading">
 <h1><span class="glyphicon glyphicon-log-in"></span> Log In Page</h1>
 </div>
     <form action="scripts/login_script.php" method="GET">
     <h1><span class="glyphicon glyphicon-log-in"></span> Log In Page</h1>
     <br>
     GMAIL:
     <br>
     <input type="gmail" name="gmail" class="form-control" required>
     <br>
     PASSWORD:
     <br>
     <input type="password" name="password" class="form-control" required>
     <br>
     <input type="submit" value="SUBMIT" name="mit" class="form-control btn btn-info">
     </form>
</div>

</body>
</html>