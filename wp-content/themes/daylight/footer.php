</main>

<footer class="footer">
  <div class="container">
    <small>Made by <strong>Shravan Kumar Kasagoni</strong></small>
  </div>
</footer>

<?php
wp_footer();

if (is_front_page()) : ?>
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "WebSite",
      "url": "<?php echo site_url(); ?>",
      "name": "<?php echo get_bloginfo( 'name'); ?> - <?php echo get_bloginfo( 'description' ); ?>",
      "author": {
        "@type": "Person",
        "name": "Shravan Kumar Kasagoni"
      },
      "description": "Web developer, designer, and writer. Shravan breaks down complex concepts in a clear, simple way for all skill levels.",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "<?php echo site_url(); ?>/?s={search_term}",
        "query-input": "required name=search_term"
      }
    }
  </script>
<?php endif; ?>

<?php if (is_page('me')) : ?>
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Person",
      "image": "<?php echo site_url(); ?>/wp-content/uploads/Shravansmall.jpg",
      "jobTitle": "Web developer",
      "name": "Shravan Kumar Kasagoni",
      "gender": "female",
      "url": "<?php echo site_url(); ?>",
      "sameAs": [
        "https://github.com/techieshravan",
        "https://twitter.com/techieshravan"
      ]
    }
  </script>
<?php endif; ?>

<?php if (is_singular() && !is_singular('work') && !is_front_page()) :
  if (have_posts()) : while (have_posts()) : the_post(); ?>
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "TechArticle",
        "headline": "<?php the_title(); ?>",
        "proficiencyLevel": "Beginner/intermediate",
        "image": "<?php echo the_post_thumbnail_url(); ?>",
        "author": {
          "@type": "Person",
          "name": "Shravan Kumar Kasagoni"
        },
        "genre": "<?php foreach((get_the_category()) as $category) { echo $category->cat_name . ', '; } ?>",
        "keywords": "<?php
        $posttags = get_the_tags();
        if ($posttags) {
            foreach($posttags as $tag) {
            echo $tag->name . ', '; 
            }
        }
        ?>",
        "url": "<?php the_permalink(); ?>",
        "datePublished": "<?php the_time( 'Y-m-d' ); ?>",
        "description": "<?php echo esc_html(get_the_excerpt()); ?>"
      }
    </script>
  <?php
  endwhile; endif;
endif; ?>

</body>

</html>