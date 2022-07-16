<?php if(isset($_POST['inputFile'])) 
	echo 'ok'; 
if(isset($_FILES['inputFile']))
	echo $_FILES['inputFile']['name'];
?>