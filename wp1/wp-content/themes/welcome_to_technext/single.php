<!-- ヘッダーの読み込み -->
<?php get_header(); ?>
  <main>
<!-- メインループの記載 -->
<?php  
  if (have_posts()):
    while(have_posts()):
      the_post();
?>
<h2 class="subtitle"><?php the_title(); ?> </h2>
<div class="container-wrap"><?php the_content(); ?></div>
   
<?php 
endwhile;
else : ?>
<section class="container-wrap" id="htmlcss">
<h2 class="subtitle">表示する記事がありません</h2>
</section>

<?php endif; ?>
</main>
 
<?php get_footer(); ?>