<?php
session_start();
if(isset($_SESSION['email'])) {
    include 'include/header2.php';
}
else {
  header('location:login.php');
}
?>
<html> 
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
      <style>
body {

    background-image: url("images/ff30b06784e8d9852367d57eaa6fde5a.jpg");
}

</style> 
</head>
<body> 
</body>
</html>