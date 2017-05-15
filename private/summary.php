<?php
	require_once('../constant.php');
	
	if(isset($_GET['lang'])) {
		$global_lang = $_GET['lang'];
	} else {
		$global_lang = EN;
	}

	$global_page = basename(__FILE__, '.php');

	require_once('../class/mydatabase.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Lucky Draw Studio - Summary</title>
<meta name="generator" content="Bluefish 2.2.7" >
<meta name="author" content="Anton Yun" >
<meta name="date" content="2017-05-15T19:56:26+0800" >
<meta name="copyright" content="">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8">
<meta http-equiv="content-style-type" content="text/css">
<meta http-equiv="expires" content="0">
<link href="../style.css" rel="stylesheet" type="text/css">
<style type="text/css">

</style>
</head>
<body>
	<div id="header">For staff only</div>
	<?php
		include('view/navigation_bar.php');
	?>
<br><br>
	<?php
		echo "Today is ".date("d M, Y")."<br>";
		echo "<br>";
		$conn = new myDatabase();
		$appointments = $conn->getAppointments(TODAY);
		echo sizeof($appointments)." appointment(s) was founded:<br><br>";
		foreach ($appointments as $appointment) {
			echo $appointment['id']."|".$appointment['time']."|".$appointment['name']."|".$appointment['phone']."<br>";	
		}
		//$content = $conn->getNews($global_lang);
	?>
	<?php
		include('view/footer.php');
	?>
</body>
</html>