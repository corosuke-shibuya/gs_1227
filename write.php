<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$area = $_POST['area'];
$birth_date = $_POST['birth_date'];
$date = date('Y-m-d-H:i:s') . PHP_EOL;

$data = $name . "," . $mail . "," . $area . "," . $birth_date . "," . $date;

file_put_contents('data/data.txt', $data, FILE_APPEND);
?>

<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="post.php">戻る</a></li>
    </ul>
</body>

</html>
