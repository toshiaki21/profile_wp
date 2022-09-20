<?php get_header(); ?>

  <main>
    <section class="kv">
      <div class="title-wrap">
        <h1 class="main-title">Welcome to TechNext</h1>
        <p class="main-subtitle">仕事しながら、遊びながら、プログラミングを学ぼう！<br>沖縄で新しい一歩踏み出しませんか？</p>
      </div>
    </section>

<?php 
if (have_posts()):
  while(have_posts()):
    the_post();
?>

    <section class="container-wrap">
      <h2 class="subtitle"><?php the_title(); ?></h2>

      <div class="container"> 

      <?php the_post_thumbnail(); ?>
<!-- 
        <img src="<?php //echo get_template_directory_uri(); ?>/img/programming.jpg" alt="programming"> -->
        <p class="description"><?php the_excerpt(); ?></p>
      </div>
    </section>
    <!-- <section class="container-wrap" id="javascript">
      <h2 class="subtitle">Javascript</h2>
      <div class="container">
        <img src="<?php //echo get_template_directory_uri(); ?>/img/javascript.png" alt="Javascript">
        <p class="description"><?php //the_excerpt(); ?></p>
      </div>
    </section> -->
    <?php
    endwhile;
    else : ?>
    <section class="container-wrap" id="htmlcss">
      <h2 class="subtitle">表示する記事がありません</h2>
    </section>

     <?php endif; ?> 


  </main>

  <?php get_footer(); ?>
 