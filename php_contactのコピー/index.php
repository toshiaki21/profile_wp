<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>contact</title>
</head>
<body>
  <h1>お問い合わせ</h1>
  <form action="confirm.php" method="POST">
    <div>
      <label for="">ニックネーム</label>
      <input type="text" name="nickname" >
    </div>

    <div>
      <label for="">メールアドレス</label>
      <input type="text" name="email">
    </div>

    <div>
      <label for="">お問合せ内容</label>
      <textarea name="content" id="" cols="30" rows="10"></textarea>
    </div>

    <input type="submit" value="送信">
  </form>

</body>
</html>