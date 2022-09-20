<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php_practice</title>
</head>
<body>
  <?php
    echo 'Hello world'.'<br>';
    echo '配列ここから'.'<br>';

    // 配列
    $var = array('apple','pen','pineapple','pen');
    $var = ['apple','pen','pineapple','pen'];

    var_dump($var);
    echo '<br>';
    echo $var[0].'<br>';
    echo $var[1].'<br>';
    echo $var[2].'<br>';
    echo $var[3].'<br>';

    echo 'for文'.'<br>';
    for ($i=0; $i < count($var) ; $i++) { 
      echo $var[$i].'<br>';
    }
    // foreach
    echo 'foreach'.'<br>';
    foreach ($var as $v) {
      echo $v .'<br>';
    }




    echo '連想配列ここから'.'<br>';
    $user = array ("name"=>"Toshiaki","age"=>"28","gender"=>"male");
    var_dump($user).'<br>';
    echo $user["name"].'<br>';
    echo $user["age"].'<br>';
    echo $user["gender"].'<br>';

    echo '<br>';

    foreach ($user as $key => $value) {
      echo $key . '=' . $value .'<br>';
    }

    echo '----ここから演習問題----'.'<br>';
    echo '----1----'.'<br>';

    for ($i=100; $i > 0 ; $i--) { 
      echo $i . '<br>';
    }

    echo '----2----'.'<br>';
    for ($i=1; $i < 10 ; $i++) { 
      echo $i * 3 .' ';
    }
    echo '<br>';

    echo '----3----'.'<br>';
    for ($i=1; $i <= 100 ; $i++) { 
      echo '<br>';

      if ($i % 3 == 0 && $i % 5 == 0) {
        echo 'FizzBuzz';
      } elseif ($i % 3 == 0) {
        echo 'Fizz';
      } elseif ($i % 5 == 0) {
        echo 'Buzz';
      } else {
       echo $i;
      }
    }

    echo '<br>';
    echo '----4----'.'<br>';
    for ($i=1; $i <= 100 ; $i++) { 

      if ($i % 10 == 0) {
       echo  $i  .'<br>';
      } else {
       echo $i . ' ';
      }
    }
    echo '<br>';

    
    echo '----5----'.'<br>';
    $alpha = array('A', 'A', 'D', 'B', 'A', 'C', 'A', 'B', 'E', 'E', 'A', 'A', 'C');
    var_dump($alpha);
    echo '<br>';
    echo $alpha[0].'<br>';

    // $count = 0;
    // foreach ($alpha as $a) {
    //   if ($a == 'A') {
    //     $count++;
    //   }
    // }

    // echo $count .'<br>';

    // 模範解答
    $counts = array_count_values($alpha);
    // echo var_dump($counts);
    echo $counts['A']




  ?>
</body>
</html>