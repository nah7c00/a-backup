<?php
	switch($global_lang) {
		case EN:
			$first_column = ARRAY("CENTER","About Us","Join Us","Member");
			$second_column = ARRAY("CONTACT","(852) 5405 6631");
			$third_column = ARRAY("ADDRESS","Flat 25, 6/F,","Career And Kenson Industrial Mansion,","58 Hung To Rd,","Kwun Tong, HK");
			$fourth_column = ARRAY("GO UP");
			$copyright = "&copy Copyright By Lucky Draw Studio";
			break;
		case ZH:
			$first_column = ARRAY("中心","關於我們","加入我們","會員");
			$second_column = ARRAY("電話","(852) 5405 6631");
			$third_column = ARRAY("地址","香港 觀塘 鴻圖道58號","金凱工業大廈","6樓 25室");
			$fourth_column = ARRAY("GO UP");
			$copyright = "&copy Copyright By 幸運抽獎工作室";
			break;
	}
?>
<footer>
	<div class="footer-row">
		<div class="footer-column">
			<h3><?=$first_column[0]; ?></h3>
			<ul>
				<li><a href="about_us.php?lang=<?=$global_lang; ?>"><?=$first_column[1]; ?></a></li>
				<li><a href="#"><?=$first_column[2]; ?></a></li>
				<li><a href="private/summary.php?lang=<?=$global_lang; ?>"><?=$first_column[3]; ?></a></li>
			</ul>
		</div>
		<div class="footer-column">
			<h3><?=$second_column[0]; ?></h3>
			<ul>
				<li><?=$second_column[1]; ?></li>
			</ul>
		</div>
		<div class="footer-column">
			<h3><?=$third_column[0]; ?></h3>
			<ul>
				<li><?=$third_column[1]; ?></li>
				<li><?=$third_column[2]; ?></li>
				<li><?=$third_column[3]; ?></li>
				<li><?=$third_column[4]; ?></li>
			</ul>
		</div>
		<div class="footer-column">
			<a href="#"><?=$fourth_column[0]; ?></a>
		</div>
	</div>
	<div class="footer-row" id="footer-copyright"><?=$copyright; ?></div>
</footer>