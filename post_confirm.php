<?php
$name = $_POST["name"];
$mail = $_POST["mail"];
$area = $_POST["area"];
$birth_date = $_POST["birth_date"];
?>
<html>
<head>
<meta charset="utf-8">
<title>POST（確認）</title>
</head>
<body>

<p>お名前： <?= $name ?></p>
<p>EMAIL： <?= $mail ?></p>
<p>お住まいのエリア： <?= $area ?></p>
<p>生年月日： <?= $birth_date ?></p>

<form action="write.php" method="post">
  <input type="hidden" name="name" value="<?= $name ?>">
  <input type="hidden" name="mail" value="<?= $mail ?>">
  <input type="hidden" name="area" value="<?= $area ?>">
  <input type="hidden" name="birth_date" value="<?= $birth_date ?>">
  <input type="submit" value="この内容で送信">
</form>

<p><a href="post.php">戻る</a></p>

</body>
</html>