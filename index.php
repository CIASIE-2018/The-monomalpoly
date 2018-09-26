<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>The Monomalpoly</title>

	<link rel="stylesheet" type="text/css" href="Css/Reset.css">
	<link rel="stylesheet" type="text/css" href="Css/Norm.css">

</head>

<body>


	<?php
		if(isset($_GET['page'])){
			include('Controller/Ctrl'.$_GET['page'].'.php');
		}
		include('Controller/CtrlHome.php');
	?>

	
</body>
</html>