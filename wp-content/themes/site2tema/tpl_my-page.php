<?php
/*
Template Name: Мой шаблон страницы
*/
?>

<!-- Здесь html/php код шаблона -->
<?php get_header(); ?>
<div class="content-wrapper">
      <div class="vertical-block1">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="block1">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          <div class="content-wrap">
            <div class="content-header">
              <div class="data">
                <p class="dec">DEC</p>
                <p class="l12">12</p>
              </div>
              <div class="title-wrap">
                <a href="<?php the_permalink(); ?>"><p class="title"><?php echo get_the_title()?></p></a>
                <?php 
                  $category = get_the_category();
                  $category_name = $category[0]->cat_name;
                  $categoryId = $category[0]->cat_ID;
                ?>
                <p class="description">Written by: <?php the_author_posts_link(); ?>, in Category <a href="<?php echo get_category_link( $categoryId ); ?>"><?php echo $category_name ?></a></p>
              </div>
            </div>
            <div class="text-news">
              <p class="text"><?php echo get_the_content()?></p>
          </div>
          </div>
        </div>
        <?php endwhile; else: ?>
          <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
        <div class="pagination-wrap">
        <?php
          $args = array(
            'show_all'     => False, // показаны все страницы участвующие в пагинации
            'end_size'     => 1,     // количество страниц на концах
            'mid_size'     => 1,     // количество страниц вокруг текущей
            'prev_next'    => True,  // выводить ли боковые ссылки "предыдущая/следующая страница".
            'prev_text'    => __('<'),
            'next_text'    => __('>'),
            'add_args'     => False,
            'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
            'screen_reader_text' => __( 'Posts navigation' ),
          );
         the_posts_pagination( $args ); ?>
        </div>
      </div>
    </div>
<?php get_footer(); ?>
