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
		<span class="mypage-menu-open">購入履歴</span>
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
		<span class="mypage-menu"><a href="change.php" class="mypage-link">登録情報変更</a></span>
		<span class="mypage-menu_text">登録情報の変更を行います。</span>
		<span class="mypage-menu"><a href="point.php" class="mypage-link">ポイントを使う</a></span>
		<span class="mypage-menu_text">5ポイントごとに、お好きな映画を1本無料でご覧いただけます。</span>
		<span class="mypage-menu"><a href="withdraw.php" class="mypage-link">退会</a></span>
		<span class="mypage-menu_text">登録情報の変更を行います。</span>
	</div>
    <?php 
        require('../general/template/footer.php');
    ?>	
</body>
</html>