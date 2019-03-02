<?php get_header(); ?>

  <div id="front-page" class="container">

    <section class="section">
      <h1>Hi, I'm Shravan</h1>
      <div class="lead">I’m a developer.</div>
    </section>

<!--    <section class="section">-->
<!--      <blockquote class="details">-->
<!--       test <cite>&mdash; Web Developer</cite>-->
<!--      </blockquote>-->
<!--    </section>-->

    <section class="section">
      <h2>Latest Posts <a class="view-all" href="<?php echo site_url(); ?>/blog">View all</a></h2>
      <?php $args = array(
        'order' => 'desc',
        'orderby' => 'publish_date',
        'posts_per_page' => '5',
      );

      $latest = new WP_Query($args);

      if ($latest->have_posts()) :
        while ($latest->have_posts()) :
          $latest->the_post();
          get_template_part('content', get_post_format());
        endwhile;
      endif;
      wp_reset_postdata(); ?>

    </section>

<!--    <section class="section">-->
<!--      <h2>Most Popular</h2>-->
<!--      --><?php //$args = array(
//        'order' => 'desc',
//        'posts_per_page' => '9',
//        'category_name' => 'Popular',
//      );
//
//      $popular = new WP_Query($args);
//
//      if ($popular->have_posts()) :
//        while ($popular->have_posts()) :
//          $popular->the_post();
//          get_template_part('content', get_post_format());
//        endwhile;
//      endif;
//      wp_reset_postdata(); ?>
<!---->
<!--    </section>-->

<!--    <section id="projects" class="section">-->
<!--      <h2>Open Source Projects</h2>-->
<!--      <a class="post" href="https://techieshravan.github.io/primitive">-->
<!--        <div class="post-thumbnail">-->
<!--          <i class="fas fa-fire icon primitive-icon"></i>-->
<!--        </div>-->
<!--        <div class="post-title">Primitive</div>-->
<!--        <div class="post-description">CSS framework that provides minimalist, browser-consistent styling for buttons,-->
<!--          forms, tables, lists, and fonts.-->
<!--        </div>-->
<!--      </a>-->
<!--      <a class="post" href="https://github.com/techieshravan/laconia">-->
<!--        <div class="post-thumbnail">-->
<!--          <i class="fas fa-sun icon laconia-icon"></i>-->
<!--        </div>-->
<!--        <div class="post-title" target="_blank">Laconia</div>-->
<!--        <div class="post-description">A modern MVC application written from scratch in plain PHP without libraries or-->
<!--          frameworks.-->
<!--        </div>-->
<!--      </a>-->
<!--      <a class="post" href="https://techieshravan.github.io/new-moon">-->
<!--        <div class="post-thumbnail">-->
<!--          <img src="--><?php //echo site_url(); ?><!--/wp-content/uploads/newmoon.png" alt="New Moon Code Theme" height="30"-->
<!--               width="30">-->
<!--        </div>-->
<!--        <div class="post-title">New Moon</div>-->
<!--        <div class="post-description">The undisputed world's best code theme, optimized for front and back end web-->
<!--          development.-->
<!--        </div>-->
<!---->
<!--      </a>-->
<!--      <a class="post" href="https://github.com/techieshravan/daylight">-->
<!--        <div class="post-thumbnail">-->
<!--          <i class="fab fa-wordpress icon"></i>-->
<!--        </div>-->
<!--        <div class="post-title">daylight</div>-->
<!--        <div class="post-description">The source code of this website.</div>-->
<!--      </a>-->
<!--    </section>-->
<!---->
<!--    <section class="section">-->
<!--      <h2>Publications-->
<!--        <a class="view-all" href="--><?php //echo site_url(); ?><!--/publications">View all</a>-->
<!--      </h2>-->
<!--      --><?php //$args = array(
//        'post_type' => 'publications',
//        'order' => 'desc',
//        'posts_per_page' => '5',
//      );
//
//      $publications = new WP_Query($args);
//
//      if ($publications->have_posts()) : while ($publications->have_posts()) : $publications->the_post(); ?>
<!---->
<!--        <a class="post" id="post---><?php //the_ID(); ?><!--" href="--><?php //echo get_the_content(); ?><!--" target="_blank">-->
<!--          --><?php //if (get_post_thumbnail_id()) : ?>
<!--            <div class="post-thumbnail">-->
<!--              <img src="--><?php //the_post_thumbnail_url('thumbnail'); ?><!--" alt="--><?php //the_title(); ?><!--" height="30"-->
<!--                   width="30">-->
<!--            </div>-->
<!--          --><?php //endif; ?>
<!--          <div class="post-title">--><?php //the_title(); ?><!--</div>-->
<!--          <span class="post-date"><time>--><?php //the_time('F j, Y'); ?><!--</time></span>-->
<!--        </a>-->
<!---->
<!--      --><?php //endwhile; endif;
//      wp_reset_postdata(); ?>
<!---->
<!--    </section>-->
<!---->
<!--    <section class="section">-->
<!--      <h2>Speaking</h2>-->
<!--      <h5>WordCamp Chicago</h5>-->
<!--      <a class="post" href="https://wordpress.tv/2017/08/30/Shravan-rascia-how-to-develop-a-wordpress-theme-from-scratch/"-->
<!--         target="_blank">-->
<!--        <div class="post-thumbnail">-->
<!--          <i class="fab fa-wordpress icon"></i>-->
<!--        </div>-->
<!--        <div class="post-title">How to Develop a WordPress Theme from Scratch</div>-->
<!--        <span class="post-date"><time>April 30, 2017</time></span>-->
<!--      </a>-->
<!--    </section>-->
<!---->
<!--    <section class="section">-->
<!--      <h2>Podcasts</h2>-->
<!--      <h5>Egghead.io</h5>-->
<!--      <a class="post" href="https://egghead.io/podcasts/switching-careers-and-learning-in-public-with-Shravan-rascia"-->
<!--         target="_blank">-->
<!--        <div class="post-thumbnail">-->
<!--          <img src="--><?php //echo site_url(); ?><!--/wp-content/uploads/egghead-150x150.png" alt="--><?php //the_title(); ?><!--"-->
<!--               height="30" width="30">-->
<!--        </div>-->
<!--        <div class="post-title">Switching Careers and Learning in Public - with Joel Hooks</div>-->
<!--        <span class="post-date"><time>December 13, 2018</time></span>-->
<!--      </a>-->
<!--    </section>-->
<!---->
<!--    <section class="section">-->
<!--      <h2>Newsletter</h2>-->
<!--      <p>Get updated when I create new content.<br> Unsubscribe whenever. Never any spam.</p>-->
<!--      <form id="newsletter-form" class="newsletter-form" action="https://newsletter.theshravan.net/sendy/subscribe"-->
<!--            method="POST" accept-charset="utf-8" target="_blank">-->
<!--        <input type="email" name="email" required id="email-sidebar" class="email" placeholder="Email address"-->
<!--               pattern="[a-zA-Z0-9._\-]+@[a-zA-Z0-9.\-]+\.[a-zA-Z]{2,4}">-->
<!--        <input type="hidden" name="list" value="P2bfC2WL3TvnTWEmucMbbg">-->
<!--        <input type="submit" name="submit" id="submit-sidebar" value="Submit">-->
<!--      </form>-->
<!--    </section>-->
  </div>

<?php get_footer();