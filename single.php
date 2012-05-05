<?php 
/**
 * Pagina do post 
 *
 * @author Seu nome <seu@email> 
 * @subpackage template 
 */ 


// buscando as infos do POST 
the_post();

/* 
    # Exemplos de utilização 

    // CSS, JS e headers adicionais 
    global $pagina;
    $pagina['css'][] = 'single.css';
    $pagina['js'][]  = TEMPLATE . 'js/pages/single.js';

    // Pode se setar tags Open Graph, por exemplo 
    $pagina['header'][] = '<meta property="og:title" content="<?php the_title(); ?>" />';
*/ 