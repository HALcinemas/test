<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>THEATER LIST</title>
	<link rel="stylesheet" type="text/css" href="../../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.min.css">
	<script src="../../js/script.js"></script>
</head>
<body>
	<header>
		<?php 
			require('template/header.php')
		?>
	</header>
	<div class="theater-list">
		<div class="bread">
			<a href="/test2/halcinemas_web/pages/general/index.php" class="cinema-list_bread">HOME</a>&gt;
			<a href="/test2/halcinemas_web/pages/general/cinema_list.php" class="cinema-list_bread">上映中作品一覧</a>
		</div>
		<h2 class="theater-list_title">劇場案内</h2>
		<ul class="theater-list__ul">
			<li class="theater-list__li"><span class="theater-list__li-text">東北</span></li>
			<li class="theater-list__li"><span class="theater-list__li-text">関東</span></li>
			<li class="theater-list__li"><span class="theater-list__li-text">中部</span></li>
			<li class="theater-list__li"><span class="theater-list__li-text">関西</span></li>
			<li class="theater-list__li"><span class="theater-list__li-text">中国</span></li>
			<li class="theater-list__li"><span class="theater-list__li-text">四国</span></li>
			<li class="theater-list__li"><span class="theater-list__li-text">九州</span></li>
		</ul>
	</div>
	<footer>
		<?php 
			require('template/footer.php')
		?>
	</footer>
</body>
</html>