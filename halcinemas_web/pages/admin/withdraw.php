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
            require('../general/template/header.php');
        ?>
    </header>
    <div class="wd-content">
        <div class="wd-content_sentence">
            <span class="wd-content_text">HAL CINEMASが提供する会員サービスの退会を行います。</span>
            <span class="wd-content_text">IDとパスワードを入力し、"退会する"ボタンを押してください。</span>
        </div>
        <form action="" method="post" class="wd-content_form">
            <label class="wd-content_label">ID</label><input type="textbox" class="wd-content_tbox"><br>
            <label class="wd-content_label">パスワード</label><input type="textbox" class="wd-content_tbox"><br>
            <a href="#" class="wd-content_link"><span class="wd-content_link-text">戻る</span></a>
            <button class="wd-content_btn" type="submit">退会する</button>
        </form>
    </div>
    <?php
        require('../general/template/footer.php');
    ?>
</body>
</html>