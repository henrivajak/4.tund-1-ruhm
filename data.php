<?php
   require("functions.php");
   
   //kas on sisseloginud, kui ei ole siis
   //suunata login lehele
   if (!isset ($_SESSION["userId"])) {
	   
	   //header("Location: login.php");
	   
	}
   
   //kas ?loguout on aadressireal
   if (isset($_GET["loguout"])) {
	   
	   session_destroy();
	   
	   header("Location: login.php");
	   

	   
   }

?>
<h1>Data</h1>
<p>
   Tere tulemast <?=$_SESSION["email"];?>!
   <a href="?loguout=1">Logi välja</a>
</p>