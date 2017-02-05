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
    <div class="mypage">
		<div class="mypage-user">
			<h2 class="mypage-user_name">**さんのマイページ</h2>
			<span class="mypage-user_point">＊ポイント保有</span>
		</div>
					<!-- 履歴 -->
					<span class="mypage-menu">購入履歴</h2>
					<table class="mypage-table">
						<tr class="mypage-table_tr">
							<th class="mypage-table_th">日付</th>
							<th class="mypage-table_th">タイトル</th>
							<th class="mypage-table_th">チケット種別</th>
							<th class="mypage-table_th">料金</th>
						</tr>
						<tr class="mypage-table_tr">
							<td class="mypage-table_td">2016/10/01</td>
							<td class="mypage-table_td">君の名は。</td>
							<td class="mypage-table_td">一般：2枚</td>
							<td class="mypage-table_td">3,600円</td>
						</tr>
						<tr class="mypage-table_tr">
							<td class="mypage-table_td">2016/08/12</td>
							<td class="mypage-table_td">ズートピア</td>
							<td class="mypage-table_td">一般：2枚,小人：2枚</td>
							<td class="mypage-table_td">5,200円</td>
						</tr>
					</table>
					<!-- 登録情報変更 -->
					<span class="mypage-menu">登録情報変更</h2>
						<form action="#" method="POST" class="mypage-form">    
							<table class="mypage-table">
								<tr class="mypage-tr">
									<th class="mypage-th"><label class="mypage-label">氏名</label></th>
									<td class="mypage-td"><input type="text" class="mypage-input" name="" value="" placeholder="姓"><input type="text" class="mypage-input" name="" value="" placeholder="名"></td>
								</tr>
								<tr class="mypage-tr">
									<th class="mypage-th"><label class="mypage-label">メールアドレス</label></th>
									<td class="mypage-td"><input type="text" class="mypage-input" name="" value="" placeholder="ハイフンなし半角数字"></td>
								</tr>
								<tr class="mypage-tr">
									<th class="mypage-th"><label class="mypage-label">メールアドレス（確認用）</label></th>
									<td class="mypage-td"><input type="text" class="mypage-input" name="" value="" placeholder="exam@mail.com"></td>
								</tr>
								<tr class="mypage-tr">
									<th class="mypage-th"><label for="hoge" class="mypage-label">パスワード</label></th>
									<td class="mypage-td"><input type="password" class="mypage-input" name="" value="" placeholder=""></td>
								</tr>
								<tr class="mypage-tr">
									<th class="mypage-th"><label for="hoge" class="mypage-label">パスワード（確認用）</label></th>
									<td class="mypage-td"><input type="password" class="mypage-input" name="" value="" placeholder=""></td>
								</tr>
							</table>
							<p class="contact-text_conf">登録情報の変更を行う場合は、変更する を押してください。</p>
								<td class="contact-td">
									<div class="center">
										<button type="submit" class="contact-button">変更する</button>
									</div>
								</td>
						</form>
						<h2 class="mypage-h2">ポイントを使う</h2>

				</div>
			</div>
    <?php 
        require('../general/template/footer.php');
    ?>	
</body>
</html>