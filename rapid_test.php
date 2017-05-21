<?php
	require_once('constant.php');
	if(isset($_GET['lang'])) {
		$global_lang = $_GET['lang'];
	} else {
		$global_lang = ZH;
	}
	
	$global_page = basename(__FILE__, '.php');
	
?>
<!DOCTYPE html>
<html>
<head>
	<?php
		include('view/title.php');
	?>
<meta name="generator" content="Bluefish 2.2.7" >
<meta name="author" content="Anton Yun" >
<meta name="date" content="2017-05-22T03:02:41+0800" >
<meta name="copyright" content="Lucky Draw Studio">
<meta name="keywords" content="愛滋病測試,AIDS test,hiv測試,hiv test,syphilis test,梅毒測試,性病測試,STD test,STI test,heterosexual,異性戀">
<meta name="description" content="愛滋病測試,AIDS test,hiv測試,hiv test,syphilis test,梅毒測試,性病測試,STD test,STI test,heterosexual,異性戀">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8">
<meta http-equiv="content-style-type" content="text/css">
<meta http-equiv="expires" content="0">
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#left-column {
		float: left;
		width: 50%;
		margin-right: 20px;

	}
	#map {
		float: right;
		width: 48%;
		height: 560px;	
	}
	#wrapper-content::after {
		display: block;
		content: '';
		clear: both;	
	}
</style>
</head>
<body>
	<?php
		include('view/header.php');
	?>
	<?php
		include('view/navigation_bar.php');
	?>
	<div id="wrapper">
		<div id="wrapper-header">
			<?php
				switch($global_lang) {
					case EN:
						$header = "Rapid Test";
						break;
					case ZH:
						$header = "快速測試";
						break;
					case CH:
						$header = "快速测试";
						break;
				}
			?>
			<h1><?= $header; ?></h1>
		</div>
		<div id="wrapper-content">
			<div id="left-column">
				<?php
					switch($global_lang) {
						case EN:
							$html = <<<HTML
<p><strong>AIDS test / HIV test</strong><br>
Lucky Draw Studio opens Sunday to Saturday and Public Holidays. We provide Anonymous Rapid HIV Test. Only take one drop of blood and the result will come out within 15 munutes. All tests are conducted in private and result will remain Anonymous.</p>
<p>In the future, we will apply Government funding. Meanwhile, the operation cost is solely by donation. All the donation will spend on wages, rent and test kit expense. The running cost is around HK$1000 daily. Service user only need to pay HK$600 per day, then every service user should donate HK$200-300. If you have any financial difficulties, please let us know beforehand. If the donation cannot cover our cost especially rent, the testing service will stop.</p>
<div class="content-image">
	<img src="images/tail_3.jpg" alt="test" height="160">
	<p>Hot Line number：<strong>5405 6631</strong></p>
</div>
<table class="content-table">
	<tr>
		<th class="selected">SUN</th>
		<th>MON</th>
		<th>TUE</th>
		<th>WED</th>
		<th>THU</th>
		<th>FRI</th>
		<th>SAT</th>
	</tr>
	<tr>
		<td colspan="7">Service Hour <strong>16:30 - 20:30</strong><br>Please call <strong>5405 6631</strong> or <a href="booking.php?lang=$global_lang">Internet booking</a></td>				
					</tr>
						<td colspan="7"><strong>Most Convenient Way</strong> >>> <a href="booking.php?lang=$global_lang">Click in for Web booking</a></td>
					</tr>
				</table>
HTML;
							break;
						case ZH:
							$html = <<<HTML
<p><strong>愛滋病測試 / HIV測試</strong><br>
<strong>「幸運抽獎工作室」Lucky Draw Studio</strong> 逢星期一至日及公眾假期提供可即日預約無需等幾日的不記名愛滋病測試及其他性病測試，只需拮一下手指，15分鐘就有結果！所有測試過程及結果絕對保密。</p>
<p>本會未來將會申請政府資助，但現時只靠捐款運作，而捐款全數用於人工、租金、試劑等開支。每日營運開支~$1000，服務使用者祗需付$600，預計每人捐$200~300。如有經濟困難請早開聲。若捐款持續不足維持成本將會停止服務。</p>
<div class="content-image">
	<img src="images/tail_3.jpg" alt="test" height="160">
	<p>熱線電話：<strong>5405 6631</strong></p>
</div>
<table class="content-table">
	<tr>
		<th class="selected">SUN</th>
		<th>MON</th>
		<th>TUE</th>
		<th>WED</th>
		<th>THU</th>
		<th>FRI</th>
		<th>SAT</th>
	</tr>
	<tr>
		<td colspan="7">服務時間 <strong>16:30 - 20:30</strong><br>請電 <strong>5405 6631</strong> 或 <a href="booking.php?lang=$global_lang">網上預約</a></td>
	</tr>
	</tr>
		<td colspan="7"><strong>最快捷方便</strong> >>> <a href="booking.php?lang=$global_lang">按此網上預約</a></td>
	</tr>
</table>
HTML;
							break;
						case CH:
							$html = <<<HTML
<p><strong>爱滋病测试 / HIV测试</strong><br>
<strong>「幸运抽奖工作室」Lucky Draw Studio</strong> 逢星期一至日及公众假期提供可即日预约无需等几日的不记名爱滋病测试及其他性病测试，只需拮一下手指，15分钟就有结果！所有测试过程及结果绝对保密。 </p>
<p>本会未来将会申请政府资助，但现时只靠捐款运作，而捐款全数用于人工、租金、试剂等开支。每日营运开支~$1000，服务使用者祗需付$600，预计每人捐$200~300。如有经济困难请早开声。若捐款持续不足维持成本将会停止服务。</p>
<div class="content-image">
	<img src="images/tail_3.jpg" alt="test" height="160">
	<p>热线电话：<strong>5405 6631</strong></p>
</div>
<table class="content-table">
	<tr>
		<th class="selected">SUN</th>
		<th>MON</th>
		<th>TUE</th>
		<th>WED</th>
		<th>THU</th>
		<th>FRI</th>
		<th>SAT</th>
	</tr>
	<tr>
		<td colspan="7">服务时间 <strong>16:30 - 20:30</strong><br>请电 <strong>5405 6631</strong> 或 <a href="booking.php?lang=$global_lang">网上预约</a></td >
	</tr>
	</tr>
		<td colspan="7"><strong>最快捷方便</strong> >>> <a href="booking.php?lang=$global_lang">按此网上预约</a></td>
	</tr>
</table>
HTML;
							break;
					}
				?>
				<?=$html; ?>
			</div>
			<div id="map"></div>
			<script>
				var map;
				function initMap() {
					//Constructor creates a new map - only center and zoom are required.
					map = new google.maps.Map(document.getElementById('map'), {
						center: {lat: 22.309973, lng: 114.224158},
						zoom: 17
					});
					var luckydrawstudio = {lat: 22.309973, lng: 114.222658};
					var mtr = {lat: 22.3117292, lng: 114.2260397};
					var marker = new google.maps.Marker({
						position: luckydrawstudio,
						map: map,
						title: 'Lucky Draw Studio'
					});
					var marker_mtr = new google.maps.Marker({
						position: mtr,
						map: map,
						title: 'B3 exit (fire station)'
					});
				}
			</script>
		</div>
	</div>
	<?php
		include('view/footer.php');
	?>
	<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0JzzaUAMDLQF-AQ7wdku9Zg2T4IbPvI4&v=3&callback=initMap"
		type="text/javascript">
	</script>
</body>
</html>