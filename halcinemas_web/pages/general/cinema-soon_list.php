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
        <div class="bread">
            <a href="/test2/halcinemas_web/pages/general/index.php" class="cinema-list_bread">HOME</a>&gt;
            <a href="/test2/halcinemas_web/pages/general/cinema-soon_list.php" class="cinema-list_bread">公開予定作品一覧</a>
        </div>
        <h2 class="cinema-list_h2">公開予定作品</h2>
        <span class="cinema-list_pull">作品リスト：</span>
        <select class="cinema-list_select"> 
            <option class="cinema-list_option">作品01</option>
            <option class="cinema-list_option">作品02</option>
            <option class="cinema-list_option">作品03</option>
        </select>

        <h4 class="cinema-soon_day-h4">公開予定日から探す</h4>
        <ul class="theater-content__ul">
            <li class="theater-content__li"><a href="#" class="theater-content__li-text">*月*日（曜）</a></li>
            <li class="theater-content__li"><a href="#" class="theater-content__li-text">*月*日（曜）</a></li>
            <li class="theater-content__li"><a href="#" class="theater-content__li-text">*月*日（曜）</a></li>
            <li class="theater-content__li"><a href="#" class="theater-content__li-text">*月*日（曜）</a></li>
            <li class="theater-content__li"><a href="#" class="theater-content__li-text">*月*日（曜）</a></li>
        </ul>
        <ul class="cinema-soon_ul">
            <li class="cinema-soon_li"><a href="#" class="theater-content__li-text">7月以降</a></li>
            <li class="cinema-soon_li"><a href="#" class="theater-content__li-text">8月以降</a></li>
            <li class="cinema-soon_li"><a href="#" class="theater-content__li-text">9月以降</a></li>
            <li class="cinema-soon_li"><a href="#" class="theater-content__li-text">10月以降</a></li>
        </ul>
        <!--　日付読み込み　-->
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