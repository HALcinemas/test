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
			<img src="../img/zootopia.jpg" class="main-content__left-img">
			<img src="../img/banner1.png" class="main-content__left-banner">
			<!-- 上映中作品 -->
			<div class="main-content__movie">
				<h2 class="main-content__left-h2">上映中作品</h2>
				<ul class="left-ul">
					<li class="left-li"><a href="#" class="left-li-a"><img src="../img/to yang to die.jpg" class="left-li-img">title</a></li>
					<li class="left-li"><a href="#" class="left-li-a"><img src="../img/to yang to die.jpg" class="left-li-img">title</a></li>
					<li class="left-li"><a href="#" class="left-li-a"><img src="../img/to yang to die.jpg" class="left-li-img">title</a></li>
					<li class="left-li"><a href="#" class="left-li-a"><img src="../img/to yang to die.jpg" class="left-li-img">title</a></li>
					<li class="left-li"><a href="#" class="left-li-a"><img src="../img/to yang to die.jpg" class="left-li-img">title</a></li>
				</ul>
			</div>
			<!--公開予定作品  -->
			<div class="main-content__movie">
				<h2 class="main-content__left-h2">公開予定作品</h2>
				<ul class="left-ul">
					<li class="left-li"><a href="#" class="left-li-a"><img src="../img/to yang to die.jpg" class="left-li-img">title</a></li>
					<li class="left-li"><a href="#" class="left-li-a"><img src="../img/to yang to die.jpg" class="left-li-img">title</a></li>
					<li class="left-li"><a href="#" class="left-li-a"><img src="../img/to yang to die.jpg" class="left-li-img">title</a></li>
					<li class="left-li"><a href="#" class="left-li-a"><img src="../img/to yang to die.jpg" class="left-li-img">title</a></li>
					<li class="left-li"><a href="#" class="left-li-a"><img src="../img/to yang to die.jpg" class="left-li-img">title</a></li>
				</ul>
			</div>
			<div class="tab">
				<div class="tab-menu">
					<a href="#" class="tab-menu-a">NEWS</a>
					<a href="#" class="tab-menu-a">MEMBER</a>
					<a href="#" class="tab-menu-a">LINK</a>
				</div>
				<div class="tab-content">
					<ul class="tab-content__list">
						<li class="tab-content__list-li"><div class="tab-content__text">NEWS Contents</div></li>
						<li class="tab-content__list-li"><div class="tab-content__text">MEMBER Contents</div></li>
						<li class="tab-content__list-li"><div class="tab-content__text">LINK Contents</div></li>
					</ul>
				</div><!-- /tab-content -->
			</div><!-- /tab -->
		</div><!-- /main-content__left -->
		<div class="main-content__right">
			<div class="ranking">
				<h2 class="ranking-h2">RANKING</h2>
				<ul class="ranking-ul">
				<!-- １位から３位 -->
					<li class="ranking-li">
						<a href="#" class="ranking-li-a">
							<img src="#" class="ranking-li-first">
							<img src="#" class="ranking-li-img">
							title
						</a>
					</li>
					<li class="ranking-li">
						<a href="#" class="ranking-li-a">
							<img src="#" class="ranking-li-first">
							<img src="#" class="ranking-li-img">
							title
						</a>
					</li>
					<li class="ranking-li">
						<a href="#" class="ranking-li-a">
							<img src="#" class="ranking-li-first">
							<img src="#" class="ranking-li-img">
							title
						</a>
					</li>
					<!-- ４位から下 -->
					<li class="ranking-li">
						<a href="#" class="ranking-li-a">
							<span class="ranking-li-text">4</span>title
						</a>
					</li>
					<li class="ranking-li">
						<a href="#" class="ranking-li-a">
							<span class="ranking-li-text">5</span>title
						</a>
					</li>
					<li class="ranking-li">
						<a href="#" class="ranking-li-a">
							<span class="ranking-li-text">6</span>title
						</a>
					</li>
					<li class="ranking-li">
						<a href="#" class="ranking-li-a">
							<span class="ranking-li-text">7</span>title
						</a>
					</li>
					<li class="ranking-li">
						<a href="#" class="ranking-li-a">
							<span class="ranking-li-text">8</span>title
						</a>
					</li>
					<li class="ranking-li">
						<a href="#" class="ranking-li-a">
							<span class="ranking-li-text">9</span>title
						</a>
					</li>
					<li class="ranking-li">
						<a href="#" class="ranking-li-a">
							<span class="ranking-li-text">10</span>title
						</a>
					</li>
				</ul>
			</div><!-- /ranking -->
			<div class="search">
				<h2 class="search-h2">SEARCH</h2>
				<form>
					劇場<input type="text">
					日付<input type="text">
					時間<input type="text">
					作品<input type="text">
					<button type="submit">検索</button>					
				</form>
			</div><!-- /search -->
			<img src="#" class="main-content__right-banner">
			<img src="#" class="main-content__right-banner">
		</div><!-- /main-content__right -->
	</div><!-- /main-content -->
	<footer>
		<?php 
			require('template/footer.php')
		?>
	</footer>
</body>
</html>