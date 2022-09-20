<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <title>Welcome to TechNext</title>

<?php wp_head(); ?>

</head>
<body>
  <header>
    <!-- ヘッダーレフト -->
    <div class="header-left">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
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