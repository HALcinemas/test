<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.min.css">
	<title>CONTACT</title>
</head>
<body>
	<header>
		<?php 
			require('./template/header.php');
		?>
	</header>
    <div class="contact">
        <h2 class="contact-h2">お問い合わせ</h2>
        <span class="contact-span">劇場・サービスに関するご意見についてはこちらからお問い合わせください。</span>
        <p class="contact-text">
            ※ お問い合わせに関しまして、回答までお時間をいただく場合や、回答を差し上げられない場合がございますのでご了承ください。<br>
            ※ お問い合わせを確認させていただく時間は、土日祝日を除く、平日9時30分から18時30分となっております。（祝日にはゴールデンウィーク並びに年末年始を含みます）
        </p>
        <form action="contact_comf.php" method="POST" class="contact-form">    
            <table>
                <tr>
                    <th><label class="contact-label">お問い合わせ種類</label></th>
                    <td><input type="text" name="" value="" placeholder="〇〇について"></td>
                </tr>
                <tr>
                    <th><label class="contact-label">氏名</label></th>
                    <td><input type="text" name="" value="" placeholder="姓"><input type="text" name="" value="" placeholder="名"></td>
                </tr>
                <tr>
                    <th><label class="contact-label">電話番号</label></th>
                    <td><input type="text" name="" value="" placeholder="ハイフンなし半角数字"></td>
                </tr>
                <tr>
                    <th><label class="contact-label">メールアドレス</label></th>
                    <td><input type="text" name="" value="" placeholder="exam@mail.com"></td>
                </tr>
                <tr>
                    <th><label class="contact-label">内容</label></th>
                    <td><textarea rows="" cols="" placeholder="ご意見・ご要望"></textarea></td>
                </tr>
                <td><button type="submit" class="contact-button">確認</button></td>
            </table>
        </form>
    </div>
    <?php 
        require('./template/footer.php');
    ?>	
</body>
</html>