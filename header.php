<?php 
/**
 * Header do seu template WP 
 *
 * @author Seu nome <seu@email> 
 * @subpackage template 
 */ 
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes('html') ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes('html') ?>> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title><?php wp_title(); ?></title>
    
    <?php 
    // header do wordpress 
    wp_head();

    // buscando os headers adicionais 
    global $pagina;
    foreach( $pagina['header'] as $js ) : 
        ?>
        <script type="text/javascript" src="<?=$js?>"></script>
        <?php 
    endforeach;
    ?>

    <meta name="viewport" content="width=device-width" /> 
    <link rel="stylesheet" href="<?=TEMPLATE?>css/css.php?v=1&amp;f=<?php foreach( $pagina['css'] as $css ) echo $css . ','; ?>" /> 

    <!-- Modernizr --> 
    <script src="<?=TEMPLATE?>js/libs/modernizr.js"></script>
</head>
<body>
    <div class="container">
        <header class="header">
            
        </header><!-- .header --> 

        <section class="content">