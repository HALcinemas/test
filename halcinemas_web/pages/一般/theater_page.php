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
    <div class="theater-content">
        <h2 class="theater-content_title">HAL CINEMAS 店舗名</h2>
        <ul class="theater-content__ul">
            <li class="theater-content__li"><span class="theater-content__li-text">*月*日（曜）</span></li>
            <li class="theater-content__li"><span class="theater-content__li-text">*月*日（曜）</span></li>
            <li class="theater-content__li"><span class="theater-content__li-text">*月*日（曜）</span></li>
            <li class="theater-content__li"><span class="theater-content__li-text">*月*日（曜）</span></li>
            <li class="theater-content__li"><span class="theater-content__li-text">*月*日（曜）</span></li>
        </ul>
        <h3 class="theater-content_date">*月*日（曜）</h3>
        <div class="theater">
            <h3 class="theater-title">映画タイトル</h3>
            <div class="theater-left">
                <img src="../../img/20160119142455.jpg" class="theater-img">
            </div>
            <div class="theater-screen">
                <h4 class="theater-screen_num">SCREEN*</h4>
                <div class="theater-screen__box">
                <ul class="theater-screen__ul">
                    <li class="theater-screen__li">
                        <a href="#" class="theater-screen__link">
                            <span class="theater-screen__time">*:**-*:**</span>
                            <span class="theater-screen__states">○空席あり</span>
                        </a>
                    </li>
                    <li class="theater-screen__li">
                        <a href="#" class="theater-screen__link">
                            <span class="theater-screen__time">*:**-*:**</span>
                            <span class="theater-screen__states">○空席あり</span>
                        </a>
                    </li>
                    <li class="theater-screen__li">
                        <a href="#" class="theater-screen__link">
                            <span class="theater-screen__time">*:**-*:**</span>
                            <span class="theater-screen__states">○空席あり</span>
                        </a>
                    </li>
                    <li class="theater-screen__li">
                        <a href="#" class="theater-screen__link">
                            <span class="theater-screen__time">*:**-*:**</span>
                            <span class="theater-screen__states">○空席あり</span>
                        </a>
                    </li>
                    <li class="theater-screen__li">
                        <a href="#" class="theater-screen__link">
                            <span class="theater-screen__time">*:**-*:**</span>
                            <span class="theater-screen__states">○空席あり</span>
                        </a>
                    </li>
                </ul>
                </div><!-- .theater-screen/ -->
            </div>
        </div>
    </div>
    <footer>
		<?php 
			require('template/footer.php')
		?>
	</footer>
</body>
</html>