<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>theater-ivl</title>
    <link rel="stylesheet" type="text/css" href="../../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<script src="../../js/script.js"></script>
</head>
<body>
    <header>
        <?php
            require('./template/header.php');
        ?>
    </header>
    <div class="theater-ivl">   
        <div class="theater-ivl_cinema"> 
            <h3 class="theater-ivl_h3">タイトルタイトルタイトル</h3>
            <img src="../../img/cinema-page_main.jpg" alt="title" class="main-img_left">
            <ul class="theater-ivl_ul">
                <li class="theater-ivl_li"><img src="../../img/cinema-page_list.jpg" alt="title" class="theater-ivl-img"></li>
                <li class="theater-ivl_li"><img src="../../img/cinema-page_list.jpg" alt="title" class="theater-ivl-img"></li>
                <li class="theater-ivl_li"><img src="../../img/cinema-page_list.jpg" alt="title" class="theater-ivl-img"></li>
            </ul>
            <div class="test">
                <p class="theater-ivl_text">
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
        </div><!-- /theater-ivl_cinema -->
        <h3 class="theater-ivl_h3">上映スケジュール</h3>
        <span class="theater-ivl_list">注意事項</span>
        <ul class="theater-ivl_ul">
            <li class="theater-ivl_li">※</li>
            <li class="theater-ivl_li">※</li>
            <li class="theater-ivl_li">※</li>
        </ul>
        <h3 class="theater-ivl_h3">HAL CINEMAS **</h3>
        <ul class="theater-content__ul">
            <li class="theater-content__li"><a href="#" class="theater-content__li-text">*月*日（曜）</a></li>
            <li class="theater-content__li"><a href="#" class="theater-content__li-text">*月*日（曜）</a></li>
            <li class="theater-content__li"><a href="#" class="theater-content__li-text">*月*日（曜）</a></li>
            <li class="theater-content__li"><a href="#" class="theater-content__li-text">*月*日（曜）</a></li>
            <li class="theater-content__li"><a href="#" class="theater-content__li-text">*月*日（曜）</a></li>
        </ul>
         <div class="theater">
             <h3 class="theater-ivl-title">作品タイトル</h3>
            <div class="theater-ivl-left">    
            </div>
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
            </div><!-- .theater-screen__box/ -->
        </div><!-- /theater -->
    <?php
        require('template/footer.php');
    ?>
</body>
</html>