<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="./style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>お問い合わせ</h1>
  <form action="confirm.php" method="POST">
    <div>
      <label for="">ニックネーム</label>
      <input type="text" name="nickname">
    </div>
    <div>
      <label for="">メールアドレス</label>
      <input type="text" name="email">
    </div>
    <div>
      <label for="">お問い合わせ内容</label>
      <textarea name="content" id="" cols="30" rows="10"></textarea>
    </div>
    <input type="submit" value="送信">
  </form>
</body>
</html>