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
      <div class="vertical-block2">
        <div class="connect">
          <p class="block-header">GET CONNECTED</p>
          <ul class="social-line">
            <li><a class="social social-1" href="#"></a></li>
            <li><a class="social social-2" href="#"></a></li>
            <li><a class="social social-3" href="http://twitter.com"></a></li>
            <li><a class="social social-4" href="http://www.facebook.com"></a></li>
            <li><a class="social social-5" href="#"></a></li>
            <li><a class="social social-6" href="#"></a></li>
          </ul>
          <div class="line"></div>
        </div>
        <div class="search">
          <p class="block-header">SEARCH</p>
          <p class="input"><input type="text" name="search" placeholder="Enter keyword & hit enter"></p>
          <div class="line"></div>
        </div>
        <div class="comments-wrap">
          <p class="block-header">LATEST COMMENTS</p>
          <div class="forum">
            <div class="post-wrap1">
              <div class="ava ava1"></div>
              <div class="comments">
                <p class="post-header"><span class="name">JohPixle</span>    2 hours ago</p>
                <p class="post">The Mouse did not notice this ques-<br>tion, but hurriedly went on. it contin-<br>ued, turning to Alice as it spoke.</p>
              </div>
            </div>
            <hr color="#e6e6e6"></hr>
            <div class="post-wrap2">
              <div class="ava ava2"></div>
              <div class="comments">
                <p class="post-header"><span class="name">Georg1976</span>    3 hours ago</p>
                <p class="post">I totally agree with that</p>
              </div>
            </div>
            <hr color="#e6e6e6"></hr>
            <div class="post-wrap3">
              <div class="ava ava3"></div>
              <div class="comments">
                <p class="post-header"><span class="name">Xena2</span>    3 hours ago</p>
                <p class="post">The Mouse did not notice this question, but hurriedly went on.</p>
              </div>
            </div>
          </div>
          <div class="line"></div>
        </div>
          <p class="block-header">POPULAR PRODUCTS</p>
          <div class="banner">
            <div class="banner-image"></div>
            <div class="banner-wrap">
              <p class="banner-title">Square box mockup pack</p>
              <p class="banner-content">10 product mockups</p>
              <div class="cena-wrap">
                <div class="cena">35,99</div>
                <p class="button"><input class="button-1" type="button" value="Add to cart"></input> 
              </div>
            </div>
          </div>
        </div>
      </div>
<?php get_footer(); ?>