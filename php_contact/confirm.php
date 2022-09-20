<?php 
    $nickname = htmlspecialchars($_POST["nickname"]) ;
    $email = htmlspecialchars($_POST["email"]) ;
    $content = htmlspecialchars($_POST["content"]) ;
    if ($nickname == '') {
      $nickname_result = 'ニックネームが入力されていません'.'<br>';
    }else {
      $nickname_result =  '名前：'.$nickname.'<br>';
    }
    if ($email == '') {
      $email_result = 'メールアドレスが入力されていません'.'<br>';
    }else {
      $email_result = 'メールアドレス：'.$email.'<br>';
    }
    if ($content == '') {
      $content_result = 'お問い合わせ内容が入力されていません'.'<br>';
    }else {
      $content_result ='お問い合わせ内容：'.$content.'<br>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>confirm</title>
</head>
<body>
  <h1>入力内容確認</h1>
  <p><?php echo $nickname; ?></p>
  <p><?php echo $email; ?></p>
  <p><?php echo $content; ?></p>
  <form action="thanks.php" method="POST">
    <input type="button" value="戻る" onclick="history.back()">

    <?php if ($nickname != '' && $email != '' && $content != '') : ?>
    <input type="submit" value="進む">
    <?php endif ?>
    
    <input type="hidden" name="nickname" value="<?php echo $nickname;?>">
    <input type="hidden" name="email" value="<?php echo $email;?>">
    <input type="hidden" name="content" value="<?php echo $content;?>">
  </form>
  
</body>
</html>