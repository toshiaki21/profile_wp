<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


<form method="POST">
    <p>検索したいIDを入力してください。</p>
    <input type="text" name="id">
    <input type="submit" value="検索">
</form>    

  <?php
// データベース接続
$dsn = 'mysql:dbname=contact2;host=localhost';
$user = 'root';
$password='root';
$dbh = new PDO($dsn, $user, $password);
$dbh->query('SET NAMES utf8');

// SQL文の実行
// $_POST["id"]が空でなかった場合、以下の内容が実行される

if (!empty($_POST["id"])) {

$id = $_POST["id"];
$sql = "SELECT * FROM `contact2_db` WHERE `id`='${id}'";
$stmt = $dbh->prepare($sql);
$stmt->execute();

while (true) {
  $rec = $stmt->fetch(PDO::FETCH_ASSOC);
  if ($rec == false) {
    break;
  }

  foreach ($rec as $key => $value) {
    echo $value."<br>";
  }
  echo "<hr>";
}
}


// データベース切断
$dbh = null;

  ?>



  
</body>
</html>

