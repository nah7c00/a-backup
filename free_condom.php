<!DOCTYPE html>
<?php
	require_once('constant.php');
	
	$global_page = basename(__FILE__, '.php');
?>
<html>
<head>
	<?php
		include('view/title.php');
	?>
<meta name="generator" content="Bluefish 2.2.7" >
<meta name="author" content="Anton Yun" >
<meta name="date" content="2017-06-06T18:20:30+0800" >
<meta name="copyright" content="XIAODONG IT Consulting">
<meta name="keywords" content="<?=$meta_keywords; ?>">
<meta name="description" content="<?=$meta_description; ?>">
<meta name="theme-color" content="#FFA366" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8">
<meta http-equiv="content-style-type" content="text/css">
<meta http-equiv="expires" content="0">
<meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=1" />
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
</style>
</head>
<body>
	<div class="container">
		<?php
			include('view/header.php');
		?>
		<?php
			include('view/navigation_bar.php');
		?>
		<div class="wrapper">
			<div class="wrapper-header">
				<?php
					switch($global_lang) {
						case EN:
							$header = "Free condom";
							break;
						case ZH:
							$header = "無標題文件";
							break;
					}
				?>
				<h1><?= $header; ?></h1>
			</div>
			<div class="wrapper-content">
				<?php
					switch($global_lang) {
						case EN:
							$caption = "While stock last";
							break;
						case ZH:
							$caption = "送完即止";
							break;	
					}
				?>
				<div class="content-image">
					<img src="images/IMG-20170605-WA0006.jpg" alt="condom">
					<p><?=$caption; ?></p>
				</div>
			</div>
		</div>
		<?php
			include('view/footer.php');
		?>
	</div>
</body>
</html>
