<?php 
/**
 * Arquivo de funções do tema NOME DO TEMA 
 *
 * @author Seu nome <seu@email> 
 * @subpackage template 
 */ 



/**
 * Definindo constantes para nao ficar utilizando a função get_bloginfo() a toda hora
 * Ajuda na performance 
 */ 
define('URL', get_bloginfo('url') . '/');
define('TEMPLATE', get_bloginfo('template_url') . '/');


/**
 * O código do seu google analytics 
 */ 
define('GA', 'UA-XXXXX-X');



/**
 * Variavel global pagina 
 * Utilizada para carregar CSS e JS específicos da paginas internas 
 * Ver exemplo no arquivo single.php 
 */ 
global $pagina;
$pagina['css']       = array(); # utilizado para CSS especificos de internas 
$pagina['js']        = array(); # utilizado para novos arquivos JS 
$pagina['header']    = array(); # utilizado pra novas meta tags ou algo do tipo no header 
$pagina['analytics'] = array(); # utilizado para marcar conversões no GA 


/**
 * Suporte para imagens destacas no post 
 */ 
add_theme_support('post-thumbnails');


/**
 * Registrando a primeira sidebar 
 */ 
register_sidebar( array(
    'name'          => 'Sidebar 1', 
    'id'            => 'sidebar-1', 
    'description'   => 'Conteúdo da sidebar', 
    'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">', 
    'after_widget'  => '</div>', 
    'before_title'  => '<h3 class="sidebar-widget-title">', 
    'after_title'   => '</h3>'
) );



/**
 * Removendo o WP generator 
 */ 
remove_action('wp_head', 'wp_generator');