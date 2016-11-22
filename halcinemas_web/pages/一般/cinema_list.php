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
        <a href="#" class="cinema-list_bread">上映中作品一覧</a>
        <h2 class="cinema-list_h2">上映中作品</h2>
        <span class="cinema-list_pull">作品リスト：</span>
        <select class="cinema-list_select"> 
            <option class="cinema-list_option">作品01</option>
            <option class="cinema-list_option">作品02</option>
            <option class="cinema-list_option">作品03</option>
        </select>
        <ul class="cinema-list_ul">
            <!-- 繰り返し -->
            <li class="cinema-list_li">
                <img src="#" class="cinema-list_li-img">
                    <h3 class="cinema-list_li-title">title title title</h3>
                    <!-- 監督 -->
                    <div class="line">
                        <span class="b-box">監督</span>
                        <span class="directer">name</span>
                    </div>
                    <!-- 出演 -->
                    <div class="line">
                        <span class="b-box">出演</span>
                        <span class="performer">name</span>
                    </div>
                    <a href="#" class="cinema-list_li-det">詳しく見る</a>
                </div>
            </li>
        </ul>
    </div>
    
    <footer>
		<?php 
			require('template/footer.php')
		?>
	</footer>
</body>
</html>