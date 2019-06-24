<?php get_header(); ?>
        <a href="<?php echo site_url('/blog'); ?>">
                <h2 class="page-heading">Blogs</h2>
            </a>
            <section>
            <?php

            while (have_posts()){
                the_post();
            
        ?>
            <div class="card">
                <div class="card-image">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Imagem do post">
                </div>
                <div class="card-description">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <div class="card-meta">
                    Posted By <?php the_author(); ?> at<span> <?php the_time('F j, Y'); ?></span> in <a href=""><?php echo get_the_category_list(', '); ?></a>
                    </div>
                    <p>
                    <?php echo wp_trim_words(the_excerpt(), 30) ; ?>
                    </p>
                    <a href="<?php the_permalink(); ?>"class="btn-readmore">Leia mais</a>
                </div>
            </div>
        
            <?php } wp_reset_query(); ?>
            </section>

            <div class="pagination">
             <?php echo paginate_links(); ?> 
            </div>
  
<body>
<?php get_footer(); ?>

<html>