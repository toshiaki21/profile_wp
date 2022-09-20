<?php
    $nickname = $_POST["nickname"];
    $email = $_POST["email"];
    $content = $_POST["content"];
    if ($nickname == '') {
      // echo 'ニックネームが入力されていません' .'<br>';
      $nickname_result = 'ニックネームが入力されていません' .'<br>';
    } else {
      // echo '名前: '.$nickname .'<br>';
      $nickname_result = '名前: '.$nickname .'<br>';
    }

    if ($email == '') {
      // echo 'メールアドレスが入力されていません' .'<br>';
      $email_result = 'メールアドレスが入力されていません' .'<br>';
    } else {
      // echo 'メールアドレス: '.$email .'<br>';
      $email_result = 'メールアドレス: '.$email .'<br>';
    }

    if ($content == '') {
      // echo '内容が入力されていません' .'<br>';
      $content_result =  '内容が入力されていません' .'<br>';
    } else {
      // echo '内容: '.$content .'<br>';
      $content_result = '内容: '.$content .'<br>';
    }

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
  <h1>入力内容</h1>

  <p><?php echo $nickname_result; ?></p>
  <p><?php echo $email_result; ?></p>
  <p><?php echo $content_result; ?></p>

  <form action="">
    <input type="button" value="戻る" onclick="history.back()">
    <input type="submit" value="進む">
    <input type="hidden" name="nickname" value="<?php echo $nickname_result; ?>">
    <input type="hidden" name="email" value="<?php echo $email_result; ?>">
    <input type="hidden" name="content" value="<?php echo $content_result; ?>">
  </form>


<!-- <input type="button" value="戻る" onclick="history.back()"> -->
<!-- <a href="index.php">戻る</a> -->
</body>
</html>