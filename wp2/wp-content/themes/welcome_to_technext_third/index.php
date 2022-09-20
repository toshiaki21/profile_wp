<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./reset.css">
  <link rel="stylesheet" href="./style.css">
  <title>Welcome to TechNext</title>
</head>
<body>
  <header>
    <!-- ヘッダーレフト -->
    <div class="header-left">
      <img src="./img/logo.png" alt="logo">
    </div>
    <!-- ヘッダーライト -->
    <input type="checkbox" id="hamburger">
    <label class="hamburger" for="hamburger">
      <span class="pate"></span>
    </label>
    <div class="header-right">
      <ul>
        <li><a href="#htmlcss">HTML&CSS</a></li>
        <li><a href="#javascript">Javascript</a></li>
      </ul>
    </div>
  </header>
  <main>
    <section class="kv">
      <div class="title-wrap">
        <h1 class="main-title">Welcome to TechNext</h1>
        <p class="main-subtitle">仕事しながら、遊びながら、プログラミングを学ぼう！<br>沖縄で新しい一歩踏み出しませんか？</p>
      </div>
    </section>
    <section class="container-wrap" id="htmlcss">
      <h2 class="subtitle">HTML&CSS</h2>
      <div class="container">
        <img src="./img/programming.jpg" alt="programming">
        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod debitis repellendus unde officia eos molestias quaerat cum provident corrupti veritatis, esse, ipsam totam sapiente cumque ullam ab quia minus velit?</p>
      </div>
    </section>
    <section class="container-wrap" id="javascript">
      <h2 class="subtitle">Javascript</h2>
      <div class="container">
        <img src="./img/javascript.png" alt="Javascript">
        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod debitis repellendus unde officia eos molestias quaerat cum provident corrupti veritatis, esse, ipsam totam sapiente cumque ullam ab quia minus velit?</p>
      </div>
    </section>
  </main>
  <footer>
    <span>All rights reserved <small>&copy;</small>TechNext</span>
  </footer>
</body>
</html>