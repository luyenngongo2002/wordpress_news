<?php
/*
	Template Name: Home Page
*/
get_header(); ?>
<main>
  <div class="content">
    <div class="top_content">
      <div class="top_content_left">
        <?php
        // hướng danh : ttps://www.hoangweb.com/wordpress/hien-thi-bai-viet-ngau-nhien-trong-wordpress#:~:text=Hi%E1%BB%83n%20th%E1%BB%8B%20b%C3%A0i%20vi%E1%BA%BFt%20ng%E1%BA%ABu%20nhi%C3%AAn%20s%E1%BB%AD%20d%E1%BB%A5ng%20plugin&text=Sau%20khi%20k%C3%ADch%20ho%E1%BA%A1t%2C%20b%E1%BA%A1n,thay%20%C4%91%E1%BB%95i%20%26%20nh%E1%BA%A5n%20n%C3%BAt%20Save.
        $args = array(
          'posts_per_page' => 1,  
          'post_type' => 'post'
        );
        $featured = new WP_Query($args);
        ?>
        <div class="random-post">
          <?php $myposts = get_posts($args);
          foreach ($myposts as $post) : setup_postdata($post); ?>
            <div class="entry-thumbnail">
              <?php congbio_thumbnail('large') ?>
            </div>
            <div class="entry-header">
              <?php congbio_entry_header(); ?>
            </div>
            <!-- <div class="entry-content">
              <?php congbio_entry_content(); ?>
              <?php (is_single() ? congbio_entry_tag() : ''); ?>
            </div> -->
          <?php endforeach;
          wp_reset_postdata(); ?>

        </div>

        <?php
        $args = array(
          'posts_per_page' => 10,  //tiêu đề
          'orderby' => 'rand',
          'post_type' => 'post'
        );
        $featured = new WP_Query($args);
        ?>
        <div class="random_title">
          <?php
          if ($featured->have_posts())
            while ($featured->have_posts()) : $featured->the_post();
              $do_not_duplicate = $post->ID;
          ?>
            <h3 class="title">
              <a href="<?php echo the_permalink() ?>"><?php echo the_title() ?></a>

            </h3>

          <?php
            endwhile;
          ?>



        </div>
      </div>
      <div class="top_content_right">

        <div class="home_newpost">

          <?php $postquery = new WP_Query(array('
          posts_per_page' => '3',
          'orderby' => 'rand'));
          if ($postquery->have_posts()) {
            while ($postquery->have_posts()) : $postquery->the_post();
              $do_not_duplicate = $post->ID;
          ?>
              <div class="post_format">
                <div class="post_topimg_dowcontent">
                  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="entry-thumbnail">
                      <?php congbio_thumbnail('large') ?>
                    </div>
                    <div class="entry-header">
                      <?php congbio_entry_header(); ?>
                    </div>
                    <div class="entry-content">
                      <?php congbio_entry_content(); ?>
                      <?php (is_single() ? congbio_entry_tag() : ''); ?>
                    </div>
                  </article>
                </div>
              </div>
            <?php endwhile;
            ?>
          <?php


          } ?>


        </div>

        <div class="home_newpost">
          <h2 class="right_header">
            Mới cập nhật
          </h2>

          <?php $postquery = new WP_Query(array('posts_per_page' => '7'));
          if ($postquery->have_posts()) {
            while ($postquery->have_posts()) : $postquery->the_post();
              $do_not_duplicate = $post->ID;
          ?>
              <div class="post_format">
                <div class="post_lefimg_rightcontent">
                  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="entry-thumbnail">
                      <?php congbio_thumbnail('large') ?>
                    </div>


                    <div class="entry-content">
                      <h1 class="header-title">

                        <?php congbio_entry_header(); ?>
                      </h1>
                      <!-- <?php congbio_entry_content(); ?> -->
                      <?php (is_single() ? congbio_entry_tag() : ''); ?>
                    </div>
                  </article>
                </div>
              </div>
            <?php endwhile;
            ?>
          <?php


          } ?>


        </div>
      </div>

    </div>

  </div>
</main>