<body>
<?php get_header(); ?>

<html>
<div id="banner">
        <h2>Leonardo Daiub</h2>
        <h1>Desenvolvedor Web e Mobile Freelancer</h1>
        <h2>Quer um site bonito como este para impressionar seus clientes? 
            Entre em contato clicando no botão abaixo!
        </h2>
        <button class="botao-contato"><a href="<?php echo site_url('/contact'); ?>">Entre em contato</a></button>
    </div>
    <main>
        <a href="<?php echo site_url('/projects'); ?>">
            <h2 class="section-heading">Projetos</h2>
        </a>
        <section>

        <?php
            $args = array(
                'post_type'=> 'project',
                'posts_per_page' => 2
            );

            $projectposts = new WP_Query($args);

            while ($projectposts-> have_posts()){
                $projectposts->the_post();
            
        ?>
            <div class="card">
                <div class="card-image">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Imagem do projeto">
                </div>
                <div class="card-description">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <p>
                    <?php echo wp_trim_words(the_excerpt(), 30) ; ?>
                    </p>
                    <a href="<?php the_permalink(); ?>"class="btn-readmore">Leia mais</a>
                </div>
            </div>
        
            <?php }wp_reset_query(); ?>


        </section>
        <a href="<?php echo site_url('/blog'); ?>">
                <h2 class="section-heading">Blogs</h2>
            </a>
            <section>
            <?php
            $args = array(
                'post_type'=> 'post',
                'posts_per_page' => 2
            );

            $blogpost = new WP_Query($args);

            while ($blogpost-> have_posts()){
                $blogpost->the_post();
            
        ?>
            <div class="card">
                <div class="card-image">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Imagem do post">
                </div>
                <div class="card-description">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <p>
                    <?php echo wp_trim_words(the_excerpt(), 30) ; ?>
                    </p>
                    <a href="<?php the_permalink(); ?>"class="btn-readmore">Leia mais</a>
                </div>
            </div>
        
            <?php }wp_reset_query(); ?>
            </section>
    </main>
<body>
<?php get_footer(); ?>

<html>