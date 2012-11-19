<?php 
/**
 * Footer do seu template WP 
 *
 * @author Seu nome <seu@email> 
 * @subpackage template 
 */ 
?>

        </section><!-- .content --> 

        <footer class="footer">
            
        </footer><!-- .footer --> 
    </div><!-- .container --> 

    <?php 
    // footer do wordpress 
    wp_footer();
    ?> 

    <!-- jQuery --> 
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript">window.jQuery || document.write('<script src="<?php echo TEMPLATE ?>js/libs/jquery.js"><\/script>')</script> 
    <script type="text/javascript" src="<?=TEMPLATE?>js/pages/script.js"></script>

    <?php 
    // buscando os JS adicionais 
    global $pagina;
    foreach( $pagina['js'] as $js ) : 
        ?>
        <script type="text/javascript" src="<?=$js?>"></script>
        <?php 
    endforeach;
    ?>

    <script type="text/javascript">
    // analytics 
    var _gaq=[['_setAccount','<?=GA?>'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));

    <?php 
    // conversões no GA 
    foreach( $pagina['analytics'] as $conversao )
    {
        echo $conversao;
    }
    ?>
    </script>
</body>
</html>