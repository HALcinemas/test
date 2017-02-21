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
			require('../general/template/header.php');
		?>
	</header>
    <div class="change">
        <!-- 登録情報変更 -->
        <h2 class="mypage-menu change-menu">登録情報変更</h2>
                
            <form action="/test2/halcinemas_web/pages/admin/change_comf.php" method="POST" class="change-form">    
                <table class="mypage-table">
                    <tr class="mypage-table_tr">
                        <th class="mypage-table_th"><label class="mypage-label">氏名</label></th>
                        <td class="mypage-table_td change-td"><input type="text" class="mypage-input" name="" value="" placeholder="姓"><input type="text" class="mypage-input" name="" value="" placeholder="名"></td>
                    </tr>
                    <tr class="mypage-table_tr">
                        <th class="mypage-table_th"><label class="mypage-label">フリガナ</label></th>
                        <td class="mypage-table_td change-td"><input type="text" class="mypage-input" name="" value="" placeholder="セイ"><input type="text" class="mypage-input" name="" value="" placeholder="メイ"></td>
                    </tr>
                    <tr class="mypage-table_tr">
                        <th class="mypage-table_th"><label class="mypage-label">メールアドレス</label></th>
                        <td class="mypage-table_td change-td"><input type="text" class="mypage-input single-input" name="" value="" placeholder="ハイフンなし半角数字"></td>
                    </tr>
                    <tr class="mypage-table_tr">
                        <th class="mypage-table_th"><label class="mypage-label">メールアドレス（確認用）</label></th>
                        <td class="mypage-table_td change-td"><input type="text" class="mypage-input single-input" name="" value="" placeholder="exam@mail.com"></td>
                    </tr>
                    <tr class="mypage-table_tr">
                        <th class="mypage-table_th"><label for="hoge" class="mypage-label">パスワード</label></th>
                        <td class="mypage-table_td change-td"><input type="password" class="mypage-input single-input" name="" value="" placeholder=""></td>
                    </tr>
                    <tr class="mypage-table_tr">
                        <th class="mypage-table_th"><label for="hoge" class="mypage-label">パスワード（確認用）</label></th>
                        <td class="mypage-table_td change-td"><input type="password" class="mypage-input single-input" name="" value="" placeholder=""></td>
                    </tr>
                    <tr class="mypage-table_tr">
                        <th class="mypage-table_th"><label for="hoge" class="mypage-label">お支払い情報</label></th>
                        <td class="mypage-table_td change-td"><input type="password" class="mypage-input single-input" name="" value="" placeholder="クレジットカード番号"></td>
                    </tr>
                    <tr class="mypage-table_tr">
                        <th class="mypage-table_th"><label for="hoge" class="mypage-label">有効期限</label></th>
                        <td class="mypage-table_td change-td"><input type="password" class="mypage-input small-input" name="" value="" placeholder="月">/<input type="password" class="mypage-input small-input" name="" value="" placeholder="年"></td>
                    </tr>
                    <tr class="mypage-table_tr">
                        <th class="mypage-table_th"><label for="hoge" class="mypage-label">名義人</label></th>
                        <td class="mypage-table_td change-td"><input type="password" class="mypage-input single-input" name="" value="" placeholder="半角英字（大文字）"></td>
                   </tr>
                </table>
                <p class="contact-text_conf">登録情報の変更を行う場合は、変更する を押してください。</p>
                <div class="center">
                    <a href="/test2/halcinemas_web/pages/admin/mypage.php" class="contact-button">キャンセル</a>
                    <button type="submit" class="contact-button_change">変更する</button>
                </div>
            </form>
        </div>
	<?php 
        require('../general/template/footer.php');
    ?>	
</body>
</html>