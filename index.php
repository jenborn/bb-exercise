<?php

session_start();
$_SESSION['is_logged_in'] = true;
$_SESSION['user_id'] = 242;
$_SESSION['email'] = 'jenaborn@yahoo.com';
$_SESSION['name'] = "Jen";

?>
<html>
<script src="./js/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="./Foundation-Sites-6.6.3-CSS/assets/css/foundation.css?vs=6">
<script type="text/javascript" src="./Foundation-Sites-6.6.3-CSS/assets/js/foundation.js"></script>
<link rel="stylesheet" href="./css/style.css">

<body>
<div class="container" style="height:100%;">
        <div>
            <h1>Welcome!</h1>
        </div>
	    <div style="text-align:center;">
	       User ID: <? echo $_SESSION['user_id']; ?>
	       Name: <? echo $_SESSION['name']; ?>
	       Email: <? echo $_SESSION['email']; ?>
	    </div>
	    <div style="text-align:center;">
	       &nbsp;
	    </div>
	    <div style="text-align:center;">
	       <a id="btnLogout" class="button grey-wire" >Logout</a>
	    </div>
</div>

<script src="./js/logout.js"></script>  
</body>
</html>

