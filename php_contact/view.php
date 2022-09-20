<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合せ一覧表</title>
</head>
<body>
  <?php
    // データベース接続
$dsn = 'mysql:dbname=contact;host=localhost';
$user = 'root';
$password='root';
$dbh = new PDO($dsn, $user, $password);
$dbh->query('SET NAMES utf8');

// SQL文の実行
// 大外を” ” 
$sql = "SELECT * FROM `contact_db` WHERE 1";
$stmt = $dbh->prepare($sql);
$stmt->execute();
// $stmtに全件のデータが入っている
// var_dump($stmt);
while (true) {
  $rec = $stmt->fetch(PDO::FETCH_ASSOC);
  if ($rec == false) {
    break;
  }
  // var_dump($rec);
  // echo $rec["id"] ."<br>";
  // echo $rec["nickname"] ."<br>";
  // echo $rec["email"] ."<br>";
  // echo $rec["content"] ."<br>";

  foreach ($rec as $key => $value) {
    echo $value."<br>";
  }
}

// データベース切断
$dbh = null;

  ?>
</body>
</html>