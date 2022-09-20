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
      echo '宿題ここから'.'<br>';
      echo '----練習問題11----'.'<br>';
      $x = 1;
      $y = 10;

      if ($x > $y) {
        echo  'xはyより大きい' .'<br>';
      }

      echo '----練習問題12----'.'<br>';
      if ($x >= $y) {
        echo  'xはy以上' .'<br>';
      } elseif ($x < $y ) {
        echo 'xはyより小さい'.'<br>';
      }

      echo '----練習問題13----'.'<br>';
      if ($x > $y) {
        echo  'xはy以上' .'<br>';
      } elseif ($x < $y ) {
        echo 'xはyより小さい'.'<br>';
      } else {
        echo 'xはyと等しい'.'<br>';
      }

      echo '----練習問題14----'.'<br>';
      if ($x % 2 == 0) {
        echo 'xは偶数です'.'<br>';
      } else {
        echo 'xは奇数です'.'<br>';
      }

      echo '----練習問題15----'.'<br>';      
    if ($x % 3 == 0) {
    echo '3の倍数です'.'<br>';
    } else if ($x % 5 == 0) {
    echo '5の倍数です'.'<br>';
    } else {
    echo '3と5の倍数以外です'.'<br>';
    }

    echo '----練習問題16----'.'<br>';      
    if (10 <= $x && $x <= 20) {
      echo '10以上かつ20以下です' .'<br>';
    }

    echo '----練習問題17----'.'<br>';     
    if (100 <= $x || $x <= 10) {
      echo '100以上または10以下です' .'<br>';
      }

     echo '----練習問題18----'.'<br>';     
     $z = '女';
     
     switch ($z) {
      case '女':
        echo 'female' .'<br>';
        break;
      case '男':
        echo 'male' .'<br>';
        break;
      
      default:
      echo '???' .'<br>';
      break;
     }

     echo '----練習問題19----'.'<br>';     
     $m = '9';

     switch ($m) {
      case '1':
        echo 'January' .'<br>';      
        break;
      case '2':
        echo 'February' .'<br>';      
        break;
      case '3':
        echo 'March' .'<br>';      
        break;
      case '4':
        echo 'April' .'<br>';      
        break;
      case '5':
        echo 'may' .'<br>';      
        break;
      case '6':
        echo 'June' .'<br>';      
        break;
      case '7':
        echo 'July' .'<br>';      
        break;
      case '8':
        echo 'August' .'<br>';      
        break;
      case '9':
        echo 'September' .'<br>';      
        break;
      case '10':
        echo 'October' .'<br>';      
        break;
      case '11':
        echo 'November' .'<br>';      
        break;
      case '12':
        echo 'December' .'<br>';      
        break;
      
      default:
        # code...
        break;
     }



      echo '----練習問題21----'.'<br>';
      for($i = 1; $i <= 10; $i++){
        echo 'hoge' . '<br>';
      }

      echo '----練習問題22----'.'<br>';
      for ($i = 1; $i <= 10 ; $i++) { 
        echo $i . '<br>';
      }

      echo '----練習問題23----'.'<br>';
      for ($i=1; $i < 10 ; $i++) {
        echo $i * 2 . '<br>';
      }

      echo '----練習問題24----'.'<br>';
      for ($i = 1; $i <= 100; $i++) { 
        if ($i % 2 == 0) {
          echo $i . '<br>';
        }
      }

      echo '----練習問題25----'.'<br>';
      for ($i = 1; $i <= 100; $i++) { 
        if ($i % 2 !== 0) {
          echo '奇数です' . '<br>';
        } else {
          echo $i . '<br>';
        }
      }

      echo '----練習問題26----'.'<br>';
      for ($i = 1; $i <= 100 ; $i++) { 
        if ($i % 3 == 0) {
          echo $i . '<br>';
        }
      }

      echo '----練習問題27----'.'<br>';
      for ($i = 1; $i <= 100 ; $i++) { 
        if ($i % 5 == 0) {
          echo $i . '<br>';
        }
      } 

      echo '----練習問題28----'.'<br>';
      for ($i = 1; $i <= 100 ; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
          echo $i . '<br>';
        } 
      }

      echo '----練習問題29----'.'<br>';
      for ($i = 1; $i <= 100; $i++) { 
        if ($i % 3 == 0) {
          echo 'Fizz' .'<br>';
        } else{
          echo $i .'<br>';
        }
      }

      echo '----練習問題30----'.'<br>';
      for ($i = 1; $i <= 100 ; $i++) { 
        if ($i % 3 == 0 && $i % 5 == 0) {
          echo 'FizzBuzz' .'<br>';
        } elseif ($i % 5 == 0) {
          echo 'Buzz' .'<br>';
        } elseif ($i % 3 == 0) {
          echo 'Fizz' .'<br>';
        } else {
          echo $i .'<br>';
        }
      }

      echo '----練習問題31----'.'<br>';
      $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

      echo '----練習問題32----'.'<br>';
      $array = ["A", "B", "C", "D", "E"];

      echo '----練習問題33----'.'<br>';
      $animal = ["dog","fox","monkey",];

      echo '----練習問題34----'.'<br>';
      $animals[] = "elephant";

      echo '----練習問題35----'.'<br>';
      $animals[0] = "cat";

      echo '----練習問題36----'.'<br>';
      unset($animals['1']);
      var_dump($animals);

      echo '----練習問題37----'.'<br>';
      foreach($animals as $animal) {
        echo $animal;
        echo '<br>';
    }

    echo '----練習問題38----'.'<br>';
    foreach($animals as $animal) {
      if ($animal !== 'fox') {
          echo $animal;
          echo '<br>';
      }
  }

  ?>
</body>
</html>