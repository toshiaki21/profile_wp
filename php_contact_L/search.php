<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>検索ページ</title>
</head>
<body>
  <form method="POST">
    <p>検索したいIDを入力してください</p>
    <input type="text" name="id">
    <input type="submit" value="検索">
  </form>
  <?php 
    // データベースに接続
  $dsn = 'mysql:dbname=contact2;host=localhost';
  $user = 'root';
  $password='root';
  $dbh = new PDO($dsn, $user, $password);
  $dbh->query('SET NAMES utf8');

  // SQL文の実行
  if (!empty($_POST["id"])) {
    $id = $_POST["id"];
    $sql = "SELECT * FROM `contact_db` WHERE `id`='${id}'";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    // $stmtに全件のデータが入ってる
    // var_dump($stmt);
    while (true) {
      $rec = $stmt->fetch(PDO::FETCH_ASSOC);
      if ($rec == false) {
        break;
      }
      // var_dump($rec);
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