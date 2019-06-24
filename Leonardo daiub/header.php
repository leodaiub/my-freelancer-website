<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leonardo Daiub - Desenvolvedor Web e Mobile</title>
    <?php wp_head(); ?>
</head>
<body>
    <div id="slide-out-menu">
            <ul>
                    <li>
                        <a href="<?php echo site_url(''); ?>"
                            <?php if(is_front_page()) echo 'class="active"' ?>
                        >Início</a>
                           
                    </li>
                    <li>
                        <a href="<?php echo site_url('/blog'); ?>"
                         <?php if(is_page('blog')) echo 'class="active"' ?>
                        >Blog</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('/projects'); ?>"
                         <?php if(is_front_page()) echo 'class="active"' ?>
                        >Projetos</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('/about'); ?>"
                            <?php if(is_page('about')) echo 'class="active"' ?>
                        >Sobre mim</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('/contact'); ?>"
                         <?php if(is_page('about')) echo 'class="active"' ?>
                        >Contato</a>
                    </li>
                   <div class="searchbox-slide-menu">
                       <?php get_search_form(); ?>
                   </div>
                </ul>
    </div>
    <nav>
        <div id="logo-img">
            <a href="<?php echo site_url(''); ?>">
                <p>< LEONARDO DAIUB /> </p>
            </a>
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li>
                <a href="<?php echo site_url(''); ?>"  <?php if(is_front_page()) echo 'class="active"' ?>>Início</a>   
            </li>
            <li>
                <a href="<?php echo site_url('/blog'); ?>"  <?php if(get_post_type() == 'post' ) echo 'class="active"' ?>>Blog</a>
            </li>
            <li>
                <a href="<?php echo site_url('/projects'); ?>"  <?php if(get_post_type() == 'project' || is_page('projects')) echo 'class="active"' ?>>Projetos</a>
            </li>
            <li>
                <a href="<?php echo site_url('/about'); ?>"  <?php if(is_page('about')) echo 'class="active"' ?>>Sobre mim</a>
            </li>
            <li>
                <a href="<?php echo site_url('/contact'); ?>"  <?php if(is_page('contact')) echo 'class="active"' ?>>Contato</a>
            </li>
            <li>
                <div id="search-icon">
                    <i class="fas fa-search"></i>
                </div>
            </li>
        </ul>
    </nav>
    <div id="search-box">
        <?php get_search_form(); ?> 
    </div>
    
    <?php if(!is_front_page()){ ?>
        <main>
  <?php  } ?>