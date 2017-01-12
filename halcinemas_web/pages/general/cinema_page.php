<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CINEMA PAGE</title>
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
    <div class="main-content">
        <div class="cinema-page">
            <a href="#" class="cinema-page_bread">HOME</a>&gt;
            <a href="#" class="cinema-page_bread">上映中作品一覧</a>
            <h3 class="cinema-page_h3">タイトルタイトルタイトル</h3>
            <img src="../../img/cinema-page_main.jpg" alt="title" class="main-img_left">
            <ul class="cinema-page_ul">
                <li class="cinema-page_li"><img src="../../img/cinema-page_list.jpg" alt="title" class="main-img_right"></li>
                <li class="cinema-page_li"><img src="../../img/cinema-page_list.jpg" alt="title" class="main-img_right"></li>
                <li class="cinema-page_li"><img src="../../img/cinema-page_list.jpg" alt="title" class="main-img_right"></li>
            </ul>
            <div class="test">
                <p class="cinema-page_text">
                texttexttexttexttexttexttexttexttextt
                exttexttexttexttexttexttexttexttext
                texttexttexttexttexttexttexttexttexttext
                texttexttexttexttext
                texttexttexttexttexttexttexttexttexttexttexttextt
                exttexttexttexttexttext
                </p>    
            </div>
            <div class="line">
                <span class="b-box">監督</span>
                <span class="directer">name</span>
            </div><!-- /line -->
            <!-- 出演 -->
            <div class="line">
                <span class="b-box">出演</span>
                <span class="performer">name</span>
            </div><!-- /line -->
            <span class="cinema-title">title title</span>
            <span class="running_time">上映時間：**分</span>
            <!-- 公式サイトが存在するなら表示する -->
            <a href="#" class="site-link">公式サイトへ</a>
        </div><!-- /cinema-page -->
		<div class="main-content__right">
				<?php 
				require('ranking.php')
				?>
		</div><!-- /main-content__right -->    
	</div><!-- /main-content -->
	<div class="theater-list">
		<h2 class="theater-list_title cinema_page-theater-list_title">上映劇場一覧</h2>
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