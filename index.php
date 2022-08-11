<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Brand_New
 * @since Brand New 1.0
 */

get_header();
?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">

    <?php
    if ( have_posts() ) {
      // Load posts loop.
      while ( have_posts() ) {
        the_post();
        $link = get_permalink();
        echo "<div>";
        the_title("<h2><a href=$link>","</a></h2>");
        the_content();
        echo "</div>";
      }
    } else {

    }
    ?>

    </main><!-- .site-main -->
  </div><!-- .content-area -->

<?php
	get_footer();
