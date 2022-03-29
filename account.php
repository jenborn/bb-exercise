<?php

?>
<html>
<script src="./js/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="./Foundation-Sites-6.6.3-CSS/assets/css/foundation.css?vs=6">
<script type="text/javascript" src="./Foundation-Sites-6.6.3-CSS/assets/js/foundation.js"></script>
<link rel="stylesheet" href="./css/style.css">

<body>
<div class="container" style="height:100%;">
        <div>
            <h3>Welcome!</h3>
        </div>
	    <div style="text-align:center;">
   	       <button id="btnEdit" class="button blue-wire" >Edit Account</button>
	       <button id="btnDelete"  class="button red-wire" >Delete Account</button>	    
	       <button id="btnLogout" class="button grey-wire" >Logout</button>
	    </div>
</div>

<div class="reveal" id="confirmationModal" data-reveal>
     <div class="grid-x">
     	<div class="cell small-6 small-offset-4">
           <div class="image-cropper"><img src="frenchy.jpg" /></div>
        </div>
     </div>
     <div style="text-align:center;">&nbsp;</div>
     <div class="grid-x">
     	<div class="cell text-center" >
           <h5 class="subheader">Are you sure you want to delete your account?</h5>
        </div>
     </div>     
     <div style="text-align:center;">&nbsp;</div>
     <div class="grid-x">
        <div class="cell large-3 large-offset-5">
   	       <button id="btnConfirmCancel" class="button grey-wire" >Cancel</button>
	</div>
        <div class="cell large-3">	
	       <button id="btnConfirmDelete" class="button red-wire" >Delete Account</button>	    
	</div>    
     </div>	    
      <button class="close-button" data-close aria-label="Close modal" type="button">
         <span aria-hidden="true">&times;</span>
      </button>
</div>
			
<script src="./js/account.js"></script>
<script>
   $('#confirmationModal').foundation();
</script>
</body>
</html>

