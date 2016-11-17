<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/pageplus.css">
  <title>Document</title>
</head>
<body>
<div class="wrapper">
  <div class="main">
  <h1>作品ページ追加</h1>
  <form>
    <table>
      <tr>
        <th>状態</th>
        <td>
          <input type="radio" name="a" value="上映中">上映中
          <input type="radio" name="a" value="公開予定">公開予定
        </td>
      </tr>
      <tr>
        <th>タイトル</th>
        <td><input type="text"></td>
      </tr>
      <tr>
        <th>画像</th>
        <td><input type="file"></td>
      </tr>
      <tr>
        <th>上映時間</th>
        <td><input type="text">分</td>
      </tr>
      <tr>
        <th>上映時間</th>
        <td>
            <select name="上映劇場">
              <option value="1">HALシネマ札幌</option>
              <option value="2" selected>HALシネマさいたま</option>
              <option value="3">HALシネマ新宿</option>
            </select>
            <a href="#">さらに追加</a>
        </td>
      </tr>
      <tr>
        <th>上映スケジュル</th>
        <td></td>
      </tr>
      <tr>
        <th>あらすじ</th>
        <td><textarea name="name" rows="8" cols="40"></textarea></td>
      </tr>
      <tr>
        <th>監督</th>
        <td><input type="text"></td>
      <tr>
        <th>出演</th>
        <td>
          <input type="text"><br>
          <input type="text"><br>
          <input type="text">
        </td>
      </tr>
      <tr>
        <th><input type="button" value="キャンセル"></th>
        <td><input type="submit" value="確認画面へ"></td>
      </tr>
    </table>
  </form>
</div>
</dov><!-- wrapper -->
</body>
</html>
