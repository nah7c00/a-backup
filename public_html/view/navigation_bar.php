<?php
	switch($global_lang) {
		case 'en':
			$news = "WHAT'S NEWS";
			$rapid_test = "&nbspRAPID TEST&nbsp";
			$test_booking = "TEST BOOKING";
			$free_condom = "FREE CONDOM";
			$videos = "VIDEOS";
			$hiv_pos = "HIV+";
			$join_us = "JOIN US";
			$about_US = "ABOUT US";
			break;
		case 'zh':
			$news = "最新消息";
			$rapid_test = "快速測試";
			$test_booking = "預約測試";
			$free_condom = "免費安全套";
			$videos = "相關影片";
			$hiv_pos = "HIV 陽性";
			$join_us = "加入我們";
			$about_US = "關於我們";
			break;
	}
	switch($global_page) {
		case "news.php":
			$news_class_modifier = " selected";
			break;
		case "rapid_test.php":
			$rapid_test_class_modifier = " selected";
			break;
		case "booking.php":
			$booking_class_modifier = " selected";
			break;
		case "free_condom.php":
			$free_condom_class_modifier = " selected";
			break;
		case "videos.php":
			$videos_class_modifier = " selected";
			break;
		case "hiv_pos.php":
			$hiv_pos_class_modifier = " selected";
			break;
		case "join_us.php":
			$join_us_class_modifier = " selected";
			break;
		case "about_us.php":
			$about_us_class_modifier = " selected";
			break;
	}
?>
<nav class="mobile">
	<ul class="nav-bar">
		<li class="nav-link<?=$news_class_modifier; ?>">
			<a href="news.php"><?= $news; ?></a>
		</li
		><li class="nav-link<?=$rapid_test_class_modifier; ?>">
			<a href="rapid_test.php"><?= $rapid_test; ?></a>
		</li
		><li class="nav-link<?=$booking_class_modifier; ?>">
			<a href="booking.php"><?= $test_booking; ?></a>
		</li
		><li class="nav-link<?=$free_condom_class_modifier; ?>">
			<a href="free_condom.php"><?=$free_condom; ?></a>
		</li>
	</ul>
</nav>
<nav class="tablet">
	<ul class="nav-bar">
		<li class="nav-link<?=$news_class_modifier; ?>">
			<a href="news.php"><?= $news; ?></a>
		</li
		><li class="nav-link<?=$rapid_test_class_modifier; ?>">
			<a href="rapid_test.php"><?= $rapid_test; ?></a>
		</li
		><li class="nav-link<?=$booking_class_modifier; ?>">
			<a href="booking.php"><?= $test_booking; ?></a>
		</li
		><li class="nav-link<?=$free_condom_class_modifier; ?>">
			<a href="free_condom.php"><?=$free_condom; ?></a>
		</li
		><li class="nav-link<?=$videos_class_modifier; ?>">
			<a href="videos.php"><?=$videos; ?></a>
		</li
		><li class="nav-link<?=$hiv_pos_class_modifier; ?>">
			<a href="hiv_pos.php"><?=$hiv_pos; ?></a>
		</li>
	</ul>
</nav>
<nav class="web">
	<ul class="nav-bar">
		<li class="nav-link<?=$news_class_modifier; ?>">
			<a href="news.php"><?= $news; ?></a>
		</li
		><li class="nav-link<?=$rapid_test_class_modifier; ?>">
			<a href="rapid_test.php"><?= $rapid_test; ?></a>
		</li
		><li class="nav-link<?=$booking_class_modifier; ?>">
			<a href="booking.php"><?= $test_booking; ?></a>
		</li
		><li class="nav-link<?=$free_condom_class_modifier; ?>">
			<a href="free_condom.php"><?=$free_condom; ?></a>
		</li
		><li class="nav-link<?=$videos_class_modifier; ?>">
			<a href="videos.php"><?=$videos; ?></a>
		</li
		><li class="nav-link<?=$hiv_pos_class_modifier; ?>">
			<a href="hiv_pos.php"><?=$hiv_pos; ?></a>
		</li
		><li class="nav-link<?=$join_us_class_modifier; ?>">
			<a href="join_us.php"><?=$join_us; ?></a>
		</li
		><li class="nav-link<?=$about_us_class_modifier; ?>">
			<a href="about_us.php"><?= $about_US; ?></a>
		</li>
	</ul>
</nav>
