<?php
/**
 * Fazendo a compressão dos arquivos CSS 
 *
 * @author Luís Dalmolin <luis.nh@gmail.com> 
 */ 
 
header('Content-type: text/css');

define('DIR', dirname(__FILE__) . '/', true);
ob_start('compress');

function compress($buffer)
{
    $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
    $buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
    return $buffer;
}


/**
 * Arquivos que estao em todas paginas 
 */ 
include_once(DIR . 'reset.css');
include_once(DIR . '../style.css');


/**
 * Arquivos passados por GET
 */
$arquivos = isset( $_GET['f'] ) ? $_GET['f'] : '';
$arquivos = explode(',', $arquivos);
if( is_array( $arquivos ) && count( $arquivos ) > 0 ) {
	foreach( $arquivos as $css ) {
		if( is_file( DIR . $css ) ) {
			include_once( DIR . $css );
        }
	}
}


ob_end_flush();