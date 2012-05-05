# Wordpress Boilerplate 

Arquivos pré configurados para desenvolvimento de novos temas [Wordpress](http://www.wordpress.org).

## Carregando somente o que precisa e no lugar certo 
Para nåo precisar ficar carregando CSS's e JS's específicos de páginas internas em todas as páginas, existe a váriavel global `$pagina`. Abaixo exemplos de utilização.

```php 
<?php 
global $pagina;

// Js busca os arquivos diretamente da pasta css/ dentro do template 
$pagina['css'][] = 'single.css';

// O JS precisa do caminho completo, pois normalmente se usa JS de social media ou algo do tipo 
// Utilize as constantes TEMPLATE e URL para mais performance 
$pagina['js'][] = TEMPLATE . 'js/pages/single.js';
```

## Apenas uma requisição CSS 
Nesta requisição por exemplo, são carregados os arquivos `reset.css`, `style.css` e `single.css`. O arquivo `css.php` faz ainda o compress dos arquivos CSS.

```html 
<link rel="stylesheet" href="<?=TEMPLATE?>css/css.php?v=1&amp;f=single.css" /> 
``` 

Recomendado instalação dos seguintes plugins:
* [Wordpress SEO](http://wordpress.org/extend/plugins/wordpress-seo/)
* [W3 Total Cache](http://wordpress.org/extend/plugins/w3-total-cache/)

## Frameworks / Libraries utilizados 
* [HTML5 Boilerplate](http://html5boilerplate.com/)
* [Modernizr](http://modernizr.com/)

Mantenha seu Wordpress sempre atualizado!

Criado por [Luís Dalmolin](http://luisdalmolin.com.br)