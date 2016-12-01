<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CINEMA LIST</title>
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
    <div class="cinema-list">
        <a href="#" class="cinema-list_bread">HOME</a>&gt;
        <a href="#" class="cinema-list_bread">公開予定作品一覧</a>
        <h2 class="cinema-list_h2">公開予定作品</h2>
        <span class="cinema-list_pull">作品リスト：</span>
        <select class="cinema-list_select"> 
            <option class="cinema-list_option">作品01</option>
            <option class="cinema-list_option">作品02</option>
            <option class="cinema-list_option">作品03</option>
        </select>
        <ul class="theater-content__ul">
            <li class="theater-content__li"><span class="theater-content__li-text">*月*日（曜）</span></li>
            <li class="theater-content__li"><span class="theater-content__li-text">*月*日（曜）</span></li>
            <li class="theater-content__li"><span class="theater-content__li-text">*月*日（曜）</span></li>
            <li class="theater-content__li"><span class="theater-content__li-text">*月*日（曜）</span></li>
            <li class="theater-content__li"><span class="theater-content__li-text">*月*日（曜）</span></li>
        </ul>
        <ul class="cinema-soon_ul">
            <li class="cinema-soon_li">7月以降</li>
            <li class="cinema-soon_li">8月以降</li>
            <li class="cinema-soon_li">9月以降</li>
            <li class="cinema-soon_li">10月以降</li>
        </ul>
        <h4 class="cinema-soon_h4">＊月＊日公開予定</h4>
        <ul class="cinema-list_ul">
            <!-- 繰り返し -->
            <li class="cinema-list_li cinema-soon_cinema-li">
                <img src="#" class="cinema-list_li-img">
                <h3 class="cinema-list_li-title">title title title</h3>
                <!-- 監督 -->
                <div class="line">
                    <span class="b-box">監督</span>
                    <span class="directer">name</span>
                </div><!-- /line -->
                <!-- 出演 -->
                <div class="line">
                    <span class="b-box">出演</span>
                    <span class="performer">name</span>
                </div><!-- /line -->
                <a href="#" class="cinema-list_li-det">詳しく見る</a>
            </li>
        </ul>
    </div><!-- /cinema-list -->
    
    <footer>
		<?php 
			require('template/footer.php')
		?>
	</footer>
</body>
</html>