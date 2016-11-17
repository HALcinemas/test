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
        <select>
            <option>作品01</option>
            <option>作品02</option>
            <option>作品03</option>
        </select>
    </div>
    <footer>
		<?php 
			require('template/footer.php')
		?>
	</footer>
</body>
</html>