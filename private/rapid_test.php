<!DOCTYPE html>
<?php
	require_once('../constant.php');
	require_once('../class/db.class.php');
	require_once('../class/mydatabase.php');
	$global_page = basename(__FILE__, '.php');
	if (isset($_GET["page"])) {
		$page  = $_GET["page"];
	} else {
		$page=1;
	};
	
	$db_conn = new db();
	
	if(isset($_GET['start_day']) && isset($_GET['end_day']) && isset($_GET['timeSlots'])) {
		$start_day = $_GET['start_day'];
		$end_day = $_GET['end_day'];
		$timeSlots = $_GET['timeSlots'];
		//script
		$prompt = "Time slots were added.";
	}
	if(isset($_GET['id'])) {
		$id = $_GET['id'];
		$db_conn->deleteTimeSlot($id);
		$prompt = "Time slot #$id was deleted.";
	}
?>
<html>
<head>
	<?php
		include('view/title.php');
	?>
<meta name="generator" content="Bluefish 2.2.7" >
<meta name="author" content="Anton Yun" >
<meta name="date" content="2017-06-01T21:58:24+0800" >
<meta name="copyright" content="XIAODONG IT Consulting">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
<meta name="theme-color" content="#FFA366" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8">
<meta http-equiv="content-style-type" content="text/css">
<meta http-equiv="expires" content="0">
<meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=1" />
<link href="../style.css" rel="stylesheet" type="text/css">
<style type="text/css">

</style>
</head>
<body>
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
						$header = "Rapid Test";
						break;
					case ZH:
						$header = "快速測試";
						break;
				}
			?>
			<h1><?= $header; ?></h1>
		</div>
		<div class="wrapper-content">
			<div class="prompt">
				<?=$prompt; ?>
			</div>
			<?php
				switch($global_lang) {
					case EN:
						$todayIs = "Today is ".date("j M, Y");
						$from = "From:";
						$to = "To:";
						break;
					case ZH:
						$todayIs = "今天".date("j M, Y");
						$from = "從";
						$to = "至";
						break;
				}
			?>
			<p><?=$todayIs; ?></p>
			Add new service time.<br><br>
			Enter date period to fill and choose time slots from default ones shown below:<br><br>
			<!--Add new time slot form-->
			<form action="" method="GET">
				<!--Try date input here-->
				<div class="form-date">
					<label for="start-date"><?=$from; ?></label>
					<input id="start-date" type="date">
				</div>
				<div class="form-date">
					<label for="end-date"><?=$to; ?></label>
					<input id="end-date" type="date">
				</div>
				<div class="form-time-slots">
					<?php
						$conn = new myDatabase();
						$defaultTimeArray = $conn->getDefaultTimeArray();
						$timeSlotsOnRow = 3;
						
						$i = 0;
						foreach ($defaultTimeArray as $key => $time) {
							if(!($i % $timeSlotsOnRow)) {
								echo "<br>";							
							}
							echo '<input id="time-slot-'.$key.'" type="checkbox" />';
							echo '<label for="time-slot-'.$key.'">'.$time.'</label>';
							$i++;
						}
					?>
				</div>
				<div class="form-submit">
					<input type="submit" name="" value="OK" />
				</div>
			</form>
			<?php
				$timeSlots = $db_conn->getTimeSlots($page);
			?>
			<p><strong><?=sizeof($timeSlots);?> record(s)</strong> was showed:</p>
			<table class="sql-query">
				<tr>
					<?php
						switch($global_lang) {
							case EN:
								echo "<th>#</th><th>Date</th><th>Time</th><th>Booked Out</th><th>Delete</th>";
								break;
							case ZH:
								echo "<th>#</th><th>日期</th><th>時間</th><th>已經預訂了</th><th>刪除</th>";
								break;	
						}
					?>
				</tr>
				<?php
					switch($global_lang) {
						case EN:
						$delete = "Delete";
						$notBooked = "Not booked";
							break;
						case ZH:	
							$delete = "刪除";
							$notBooked = "沒有預訂";
							break;	
					}
					foreach ($timeSlots as $timeSlot) {
						echo '<tr>';
						echo '<td>'.$timeSlot['id'].'</td>';
						echo '<td>'.$timeSlot['date'].'</td>';
						echo '<td>'.$timeSlot['time'].'</td>';
						echo '<td>'.(is_null($timeSlot['reservation']) ? $notBooked : '<a href="booking.php?#reservation'.$timeSlot['reservation'].'">'.$timeSlot['reservation']."</a>").'</td>';
						echo '<td><a href="?id='.$timeSlot['id'].'">'.$delete.'</a></td>';
						echo '</tr>';			
					}
				?>
			</table>
		</div>
		<div class="wrapper-footer">
			<?php
				$total_pages = $db_conn->getTimeSlotsCount();
				include('../view/page_nav.php');
			?>
		</div>
	</div>
	<?php
		include('view/footer.php');
	?>
</body>
</html>