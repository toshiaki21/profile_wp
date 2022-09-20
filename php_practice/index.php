<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    echo 'Hello'.'world'.'こんにちは'.'こんばんは'.'<br>';
    echo '計算ができる'.'<br>';

    echo 5 * 3 . '<br>';
    echo 8 / 2 . '<br>';
    echo 3 + 6 . '<br>';
    echo 5 - 2 . '<br>';
    echo 7 % 3 . '<br>';
    // echo 5*3.'<br>';


    $var = '今日の晩飯は';
    // echo $var;
    $var .= '味噌汁と';
    $var .= '唐揚げだ';
    echo $var.'<br>';

    $text ='趣味は';
    $text .= '筋トレと';
    $text .= 'コーヒーです';
    echo $text.'<br>';

    $colorname = 'red';
    // PHPのテンプレートリテラルはダブルコーテーション！
    echo "frame is ${colorname} color".'<br>';
    
    echo '制御文 条件分岐ここから'.'<br>';
    $var = 11;
    if ($var > 10) {
      echo '10より大きい数字です'.'<br>';
    }

    $age = 1;
    if ($age >= 20 && $age < 30) {
      echo '20代です'.'<br>';
    } else{
      echo '20代ではありません'.'<br>';
    }

    $age = 40;
    if ($age >= 20 && $age < 30) {
      echo '20代です'.'<br>';
    } elseif ($age >= 30 && $age < 40) {
      echo '30代です';
    } else {
      echo '20代、30代ではありません'.'<br>';
    }



    $var = 'D';

switch ($var) {
	case 'A':
    echo $var.'<br>';
    break;
	case 'B':
    echo $var.'<br>'; 
    break;
	case 'C':
    echo $var.'<br>'; 
		break;
	case 'D':
    echo $var.'<br>'; 
		break;
	case 'E':
    echo $var.'<br>'; 
		break;
	default:
		// 処理
		break;
    }

// for 
echo '繰り返し構文'.'<br>';
for ($i=1; $i < 11 ; $i++) { 
  echo $i . '<br>';
}

echo '20から30'. '<br>';
for ($i=20; $i <= 30 ; $i++) { 
  echo $i . '<br>';
}

echo '100から1'. '<br>';
for ($i=100; $i > 0 ; $i--) { 
  echo $i . '<br>';
}

echo 'while文'. '<br>';
$var = 0;
while ($var <= 10) {
  echo $var . '<br>';
  $var++;
}



    


    ?>
</body>
</html>