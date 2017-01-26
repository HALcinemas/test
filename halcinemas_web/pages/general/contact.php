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
            <table class="contact-table">
                <tr class="contact-tr">
                    <th class="contact-th"><label class="contact-label">お問い合わせ種類</label></th>
                    <td class="contact-td"><input type="text" class="contact-input" name="" value="" placeholder="〇〇について"></td>
                </tr>
                <tr class="contact-tr">
                    <th class="contact-th"><label class="contact-label">氏名</label></th>
                    <td class="contact-td"><input type="text" class="contact-input" name="" value="" placeholder="姓"><input type="text" class="contact-input" name="" value="" placeholder="名"></td>
                </tr>
                <tr class="contact-tr">
                    <th class="contact-th"><label class="contact-label">電話番号</label></th>
                    <td class="contact-td"><input type="text" class="contact-input" name="" value="" placeholder="ハイフンなし半角数字"></td>
                </tr>
                <tr class="contact-tr">
                    <th class="contact-th"><label class="contact-label">メールアドレス</label></th>
                    <td class="contact-td"><input type="text" class="contact-input" name="" value="" placeholder="exam@mail.com"></td>
                </tr>
                <tr class="contact-tr">
                    <th class="contact-th">
                        <label for="hoge" class="contact-label">内容</label>
                    </th>
                    <td class="contact-td"><textarea id="hoge" class="contact-tarea" rows="10" cols="70" placeholder="ご意見・ご要望"></textarea></td>
                </tr>
            </table>
             <p class="contact-text_conf">利用規約および個人情報の取り扱いについて（プライバシーポリシー）をご確認いただき、同意いただける場合は「同意して送信」を押してください。</p>
                <td class="contact-td">
                    <div class="center">
                        <button type="submit" class="contact-button">同意して送信</button>
                    </div>
                </td>
        </form>
    </div>
    <?php 
        require('./template/footer.php');
    ?>	
</body>
</html>