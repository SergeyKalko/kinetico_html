<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php bloginfo (); ?></title>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo (template_url); ?>/css/main.css">
</head>
<!--<script>
  alert( 'Жекуш, иди дрочи)' );
</script>-->
<body>

  <div class="main-wrap">
    <div class="header">
      <ul class="main-menu">
        <li><a href="#">Login</a></li>
        <li><a href="#">Register</a></li>
        <li><img title="cart" src="<?php bloginfo (template_url); ?>/img/cart.png" alt="tut cart)"><a href="#"><span>4</span>items in cart</a></li>
      </ul>
    </div>
    <div class="menu-wrap">
      <p class="gear"><img title="gear" src="<?php bloginfo (template_url); ?>/img/gear.png" alt="tut gear)"></p>
      <ul>
        <li><a href="#">HOME</a></li>
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">BLOG</a></li>
        <li><a href="#">SHOP</a></li>
        <li><a href="#">CONTACT</a></li>
      </ul>
    </div>
    <div class="blog">
      <p class="big-blog">BLOG</p>
      <p class="text-blog">Writing about awesomness</p>
    </div>
    <div class="content-wrapper">
      <div class="vertical-block1">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="block1">
          <img title="block1" src="<?php bloginfo (template_url); ?>/img/block1.png" alt="tut block1)">
          <div class="content-wrap">
            <div class="content-header">
              <div class="data">
                <p class="dec">DEC</p>
                <p class="l12">12</p>
              </div>
              <div class="title-wrap">
                <p class="title"><?php echo get_the_title()?></p>
                <p class="description">Written by <a href="#">JohnPixle</a>, in Category <a href="#"><?php $category = get_the_category(); 
echo $category[0]->cat_name; ?></a></p>
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
    <div class="footer">
      <div class="footer-wrap">
        <div class="footer-block1">
          <p class="footer-title"><img class="gopa" title="gear2" src="<?php bloginfo (template_url); ?>/img/gear2.png" alt="tut gear2)">KINETICO</p>
          <div class="text-block1">Kinetico is a simple and elegant
            commerce theme. Easy to customize, responsive friendly, with a digital 
            product orientation.</div>
        </div>
        <div class="tags-wrap">
          <p class="footer-title">TAGS</p>
          <div class="a-wraps">
            <div class="tags-block1">
              <p>Technology<a href="#">43</a></p>
              <p>Digital Painting<a href="#">54</a></p>
              <p>Photoshop<a href="#">12</a></p>
              <p>App design <a href="#">27</a></p>
            </div>
            <div class="tags-block2">
              <p>Web<a href="#">123</a></p>
              <p>Abstract<a href="#">4</a></p>
              <p>Themes<a href="#">2</a></p>
              <p>Freebies<a href="#">87</a></p>
            </div>
          </div>
        </div>
        <div class="foto-wrap">
          <p class="footer-title">FLICKR PHOTOSTREAM</p>
          <div class="foto">
            <img class="image" title="photo_1" src="<?php bloginfo (template_url); ?>/img/photo_1.png" alt="tut photo_1)">
            <img class="image" title="photo_2" src="<?php bloginfo (template_url); ?>/img/photo_2.png" alt="tut photo_2)">
            <img class="image" title="photo_3" src="<?php bloginfo (template_url); ?>/img/photo_3.png" alt="tut photo_3)">
            <img class="image" title="photo_4" src="<?php bloginfo (template_url); ?>/img/photo_4.png" alt="tut photo_4)">
            <img class="image" title="photo_5" src="<?php bloginfo (template_url); ?>/img/photo_5.png" alt="tut photo_5)">
            <img class="image" title="photo_6" src="<?php bloginfo (template_url); ?>/img/photo_6.png" alt="tut photo_6)">
          </div>
        </div>
        <div class="tweets-wrap">
          <p class="footer-title">LATEST TWEETS</p>
          <div class="tweets">
            <div class="tweet-1">
              <p><span>@JohnPixle</span>Hey what about trying our new set of icons? they are great for the retina display!<a href="#">http://shja.dhs</a></p>
              <p class="time">23 mins ago</p>
            </div>
            <div class="tweet-2">
              <p><span>@ThemeForest </span>Ok, I think it works now. Thanks.</p>
              <p class="time">23 mins ago</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="info">
  <p><span>COPYRIGHT 2016</span>- KINETICO</p>
  </div>
</body>
</html>
