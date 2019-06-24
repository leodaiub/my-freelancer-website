<?php get_header(); ?>
        <a href="<?php echo site_url('/blog'); ?>">
                <h2 class="page-heading">Resultado de busca por: <?php echo get_search_query(); ?></h2>
            </a>

        <?php if(have_posts()){  ?>


        <?php if(get_post_type()=='post'){ ?>

                in <a href=""><?php echo get_the_category_list(', '); ?>

                 <?php } ?>

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
                    Posted By <?php the_author(); ?> at<span> <?php the_time('F j, Y'); ?></span> <?php if(get_post_type()=='post'){ ?>

                    in <a href=""><?php echo get_the_category_list(', '); ?>

                     <?php } ?>

                    </div>
                    <p>
                    <?php echo wp_trim_words(the_excerpt(), 30) ; ?>
                    </p>
                    <a href="<?php the_permalink(); ?>"class="btn-readmore">Leia mais</a>
                </div>
            </div>
        
            <?php } wp_reset_query(); ?>
            </section>
                    <?php } else { ?>

                        <div class="no-results">
                            <h2>Não encontramos nada aqui, será que não digitou algo errado?</h2>
                            <h3>Tente os links abaixo:</h3>
                            <ul>
                            <li>
                                <a href="<?php echo site_url(''); ?>">Inicio</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('/blog'); ?>">Blog</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('/projects'); ?>">Projetos</a>    
                            </li>
                            <li>
                                <a href="<?php echo site_url('/about'); ?>">Sobre Mim</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('/contact'); ?>">Contato</a>
                            </li>
                        </ul>
                        </div>

                    <?php }; ?>

            <div class="pagination">
             <?php echo paginate_links(); ?> 
            </div>
  
<body>
<?php get_footer(); ?>

<html>