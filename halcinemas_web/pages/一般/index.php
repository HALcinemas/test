<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.min.css">
	<title>HAL CINEMAS</title>
</head>
<body>
<div class="background">
	<header>
		<?php 
			require('template/header.php')
		?>
	</header>
	<div class="main-content">
		<div class="main-content__left">
			<img src="../../img/zootopia.jpg" class="main-content__left-img">
			<img src="../../img/banner1.png" class="main-content__left-banner">
			<!-- 上映中作品 -->
			<div class="main-content__movie">
				<h2 class="main-content__left-h2">上映中作品</h2>
				<ul class="left-ul">
					<li class="left-li"><a href="#" class="left-li-a"><img src="../../img/to yang to die.jpg" class="left-li-img">title</a></li>
					<li class="left-li"><a href="#" class="left-li-a"><img src="../../img/to yang to die.jpg" class="left-li-img">title</a></li>
					<li class="left-li"><a href="#" class="left-li-a"><img src="../../img/to yang to die.jpg" class="left-li-img">title</a></li>
					<li class="left-li"><a href="#" class="left-li-a"><img src="../../img/to yang to die.jpg" class="left-li-img">title</a></li>
					<li class="left-li"><a href="#" class="left-li-a"><img src="../../img/to yang to die.jpg" class="left-li-img">title</a></li>
				</ul>
			</div>
			<!--公開予定作品  -->
			<div class="main-content__movie">
				<h2 class="main-content__left-h2">公開予定作品</h2>
				<ul class="left-ul">
					<li class="left-li"><a href="#" class="left-li-a"><img src="../../img/to yang to die.jpg" class="left-li-img">title</a></li>
					<li class="left-li"><a href="#" class="left-li-a"><img src="../../img/to yang to die.jpg" class="left-li-img">title</a></li>
					<li class="left-li"><a href="#" class="left-li-a"><img src="../../img/to yang to die.jpg" class="left-li-img">title</a></li>
					<li class="left-li"><a href="#" class="left-li-a"><img src="../../img/to yang to die.jpg" class="left-li-img">title</a></li>
					<li class="left-li"><a href="#" class="left-li-a"><img src="../../img/to yang to die.jpg" class="left-li-img">title</a></li>
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
				<?php 
				require('ranking.php')
				?>
			</div><!-- /ranking -->
			<div class="search">
				<h2 class="search-h2">SEARCH</h2>
				<form  method="post" action="" class="search-form">
					<span class="search-form__text">劇場</span><input type="text" class="search-form__input">
					<span class="search-form__text">日付</span><input type="text" class="search-form__input">
					<span class="search-form__text">時間</span><input type="text" class="search-form__input">
					<span class="search-form__text">作品</span><input type="text" class="search-form__input">
					<button type="submit" class="search-form__button"><img src="#" alt="検索"></button>					
				</form>
			</div><!-- /search -->
			<div class="right-banner">
				<img src="../../img/banner2.png" class="right-banner__img">
				<img src="../../img/banner3.png" class="right-banner__img">
			</div>
		</div><!-- /main-content__right -->
	</div><!-- /main-content -->
	<footer>
		<?php 
			require('template/footer.php')
		?>
	</footer>
	</div>
</body>
</html>