<?php get_header(); ?>

<?php 
    
    while(have_posts()) {
        the_post();
    ?>
<h2 class="page-heading"><?php the_title(); ?></h2>
            <div id="post-container">
            <section id="blogpost">
            <div class="card">
                <div class="card-meta-blogpost">
                Posted by <?php the_author(); ?> at <?php the_time('F j, Y'); ?> 

                <?php if(get_post_type()=='post'){ ?>

                in <a href=""><?php echo get_the_category_list(', '); ?>

                 <?php } ?>

                <a href="#">Web Dev</a>
                </div>
                <div class="card-image">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php the_title(); ?>">
                </div>
                <div class="card-description">
                <p> <?php the_content();?></p>
                </div>
            </div>
    
            <div id="comments-section">
             <?php 
             
            $fields =  array(

                'author' =>
                    '<input placeholder="Name" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
                    '" size="30"' . $aria_req . ' />',

                'email' =>
                    '<input placeholder="Email" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                    '" size="30"' . $aria_req . ' />',
                );
             $args = array(
                'title_reply' => 'Diga o que está pensando',
                'fields' => $fields,
                'comment_field' => '<textarea placeholder="Comentário" id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
                '</textarea>',
                'comments_notes_before'=> '<p class="comment-notes">Seu e-mail não será publicado, todos os campos são necessários.</p>',
             );
             comment_form($args);
             $comments_number = get_comments_number();
             if($comments_number != 0) {           
             ?>
             <div class="comments">
                 <h3>Comentários</h3>
                 <ol class="all-comments">
                 <?php
                    $comments = get_comments(array(
                        'post_id' => $post->ID,
                        'status' => 'approve'
                    ));

                    wp_list_comments(array(
                        'per_page' => 15
                    ),$comments);
                ?>
                 
                 </ol>
             </div>
            </div>
                <?php }?>
            </section>
            <?php }?>
            <aside id="sidebar">
            <?php dynamic_sidebar('main_sidebar');?>
            </aside>
        </div>
    
    
<?php get_footer(); ?>
