<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/style.min.css">
	<title>HAL CINEMAS</title>
</head>
<body>
	<header>
		<?php 
			require('template/header.php')
		?>
	</header>
	<div class="main-content">
		<div class="main-content__left">
			<img src="#" class="main-content__left-img">
			<img src="#" class="main-content__left-banner">
			<!-- 上映中作品 -->
			<h2 class="main-content__left-h2">上映中作品</h2>
			<ul class="left-ul">
				<li class="left-li"><a href="#" class="left-li-a"><img src="#" class="left-li-img">title</a></li>
				<li class="left-li"><a href="#" class="left-li-a"><img src="#" class="left-li-img">title</a></li>
				<li class="left-li"><a href="#" class="left-li-a"><img src="#" class="left-li-img">title</a></li>
				<li class="left-li"><a href="#" class="left-li-a"><img src="#" class="left-li-img">title</a></li>
				<li class="left-li"><a href="#" class="left-li-a"><img src="#" class="left-li-img">title</a></li>

			</ul>
			<!--公開予定作品  -->
			<h2 class="main-content__left-h2">公開予定作品</h2>
			<ul class="left-ul">
				<li class="left-li"><a href="#" class="left-li-a"><img src="#" class="left-li-img">title</a></li>
				<li class="left-li"><a href="#" class="left-li-a"><img src="#" class="left-li-img">title</a></li>
				<li class="left-li"><a href="#" class="left-li-a"><img src="#" class="left-li-img">title</a></li>
				<li class="left-li"><a href="#" class="left-li-a"><img src="#" class="left-li-img">title</a></li>
				<li class="left-li"><a href="#" class="left-li-a"><img src="#" class="left-li-img">title</a></li>
			</ul>
			<div class="tab-menu">
				<a href="#">NEWS</a>
				<a href="#">MEMBER</a>
				<a href="#">LINK</a>
			</div>
			<div class="tab-content">
			<ul class="tab-content__list">
				<li class="tab-content__list-li"><div class="tab-content__text">NEWS Contents</div></li>
				<li class="tab-content__list-li"><div class="tab-content__text">NEWS Contents</div></li>
				<li class="tab-content__list-li"><div class="tab-content__text">NEWS Contents</div></li>
			</ul>
			</div>
		</div>
	</div>
</body>
</html>