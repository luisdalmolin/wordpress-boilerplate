<?php 
/**
 * Pagina inicial do template 
 *
 * @author Seu nome <seu@email> 
 * @subpackage template 
 */ 


// header 
get_header();


// posts 
while( have_posts() ) : 
    the_post();
    ?>
    <div class="post">
        <div class="post-title">
            <h2>
                <a href="<?php the_permalink() ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
        </div><!-- .post-title --> 

        <div class="post-content">
            <?php 
            // resumo do conteudo (http://codex.wordpress.org/Function_Reference/the_excerpt)
            the_excerpt();
            ?> 
        </div><!-- .post-content --> 
    </div><!-- .post --> 
    <?php 
endwhile;


// footer 
get_footer();