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
		<div class="main-content__left">
			<a href="#" class="cinema-page_bread">HOME</a>&gt;
            <a href="#" class="cinema-page_bread">上映中作品一覧</a>
            <h3 class="cinema-page_h3">タイトルタイトルタイトル</h3>
            <img src="../img/cinema-page_main.jpg" alt="title" class="main-img_left">
            <ul class="cinema-page_ul">
                <li class="cinema-page_li"><img src="../img/cinema-page_list.jpg" alt="title" class="main-img_right"></li>
                <li class="cinema-page_li"><img src="../img/cinema-page_list.jpg" alt="title" class="main-img_right"></li>
                <li class="cinema-page_li"><img src="../img/cinema-page_list.jpg" alt="title" class="main-img_right"></li>
            </ul>
            <span class="cinema-page_text">
                texttexttexttexttexttexttexttexttexttexttexttexttexttexttext
            </span>
            <div class="line">
                <span class="b-box">監督</span>
                <span class="directer">name</span>
            </div><!-- /line -->
            <!-- 出演 -->
            <div class="line">
                <span class="b-box">出演</span>
                <span class="performer">name</span>
            </div><!-- /line -->
            <span class=""></span>
            <span class="running_time">
            </span>
        </div><!-- /main-content__left -->
		<div class="main-content__right">
				<?php 
				require('ranking.php')
				?>
		</div><!-- /main-content__right -->
	</div><!-- /main-content -->
	
    <footer>
		<?php 
			require('template/footer.php')
		?>
	</footer>
</body>
</html>