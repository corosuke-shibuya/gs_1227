<?php
$lines = file('data/data.txt', FILE_IGNORE_NEW_LINES); // 1行ずつ配列で読む
?>

<html>
<head>
  <meta charset="utf-8">
  <title>データ一覧</title>
  <style>
    table { border-collapse: collapse; width: 100%; }
    th, td { border: 1px solid #ccc; padding: 8px; }
    th { background: #f5f5f5; }
  </style>
</head>
<body>
  <h1>データ一覧</h1>

  <table>
    <tr>
      <th>お名前</th>
      <th>EMAIL</th>
      <th>お住まいのエリア</th>
      <th>生年月日</th>
      <th>登録日時</th>
    </tr>

    <?php foreach ($lines as $line): ?>
      <?php if (trim($line) !== ''): ?>
        <?php
          $cols = explode(',', $line);
          $name = htmlspecialchars($cols[0] ?? '', ENT_QUOTES, 'UTF-8');
          $mail = htmlspecialchars($cols[1] ?? '', ENT_QUOTES, 'UTF-8');
          $area = htmlspecialchars($cols[2] ?? '', ENT_QUOTES, 'UTF-8');
          $birth_date = htmlspecialchars($cols[3] ?? '', ENT_QUOTES, 'UTF-8');
          $date = htmlspecialchars($cols[4] ?? '', ENT_QUOTES, 'UTF-8');
        ?>
        <tr>
          <td><?= $name ?></td>
          <td><?= $mail ?></td>
          <td><?= $area ?></td>
          <td><?= $birth_date ?></td>
          <td><?= $date ?></td>
        </tr>
      <?php endif; ?>
    <?php endforeach; ?>
  </table>

  <p><a href="post.php">戻る</a></p>
</body>
</html>