<?php
$nickname = htmlspecialchars($_POST["nickname"]) ;
$email = htmlspecialchars($_POST["email"]) ;
$content = htmlspecialchars($_POST["content"]) ;

// データベース接続
$dsn = 'mysql:dbname=contact;host=localhost';
$user = 'root';
$password='root';
$dbh = new PDO($dsn, $user, $password);
$dbh->query('SET NAMES utf8');

// SQL文の実行
// 大外を” ” 
$sql = "INSERT INTO `contact_db`(`nickname`, `email`, `content`) VALUES ('${nickname}','${email}','${content}')";
$stmt = $dbh->prepare($sql);
$stmt->execute();

// データベース切断
$dbh = null;

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h1>お問い合わせありがとうございました</h1>
<section>
  <h2>お問い合わせ内容</h2>
  <p>ニックネーム : <?php echo $nickname; ?></p>
  <p>メールアドレス : <?php echo $email; ?></p>
  <p>お問い合わせ内容 : <?php echo $content; ?></p>
</section>
</body>
</html>